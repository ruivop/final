DROP SCHEMA public CASCADE;
CREATE SCHEMA public;

GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO public;

DROP TABLE IF EXISTS Administrator;

DROP TABLE IF EXISTS Authenticated_User;

DROP TABLE IF EXISTS Category;

DROP TABLE IF EXISTS City;

DROP TABLE IF EXISTS Comments;

DROP TABLE IF EXISTS Country;

DROP TABLE IF EXISTS Event;

DROP TABLE IF EXISTS Event_Content;

DROP TABLE IF EXISTS Guest;

DROP TABLE IF EXISTS Hosts;

DROP TABLE IF EXISTS JoinPoll_UnitToAuthenticated_User;

DROP TABLE IF EXISTS Localization;

DROP TABLE IF EXISTS Meta_Event;

DROP TABLE IF EXISTS Notification;

DROP TABLE IF EXISTS Notification_Intervinient;

DROP TABLE IF EXISTS Paid_Event;

DROP TABLE IF EXISTS Poll;

DROP TABLE IF EXISTS Poll_Unit;

DROP TABLE IF EXISTS Rate;

DROP TABLE IF EXISTS Saved_Event;

DROP TABLE IF EXISTS Ticket;

DROP TABLE IF EXISTS Users;

DROP TABLE IF EXISTS Host;

DROP TABLE IF EXISTS Type_of_Ticket;

CREATE TYPE notification_type AS ENUM(
    'userReport', 'eventReport', 'contentReport', 'eventCommented', 'eventCreatedPoll', 'eventRated', 'eventChangedLocal', 'eventChangedDate', 'eventChangedName', 'eventInvitation', 'eventCanceled', 'eventAllSoldTickets', 'eventReminder', 'userSentEmail'
);

CREATE TYPE recurrence AS ENUM(
	'daily', 'weekly', 'once', 'annually', 'monthly', 'semester'
);

CREATE TYPE user_state AS ENUM(
	'notConfirmed', 'active', 'canceledAdmin', 'canceledUser'
);

CREATE FUNCTION XOR(bool,bool) RETURNS bool AS '
SELECT ($1 AND NOT $2) OR (NOT $1 AND $2);
' LANGUAGE 'sql';

CREATE TABLE public.Administrator
(
	administrator_id serial PRIMARY KEY,
	username varchar(20) UNIQUE NOT NULL,
	email varchar(254) UNIQUE NOT NULL,
	password varchar(200) NOT NULL,
	active boolean NOT NULL,
	CONSTRAINT min_size CHECK (LENGTH(username) >= 8 AND LENGTH(password) >= 8)
);

CREATE TABLE public.Users
(
	user_id serial PRIMARY KEY,
	first_name varchar(20) NOT NULL,
	last_name varchar(20) NOT NULL,
	email varchar(254) UNIQUE NOT NULL,
	birthdate date,
	nif int UNIQUE,
	CONSTRAINT min_size CHECK (LENGTH(first_name) >= 3 AND LENGTH(last_name) >= 2 AND length(nif::TEXT) = 9),
	CONSTRAINT valid_date CHECK (birthdate < current_date)
);


CREATE TABLE public.Authenticated_User
(
	user_id integer PRIMARY KEY,
	username varchar(20) UNIQUE NOT NULL,
	password varchar(200) NOT NULL,
	photo_url varchar(500),
	user_state user_state NOT NULL,
	FOREIGN KEY(user_id) REFERENCES Users(user_id),
	CONSTRAINT min_size CHECK (LENGTH(username) >= 4 AND LENGTH(password) >= 8)
);

CREATE TABLE public.Category
(
	category_id serial PRIMARY KEY,
	name varchar(1000) UNIQUE NOT NULL
);

CREATE TABLE public.Country
(
	country_id serial PRIMARY KEY,
	name varchar(50) UNIQUE NOT NULL
);

CREATE TABLE public.City
(
	city_id serial PRIMARY KEY,
	name varchar(100) NOT NULL,
	country_id integer,
	FOREIGN KEY(country_id) REFERENCES Country(country_id)
);

CREATE TABLE public.Localization
(	
	local_id serial PRIMARY KEY,
	latitude FLOAT NOT NULL,
	longitude FLOAT NOT NULL,
	street varchar(300),
	city_id INTEGER,
	UNIQUE(latitude, longitude),
	FOREIGN KEY(city_id) REFERENCES City(city_id)
);

CREATE TABLE public.Meta_Event
(
	meta_event_id serial PRIMARY KEY,
	name varchar(100) NOT NULL,
	description varchar(20000) NOT NULL,
	beginning_date timestamp NOT NULL,
	ending_date timestamp,
	meta_event_state boolean NOT NULL,
  photo_url varchar(500),
	free boolean NOT NULL,
	public boolean NOT NULL,
	owner_id integer NOT NULL,
	category_id integer NOT NULL,
	local_id integer NOT NULL,
	FOREIGN KEY(owner_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(category_id) REFERENCES Category(category_id),
	FOREIGN KEY(local_id) REFERENCES Localization(local_id),
	CONSTRAINT beginning_date CHECK (beginning_date > current_date)
);

CREATE TABLE public.Event
(
	event_id serial PRIMARY KEY,
	name varchar(1000) NOT NULL,
	description varchar(20000) NOT NULL,
	beginning_date timestamp NOT NULL,
	ending_date timestamp,
  event_state boolean NOT NULL,
	photo_url varchar(1000),
	free boolean NOT NULL,
  public boolean NOT NULL,
	meta_event_id integer NOT NULL,
	local_id integer NOT NULL,
	FOREIGN KEY(meta_event_id) REFERENCES Meta_Event(meta_event_id),
	FOREIGN KEY(local_id) REFERENCES Localization(local_id),
	CONSTRAINT beginning_date CHECK (beginning_date > current_date),
	CONSTRAINT end_date CHECK (ending_date > beginning_date)
);

CREATE TABLE public.Event_Content
(
	event_content_id serial PRIMARY KEY,
	user_id integer NOT NULL,
	event_id integer NOT NULL,
	FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(event_id) REFERENCES Meta_Event(meta_event_id)
);


CREATE TABLE public.Comments
(
	comment_id integer PRIMARY KEY,
	content varchar(10000),
	photo_url varchar(2000),
	comment_date timestamp NOT NULL DEFAULT now(),
	FOREIGN KEY(comment_id) REFERENCES Event_Content(event_content_id),
	CONSTRAINT valid_content CHECK (photo_url IS NOT NULL OR content IS NOT NULL)
);

CREATE TABLE public.Guest
(
	is_going boolean NOT NULL,
	user_id integer,
	event_id integer,
	PRIMARY KEY(user_id, event_id),
	FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(event_id) REFERENCES Meta_Event(meta_event_id)
);

CREATE TABLE public.Host
(
	user_id integer,
	meta_event_id integer,
	PRIMARY KEY(user_id, meta_event_id),
	FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(meta_event_id) REFERENCES Meta_Event(meta_event_id)
);

CREATE TABLE public.Notification
(
	notification_id serial PRIMARY KEY,
	notification_date timestamp NOT NULL DEFAULT now(),
	notification_type notification_type NOT NULL,
	checked boolean NOT NULL, 
	event_id integer,
	event_content_id integer,
	user_id integer,
	administrator_id integer,
	FOREIGN KEY(event_id) REFERENCES Meta_Event(meta_event_id),
	FOREIGN KEY(event_content_id) REFERENCES Event_Content(event_content_id),
	FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(administrator_id) REFERENCES Administrator(administrator_id),
	CONSTRAINT report CHECK ((notification_type IN ('userReport', 'contentReport', 'eventReport') AND administrator_id IS NOT NULL) OR notification_type NOT IN ('userReport', 'contentReport', 'eventReport') AND administrator_id IS NULL),
	CONSTRAINT valid_user CHECK (XOR(user_id IS NOT NULL, administrator_id IS NOT NULL))
);

CREATE TABLE public.Notification_Intervinient
(
	user_id integer,
	notification_id integer,
	PRIMARY KEY(user_id, notification_id),
	FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(notification_id) REFERENCES Notification(notification_id)
);

CREATE TABLE public.Poll
(
	poll_id integer PRIMARY KEY,
	poll_type integer NOT NULL,
	poll_date timestamp NOT NULL DEFAULT now(),
  FOREIGN KEY(poll_id) REFERENCES Event_Content(event_content_id)
);

CREATE TABLE public.Poll_Unit
(
	poll_unit_id serial PRIMARY KEY,
	name varchar(1000) NOT NULL,
	poll_id integer NOT NULL,
	FOREIGN KEY(poll_id) REFERENCES Poll(poll_id)
);

CREATE TABLE public.JoinPoll_UnitToAuthenticated_User
(
  user_id integer,
  poll_unit_id integer,
  PRIMARY KEY(user_id, poll_unit_id),
  FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
  FOREIGN KEY(poll_unit_id) REFERENCES Poll_Unit(poll_unit_id)
);

CREATE TABLE public.Rate
(
	event_content_id integer PRIMARY KEY,
	evaluation integer NOT NULL,
	FOREIGN KEY(event_content_id) REFERENCES Event_Content(event_content_id),
	CONSTRAINT check_evaluation CHECK (evaluation <= 10 AND evaluation > 0)
);

CREATE TABLE public.Saved_Event
(
	user_id integer,
	meta_event_id integer,
	PRIMARY KEY(user_id, meta_event_id),
	FOREIGN KEY(user_id) REFERENCES Authenticated_User(user_id),
	FOREIGN KEY(meta_event_id) REFERENCES Meta_Event(meta_event_id)
);

CREATE TABLE public.Type_of_Ticket
(
	type_of_ticket_id serial PRIMARY KEY,
	ticket_type varchar(1000) NOT NULL,
	price float NOT NULL,
	num_tickets integer NOT NULL,
	meta_event_id integer,
	event_id integer,
	FOREIGN KEY(meta_event_id) REFERENCES Meta_Event(meta_event_id),
	FOREIGN KEY(event_id) REFERENCES Meta_Event(meta_event_id),
	CONSTRAINT positive_price CHECK (price > 0),
	CONSTRAINT valid_num_tickets CHECK (num_tickets > 0),
	CONSTRAINT has_event CHECK (meta_event_id IS NOT NULL OR event_id IS NOT NULL)
);

CREATE TABLE public.Ticket
(
	ticket_id serial PRIMARY KEY,
	user_id integer NOT NULL,
	type_of_ticket_id integer NOT NULL,
	ticket_purchase_date Date,
	FOREIGN KEY(user_id) REFERENCES Users(user_id),
	FOREIGN KEY(type_of_ticket_id) REFERENCES Type_of_Ticket(type_of_ticket_id)
);


/* Verificar numero de bilhetes em stock quando se comprar bilhete*/

CREATE OR REPLACE FUNCTION buy_ticket() RETURNS TRIGGER AS
$BODY$
DECLARE
	num_total_tickets integer;
	num_sold_tickets integer;
BEGIN
	IF tg_op = 'INSERT' THEN
		SELECT type_ticket.num_tickets INTO num_total_tickets
		FROM Type_of_Ticket type_ticket
		WHERE new.type_of_ticket_id = type_ticket.type_of_ticket_id;

		SELECT count(*) INTO num_sold_tickets
		FROM Ticket t
		WHERE t.type_of_ticket_id = NEW.type_of_ticket_id;

		IF num_total_tickets <= num_sold_tickets THEN
			RAISE EXCEPTION 'Unable to sell ticket. No more tickets to sell. (%) (%)', num_total_tickets, num_sold_tickets;
		END IF;
	END IF;
	RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER buy_ticket
BEFORE INSERT ON Ticket
FOR EACH ROW
EXECUTE PROCEDURE buy_ticket();

/* Insere owner na tabela host do evento quando cria evento*/
CREATE OR REPLACE FUNCTION add_owner_as_host() RETURNS TRIGGER AS
$BODY$
BEGIN
	IF tg_op = 'INSERT' THEN
		INSERT INTO host(user_id, meta_event_id) VALUES (NEW.owner_id, NEW.meta_event_id);
	END IF;
	RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER add_owner_as_host
AFTER INSERT ON Meta_Event
FOR EACH ROW
EXECUTE PROCEDURE add_owner_as_host();

/*Delete Event Content*/

CREATE OR REPLACE FUNCTION delete_event_content() RETURNS TRIGGER AS
$BODY$
BEGIN
	IF tg_op = 'DELETE' THEN

		DELETE FROM Notification WHERE OLD.event_content_id = Notification.event_content_id;
		DELETE FROM Comments WHERE OLD.event_content_id = Comments.comment_id;
		DELETE FROM Rate WHERE OLD.event_content_id = Rate.event_content_id;
		DELETE FROM Poll WHERE OLD.event_content_id = Poll.poll_id;
	END IF;
	RETURN OLD;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER delete_event_content
BEFORE DELETE ON Event_Content
FOR EACH ROW
EXECUTE PROCEDURE delete_event_content();


/*Delete Poll*/

CREATE OR REPLACE FUNCTION delete_poll() RETURNS TRIGGER AS
$BODY$
BEGIN
	IF tg_op = 'DELETE' THEN

		DELETE FROM Poll_Unit WHERE OLD.poll_id = Poll_Unit.poll_id;

	END IF;
	RETURN OLD;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER delete_poll
BEFORE DELETE ON Poll
FOR EACH ROW
EXECUTE PROCEDURE delete_poll();

/*verifica se é possivel fazer update a um evento (visto que ja passou da data)*/
CREATE OR REPLACE FUNCTION change_event() RETURNS TRIGGER AS
$BODY$
DECLARE
	event_date TIMESTAMP;
BEGIN
	IF tg_op = 'UPDATE' THEN

		SELECT beginning_date INTO event_date
		FROM public.Event
		WHERE public.Event.event_id = OLD.event_id;

		IF event_date <= now() THEN
			RAISE EXCEPTION 'Event passed';
		END IF;

	END IF;
	RETURN OLD;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER change_event
BEFORE UPDATE ON public.Event
FOR EACH ROW
EXECUTE PROCEDURE change_event();


/*Blocks Administrator*/
CREATE OR REPLACE FUNCTION block_administrator() RETURNS TRIGGER AS
$BODY$
DECLARE
	num_total_admins INTEGER;
BEGIN
	IF tg_op = 'UPDATE' THEN

		IF NEW.active IS FALSE THEN

			SELECT COUNT(administrator_id) INTO num_total_admins
			FROM Administrator a
			WHERE a.active = true;

			IF num_total_admins <= 1 THEN
				RAISE EXCEPTION 'Unable to delete administrator. Just exists this one!';
			END IF;

		END IF;

	END IF;
	RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER block_administrator
BEFORE UPDATE OF active
ON Administrator
FOR EACH ROW
EXECUTE PROCEDURE block_administrator();


/*Adicionar Notification */
CREATE OR REPLACE FUNCTION add_notification() RETURNS TRIGGER AS
$BODY$
DECLARE
	isActive BOOLEAN;
BEGIN
	IF tg_op = 'INSERT' THEN

		SELECT active INTO isActive
		FROM Administrator
		WHERE administrator_id = NEW.administrator_id;

		IF isActive IS FALSE THEN
			RAISE EXCEPTION 'Cannot add Notification. Administrator does not exist';
		END IF;

	END IF;
	RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER add_notification
BEFORE INSERT	ON Notification
FOR EACH ROW
EXECUTE PROCEDURE add_notification();

CREATE OR REPLACE VIEW commentary AS
SELECT public.Comments.comment_id AS comment_id, public.Event_Content.event_id AS event_id, public.Event_Content.user_id AS maker
FROM public.Comments, public.Event_Content
WHERE public.Comments.comment_id = public.Event_Content.event_content_id;

CREATE OR REPLACE VIEW commentaryRecivers AS
SELECT public.Guest.user_id, commentary.comment_id, commentary.event_id
FROM commentary, public.Guest
WHERE commentary.event_id = public.Guest.event_id;

CREATE OR REPLACE VIEW commentaryHostRecivers AS
SELECT public.Host.user_id, commentary.comment_id, commentary.event_id
FROM commentary, public.Host
WHERE commentary.event_id = public.Host.meta_event_id;

/* Cria Notificaçao quando se cria um comentario */
CREATE OR REPLACE FUNCTION addNotificationCommented() RETURNS TRIGGER AS
$BODY$
BEGIN
	IF tg_op = 'INSERT' THEN
		INSERT INTO Notification(notification_type, checked, user_id, event_id, event_content_id)
		SELECT 'eventCommented', false, user_id, event_id, comment_id
		FROM commentaryRecivers
		WHERE commentaryRecivers.comment_id = NEW.comment_id AND user_id != (SELECT commentary.maker FROM commentary WHERE comment_id  = NEW.comment_id);
        
        INSERT INTO Notification(notification_type, checked, user_id, event_id, event_content_id)
        SELECT 'eventCommented', false, user_id, event_id, NEW.comment_id
        FROM commentaryHostRecivers
        WHERE commentaryHostRecivers.comment_id = NEW.comment_id AND user_id != (SELECT commentary.maker FROM commentary WHERE comment_id  = NEW.comment_id);
	END IF;
	RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER addNotificationCommented
AFTER INSERT ON Comments
FOR EACH ROW
EXECUTE PROCEDURE addNotificationCommented();


/* Cria Notificaçao quando se e convidado */
CREATE OR REPLACE FUNCTION addNotificationInviation() RETURNS TRIGGER AS
$BODY$
BEGIN
	IF tg_op = 'INSERT' THEN
		INSERT INTO Notification(notification_type, checked, user_id, event_id) VALUES('eventInvitation', false, NEW.user_id, NEW.event_id);
	END IF;
	RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER addNotificationInviation
AFTER INSERT ON Guest
FOR EACH ROW
EXECUTE PROCEDURE addNotificationInviation();

INSERT INTO public.category(name) VALUES ('none');
INSERT INTO public.category(name) VALUES ('arts');
INSERT INTO public.category(name) VALUES ('business');
INSERT INTO public.category(name) VALUES ('charity');
INSERT INTO public.category(name) VALUES ('food&drinks');
INSERT INTO public.category(name) VALUES ('music');

insert into public.users (first_name, last_name, email, nif) values ('Catarina', 'Correia', 'cat@gmail.com',    123456789);
insert into public.users (first_name, last_name, email, nif) values ('Maria', 'Joana', 'joana@gmail.com',    123456788);
insert into public.users (first_name, last_name, email, nif) values ('Laura', 'Joana', 'joanae@gmail.com',    423456788);


insert into public.authenticated_user (user_id, username, password, user_state) values (1, 'catarina24', '8bc5de83cf1daf79ed5b2f13f93d7c05d01d0388', 'active');
insert into public.authenticated_user (user_id, username, password, user_state) values (2, 'joana123', '8bc5de83cf1daf79ed5b2f13f93d7c05d01d0388', 'active');
insert into public.authenticated_user (user_id, username, password, user_state) values (3, 'joana13', '8bc5de83cf1daf79ed5b2f13f93d7c05d01d0388', 'active');

insert into country (name) VALUES ('Portugal');

insert into city (name, country_id) VALUES ('Porto', 1);

insert into localization (latitude, longitude, street, city_id) VALUES (22, 22, null, 1);

insert into meta_event (name, description, beginning_date, ending_date, meta_event_state, photo_url, free, public, owner_id, category_id, local_id) VALUES ('Teste', 'neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa', '2017-06-28 01:40:59.273000', null, false, null, true, true, 1, 1, 1);
insert into meta_event (name, description, beginning_date, ending_date, meta_event_state, photo_url, free, public, owner_id, category_id, local_id) VALUES ('Teste dois', 'este e um teste de resistencia', '2017-06-28 01:40:59.273000', null, false, null, true, true, 1, 1, 1);
insert into meta_event (name, description, beginning_date, ending_date, meta_event_state, photo_url, free, public, owner_id, category_id, local_id) VALUES ('Teste tres', 'este e um teste de muita resistencia', '2017-06-28 01:40:59.273000', null, false, null, false, true, 1, 1, 1);

insert into public.type_of_ticket (ticket_type, price, num_tickets, meta_event_id, event_id) values ('expensive', 1000, 470, 3,NULL);
insert into public.type_of_ticket (ticket_type, price, num_tickets, meta_event_id, event_id) values ('more', 100, 33, 3,NULL);
insert into public.type_of_ticket (ticket_type, price, num_tickets, meta_event_id, event_id) values ('cheap', 10, 186, 3,NULL);
insert into public.type_of_ticket (ticket_type, price, num_tickets, meta_event_id, event_id) values ('almostfree', 1, 397, 3,NULL);

insert into public.event_content (user_id, event_id) values (1, 1);
insert into public.event_content (user_id, event_id) values (2, 3);
insert into public.event_content (user_id, event_id) values (1, 1);
insert into public.event_content (user_id, event_id) values (1, 2);
insert into public.event_content (user_id, event_id) values (1, 2);
insert into public.event_content (user_id, event_id) values (1, 2);
insert into public.event_content (user_id, event_id) values (1, 2);
insert into public.event_content (user_id, event_id) values (1, 3);
insert into public.event_content (user_id, event_id) values (2, 3);
insert into public.event_content (user_id, event_id) values (2, 3);
insert into public.event_content (user_id, event_id) values (2, 3);

insert into public.Rate (event_content_id, evaluation) values (1,3);
insert into public.Rate (event_content_id, evaluation) values (4,2);
insert into public.Rate (event_content_id, evaluation) values (8,2);

insert into public.Guest (is_going, user_id, event_id) values (false, 2, 3);
insert into public.Guest (is_going, user_id, event_id) values (true, 3, 3);

insert into public.Comments (comment_id, content, photo_url, comment_date) values (2, 'turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et', 'http://epa.gov/massa/quis/augue/luctus/tincidunt/nulla.json?placerat=porta&ante=volutpat&nulla=quam&justo=pede&aliquam=lobortis&quis=ligula&turpis=sit&eget=amet&elit=eleifend&sodales=pede&scelerisque=libero&mauris=quis&sit=orci&amet=nullam&eros=molestie&suspendisse=nibh&accumsan=in&tortor=lectus&quis=pellentesque&turpis=at&sed=nulla&ante=suspendisse&vivamus=potenti&tortor=cras&duis=in&mattis=purus&egestas=eu&metus=magna&aenean=vulputate&fermentum=luctus&donec=cum', '2017-05-11 17:46:49');

PRAGMA encoding = 'UTF-8';
--creating table
CREATE TABLE IF NOT EXISTS users (
	userid 			INTEGER 	PRIMARY KEY,
	username 		TEXT 		NOT NULL	 UNIQUE,
	email 			TEXT	 	NOT NULL 	 UNIQUE,
	phone 			TEXT 		NOT NULL  	 UNIQUE,
	passhash 		TEXT,
	passsalt 		TEXT ,
	creation_date   INTEGER,
	lastname	    TEXT ,
	firstname 		TEXT ,
	online 			INTEGER 	NOT NULL  DEFAULT 1,
	CHECK( online < 2 AND
	 length(phone) == 11 ));
CREATE TABLE IF NOT EXISTS items (
	itemid 			INTEGER   PRIMARY KEY,
	price 			INTEGER	  NOT NULL,
	category 		TEXT			  ,
	name	   	    TEXT 	  NOT NULL,
	number_left 	INTEGER   NOT NULL, 
	creation_date   INTEGER   NOT NULL,
	rating 			INTEGER,
	CHECK ( price != 0 AND
	 rating < 6 )
	);
CREATE TABLE IF NOT EXISTS attributes (
	itemid  INTEGER 		 PRIMARY KEY,
	key 	TEXT,
	value 	TEXT
	);
CREATE TABLE IF NOT EXISTS basketlist (
	userid 			INTEGER		PRIMARY KEY,
	basketid 		INTEGER     NOT NULL UNIQUE,
	creation_date   INTEGER 	NOT NULL,
	ispurchased 	INTEGER 	DEFAULT 0
	--check for basketlist
	CHECK ( ispurchased < 2 )
	);
CREATE TABLE IF NOT EXISTS basket (
	basketid 	INTEGER		PRIMARY KEY,
	itemid 		INTEGER		NOT NULL,
	countbasket INTEGER		NOT NULL
	);

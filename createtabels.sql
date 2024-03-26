PRAGMA encoding = 'UTF-8';
CREATE TABLE IF NOT EXISTS users (
	userid,
	username,
	email,
	phone,
	passhash,
	passsalt,
	creation_date,
	lastname,
	firstname,
	online
	);
CREATE TABLE IF NOT EXISTS items (
	itemid,
	price,
	category,
	name,
	number_left,
	creation_date,
	rating
	);
CREATE TABLE IF NOT EXISTS attributes (
	itemid,
	key,
	value
	);
CREATE TABLE IF NOT EXISTS basketlist (
	userid,
	basketid,
	creation_date,
	ispurchased
	);
CREATE TABLE IF NOT EXISTS basket (
	basketid,
	itemid,
	count
	);

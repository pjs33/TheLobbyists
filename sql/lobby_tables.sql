DROP TABLE IF EXISTS votes;
DROP TABLE IF EXISTS donations;
DROP TABLE IF EXISTS issues;
DROP TABLE IF EXISTS lobbyists;
DROP TABLE IF EXISTS users;

CREATE TABLE users
(
	username VARCHAR(255) NOT NULL PRIMARY KEY,
	realname VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	city VARCHAR(255) NOT NULL,
	state VARCHAR(255) NOT NULL,
	zipcode INT NOT NULL,
	password VARCHAR(255) NOT NULL
);

CREATE TABLE lobbyists
(
	lobbyist_username VARCHAR(255) NOT NULL PRIMARY KEY,
	realname VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
);

CREATE TABLE issues 
(
	issue_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	issue_name VARCHAR(255) NOT NULL,
	issue_scope VARCHAR(255) NOT NULL,
	issue_start_date DATETIME NOT NULL,
	issue_end_date DATETIME NOT NULL,
	goal_amount INT NOT NULL,
	picture VARCHAR(255) NOT NULL,
	fk_lobbyist_username VARCHAR(255) NOT NULL,

	FOREIGN KEY (fk_lobbyist_username) REFERENCES lobbyists(lobbyist_username)
);

CREATE TABLE donations
(
	fk_username VARCHAR(255) NOT NULL,
	fk_issue_id INT NOT NULL,
	money_amount INT NOT NULL,
	FOREIGN KEY (fk_username) REFERENCES users(username),
	FOREIGN KEY (fk_issue_id) REFERENCES issues(issue_id),
	
	CONSTRAINT donation PRIMARY KEY (fk_username, fk_issue_id)
);

CREATE TABLE votes
(
	fk_username VARCHAR(255) NOT NULL,
	fk_issue_id INT NOT NULL,

	FOREIGN KEY (fk_username) REFERENCES users(username),
	FOREIGN KEY (fk_issue_id) REFERENCES issues(issue_id),

	CONSTRAINT vote PRIMARY KEY (fk_username, fk_issue_id)

);


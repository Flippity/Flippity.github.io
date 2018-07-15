CREATE TABLE users (
id     INT(8) NOT NULL AUTO_INCREMENT,
username   VARCHAR(30) NOT NULL,
password   VARCHAR(255) NOT NULL,
email  VARCHAR(255) NOT NULL,
user_date  datetime DEFAULT CURRENT_TIMESTAMP,
verified boolean not null default 0,
hash VARCHAR( 32 ) NOT NULL ,
level  INT(8) NOT NULL,
UNIQUE INDEX user_name_unique (username),
PRIMARY KEY (id)
) ENGINE=INNODB;
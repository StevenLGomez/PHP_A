
DROP TABLE IF EXISTS subjects;
CREATE TABLE subjects(
    id INT(11) NOT NULL AUTO_INCREMENT,
    menu_name VARCHAR(30) NOT NULL,
    position INT(3) NOT NULL,
    visible TINYINT(1) NOT NULL,
    PRIMARY KEY (id)
    );

DROP TABLE IF EXISTS pages;
CREATE TABLE pages(
    id INT(11) NOT NULL AUTO_INCREMENT,
    subject_id INT(11) NOT NULL,
    menu_name VARCHAR(30) NOT NULL,
    position INT(3) NOT NULL,
    visible TINYINT(1) NOT NULL,
    content TEXT,
    PRIMARY KEY (id),
    KEY fk_subject_id (subject_id)
    );

DROP TABLE IF EXISTS admins;
CREATE TABLE admins(
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    hashed_password VARCHAR(60) NOT NULL,
    PRIMARY KEY (id)
    );



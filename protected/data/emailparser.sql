CREATE TABLE tbl_email (
  id INT PRIMARY KEY AUTO_INCREMENT,
  site TEXT,
  email TEXT,
  dateInsert DATETIME
)  ENGINE=InnoDB CHARACTER SET=UTF8;
#INSERT INTO tbl_email (site, email, dateInsert) VALUES ('example', 'test@test.ru', now());


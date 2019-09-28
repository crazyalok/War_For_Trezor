# WAR FOR TREZOR
### A portal where you can play quiz which is based of different types of question
* This project is developed by following languages-
  * HTML
  * CSS
  * JavaScript
  * PHP
  * MySql
* To connect the portal to database i.e phymyadmin
  * create databse named warfortrezor
  * for creating users run the following command on console of phpmyadmin
    * CREATE TABLE users (
      id int NOT NULL AUTO_INCREMENT,
      name text NOT NULL,
      enrollment varchar(7) NOT NULL,
      score int(11) NOT NULL,
      created_at datetime NOT NULL,
      last_ques_time datetime NOT NULL,
      PRIMARY KEY(id)
      );
  * for creating questions run the following command on console of phpmyadmin
    * CREATE TABLE questions (
      id int NOT NULL AUTO_INCREMENT,
      image text NOT NULL,
      answer text NOT NULL,
      PRIMARY KEY(id)
      );

# Everything-Football
Config files for my GitHub profile.

This is a basic website which provides football updates

You will have to use some localhost like Xampp to host the website


Steps to setup the database:

1. Go to phpmyadmin 
2. create new database
3. Name the database "EverythinFootball"
4. Select the dropdown Collation
5. Then in the SQL section run the SQL code given below to create the tables.


SQL CODE:
(Just Copy paste and run the SQL code given below to create the tables)

CREATE TABLE UserInfo (
    user_id int(50) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_name varchar(50) NOT NULL,
    user_email varchar(50) NOT NULL,
    user_password varchar(15) NOT NULL
); 

CREATE TABLE Feedback (
    feedback_id int(50) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user_id int(50) NOT NULL,
    user_name varchar(50) NOT NULL, 
    user_feedback varchar(500) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES UserInfo(user_id)
);

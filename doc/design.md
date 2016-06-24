#Design of the project
##The design for the mysql database

- contains three tables:
   ```plain
   table users
   (userid int unsigned not null auto_increment primary key,
    username char(50) not null,
    password char(50) not null
   )
   
   table people
   (
    Idcardid char(20) not null primary key,
    sex bool,
    homeid int,
   
   )
   
   table homecondition
   (
    homeid int unsigned not null auto_increment primary key,
    Income float(6,2),
   )
   
   
   ```

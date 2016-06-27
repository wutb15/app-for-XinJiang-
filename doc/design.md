#Design of the project
##The design for the Mysql Database and the Models

- contains three tables:

   ```plain
   table users
   (userid int unsigned not null auto_increment primary key,
    username varchar not null,
    password varchar not null
   )
   
   table peoplecondition
   (
    Idcardid string not null primary key,
    sex enum ('male','female'),
    homeid int,
	birthday date
   
   )
   
   table homecondition
   (
    homeid int unsigned not null auto_increment primary key,
    Income float(6,2),
	homelocation varchar
   )
   (waited to be specialized)
   
   ```
- this three tables are correspond to three models,the UserModel,the PeopleConditionModel<br>
the HomeConditionModel

##The design for the Routes and the Controllers
- The UserController
 - the authentication function
 - the registration function(use )
#Requirements
##Expecting user interface
- When open the web,enter main menu:

  ```plain
  Please Check in:
  {
    "Username ":
    "Password ":
    [submit]
  }
   ```
  - If fails:
    - raise error information in this View"Username or Password is wrong"
- After check-in:

    ```plain
    [load Id information link] 
    [view information link]
    ```
    - If choose load information
      - If the information doesn't exist:
      
          ```plain
          {
            
            {{the information form}}(blank form,available to edit)
            [Add information button](submit information to Database)
          }
          ```
        - if the information exist ,to (show-information-view)
  - If choose view information:
   
  
    ```plain
    {
      "Search by ID":
      [search]
    
    }
    
    
    ```
    - if find ,to (show-information-view)
     
    - otherwise:
      ```plain
      
      [Not-Find-View]
      
      ```
- show-information-view:
  ```plain
          {{show the information form}}(unavailable to edit,readonly)
          [Edit]
  ```
- The edit:
  -We don't really change view,use JS to adjust the show-information-view:
  ```plain
  {
    {{the information form}}(available to change)
    [submit](upgrade the Database)
    [delete](delete this message from the Database)
  }
  ```
    
   
- on every page there is a backtoMainmeu link


## Language and Tools
- We plan to use PHP to create the web and Mysql to deal with the Database.
- We use MVC design mode for this project
- The View group will use Bootstrap to create the User Interfaces
- The Control group is encouraged to use PhpStorm
- The Model group is encouraged to use PhpStorm and Wampserver


## Algorithm
- Use Mysql to add,change or delete Data
- Use Css Framework to present tidy and beautiful User Interfaces


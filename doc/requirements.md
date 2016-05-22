#Requirements
##Expecting user interface
- When open the web,enter main menu:

  ```plain
  Please Check in:
  [Username checkin Textbox]
  [Password checkin Textbox]
   ```
   - If fails:
   ```plain
   Username or password is wrong
   ```
- After check-in:

    ```plain
    [load Id information working area]
    [view information working area]
    ```
    - If choose load information
      - If the information doesn't exist:
      
          ```plain
          {{show the information}}
          [Add information button]
          [Edit button]
          [Commit button]
          [Cancel button]
          ```
        - if the information exist:
          
          
          ```plain
          {{show the information}}
          [Edit button]
          [Commit button]
          [Cancel button]
          ```
- on every page there is a backtoMainmeu button
## Language
- We plan to use PHP to create the web and Mysql to deal with the Database.
- We use MVC design mode for this project


## Algorithm


# php_oop_crud_pdo_mysql
PHP CRUD tutorial with PDO extension and MySQL
## Description
The PHP Data Objects (PDO) extension defines a consistent, lightweight interface for accessing databases in PHP. PDO extension provides a data-access abstraction layer, which means that you can use different databases using the same functions to queries and fetch data from the database.

This PHP PDO example, implements a simple PHP CRUD operation, learning:
* PDO connection
* PDO insert 
* PDO select 
* PDO update 
* PDO delete 
The example provides a simple Web view, add, edit, and delete functionality with PHP OOP using PDO MySQL.

In this example script, we’ll fetch the users data from the database and display the user data list with add link, edit link, and delete link. By these links user can add new data to the database, update previously inserted data and delete the data from the database. We’ll use Object oriented approach to building the example script and bootstrap table structure for styling the list, form fields, and links.

### Database Table Creation
For this example application, we’ll create a simple table (users) with some basic columns where users data would be stored.

### Database Class (dbclass.php)
DB class handles all the operations related to the database using PHP PDO extension and MySQL. For example, connect with the database, insert, update and delete the record from the database. You need to change the $dbHost, $dbUsername, $dbPassword, and $dbName variables value as per the database credentials.

### Action - action.php (insert, update, delete records)
This file handles the requests coming from the HTML page using DB class. Based on the request, user data would add, update, delete to the database. Here the code is executed based on the action_type. action_type would be three types, add, edit, and delete. The following operations can happen based on the action_type.
add insert the record in the database, status message store into the session and return to the list page.
edit updates the record in the database status message store into the session and return to the list page.
delete deletes the record from the database status message store into the session and return to the list page.

### Index - index.php
This is the main listing page where all the users are listed with add, edit, and delete links.

#### Bootstrap libraries:
Bootstrap CSS & JS library need to be included if you want to use Bootstrap table and form structure, otherwise, omit it.

`<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>`

Include the dbclass.php file for using the DB class to fetch the users data from the database using PDO and MySQL.

### Add Data - add.php
In this file, an HTML form would display to collecting the user data and submitted to the action.php file. Also, a hidden field would be submitted with the respective action_type.

### Edit Data - edit.php
In this file, an HTML form would display with existing user data and submitted to the action.php file. Also, two hidden fields would be submitted with the respective action_type and user id.


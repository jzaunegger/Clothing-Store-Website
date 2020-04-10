# Clothing-Store-Website
This is the repository for the Clothing Store for our 473 project.

Authors: Lauren Amicone, Victor Sansing, and Jackson Zaunegger. 

This project uses XAMPP to run a test server and database. This project was developed using XAMPP version 7.1.32, and uses only HTML, CSS, JavaScript, and PHP. You can download XAMPP at the following website. 

    XAMPP: https://www.apachefriends.org/download.html

## Installation

To get started you will need to download and install XAMPP. You need to make sure that Apache, MySQL, and PHP are installed, but they should be by default. XAMPP generally installs into the C drive if available. After installation is complete, open the configuration panel and start the Apache and MySQL services. You can test everyting is working by opening a Web Browser and going to http://localhost/dashboard/, you should see a welcome to XAMPP screen. 

Next, download the repository and move all of the files from the 473Project folder into a htdocs folder inside of the XAMPP folder. Then in your web browser you should be able to go to http://localhost/Clothing-Store-Website (Or whatever the name of the folder you created in the htdocs folder) and see a directory tree of the project and it's associated files. Any of the pages should load if the Apache and MySQL servers are running on the XAMPP control panel. Here are some file paths for the main parts of the website

    Index: /473Project/website-files/index-page/index.html
    Mens Pages: /473Project/website-files/mens-pages/Mens.php
    Womens Pages: /473Project/website-files/womens-pages/Womens.php

## Configuration

For the website to make queries to the database, the MySQL Connection Files must be configured to work with the database. In order to connect you will need a account in phpMyAdmin. Start by launching phpMyAdmin by pressing the admin button for MySQL on the XAMPP control panel or go to http://localhost/phpmyadmin/, and select the User Accounts tab. You can either add a new account or configure the bottom root account to have a password. 
    
    Note: You do not have to have a password, however it is a highly suggested security measure. If you     
    choose not to use a password, then the My_SQLConnectionFile.php would need to be edited to account
    for the lack of password. 
    
While in PHPMyAdmin you can create a new database and then select the empty database. If you click on the import button in PHPMyAdmin, you can click the browse button to upload the clothingcompany.sql file, which will add the structure and relationships of the database table, and some sample data. 

## Development Notes
This website is just starting. It needs updates to the following areas in order to be more complete and usable. The system also needs to be optimized and minimized to work more effectiently. Some example areas the system needs to fully work are:

    Checkout System
    Products for the Mens and Womens Pages
    Admin Pages for the Products and Users
    A Working Search Function


# Clothing-Store-Website
This is the repository for the Clothing Store for our 473 project.

Authors: Lauren Amicone, Victor Sansing, and Jackson Zaunegger. 

This project uses XAMPP to run a test server and database, the Angular framework to populate the product pages, ParticleJS for some creative fun, and NodeJS/npm. You can find downloads and documentation at the following links:

    XAMPP: https://www.apachefriends.org/download.html
    Angular: https://angular.io/start
    ParticlesJS: https://github.com/VincentGarreau/particles.js/
    NodeJS: https://nodejs.org/en/

## Installation

To get started you will need to download and install XAMPP. You need to make sure that Apache, MySQL, and PHP are installed, but they should be by default. XAMPP generally installs into the C drive if available. After installation is complete, open the configuration panel and start the Apache and MySQL services. You can test everyting is working by opening a Web Browser and going to http://localhost/dashboard/, you should see a welcome to XAMPP screen. 

Next, download the repository and move all of the files from the 473Project folder into htdocs folder inside of the XAMPP folder. Then in your web browser you should be able to go to http://localhost/Clothing-Store-Website and see a directory tree of the project and it's associated files. Any of the HTML files should now load and be able to be displayed. (If things are not displaying correctly make sure the project folder containing the files is named "473Project") 

## Configuration

For the website to make queries to the database, the MySQL Connection Files must be configured to work with the database. In order to connect you will need a account in phpMyAdmin. Start by launching phpMyAdmin by pressing the admin button for MySQL on the XAMPP control panel or go to http://localhost/phpmyadmin/, and select the User Accounts tab. You can either add a new account or configure the bottom root account to have a password. 

Next, we need to create a database. In phpMyAdmin click the Databases tab, and create a new database and call it whatever you want. Create a table called "users" and give it the following structure: 

    username - varchar(20)
    firstName - varchar(20)
    lastName - varchar(20)
    emailAddress - varchar(20)
    phoneNumber - varchar(10)
    password - varchar(20)
    dateAdded - date
    timeAdded - time(6)
    admin - tinyint(1)
    userID - enum(0000001)
    
Then create a table called products with the following structure:

    productID - int(11)
    productName - varchar(20)
    productDescription - varchar(200)
    sex - varchar(6)
    category - varchar(15)
    subcategory - varchar(20)
    timeAdded - timestamp

After the account has been configured you will need update the connection files. You will need to edit the host, user, password, and database name. You can find the files at the following paths:

       /473Project/admin-files/products/MySQL_ConnectionFile.php
       /473Project/admin-files/users/MySQL_ConnectionFile.php
       /473Project/registration/sign-up/MySQL_ConnectionFile.php
       
     

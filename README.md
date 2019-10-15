# Clothing-Store-Website
This is the repository for the Clothing Store for our 473 project.

Authors: Lauren Amicone, Victor Sansing, and Jackson Zaunegger. 

This project uses XAMPP to run a test server and database and ParticleJS for some creative fun. You can find downloads and documentation at the following links:

    XAMPP: https://www.apachefriends.org/download.html
    ParticlesJS: https://github.com/VincentGarreau/particles.js/

## Installation

To get started you will need to download and install XAMPP. You need to make sure that Apache, MySQL, and PHP are installed, but they should be by default. XAMPP generally installs into the C drive if available. After installation is complete, open the configuration panel and start the Apache and MySQL services. You can test everyting is working by opening a Web Browser and going to http://localhost/dashboard/, you should see a welcome to XAMPP screen. 

Next, download the repository and move all of the files from the 473Project folder into htdocs folder inside of the XAMPP folder. Then in your web browser you should be able to go to http://localhost/Clothing-Store-Website and see a directory tree of the project and it's associated files. Any of the HTML files should now load and be able to be displayed. (If things are not displaying correctly make sure the project folder containing the files is named "473Project") 

## Configuration

For the website to make queries to the database, the MySQL Connection Files must be configured to work with the database. In order to connect you will need a account in phpMyAdmin. Start by launching phpMyAdmin by pressing the admin button for MySQL on the XAMPP control panel or go to http://localhost/phpmyadmin/, and select the User Accounts tab. You can either add a new account or configure the bottom root account to have a password. 

Next, we need to create a database. In phpMyAdmin click the Databases tab, and create a new database and call it whatever you want. In the 473 Project Folder there is a file called "SQL_Statements.txt" that contains the SQL statements needed to create the necessary tables in the database. 

After the account has been configured and the tables have been created, you will need update the connection file. You will need to edit the host, user, password, and database name. You can find the file at the path: 

    /473Project/assets/other/MySQL_ConnectionFile.php

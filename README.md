# sephpprojassignm

Core PHP

Discuss the structure of PHP script and how to embed PHP in HTML.
    PHP script is always surrounded by '<?php' and '?>'. This is to make the system understand the start and end of the script.
    PHP can be easily embedded in an HTML using the PHP start and end tags and the file should be renamed as a '.php' file.

What are the rules for naming variables in PHP?
    All PHP variables start with the '$' sign.
    First letter after '$' should be an alphabet or underscore.
    Name of the variable should contain alpha-numeric characters and underscore.
    Variable names are case-sensitive.
        e.g., $tommy, $page1, $p_24, $SPECIAL, $_999

Lab Exercise
	Write a PHP script to print "Hello, World!" on a web page.
<?php
echo '<h1>Hello, World!</h1>';
?>

==============
PHP variables
==============
Theory Exercise

->		Explain the concept of variables in PHP and their scope.
			Php is a loosely typed scripting language so we do not need to declare and define a variable and its datatype before assigning. 
			We can directly assign a value to a variable and its datatype will be assigned automatically based on the value. Variables in PHP are case-sensitive.
			e.g., 	$new = 'hello world'
					$NEW = 'Hello People'
					$a = 25
					$b = 11.5
			Variable in php can have three different scope: local, global and static.

Lab Exercise
	Create a PHP script to declare and initialize different types of variables (integer, float, string, boolean). Display them using echo.


==============
Super Global variables
==============
Theory Exercise

->		What are super global variables in PHP? List atleast five super global arrays and their use.
			Super Global variables are variables that are accessible to all the class, function and file in php. 
			They are used to share information across different parts of the script.
			$_ENV 
				used to access environment variables for the server
			
			$_SERVER
				used to access information about headers, paths and script locations

			$_SESSION
				used to access session related information

			$_COOKIE
				used to access user preference for the webpage
			
			$_GET
				used to access data submitted through form

Lab Exercise:
	Create a form that takes a user's name and email. Use the $_POST super global to display the entered data.
->		supervar.php

==============
SQL Tables and SQL Queries
==============
Lab Exercise

->		Create multiple tables and perform queries using:
			SELECT, UPDATE, DELETE, INSERT
			WHERE, LIKE, GROUP BY, HAVING
			LIMIT, OFFSET, Subqueries, AND, OR, NOT

CREATE DATABASE learnvern;
SHOW DATABASES;
CREATE TABLE IF NOT EXISTS products(
    productCode INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    productName varchar(20) NOT null,
    productLine varchar(20) NOT null,
    productVendor varchar(20) NOT null,
    productDesc text(100),
    quantityInStock INT unsigned NOT null DEFAULT 0,
    buyPrice decimal(10,2) NOT NULL DEFAULT 99999.99,
    MSRP decimal(10,2) NOT NULL DEFAULT 99999.99
 );
 CREATE TABLE IF NOT EXISTS productLines(
    productLineCode INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name varchar(20) NOT null,
    Description text(100),
    Image varchar(30)
 );
 CREATE TABLE IF NOT EXISTS productVendors(
    vendorCode INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name varchar(20) NOT null,
    contactNumber varchar(15),
    emailAddress varchar(30)
 );

=====SELECT=====
SELECT * FROM products;

=====UPDATE=====
UPDATE `productvendors` SET `emailAddress` = 'abctraders@trading.com' WHERE `productvendors`.`vendorCode` = 1001;
UPDATE `automobile` SET `name` = 'Swift', `fueltype` = 'CNG' WHERE `automobile`.`id` = 10003;

=====DELETE=====
DELETE FROM `automobile` where `id` = 10003;

=====INSERT=====
INSERT INTO productlines (productLineCode, name, Description) VALUES (10001, 'DOMS pencils',  'HB pencils');
INSERT INTO productlines VALUES (null,'Natraj pencils','HB pencils',null), (null, 'Natraj Erasers','Erasers',null),(null, 'Cello Ballpens', 'Ballpens',null);
INSERT INTO `products` (`productCode`, `productName`, `productLine`, `productVendor`, `productDesc`, `quantityInStock`, `buyPrice`, `MSRP`) VALUES ('10001', 'Natraj pencils', 'Natraj pencils', 'KGB', 'Natraj pencils', '50', '42.00', '50.00');

=====ALTER=====
ALTER TABLE `products` CHANGE `productLine` `productLine` VARCHAR(30) NOT NULL;
ALTER TABLE products ADD FOREIGN KEY (prod_ven_id) REFERENCES productvendors (vendorCode);

=====WHERE=====
UPDATE `automobile` SET `name` = 'Swift', `fueltype` = 'CNG' WHERE `automobile`.`id` = 10003;

=====LIKE=====
SELECT productLineCode, name, Description FROM productlines WHERE Description LIKE '%pen%';

=====GROUP BY=====


=====HAVING=====


INSERT INTO students (id, fname , lname, class, age, marks ) VALUES (1,'Meet','Shah','CE',22,55),(null,'Subham','Gupta','EC',26,85),(null,'Jigar','Darji','EE',22,65),(null,'Keval','Gagar', 'EC',32,70),(null,'Parth','Mehta','CE',23,20);


=====LIMIT=====


=====OFFSET=====


=====Subqueries=====


=====AND=====


=====OR=====

=====NOT=====


6. Conditions, Events, and Flows
THEORY EXERCISE:
Explain how conditional statements work in PHP

Conditional statements provides an option to validate certain conditions which can be later used to perform actions(decision making).
e.g., IF(con == TRUE){print('Execute Command')}

7. If Condition and If-Else If
LAB EXERCISE: 

Write a PHP program to determine if a number is even or odd using if conditions.
ifcondition.php

8. Practical Example: Calculator and Day Finder
LAB EXERCISE:

1. Simple Calculator: 

Create a calculator using if-else conditions that takes two inputs
and an operator (+, -, *, /). 

2. Day Finder: Write a script that finds the current day. If it is Sunday, print "Happy
Sunday."

simplecalculator.php

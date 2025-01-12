# Module-1_Core_PHP

---
## PHP Syntax
---

### 1. Discuss the structure of PHP script and how to embed PHP in HTML.  

- PHP script is always surrounded by `<?php` and `?>`. 
- Any logic or PHP script should be present between the starting and ending PHP tags.
- This is to make the system understand the start and end of the script.  
- PHP can be easily embedded in an HTML using the PHP start and end tags.
- After PHP is embedded the file should be renamed as a '.php' file as file extension.

### 2. What are the rules for naming variables in PHP?  

- All PHP variables start with the `$` sign.  
- First letter after `$` should be an alphabet or underscore.  
- First letter should not be a number.
- Name of the variable may contain alphanumeric characters and underscore only.  
- In PHP, variable names are case-sensitive so variable `$num` and `$NUM` are different.
- e.g., `$tommy`, `$page1`, `$p_24`, `$SPECIAL`, `$_999`

### Lab Exercise : Write a PHP script to print "Hello, World!" on a web page.  

- File name : M1LE_01.php

---
## PHP variables
---

### 1. Explain the concept of variables in PHP and their scope.  

- PHP is a loosely typed scripting language so we do not need to declare and define a variable and its datatype before assigning. 
- We can directly assign a value to a variable and its datatype will be assigned automatically based on the provided value. 
- Variables in PHP are case-sensitive.  

        <?php  
        $NEW = 'Hello People';  
        $new = 'hello world';  
        $a = 25;  
        $b = 11.5;  
        ?>

2. Variables in php can have three different scope: local, global and static.

Lab Exercise : Create a PHP script to declare and initialize different types of variables (integer, float, string, boolean). Display them using echo.

    <?php  
    $int = 25;  
    echo $int;  

    $float = 13.75;  
    echo $float;  

    $string = 'This is a string';  
    echo $string;  
    
    $bool = TRUE;  
    echo $bool;  
    ?>

## Super Global variables

1. What are super global variables in PHP? List atleast five super global arrays and their use.  
Super Global variables are variables that are accessible to all the class, function and file in php.  
They are used to share information across different parts of the script.  

        $_ENV; //used to access environment variables for the server  
        $_SERVER; //used to access information about headers, paths and script locations  
        $_SESSION; //used to access session related information  
        $_COOKIE; //used to access user preference for the webpage  
        $_GET; //used to access data submitted through form

Lab Exercise : Create a form that takes a user's name and email. Use the $_POST super global to display the entered data.  

    <!DOCTYPE html>  
    <html lang="en">  
    <head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>User Form</title>  
    </head>  
    <body>  
    <h1>User Form</h1>
    <div>
        <form action="" method="post">
            <div>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email">
            </div>

            <input type="submit" value="Submit!">
        </form>
    </div>
    <br><br>
    <?php
    // print_r($_POST);
    $data = $_POST;
    if($data['name']){
        $name = $data['name'];
        echo "Your name is $name.<br>";
    }
    if($data['email']){
        $email = $data['email'];
        echo "Your email address is $email.<br>";
    }
    ?>  
    </body>  
    </html>

## SQL Tables and SQL Queries

Lab Exercise : Create multiple tables and perform queries using :  
    SELECT, UPDATE, DELETE, INSERT, WHERE, LIKE, GROUP BY,  
    HAVING, LIMIT, OFFSET, Subqueries, AND, OR, NOT  

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

    # Select queries  
    SELECT * FROM products;  

    # Update queries  
    UPDATE `productvendors` SET `emailAddress` = 'abctraders@trading.com'  
    WHERE `productvendors`.`vendorCode` = 1001;  
    UPDATE `automobile` SET `name` = 'Swift', `fueltype` = 'CNG' WHERE `automobile`.`id` = 10003;  

    # Delete queries  
    DELETE FROM `automobile` where `id` = 10003;  

    # Insert queries  
    INSERT INTO productlines (productLineCode, name, Description) VALUES (10001, 'DOMS pencils', 'HB pencils');  
    INSERT INTO productlines VALUES (null,'Natraj pencils','HB pencils',null), (null, 'Natraj Erasers','Erasers',null),(null,'Cello Ballpens','Ballpens',null);  
    INSERT INTO `products` (`productCode`, `productName`, `productLine`, `productVendor`, `productDesc`, `quantityInStock`, `buyPrice`, `MSRP`) VALUES ('10001', 'Natraj pencils', 'Natraj pencils', 'KGB', 'Natraj pencils', '50', '42.00', '50.00');  

    #Alter queries  
    ALTER TABLE `products` CHANGE `productLine` `productLine` VARCHAR(30) NOT NULL;  
    ALTER TABLE products ADD FOREIGN KEY (prod_ven_id) REFERENCES productvendors (vendorCode);  

    # Where queries  
    UPDATE `automobile` SET `name` = 'Swift', `fueltype` = 'CNG' WHERE `automobile`.`id` = 10003;  
    
    # Like queries
    SELECT productLineCode, name, Description FROM productlines WHERE Description LIKE '%pen%';  

    #Group by queries  
    #Having queries  
    #Limit queries  
    #Offset queries  
    #Subqueries  
    #AND queries  
    #OR queries  
    #NOT queries  

## Conditions, Events, and Flows

1. Explain how conditional statements work in PHP  
Conditional statements provides an option to validate certain conditions which can be later used to perform actions(decision making). e.g.,

        if($con == TRUE){  
            echo 'Execute Command';  
        }  

## If Condition and If-Else If
Lab Exercise : Write a PHP program to determine if a number is even or odd using if conditions.  

    <?php  
    $num = 21;  
    if ($num % 2 == 0) {  
        echo 'number is an even number';  
    } else {  
        echo 'number is an odd number';  
    }  
    ?>  

## Practical Example: Calculator and Day Finder
Lab Exercise :  
1. Simple Calculator : Create a calculator using if-else conditions that takes two inputs and an operator (+, -, *, /).  

        <?php  
        $num1 = (int)readline('Please select a number: ');  
        $num2 = (int)readline('Please select another number: ');  
        $op = readline('Please select an operator, A for addition, S for Substraction, M for Multiplication, D for Division: ');  
        if($op=='A'){  
            echo 'Result: ' . $result = $num1 + $num2;  
        } elseif($op=='S'){  
            echo 'Result: ' . $result = $num1 - $num2;  
        } elseif($op=='M'){  
            echo 'Result: ' . $result = $num1 * $num2;  
        }elseif($op=='D'){  
            echo 'Result: ' . $result = $num1 / $num2;  
        }else{  
            echo 'Please select provided operation.';  
        }  
        ?>
2. Day Finder : Write a script that finds the current day. If it is Sunday, print "Happy Sunday."  

# work in progress ...
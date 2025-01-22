# Module-1_Core_PHP

## PHP Syntax

### Q. Discuss the structure of PHP script and how to embed PHP in HTML.  

- PHP script is always surrounded by `<?php` and `?>`. 
- Any logic or PHP script should be present between the starting and ending PHP tags.
- This is to make the system understand the start and end of the script.  
- PHP can be easily embedded in an HTML using the PHP start and end tags.
- After PHP is embedded the file should be renamed as a '.php' file as file extension.

### Q. What are the rules for naming variables in PHP?  

- All PHP variables start with the `$` sign.  
- First letter after `$` should be an alphabet or underscore.  
- First letter should not be a number.
- Name of the variable may contain alphanumeric characters and underscore only.  
- In PHP, variable names are case-sensitive so variable `$num` and `$NUM` are different.
- e.g., `$tommy`, `$page1`, `$p_24`, `$SPECIAL`, `$_999`

### Lab Exercise : 01. 

Write a PHP script to print "Hello, World!" on a web page.  

- File name : <a href="M1_LE_01.php">M1_LE_01.php</a>

## PHP variables

### Q. Explain the concept of variables in PHP and their scope.  

- In PHP, variables are containers used to store data values. They can hold different data types such as strings, integers, arrays, and objects. 
- Variables always start with a dollar sign ($).  
- The variable name must start with a letter or an underscore `_`.
- The variable name can only contain alphanumeric characters and underscores (`A-z, 0-9, _`).
- Variables in PHP are case-sensitive.  
- We can directly assign a value to a variable and its datatype will be assigned automatically based on the provided value. 
```
    <?php  
    $NEW = 'Hello People';  
    $new = 'hello world';  
    $a = 25;  
    $b = 11.5;  
    ?>
```
- Scope of a variable determines where in code variables can be accessed or modified. Variables in PHP can have three different scope: local, global and static.
- **Local Scope** : Variable declared inside a function have local scope and cannot be accessed outside of it. Local variables are destroyed once the function execution is completed.
- **Global Scope** : Variable declared outside any function are global variables. They can be accessed by functions with the help of `global` keyword or `$GLOBALS` array.
- **Static Scope** : Static variables retain their values across function calls. They need to be initialized once and retain their values even after function execution is completed.
- **Superglobals** : Superglobal variables are pre-defined in PHP and are accessible from any part of the script, regardless of scope.

### Lab Exercise : 02. 

Create a PHP script to declare and initialize different types of variables (integer, float, string, boolean). Display them using echo.

- File name : <a href="M1_LE_02.php">M1_LE_02.php</a>

## Super Global variables

### Q. What are super global variables in PHP? List atleast five super global arrays and their use.  

- Super global variables in PHP are built-in, pre-defined arrays that are accessible in all scopes of a script (global, local, and static).  
- These variables are automatically populated by the PHP runtime and are primarily used for accessing data such as user inputs, session information, server details, and file uploads.  
1. `$_GET` - contains data sent via the URL query string using `get` method. It is used to retrieve data passed in a URL, commonly used in search forms and links

2. `$_POST` - Contains data sent via the HTTP POST method. It is used to handle form submissions securely, especially for sensitive data.

3. `$_SESSION` - Stores the session variables for the current user. These persist across pages during a session. It is used to store and maintain user login information and preferences for the session duration.

4. `$_COOKIE` - Contains data stored in cookies which are saved on user's browser. It is used to remember user preferences such as language or theme settings.   

5. `$_SERVER` - Contains server and execution environment information such as headers, paths and script locations. It is used to access metadata about the request or server configuration.

### Lab Exercise : 03. 

Create a form that takes a user's name and email. Use the $_POST super global to display the entered data.  

- File name : <a href="M1_LE_03.php">M1_LE_03.php</a>

## SQL Tables and SQL Queries

### Lab Exercise : 04. 

Create multiple tables and perform queries using : SELECT, UPDATE, DELETE, INSERT, WHERE, LIKE, GROUP BY, HAVING, LIMIT, OFFSET, Subqueries, AND, OR, NOT

- File name : <a href="M1_LE_04.php">M1_LE_04.php</a>

## Conditions, Events, and Flows

### Q. Explain how conditional statements work in PHP  

- Conditional statements in PHP allow you to execute certain blocks of code based on specific conditions.
- They are used to control the flow of a program by checking whether a condition is true or false.  

Type of Conditional statements in PHP  
1. `if` statement :
    - `if` statement executes a code only if the specified condition is true.
    ```php
    $age = 20;
    if ($age >= 18) {
        echo "You are eligible to drive.";
    }
    ```
2. `if-else` statement :
    - The `if-else` statement executes a block of code if condition is true and executes another block of code if condition is false.
    ```php
    $age = 16;
    if ($age >= 18) {
        echo "You are eligible to drive.";
    } else {
        echo "You are not eligible to drive.";
    }
    ```
3. `if-elseif-else` statement :
    - The `if-elseif-else` statement is used to test multiple conditions in sequence.
    ```php
    $marks = 75;
    if ($marks >= 90) {
        echo "Grade: A+";
    } elseif ($marks >= 75) {
        echo "Grade: A";
    } elseif ($marks >= 50) {
        echo "Grade: B";
    } else {
        echo "Grade: F";
    }
    ```
4. `switch` statement :
    - The `switch` statement is used to perform different actions based on the value of a variable. It is an alternative to multiple `if-elseif` conditions.
    ```php
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Start of the work week!";
            break;
        case "Friday":
            echo "Weekend is near!";
            break;
        default:
            echo "It's a regular day.";
    }
    ```
5. Ternary Operator : 
    - The ternary operator is a shorthand for the `if-else` statement.
    ```php
    $age = 20;
    echo ($age >= 18) ? "Eligible to drive." : "Not eligible to drive.";
    ```
6. Null Coalescing (`??`) Operator :
    - The null coalescing operator is used to check if a variable is set and not null. It is a shorthand for `isset()`.
    ```php
    $username = $_GET['username'] ?? "Guest";
    echo "Welcome, $username!";
    ```

## If Condition and If-else If

### LAB EXERCISE 05: Write a PHP program to determine if a number is even or odd using if conditions.

- File name : <a href="M1_LE_05.php">M1_LE_05.php</a>

## Practical Example: Calculator and Day Finder
### Lab Exercise : 06. 

Simple Calculator : Create a calculator using if-else conditions that take two inputs and an operator (+, -, *, /).  

- File name : <a href="M1_LE_06.php">M1_LE_06.php</a>

### Lab Exercise : 07. 

Day Finder : Write a script that finds the current day. If it is Sunday, print "Happy Sunday".  

- File name : <a href="M1_LE_07.php">M1_LE_07.php</a>

## Switch Case and Ternary Operator

### Lab Exercise : 08. 

Restaurant Food Category Program: Use a switch case to display the category (Starter/Main Course/Dessert) and dish based on user selection.  

- File name : <a href="M1_LE_08.php">M1_LE_08.php</a>

### Lab Exercise : 09. 

Ternary Operator Example: Write a script using the ternary operator to display a message if the age is greater than 18.  

- File name : <a href="M1_LE_09.php">M1_LE_09.php</a>

### Lab Exercise : 10. 

Color Selector: Write a program to display the name of a color based on user input
(red, green, blue).

- File name : <a href="M1_LE_10.php">M1_LE_10.php</a>

## Loops: Do-While, For Each, For Loop

### Q. Discuss the difference between for loop, for each loop, and do-while loop in PHP.

- In PHP, there are three common types of loops used to execute code repeatedly: `for` loop, `foreach` loop, and `do-while` loop.  
1. `for` loop : The for loop is typically used when the number of iterations is known before entering the loop. It’s ideal for iterating over a specific range or count. In for loop the initialization, condition and increment/decrement is stated in the same line.
```php
// Print numbers from 1 to 5
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
```

2. `foreach` loop : The `foreach` loop is specifically used for iterating over arrays. It simplifies the process of iterating through each element in an array without needing an index counter. It can also be used with key value pairs.
```php
// Print each color in the array
$colors = ['Red', 'Green', 'Blue'];
foreach ($colors as $color) {
    echo $color . "<br>";
}
```

3. `do-while` loop : The `do-while` loop is similar to the `while` loop, but it guarantees that the code block will run at least once, because the condition is evaluated after the loop's code is executed.
```php
// Print numbers from 1 to 5 using do-while loop
$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 5);
```

### Lab Exercise : 11. 

For Loop : Write a script that displays numbers from 1 to 10 on a single line.

- File name : <a href="M1_LE_11.php">M1_LE_11.php</a>

```php
// Print numbers from 1 to 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . ", ";
}
```

### Lab Exercise : 12. 

For Loop (Addition): Add all integers from 0 to 30 and display the total.

- File name : <a href="M1_LE_12.php">M1_LE_12.php</a>

### Lab Exercise : 13. 

Chessboard Pattern: Use a nested loop to create a chessboard pattern (8x8 grid).

- File name : <a href="M1_LE_13.php">M1_LE_13.php</a>

### Lab Exercise : 14. 

Various Patterns: Generate different patterns using loops.

- File name : <a href="M1_LE_14.php">M1_LE_14.php</a>

## PHP Array and Array Functions

### Q. Define arrays in PHP. What are the different types of arrays?

Array is a data structure that stores multiple values in a single variable.
Arrays allow store, organize and manipulate related data easily and efficiently.
In PHP, arrays can dynamically resize and hold mixed data types.

Array can be defined in PHP using `array()` function and through `[]` syntax.
```php
$animals = array("cat", "dog", "cow", "buffalo");
$flowers = ["rose", "lily", "tulip", "marigold"];
```

There are 3 types of arrays in PHP. 
1. Indexed Arrays
2. Associative Arrays
3. Multi-dimensional Arrays

#### Indexed Arrays

These arrays use numeric indices for storing values. The numbering starts from 0.
```php
$animals = ["cat", "dog", "cow", "buffalo"];
echo $animals[0];  // Output : cat
```

#### Associative Arrays

These arrays use keys (strings) instead of numeric indices to store value.
```php
$car = [
    "name" : "Octavia",
    "brand" : "Skoda",
    "horsepower" : "188 bhp",
    "style" : "Sedan"
]
echo $car["name"];  // Output : Octavia
```

#### Multidimensional Arrays

These arrays contain one or more arrays as their elements.
These are mostly used to create a matrix structure or a nested structure.
```php
$foodChart = [
    ["Tea", "Coffee", "Milk"],
    ["Muffins", "Cookies", "Pastries"],
]
echo $foodChart[2][1]; // Output : Muffins
```

It is possible to combine indexed and associative arrays within the same structure.

### Lab Exercise : 15. 

Display the value of an array.

- File name : <a href="M1_LE_15.php">M1_LE_15.php</a>

### Lab Exercise : 16. 

Find and display the number of odd and even elements in an array.

- File name : <a href="M1_LE_16.php">M1_LE_16.php</a>

### Lab Exercise : 17. 

Create an associative array for user details (name, email, age) and display them.

- File name : <a href="M1_LE_17.php">M1_LE_17.php</a>

### Lab Exercise : 18. 

Write a script to shift all zero values to the bottom of an array.

- File name : <a href="M1_LE_18.php">M1_LE_18.php</a>

## PHP Date-Time Function

### Lab Exercise : 19. 

Write a script to display the current date and time in different formats.

- File name : <a href="M1_LE_19.php">M1_LE_19.php</a>

## Header Function

### Q. What is the header function in PHP and how is it used?

- The `header()` function in PHP is used to send raw HTTP headers to the browser before any output is sent.  
- It allows you to control the headers that are sent to the client, enabling you to perform tasks like redirecting the user, setting content types, managing cache control, or customizing HTTP responses.  
- No HTML or whitespace precede the header() function.  
- `exit` function is used after header() function after redirection or file download.  

Uses of header() function :
1. Redirecting to another page
```php
header("Location: https://www.google.com");
exit;
```
2. Setting Content-type
```php
header("Content-type: application/json");
```
3. Sending custom HTTP response codes
```php
header("HTTP/1.1 404 Not Found");
echo "Page not found!";
```
4. File Downloads
```php
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"example.txt\"");
header("Content-Length: " . filesize("example.txt"));
readfile("example.txt");
exit;
```

### Lab Exercise : 20. 

Redirect users to another page using the header() function.

- File name : <a href="M1_LE_20.php">M1_LE_20.php</a>

## Include and Require

### Q. Explain the difference between include and require in PHP.

- The `include` and `require` statements are both used to include and execute contents of one PHP file into another.
- By using a PHP script through `include`, we get a warning message if the file is missing but the script is still executed.
- By using a PHP script through `require`, we get a fatal error message if the file is missing and stops execution of the script.
- The main difference is the way both statement handle errors.
- `include` statement is used when the file is optional or non-critical. `require` statement is used when the file is essential for the script to work properly.
- `include`: Non-critical. Issues a warning if the file is missing and continues execution.
- `require`: Critical. Issues a fatal error if the file is missing and halts execution.

### Lab Exercise : 21. 

**Calculator**: Create a calculator using user-defined functions.

- File name : <a href="M1_LE_21.php">M1_LE_21.php</a>

### Lab Exercise : 22. 

**Factorial**: Write a function that finds the factorial of a number using recursion.

- File name : <a href="M1_LE_22.php">M1_LE_22.php</a>

### Lab Exercise : 23. 

**String Reverse**: Reverse a string without using built-in functions.

- File name : <a href="M1_LE_23.php">M1_LE_23.php</a>

### Lab Exercise : 24. 

**Download File**: Create a button that allows users to download a file

- File name : <a href="M1_LE_24.php">M1_LE_24.php</a>

## PHP Expressions, Operations, and String Functions

### Q. Explain what PHP expressions are and give examples of arithmetic and logical operations.

- In PHP, an expression is any valid combination of variables, operators, and values that evaluates to a single value.  
- Expressions are used to perform operations, manipulate data, and return results.
- There are various types of expressions used in PHP :
    1. Arithmetic Expressions
    2. String Expressions
    3. Comparison Expressions
    4. Logical Expressions
    5. Assignment Expressions
    6. Increment/Decrement Expressions
    7. Array Expressions
    8. Ternary Expressions
    9. Null Coalescing Expression

- Examples of arithmetic operations
```php
$a = 10, $b = 20;
$add = $a + $b;
$sub = $a - $b;
$mul = $a * $b;
$div = $b / $a;
$a += $b;
```
- Examples of logical operations
```php
$is_odd = true;
$is_prime = false;
$check1 = $is_odd && $is_prime;
$check2 = $is_odd || $is_prime;
```

### Lab Exercise : 25. 

Write a script to perform various string operations like concatenation, substring
extraction, and string length determination.

- File name : <a href="M1_LE_25.php">M1_LE_25.php</a>

## 
# CST126-ActivityGuide
CST126 GCU Activity Guide Code Files

Grand Canyon University Activity Guide for CST126. See below for complete project description (Fall 2020 Semester)

# Contents

[Activity 1: Install MAMP and Create a Test Application 2](#_Toc531000593)

[Part 1](#_Toc531000594) 2

[Part 2](#_Toc531000595) 3

[Activity 2: Validate Data and Show all Users 6](#_Toc531000596)

[Part 1](#_Toc531000597) 6

[Part 2](#_Toc531000598) 8

[Activity 3: Login Response and HTTP Sessions 11](#_Toc531000599)

[Activity 4: Hosting Your Blog With an Azure Account 14](#_Toc531000600)

[Part 1](#_Toc531000601) 14

[Part 2](#_Toc531000602) 15

[Activity 5: Working With HTTP GET Request in PHP 17](#_Toc531000603)

[Part 1](#_Toc531000604) 17

[Part 2](#_Toc531000605) 18

[Part 3](#_Toc531000606) 19

[Activity 6: Object Oriented Classes in PHP 22](#_Toc531000607)

[Part 1](#_Toc531000608) 22

[Part 2](#_Toc531000609) 23

[Activity 7: Test Plan 25](#_Toc531000610)

[Part 1](#_Toc531000611) 26

[Part 2](#_Toc531000612) 26

[Part 3](#_Toc531000613) 29

#


# Activity 1: Install MAMP and Create a Test Application

This activity has multiple parts/assignments. All assignments must be completed prior to documentation submission.

## Part 1

**Overview**

In this activity, students will learn how to install the MAMP stack and validate their locale environment by developing a simple &quot;Hello World&quot; PHP script in Eclipse PHP.

**Execution**

Execute this activity according to the following guidelines:

1. Install the MAMP stack and Eclipse PHP IDE.
2. Validate your local MAMP environment:
  1. Start the MAMP application.
  2. Start the Servers by clicking on the Start Servers icon and wait for the icon to turn green indicating that your Apache Server, MySQL Database, and PHP runtime were all started properly.
  3. Click on the on the Open WebStart page and validate that the PHP Web Start page is opened in your browser.
  4. Take a screenshot of the Web Start page.
3. Create a simple &quot;Test&quot; PHP script in Notepad:
  1. In Notepad create a simple PHP page called test.php.
  2. Enter \&lt;?php echo &quot;Test My Environment&quot;; ?\&gt; and save the file to your desktop.
  3. Start your MAMP stack (and ensure it starts with no errors).
  4. Using File Explorer navigate to where you installed your MAMP stack.
  5. Create a folder under the htdocs folder called test.
  6. Copy your test.php file from your desktop into the test folder.
  7. Test your test.php file in your browser:
    1. http://localhost:[port]/test/test.php
  8. Take a screenshot of the Test script that was run in the browser.
4. Create a simple &quot;Hello World&quot; PHP script using the Eclipse PHP:
  1. Start Eclipse PHP.
  2. Create a new PHP Project by selecting the File-\&gt;New Project menu options and leave the runtime to version 5.6.
  3. Select a location for your new PHP Project by filling in &#39;untitled&#39; URI as hello.
  4. Display the Project Window by selecting the View-\&gt;Tool Bars-\&gt;Project menu items.
  5. Right click on the project folder with in the Project and select the New-\&gt;PHP File menu options. Name your file hello. Click OK.
  6. Enter echo &quot;Hello World&quot;; ?\&gt; at the bottom of the script.
  7. Right click on the project folder and select the Copy menu.
  8. Using File Explorer navigate to where you installed your MAMP stack.
  9. Navigate to the htdocs directory and select paste, which should copy the PHP Hello Project into this folder.
  10. Test your hello.php file in your browser:
    1. http://localhost:[port]/hello/hello.php
  11. Take a screenshot of the Hello World script that was run in the browser.

**Documentation**

All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:

1. Screenshot of the Web Start page
2. Screenshot of the Test script that was run in the browser
3. Screenshot of the Hello World script that was run in the browser

## Part 2

**Overview**

In this activity, students will learn how to create an HTML Form and PHP script to handle the form submission as well as save the form data to a database table.

**Execution**

Execute this assignment according to the following guidelines:

1. Create a HTML Form using the Eclipse PHP:
  1. Start Eclipse PHP.
  2. Create a new PHP Project by selecting the File-\&gt;New Project menu options and leave the runtime to version 5.6.
  3. Select a location for your new PHP Project by filling in &#39;untitled&#39; URI as activity1.
  4. Display the Project Window by selecting the View-\&gt;Tool Bars-\&gt;Project menu items.
  5. Right click on the project folder with in the Project and select the New-\&gt;HTML File menu options. Name your file register. Click OK.
  6. Make the following modifications to the HTML file (refer to posted code snippets as needed):
    1. Change the title of the page to Registration Form.
    2. Add a Registration Form within the body of the HTML page.
    3. Add an input tag to enter a First Name.
    4. Add an input tag to enter a Last Name.
    5. Add an input tag to submit the form.
    6. Use a Form Action as pageHandler.php and Form Method of POST.
  7. Right click on the project folder and select the Copy menu.
  8. Using File Explorer navigate to where you installed your MAMP stack.

Navigate to the htdocs directory and select paste, which should copy the PHP activity1 Project into this folder.

  1. Test your form in your browser:
    1. http://localhost:[port]/activity1/register.html
  2. Take a screenshot of the form that was rendered in the browser.
1. Create a PHP Script using the Eclipse PHP:
  1. Open the project from Step 1a.
  2. Right click on the project folder with in the Project and select the New-\&gt;PHP File menu options. Name your file pageHandler. Click OK.
  3. Replace existing PHP script with a PHP following statement:
    1. \&lt;?php echo &quot;Got the Form&quot;; ?\&gt;
  4. Copy the script to your htdocs folder. Then test that the form created in Step 1f posts properly to the PHP script.
  5. Make the following modifications to the PHP Script file (refer to posted code snippets as needed):
    1. \&lt;?php echo &quot;First Name is &quot; . $\_POST[&quot;FirstName&quot;]; ?\&gt; \&lt;br\&gt;
    2. \&lt;?php echo &quot;Last Name is &quot; . $\_POST[&quot;LastName&quot;]; ?\&gt; \&lt;br\&gt;
    3. You are now registered. \&lt;br\&gt;
  6. Test your form and form post in your browser:
    1. http://localhost:[port]/activity1/register.html
  7. Take a screenshot of the form that was posted to your PHP script.
2. Create a Database Schema and Table:
  1. Open your WebStart page from the MAMP Control Panel.
  2. From the Tools Menu select the phpMyAdmin menu item.
  3. Click the Database tab in phpMyAdmin.
  4. Create a Database using a database name of activity1.
  5. Create a Table named users with 3 columns and click the Go button.
  6. Create the following columns:
    1. ID of type INT and check the A.I. checkbox.
    2. FIRST\_NAME of type VARCHAR with length of 100.
    3. LAST\_NAME of type VARCHAR with length of 100.
    4. Click the Save button.
3. Update PHP Script using the Eclipse PHP:
  1. Open the project from Step 2a.
  2. Update the PHP script to insert data into the database (refer to posted code snippets as needed).
    1. Delete all previous PHP script and add the following.
    2. Open a connection using mysqli() to servername of localhost, username of root, password of root, and a database of activity1.
    3. Insert form data using an SQL Insert statement and the query().
    4. Close the database connection using close().
    5. See the posted code snippet for complete code example.
    6. Test your form and form post in your browser:
      - http://localhost:[port]/activity1/register.html
      - Go to phpMyAdmin and validate data was inserted to DB:
        1. Click on the activity1 database hyperlink on the left.
        2. Click on the users table hyperlink on the left.
        3. Click on the SQL Tab.
        4. Click the Select \* button and then the Go button.
  3. Take a screenshot of the form that was posted to your PHP script.
  4. Take a screenshot of the content of the users table from myPhpAdmin.
4. Tutorials
  1. Access the &quot;PHP Tutorial,&quot; located within the required readings. Complete Module 1: Basic Syntax and post screenshots of the Module Quiz results.
  2. Access the &quot;HTML Fundamentals Tutorial,&quot; located within the required readings. Complete Module 1: Overview and Module 2: HTML Basics and post screenshots of the Module Quiz results.

**Submission**

Submit the following to the learning management system:

**Part 1**

1. Screenshot of the Web Start page
2. Screenshot of the Test script that was run in the browser
3. Screenshot of the Hello World script that was run in the browser

**Part 2**

1. Screenshot of the HTML Form rendered in the browser
2. Screenshot of the form that was posted to your PHP script in Step 2
3. Screenshot of the form that was posted to your PHP script from Step 4.
4. Screenshot of the content of the users table from myPhpAdmin.
5. Tutorial Screenshots

# Activity 2: Validate Data and Show all Users

This activity has multiple parts/assignments. All assignments must be completed prior to documentation submission.

## Part 1

**Overview**

In this activity, students will learn how to make decisions in PHP script and how to query data from a database table in PHP. Students will build on the code you completed in Activity 1.

**Execution**

Execute this activity according to the following guidelines:

1. We will update Activity 1. Open the activity1 Project in Eclipse PHP.
2. Make a decision in your PHP Page Handler that will validate the data posted from the Form and check that the data is not empty (or NULL) before inserting the data into the MySQL Database.
  1. Open the pageHandler.php script in Eclipse PHP.
  2. After reading the Posted Form variables use IF constructs to validate that the posted data is not empty/blank/null.
    1. Write an If Statement that tests the First Name. If the First Name is NULL or Empty then print an error message &quot;The First Name or is a required field and cannot be blank.&quot; on the response using an echo statement.
    2. Write an If Statement that tests the Last Name. If the Last Name is NULL or Empty then print an error message &quot;The Last Name is a required field and cannot be blank.&quot; on the response using an echo statement.
  3. Deploy your code to the activity1 application in MAMP. Test your application in your browser:
    1. http://localhost:[port]/activity1/register.html
  4. Take a screenshot of the application response in the browser when the First Name is empty.
  5. Take a screenshot of the application response in the browser when the Last Name is empty and the First Name has valid information.
3. Select all the users from your users table and display them as a response to the browser.
  1. Right click on the project folder with in the Project and select the New-\&gt;PHP File menu options. Name your file getAllUsers. Click OK.
  2. Replace existing PHP script with a PHP following statements.
    1. Add code to perform the following functions.
    2. Open a connection using mysqli() to servername of localhost, username of root, password of root, and a database of activity1.
    3. Use an SQL Select statement and the query() to read all the users from the database. Write a loop to display all users First and Last Name as a response to the browser using an echo statement.
    4. Close the database connection using close().
    5. See the posted code snippet for complete code example.
  3. Copy the script to your htdocs folder. Test your form and form post in your browser:
    1. http://localhost:[port]/activity1/getAllUsers.php
  4. Take a screenshot of the response of your PHP script

**Documentation**

All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:

1. Screenshot of the application response in the browser when the First Name is empty.
2. Screenshot of the application response in the browser when the Last Name is empty and the First Name has valid information.
3. Screenshot of the response of the PHP script.

## Part 2

**Overview**

In this activity, students will learn how to make a default page for their application and build a simple Login Form that queries data from a database table in PHP. Students will build on the code completed in Activity 1 and Activity 2.

**Execution**

Execute this assignment according to the following guidelines:

1. Create a new empty PHP Project called activity2. Open the existing activity1 project in Eclipse PHP. Right click on the files from the activity1 and select the Copy menu item. Right click on the activity2 project and select paste. This will copy the code from the prior activity to the new Project.
2. Update the activity1 database:

1. Open up phpMyAdmin and select the activity1 database and the users table.
2. Select the Structure Tab.
3. Add the following 2 columns:

    1. USERNAME of type varchar with a max length of 50.
    2. PASSWORD of type varchar with a max length of 50.
    3. Click the Save button.

1. Populate some default usernames and passwords for the existing users.

1. Click the SQL Tab.
2. Click the Select \* button and then click the Go button.
3. Double click on the USERNAME column in a row for a user. Enter desired test data.
4. Double click on the PASSWORD column in a row for a user. Enter desired test data.

1. Update the Registration Form:

1. Add an input text field for the Username.
2. Add an input password field for the Password.
3. Update the pageHandler.php script to insert the Username and Password in the database.

1. Create a default HTML Page for your Application.

1. Right click on your project and select the File-\&gt;New HTML File menu options. Name your file index (all lower case). Click OK.
2. Make the following changes to the index.html file:

1. Change the Title to &#39;My Activity 2 Application&#39;.
2. Add the Text &#39;My Activity 2 Application&#39; at the top of the page that is styled in H2 format.
3. Underneath the Text display a &quot;Menu&quot; for your application using two anchor tags.

- Set one anchor tag to go a page &#39;login.html&#39; with a label of Login.
  1. \&lt;a href=&quot;login.html&quot;\&gt;Login\&lt;/a\&gt;
- Set another anchor tag to go a page &#39;register.html&#39; with a label of Register.
  1. \&lt;a href=&quot;register.html&quot;\&gt;Register\&lt;/a\&gt;

1. Create a new application &#39;activity2&#39; in your MAMP htdocs directory and deploy your project code to this new PHP application. Test your start page and your Register menu link in your browser:

1. http://localhost:[port]/activity2

1. Take a screenshot of the application start page in your browser.

1. Build a Login HTML Form.

1. Right click on the project folder with in the Project and select the New-\&gt;HTML File menu options. Name your file login (all lower case). Click OK.
2. Change the title of the page to Login Form.
3. Add an HTML Form to the page that contains the following form elements:

1. Label of &#39;User Name:&#39;
2. Input Text Control named username
3. Label of &#39;Password:&#39;
4. Input Text Control named password
5. Input Submit Control with a value of Login
6. Form should use a POST method and an action of loginHandler.php.

1. Deploy your project code to the PHP activity2 application. Test your Login menu link and Login Form in your browser:

1. http://localhost:[port]/activity2

1. Take a screenshot of the Login Form in the browser.

1. Refactor your Register page handler.

1. Right click on the pageHandler.php file. Select the Refactor-\&gt;Rename menu options. Rename your PHP script to registerHandler. Ensure that the register,html form action was updated accordingly.
2. Deploy your script and test your registerHandler script still functions properly.

1. Build Login Page Handler script:

1. Right click on the project folder with in the Project and select the New-\&gt;PHP File menu options. Name your file loginHandler. Click OK.
2. Make the following changes to the Login Page Handler:

1. Read the Login Form controls into PHP variables.
2. Validate that the Posted form data is not blank or null. Display the proper error messages if the data is not correct.
3. Create a database connection using mysqli API and use the activity2 database.
4. Create a SELECT query SQL statement that selects from the users table where USERNAME = posted username form data and the PASSWORD = posted password form data.
5. Execute the SQL query using the mysqli query API.
6. Check the number of rows returned from your SQL query. If the number of rows was equal to 1 echo that the &#39;Login was successful&#39; else if the number of rows was equal to 0 echo that the &#39;Login failed&#39; else if the number of rows was greater than 2 echo that the &quot;There are multiple users have registered&#39; else display the SQL connection error.
7. Close the database connection using the mysqli close API.
8. Deploy your project code to PHP activity2 application. Test your login page:

- http://localhost:[port]/activity2

1. Take a screenshot of a successful and failed login in your browser.

1. Improve the navigation of your application.

1. Add an anchor tag at the bottom of the Login Form page and the Registration Form page to navigate back to your Application Start Page.

1. \&lt;a href=&quot;index.html&quot;\&gt;Main Menu\&lt;/a\&gt;

1. Deploy your code and test ALL your application changes in your browser:

1. http://localhost:[port]/activity2

1. Take a screenshot your updated Login and Registration Form pages

1. Tutorials
  1. Access the &quot;PHP Tutorial,&quot; located within the required readings. Complete Module 2: Variables and post screenshots of the Module Quiz results.
  2. Access the &quot;HTML Fundamentals Tutorial,&quot; located within the required readings. Complete Module 3: Challenges and post screenshots of the Module Quiz results.
  3. Access the &quot;CSS Fundamentals Tutorial,&quot; located within the required readings. Complete Module 1: The Basics and post screenshots of the Module Quiz results.

**Submission**

Submit the following to the learning management system:

**Part 1**

1. Screenshot of the application response in the browser when the First Name is empty.
2. Screenshot of the application response in the browser when the Last Name is empty and the First Name has valid information.
3. Screenshot of the response of the PHP script.

**Part 2**

1. Screenshot of the application start page in the browser.
2. Screenshot of the Login Form in the browser.
3. Screenshot of a successful and failed login in the browser.
4. Screenshot your updated Login and Registration Form pages.
5. Tutorial Screenshots

# Activity 3: Login Response and HTTP Sessions

**Overview**

In this activity, students will learn how to make refactor code into reusable functions and call these functions within an application. Students will learn how to save an application state in the HTTP Session as well as build on the code completed in Activity 2.

**Execution**

Execute this assignment according to the following guidelines:

1. Create a new empty PHP Project called activity3. Open the existing activity2 project in Eclipse PHP. Right click on the files from the activity2 and select the Copy menu item. Right click on the activity3 project and select paste. This will copy the code from the prior activity to the new Project.
2. Refactor Database Connection code into a reusable function:
  1. Create a new PHP File called myfuncs.
  2. Add a new function to this script that is called dbConnect() that takes no arguments and returns a connection to the database.
  3. Move the database configuration variables, the mysqli() call, and the connection error handling logic to the implementation of the dbConnect() function.
  4. Make sure to return the database connection from this function.
  5. Refactor the registerHandler.php script and the loginHandler.php script to use the reusable dbConnect() function.
  6. Deploy your project code to PHP activity3 application. Test your login page:

    - http://localhost:[port]/activity3/
3. Take a screenshot of the code for your dbConnect() function.
- Refactor the Login Handler to use PHP include() directives:

  1. Create a new PHP File called loginResponse. In the new loginResponse script add a standard HTML header and body. Within the body of the HTML add a &quot;Login was successful:&quot; text in H2 format and then add a PHP scriplet to echo the username.
    1. \&lt;h2\&gt;Login was successful: \&lt;?php echo &quot; &quot; . $username ?\&gt;\&lt;/h2\&gt;
  2. Replace the echo response from the login success response code with the following code:
    1. include(&#39;loginResponse.php);
  3. Create a new PHP File called loginFailed. In the new loginFailed script add a standard HTML header and body. Within the body of the HTML echo a PHP variable $message in H2 format.
    1. \&lt;h2\&gt;\&lt;?php $message?\&gt;\&lt;/h2\&gt;
  4. Replace the echo response from the login failed response code with the following code:
 $message = &quot;Login Failed&quot;; include(&#39;loginFailed.php);

  1. Replace all implementation of error messages being printed with echo using the code from the previous step with an appropriate error message.
  2. Deploy your project code to PHP activity3 application. Test your login page:
    1. http://localhost:[port]/activity3/
  3. Take a screenshot of a successful and failed login.

1. Refactor Login Handler to save User ID in the HTTP Session:
  1. Open the myfuncs.php script to add the following reusable functions to save and retrieve the User ID from the HTTP Session:
 function saveUserId($id) { session\_start(); $\_SESSION[&quot;USER\_ID&quot;] = $id; } function getUserId() { session\_start(); return $\_SESSION[&quot;USER\_ID&quot;]; }

  1. Open the Login Handler script.
  2. Add the following logic before the include(&quot;loginResponse.php) to save the User ID in the HTTP Session:
$row = $result-\&gt;fetch\_assoc(); // Read the Row from the QuerysaveUserId($row[&quot;ID&quot;]); // Save User ID in the Session

  1. Open the loginResponse.php script.
  2. Add an anchor tag to the bottom of the loginResponse.php script to a new PHP script that will display our User ID from the Session:
 \&lt;a href=&quot;whoAmI.php&quot;\&gt;Who Am I\&lt;/a\&gt;

  1. Create a new PHP Script called &#39;whoAmI.php&#39;.
  2. Add the following code to the whoAmI script that will display the User ID from the Session saved from the Login Handler (2 HTTP requests ago):
 \&lt;?php require\_once &#39;myfuncs.php&#39;; ?\&gt;
 \&lt;!DOCTYPE html\&gt; \&lt;html lang=&quot;en&quot;\&gt; \&lt;head\&gt; \&lt;meta charset=&quot;UTF-8&quot;\&gt; \&lt;title\&gt;Who Am I\&lt;/title\&gt; \&lt;/head\&gt;
 \&lt;body\&gt; \&lt;h2\&gt;Hello My User ID Is: \&lt;?php echo &quot; &quot; . getUserId(); ?\&gt;\&lt;/h2\&gt;\&lt;br\&gt; \&lt;/body\&gt;
 \&lt;/html\&gt;

  1. Take a screenshot of the whoAmI script response.
1. Tutorials
  1. Access the &quot;PHP Tutorial,&quot; located within the required readings. Complete Module 3: Operators and Module 4: Arrays. Then post screenshots of the Module Quiz results.
  2. Access the &quot;PHP Tutorial,&quot; located within the required readings. Complete Module 5: Control Structures and post screenshots of the Module Quiz results.
  3. Access the &quot;CSS Fundamentals Tutorial,&quot; located within the required readings. Complete Module 1: The Basics and post screenshots of the Module Quiz results.
**Submission** Submit the following to the learning management system:
1. Screenshot of the code for your dbConnect() function.
2. Screenshot of a successful and failed login.
3. Screenshot of the whoAmI script response.
4. Tutorial Screenshots

# Activity 4: Hosting Your Blog With an Azure Account
This activity has multiple parts/assignments. All assignments must be completed prior to documentation submission.
## Part 1
**Overview** In this activity, students will learn how to configure and deploy their PHP application to an external hosting provider. This activity supports instructions for using the Azure Hosting solution from Microsoft. Refer to &quot;How to Upload a PHP Project to Azure,&quot; located within the Course Materials when completing this activity. No other Hosting Provider (i.e. GoDaddy) will be approved for use in this course. **Execution** Execute this activity according to the following guidelines:
1. Access your Azure Account.
2. Create a new Database in Azure.
3. Create a new Database User for the database created in Step 2.
4. Export your local MAMP database to a SQL DDL file and import this database to your Azure database created in Step 2.
5. Create an application folder (named activity5) at Azure and deploy your local MAMP application code to Azure.
6. Update your application code (your myfuncs.php code file) deployed to Azure in Step 5 with your database configuration from Steps 2 and 3.
7. Test your application by going to your [Your Azure Domain]\activity5 URL.
8. **NOTE:** There is a link under to your Azure Domain located in your Azure Product Details page in your Azure Account.
**Documentation** All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:
1. Screenshot of the address bar of the browser with the running application.
2. Screenshot of the Login success response.

## Part 2
**Overview** In this activity, students will learn how to develop reusable PHP functions and scriptsas well as work with a Multi-Dimensional Array in PHP. Students will build on the code completed in Activity 3. **Execution** Execute this assignment according to the following guidelines:
1. Create a new empty PHP Project called activity4. Open the existing activity3 project in Eclipse PHP. Right click on all the files from activity3 and select the Copy menu item. Right click on the activity4 project and select paste. This will copy the code from the prior activity to the new Project.
2. Create a reusable script that reads all users and saves the results in a Multi-Dimensional Array:
  1. Create a new PHP File called utility.php.
  2. Create a reusable function called getAllUsers(). Add the following implementation code to this function.
  3. Using code written from prior activities write the SQL query to read all users from the &#39;users&#39; table reading the ID, FIRST\_NAME, and LAST\_NAME columns. Also make sure to use the dbConnect() method from the prior activity and add a requires\_once statement at the top of this script to resolve the dbConnect() function located in the myfuncs.php script.
  4. Create an empty PHP array called $users:
 $users = array();

  1. Loop thru the results from the query written in Step 2b, saving each row returned for a user in a new array(), and saving that array in the $users array (to create a Multi-dimensional Array. You will also need to define and use a variable $index as the control variable into the $users array:
 $users[$index] = array( $row[&quot;ID&quot;], $row[&quot;FIRST\_NAME&quot;], $row[&quot;LAST\_NAME&quot;] );++$index;

  1. Close the database connection at the bottom of the script.
  2. Return the $users array from the getAllUsers() function.
1. Create a reusable script that displays all users from the $users array created in Step 2 into a HTML table:

1. Create a new PHP File called \_displayUsers.php (note page fragments should be named with a leading underscore in the filename).
2. Create an opening and close HTML table tag.
3. Create a header row with labels: ID, First Name, and Last Name.
 \&lt;tr\&gt; \&lt;th\&gt;ID\&lt;/th\&gt;\&lt;th\&gt;First Name\&lt;/th\&gt;\&lt;th\&gt;Last Name\&lt;/th\&gt; \&lt;/tr\&gt;
1. Using a PHP for loop iterate in over the $users array and for each user output new table HTML row tags and display the users ID, First Name, and Last Name with the HTML table data tags:
 \&lt;?php for($x=0;$x \&lt; count($users);$x++) { echo &quot;\&lt;tr\&gt;&quot;; echo &quot;\&lt;td\&gt;&quot; . $users[$x][0] . &quot;\&lt;/td\&gt;&quot; . &quot;\&lt;td\&gt;&quot; . $users[$x][1] . &quot;\&lt;/td\&gt;&quot; . &quot;\&lt;/td\&gt;&quot; . &quot;\&lt;td\&gt;&quot; . $users[$x][2] . &quot;\&lt;/td\&gt;&quot;; echo &quot;\&lt;/tr\&gt;&quot;; } ?\&gt;
1. Update Update the loginResponse.php script:
  1. Update the loginResponse.php script to use (i.e. using the require\_once statement) the reusable function written to get all users. This should go at the top of the loginResponse.php script.
 require\_once(&#39;utility.php&#39;);

  1. Update the loginResponse.php script to call the getAllUsers() function, save the returned users array in a local variable called $users, and finally include (i.e. using an include statement) the new reusable script to display all users.
 \&lt;?php $users = getAllUsers(); include(&#39;\_displayUsers.php&#39;); ?\&gt;

  1. Deploy your project code to PHP activity4 application. Test your login success response page:
 http://localhost:[port]/activity4/

  1. Take a screenshot of the new login success response page that gets and displays all the users.
1. Tutorials
  1. Access the &quot;PHP Tutorial,&quot; located within the required readings. Complete Module 6: Functions and post screenshots of the Module Quiz results.
  2. Access the &quot;SQL Fundamentals Tutorial,&quot; located within the required readings. Complete Module 1: Basic Concepts and post screenshots of the Module Quiz results.
**Submission** Submit the following to the learning management system: **Part 1**
1. Screenshot of the address bar of the browser with the running application.
2. Screenshot of the Login success response.
**Part 2**
1. The code for the utility.php script
2. The code for the \_displayUsers.php script
3. Screenshot of the new login success response page that gets and displays all the users.
4. Tutorial Screenshots

# Activity 5: Working With HTTP GET Request in PHP
This activity has multiple parts/assignments. All assignments must be completed prior to documentation submission.
## Part 1
**Overview** In this activity, students will create an HTTP GET Request. **Execution** Execute this activity according to the following guidelines:
1. Create an HTML Page with 2 Hyperlinks:
  1. \&lt;a href=makeRequest.php?id=1&amp;mode=0\&gt;Link 1\&lt;a\&gt;
  2. \&lt;a href=makeRequest.php?id=2&amp;mode=1\&gt;Link 2\&lt;a\&gt;
2. Create a PHP Script:
  1. Create a PHP script called makeRequest.php.
  2. Read the &#39;id&#39; and &#39;mode&#39; HTTP GET Parameters using the $\_GET superglobal.
  3. Echo the 2 HTTP Get Parameters on the screen.
  4. Change the data sent to the makeRequest.php script.
**Documentation** All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:
1. HTML file along with a screenshot that includes new hyperlinks.

## Part 2
**Overview** In this activity, students will create an HTTP GET Request. **Execution** Execute this assignment according to the following guidelines:
1. Create a new Eclipse PHP Project.
2. Create an HTML Page with 2 Hyperlinks:
  1. \&lt;a href=getRequest.php?id=1&amp;mode=0\&gt;Link 1\&lt;a\&gt;
  2. \&lt;a href=getRequest.php?id=2&amp;mode=1\&gt;Link 2\&lt;a\&gt;
3. Create a PHP Script:
  1. Create a PHP script called getRequest.php.
  2. Read the &#39;id&#39; and &#39;mode&#39; HTTP GET Parameters using the $\_GET superglobal.
  3. Echo the 2 HTTP Get Parameters on the screen.
  4. Change the data sent to the getRequest.php script.
**Documentation** All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:
1. PHP file and a screenshot of the blogs being displayed.

## Part 3
**Overview** In this activity, students will learn how to use Oracle&#39;s MySQL Workbench tool to design and create a new table (with PK and FK constraints) as well as create an ER diagram from an existing database schema. Students will use the activity1 database that has been created in prior activities. **Note:** Refer to the &quot;How to create an ER Diagram using MySQL Workbench,&quot; within the &quot;How To Guide,&quot; located in the Course Materials when completing this activity. **Execution** Execute this assignment according to the following guidelines:
1. Download and install MySQL Workbench for your operating system:
  1. Refer to the link provided within the Course Materials.
  2. After clicking on the Download now, scroll down to the bottom of the page to select your platform. You will want to install the x86 64-bit installer (check your operating system to ensure it is 64-bit else install the 32-bit installer).
  3. Click the Download button to install (from the Begin Your Download screen scroll down and click the &#39;No thanks&#39; link.
  4. Install using the default options.
2. Connect MySQL Workbench to your MAMP database:
  1. Start MAMP to ensure your database is running.
  2. On the MySQL Workbench Home tab click the + icon next to the MySQL Connections in the top left corner of the screen.
  3. Specify a Connection Name of MAMP.
  4. Specify a Hostname of localhost.
  5. Specify a Port of 3306 for Windows and 8889 for OSX (double check your MAMP preferences).
  6. Specify a Username and Password of root and root respectively (unless you changed these settings in MAMP).
  7. Click the Test Connection button to ensure connectivity.
  8. Click the OK button to save the Database Configuration.
3. Create a new ADDRESS table:
  1. If your MAMP database is not running start MAMP.
  2. On the MySQL Workbench Home tab click the MAMP connection icon in the list of MySQL Connections.
  3. Click on the Schemas tab. Ensure that the activity database is listed.
  4. Expand the activity1 database. Expand the Tables leaf. Ensure that the users table is listed. Right click on the Tables leaf and inspect your database design options.
  5. Expand the users table leaf and Columns leaf. Ensure that the users tables columns are correct. Right click on the users table leaf and inspect your database design options.
  6. Right click on the Tables leaf and select the Create Table menu option. The New Table dialog will be displayed.
  7. Create the ADDRESS table as follows:
    1. Enter a table Name of address.
    2. Double click on the empty column name entry. Name the column ID with a data type of INT, and check the PK, NN, and AI checkbox options.
    3. Double click on the next empty column name entry. Name the column USER\_ID with a data type of INT, and check the NN checkbox option.
    4. Double click on the next empty column name entry. Name the column ADDRESS with a data type of VARCHAR(100) (by double clicking the default VARCHAR(45) data type, and check the NN checkbox option.
    5. Under the Column Details select the Foreign Keys tab. Double click the Foreign Key entry and enter ID1 (this is just the &#39;name&#39; of the column that is the actual FK. From the Reference Table dropdown select the users table from the activity2 database.
    6. Under the &#39;Foreign key details panel on the right check the USER\_ID column and make the reference column as ID.
    7. Click the Apply button. Review the DDL script to run and finally click the Apply button again. Ensure there were not errors running the DDL script.
    8. Validate by checking that the new address table is now listed under the Tables leaf.
    9. Right click on the address table listed under the Tables leaf. Select the Table inspector menu option. From the Table Inspector select the Columns tab. Take a screenshot of your table design.
4. Create an ER diagram:
  1. If your MAMP database is not running start MAMP.
  2. On the MySQL Workbench Home tab click the MAMP connection icon in the list of MySQL Connections.
  3. From MySQL Workbench select the Database-\&gt;Reverse Engineer menu options.
  4. From the Reverse Engineer Database select the MAMP Stored Connection.
  5. Click the Continue button twice.
  6. Select the activity1 database for the database to reverse engineer. Click the Continue button.
  7. Click the Continue button.
  8. Click the Execute button.
  9. Click the Continue and Close buttons. This will display a MySQL Model and ER diagram for the activity1 database.
  10. Inspect the format of the ER diagram.
  11. Double click on one of the tables in the ER diagram to display the design of the table.
  12. Drag one of the tables and reposition a table.
  13. Close the ER diagram by clicking the X button in the ER diagram tab.
  14. Save your ER diagram by clicking the X button in the MySQL Model tab.
  15. Take a screenshot of the ER diagram.
5. Tutorials

1. Access the &quot;SQL Fundamentals Tutorial,&quot; located within the required readings. Complete Module 2: Filtering, Functions, Subqueries and post screenshots of the Module Quiz results.
2. Access the &quot;SQL Fundamentals Tutorial,&quot; located within the required readings. Complete Module 3: JOIN, Table Operations and Module 4: Challenges. Then, post screenshots of the Module Quiz results.
**Submission** Submit the following to the learning management system: **Part 1**
1. HTML file along with a screenshot that includes new hyperlinks.
**Part 2**
1. PHP file and a screenshot of the blogs being displayed.
**Part 3**
1. Screenshot of the table design
2. Screenshot of the ER diagram
3. A simple write-up within a Word document that outlines in 50-100 words:
  1. How you would use a design tools such as MySQL Workbench in your project.
  2. The benefits of using a design tools such as MySQL Workbench in your project.

1. Tutorial Screenshots

# Activity 6: Object Oriented Classes in PHP
This activity has multiple parts/assignments. All assignments must be completed prior to documentation submission.
## Part 1
**Overview** In this activity, students will learn how to use SQL Wildcard Searches to search for a pattern within a column in a table. We will use the Activity 4 as the baseline to add the search form and PHP handler code. **Execution** Execute this activity according to the following guidelines:
1. Write and Test a Search Query in MySQL Workbench:

1. Write a search query to find all users in the user table where the Last Name has the letter a in it.
SELECT \* FROM users WHERE LAST\_NAME LIKE &#39;%a%&#39;;
1. Test the search query in MySQL Workbench.
2. Write a search query to find all users in the user table where the First Name has the letter a in it.
SELECT \* FROM users WHERE FIRST\_NAME LIKE &#39;%a%&#39;;
1. Test the search query in MySQL Workbench.
2. Write a search query to find all users in the user table where the First Name has the letter a in it OR the Last Name has the letter e in it.
SELECT \* FROM users WHERE FIRST\_NAME LIKE &#39;%a%&#39; OR LAST\_NAME LIKE &#39;%a%&#39;;
1. Test the search query in MySQL Workbench.
2. Take a screenshot of the results of running the query from Step 1f.

1. Write a simple Search Form in HTML and PHP:

1. Open the project from ICA #7.
2. Create a Search Form in HTML:

    1. Create a new HTML file called search.html.
    2. Add a single edit control to enter a search pattern.
    3. Add a submit button to POST to the form to a PHP Handler.
    4. Specify a Form action of searchHandler.php and a Form method of POST.

1. Create a Search Handler in PHP:

1. Create a new PHP file called searchHandler.php.
2. Read the search pattern into a PHP variable called searchPattern.
3. Add a new function, getUsersByFirstName() in utilty.php that searches for users first name with the specified pattern passed as an argument to the function and returns the results in the 2 dimensional array like getAllUsers(). If not results are found return null.
4. In the searchHandler call the getUsersByFirstName() and display the users array with the \_displayAllUsers.php script. If the return users array is a null value simply display an error message that there were no users found.

1. Deploy and test your application:
2. Take a screenshot of the users displayed in the table for desired search results and when no users are found from Step 2d.
**Notables and Extra Practice**
1. We tested our SQL Query outside of our application before we coded our application.
2. We can reuse the display user&#39;s page fragment for displaying all users or users found from a search.
3. Make a more complicated Search Form that allows users to search on First Name, Last Name, or First and Last Name.
4. Make a more complicated Search Form that allows users to specify if they want to do a \*.\* search, \*. search, or .\* search.
5. Make a more complicated Search Form that allows users to if they want to so a case sensitive search
**Documentation** All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:
1. Screenshot of the results of running the SQL query.
2. Screenshot of the users displayed in the table for desired search results and when no users are found.

## Part 2
**Overview** In this activity, students will learn how to create classes in PHP and apply inheritance to those classes. Students will build a simple Super Hero game where Superman and Batman go to battle against each other. **Execution** Execute this activity according to the following guidelines: Create a base SuperHero Class:
1. Right click on Project and select the New-\&gt;PHP Class menu options. Name your class SuperHero. Leave all the other fields as is and click OK.
2. Create the following class properties:

1. Private $name;
2. Private $health;
3. Private $isDead;

1. Create the following class methods:

  1. Constructor() that initializes the name and initial health of this SuperHero
  2. Attack() that is provided an opponent of type SuperHero that creates random damage between 1 and 10 and then calculates the health of the opponent SuperHero
  3. DetermineHealth() that takes a damage value and subtracts this from the current health, if health is less then or equal to zero set the health to zero and the isDead flag to true, else just subtract damage from health
  4. isDead() that returns the isDead class property
 Create two specializations of the SuperHero:
1. Right click on Project and select the New-\&gt;PHP Class menu options. Name your class Batman. Leave all the other fields as is and click OK.
2. Extend the Batman class from the SuperHero class (and also make sure to put a require\_once statement at the top of the class file for the SuperHero class).
3. Create a default constructor for the Batman class and call the base class non default constructor that initializes the name to &quot;Batman&quot; and random health between 1 and 1000.
4. Right click on Project and select the New-\&gt;PHP Class menu options. Name your class Superman. Leave all the other fields as is and click OK.
5. Extend the Superman class from the SuperHero class (and also make sure to put a require\_once statement at the top of the class file for the SuperHero class).
6. Create a default constructor for the Batman class and call the base class non default constructor that initializes the name to &quot;Superman&quot; and random health between 1 and 1000.
 Create a Game file:
1. Right click on Project and select the New-\&gt;PHP File menu options. Name your file PlayGame. Leave all the other fields as is and click OK.
2. Create instances of Superman and Batman (and also make sure to put a require\_once statement at the top of the class file for the Superman and Batman classes).
3. Run your Game Logic:
  1. while both Superman and Batman are not dead then have Superman attack Batman first then have Batman attack Superman second, and print if either Superman or Batman are now dead.
  2. use echo statements to print the game progress and game results
4. Run the game and take a screenshot of the game results.

1. Tutorials

1. Access the &quot;JavaScript Tutorial,&quot; located within the required readings. Complete Module 1: Overview and the Module 2: Basic Concepts. Then, post screenshots of the Module Quiz results.
2. Access the &quot;JavaScript Tutorial,&quot; located within the required readings. Complete Module 3: Conditional and Loops and Module 4: Functions. Then, post screenshots of the Module Quiz results.
**Submission** Submit the following to the learning management system: **Part 1**
1. Screenshot of the results of running the SQL query.
2. Screenshot of the users displayed in the table for desired search results and when no users are found.
**Part 2**
1. Screenshot from Step 3d (the game results)
2. Tutorial Screenshots

# Activity 7: Test Plan
This activity has multiple parts/assignments. All assignments must be completed prior to documentation submission.
## Part 1
**Overview** In this activity, students will learn how to execute a SQL prepared statement. We will use the Activity 6 Part 1 as the baseline to the PHP handler code. **Execution** Execute this assignment according to the following guidelines:
1. Add a new utility function in the utility.php (see code snippet in the announcement):

  1. Create a new function called insertUsers().
  2. In the function implementation:
    1. Create an array of users that can be inserted into the &#39;users&#39; table.
    2. Create an SQL Insert statement that uses parameters in the statement.
    3. Loop over the users array that binds the array data to the SQL Insert statement and executes the SQL prepared statement.

1. Call the insertUsers() function in the loginResponse() before all the users are read from the database and displayed on the page.
2. Run the application.
3. Take a screenshot of the insertUsers() function coded from Step 1.
4. Take a screenshot of the displayed users from Step 3.
**Documentation** All documentation will be submitted at the end of the activity to the learning management system. Ensure documentation of the following:
1. Screenshot of the insertUsers() function.
2. Screenshot of the displayed users.

## Part 2
**Overview** In this activity, students will execute a Test Plan on their Project. Each test will be marked with a Pass/Fail indicator. **Execution** Execute the following tests for your project:
1. Preparation:

1. Delete all the data in your database tables

1. Registration:

1. Bring up Registration Form
2. Try to register user without filling out Form
3. Ensure proper data validation errors displayed
4. Register a new user
5. Ensure proper positive success message is displayed
6. Try to register an existing user
7. Ensure proper error message displayed

1. Login:

1. Bring up the Login Form
2. Try to login without filling out Form
3. Ensure proper data validation errors displayed
4. Try to login with incorrect Username
5. Ensure proper data validation error is displayed
6. Try to login with incorrect Password
7. Ensure proper data validation error is displayed
8. Try to login with correct Username and Password
9. Ensure main application page, proper menu, and logo are displayed

1. Logoff:

1. Logoff the application
2. Ensure start application page, proper menu, and logo are displayed

1. Add a Blog:

1. Log into the application
2. Bring up the Blog Entry Form
3. Try to create a new Blog without filling out Form
4. Ensure proper data validation errors displayed
5. Try to create a new Blog without filling out Blog Title
6. Ensure proper data validation errors displayed
7. Try to create a new Blog with without filling out Blog Content
8. Ensure proper data validation errors displayed
9. Create a new Blog
10. Ensure proper positive success message is displayed

1. Display Blog List:

1. Bring up the Blog List
2. Ensure only the Blog Title is displayed in the List
3. Ensure that View Blog option is displayed in the List
4. Ensure that Update and Delete Blog options are displayed in the List only for Blog Owners. Note, depending on the user interface design this functionality may be available as a &quot;Display My Blogs&quot; menu option

1. View a Blog:

1. Bring up the Blog List
2. View a Blog from the List
3. Ensure that the Blog Title, Blog Content, and (optional) Blog Author is displayed
4. Ensure navigation back to the Blog List is available

1. Update a Blog:

1. Bring up the Blog List (or My Blog List)
2. Bring up the Blog Update Form
3. Ensure that the Blog Title and Blog Content is displayed in the Form
4. Try to update the Blog by removing the Title and Content from the Form
5. Ensure proper data validation errors displayed
6. Try to update the Blog Title
7. Ensure proper positive success message is displayed
8. Bring up the Blog List (or My Blog List)
9. Ensure Blog Title was updated
10. Try to update the Blog Content
11. Ensure proper positive success message is displayed
12. Bring up the Blog List (or My Blog List)
13. Ensure Blog Content was updated

1. Delete a Blog:

1. Bring up the Blog List (or My Blog List)
2. Bring up the Blog Delete page
3. Try to delete the Blog
4. Ensure prompt is displayed with ability to cancel or accept the operation
5. Ensure if operation is canceled that proper navigation is available
6. Ensure if operation is accept that a proper positive success message is displayed
7. Bring up the Blog List (or My Blog List)
8. Ensure Blog Content was deleted
9. Ensure Blog Comments were deleted

1. Search a Blog:

1. Bring up the Search Form
2. Try to search for a Blog without filling out Form
3. Ensure proper data validation errors displayed
4. Try to search for a Blog by Title and/or Content
5. Ensure Blog List is displayed
6. Ensure View (and Update and Delete Blog available for Blog owner) is available

1. Comment a Blog:

1. Bring up a View Blog page (via Blog List or Blog Search)
2. Bring up the Comment Form
3. Try to comment on a Blog without filling out Form
4. Ensure proper data validation errors displayed
5. Comment on a Blog
6. Bring up a View Blog page (via Blog List or Blog Search)
7. Ensure Blog Comments are visible

1. General UI:

1. Menu visible at all times with the correct menu items for the application context

1. Tutorials

1. Access the &quot;JavaScript Tutorial,&quot; located within the required readings. Complete Module 3: DOM &amp; Events. Then, post screenshots of the Module Quiz results.

## Part 3
**Overview** In this activity, students will research and study the differences between MySQLi and PDO. **Execution** Execute this assignment according to the following guidelines:
1. In 250-350 words, describe the differences between MySQLi and PDO. Make sure to cite references.
**Submission** Submit the following to the learning management system: **Part 1**
1. Screenshot of the insertUsers() function.
2. Screenshot of the displayed users.
**Part 2**
1. A Word document of the Test Plan with the results (either pass or fail) for each of the tests executed.
2. Tutorial Screenshots
**Part 3**
1. 250-350 word research paper.

 © 2019. Grand Canyon University. All Rights Reserved.

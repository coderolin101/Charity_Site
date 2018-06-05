# Charity_Site
Simple database project to improve CSS/HTML/MYSQL skills. PHPMYADMIN used to make code useable.
ASSIGNMENT:

Application Description: A university is going to sell socks to help raise money for charities. Your job is to create 2 forms (User Form and Administration Form), the forms will retrieve/store data in the database. The User form image can be found in this document. The Administration form is made up of all buttons described later in this document.
Database Design – Due at the completion of 3NF
Form 1: User Form 
The university knows what they want the form to look like, see pages 4. 
Basic Idea - Creating the form and automatically populate information from the database with:
-	Available socks
-	Available charities
The user data entered from the form will be stored in the database.
If a returning user (email and password), they it will automatically populate the form with first name, last name, phone number if available, credit card and cvs info but filled with asterisks instead of actual numbers
Extra Credit 5 points total for both Admin and User – User Form portion – 
•	Encrypt credit card # and card CVS #
•	Users must be given role of user
Form 2: Administrator Form
create a button for each task below:
-	Total socks sold
-	Number of socks sold for each charity
-	Number of ESU large socks sold
-	List of Socks that need to be delivered. The listing contains: who (First and Last name), sock size/color, where they get delivered (Building Name, Room #) 
-	Ability to enter a person’s email address and find all of the information on the user and all order(s) information for that user
-	Ability to add new charities (must add this new charity to the DB charity table) and have it displayed in the User Form as a charity option. Assume that the new charity is called “East Stroudsburg Food Bank”, the administration would type this in when the user clicks on the button called Add New Charity
-	Export using XML - order sock type (ex: ESU Sock medium) and total number ordered for each sock type
-	Extra Credit 5 points total for both Admin and User – Admin Form portion
o	Given the email address of a user - Decrypt credit card # and card CVS # information and display it
o	Ability to add new administrator and give them role of admin
-	Extra Credit 5 points
o	Given the email address of a user - Use cascade delete to delete all information about a user including their sock orders 
Assumptions:
•	A donor (person buying the socks) can only have one pick up site per order
•	A donor can order socks more than 1 time
•	A donor can in one order ask for delivery and in another order, indicate they will pick up
•	if a person orders a pair of socks for delivery and then orders another pair of socks for delivery – You do not need to keep track of the fact that someone might want it delivered to the same place. The donor just lists the location again.  Once we go through 3NF this point will be made clear.
•	A returning user can enter their email address and password and the application will automatically display their first name, last name, phone number and credit card info (asterisks displayed)
•	The programming languages you can use to directly integrate with SQL Server are: C#, C++, Java, PHP and Python
•	With a single order you can order more than 1 type of pair of socks
•	The Qty and Charity controls are pull down menus, you can limit the Qty to 5 of each type of you want
•	If each particular sock type you can only pick one charity. 



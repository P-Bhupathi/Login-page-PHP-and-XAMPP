-----------------------------------------------------Procedure------------------------------------------------

 1. Download XAMPP for Windows which is available on Google and install with default settings.
 2. Default installation folder "C:\xampp"
 3. Download and extract "loginpageproject" in "C:\xampp\htdocs\" directory which looks like this "C:\xampp\htdocs\loginpageproject"
 4. This directory("C:\xampp\htdocs\loginpageproject") contains 11 php files.
 5. Open XAMPP server by typing "XAMPP control panel" in windows search bar.
 6. Press "Start" button of both "Apache" and "MySQL" under "Actions" tab.
 7. Press "Admin" button of "MySQL" so that a web interface is opened.
 8. Create a database with name "loginpage" by clicking "New" button on left pane.
 9. Select the database "loginpage" from left pane and click on "SQL" tab presented at top-left corner.
10. Paste this query in console:
    "CREATE table users( id int not null AUTO_INCREMENT unique, username varchar(40) not null UNIQUE, password varchar(50) not null );"
11. Press Ctrl+Enter to execute query.
12. Now type "localhost/loginpageproject" in any web browser and press enter and press on "new_user.php"
13. Test the website as you like.
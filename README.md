# robot-base-control
In this project, the goal is to create an interface to control the robot's movement and store direction data in a database. I divided the task into several steps:

### 1. *Creating the Database:*
First, I created a database named **project** on MySQL. Inside this database, I created a table named **directions_4** with the following columns:
- **id**: A unique identifier that is auto-generated.
- **direction**: To store the direction specified by the user (e.g., Forward, Backward, etc.).

### 2. *Creating the User Interface:*
I designed an HTML page with buttons to allow me to control the robot's movement. The buttons are:
- *Forward*: Moves the robot forward.
- *Backward*: Moves the robot backward.
- *Left*: Turns the robot left.
- *Right*: Turns the robot right.
- *Stop*: Stops the robot’s movement.

I also added some CSS styling to make the page attractive, like hover effects on the buttons and background styling.

### 3. *Handling Data with PHP:*
When any of the buttons are clicked, the selected direction is sent to the server using *POST. On the server, **robotttt.php* handles inserting this data into the database.

### 4. *Storing Data in the Database:*
In the *robotttt.php* file, when the direction value is received via *POST, I connect to the database using **PHP*, then insert the direction into the **directions_4** table.

### 5. *Retrieving Data:*
After that, I created another page to display the last direction stored in the database. This file uses *db_connect.php* to connect to the database and execute an *SQL* query to retrieve the last value from the **directions_4** table.

### 6. *Displaying Stored Data:*
I also created another page (called *retrieve_lastt.php*) to display the last direction stored in the database.

---

### *Summary of Files:*
- *index.html*: Contains the user interface with buttons to control the robot.
- *robotttt.php*: Handles sending the directions to the database when the buttons are clicked.
- *db_connect.php*: Contains the database connection (used by several files).
- *retrieve_lastt.php*: Displays the last direction stored in the database.

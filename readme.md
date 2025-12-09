# Football Scoreboard for OBS

This project provides a web-based, self-hostable scoreboard for displaying live football scores in OBS Studio. It features a user-friendly dashboard to control team names and scores, which are then reflected in real-time within an OBS browser source.

Features
Live Score Updates: Scores and team names updated on the web dashboard reflect instantly in your OBS stream.
User Authentication: A simple signup and login system allows you to manage your own persistent scoreboard.
Unique Scoreboard URL: Each user receives a unique token-based URL to ensure their scoreboard is private.
Easy OBS Integration: Integrates seamlessly with OBS Studio as a browser source.
Simple Tech Stack: Built with PHP and MySQL, making it easy to deploy on most web hosting environments.
Prerequisites
A web server with PHP support (e.g., Apache, Nginx).
A MySQL or MariaDB database.
OBS Studio.
Installation
Download the repository files and upload them to your web server.

Create a new MySQL database on your server.

Import the user.sql file into your newly created database. This will set up the required user table.

Open the connects/config.php file and update the following variables with your database credentials:

$server = 'localhost'; // Your database server
$username = 'root';    // Your database username
$password = '';        // Your database password
$database = 'score';   // Your database name
Usage
Create an Account: Navigate to yourdomain.com/signup.php in your browser to create a new user account.
Log In: After signing up, go to yourdomain.com/login.php to log in. You will be redirected to the dashboard.
Control the Scoreboard: On the dashboard (dashboard.php), you can set the names for "Team A" and "Team B" and update their scores. Click the UPDATE button to save changes.
Get the OBS URL: Copy the unique URL provided on the dashboard. It will look like this: https://yourdomain.com/score.php?token=xxxxxxxxxxxxxx
Add to OBS:
In OBS Studio, add a new Browser source to your scene.
Paste the copied URL into the "URL" field.
Adjust the width and height as needed.
Go Live: The scoreboard will now appear in your OBS scene. Any updates made in your web dashboard will automatically apply to the OBS overlay.
How It Works
The application uses a simple but effective architecture:

dashboard.php: The control panel where you update the team names and scores. These changes are saved to the database for your user account.
score.php: The OBS browser source page. It uses jQuery to make an AJAX call every second to data.php.
data.php: This file fetches the latest team and score data from the database using the unique token from the URL and displays it.
Database: A single user table stores user information, team details, scores, and the unique token for URL generation.

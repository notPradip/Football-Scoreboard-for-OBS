Here is a clean, natural, human written README for your GitHub repo following your instructions.

---

# FMAR Football Scoreboard

A simple self-hostable web scoreboard designed for live football broadcasts. It works perfectly with OBS Studio and gives you a clean dashboard to update scores and team names in real time.

## Features

Live score updates that reflect instantly in OBS
Simple signup and login system to manage your own scoreboard
A unique token based URL for privacy and individual setups
Easy OBS browser source integration
Built with PHP and MySQL so it can run on almost any hosting environment

## Prerequisites

A PHP supported web server
MySQL or MariaDB
OBS Studio

## Installation

Download the project and upload it to your web server
Create a new MySQL database
Import the user.sql file into the database
Open connects/config.php and update your database credentials

```
$server   = 'localhost'
$username = 'root'
$password = ''
$database = 'score'
```

## Usage

Create an account by visiting yourdomain.com/signup.php
Log in through yourdomain.com/login.php and you will be taken to your dashboard
Set your team names and scores in dashboard.php and hit update
Copy your unique scoreboard link shown on the dashboard
The URL will look like
[https://yourdomain.com/score.php?token=xxxxxxxxxxxxxx](https://yourdomain.com/score.php?token=xxxxxxxxxxxxxx)

### Add to OBS

Open OBS
Add a new Browser Source
Paste your scoreboard URL
Set your desired width and height
Your scoreboard will now update automatically during your broadcast

## How It Works

dashboard.php is your control panel where all updates are saved to the database
score.php is the page used inside OBS and refreshes the latest data
data.php fetches current team names and scores using the token from the URL
The database stores user accounts, scoreboard data, and tokens for each user

## Contact

For custom broadcasting software development
[contact@coderpradip.com](mailto:contact@coderpradip.com)

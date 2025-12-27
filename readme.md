# Simple Football Scoreboard (PHP)

A simple, self-hostable web-based football scoreboard designed for live broadcasts.  
It integrates seamlessly with **OBS Studio** and provides a clean dashboard to update scores and team names in real time.

---

## Features

- Live score updates reflected instantly in OBS
- Simple signup and login system
- Unique token-based scoreboard URL for privacy
- Easy OBS Browser Source integration
- Built with PHP and MySQL (works on most shared hosting)

---

## Tech Stack

- PHP
- MySQL / MariaDB
- OBS Studio (for broadcasting)

---

## Prerequisites

- PHP-supported web server (Apache / Nginx)
- MySQL or MariaDB
- OBS Studio

---

## Installation

1. Download or clone the project and upload it to your web server.
2. Create a new MySQL database.
3. Import the `user.sql` file into the database.
4. Open `connects/config.php` and update your database credentials:

```php
<?php
$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'score';
```

---

## Usage

1. Create an account:
   ```
   https://yourdomain.com/signup.php
   ```

2. Log in:
   ```
   https://yourdomain.com/login.php
   ```

3. After login, you will be redirected to `dashboard.php`.

4. From the dashboard:
   - Set team names
   - Update scores
   - Click **Update** to save changes

5. Copy your unique scoreboard URL shown on the dashboard.

Example:
```
https://yourdomain.com/score.php?token=xxxxxxxxxxxxxx
```

---

## OBS Integration

1. Open OBS Studio
2. Add a new **Browser Source**
3. Paste your scoreboard URL
4. Set your preferred width and height
5. The scoreboard will update automatically during the broadcast

---

## How It Works

- `dashboard.php`  
  Control panel for updating teams and scores

- `score.php`  
  Display page used inside OBS

- `data.php`  
  Fetches scoreboard data using the token from the URL

- Database  
  Stores:
  - User accounts
  - Scoreboard data
  - Unique tokens per user

---

## Security Notes

- Each scoreboard uses a unique token-based URL
- Only logged-in users can update scores
- OBS viewers cannot access the dashboard

---

## Contact

For custom broadcasting software development:

Email: contact@coderpradip.com

---

## License

This project is open-source.  
You may modify and use it for personal or commercial broadcasts.

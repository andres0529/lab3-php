# Lab3 PHP

This is a project created to manage a club soccer team and store them in a database

## Getting Started

Let's clone the repo in your local machine https://github.com/andres0529/lab3-php.git


### Prerequisites

Apache Server running
MySql server running


### Installing

1) Create a new DB or set one

2) Run the next sql query 
        CREATE TABLE clubs (
        clubId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        clubName VARCHAR(50) NOT NULL,
        ground VARCHAR(50) NOT NULL);

        INSERT INTO clubs (clubName, ground)
        VALUES 
        ('Arsenal', 'Emirates Stadium'),
        ('Chelsea', 'Stamford Bridge'),
        ('Everton', 'Goodison Park'),
        ('Liverpool', 'Anfield'),
        ('Manchester City', 'The Etihad'),
        ('Manchester United', 'Old Trafford'),
        ('Tottenham Hotspur', 'White Hart Lane');

3) Check the config.inc.php file into "./includes" and set the info of your server 


## Built With

* PHP
* JS
* Bootstrap

## Authors

* **Andres Correa** - *Lab3* - [Georgian College](https://www.georgiancollege.ca/)

codesamples - Pedometer Metrics
===========

I made this project in about 2.5 days. Every year, my department does a "Virtual Walk" against the other departments, which involves everyone wearing a pedometer to see which department walks the most. This year, I was tired of sending everyone daily emails, so instead I set this up so they could do it at their own pace
To simplify the registration process, I just defaulted everyone to the same team, but left it open to modify if I need to use this again next year.

View this in context under /Source Code/PHP/pedometer - Deployment Copy

This folder shows the PHP logic used for collecting and graphing data.

Controllers contains the PHP
Routes contains the URI links to views and which controller should be used
Views contains the HTML


CONTROLLERS

controllers/metric.php
Contains logic used for adding and deleting step data.

controllers/user.php
Contains logic for logging in, registering a new user name, and any individual user requests. function get_profile also generates CSV files for each person

controllers/home.php
Used to display scoreboard of recent entries and current cumulative amount. Also has the "quick add" feature, to let people just add a number without having to go through the process of logging in and getting to profile page and then adding a number.


VIEWS

views/default.blade.php
Logic for changing the header bar if someone is logged in or not

views/user/profile.blade.php
Main profile page. Generates a graph with Javascript based on the user's metrics. Shows a bar graph of the number of steps each day
Form for adding Steps
Table for each day's number of steps and button to delete

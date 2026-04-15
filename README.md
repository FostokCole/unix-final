# Task Tracker Web Application

## Description
A web application made to allow users to create, read, update and delete tasks.

## Stack
- HTML, CSS, JavaScript
- PHP
- MariaDB
- Docker

## Features
- Create tasks
- View tasks
- Modify task content
- Remove tasks

## Project Structure
### **frontend/** 
- index.html: Main page which displays table data
- add.html: Contains the form to submit data to the table
- style.css: Basic styling to make our website nice
- script.js: Contains basic js functions to add cool and unique functionalities  
### **backend/**
- db_connection.php: A helper file to make database connection simpler
- add_tasks.php: A file to put data into the database
- get_tasks.php: A file dedicated to retrieving task data from the database
### **database/**
- schema.sql: Creates the database and tables
### **scripts/**
- backup.sh: Backs up the database into a file
### **docker/**
- TODO: ADD INFO

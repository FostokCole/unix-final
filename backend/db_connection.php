<?php
const DB_HOSTNAME = "db";
const DB_NAME = "";
const DB_USERNAME =  "";
const DB_PASSWORD = "";

$dsn = sprintf(
    "mysql:host=%s;dbname=%s;charset=utf8mb4",
    DB_HOSTNAME,
    DB_NAME
);


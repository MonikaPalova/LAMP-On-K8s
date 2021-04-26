<?php

$mysqli->query('CREATE DATABASE IF NOT EXISTS sample_lamp_app;');
$mysqli->query('USE sample_lamp_app;');
$mysqli->query('CREATE TABLE IF NOT EXISTS USERS
                  ( FirstName VARCHAR(255) NOT NULL,
                    LastName VARCHAR(255) NOT NULL,
                    UserId INT AUTO_INCREMENT PRIMARY KEY );');
?>

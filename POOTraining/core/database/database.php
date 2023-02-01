<?php

const DB_HOST = '127.0.0.1';
const DB_PORT = '3306';
const DB_NAME = 'poo_training';

try {
  $pdo = new PDO('mysql:host='. DB_HOST .';port'. DB_PORT .';dbname='. DB_NAME, getenv('DB_USER'), getenv('DB_PASSWORD'), [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ]);
} catch (PDOException $e) {
  throw new Exception($e->getMessage());
}

  return $pdo;

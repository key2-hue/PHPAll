<?php

define("DATABASE_NAME", 'practice_php');
define("DATABASE_USERNAME", 'dbuser');
define("DATABASE_PASSWORD",'keymaeda2');
define('PDO_DSN','mysql:dbhost=localhost;unix_socket=/tmp/mysql.sock;dbname='.DATABASE_NAME);

try {
  $pdo = new PDO(DATABASE_NAME,DATABASE_USERNAME,DATABASE_PASSWORD);
  $pdo->setAttribute(PDO::ATR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "エラー発生しました";
  echo $e->getMessage();
  exit;
}
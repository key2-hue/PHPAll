<?php

define("DATABASE_NAME", 'practice_php');
define("DATABASE_USERNAME", 'dbuser');
define("DATABASE_PASSWORD",'keymaeda2');
define('PDO_DSN','mysql:dbhost=localhost;unix_socket=/tmp/mysql.sock;dbname='.DATABASE_NAME);

try {
  $pdo = new PDO(PDO_DSN,DATABASE_USERNAME,DATABASE_PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  // $pdo->exec("insert into fruits (name, price) values ('apple', 300)");
  // echo "フルーツを登録しました！";

  $db = null;
} catch(PDOException $e) {
  echo "エラー発生しました";
  echo $e->getMessage();
  exit;
}
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


  // $sql = "update fruits set price = ? where id = ?";
  // $fruits = $pdo->prepare($sql);
  // $fruits->execute([500,1]);

  // $fruits = $pdo->prepare("insert into fruits (name, price) values (:name, :price)");
  // $fruits->execute([':name' => 'orange', ':price' => 700]);
  // echo $pdo->lastInsertId() . "番目のフルーツを登録しました！";
  // $fruits = $pdo->prepare("insert into fruits (name, price) values (:name, :price)");
  // $name = 'banana';
  // $fruits->bindParam(':name',$name, PDO::PARAM_STR);
  // $fruits->bindValue(':price', 700,PDO::PARAM_INT);
  // $fruits->execute();
  // $name = 'pineapple';
  // $fruits->bindParam(':name',$name, PDO::PARAM_STR);
  // $fruits->bindValue(':price',1000,PDO::PARAM_INT);
  // $fruits->execute();
  // $fruits->bindParam(':name',$name,PDO::PARAM_STR);
  // $fruits->bindParam(':price',$price,PDO::PARAM_INT);
  // $name = 'kiwi';
  // $price = 790;
  // $fruits->execute();
  // $name = 'peach';
  // $price = 200;
  // $fruits->execute();

  // $fruits = $pdo->prepare("delete from fruits where name = :name");
  // $fruitsAll = $fruits->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_UNIQUE);
  // // $fruits = $pdo->prepare("select * from fruits where name like ?");
  // // $fruits->execute(['%i%']);
  // foreach($fruitsAll as $fruit) {
  //   echo $fruit;
  //   echo '<br>';
  // }
  // $fruits->execute([
  //   ':name' => 'apple'
  // ]);
  // echo $fruits->rowCount() . "件削除されました";

  $pdo->beginTransaction();
  $pdo->exec("update fruits set price = price - 100 where name = 'orange'");
  $pdo->exec("update fruits set price = price + 100 where name = 'kiwi'");
  $pdo->commit();


} catch(PDOException $e) {
  $pdo->rollback();
  echo "エラー発生しました";
  echo $e->getMessage();
  exit;
}
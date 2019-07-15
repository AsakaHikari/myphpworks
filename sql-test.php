<?php
try {
    $pdo = new PDO ( 'mysql:dbname=test; host=localhost;port=3306; charset=utf8', 'phpuser', 'badpassword' );
    print '接続に成功しました。';
} catch ( PDOException $e ) {
    print "接続エラー:{$e->getMessage()}";
}

foreach($pdo->query('select * from table1;') as $row){
    echo '<p>'.htmlspecialchars($row['id'].' '.$row['name']).'</p>';
}

?>
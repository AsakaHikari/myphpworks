<?php
    try {
        $pdo = new PDO ( 'mysql:dbname=test; host=localhost;port=3306; charset=utf8', 'phpuser', 'badpassword' );
        print 'Connection Succeeded';
    } catch ( PDOException $e ) {
        print "Connection Error:{$e->getMessage()}";
    }
echo '<br>';
    echo 'select * from table1 where name='."'".htmlspecialchars($_POST['name'],ENT_QUOTES|ENT_HTML401)."'";
foreach($pdo->query('select * from table1 where name='."'".htmlspecialchars($_POST['name'],ENT_QUOTES|ENT_HTML401)."'") as $row){
    echo '<p>'.htmlspecialchars($row['id'].' '.$row['name']).'</p>';
}
?>
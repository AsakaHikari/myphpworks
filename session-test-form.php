<?php
$flg=session_start();
    $_SESSION['name']=$_POST['name'];
    echo 'I remember your name';
    ?>
<?php
$flg=session_start();
if($flg===TRUE){
    if(array_key_exists('name',$_SESSION)){
        echo 'Welcome back, '.$_SESSION['name']. '<br>';
    }else{

        echo 'Welcome, visitor <br>';
    }
    echo 'your session id is '.session_id().'<br>';
    echo 'session name is '.session_name();
}else{
}
?>
<form method="post" action="session-test-form.php">
        name：
        <input type="text" name="name" required>
        <input type="submit" value="送信">
    </form>
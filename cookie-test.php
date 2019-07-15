<?php
$times=(int)($_COOKIE["c-times"]);

setcookie("c-date",date("Y/m/d H:i:s"),time()+60*60*24*30);
setcookie("c-times",($times+1),time()+60*60*24*30);

if($times===0){
    echo 'This is your first visit. WELCOME!';
}else{
    echo 'You visited here at '.htmlspecialchars($_COOKIE["c-date"])."<br>";
    $str_times='';
    if($times===1){
        $str_times='once';

    }else if($times===2){
        $str_times='twice';
    }else{
        $str_times=((string)$times).'times';
    }
    
    echo 'You visited here '.$str_times.' before';
    }
?>
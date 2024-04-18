<?php
    session_start();
?>
<meta charset="utf-8">

<?php

$cID="chair";
$cPwd="123";

$rID="reviewer";
$rPwd="234";

$aID="author";
$aPwd="345";

$id=$_GET["id"];
$pwd=$_GET["pwd"];

if($id == $cID && $pwd == $cPwd){
    $_SESSION["login"]="chair";
    setcookie("userName",$id,time()+352800);
    header("Location:chair.php");
}else if($id == $rID && $pwd == $rPwd){
    $_SESSION["login"]="reviewer";
    setcookie("userName",$id,time()+352800);
    header("Location:reviewer.php");
}else if($id == $aID && $pwd == $aPwd){
    $_SESSION["login"]="author";
    setcookie("userName",$id,time()+352800);
    header("Location:author.php");
}else{
    $_SESSION["loginFail"]="fail";
    echo "<h3>帳號密碼錯誤</h3>";
    echo "<h3>2秒後自動跳回登入畫面</h3>";
    header("Refresh:2;url=fail.php");
}

?>
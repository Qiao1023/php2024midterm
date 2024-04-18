<html>
<head>
    <meta charset = "utf-8">
</head>

<?php
    session_start();
?>

<h1>論文投稿網頁：</h1>
<meta charset = "utf-8">

<?php
    $sTitle=$_POST["title"];
    echo "論文標題：" .$sTitle. "<br/>";
    $sAuthorName=$_POST["authorName"];
    echo "作者姓名：" .$sAuthorName. "<br/>";
    $sAuthorEmail=$_POST["authorEmail"];
    echo "作者Email：" .$sAuthorEmail. "<br/>";
    if(isset($_POST["sComment"])){
    $sComment=$_POST["sComment"];
    echo "論文摘要：".addslashes(nl2br($_POST["sComment"]));
    }
    echo "<a href='logout.php'><h3>Logout</h3></a>";
?>

</html>


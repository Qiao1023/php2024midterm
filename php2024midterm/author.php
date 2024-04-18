<?php
    include("include.inc");
?>

<form action ="showpaper.php" method="post">
<h1>Author您好，歡迎進入論文投稿網頁</h1>

<h3>論文標題：</h3>
<input type="text" name="title" required>
<h3>作者姓名：<input type="text" name="authorName" required></h3>
<h3>作者Email：<input type="text" name="authorEmail" required><br/></h3>

論文摘要：
<textarea name = "sComment" value = "" rows="10" cols="20"></textarea><br/>

<input type="submit" placeholder = "提交">

<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="author"){
    //echo "帳號密碼為第三組<br/>";
    echo "<a href='?logout=true'><h3>Logout</h3></a>";
    }else{
        echo "Illegal access to webpage <br/>";
    }
}
if(isset($_GET["logout"]) && $_GET["logout"] == "true") {
    session_destroy(); 
    header("Location: logout.php"); 
}

?>


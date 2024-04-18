<?php
    include("include.inc");
?>

<form action ="showreview.php" method="post">
<h1>Reviewer您好，歡迎進入論文評論網頁</h1>

論文評審決定：
<input type = "radio" name = "Accept" checked>Accept
<input type = "radio" name = "Minor Revision" >Minor Revision
<input type = "radio" name = "Major Revision" >Major Revision
<input type = "radio" name = "Reject" >Reject
<br/>

論文評論評語：
<textarea name = "sComment" value = "" rows="10" cols="20"></textarea><br/>

<input type="submit" name="submit" placeholder = "提交">

<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="reviewer"){
    //echo "帳號密碼為第二組<br/>";
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



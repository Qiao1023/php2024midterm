<html>
<head>
    <meta charset = "utf-8">
</head>

<?php
    session_start();
?>

<h1>論文評論網頁：</h1>
<meta charset = "utf-8">

<?php
if(isset($_POST["sComment"]))
    $sComment=$_POST["sComment"];
    echo "論文評語：".addslashes(nl2br($_POST["sComment"]));
    echo "<a href='logout.php'><h3>Logout</h3></a>";
?>

</html>


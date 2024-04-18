<?php
    include("include.inc");
?>

<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="chair"){
    echo "帳號密碼為第一組<br/>";
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


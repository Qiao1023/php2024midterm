<html>

<meta charset="utf-8">
<form action ="check.php" method ="GET">

<h1>高大資管論文投稿系統</h1>

請選擇您的角色：
<input type = "checkbox" name = "Crole" value = "chair" checked>Chair
<input type = "checkbox" name = "Rrole" value = "reviewer">Reviewer
<input type = "checkbox" name = "Arole" value = "author">Author

<h3>帳號：<input type="text" name="id" required><br/></h3>
<h3>密碼：<input type="password" name="pwd" required><br/></h3>

<input type="submit" placeholder = "提交">

</form>

<?php
if(isset($_COOKIE["userName"])){
    echo $_COOKIE["userName"]."歡迎回來";
}else{
    echo "這是您第一次到網站";
}
?>

</html>
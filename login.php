<html>
<head>
<style type="text/css">
 input[type=submit]{
                text-align: center;
                font-size: 10pt;
                color: #fff;
                margin-top: 20px;              
                background-color: #3e7bae;
                border-radius: 5px;
                padding: 10px 20px;
                text-transform: uppercase;
                text-decoration: none;
                box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
 }
 input{
         border: 1px black;
    border-radius: 5px;
    padding: 3px;
 }
 h1{
  color:white;
  font-size:24px;
  text-align:center;
 }
 form {
    margin: 0 auto;
    width: 280px;
    height: 200px;
    padding: 50px;
    background-color: #fff;
    border-radius: 20px;
 }
 body {
     background-image: url(cool-wallpaper-12.jpg);
    background-origin: content-box;
    background-position: center;
    font-family: arial;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Username:</td><td><input type='text' name='name'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>

</form>
<?php

if(!isset($_POST['name']) && !isset($_POST['pwd'])) {
    $_POST['name'] = "";
    $_POST['pwd'] = "";
}
else {
     if ($_POST['name'] == "jideojabs" && $_POST['pwd'] == "jayjay") 
{
    header('location:weather.php');
}
 

    else {
        echo "Wrong username and passsword";
    }
}
   

?>
</body>
</html>
<?php
if(isset($_POST['rememberMe']) && isset($_POST['firstname'])&& $_POST['firstname']!=""){
$filteredFirstname = filter_input(INPUT_POST,'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    setcookie('name',$filteredFirstname );
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HTTP Cookies</title>
   </head>
    <body>
        <h1>This is a simple web page that uses a Cookie</h1>
        <?php if(isset($_COOKIE['name'])& !empty($_COOKIE['name'])){
        $name = $_COOKIE['name']; 
        }
        ?>
        <form action="" method="POST">
            <input  type="text" name="firstname" value="<?php if(isset($name)){echo $name;} ?>" />
            <input type="checkbox" name="rememberMe" />
            <label for="rememberMe" value="Remember Me?" />
            <input type="submit" value="Submit" />
        </form> 
    </body>
</html>

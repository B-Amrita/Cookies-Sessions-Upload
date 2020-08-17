<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Multidimensional</title>
    </head>
    <body>
<form action="" method="POST">
<input type="text" name="User[name]" value = "Bob">
<input type="password" name="User[password]" value="secret">
<input type="text" name="User[opt][]" value="abc">
<input type="text" name="User[opt][]" value="def">
<input  type="submit" value="OK" />
</form>
        <?php
        echo "Access each value individually like a multidimensional array: <br>";
        echo $_POST['User']['name'] . "<br />";
        echo $_POST['User']['password'] . "<br /><br />";
        echo "Access all values together in a variable and treat that like an associative array: <br>";
        $userData = $_POST['User'];
        echo $userData['name'] . "<br />";
        echo $userData['password'] . "<br /><br />";
        echo "Access all values in a sequential array: <br>";
        echo $userData['opt'][0] . "<br>";
        echo $_POST['User']['opt'][1] . "<br>";
        print_r($_POST);
        ?>
    </body>
</html>

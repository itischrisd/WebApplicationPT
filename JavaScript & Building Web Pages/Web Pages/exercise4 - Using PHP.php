<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web Pages exercise</title>
    </head>
    <body>
        <form action="" method="POST">
            Username:<input type="text" name="user"><br>
            Password:<input type="password" name="pswd"><br>
            <input type="submit">
        </form>

        Welcome <?php echo $_POST['user']; ?>
    </body>
</html>
dddd
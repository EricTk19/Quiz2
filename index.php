<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="from">
        <form action="process.php" method="POST">
            <p>
                <label>Username</label>
                <input type="text" id="user" name="user" />
            </p>
            <p>
                <label>Password</label>
                <input type="password" id="pass" name="pass" />
            </p>
            <p>
                <input type="submit" id="button" value="Login" />
            </p>
        </form>
    </div>
    
</body>
</html>
<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="app.css">

</head>

<body>

    <div class="header">
        <div class="col-1">
            <h1>Xceed Electrical</h1>
            <p>Unit 10, 15 Childs Road, Chipping Norton<br>NSW Sydney Australia 2170<br>02 9725
                4069<br>info@exceedelectrical.com.au<br>www.exceedelectrical.com.au</p>
        </div>
        <div class="col-2">
            <h1 style="color: green"><u>Login</u></h1>
        </div>
    </div>

    <form action="login.php" method="post">

        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>


        <div class="login">
            <label>Company Username</label>

            <input type="text" name="uname" placeholder="User Name"><br>

            <label>Company Password</label>

            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit" class="button">Login</button>
        </div>
    </form>

</body>

</html>
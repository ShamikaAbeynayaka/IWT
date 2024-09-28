<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body style="background-image: url(assets/img/loginbg.jpg);">

<div class="container">
    <h2>Login</h2>
       <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
    <form method="post" action="login.php">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
    <h5>Don't you have a account </h5>

    <div class="form-group">
            <a href="register.php"><button type="submit">Register Now </button></a>
 </div>

</div>

</body>
</html>
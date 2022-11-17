<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="page1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet"/>
    <title>Admin Login</title>
</head>
<body background="background.jpeg">
<section>
        <div class="heading">
            <table>
                <tr>
                    <td><img src="logo.png" alt=""></td>
                    <td align="right"><h3>Royal International Residential School</h3></td>
                </tr>
            </table>
        </div>
        <div>
            <h2>Welcome Admin!</h2>
        </div>
        <form action="validate.php" method="post">
            <div class="input">
                <label for="username">Username</label>
                <input type="text" name="username" autocomplete="off">
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div class="btn input">
                <button name="login">Sign in</button>
            </div>
        </form>
    </section>
</body>
</html>
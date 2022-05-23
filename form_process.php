<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Proses</title>
    </head>
    <body>
        <h1>Form Submission with GET Method</h1>
        <p>Welcome <?php echo $_GET["username"];?></p>
        <p>Your password is <?php echo $_GET["password"];?></p>
        <p> Remember me is <?php echo $_GET["remember"];?></p>
        <p><a href="form_login6.html">Back to login</a></p>
    </body>
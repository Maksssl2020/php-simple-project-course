<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In - My Website</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
<?php include 'header.php'; ?>
<div class="form-container">
    <h1 class="page-title">Sign In</h1>
    <form class="form" method="post">
        <div class="form-input">
            <label for="email">E-mail address</label>
            <input type="email" id="email" name="email" />
        </div>

        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"/>
        </div>

        <button>Submit</button>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
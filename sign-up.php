<?php
    require "utils.php";

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = addslashes($_POST["username"]);
      $email = addslashes($_POST["email"]);
      $password = addslashes($_POST["password"]);
      $confirmPassword = addslashes($_POST["confirmPassword"]);

      if ($password != $confirmPassword) {
          $error = "Passwords must be equal!";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - My Website</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
    <?php include 'header.php'; ?>
        <div class="form-container">
            <h1 class="page-title">Sign Up</h1>
            <form class="form" method="post">
                <div class="form-input">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"  required/>
                </div>

                <div class="form-input">
                    <label for="email">E-mail address</label>
                    <input type="email" id="email" name="email"  required/>
                </div>

                <div class="form-input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required/>
                </div>

                <div class="form-input">
                    <label for="confirmPassword">Confirm password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword"  required/>
                </div>

                <button>Submit</button>
            </form>

            <?php if (!empty($error)): ?>
                <p class="error-message">
                    <?php echo $error;?>
                </p>
            <?php endif; ?>
        </div>
    <?php include 'footer.php'; ?>
</body>
</html>
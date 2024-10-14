<?php
  // Start the session
  session_start();
  // Set a short-lived cookie on the client-side
  setcookie('session_id', session_id(), time() + 300); // expires in 5 minutes

  // Check if the user is already logged in
  if (isset($_SESSION['username'])) {
    // If the user is already logged in, redirect them to the homepage
    header('Location: homepage.php');
    exit;
  }
?>
<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the username from the form
    $username = $_POST['username'];

    // Save the username as a session variable
    $_SESSION['username'] = $username;

    // Redirect the user to the homepage
    header('Location: index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="public\styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Login</h2>
                <form method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
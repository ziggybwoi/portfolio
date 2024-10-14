<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title><?php echo $ContactpageTitle; ?></title>   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center text-center">
                <div class="container text-left" style="width: 60%; margin: 0 auto;">
                    <h1><?php echo $Contactheader; ?></h1>
                    <p>If you have any questions or would like to get in touch, feel free to reach out to me via the following methods:</p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>Email</h2>
                    <p>You can reach me at: <a href="mailto:franzfortaleza22@gmail.com" style="text-decoration: underline; color: inherit;">franzfortaleza22@gmail.com</a></p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>Phone Number</h2>
                    <p>You can call me at: <a href="phone:09615539609" style="text-decoration: underline; color: inherit;">+63 961-553-9609</a></p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <p>I look forward to hearing from you!</p>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js\script.js"></script>
</body>
</html>
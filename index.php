<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title><?php echo $IndexpageTitle; ?></title>
   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center">
                <div class="text-align-left">
                    <div class ="img-circle-container">
                        <img src="public\images\Fortaleza, Franz Andrew.jpg" alt="Franz" class="img-circle">
                    </div>
                    <h1><?php echo $Indexheader; ?></h1>
                    <h2>Hi! <span class="waving-hand">👋</span> I'm Franz!</h2>
                    <p>This is my portfolio showcasing my achievements and works.</p>
                    <!-- Add more content here -->
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








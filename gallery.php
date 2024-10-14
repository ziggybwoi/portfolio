<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title><?php echo $GallerypageTitle; ?></title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery img {
            width: 200px;
            height: 150px;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center text-center h-150">
                <div class="container text-left" style="width: 80%; margin: 0 auto;">
                    <h1><?php echo $Galleryheader; ?></h1>
                    <p>This page showcases memories, and snippets of my journey.</p>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>Photos</h2>
                    <div class="gallery">
                        <img src="public\images\taskmanager.png" alt="Project 1">
                        <img src="public\images\Hangman.png" alt="Project 2">
                        <img src="public\images\GuessingGame.png" alt="Project 3">
                        
                    </div>
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
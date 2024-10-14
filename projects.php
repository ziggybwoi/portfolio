<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title><?php echo $ProjectspageTitle; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center text-center h-150">
                <div class="container text-left" style="width: 60%; margin: 0 auto;">
                    <h1><?php echo $Projectsheader; ?></h1>
                    <p>This page showcases some of the projects I've worked on. </p>
                    <p>Disclamer: These projects showcased below are mainly for website showcase only, but are legit projects. Will add actual projects in the future.</p>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <!-- Projects -->
                    <h2>Projects</h2>
                    <div class="row">
                    <div class="col-md-12" style="padding: 1rem; border: 1px solid #ddd; width: calc(100% - 2rem); margin: 0 auto;">
                            <h3>Personal Projects</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>
                                    <a href="#">Project 1: Task Manager System using JAVA (1st Year)</a>
                                    <p>A simple system that does what a task manager would do. To organize, track, and prioritize tasks.</p>
                                </li>
                                <li>
                                    <a href="#">Project 2: Hangman using C++ (1st Year)</a>
                                    <p>A simple hangman concept game that generates a random word related to programming languages.</p>
                                </li>
                                <li>
                                    <a href="#">Project 3: Guessing Game using JAVA (2nd Year)</a>
                                    <p>A simple guessing game that utilizes the concept of "Pinoy Henyo."</p>
                                </li>
                                
                            </ul>
                        </div>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
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
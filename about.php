<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title><?php echo $AboutpageTitle; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center text-center h-150">
                <div class="container text-left" style="width: 60%; margin: 0 auto;">
                    <h1><?php echo $Aboutheader; ?></h1>
                    <p>This page is where you will get to know Franz!</p>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>Background</h2>
                    <p>I'm Franz, a computer science major with a passion for building innovative solutions that make a difference. <br> 
                    With a strong foundation in programming languages, data structures, and software engineering, I'm always looking for ways to improve my skills and stay up-to-date with the latest technologies.</p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>My Interests</h2>
                    <p>In my free time, I enjoy exploring new programming languages, contributing to open-source projects, and participating in coding challenges. <br>
                    I'm also fascinated by artificial intelligence, machine learning, and cybersecurity, and I'm always looking for opportunities to learn more about these topics.</p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>My Goals</h2>
                    <p>As a computer science major, my ultimate goal is to create software solutions that make a positive impact on people's lives. I'm committed to continuously learning and improving my skills, and I'm excited to see where my passion for coding takes me in the future.</p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <a href="contact.php" style="text-decoration: none; color: inherit;">
                        <h2 class="get-in-touch">Get in Touch</h2>
                    </a>
                    <p>If you'd like to get in touch or learn more about my projects, feel free to reach out to me through my contact page. I'd love to hear from you!</p>
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
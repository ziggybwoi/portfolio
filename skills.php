<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title><?php echo $SkillspageTitle; ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center text-center h-150">
                <div class="container text-left" style="width: 60%; margin: 0 auto;">
                    <h1><?php echo $Skillsheader; ?></h1>
                    <p>This page showcases what I've learned and what I can do.</p>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <!-- Programming Languages -->
                    <h2>Programming Languages</h2>
                    <div class="row">
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Proficient</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Java</li>
                                <li>Python</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Familiar</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>C++</li>
                                <li>C#</li>
                            </ul>
                        </div>
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Learning</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Python</li>
                            </ul>
                        </div>
                    </div>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    <!-- Web Development -->
                    <h2>Web Development</h2>
                    <div class="row">
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Front-end</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>Bootstrap</li>
                            </ul>
                        </div>
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Back-end</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>PHP</li> 
                            </ul>
                        </div>
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Databases</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>MySQL</li>
                            </ul>
                        </div>
                    </div>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">

                    <!-- Other Skills -->
                    <h2>Other Skills</h2>
                    <div class="row">
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Soft Skills</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Communication</li>
                                <li>Teamwork</li>
                                <li>Problem-solving</li>
                            </ul>
                        </div>
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Technical Writing</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Documentation</li>
                                <li>Blogging</li>                               
                            </ul>
                        </div>
                        <div class="col-md-4 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Leadership</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Team leadership</li>
                                <li>Project management</li>
                            </ul>
                        </div>
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
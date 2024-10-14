<?php include ('php-main\session_check.php')?>
<?php include ('php-main\header.php')?>

<head>
    <title>Resume</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <?php include 'php-main\menu.php'; ?>
            <main class="col-sm-9 d-flex flex-column justify-content-center align-items-center text-center">
                <div class="container text-left" style="width: 60%; margin: 0 auto;">
                    <h1>Resume</h1>
                    <p>Here's a summary of my education, skills, and experiences.</p>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>Education</h2>
                    <ul>
                        <li>High School Diploma, St. Joseph's School - La Salle (2019-2020)</li>
                        <li>Senior High School Diploma, Liceo De La Salle (20XX-20XX)</li>
                        <li><strong>Bachelor of Science in Computer Science</strong>, University of St. La Salle - Bacolod (20XX-20XX)</li>
                    </ul>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <a href="skills.php" style="text-decoration: none; color: inherit;">
                        <h2 class="tech-stack">Tech Stack</h2>
                    </a>
                    <div class="row" style="width: 100%; margin: 2rem 0;">
                        <div class="col-md-6 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Proficient</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Java</li>
                                <li>C++</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                        <div class="col-md-6 border-box" style="padding: 1rem; border: 1px solid #ddd;">
                            <h3>Still Learning</h3>
                            <ul style="list-style: none; padding: 0; margin: 0;">
                                <li>Python</li>
                                <li>React</li>
                                <li>JavaScript</li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <h2>Experience</h2>
                    <ul>
                        <li><strong>Web Development Intern</strong>, ABC Company (Summer 2023)</li>
                        <li>Collaborated with a team of developers to design and implement new features</li>
                    </ul>
                    <hr style="margin-top: 2rem; width: 100%; border: none; border-top: 3px solid currentColor;">
                    
                    <p>I'm excited to continue learning and growing as a developer. Thank you for taking the time to review my resume!</p>
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
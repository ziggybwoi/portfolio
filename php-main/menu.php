<?php include ('header.php')?>
<?php
// menu.php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

    <nav class="col-sm-3 sidebar d-flex flex-column " id="sidebar">
        
        <h3>Welcome, <?php echo $_SESSION['username']; ?>! </h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == 'About.php') ? 'active' : ''; ?>" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($currentPage == 'resume.php') ? 'active' : ''; ?>" href="resume.php">Resume</a>
            </li>
        
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="creativeHubDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Creative Hub
                </a>
                <div class="dropdown-menu" aria-labelledby="creativeHubDropdown">
                    <a class="dropdown-item <?php echo ($currentPage == 'Projects.php') ? 'active' : ''; ?>" href="projects.php">Projects</a>
                    <a class="dropdown-item <?php echo ($currentPage == 'Skills.php') ? 'active' : ''; ?>" href="Skills.php">Skills</a>
                    <a class="dropdown-item <?php echo ($currentPage == 'Gallery.php') ? 'active' : ''; ?>" href="Gallery.php">Gallery</a>
                </div>
            </li>
        </ul>
        <div class="datentime mt-auto">
            <a style="font-weight: 300; display: block;">
                <?php
                    date_default_timezone_set('Asia/Manila');

                    $day = date('l');
                    $month = date('F j, Y');
                    $time = date('h:i A');

                    echo $day . ", ". $month . "<br>" . $time;
                ?>
            </a>
        </div>
    </nav>


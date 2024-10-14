<?php
  // Start the session
  session_start();

  // Check if the session has been inactive for more than 10 minutes
  if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > 600) {
    // If the session has been inactive for more than 10 minutes, expire the session
    session_unset();
    session_destroy();
  }

  // Update the last activity timestamp
  $_SESSION['last_activity'] = time();
?>
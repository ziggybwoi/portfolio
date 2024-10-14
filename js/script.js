document.addEventListener('DOMContentLoaded', function() {
    // Display current date
    const currentDate = new Date();
    document.getElementById('current-date').textContent = currentDate.toLocaleDateString();

    // Check for inactivity
    let inactivityTime = function() {
        let time;
        window.onload = resetTimer;
        document.onmousemove = resetTimer;
        document.onkeypress = resetTimer;
    
        function logout() {
            alert('You have been logged out due to inactivity.');
            window.location.href = 'login.php';
        }
    
        function resetTimer() {
            clearTimeout(time);
            time = setTimeout(logout, 600000); // 10 minutes of inactivity
        }
    };
    
    inactivityTime();
});

$(document).ready(function() {
    $('#creativeHubDropdown').click(function() {
        $(this).next('.dropdown-menu').toggle();
    });
});


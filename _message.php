<?php

// Check if the session exists
if (isset($_SESSION['submit_success'])) {
    // Pass the session message to JavaScript
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            showSmallAlert('" . $_SESSION['submit_success'] . "');
        });
    </script>";

    // Unset the session variable after showing the alert
    unset($_SESSION['submit_success']);
}
?>
<script>
    let timerInterval;

    function showSmallAlert(message) {
        const swalAlert = Swal.fire({
            position: 'top-end',            // Position the alert at the top-end
            icon: 'success',                // Success icon (green checkmark)
            title: message,                 // Use the dynamic message
            showConfirmButton: false,       // No confirmation button
            timer: 3000,                    // Automatically closes after 3 seconds
            toast: true,                    // Makes it a small toast-style alert
            customClass: {
                popup: 'small-alert-popup'  // Custom class for extra styling (optional)
            },
            willOpen: () => {
                const swalPopup = Swal.getPopup();

                // Pause timer when mouse enters
                swalPopup.addEventListener('mouseenter', () => {
                    Swal.stopTimer();
                });

                // Resume timer when mouse leaves
                swalPopup.addEventListener('mouseleave', () => {
                    Swal.resumeTimer();
                });
            }
        });
    }
</script>
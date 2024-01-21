<?php
session_start();
function showSuccessMessage() {
        if(isset($_SESSION['sesscess']) && $_SESSION['sesscess'] == true) {
        unset($_SESSION['sesscess']);
        echo '<script>
            Swal.fire({
                    title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
        </script>';
    }
}

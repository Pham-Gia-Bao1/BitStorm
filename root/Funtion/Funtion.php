<?php

session_start();
function showSuccessMessage()
{
    if (isset($_SESSION['sesscess']) && $_SESSION['sesscess'] == 1) {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
        Swal.fire({
            title: "Thành công",
            icon: "success"
          });
        </script>';
        unset($_SESSION['sesscess']); // Unset the session variable to show the message only once
    }
}
function showError() {
    if (isset($_SESSION['error']) && $_SESSION['error']  == 1) {
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
        Swal.fire({
            title: "Thất bại",
            text: "Something went wrong!",
            icon: "error"
        });
    </script>';
    }
    unset($_SESSION['error']);
}

    

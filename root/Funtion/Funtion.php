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
    if (isset($_SESSION['error'])) {
        $errorMessage = htmlspecialchars($_SESSION['error'], ENT_QUOTES, 'UTF-8');
        $jsonErrorMessage = json_encode($errorMessage);
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
            Swal.fire({
                title: "Thất bại",
                text: ' . $jsonErrorMessage . ',
                icon: "error"
            });
        </script>';
    }
    unset($_SESSION['error']);
}

function showError_booking() {
    if (isset($_SESSION['error1'])) {
        $errorMessage = htmlspecialchars($_SESSION['error'], ENT_QUOTES, 'UTF-8');
        $jsonErrorMessage = json_encode($errorMessage);
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>
            Swal.fire({
                title: "Bạn chưa đăng nhập!",
                text: ' . $jsonErrorMessage . ',
                icon: "error"
            });
        </script>';
    }
    unset($_SESSION['error1']);
}



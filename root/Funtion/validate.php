<?php
function sanitizeInput($input)
{
    $sanitizedInput = trim($input);
    $sanitizedInput = htmlspecialchars($sanitizedInput, ENT_QUOTES | ENT_HTML5);
    return $sanitizedInput;
}
function validate_name($name)
{
    $usernamePattern = '/^[a-zA-Z0-9\s]+$/';
    if (preg_match($usernamePattern, $name)) {
        return true;
    }
    return false;
}

function validate_form_experts($id, $role_id, $full_name, $gender, $address, $email, $phone_number, $age, $experience, $profile_picture, $count_rating, $certificate, $specialization, $status)
{
    $namePattern = '/^[a-zA-Z\s]+$/';
    $emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
    $phonePattern = '/^\d{10}$/';
    $agePattern = '/^\d+$/';

    $id_error = "";
    $role_id_error = "";
    $name_error = "";
    $gender_error = "";
    $address_error = "";
    $email_error = "";
    $phone_number_error = "";
    $age_error = "";
    $experience_error = "";
    $profile_picture_error = "";
    $count_rating_error = "";
    $certificate_error = "";
    $specialization_error = "";
    $status_error = "";

    if (empty($id)) {
        $id_error = "ID không được để trống";
    }

    if (empty($role_id)) {
        $role_id_error = "Role ID không được để trống";
    }

    if (!preg_match($namePattern, $full_name)) {
        $name_error = "Họ và tên không đúng định dạng";
    }
    $errors = compact(
        'id_error', 'role_id_error', 'name_error', 'gender_error', 'address_error',
        'email_error', 'phone_number_error', 'age_error', 'experience_error',
        'profile_picture_error', 'count_rating_error', 'certificate_error',
        'specialization_error', 'status_error'
    );
    foreach ($errors as $error) {
        if (!empty($error)) {
            return $errors;
        }
    }
    return true;
}

function validate_form($username, $email, $password)
{
    $usernamePattern = '/^[a-zA-Z0-9\s]+$/';
    $passwordPattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_\-+=]).{8,}$/';
    $emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
    $name_error = "";
    $email_error = "";
    $password_error = "";
    if (!preg_match($usernamePattern, $username)) {
        $name_error = "Tên không đúng yêu cầu";
    }
    if (!preg_match($emailPattern, $email)) {
        $email_error = "Email không đúng yêu cầu";
    }
    if (!preg_match($passwordPattern, $password)) {
        $password_error = "Mật khẩu không đúng yêu cầu";
    }
    if (!empty($name_error) || !empty($email_error) || !empty($password_error)) {
        return compact('name_error', 'email_error', 'password_error');
    }
    return true;
}


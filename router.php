<?php
include_once("../Model/UserProfileModel.php");
$userprofile = new UserProfile();
$role_id = $userprofile->get_role_id();
$requestUri = $_SERVER['REQUEST_URI']; // BitStorm/adminUser
$baseUrl = 'BitStorm/'; // Đường dẫn gốc của ứng dụng
$relativePath = str_replace($baseUrl, '', $requestUri); // /adminUser
$parts = explode('/', $relativePath); // [adminUser]
if ($relativePath === '') {
    require_once("/BitStorm/Controller/HomeController.php");
    $controller = new HomeController();
    $controller->index();
    exit();
}
$controllerName = ucfirst($parts[0]) . 'Controller'; // Sửa lấy phần tử đầu tiên của $parts
$controllerPath = 'Controller/' . $controllerName . '.php';
if (file_exists($controllerPath)) {
    if ($role_id = 2 && strpos($controllerName, 'Admin') === 0) {
        header("HTTP/1.0 403 Forbidden");
        echo "Access denied";
        exit();
    } else{
            require_once $controllerPath;
    }
    $controller = new $controllerName();
    if (isset($parts[1])) { // Sửa kiểm tra phần tử thứ hai của $parts
        $methodName = $parts[1]; // Sửa lấy phần tử thứ hai của $parts
        if (method_exists($controller, $methodName)) {
            $controller->$methodName();
            exit();
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Method not found";
            exit();
        }
    } else {
        $controller->index();
        exit();
    }
}
header("Location: home");
echo "Page not found";

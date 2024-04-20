<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['staffid'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Read the logged-in user's permission ID
$permissionId = $_SESSION['permission_id'];

// Determine the appropriate dashboard based on permission ID
switch ($permissionId) {
    case 1:
        // Redirect to the dashboard for users with permission ID 1 (SysAdmin)
        header("Location: sysadmin.php");
        break;
    case 2:
        // Redirect to the dashboard for users with permission ID 2 (FinHead)
        header("Location: finhead.php");
        break;
    case 3:
        // Redirect to the dashboard for users with permission ID 3 (Index)
        header("Location: finmang.php");
        break;
    case 4:
        // Redirect to the dashboard for users with permission ID 4 (Admin)
        header("Location: finofi.php");
        break;
    case 5:
        // Redirect to the dashboard for users with permission ID 5 (Register)
        header("Location: other-user.php");
        break;
    case 6:
        // Redirect to the dashboard for users with permission ID 6 (Login)
        header("Location: other-user.php");
        break;
    default:
        // Redirect to a default page or show an error message
        header("Location: index.php");
        break;
}


<?php
// include './database/database.php';
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $db = new Database();

//     $email = $db->$_POST['email'];
//     $password = $db->password_hash($_POST["password"], PASSWORD_DEFAULT);

//     // $hashed_password = md5($password); // Example: Using MD5 hash (not recommended for production)

//     $sql = "SELECT username FROM admin_user WHERE email='$email' AND password='$password' LIMIT 1";
//     $result = $db->query($sql);

//     if ($result && $result->num_rows == 1) {
//         // Fetch the username from the result
//         $row = $result->fetch_assoc();
//         $username = $row['username'];

//         // Admin authenticated, set session variables
//         $_SESSION['admin_logged_in'] = true;
//         $_SESSION['admin_username'] = $username;

//         header("Location: http://localhost/education/admin/index.php"); // Redirect to admin dashboard
//         exit();
//     } else {
//         // Authentication failed
//         $_SESSION['login_error'] = "Invalid email or password";
//         header("Location: http://localhost/education/login.php"); // Redirect back to login page
//         exit();
//     }
// } else {
//     header("Location: http://localhost/education/login.php"); // Redirect if accessed directly
//     exit();
// }


?>

<?php
include './database/database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database();

    $email = $db->escapeString($_POST['email']); // Escape input to prevent SQL injection
    $password = $_POST['password']; // Password entered by user

    // Fetch user details from database based on email
    $sql = "SELECT * FROM admin_user WHERE email='$email' LIMIT 1";
    $result = $db->query($sql);

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $hashed_password = $user['password']; // Hashed password stored in database

        // Verify password using password_verify
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $user['username'];

            // Redirect to admin dashboard upon successful login
            header("Location: http://localhost/education/admin/index.php");
            exit();
        } else {
            // Password incorrect
            $_SESSION['login_error'] = "Invalid email or password";
            header("Location: http://localhost/education/login.php"); // Redirect back to login page
            exit();
        }
    } else {
        // User with given email not found
        $_SESSION['login_error'] = "Invalid email or password";
        header("Location: http://localhost/education/login.php"); // Redirect back to login page
        exit();
    }
} else {
    // Redirect if accessed directly without POST request
    header("Location: http://localhost/education/login.php");
    exit();
}
?>


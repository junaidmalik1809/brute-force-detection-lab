## Basic-Login-Page ##

?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === 'admin' && $pass === 'secret') {
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }
    exit;
}
?>

<h2>Login Form</h2>
<form method="POST" action="index.php">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>

## This was basic login page code used from internet ##

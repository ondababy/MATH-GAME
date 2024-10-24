<?php
session_start();

include("../includes/header.php");
include("../db/config.php");

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $pass = sha1(trim($_POST['password']));
    $sql = "SELECT user_id, email FROM users WHERE email=? AND password=? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $email, $pass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt, $user_id, $email);
    
    if (mysqli_stmt_num_rows($stmt) === 1) {
        mysqli_stmt_fetch($stmt);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user_id;
        header("Location: ../index.php");
        exit(); 
    } else {
        $_SESSION['message'] = 'Wrong email or password.';
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Sign In</h4>
                </div>
                <div class="card-body">
                    <?php include("../includes/alert.php"); ?>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" id="email" class="form-control" name="email" required />
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" required />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Sign In</button>
                        <div class="text-center mt-3">
                            <p>Not a member? <a href="register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// include("../includes/footer.php");
?>

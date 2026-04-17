<?php
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // LOGIN ADMIN
    if ($username === 'admin' && $password === 'admin1234') {
        header("Location: home_admin.php");
        exit;
    }

    // LOGIN USER
    if ($username === 'user' && $password === 'user1234') {
        header("Location: home.php");
        exit;
    }

    // ERRORE
    $error = "Credenziali non valide";
}
?>

<!doctype html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4" style="width: 300px;">
        <h3 class="text-center">Login</h3>

        <?php if ($error): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST">

            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button class="btn btn-primary w-100">Accedi</button>

        </form>
    </div>

</div>

</body>
</html>
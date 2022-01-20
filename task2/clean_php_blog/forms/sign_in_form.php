<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="d-flex" style="background-color: #ffe76f">
        <h3>simple blog</h3>
    </header>

<div class="container">
    <form method="post" class="mt-5" action="../scripts/sign_in.php">

        <input name='name' class="form-control" type="text" placeholder="Enter your name" required><br>
        <input name='pass' class="form-control" type="password" placeholder="Enter password" required><br>
        <input name="is_adnin" hidden>
        <input type="submit" class="btn btn-success" value="sign in"><br>
    </form>
    <a href="register_form.php">Register now</a>
</div>
</body>
</html>



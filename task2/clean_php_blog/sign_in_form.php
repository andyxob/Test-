<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="d-flex" style="background-color: #F7A0FF">
        <h3>simple blog</h3>
    </header>

<div class="container">
    <form method="post" action="sign_in.php">

        <input name='name' class="form-control" type="text" placeholder="Enter your name" required><br>
        <input name='pass' class="form-control" type="password" placeholder="Enter password" required><br>
        <input type="submit" class="btn btn-success" value="sign in"><br>
    </form>
    <a href="register_form.php"><h1>Register now</h1></a>
</div>
</body>
</html>
<html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<header class="d-flex" style="background-color: #F7A0FF">
    <h3>simple blog</h3>
</header>
<div class="container">
    <form method="post" action="valid.php">
        <input name='name' class="form-control" type="text" placeholder="Enter your name" required><br>
        <input name='email' class="form-control" type="email" placeholder="Enter email" required><br>
        <input name='pass' class="form-control" type="password" placeholder="Enter password" required><br>
        <input name='date' class="form-control" type="date" placeholder="Enter birth date"><br>
        <input type="submit" class="btn btn-success" value="add"><br>
    </form>
</div>


</body>
</html>


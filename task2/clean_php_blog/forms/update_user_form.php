<html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include_once ('../scripts/update_user.php')?>
<div class="container">
    <form method="post" class="mt-5" action="../scripts/update_user.php">
        <input name="id" type="hidden"  value="<?php echo $id; ?>">
        <input name="name" class="form-control" type="text" value="<?php echo $name; ?>" placeholder="Enter user`s name " required><br>
        <input name="email" class="form-control" type="email" value="<?php echo $email; ?>" placeholder="Enter email" required><br>
        <input name="password" class="form-control" type="text" value="<?php echo $password; ?>" placeholder="Enter password" required><br>
        <input name="is_admin" hidden>
        <input name="date" class="form-control" value="<?php echo $date; ?>" type="date" placeholder="Enter birth date"><br>
        <input name ="update" type="submit" class="btn btn-success"  value="Edit" ><br>
    </form>
</div>
</body>
</html>
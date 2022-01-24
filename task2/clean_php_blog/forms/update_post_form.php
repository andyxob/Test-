
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    require_once('../scripts/update_post.php');
?>
<div class="container">
<form method="post" action="../scripts/update_post.php" class="mt-5">
    <input type="text" class="form-control"  placeholder="Title" name="title" value="<?php echo $title ; ?>"><br>
    <input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo $description ; ?> "><br>
    <input type="submit" class="btn btn-success" value="Edit">
</div>
</form>

</body>
</html>

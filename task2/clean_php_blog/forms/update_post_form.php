

<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
include ('../scripts/update_post.php');
?>
<div class="container">
<form method="post" action="../forms/update_post_form.php" class="mt-5">
    <input type="text" class="form-control" placeholder="Title" name="title"><br>
    <input type="text" class="form-control" placeholder="Description" name="description"><br>
    <input type="hidden"  name="id "><br>
    <input type="submit" class="btn btn-success" value="Edit">
</div>
</form>
</form>
</body>
</html>

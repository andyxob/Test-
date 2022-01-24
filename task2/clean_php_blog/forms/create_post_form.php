<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container mt-5">
        <form method="post" action="../scripts/create_post.php">
            <input type="text" placeholder="title" class="form-control" name="title" required><br>
            <input type="text" placeholder="description" class="form-control" name="description"  required><br>
            <input type="submit" class="btn btn-success" value="Create post"><br>
        </form>
    </div>
    </body>
</html>
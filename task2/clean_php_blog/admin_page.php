<?php
session_start();
echo "admin page" . "<br>";


?>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        header {
            display: flex;
            justify-content: flex-end;
        }

        .links {
            width: 600px;
            display: flex;
            justify-content: space-evenly;

        }
    </style>
</head>
<body>

<header>
    <div class="links">
        <a href="scripts/logout.php">Log out</a>
        <a href="forms/create_post_form.php">Create post</a>
        <a href="home.php">View blog</a>
    </div>
</header>

<div class="d-flex justify-content-around mt-5">
<div>
        <h1>Posts</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>


            <?php
            include('connection.php');
            $conn = connect();
            $out = mysqli_query($conn, "Select * from `posts`");
            while ($row = $out->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                        <a href="forms/update_post_form.php?edit=<?php echo $row['id']; ?> " class="btn btn-info">Edit </a>
                        <a href="scripts/delete_post.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
            close($conn);
            ?>
        </table>

</div>
    <div>
        <h1>Users</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <?php
            $conn = connect();
            $out = mysqli_query($conn, "Select * from  `users`");
            while ($row = $out->fetch_assoc()) {?>
                <tr>
                    <td> <?php echo $row['name']; ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td>
                       <a href="scripts/update_user.php?edit=<?php echo $row['id']; ?> " class="btn btn-info">Edit </a>
                        <a href="scripts/delete_user.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            close($conn);
            ?>
        </table>
    </div>
</div>
</body>
</html>

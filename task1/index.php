<html>
<head>
    <meta charset="utf-8">
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        .forma {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <h1>Form</h1>
    <form class='forma' method="post" action="db_connection/add.php">
    <input name='a' placeholder='enter something' >
    <input  name='b' placeholder='enter something another' >
    <input  name='c' placeholder='enter something another again' >
    <input type="submit" value="add">
    </form>
</body>
</html>


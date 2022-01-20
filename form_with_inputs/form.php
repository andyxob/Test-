<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form class="mt-5 d-flex" style="flex-direction: column" method="post"  action="validate.php">
        <input type="text" name="txt"  class="form-control" placeholder="enter some text">
        <input type="date" name="date"  class="form-control">
        <input type="password" name="password" class="form-control" placeholder="enter password">
        <input type="email" name="email" class="form-control" placeholder="enter email">
        <input type="checkbox">
        <input type="color" name="color">
        <input type="tel" name="tel" class="form-control" placeholder="enter phone nymber">
        <input type="time" name="time" class="form-control">
        <input type="image" src="Hello_kitty_png.png" width="50" height="50">
        <input type="number">
        <input type="url" name="url" placeholder="paste url">
        <input type="radio">
        <input type="datetime-local" name="datetime">
        <input type="reset">
        <input type="file">
        <input type="range" name="ran" list="rangelist" min="0" max="100" step="1" value="78" class="mt-3">
        <datalist id="rangelist">
            <option value="0"></option>
            <option value="10"></option>
            <option value="20"></option>
            <option value="30"></option>
            <option value="40"></option>
            <option value="50"></option>
            <option value="60"></option>
            <option value="70"></option>
            <option value="80"></option>
            <option value="90"></option>
            <option value="100"></option>
        </datalist>
        <input type="month" name="month">
        <input type="search" name="search">
        <input type="week" name="week">
        <input type="submit" value="validate">
    </form>
</div>
</body>
</html>
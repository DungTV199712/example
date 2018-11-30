<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form action="/login" method="POST">
    <p>@csrf</p>
    <p>
        Product Description : <input type="text" name="PD" placeholder="">
    </p>
    <p>
        List Price : <input type="text" name="LP" placeholder="$">
    </p>
    <p>
        Discount Percent : <input type="text" name="DP" placeholder="%">
    </p>
    <p>
        <button type="submit">Calculator</button>
    </p>
    <h1>Calculator</h1>

</form>
</body>
</html>
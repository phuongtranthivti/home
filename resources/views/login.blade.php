<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <title>Management</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<div id="header">
    MANAGEMENT
</div>
<form action="login" method="post">
    {{ csrf_field() }}
    <div id="body">
        <div id="detail_body">
            <label>Email</label>
            <input type="email" name="email" placeholder="Please enter password" value="{{ old('email') }}">
            <span style="color: red">hih</span>
            <br> <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Please enter password">
            <span style="color: red">hih</span>
            <br>
            <br>
            <button type="submit" style="background: #3c763d">Login</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" style="background: #2a88bd">Sign up</button>
        </div>
    </div>
</form>
</body>
</html>
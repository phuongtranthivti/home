<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/signup.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>
<form action="signup" style="border:1px solid #ccc" method="post" onsubmit="return validateForm()">
    {{csrf_field()}}
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required> <br>

        <label for="psw"><b>Password</b></label>
        <input id="pass" type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input id="re-pass" type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>
<script>
    function validateForm() {
        pass = document.getElementById('pass').value;
        re_pass = document.getElementById('re-pass').value;
        if (pass != re_pass) {
            alert("mk ko trùng")
            return false;
        }
        return true;
    }
</script>
</body>
</html>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>drainTrak Login</title>
    <link rel="stylesheet" href="css/auth.css" >


</head>


<body class="align">

<div class="site__container">

    <div class="grid__container">

        <h1 id="loginHeader">rep<span style="color:#FE8B05;">F</span>orce </h1>

        <form action="http://localhost/drainTrak/index.php/quotes" method="post" class="form form--login">
            <input type="hidden" name="_token" value="">
            <div class="form__field">
                <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
                <input id="username" name="username" type="text" class="form__input" placeholder="Username" />
            </div>

            <div class="form__field">
                <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
                <input id="password" name="password" type="password" class="form__input" placeholder="Password" required>
            </div>

            <div class="form__fied">
               <input type="submit" value="Sign In">
            </div>

        </form>


    </div>

</div>

</body>

</html>

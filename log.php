<html>
    <head>
        <link rel="STYLESHEET" href="log.css">
    </head>
<body>
    <header>
        <h1>LOGIN PORTAL</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="login/login-access.php" method="post">
            <div class="form_div">
                <label>Username:</label>
                <input class="field_class" name="login_txt" type="text" placeholder="Username" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="password_txt" type="password" placeholder="Password">
                <button class="submit_class" type="submit" form="login_form"  >Enter</button>
            </div>
            <div class="info_div">
              
            </div>
        </form>
    </main>
    <footer>
        <p>HV4</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Batik Kesayangan</title>
    <link rel="stylesheet" href="assetss/style.css">
</head>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png"
                    alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                <form id="formAuthentication" class="mb-3" method="POST">
                    @csrf
                    <input id="username" name="username" type="text" class="input" placeholder="Email" />
                    <input name="password" id="password" type="password" class="input" placeholder="Password" />
                    <button class="opacity" type="submit">LOGIN</button>
                </form>
                <div class="register-forget opacity">
                    <a href="/daftar">REGISTER</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>

</html>

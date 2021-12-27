<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" >
    </head>
    <body>
    <body>
    <div name="box" class="container"style="width: 900px;">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
            <div class="img-left d-none d-md-flex"></div>
                <div class="card-body" >
                    <h1 class="title text-center mt-4" style="letter-spacing :3px;">Üye Girişi</h1>
        <form action="login-control.php" method="post">
        <div class="form-input"> <br>
                            <span class="glyphicon glyphicon-user" style="font-size:16px;color:black;position:relative;top: 30px;"></span>
                            <input type="text" name="username" placeholder="Kullanıcı Adı"tabindex="10" required style="font-size:16px;letter-spacing :2px;">
                        </div> <br>
                        <div class="form-input">
                            <span class="glyphicon glyphicon-lock" style="font-size:16px;color:black;position:relative;top: 30px;"></span>
                            <input type="password" name="password" placeholder="Şifre" tabindex="10" required style="font-size:16px;letter-spacing :2px;">
                        </div> <br>
                        <div class="buton">
                            <button type="sumbit" class="buton1" name="buton1"style="font-size:24px;">Giriş Yap</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/adminlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-md-4"><img class="img" src="/css/car_regis.jpg"></div>
            <div class="col-md-4 login">
                <img class="log" src="/css/carsat_logo.png">
                <div class="card border">
                    <div class="card-body">
                        <form class="form" method="POST" action="/authenticate">
                            <div class="d-flex justify-content-between">
                                <p class="p1"><b>Admin Login</b></p>
                            </div>
                            <div class="form-group">
                                <label for="loginemail">
                                    <p class="lfont">Email Address</p>
                                </label>
                                <input type="email" name="email" class=" form-control" id="loginemail" />
                            </div>
                            <div class="form-group">
                                <label for="expassword" class="lfont">password</label>
                                <input type="password" class="form-control" name="password" required />
                            </div>
                            <div class="form-group form-check d-flex justify-content-between">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
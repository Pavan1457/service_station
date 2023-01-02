<html>

<head>
    <title>login</title>
    <link href="/css/login.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body class="body">
    <div>
        <img class="img" src="/css/carsat_logo.png">
    </div>
    <section class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <i class="fa-brands fa-bootstrap icon"></i>
                <div class="card border">
                    <div class="card-body">
                        <form id="uploadform" class="form" method="POST" action="/authenticate">
                            <div class="d-flex justify-content-between">
                                <h4><b>Login</b></h4>
                                @if ($errors->any())
                                <ul class="alert alert-danger">
                                    {!! implode('',$errors->all('<li class="list-group-item bg-danger">:message</li>')) !!}
                                </ul>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="loginemail">
                                    <p class="lfont">E-mail Address</p>
                                </label>
                                <input type="email" name="email" class=" form-control" id="loginemail" />
                            </div>
                            <div class="form-group">
                                <label for="expassword" class="lfont">password<a class="forgot" href="register.php">forgot password?</a></p></label>
                                <input type="password" class="form-control" id="expassword" name="password" required />
                            </div>
                            <div class="form-group form-check d-flex justify-content-between">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                            <div class="nuser">Don't have an account?<a class="new" href="{{url('register')}}">Create One </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
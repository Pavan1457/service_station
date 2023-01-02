<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/edit.css">
</head>

<body>
    <section class="container-fluid homesp">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ url('update/'.$users->id)}}" class="form" method="POST">
                                @csrf
                                <h4 class="heading"> <b>Edit User</b></h4>
                                <div class="form-group">
                                    <label for="name" class="font">Name</label>
                                    <input class="form-control" name="name"    type="text" id="name" value="{{ $users->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font">Email</label>
                                    <input class="form-control"  name="email" type="email" id="price" value="{{ $users->email }}" />
                                </div>
                                <div class="form-group">
                                    <label for="number" class="font">Number</label>
                                    <input class="form-control" name="number"   type="tel" id="quantity" value="{{ $users->number }}" />
                                </div>
                                <div class="submit">
                                    <button type="submit" name="submit" class="btn btn-primary button button">Submit</button>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </form>
    </section>
</body>

</html>
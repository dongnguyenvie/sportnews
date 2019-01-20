<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="web_asset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">

                            @if (count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{$error}}<br>
                                    @endforeach
                                </div>
                            @endif

                            @if (session('alert'))
                                <div class="alert alert-success">
                                    {{session('alert')}}
                                </div>
                            @endif

                            <form action="register" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group ">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name"  name="name">
                                    </div>
                                    <div class="form-group ">
                                        <label for="body">Email</label>
                                        <input type="email" class="form-control " id="email" name="email">
                                    </div>
                                    <div class="form-group ">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control " id="password" name="password">
                                    </div>
                                    <div class="form-group ">
                                        <label for="re-password">Re-Password</label>
                                        <input type="password" class="form-control " id="re-password" name="re-password">
                                    </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <button type="reset" class="btn btn-danger">Reset</button>
                                  <a style="float:right" href="login">Login</a>
                            </form>

                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
</body>
</html>

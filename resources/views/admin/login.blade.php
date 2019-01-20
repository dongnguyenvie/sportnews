<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <base href="{{asset('')}}">
	<link href="admin_asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin_asset/css/datepicker3.css" rel="stylesheet">
	<link href="admin_asset/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
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

					<form class="form-group" role="form" method="post" action="admin\login">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<input type="submit" class="btn btn-primary" value="Login">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="admin_asset/js/jquery-1.11.1.min.js"></script>
<script src="admin_asset/js/bootstrap.min.js"></script>
</body>
</html>

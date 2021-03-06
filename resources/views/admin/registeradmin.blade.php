<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../admin/img/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../admin/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <img src="../admin/img/logo/logo2.png" width="200"><hr>
                    <h1 class="h4 text-gray-900 mb-4">Register Admin</h1><hr>
                  </div>
                  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ url('/registerPost') }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" id="nama_admin" name="nama_admin" class="form-control"          placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <input type="text" id="username" name="username" class="form-control"          placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="password" id="confirmation" name="confirmation" class="form-control" placeholder="Password Confirmation">
                    </div>
                    
                    <div class="form-group">
                      <input type="submit" class="btn bg-gradient-default btn-block text-white" value="Daftar">
                    </div>
                    <center>
                      <a class="link" href="{{ url('/admin/loginadmin') }}">Kembali</a>
                    </center>
                   
                  </form>
                  
                </div>
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>

  

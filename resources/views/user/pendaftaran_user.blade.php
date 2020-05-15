<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link rel="icon" href="img/logo4.png">
 <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">-->
  <link rel="stylesheet" href="../style.css">
 
 </head>
 <body>
     
 	<div id="card">
			<div id="card-content">
		<div id="card-title">
			<h2>Register</h2>
			<div class="underline-title"></div>
		</div>
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
		<form action="{{ url('/registerUserPost') }}" method="post" class="form"> 
			{{ csrf_field() }}
			<tr>
           <td> <label for="user-email" style="padding-top:13px">&nbsp;Email</label>
			<input
			id="user-email"
			class="form-content"
			type="email"
			name="email"
			autocomplete="on"
			required />
			<div class="form-border"></div> </td>
            <td><label for="username" style="padding-top:13px">&nbsp;Username</label>
			<input
			id="username"
			class="form-content"
			type="text"
			name="username"
			autocomplete="on"
			required />
			<div class="form-border"></div></td>
            </tr>
            <tr>
			<td><label for="user-password" style="padding-top:22px">&nbsp;Password</label>
			<input
			id="user-password"
			class="form-content"
			type="password"
			name="password"
			required />
			<div class="form-border"></div></td>
            
            <td><label for="user-password" style="padding-top:22px">&nbsp;Password Confirmation</label>
			<input
			id="confirmation"
			class="form-content"
			type="password"
			name="confirmation"
			required />
			<div class="form-border"></div></td>
            </tr>
            <label for="nama_user" style="padding-top:22px">&nbsp;Nama</label>
			<input
			id="nama_user"
			class="form-content"
			type="text"
			name="nama_user"
			required />
			<div class="form-border"></div>
            <label for="no_hp" style="padding-top:22px">&nbsp;No HP</label>
			<input
			id="no_hp"
			class="form-content"
			type="text"
			name="no_hp"
			required />
			<div class="form-border"></div>
            <label for="alamat" style="padding-top:22px">&nbsp;Alamat</label>
			<input
			id="alamat"
			class="form-content"
			type="text"
			name="alamat"
			required />
			<div class="form-border"></div>
            
			
			<input id="submit-btn" type="submit" name="submit" value="DAFTAR" /><br>
            <center>
                      <a class="link" href="{{ url('/') }}">CANCEL</a>
                    </center>
		</form>
	  </div>
 </body>
</html>
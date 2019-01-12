<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/form-login.css">
  </head>
  <body>
    <div class="kotak">
      <div class="kepala">
        <center><img src="css/3.png" alt="" srcset=""></center>
      <center><h2 class="judul"><b>Login</b></h2></center>
    </div>
    
    <div class="form">
    <form action="login.php" method="post" onSubmit="validasi()">

      <div class="input">
        <label for="">NIS</label>
        <input type="text" name="nis" id="nis" placeholder="NIS">
        
      </div>

      <div class="input">
        <label for="">Password </label>
        <input type="password" name="password" id="password" placeholder="Password">
      
      </div>
      <br>
      <div class="input">
      <input type="submit" name="btnSimpan"value="Login">
      </div>
    </form>
    </div>
    </div>
  </body>

  <script type="text/javascript">
	function validasi() {
		var nis = document.getElementById("nis").value;
		var password = document.getElementById("password").value;
		if (nis != "" && password !="") {
			return true;
		}
        else if (nis == "nis" && password =="password"){
            return true;
        }
        else{
			alert('LOGIN GAGAL! Silahkan masukkan NIS dan Password dengan benar!');
		}
	}
</script>
</html>
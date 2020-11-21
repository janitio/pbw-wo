<?php
require_once"core/init.php";
require_once"view/header.php";
?>
    		<div class="container" style="margin:8% auto;">
				<div class="col-sm-4 col-md-3">
					<h2>Join with us</h2>
         
				</div>
				 <div class="col-sm-5 col-md-4 pull-right">
                   <div class="row">
                   
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">Lengkapi Data</h3>
							<input type="text" name="fname"placeholder="Nama"class="form-control" required>
							<input type="text" name="lname"placeholder="Nomor Telepon"class="form-control" required>
							<input type="text" name="lname"placeholder="Email"class="form-control" required>
							<select class="form-control" name="gender"required>
								<option>Keperluan</option>
								<option value="Catering">Catering</option>
								<option value="Busana">Busana</option>
								<option value="Gedung">Gedung</option>
							</select>
							<input type="text" placeholder="Alamat" name="Alamat"class="form-control" required>
							<input type="submit" value="Submit" class="btn btn-success" style="width:100%;">
						</form>
				</div>
			</div>
		</div>
<hr>
   <footer class="footer">
    <div class="footer-top section">
      <div class="container" align="center">
        <div class="row">
				 <a style="padding:20px" ; href="#"><i class="fa fa-facebook"></i></a>
          		 <a style="padding:20px" ; href="#"><i class="fa fa-twitter"></i></a>
          		 <a style="padding:20px" ; href="#"><i class="fa fa-linkedin"></i></a>
          		 <a style="padding:20px" ; href="#"><i class="fa fa-google-plus"></i></a>
			</ul>
		</nav>
	</div>

</body>
</html>
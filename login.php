<?php include "header.php";?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Login Administrator</h2>
					<form action="proses-login.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>USERNAME
								<input type="text" name="username" class="form-control input-md" placeholder="Isikan Username anda" required>
								</td>
							</tr>
							<tr>
								<td>Password
								<input type="password" name="password" class="form-control input-md" placeholder="Isikan Password" required>
								</td>
							</tr>
							
								<td>
								<input type="submit" value="Login" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Info Lainnya</h2>
				<h4>Seminar Nasional</h4>
				<img src="images/chris8.jpg" class="img-thumbnail img-responsive">
				<p>Seminar Nasional tentang pemanfaatan sosial media sebagai sarana pemasaran produk yang disampaikan oleh <b>Chris Benoit</b> pakar sosial media terkemuka akan dilakasanakan pada 3 Maret 2017. Untuk Informasi biaya dan tempat pelaksaanaan silakan klik link dibawa<br/><a class="btn btn-danger btn-xs" href="ruang_kelas.html"role="button">Info Seminar</a></p>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
		<?php include "footer.php";?>
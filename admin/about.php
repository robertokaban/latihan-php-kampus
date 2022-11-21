<?php include "header.php";?>
<!-- Awal Page -->
<script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>
<div class="container">
  <!-- Awal Panel -->
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-body">
      <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> HALAMAN ABOUT</h2>
      
      <p></p>
      
      <div class="row">
        <div class="col-md-12">
        <form action="prose-about.php" method="post">
					<div class="form-group">
						<label for="judul">Judul Halaman</label>
						<input type="text" class="form-control" name="judul" placeholder="Isikan judul artikel">
					</div>
					<div class="form-group">
						<label for="artikel">Isi</label>
						<textarea name="isi" id="editor">
              <p>Isi Artikel:</p>
            </textarea>
						<script>
						CKEDITOR.replace( 'editor' );
						</script>
					</div>
					<button type="submit" class="btn btn-info">Simpan</button>
					<button type="reset" class="btn btn-danger">Batal</button>
				</form>
          
        </div>
      </div>
    
      </div>
    </div>
  </div><!-- Akhir Panel -->
  </div><!--  Akhir Page -->

  <?php include "footer.php";?>
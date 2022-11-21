<?php include "header.php";?>
<!-- Awal Page -->
<div class="container">
  <!-- Awal Panel -->
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-body">
      <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> DATA MAHASISWA</h2>
      
      <div class="row">
        <div class="col-md-12">
        <h3>Informasi terbaru...</h3>
        <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>

<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
        <thead>
            <tr>
            <th>Mahasiswa ID</th><th>NIM</th><th>Nama Mahasiswa</th><th>Jenis Kelamin</th><th>ALamat</th>
                <th>
                    <a href="input-mahasiswa.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from mahasiswa order by mahasiswa_id Desc");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
            <td><?php echo $row['mahasiswa_id']?></td>
                <td><?php echo $row['nim']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['alamat']?></td>
                <td>

                <a href="edit-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
          
        </div>
      </div>
    
      </div>
    </div>
  </div><!-- Akhir Panel -->
  </div><!--  Akhir Page -->

  <?php include "footer.php";?>
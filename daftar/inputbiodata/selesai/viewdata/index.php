<!DOCTYPE html>
<html>
<head>
     <!-- TABLE STYLES-->
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Input Form PHP</title>
    <link rel="shortcut icon" href="css/REGI2.png" type="image/x-icon">
</head>
<body>
						<div class="col-md-8 col-md-offset-2">
						</br></br></br></br>
						<div class="panel panel-primary">
						<div class="panel-heading">
                            TAMPILAN DATA DARI DATABASE 
                        </div>
						<div class="panel-body" >
                            <div class="table">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                        <tr>
                                            <th width="70px">NIK</th>
                                            <th>Nama</th>
                                            <th width="30px">Kelamin</th>
                                            <th width="110px">Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th width="50px">Pendidikan</th>
                                            <th>Thn Lulus</th>
                                            <th>Skill</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
											include 'koneksi.php';
											$no=0;
											$result = mysqli_query($conn, "SELECT * FROM tabel_biodata");
											while($row = mysqli_fetch_assoc($result)) {
											$no++
										?>
                                        <tr class="">
                                            <td><?php echo $row['nik'];?></td>
                                            <td><?php echo $row['nama'];?></td>
                                            <td><?php echo $row['jenis_kelamin'];?></td>
                                            <td><?php echo $row['ttl'];?></td>
                                            <td><?php echo $row['alamat'];?></td>
                                            <td><?php echo $row['pendidikan'];?></td>
                                            <td><?php echo $row['thnlulus'];?></td>
                                            <td><?php echo $row['skill'];?></td>
                                        </tr>
										<?php
                                    } ?>
                                    </tbody>
                                </table>
                                
                            </div>
                         </div>  
                        </div>
						</div>
    <script src="js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('tabel_biodata').dataTable();
            });
    </script>
   
</body>
</html>
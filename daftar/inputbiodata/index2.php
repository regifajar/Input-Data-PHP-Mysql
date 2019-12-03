<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="REGI2.png" type="image/x-icon">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Icon -->


    <!-- Login Form -->
    <form method="post" action="koneksidaftar.php">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <p align="center" color="black"><b>INPUT DATA DIRI</b></p>
    </tr>
    <tr>
      <td height="20"></td>
      <td><a href="selesai/viewdata/index.php" target="_blank" style="text-decoration:none">View Data</a></td>
    </tr>
    <tr>
      <td style="padding-left: 30px" height="40">&nbsp;</td>
      <td style="text-align: left">NIK</td>
      <td style="padding-left: 10px"><input type="text" name="nik" size="50" required="" autocomplete="off"></td>
    </tr>
    <tr>
      <td style="padding-left: 30px" height="40">&nbsp;</td>
      <td style="text-align: left">NAMA</td>
      <td style="padding-left: 10px"><input type="text" name="nama" size="50" required="" autocomplete="off"></td>
    </tr>
      <td height="50">&nbsp;</td>
      <td style="text-align: left"">TANGGAL LAHIR</td>
         <td style="padding-left: 35px"><select name="hari" required autocomplete="off" >
          <option value="">--Hari--</option>
          <?php for ($hari=1; $hari<=31 ; $hari++){
            // ?> <option value="<?php echo$hari; ?>">
                <?php echo $hari; ?>
              </option>
              <?php } ?>
            </select>

            <select name="bulan" required autocomplete="off">
              <option value="">--Bulan--</option>
              <?php 
              $nbulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
              ?>
              <?php for($bulan=1; $bulan<=12; $bulan++) { ?>
              <option value="<?php echo $bulan; ?>">
                <?php echo $nbulan[$bulan-1]; ?>
              </option>
              <?php } ?>
            </select>

            <select name="tahun" required autocomplete="off">
              <option value="">--Tahun--</option>
              <?php for($tahun=2019; $tahun>=1905; $tahun--) {
                ?>
              <option value="<?php echo $tahun; ?>">
                <?php echo $tahun; ?>
              </option>
              <?php } ?>
            </select>
            </td>
        </tr>
        
            </td>
        </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td style="text-align: left">ALAMAT</td>
      <td style="padding-left: 15px"><textarea style=" font-family: 'Calibri', sans-serif;" cols="58" rows="2" type="text" name="alamat" size="100" required autocomplete="off"></textarea></td>
    </tr>
    <tr>
      <td height="45">&nbsp;</td>
      <td style="text-align: left">KELAMIN</td>
      <td style="padding-left: 35px"><input type="radio" name="jenis_kelamin" value="L" required autocomplete="off"><? if($jenis_kelamin=='L'){
        echo 'checked';
      }?>LAKI-LAKI<input style="padding-left: 10px" type="radio" name="jenis_kelamin" value="P" required autocomplete="off"><? if ($jenis_kelamin=='P'){
        echo 'checked';
      }?>PEREMPUAN
      </td>
    </tr>
    <tr>
      <td height="60">&nbsp;</td>
      <td style="text-align: left">PENDIDIKAN</td>
      <td style="padding-left: 35px"><input type="radio" name="pendidikan" value="SMP" required autocomplete="off"><? if($pendidikan=='SMP'){
        echo 'checked';
      }?>SMP<input type="radio" name="pendidikan" value="SMA/SMK" required autocomplete="off"><? if ($pendidikan=='SMA/SMK'){
        echo 'checked';
      }?>SMA/SMK
      </td>
    </tr>
        <tr>
      <td height="36">&nbsp;</td>
      <td style="text-align: left">TAHUN LULUS</td>
      <td style="padding-left: 10px"><input type="text" name="thnlulus" size="50" required autocomplete="off"></td>
    </tr>
    <tr>
      <td height="36">&nbsp;</td>
      <td style="text-align: left">SKILL</td>
      <td style="padding-left: 10px"><input type="text" name="skill" size="50" required autocomplete="off"></td>
    </tr>
    <tr>
      <td  height="60">&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
      <input type="reset" name="reset" value="Reset"></td>
    </tr>
    </table>
    </form>
  </div>
</div>
</body>
</html>
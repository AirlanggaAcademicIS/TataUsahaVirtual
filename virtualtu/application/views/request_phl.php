<?php include "koneksi.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balance Score Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li><a href="viewbsc.php">Balance Score Card</a></li>
        <li><a href="viewproker.php">Program Kerja</a></li>
        <li class="active"><a href="viewlpj.php">Laporan Pertanggung Jawaban</a></li>
      </ul>
      </li>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     <p><button type="button" class="btn btn-primary btn-block ">View LPJ</button></p>
    </div>
    <div class="col-sm-8 text-left"> 
            <h2 class="text-center">Logbook PHL</h2>
			<form id="form1" name="form1" method="post" action="">
      <label for="NAMA LENGKAP">NAMA LENGKAP </label>
      <input name="NAMA LENGKAP" type="text" id="LALAYEYE" value="Noor Iksan Septian D" />
      <label for="JUDUL">NO TELEPON</label>
      <input name="JUDUL" type="text" id="JUDUL" value="081931069442" />
      SEMESTER
      <select name="select" id="select">
        <option>Semester</option>
        <option value="Semester 1">Semester 1</option>
        <option value="Semester 2">Semester 2</option>
        <option value="Semester 3">Semester 3</option>
      </select>
    </form>
      <form id="form2" name="form2" method="post" action="hmmmmm">
        <label for="NIM">NIM</label>
        <input name="NIM" type="text" id="NIM" value="081311633035" />
      </form>
      <form id="form3" name="form3" method="post" action="hmmmm">
        <label for="MATA KULIAH">MATA KULIAH </label>
        <select name="MATA KULIAH" id="MATA KULIAH">
        <OPTION> </OPTION>
    <option value="PSI" selected="selected">PSI</option>
    <option value="SPK">SPK</option>
    <option value="RPL">RPL</option>
        </select>
        </select>
        
    <label for="JUMLAH SKS">JUMLAH SKS </label>
    <select name="select2" id="select2">
      <option>  </option>
      <option value="2" selected="selected">2</option>
      <option value="3">3</option>
	   <option value="4">4</option>
    </select>
     <label for="JUMLAH MAHASISWA">JUMLAH MAHASISWA</label>
        <input name="JUMLAH MAHASISWA" type="text" id="JUMLAH MAHASISWA" value="50" />
      </form>    
    </p>
  Hari 
  <input name="JUDUL2" type="text" id="JUDUL2" value="Kamis" />
  <p>
    <label for="Ruang Sebelum">Ruang Sebelum
    <input name="nomor" type="text" id="nomor" value="302" />
    </label>
    <label for="Ruang request"> Ruang Request</label>
    <input name="nomor2" type="text" id="nomor2" value="322A" />
    </form>      
      <p>Jadwal Sebelum 
      <input name="nomor4" type="text" id="nomor4" value="Kamis 1-2" /> 
	  Jadwal Request 
      <input name="nomor5" type="text" id="nomor5" value="Sabtu 3-4" />
      <p>
      <input type="submit" name="button2" id="button2" value="Jadwal Dosen" />
      <input type="submit" name="button22" id="button22" value="Jadwal Ruangan" />
      <form id="form4" name="form4" method="post" action="">
        <label for="button"></label>
      </form>      <p>
        <input type="submit" name="button" id="button" value="OK" />
		
      </p><form id="form1" name="form1" method="post" action="viewlpj.php">
				<label for="sel1">Tahun</label>            
				<select class="form-control" name="tahun">
				<option>Tahun</option>
 			<?php 
 				for($i=2016;$i<=2021;$i++)
 					{
 						echo "<option value=".$i.">".$i."</option>";
					 }
					?>
  		</select>
  <br><input class="btn btn-primary" type="submit" name="Submit" value="Tampilkan"/>
  </form>
	<br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
							<th>Id LPJ</th>
                            <th>Nama Proker</th>
                            <th>Evaluasi</th>
                            <th>Keberlanjutan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
 <?php 
    
if(isset($_POST['Submit'])){
if($_POST['tahun']!="Tahun"){
	
// Perintah untuk menampilkan data  
 
$queri="Select distinct l.id_lpj, p.nama_proker, l.evaluasi, l.keberlanjutan, p.status_proker From laporan_pertanggung_jawaban l, proker p where l.id_proker=p.id_proker and YEAR(WAKTU_MULAI_PROKER) = \"".$_POST['tahun']."\"";
$hasil=MySQL_query ($queri);    //fungsi untuk SQL  
$id = 0;  
// perintah untuk membaca dan mengambil data dalam bentuk array  
while ($data = mysql_fetch_array ($hasil)){  
 $id++; 
 echo "      
        <tr>  
        <td>".$id."</td>
		<td>".$data[0]."</td>  
        <td>".$data[1]."</td>  
        <td>".$data[2]."</td>  
        <td>".$data[3]."</td>  
		<td>".$data[4]."</td>  
		<td><a href=\"viewdetaillpj.php?id=".$id."\">"."Detail</a> "."
        </tr>   
        ";            
		}    
	}
}
?>  
</table><br><br><br><br><br>
            </div>
        </div>	
    </div>
</div>

<div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
      <p class="navbar-text center-block">&#169; Sistem Informasi Universitas Airlangga</p>
      </div>
 </div>

</body>
</html>
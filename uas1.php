<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body>
    <center>
        <h4><b>SOAL UAS PRAKTIK RPL</b></h4>
    <div class="" style="width: 18rem;">
    <img src="img/asslam.png" class="-img-bootom" alt="...">
    
    </center>
    <center>
    <h2>PENGGAJIHAN</h2>
    <h2>GURU/KARYAWAN YAYASAN ASSALAM</h2>
 </center>
    <center>
  <div class="card" width style="width: 40rem;" >
  <h5 class="card-header" align="left">Data penggajihan</h5>
    <div class="container mt-3" align="left">
        <form method="POST" action="">
            <div class="mb-4">
                <label for="no" class="form-label">NO</label>
                <input type="text" class="form-control" id="no" name="no" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-4">
                <label for="unit_pendidikan" class="form-label">Unit Pendidikan</label>
                <select class="form-select" id="unit_pendidikan" name="unit_pendidikan" required>
                    <option value="sd">sd</option>
                    <option value="smp">SMP</option>
                    <option value="sma">sma</option>
                    <option value="smk">smk</option>
                </select>
            </div>                                                                                                                                                                                                                                                      
            <div class="mb-4">
                <label for="tanggal_gaji" class="form-label">Tanggal Gaji</label>
                <input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" required>
            </div>
<table align="center" widht="100%">
<tr>
                    <td align="center" width="50%"><h5>Gaji</h5></td>
                    <td align="center"><h5>Potongan</h5></td>
                  </tr>
    <tr>
        <td widht="50%" class="col-6">
            <div class="mt-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select class="form-select" id="jabatan" name="jabatan" required>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="wakasek">Wakasek</option>
                    <option value="Guru">Guru</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
                </div>
                </td>
                <td class="col-6">
                <div class="mt-3">
                <label for="bpjs" class="form-label">BPJS</label>
                <input type="number" class="form-control" id="bpjs" name="bpjs" width="95%" required>
            </div>
                </td>
                </tr>
                <tr>
                <td>
                <div class="mb-3">
                <label for="lama_kerja" class="form-label">Lama Kerja (Tahun)</label>
                <input type="number" class="form-control" id="lama_kerja" name="lama_kerja" required>
            </div>
            </td>
            <td>
            <div class="mb-3">
                <label for="pinjaman" class="form-label">Pinjaman</label>
                <input type="number" class="form-control" id="pinjaman" name="pinjaman" required>
            </div> 
            </td>
            </tr>
            <tr>
            <td>
            <div class="mb-3">
                <label for="status_kerja" class="form-label">Status Kerja</label>
                <select class="form-select" id="status_kerja" name="status_kerja" required>
                    <option value="Tetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                </select>
            </div>
            </td>
            <td>
            <div class="mb-3">
                <label for="cicilan" class="form-label">Cicilan</label>
                <input type="number" class="form-control" id="cicilan" name="cicilan" required>
                <div class="mb-3">
            </div>
            </td>
            </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                    <div class="mb-3">
                <label for="infaq" class="form-label">Infaq</label>
                <input type="number" class="form-control" id="infaq" name="infaq" required>
            </div>
                    </td>
                </tr>
                  <tr>
                    <td>

                    </td>
                    <td>
                    <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                    </td>
                  </tr>
            </table>
        </form>
        </div>
        </center>
  </body>
  
</html>
<?php
if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST ['unit_pendidikan'];
    $tgl_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjam = $_POST['pinjaman'];
    $cicil = $_POST['cicilan'];
    $infaq = $_POST['infaq'];
    switch ($jabatan) {
        case "Kepala Sekolah":
            $gaji = 100000000;
            break;
        case "wakasek":
            $gaji = 7000000;
            break;
        case "Guru":
            $gaji = 5000000;
            break;
         case "Karyawan":
                $gaji = 25000000;
                break;
        default:
            echo "Jabatan tidak dikenali.";
            exit();
    }
    $bonus = ($status_kerja == "Tetap") ? 1000000 : 0;
    $gaji_bersih = ($gaji + $bonus) - ($bpjs + $pinjam + $cicil + $infaq);

    class gaji{

        public function gajikerja($no1,$nama1,$unit_pendidikan2,$tgl_gajian1,$jabatan1,$gaji1,$lama_kerja1,$status_kerja1,$bonus1,$bpjs1,$pinjam1,$cicil1,$infaq1,$gaji_bersih1){
            ?>
            <center>
                <div class="container mt-5 ">
            <div class="card border-primary mb-3"  style="width: 40rem;" align="center">
  <h5 class="card-header" align="center">Data penggajihan</h5>
            <h2 class="text-primary">struk gaji</h2>
            
            
            <table align="center" class="text-primary">
            <tr >
            <td>no</td>
            <td>: </td>
            <td><b><?php echo"$no1";?></b></td>
            </tr>
            <tr>
            <td>Nama</td>
            <td>: </td>
            <td><b><?php echo "$nama1";?></b></td>
            </tr>
            <tr>
            <td>Unit pendidikan</td>
            <td>: </td>
            <td><b><?php echo "$unit_pendidikan2";?></b></td>
            </tr>
            <tr>
            <td>Tanggal gaji</td>
            <td>: </td>
            <td><b><?php echo"$tgl_gajian1";?></b></td>
            </tr>
            <tr>
            <td>jabatan</td>
            <td>: </td>
            <td><b><?php echo"$jabatan1";?></b></td>
            </tr>
            <tr>
            <td>gaji</td>
            <td>: </td>
            <td><b><?php echo"$gaji1";?></b></td>
            </tr>
            <tr>
            <td>lama kerja</td>
            <td>: </td>
            <td><b><?php echo"$lama_kerja1";?></b></td>
            </tr>
            <tr>
            <td><b>status kerja</b></td>
            <td>:</td>
            <td><b><?php echo$status_kerja1;?><b></td>
            </tr>
            <tr>
            <td><b>Bonus</b></td>
            <td>:</td>
            <td><b><?php echo $bonus1;?><b></td>
            </tr>
            <tr>
            <td><b>Bpjs</b></td>
            <td>:</td>
            <td><b><?php echo $bpjs1;?><b></td>
            </tr>
            <tr>
            <td><b>pinjamanan</b></td>
            <td>:</td>
            <td><b><?php echo $pinjam1; ?><b></td>
            </tr>
            <tr>
            <td><b>cicilan</b></td>
            <td>:</td>
            <td><b><?php echo $cicil1; ?><b></td>
            </tr>
            <tr>
            <td><b>infaq</b></td>
            <td>:</td>
            <td><b><?php echo $infaq1; ?><b></td>
            </tr>
            <tr>
            <td><b>gaji bersih</b></td>
            <td>:</td>
            <td><b><?php echo $gaji_bersih1; ?><b></td>
            </tr>
            </table>
            </div>
            </center>";
            <?php
            
        }
    }
 $hasil = new gaji();
 echo $hasil->gajikerja($no,$nama,$unit_pendidikan,$tgl_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjam,$cicil,$infaq,$gaji_bersih);
    
}
?>
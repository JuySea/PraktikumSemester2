

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">BMI Pasien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                    <li class="breadcrumb-item active">BMI Pasien </li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.content-header -->
        <section class="content">
            <div class="card card-solid">
                <form method="GET">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="date" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
                        <div class="col-8">
                            <input class="form-control" type="date" id="tgl_periksa" name="tgl_periksa" required="required">
                        </div>  
                    </div> 
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Masukkan nama lengkap anda" type="text" required="required" class="form-control">
                        </div>  
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label> 
                        <div class="col-8">
                            <input id="email" name="email" placeholder="Masukkan alamat email anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="berat" class="col-4 col-form-label">Berat</label> 
                        <div class="col-8">
                            <input id="berat" name="berat" placeholder="Masukkan berat badan anda (kg)" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
                        <div class="col-8">
                            <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi badan anda (cm)" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                        <div class="col-8">
                            <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan tanggal lahir anda" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                        <div class="col-8">
                            <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan tempat lahir anda" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-4 col-form-label">Gender</label> 
                        <div class="col-8">
                            <select id="gender" name="gender" class="custom-select" required="required">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>

                </div>
                </form>
                <div class="card-body">
                    
                    <?php 

                    error_reporting(0);
                    require_once 'bmi.php';
                    require_once 'pasien.php';
                    require_once 'bmipasien.php';

                    $pasien1 = new Pasien("2022-03-30","Abdul","Jakarta","4 April","Laki-laki","abduladul@gmail.com");
                    $bmi1 = new BMI(192,120);
                    $BMIpasien1 = new BMIpasien($pasien1,$bmi1);

                    $pasien2 = new Pasien("2022-04-01","Loki","Asgard","2 Juni","Laki-laki","loki@avengers.com");
                    $bmi2 = new BMI(176,70);
                    $BMIpasien2 = new BMIpasien($pasien2,$bmi2);

                    $pasien3 = new Pasien("2022-04-05","Vika","Sevastopol","1 Agustus","Perempuan","vladimirvika@gmail.com");
                    $bmi3 = new BMI(162,40);
                    $BMIpasien3 = new BMIpasien($pasien3,$bmi3);

                    $tgl_periksa = $_GET["tgl_periksa"];
                    $nama = $_GET["nama"];
                    $email = $_GET["email"];
                    $berat = $_GET["berat"];
                    $tinggi = $_GET["tinggi"];
                    $tgl_lahir = $_GET["tgl_lahir"];
                    $tmp_lahir = $_GET["tmp_lahir"];
                    $gender = $_GET["gender"];          

                    $pasien4 = new Pasien($tgl_periksa, $nama, $tmp_lahir, $tgl_lahir, $gender, $email);
                    $bmi4 = new BMI($tinggi, $berat);
                    $BMIpasien4 = new BMIpasien($pasien4, $bmi4);

                    $ar_pasien = [$BMIpasien1, $BMIpasien2, $BMIpasien3, $BMIpasien4];
                    ?>

                    
                    <table width="100%" border="1">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Tanggal Periksa</th>
                                <th>Kode Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Gender</th>
                                <th>Berat (kg)</th>
                                <th>Tinggi (cm)</th>
                                <th>Nilai BMI</th>
                                <th>Status BMI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $nomor = 1;
                                foreach ($ar_pasien as $pas){
                                    echo "
                                    <tr>
                                        <td>{$nomor}</td>
                                        <td>{$pas->pasien->tgl_periksa}</td>
                                        <td>{$pas->pasien->nama}</td>
                                        <td> ASDAD </td>
                                        <td>{$pas->pasien->gender}</td>
                                        <td>{$pas->bmi->berat}</td>
                                        <td>{$pas->bmi->tinggi}</td>
                                        <td>{$pas->bmi->nilaiBMI()}</td>
                                        <td>{$pas->bmi->statusBMI()}</td>
                                    </tr>
                                    ";   
                                    $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->
  



<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
  $(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
  })
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Pimpinan</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <style>

    </style>
    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            
            document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
        }

        // Perbarui jam setiap detik
        setInterval(updateClock, 1000);

        // Set waktu awal saat halaman dimuat
        document.addEventListener('DOMContentLoaded', updateClock);
    </script>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-light" style="box-shadow: 0 10px 4px 0 rgba(0,0,0,.2);">
            {{-- <div class="container"> --}}
                <img src="/logo/bjm2.png" width="10%">
                <a href="#" class="navbar-brand">

                    <span class="brand-text font-weight-bold" style="color: #3d9970">
                    </span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Tambahkan "ml-auto" untuk memindahkan ke kanan -->
                        <li class="nav-item">
                            <a href="#" class="nav-link font-weight-bold" style="color: #3d9970"><i
                                    class="fa fa-home"></i> BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-weight-bold" style="color: #3d9970"><i
                                    class="fa fa-copy"></i> IKU</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-weight-bold" style="color: #3d9970"><i
                                    class="fa fa-copy"></i> IKD</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-weight-bold" style="color: #3d9970"><i
                                    class="fa fa-copy"></i> IKP</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-weight-bold" style="color: #3d9970"><i
                                    class="fa fa-copy"></i> PROGRAM</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-weight-bold" style="color: #3d9970"><i
                                    class="fa fa-copy"></i> CAPAIAN</a>
                        </li>
                    </ul>
                </div>
                {{--
            </div> --}}
        </nav>


        <div class="content-wrapper" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(61,153,112,1) 100%);">
            <!-- Main content -->
            <div class="content">
                {{-- <div class="container"> --}}
                    <br />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title text-bold" style="font-size:2rem; color:#3d9970">
                                        @php
                                        use Carbon\Carbon;
                                        Carbon::setLocale('id');
                                        $tanggal = Carbon::now();
                                        @endphp
                                        {{strtoupper($tanggal->translatedFormat('l, d F
                                        Y'))}} <span id="clock" style="margin-left: 10px;"></span>
                                    </h1>

                                    <div class="card-tools">
                                        <div class="input-group" style="width: 300px;">
                                            <select class="form-control" name="tahun" required>
                                                <option value="">-Data Tahun-</option>
                                                <option value="2024">2024</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                            </select>

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold" style="font-size:1.5rem; color:#3d9970">
                                        PENDAPATAN DAERAH
                                        TAHUN 2024</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- text input -->
                                            <table cellpadding="5" cellspacing="0" style="font-size:1.3rem">
                                                <tr>
                                                    <td>TARGET</td>
                                                    <td>:</td>
                                                    <td>Rp., 1.234.243.123</td>
                                                </tr>
                                                <tr>
                                                    <td>REALISASI</td>
                                                    <td>:</td>
                                                    <td>Rp., 1.234.243.123</td>
                                                </tr>
                                                <tr>
                                                    <td>PERSENTASE</td>
                                                    <td>:</td>
                                                    <td>100 % </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="targetRealisasiChart" style="height: 250px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <i class="fa fa-clock"></i> Terakhir Di update : 25 Desember 2024
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold" style="font-size:1.5rem; color:#f3914f">
                                        REALISASI BELANJA OPD TAHUN 2024</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <table cellpadding="5" cellspacing="0" style="font-size:1.3rem">
                                                <tr>
                                                    <td>TARGET</td>
                                                    <td>:</td>
                                                    <td>Rp., 1.234.243.123</td>
                                                </tr>
                                                <tr>
                                                    <td>REALISASI</td>
                                                    <td>:</td>
                                                    <td>Rp., 1.234.243.123</td>
                                                </tr>
                                                <tr>
                                                    <td>PERSENTASE</td>
                                                    <td>:</td>
                                                    <td>100 % </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="col-sm-6">
                                            <div id="targetRealisasiChart2" style="height: 250px; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <i class="fa fa-clock"></i> Terakhir Di update : 25 Desember 2024
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold" style="color:#3d9970">
                                        E-Purchasing</h5>
                                </div>
                                <div class="card-body">
                                    <div class="callout callout-success" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Paket</span>
                                        <span class="float-right"
                                            style="background-color: #a6e2b2; padding-left: 20px; padding-right: 20px; border-radius: 20px;">322</span>
                                    </div>
                                    <div class="callout callout-warning" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Nilai</span>
                                        <span class="float-right"
                                            style="background-color: #f0c287; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.342.234</span>
                                    </div>
                                    <div class="callout callout-danger" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Diproses</span>
                                        <span class="float-right"
                                            style="background-color: #f7a5a3; padding-left: 20px; padding-right: 20px; border-radius: 20px;">122</span>
                                    </div>
                                    <div class="callout callout-success" style="margin-bottom: 0px; padding:0.5rem">
                                        <span>Selesai</span>
                                        <span class="float-right"
                                            style="background-color: #7ed685; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.000.779</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold" style="color:#3d9970">
                                        Tendering</h5>
                                </div>
                                <div class="card-body">
                                    <div class="callout callout-success" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Paket</span>
                                        <span class="float-right"
                                            style="background-color: #a6e2b2; padding-left: 20px; padding-right: 20px; border-radius: 20px;">322</span>
                                    </div>
                                    <div class="callout callout-warning" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Nilai</span>
                                        <span class="float-right"
                                            style="background-color: #f0c287; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.342.234</span>
                                    </div>
                                    <div class="callout callout-danger" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Diproses</span>
                                        <span class="float-right"
                                            style="background-color: #f7a5a3; padding-left: 20px; padding-right: 20px; border-radius: 20px;">122</span>
                                    </div>
                                    <div class="callout callout-success" style="margin-bottom: 0px; padding:0.5rem">
                                        <span>Selesai</span>
                                        <span class="float-right"
                                            style="background-color: #7ed685; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.000.779</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold" style="color:#3d9970;">
                                        Non Tendering & Non E-Purchasing</h5>
                                </div>
                                <div class="card-body">
                                    <div class="callout callout-success" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Paket</span>
                                        <span class="float-right"
                                            style="background-color: #a6e2b2; padding-left: 20px; padding-right: 20px; border-radius: 20px;">322</span>
                                    </div>
                                    <div class="callout callout-warning" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Nilai</span>
                                        <span class="float-right"
                                            style="background-color: #f0c287; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.342.234</span>
                                    </div>
                                    <div class="callout callout-danger" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Diproses</span>
                                        <span class="float-right"
                                            style="background-color: #f7a5a3; padding-left: 20px; padding-right: 20px; border-radius: 20px;">122</span>
                                    </div>
                                    <div class="callout callout-success" style="margin-bottom: 0px; padding:0.5rem">
                                        <span>Selesai</span>
                                        <span class="float-right"
                                            style="background-color: #7ed685; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.000.779</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-bold" style="color:#3d9970">
                                        Hibah</h5>
                                </div>
                                <div class="card-body">
                                    <div class="callout callout-success" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Penerima Hibah</span>
                                        <span class="float-right"
                                            style="background-color: #a6e2b2; padding-left: 20px; padding-right: 20px; border-radius: 20px;">322</span>
                                    </div>
                                    <div class="callout callout-warning" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Nilai</span>
                                        <span class="float-right"
                                            style="background-color: #f0c287; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.342.234</span>
                                    </div>
                                    <div class="callout callout-danger" style="margin-bottom: 0.4rem; padding:0.5rem">
                                        <span>Diproses</span>
                                        <span class="float-right"
                                            style="background-color: #f7a5a3; padding-left: 20px; padding-right: 20px; border-radius: 20px;">122</span>
                                    </div>
                                    <div class="callout callout-success" style="margin-bottom: 0px; padding:0.5rem">
                                        <span>Selesai</span>
                                        <span class="float-right"
                                            style="background-color: #7ed685; padding-left: 20px; padding-right: 20px; border-radius: 20px;">1.322.000.779</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
                {{--
            </div> --}}
        </div>
        <!-- /.content -->
    </div>

    <!-- Main Footer -->
    <footer class="main-footer text-center"
        style="box-shadow: inset 0px 1px 4px rgba(0,0,0,0.4); padding:0.2rem; font-size:12px; font-weight:bold">
        <!-- Default to the left -->
        Copyright &copy; 2025 <span class="text-red">Pemerintah Kota Banjarmasin</span><br />
        Dashboard Pimpinan V.1.0.0
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
    <script>
        window.onload = function () {
            const target    = 100; // Nilai target
            const realisasi = 90; // Nilai realisasi
            const sisaTarget = target - realisasi; // Hitung sisa target
    
            const chart = new CanvasJS.Chart("targetRealisasiChart", {
                animationEnabled: true,
                data: [{
                    type: "pie", // Jenis chart
                    startAngle: 240,
                    showInLegend: true,
                    legendText: "{label}",
                    toolTipContent: "{label}: <strong>{y}</strong>",
                    indexLabel: "{label} - {y}", // Menampilkan label dan nilai pada chart
                    dataPoints: [
                        { y: realisasi, label: "Realisasi", color: "#3cba9f" },
                        { y: sisaTarget, label: "Sisa Target", color: "#f4c242" }
                    ]
                }]
            });
            const chart2 = new CanvasJS.Chart("targetRealisasiChart2", {
                animationEnabled: true,
                data: [{
                    type: "pie", // Jenis chart
                    startAngle: 240,
                    showInLegend: true,
                    legendText: "{label}",
                    toolTipContent: "{label}: <strong>{y}</strong>",
                    indexLabel: "{label} - {y}", // Menampilkan label dan nilai pada chart
                    dataPoints: [
                        { y: realisasi, label: "Realisasi", color: "#3cba9f" },
                        { y: sisaTarget, label: "Sisa Target", color: "#f4c242" }
                    ]
                }]
            });
    
            chart.render(); 
            chart2.render(); 
        }
    </script>

    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>
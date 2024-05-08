<?php
require_once 'header.php';
require_once 'sidebar.php';

session_start();
if(!$_SESSION['user']){
    header('location: login.php');
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dashboard UA Medika</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
    <h4 class="text-center mt-4"><b>Selamat Datang Di Aplikasi Web Sederhana Puskesmas UA Medika</b><br><i>"Barang siapa memberi pertolongan yang baik niscaya dia akan memperoleh dari pahalanya. Dan barang siapa memberi pertolongan dengan pertolongan yang buruk, niscaya dia akan memikul bagian dari dosanya. Allah Maha Mengetahui atas segala sesuatu." - QS An Nisa 85</i></h4>
    <br>
    <div>
        <h4><b>PENGUMUMAN</b></h4>
        <br>
        <h3>Kepada Seluruh Pengunjung Puskesmas UA Medika,</h3>
        <p>
            Dengan hormat, kami ingin menyampaikan beberapa pengumuman penting terkait layanan kesehatan di Puskesmas UA Medika. Mohon perhatian dan kerjasamanya dalam mengikuti informasi berikut:
        </p>
        <ol>
            <li>
                <strong>Perubahan Jadwal Pelayanan:</strong>
                <ul>
                    <li>Mulai tanggal 10 Mei 2024, jadwal pelayanan Puskesmas UA Medika akan mengalami perubahan sebagai berikut:</li>
                    <li>Senin - Jumat: Pukul 08.00 - 20.00 WIB</li>
                    <li>Sabtu: Pukul 08.00 - 14.00 WIB</li>
                    <li>Minggu dan Hari Libur Nasional: Tutup</li>
                </ul>
            </li>
            <li>
                <strong>Pendaftaran dan Antrian:</strong>
                <ul>
                    <li>Mohon untuk melakukan pendaftaran terlebih dahulu sebelum mengakses layanan kesehatan.</li>
                    <li>Antrian akan dilayani sesuai dengan nomor antrian yang telah didaftarkan.</li>
                </ul>
            </li>
            <li>
                <strong>Protokol Kesehatan COVID-19:</strong>
                <ul>
                    <li>Seluruh pengunjung diharapkan untuk selalu mematuhi protokol kesehatan COVID-19, termasuk penggunaan masker, menjaga jarak, dan mencuci tangan dengan sabun.</li>
                </ul>
            </li>
            <li>
                <strong>Layanan Konsultasi Online:</strong>
                <ul>
                    <li>Kami juga menyediakan layanan konsultasi online melalui platform yang telah disediakan. Informasi lebih lanjut dapat dilihat di situs web resmi kami atau menghubungi nomor yang tertera.</li>
                </ul>
            </li>
        </ol>
        <p>
            Terima kasih atas perhatiannya. Semoga dengan adanya perubahan ini, pelayanan kesehatan yang kami berikan dapat lebih optimal dan memenuhi kebutuhan seluruh masyarakat.
        </p>
        <p>Hormat kami,</p>
        <p>Puskesmas UA Medika</p>
    </div>
</div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                           Aplikasi Web Sederhana Puskesmas
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>
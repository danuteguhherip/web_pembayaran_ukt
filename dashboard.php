<?php
  include('koneksi.php'); 
  include('tampilan/header.php');
  include('tampilan/sidebar.php');
  include('tampilan/footer.php');
?>
 <!-- Main Content -->
<div class="main-content bg-primary">
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Kotak Menu 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="kelas.php" class="text-decoration-none">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Data Kelas</h4>
                                </div>
                                <div class="card-body">
                                    Kelola Data Kelas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Kotak Menu 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="siswa.php" class="text-decoration-none">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Data Siswa</h4>
                                </div>
                                <div class="card-body">
                                    Kelola Data Siswa
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Kotak Menu 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="petugas.php" class="text-decoration-none">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Data Petugas</h4>
                                </div>
                                <div class="card-body">
                                    Kelola Data Petugas
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
</body>

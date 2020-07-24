<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/DataTables/css/dataTables.bootstrap4.min.css" type="text/css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/fontawesome/css/all.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="bootstrap3/css/bootstrap.css" type="text/css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/bootstrap4/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/dist/css/admin.css">

    <!-- template -->
    <link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">

    <!-- select 2 and sweetalert -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/css/select2.min.css">

</head>


<body>
    <div class="wrapper">

        <header>


            <nav class="navbar navbar-expand-lg navbar-light  " style="background-color:#1a69bbe6;">

                <div class="navbar_left">
                    <div class="icon_wrap">
                        <img src="<?= base_url() ?>assets/frontend/dist/img/logo.png" alt="logo">
                        <!-- <span class="name" >Bani Saleh</span> -->

                    </div>
                    <!-- <img src="dist/img/logo.png" alt="logo" class="img-circle " width="60px" height="50px"> -->
                </div>
                <!-- <div class="image"> -->

                <!-- </div> -->
                <marquee width="1500" behavior="" direction="left" class="marquee" style="color:honeydew">SELAMAT DATANG
                    DI
                    PORTAL UJIAN ONLINE STMIK BANI SALEH
                    <img src="<?= base_url() ?>assets/frontend/dist/img/logo.png" alt="" width="30px">
                </marquee>

                <div class="navbar_right float-right">
                    <div class="profil">
                        <div class="icon_wrap">
                            <img src="<?= base_url() ?>assets/frontend/dist/img/digidaw.jpeg" class="rounded-circle" alt="logo">
                            <span class="name">Digidaw</span>
                            <i class="fa fa-chevron-down"></i>
                        </div>
                        <div class="profil_show">
                            <ul class="profil">
                                <li class="profil">
                                    <a class="profil" href="#">
                                        <span class="picon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                        profil
                                    </a>
                                    <div class="btn">My Profil</div>
                                </li>
                                <li>
                                    <a class="address" href="#">
                                        <span class="picon">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                        address
                                    </a>
                                </li>
                                <li>
                                    <a class="logout" href="#">
                                        <span class="picon">
                                            <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                                        </span>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <aside class="sidebar sidebar-collapse">
            <div class="menu">

                <ul class="menu-content">

                    <li class="active">
                        <a class="home" href="<?= site_url('home') ?>">
                            <span class="picon">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="master" href="#">
                            <span class="picon">
                                <i class="fa fa-folder" aria-hidden="true"></i>
                            </span>
                            Data Master
                            <i class="fa fa-angle-right float-right"></i></a>

                        </a>


                        <ul>
                            <li>
                                <a class="jurusan" href="<?= site_url('adm/m_soal') ?>">
                                    <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span>
                                    Master Jurusan
                                </a>
                            </li>
                            <li>
                                <a class="kelas" href="<?= site_url('kelas_c/index') ?>">
                                    <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span>
                                    Master Kelas
                                </a>
                            </li>
                            <li>
                                <a class="matkul" href="<?= site_url('matkul_c/index') ?>">
                                    <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span>
                                    Master Mata Kuliah
                                </a>
                            </li>
                            <li>
                                <a class="dosen" href="<?= site_url('dosen_c/index') ?>">
                                    <span class="picon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    Master Dosen
                                </a>
                            </li>
                            <li>
                                <a class="mahasiswa" href="<?= site_url('mahasiswa') ?>">
                                    <span class="picon">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </span>
                                    Master Mahasiswa
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a class="relasi" href="#">
                            <span class="picon">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </span>
                            Relasi
                            <i class="fa fa-angle-right float-right"></i></a>

                        </a>


                        <ul>
                            <li>
                                <a class="kelas_dosen" href="#">
                                    <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span>
                                    Kelas - Dosen
                                </a>
                            </li>
                            <li>
                                <a class="jurusan" href="#">
                                    <span class="picon">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </span>
                                    Jurusan - Matakuliah
                                </a>
                            </li>



                        </ul>
                    </li>
                    <li>
                        <a class="soal" href="<?=site_url('m_soal')?>">
                            <span class="picon">
                                <i class="fa fa-file" aria-hidden="true"></i>
                            </span>
                            Bank Soal
                        </a>
                    </li>
                    <li>
                        <a class="soal" href="#">
                            <span class="picon">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </span>
                            Hasil Ujian
                        </a>
                    </li>
                    <li>
                        <a class="soal" href="#">
                            <span class="picon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                            User Management
                        </a>
                    </li>
                    <li>
                        <a class="soal" href="#">
                            <span class="picon">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </span>
                            Setting
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="content">

            <div class="inner">
                <?= $contents ?>
                <!-- <?php echo "apa kabar" ?> -->
            </div>
        </div>
        <div class="footer mt-4">
            <p>&copy;All Rights Reserved by Team Work</p>
        </div>



    </div>





    <script src="<?= base_url() ?>assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/dist/js/jquery.slim.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/app/master/jurusan/my_js.js"></script>
    <script src="<?= base_url() ?>assets/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/dist/js/admin.js"></script>
    <script src="<?= base_url() ?>assets/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/DataTables/js/dataTables.bootstrap4.min.js"></script>

    <script src="<?= base_url() ?>assets/backend/fontawesome/js/all.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable({
                // "scrollX": true

            })
        })
    </script>
    <!-- template -->
    <script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>___/js/ajaxFileUpload.js"></script>
    <script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>

    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>
    <script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script>

</body>

</html>
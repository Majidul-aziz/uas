<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading"> Selamat datang di Sistem Ujian Online</div>
    <div class="panel-body">
      <div class="alert alert-info">
        <center>
          <font size="10">

            Selamat datang <br>
          </font>
          <i class="fa fa-user" style="font-size: 100px;color:blue"></i>
          <br> <b><?php echo $this->session->userdata('admin_nama') . "</b>.<center> Username Anda  : <b>" . $sess_user; ?></br>
        </center>
      </div>
      <?php if ($sess_level == "admin") { ?>
        <div class="row">
          <div class="col-md-3 col-xl-3">
            <div class="card bg-c-blue order-card">
              <div class="card-block">
                <h6 class="m-b-20">Data Mahasiswa</h6>
                <h2 class="text-right"><i class="fa fa-users f-left"></i><span><?php
                                                                                $count_mhs = $this->db->count_all('m_siswa');
                                                                                print_r($count_mhs);
                                                                                ?></span></h2>
                <p class="m-b-0"> STMIK BANI SALEH</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xl-3">
            <div class="card bg-c-green order-card">
              <div class="card-block">
                <h6 class="m-b-20">Data Dosen</h6>
                <h2 class="text-right"><i class="fa fa-users f-left"></i>
                  <span>
                    <?php
                    $count_mhs = $this->db->count_all('m_guru');
                    print_r($count_mhs);
                    ?>
                  </span></h2>
                <p class="m-b-0"> STMIK BANI SALEH</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-xl-3">
            <div class="card bg-c-yellow order-card">
              <div class="card-block">
                <h6 class="m-b-20">Data Matkul</h6>
                <h2 class="text-right"><i class="fa fa-file f-left"></i>
                  <span>
                    <?php
                    $count_mhs = $this->db->count_all('m_siswa');
                    print_r($count_mhs);
                    ?>
                  </span></h2>
                <p class="m-b-0"> STMIK BANI SALEH</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xl-3">
            <div class="card bg-c-pink order-card">
              <div class="card-block">
                <h6 class="m-b-20">Data Soal</h6>
                <h2 class="text-right"><i class="fa fa-edit f-left"></i>
                  <span>
                    <?php
                    $count_mhs = $this->db->count_all('m_siswa');
                    print_r($count_mhs);
                    ?>
                  </span></h2>
                <p class="m-b-0"> STMIK BANI SALEH</p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <?php
      if (!empty($p_mapel)) {
        echo "<h3>Mata Kuliah Yang Anda Ikuti  : </h3><table class='table table-bordered' id='table1'>";

        foreach ($p_mapel as $p) {
          echo '<tr>
          <td>' . $p->nama . '</td>
          </tr>';
        }
        echo '</table>';
      }
      ?>
    </div>
  </div>
</div>
</div>
<?php
$count_mhs = $this->db->count_all('m_siswa');
print_r($count_mhs);
?>
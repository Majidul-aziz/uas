<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading"> <button class=" btn btn-primary"><i class="fa fa-users"></i> Data Dosen</button>
      <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_guru_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div>
    </div>
    <div class="panel-body">


      <table class="table table-bordered" id="table1">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="60%">Nama</th>
            <th width="35%">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php
          if (!empty($data)) {
            $no = 1;
            foreach ($data as $d) {
              echo '<tr>
                      <td class="ctr">' . $no . '</td>
                      <td>' . $d->nama . '</td>
                      <td class="">
                        <div class="btn-group">
                          <a href="#" onclick="return m_guru_e(' . $d->id . ');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="#" onclick="return m_guru_h(' . $d->id . ');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                          <a href="#" onclick="return m_guru_matkul(' . $d->id . ');" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-th-list" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Mata Kuliah</a>
                          ';
              if ($d->ada == "0") {
                echo '        <a href="#" onclick="return m_guru_u(' . $d->id . ');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-user" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Aktifkan User</a>';
              }


              echo '</div>
                      </td>
                      </tr>
                      ';
              $no++;
            }
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
</div>





<div class="modal fade" id="m_guru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Dosen</h4>
      </div>
      <div class="modal-body">
        <form name="f_guru" id="f_guru" onsubmit="return m_guru_s();">
          <input type="hidden" name="id" id="id" value="0">
          <table class="table table-form">
            <tr>
              <td style="width: 25%"><i class="glyphicon glyphicon-user"></i> Nama</td>
              <td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> Save</button>
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove"></i> Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
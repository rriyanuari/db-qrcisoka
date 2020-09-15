<!-- Data Table -->
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tabel Data Jenis Barang</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <div class="d-flex mb-4">
            <button type="button" class="btn btn-warning <?= ($status == '2') ? 'd-none' : ''; ?>" data-toggle="modal" data-target="#modal-create">
              <b>Tambah Jenis Barang</b>
            </button>
            <div class="ml-auto">
              <a href="<?php echo base_url() ?>jenis-barang/print"><button class="btn btn-small btn-warning m-2 mb-3 "><i class="fas fa-print"></i></button></a>
              <a href="<?php echo base_url() ?>jenis-barang/download"><button class="btn btn-small btn-warning m-2 mb-3"><i class="fas fa-download"></i></button></a>
            </div>
          </div>

          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Kategori</th>
              <th class="text-center">Jenis Barang</th>
              <th class="text-center">Satuan</th>
              <th class="text-center">Nominal</th>
              <th class="text-center <?= ($status == '2') ? 'd-none' : ''; ?>">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 0;
            $satuanNominal = "";
            foreach ($tabel as $jenisBarang):
              if($jenisBarang['satuan_jenisBarang'] == "roll"){
                $satuanNominal = "Meter";
            }elseif($jenisBarang['satuan_jenisBarang'] == "pail" || "Bag"){
                $satuanNominal = "Kg";
              }
            $no++;
            ?>
            <tr>
              <td width="5%"  class="text-center"><?= $no ?></td>
              <td width="15%" class="text-center"><?= $this->KategoriBarang_model->byId($jenisBarang['id_kategoriBarang'])->row('nama_kategoriBarang') ?></td>
              <td width="40%"><?= $jenisBarang['nama_jenisBarang'] ?></td>
              <td width="15%" class="text-center"><?= $jenisBarang['satuan_jenisBarang'] ?></td>
              <td width="15%" class="text-right"><?= $jenisBarang['nominal_jenisBarang']." ".$satuanNominal ?></td>
              <td width="10%" class="project-actions text-center <?= ($status == '2') ? 'd-none' : ''; ?>">
                  <!-- <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                  </a> -->

                  
                  <a class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#modal-delete<?= $jenisBarang['id_jenisBarang'] ?>">
                      <i class="fas fa-trash">
                      </i>
                  </a>
              </td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.Data Table -->

<!-- modal create -->
<div class="modal fade" id="modal-create">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Form Tambah Data Jenis Barang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="form-group col-md-12">
            <label>Kategori Barang</label>
            <select name="kategori_jenisBarang" id="kategori_jenisBarang" class="form-control select2bs4" style="width:100%;">
              <option value="">-</option>
              <?php foreach($kategori as $list): ?>
                <option value="<?= $list['id_kategoriBarang'] ?>"><?= $list['nama_kategoriBarang'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group col-md-12">
            <label for="nama_jenisBarang">Nama Barang</label>
            <input type="text" name="nama_jenisBarang" class="form-control" id="nama_jenisBarang" placeholder="Isi Nama Barang">
          </div>
          <div class="form-group col-md-6">
            <label>Satuan</label>
            <select name="satuan_jenisBarang" id="satuan_jenisBarang" class="form-control select2bs4" style="width:100%;">
              <option value="">-</option>
              <option value="roll">Roll</option>
              <option value="pail">Pail</option>
              <option value="pcs">Pcs</option>
              <option value="bag">Bag</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="nominal_jenisBarang">Nominal Barang</label>
            <input type="text" name="nominal_jenisBarang" class="form-control" id="nominal_jenisBarang" placeholder="Isi Nominal Barang">
          </div>
        </div>    
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" id="tmb-add-jenisBarang" class="btn btn-primary">Submit</button>
      </div>
    </div>
      <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal create -->

<!-- modal create -->
<?php foreach ($tabel as $jenisBarang): ?>
  <div class="modal fade" id="modal-delete<?= $jenisBarang['id_jenisBarang'] ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Apakah anda yakin ingin menghapus data?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><?= $this->KategoriBarang_model->byId($jenisBarang['id_kategoriBarang'])->row('nama_kategoriBarang'). " - " . $jenisBarang['nama_jenisBarang'] ?></p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" id="<?= $jenisBarang['id_jenisBarang'] ?>" class="btn btn-danger tmb-delete">Delete</button>
        </div>
      </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
<?php endforeach ?>
<!-- /.modal create -->
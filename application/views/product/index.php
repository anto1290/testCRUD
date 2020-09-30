<br>
<div class="container-fluid">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahData" >Tambah Data</button>
        </div>
        <br>
    <div class="card">
        <div class="card-header"><center><h4>Data Produk</h4></center></div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>jumlah</th>
                <th>Keterangan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach($product as $produk){ ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $produk->nama_produk; ?></td>
                    <td><?= $produk->harga; ?></td>
                    <td><?= $produk->jumlah; ?></td>
                    <td><?= $produk->keterangan; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                                <form action="<?= base_url('productController/ubahData') ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $produk->id;?>" >
                                    <button type="submit" class="btn btn-warning" >Ubah Data</button> 
                                </form>
                            </div>
                            <div class="col-md-4">
                                <form action="<?= base_url('productController/deleteData') ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $produk->id;?>" >
                                    <button type="submit" class="btn btn-danger" >Hapus Data</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
</div>
<!-- Modal Tambah Data -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?= base_url('productController/insertData') ?>" method="post" id="tambahProduk">
                <div class="form-group">
                    <label for="produk">Nama Produk</label>
                    <input type="text" name="produk" id="produk" class="form-control" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder=" harga">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder=" jumlah">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder=" keterangan">
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save-tambah">Save changes</button>
      </div>
    </div>
  </div>
</div>

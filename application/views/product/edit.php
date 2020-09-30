<br>
<div class="container-fluid">
    <a class="btn btn-success" href="<?= base_url('/') ?>">Back</a>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            <center>
                <h4>Edit Data Produk</h4>
            </center>
        </div>
        <div class="card-body">
            <form action="<?= base_url('productController/updateData') ?>" method="post">
                <input type="hidden" name="id" id="id" value="<?= $edit->id; ?>">
                <div class="form-group">
                    <label for="produk">Nama Produk</label>
                    <input type="text" name="produk" id="produk" class="form-control" placeholder="Nama Produk" value="<?= $edit->nama_produk; ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder=" harga" value="<?= $edit->harga; ?>">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder=" jumlah" value="<?= $edit->jumlah; ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder=" keterangan" value="<?= $edit->keterangan; ?>">
                </div>
                <button class="btn btn-primary" type="submit" >Update</button>
            </form>
        </div>
    </div>
</div>
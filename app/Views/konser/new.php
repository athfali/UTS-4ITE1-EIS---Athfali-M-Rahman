<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="container">
    <h1>Postingan <?= session('name') ?></h1>
    <form action="/konser/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pembuat">Pembuat</label>
            <input type="text" class="form-control" id="pembuat" placeholder="Masukan Nama Pembuat" name="pembuat" value="<?= session('name') ?>" required disabled/>
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" min="1" id="stok" placeholder="Masukan Jumlah Stok tersedia" name="stok"
                required />
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" min="0" id="harga" class="form-control" placeholder="Masukan Harga" name="harga"
                required />
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Design</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="Masukan Deskripsi Postingan" name="deskripsi" required />
        </div>

        <div class="form-group">
            <label for="example-product-photo">Photo</label>
            <p><small>gambar yang diupload harus landscape dan minimal berukuran 1900 x 1080</small></p>
            <input type="file" class="form-control" id="example-product-photo" aria-describedby="photoHelp"
                name="photo">
        </div>

        <div class="form-group">
            <input type="hidden" name="komentar"/>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>
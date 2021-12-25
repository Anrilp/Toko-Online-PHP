<h3>Tambah Kategori</h3>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<!-- Untuk Fungsi Post -->
<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_kategori/" . $nama);
    $koneksi->query("INSERT INTO kategori (nama_kategori,foto_kategori) VALUES('$_POST[nama]','$nama')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kategori'>";
}
?>
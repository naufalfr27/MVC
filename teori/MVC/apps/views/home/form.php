
<form action="<?= BASE_URL."index.php?r=home/insertbarang" ?>" method="post">
  <div class="mb-3">
    <?php if (isset($data['id'])) : ?>
    <input type="hidden" name="id" value = "<?= isset($data['id'])? $data['id'] : "" ?>">  
    <?php endif ?>
    <label for="inputNama" class="form-label">Nama Barang</label>
    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp">
    <div id="namaHelp" class="form-text">Isikan nama barang.</div>
    <label for="inputJumlah" class="form-label">Jumlah Barang</label>
    <input name="qty" type="text" class="form-control" id="inputJumlah" aria-describedby="jumlahHelp">
    <div id="jumlahHelp" class="form-text">Isikan jumlah barang.</div>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>


<a href="<?= BASE_URL.'index.php?r=home/insertbarang' ?>" class="btn btn-primary">Tambah Barang</a>
<br/><br/>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>QTY</th>
        </tr>        
    </thead>    
    <tbody>
        <?php foreach($data as $item) : ?>
        <tr scope="row">
            <td><?php echo $item['id'] ?> </td>
            <td><?php echo $item['nama'] ?></td>
            <td><span class="badge text-bg-<?= $item['qty']>50? 'success' : 'danger' ?>"><?php echo $item['qty'] ?></span></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

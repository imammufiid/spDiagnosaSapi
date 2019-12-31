<div class="row">
  <div class="col-md-12">
    <input type="hidden" name="kode_pengetahuan" value="<?= $delpeng->kode_pengetahuan ?>">
    <p>Anda yakin menghapus data :</p>
    <table border="0">
      <tr>
        <th>Penyakit</th>
        <td>:</td>
        <td><?= $delpeng->penyakit ?></td>
      </tr>
      <tr>
        <th>Gejala</th>
        <td>:</td>
        <td><?= $delpeng->gejala ?></td>
      </tr>
      <tr>
        <th>MB</th>
        <td>:</td>
        <td><?= $delpeng->mb ?></td>
      </tr>
      <tr>
        <th>MD</th>
        <td>:</td>
        <td><?= $delpeng->md ?></td>
      </tr>
    </table>
  </div>
</div>
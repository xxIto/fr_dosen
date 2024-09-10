<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">Detail Data</h1>
    <a href="<?= base_url('tendik') ?>" class="btn btn-outline-danger">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <!-- Content Row -->
  <div class="card shadow-sm p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <!-- Print Button -->
      <button onclick="printDetail()" class="btn btn-outline-primary mb-3">
        <i class="fas fa-print"></i> Print
      </button>

      <div id="detail-content" class="container mt-3">
        <div class="form-group">
          <label>NIPPPK</label>
          <input type="text" class="form-control" value="<?= $data['kode'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Nama Pegawai</label>
          <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Pendidikan</label>
          <input type="text" class="form-control" value="<?= $data['pendidikan'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <input type="text" class="form-control" value="<?= $data['jabatan_nama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Golongan</label>
          <input type="text" class="form-control" value="<?= $data['golongan'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>TMT</label>
          <input type="text" class="form-control" value="<?= $data['tmt'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <input type="text" class="form-control" value="<?= $data['ket'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Penempatan</label>
          <input type="text" class="form-control" value="<?= $data['penempatan_nama'] ?>" readonly>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- JavaScript for Print Function -->
<!-- JavaScript for Print Function -->
<script>
  function printDetail() {
    var content = document.getElementById('detail-content').innerHTML;
    var originalContent = document.body.innerHTML;

    var printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print Detail Data</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('body { font-family: Arial, sans-serif; margin: 20px; }');
    printWindow.document.write('h1 { text-align: center; margin-bottom: 20px; }');
    printWindow.document.write('.container { width: 100%; max-width: 800px; margin: auto; }');
    printWindow.document.write('.form-group { margin-bottom: 15px; }');
    printWindow.document.write('label { font-weight: bold; display: block; margin-bottom: 5px; }');
    printWindow.document.write('input { border: 1px solid #ced4da; padding: 10px; width: 100%; box-sizing: border-box; }');
    printWindow.document.write('</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h1>Detail Data</h1>');
    printWindow.document.write('<div class="container">' + content + '</div>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
  }
</script>


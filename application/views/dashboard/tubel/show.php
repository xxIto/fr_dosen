<!-- Begin Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">Detail Data Tubel</h1>
    <a href="<?= base_url('tubel') ?>" class="btn btn-outline-danger">
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
          <label>Dosen</label>
          <input type="text" class="form-control" value="<?= $data['dosen_nama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Jurusan</label>
          <input type="text" class="form-control" value="<?= $data['jurusan_nama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Jabatan Fungsional</label>
          <input type="text" class="form-control" value="<?= $data['jabatan_nama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>No SK</label>
          <input type="text" class="form-control" value="<?= $data['no_sk'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Mulai Tubel</label>
          <input type="text" class="form-control" value="<?= $data['mulai_tubel'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Univ Tubel</label>
          <input type="text" class="form-control" value="<?= $data['univ_tubel'] ?>" readonly>
        </div>
        <div class="form-group">
          <label>Status Pegawai</label>
          <input type="text" class="form-control" value="<?= $data['status_pegawai'] == 'pns' ? 'PNS' : ($data['status_pegawai'] == 'non_asn' ? 'Non ASN' : 'PPPK') ?>" readonly>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container -->

<!-- JavaScript for Print Function -->
<script>
  function printDetail() {
    var content = document.getElementById('detail-content').innerHTML;
    var originalContent = document.body.innerHTML;

    var printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print Detail Tubel</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('body { font-family: Arial, sans-serif; margin: 20px; }');
    printWindow.document.write('h1 { text-align: center; margin-bottom: 20px; }');
    printWindow.document.write('.container { width: 100%; max-width: 800px; margin: auto; }');
    printWindow.document.write('.form-group { margin-bottom: 15px; }');
    printWindow.document.write('label { font-weight: bold; display: block; margin-bottom: 5px; }');
    printWindow.document.write('input { border: 1px solid #ced4da; padding: 10px; width: 100%; box-sizing: border-box; }');
    printWindow.document.write('</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write('<h1>Detail Data Tubel</h1>');
    printWindow.document.write('<div class="container">' + content + '</div>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
  }
</script>

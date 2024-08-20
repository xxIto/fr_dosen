<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    <?php if ($this->session->userdata('role') == 1) : ?>
      <a href="<?= base_url('arsitektur/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    <?php endif; ?>
  </div>

  <?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><?= $this->session->flashdata('success'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } else if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong><?= $this->session->flashdata('error'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>

  <!-- Content Row -->
  <div class="card shadow-sm p-3 mb-5 bg-white rounded">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table" id="table-arsitektur">
          <thead>
            <tr>
              <th>No</th>
            
              <th width="500px">Nama</th>
              <th width="300px">Jenis Kelamin</th>
              <th width="400px">No HP</th>
              <th width="800px">Alamat</th>

              <th width="800px">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($arsitekturs as $arsitektur) : ?>
              <tr>
                <td><?= $i++; ?></td>
                
                <td><?= $arsitektur['nama'] ?></td>
                <td><?= $arsitektur['jenis_kelamin'] ?></td>
                <td><?= $arsitektur['no_hp'] ?></td>
                <td><?= $arsitektur['alamat'] ?></td>
                
                <td>
                  <a class="btn btn-primary mt-1" href="<?= base_url('arsitektur/show/' . $arsitektur['arsitektur_id']); ?>"><i class="fas fa-eye"></i> Detail</a>
                  <?php if ($this->session->userdata('role') == 1) : ?>
                    <a class="btn btn-warning mt-1" href="<?= base_url('arsitektur/edit/' . $arsitektur['arsitektur_id']); ?>"><i class="far fa-edit"></i> Edit</a>
                    <a class="btn btn-danger mt-1" href="<?= base_url('arsitektur/destroy/' . $arsitektur['arsitektur_id']); ?>"><i class="fas fa-trash"></i> Hapus</a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script>
  $(document).ready(function() {
    $('#table-arsitektur').DataTable({
      dom: 'lBfrtip',
      buttons: [{
          extend: 'copy',
          exportOptions: {
            columns: [0, 1, 2, 3, 4]
          }
        },
        {
          extend: 'csv',
          exportOptions: {
            columns: [0, 1, 2, 3, 4]
          }
        },
        {
          extend: 'excel',
          exportOptions: {
            columns: [0, 1, 2, 3, 4]
          }
        },
        {
          extend: 'pdf',
          exportOptions: {
            columns: [0, 1, 2, 3, 4]
          }
        },
        {
          extend: 'print',
          exportOptions: {
            columns: [0, 1, 2, 3, 4]
          }
        },
      ]
    });
  });
</script>

</div>
<!-- End of Content Wrapper -->

<!-- Footer -->
<footer class="footer sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Sistem Informasi Dosen <?= date('Y') ?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Are you sure you want to logout ?</div>
      <div class="modal-footer">
        <button class="btn btn-outline-success mr-3" type="button" data-dismiss="modal">No</button>
        <a class="btn btn-danger" href="<?= base_url('auth/logout') ?>">Yes</a>
      </div>
    </div>
  </div>
</div>

<!-- Sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- start sweet alert -->
<?php if ($this->session->flashdata('success')) : ?>
  <script>
    swal.fire({
      icon: "success",
      title: "Success!",
      text: "<?= $this->session->flashdata('success'); ?>"
    })
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error')) : ?>
  <script>
    swal.fire({
      icon: "error",
      title: "Error!",
      text: "<?= $this->session->flashdata('error'); ?>"
    })
  </script>
<?php endif; ?>
<!-- end sweet alert -->

</body>

</html>
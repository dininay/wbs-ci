<!-- plugins:js -->
<script src="<?= base_url('/assetsdashboard/vendors/js/vendor.bundle.base.js');?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('/assetsdashboard/vendors/chart.js/Chart.min.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/vendors/progressbar.js/progressbar.min.js');?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('/assetsdashboard/js/off-canvas.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/js/hoverable-collapse.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/js/template.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/js/settings.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/js/todolist.js');?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('/assetsdashboard/js/jquery.cookie.js');?>" type="text/javascript"></script>
  <script src="<?= base_url('/assetsdashboard/js/dashboard.js');?>"></script>
  <script src="<?= base_url('/assetsdashboard/js/Chart.roundedBarCharts.js');?>"></script>
  <!-- End custom js for this page-->

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var dataLaporLink = document.querySelector('.nav-link[href="#dataLapor"]');
    dataLaporLink.addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah perilaku default dari tautan
      // Lakukan apa yang diperlukan saat tautan diklik, misalnya, navigasi ke halaman yang diinginkan
      window.location.href = '<?= base_url('dashboard/dataLapor');?>';
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Function to handle table search
    $(document).ready(function(){
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tableBody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

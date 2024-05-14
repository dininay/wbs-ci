<script src="<?= base_url('/assetsdashboard/js/plugins/jquery-3.3.1.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/plugins/bootstrap.bundle.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/plugins/perfect-scrollbar.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/scripts/script.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/scripts/sidebar.compact.script.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/scripts/customizer.script.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/plugins/datatables.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/scripts/datatables.script.min.js');?>"></script>
	<script src="<?= base_url('/assetsdashboard/js/icons/feather-icon/feather.min.js');?>"></script>
    <script src="<?= base_url('/assetsdashboard/js/icons/feather-icon/feather-icon.js');?>"></script>

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

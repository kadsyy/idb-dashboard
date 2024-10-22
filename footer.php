		
		<footer class="footer fixed-bottom" style="background-color:#3c4b64;">
		  <div style="font-size:0.7em;font-weight:normal;color:#fff;margin: 0 275px;">
			Sistem IDB © <?php echo date('Y'); ?> Institut Latihan Dewan Bandaraya Kuala Lumpur.
		  </div>
		</footer>
	
	
		<!-- bootstrap -->
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
		<!-- CoreUI and necessary plugins-->
		<script src="<?php echo $server_url; ?>/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
		<script src="<?php echo $server_url; ?>/vendors/simplebar/js/simplebar.min.js"></script>
		<!-- Plugins and scripts required by this view-->
		<script src="<?php echo $server_url; ?>/vendors/chart.js/js/chart.min.js"></script>
		<script src="<?php echo $server_url; ?>/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
		<script src="<?php echo $server_url; ?>/vendors/@coreui/utils/js/coreui-utils.js"></script>
		<script src="<?php echo $server_url; ?>/js/main.js"></script>
		<!-- select box -->
		<script src="<?php echo $server_url ?>/js/select2.js"></script>
		<script>
		  $(document).ready(function() {
			$(".e1").select2();
			$(".xx").hide();
				
			//add sub program
			$( "#addform" ).submit(function( event ) {
				event.preventDefault();
				$.ajax({
					url: "add_sub_program_proses.php",
					type: "POST",
					data: $("form.subprogram").find("select, textarea, input, hidden").serialize(),
					cache: false,
					success: function (result) {
						//console.log(result)
						$(".simpan").show();
						$(".btnsimpan").prop("disabled",true);
						setTimeout("location.reload()",3000);
						//location.reload();
					}
				});
			});
		  });
		</script>

	</body>
</html>
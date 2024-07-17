  <?php $this->load->view('components/header', $tittle); ?>

  <?php $this->load->view('components/sidebar'); ?>
  <!-- jarak atas -->
  <div class="pt-5"></div>

  <div class="col-lg-1 col-3 ms-1" style="top: 90px; position:absolute; z-index: 1;">
  	<!-- small box -->
  	<div class="small-box bg-warning">
  		<div class="inner text-end pe-2 text-white">

  			<h5 class="fs-5 fw-light">Total</h5>
  			<h5 class="fs-5 fw-light">Pengiriman</h5>
  		</div>
  	</div>
  </div>
  <div class="" style="width: 220px; ">
  	<!-- small box -->
  	<div class="small-box bg-white">
  		<div class="inner text-end pe-2">

  			<p class="mb-0 fw-lighter">Total</p>
  			<h3 class="fs-2 fw-light">1507</h3>
  		</div>
  	</div>
  </div>

  <?php $this->load->view('components/footer'); ?>

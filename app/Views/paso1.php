

	<div class="bg-warning">

		<img class="mx-auto d-block img-fluid img-thumbnail" src="<?= base_url('assets/img/logo.jpg')?>" style="max-width: 250px">
	</div>


<div class="container">

	 <div class="row my-4">

			    <div class="col text-center">
			      <h2>Trepate una foto chida carnal</h2>
			    </div>

	 </div>


	<div class="row my-5">

			    <div class="col order-first">
			    </div>

			    <div class="col text-center">
			        <input id="file" type="file" class="btn btn-primary" >
			    </div>

			     <div class="col order-last">
			    </div>

	 </div>


		<div class="row my-4">

			    <div class="col order-first">
			    </div>

			    <div class="col text-center">
			       <button type="button" class="btn btn-primary">Jalo pero con icon</button>
			    </div>

			     <div class="col order-last">
			    </div>

	 </div>



  <!-- Content -->
  <div class="container">
  	<div class="row">
  		<div class="col" id="handle" style="display:none">
  			<button class="btn btn-primary" id="brightness">Brightness</button>
      		<button class="btn btn-primary" id="contrast">Contrast</button>
      		<button class="btn btn-primary" id="reset">va de nuez</button>
      		<button class="btn btn-primary" id="save">ya estuvo</button>
  		</div>

  	</div>

  	<div class="row">
  		<div class="col-lg-5"><canvas id="canvas"></canvas></div>
  		<div class="col-lg-7">
  			<div class="row">
  				<div class="col" id="minis">
  					
  					<img src="<?= base_url('assets/img/pruebita.jpeg')?>" alt="" class="mx-auto d-block img-fluid img-thumbnail float-left" width="120">
  					<img src="<?= base_url('assets/img/dos.jpg')?>" alt="" class="mx-auto d-block img-fluid img-thumbnail float-left" width="120">
  					<img src="<?= base_url('assets/img/tres.jpg')?>" alt="" class="mx-auto d-block img-fluid img-thumbnail float-left" width="120">
  					<img src="<?= base_url('assets/img/cuatro.jpg')?>" alt="" class="mx-auto d-block img-fluid img-thumbnail float-left" width="120">
  				</div>
  			</div>
  			<div class="row">	

  				<div class="col">  	
  					<img src="<?= base_url('assets/img/pruebita.jpeg')?>" alt="" class="mx-auto d-block img-fluid img-thumbnail" id="escena">
				</div>
			</div>
			<div class="row">

  				<div class="col">
  								<div id="temporal"></div>
  								<div id="cortadas"></div>
  				</div>
  			</div>




  		</div>
  	</div>


  </div>

</div><!--container gral-->


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?= base_url('assets/js/misc.js')?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.2.4/cropper.min.js"></script>
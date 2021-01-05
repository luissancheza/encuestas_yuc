
<div class="container">

  <div class="row no-gutters justify-content-md-center mt-4">
    <div class="col-md-5 info-img-1 shadow text-justify">
	
        <p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque hic nam, quasi sunt nobis aperiam ad commodi facilis impedit laudantium dicta exercitationem ab cumque saepe nemo, tenetur deleniti, magnam veritatis.
		</p>
        <p>
			Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci quas possimus esse excepturi consequuntur vero eveniet laboriosam ab libero, maiores id autem sequi! Neque rerum quidem incidunt ad, veritatis laboriosam!
		</p>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptate sit consequuntur placeat. Corporis laborum aspernatur, labore, fuga sit dicta velit deleniti error quas non, deserunt magni esse suscipit tempore!
		</p>
		<p>
		<strong>¡Todos son bienvenidos!</strong>
		</p>

	</div>
	
    <div class="col-md-5 info-txt-1 shadow">
	<div class="row align-items-start">
    <div class="col">
	  <h5 class="card-title text-center"><i class="fas fa-sign-in-alt color-1"></i> INGRESAR</h5>
	            <center class="mensaje-terminado"><?=$this->session->flashdata(MESSAGEREQUEST);?></center>
	            <?= form_open('Login/acceso', array('id' =>'formulario_de_login'));?>
	              <div class="form-label-group">
	              	<label for="inputEmail">CCT</label>
	                <input type="text" id="txt_cct_login" name="txt_cct_login" class="form-control" placeholder="CCT">

	              </div>

	              <div class="form-label-group mt-3" id="contenedordeaccesouser">
	              	<label for="inputPassword">TURNO</label>
	                <select class="form-control" id="txt_turno_login" name="txt_turno_login">
				      <option value="-1">SELECCIONE</option>
				      <?php foreach ($turnos as $turno):?>
				      <option value="<?= $turno['id_turno']?>"><?= $turno['turno']?></option>
				      <?php endforeach; ?>
				    </select>
				  </div>
				  <div class="form-label-group mt-3" id="contenedorpassword" style="display: none;">
	              	<label for="inputPasswordcentral">CONTRASEÑA</label>
	                <input type="password" id="inputPasswordcentral" name="inputPasswordcentral" class="form-control">
				  </div>
				  <hr/>
	              <button class="btn btn-lg btn-success btn-block text-uppercase rounded-pill mt-3" type="submit" id="btn_inicia_sesion_encuestas">INICIAR SESIÓN</button>
	            <?= form_close();?>
				<hr/>
		</div>
	</div>
	

	</div>
	

  </div>



	<!-- <div class="container">

	</div> -->
</div>

<script src="<?= base_url('assets/js/login.js') ?>"></script>

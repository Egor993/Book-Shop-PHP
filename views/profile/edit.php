<?php include ROOT.'/views/include/header.php'; ?>

<body>
	<div class="container main-secction">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 image-section">
				<img src="https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg">
			</div>
			<div class="row user-left-part">
				<div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
					<div class="row ">
						<div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
							<img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
							<button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-success btn-block follow">Обновить фотографию</button> 
								   <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
								<div class="border"></div>
								<p></p>
							</div>                                 
						</div>
						<div class="row user-detail-row">
							<div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
								<div class="border"></div>
								<p>Покупок</p>
								<span>0</span>
							</div>                           
						</div>
					   
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
					<div class="row profile-right-section-row">
						<div class="col-md-12 profile-header">
							<div class="row">
								<div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
									<h1>Juan Perez</h1>
									<h5>Developer</h5>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
									<a href="/search" class="btn btn-primary btn-block">Личные сообщения</a>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-8">
										<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
												  <a class="nav-link" href="/profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> About</a>
												</li>
												<li class="nav-item">
												  <a class="nav-link  active" href="#buzz" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> Edit</a>
												</li>                                                
											  </ul>
											  
													  <!-- Edit -->
					<form action="#" method="post">

						<p><label for="id_password1">Old password:</label> 
						<input type="password" name="password0" class="form-control" autofocus> 

						<p><label for="id_password1">Password:</label> 
						<input type="password" name="password1" class="form-control"> 
						<span class="helptext">• Пароль должен быть минимум из 6 символов</span></p>

						
						<?php if (isset($errors) and is_array($errors)): ?>
							<ul class="alert alert-danger">
								<?php foreach ($errors as $error): ?>
									<li><?php echo $error;?></li>
								<?php endforeach;?>
							</ul>
						<?php endif;?>
						

						<p><label for="id_password2">Password Confirm:</label> 
						<input type="password" name="password2" class="form-control"></p>

						<?php if ($result): ?>
							<div class="p-3 mb-2 bg-success text-white"><?php echo 'Вы успешно сменили пароль' ?></div>
						<?php endif; ?>

						<button type="submit", name="submit", class ="btn btn-primary btn-block", value='Registration'>Отправить</button>
					</form>

												</div>
											</div>
										</div>                                                
									 </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>                          

								



	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="contact">Contactarme</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres comunicar con el. Para esto debes de ingresar tu información personal.</p>
					</div>
					<div class="form-group">
						<label for="txtFullname">Nombre completo</label>
						<input type="text" id="txtFullname" class="form-control">
					</div>
					<div class="form-group">
						<label for="txtEmail">Email</label>
						<input type="text" id="txtEmail" class="form-control">
					</div>
					<div class="form-group">
						<label for="txtPhone">Teléfono</label>
						<input type="text" id="txtPhone" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar</button>
				</div>
			</div>
		</div>
	</div>
</body>
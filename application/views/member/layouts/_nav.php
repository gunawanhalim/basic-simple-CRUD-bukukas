<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- Messages: style can be found in dropdown.less-->
			<li class="dropdown messages-menu">
				
				<ul class="dropdown-menu">
					<li>
						<!-- inner menu: contains the actual data -->
						<ul class="menu">
							<li>
								
							<!-- end message -->
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user3-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        
                        
                      </h4>
									
								</a>
							</li>
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user4-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user3-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="pull-left">
										<img src="<?php echo base_url() ?>assets/vendor/AdminLTE-2.4.3/img/user4-128x128.jpg" class="img-circle" alt="User Image">
									</div>
									<h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
									<p>Why not buy a new awesome theme?</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"><a href="#">See All Messages</a></li>
				</ul>
			</li>
			<!-- Notifications: style can be found in dropdown.less -->
						<!-- Tasks: style can be found in dropdown.less -->

			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/uploads/images/foto_profil/'.$userdata->photo); ?>" class="user-image">
                <span class="hidden-xs"><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></span>
            </a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="<?= base_url('assets/uploads/images/foto_profil/'.$userdata->photo); ?>" class="img-circle">
						<p>
							<?= $userdata->email; ?>
							<small>Terakhir Masuk , <?= $userdata->last_login; ?></small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href="<?php echo base_url() ?>auth/profile/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default btn-flat"><i class="fa fa-user" aria-hidden="true"></i> Profil</a>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
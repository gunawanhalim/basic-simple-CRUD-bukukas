<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
				<img src="<?php echo base_url('assets/uploads/images/foto_profil/' . $userdata->photo); ?>" class="img-circle">
			</div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username')?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Kategori</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<!-- <li><a href="<?=base_url('/admin/person')?>"><i class="fa fa-users"></i> <span>Data Person</span></a></li> -->
      <li><a href="<?=base_url('/admin/data_staff')?>"><i class="fa fa-users"></i> <span>Data Staff</span></a></li>
      <li><a href="<?=base_url('/admin/pemasukan/index')?>"><i class="fa fa-money"></i> <span>Data Pemasukan</span></a></li>
      <li><a href="<?=base_url('/admin/pengeluaran/index')?>"><i class="fa fa-users"></i> <span>Data Pengeluaran</span></a></li>
      <li><a href="<?=base_url('/admin/detail_uangkas/index')?>"><i class="fa fa-money"></i> <span>Laporan Pemasukan</span></a></li>
      <li><a href="<?=base_url('/admin/laporan_pengeluaran/index')?>"><i class="fa fa-money"></i> <span>Laporan Pengeluaran</span></a></li>
      <!-- <li><a href="<?=base_url('/admin/cetak_bukti/index')?>"><i class="fa fa-print"></i> <span>Cetak Bukti dan Pembayaran</span></a></li> -->
     <li class="treeview" style="height: auto;">
          
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

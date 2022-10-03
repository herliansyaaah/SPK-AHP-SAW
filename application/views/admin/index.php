<?php $this->load->view('layouts/header_admin'); ?>

<?php if($this->session->userdata('id_user_level') == '1'): ?>

<?php
    $this->db->select('*');
    $query = $this->db->get('kriteria');
    $num = $query->num_rows();
    
?>

<?php
    $this->db->select('*');
    $query1 = $this->db->get('sub_kriteria');
    $sub= $query1->num_rows();
    
?>

<?php
    $this->db->select('*');
    $query2 = $this->db->get('alternatif');
    $alternatif= $query2->num_rows();
    
?>

<?php
    $this->db->select('*');
    $query3 = $this->db->get('user');
    $user= $query3->num_rows();
    
?>

<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
    </div>
	
    <!-- Content Row -->
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Selamat datang <span class="text-uppercase"><b><?= $this->session->username; ?>!</b></span> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
    </div>
    <div class="row">
		
		<div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center ">
                        <div class="col mr-2">
                            <h4 class="h4 mb-0 font-weight-bold text-gray-800 text-secondary text-decoration-none"><?=$num ?></h4>
                            <p><div class="h5 mb-0 font-weight-normal text-gray-400 card-waves"><a href="<?= base_url('Kriteria'); ?>" class="text-secondary text-decoration-none" > Data Kriteria</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cube fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h4 class="h4 mb-0 font-weight-bold text-gray-800 text-secondary text-decoration-none"><?=$sub ?></h4>
                            <p><div class="h5 mb-0 font-weight-normal text-gray-400"><a href="<?= base_url('Sub_Kriteria'); ?>" class="text-secondary text-decoration-none">Data Sub Kriteria</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cubes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h4 class="text-primary h4 mb-0 font-weight-bold text-gray-800 text-decoration-none"><?=$alternatif ?></h4>
                            <p>
                            <div class="h5 mb-0 font-weight-normal text-gray-400"><a href="<?= base_url('Alternatif'); ?>" class="text-secondary text-decoration-none">Data Alternatif</a></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <h4 class="h4 mb-0 font-weight-bold text-gray-800 text-secondary text-decoration-none"><?=$user ?></h4>
                            <p><div class="h5 mb-0 font-weight-normal text-gray-400"><a href="<?= base_url('User'); ?>" class="text-secondary text-decoration-none">User</a></div></p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>		
    </div>
</div>
<?php endif; ?>
<?php if($this->session->userdata('id_user_level') == '2'): ?>
<div class="mb-4">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
    </div>
	
    <!-- Content Row -->
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Selamat datang <span class="text-uppercase"><b><?= $this->session->username; ?>!</b></span> Anda bisa mengoperasikan sistem dengan wewenang tertentu.
    </div>
    <div class="row">
    </div>
<?php endif; ?>

<?php $this->load->view('layouts/footer_admin'); ?>
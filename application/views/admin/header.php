<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>V Dentist | Super Speciality Dental Hospital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/vendor/admin/img/favicon.png">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrap.min.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/summernote-lite.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery-2.1.4.min.js"></script>
	 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/chosen.min.css">
   
</head>


<body>
<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
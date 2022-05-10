<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/mystyle.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/blue.css">
    <style>
    .blogbugabagi 
    {
        background-image:url(<?= base_url('assets/dist/img/lab-mac.jpg') ?>);
        background-position: center;
    }

    .input-group {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%;
    }

    .input-group>.custom-select:not(:last-child), .input-group>.form-control:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .input-group>.custom-file, .input-group>.custom-select, .input-group>.form-control, .input-group>.form-control-plaintext {
        position: relative;
        -ms-flex: 1 1 0%;
        flex: 1 1 0%;
        min-width: 0;
        margin-bottom: 0;
    }

    .input-group-text {
        display: flex;
        align-items: center;
        padding: 0.375rem 1.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .input-group-append {
        margin-left: -1px;
    }
    .input-group-append, .input-group-prepend {
        display: -ms-flexbox;
        display: flex;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?=base_url()?>assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
</head>
<body class="hold-transition login-page blogbugabagi">
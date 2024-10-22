<?php
session_start();
require_once(__DIR__ . "/../core/_class.dba.inc.php");
require_once(__DIR__ . "/../core/_conf.dba.inc.php");
require_once(__DIR__ . "/../core/_static.session.inc.php");
require_once(__DIR__ . "/../core/_static.ui.inc.php");
require_once(__DIR__ . "/../core/_static.global.inc.php");
require_once(__DIR__ . "/../helpers/convert_number.php");
require_once(__DIR__ . "/../helpers/tarikh_melayu.php");
require_once(__DIR__ . "/../helpers/form_helper.php");
include(__DIR__ . "/../function/sdm_functions.php");
validate_session();

###############################################################################################
extract($_SERVER);
$app_path = str_replace("\\", "/", __FILE__);
$relative_path = str_replace($DOCUMENT_ROOT, "", $app_path);
$main_folder = str_replace("header.php", "", $relative_path);
$app_url = "http://{$SERVER_NAME}{$main_folder}";

$root_url = "http://{$SERVER_NAME}:{$SERVER_PORT}";
if ($SERVER_PORT == '80') {
  $root_url = "http://{$SERVER_NAME}/";
}

if ($SERVER_PORT != 80) {
  $app_url = "http://{$SERVER_NAME}{$main_folder}";
}
$weburlmain = $app_url;

	if ($_SERVER['HTTP_HOST'] == 'localhost') {
	  $server_url = "http://localhost/idb/v2";
	} else {
	  $server_url = 'https://' . $_SERVER['HTTP_HOST'] . '/v2';
	}

//include(__DIR__ . "/../function/get_file_dir.php");

#---- limit AND navigation related --- #
	$adjacents = 3;
	$targetpage = basename($_SERVER["SCRIPT_NAME"]);
	$limit = 40;
	$page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
	if ($page) {
	  $start = ($page - 1) * $limit;
	  $calc = (($page - 1) * $limit) + 1;
	} else {
	  $start = 0;
	  $calc = 1;
	}
//$paginationStart = ($page - 1) * $limit;

#---- end limit AND navigation related --- #
###############################################################################################

	//avatar
	if (empty($_SESSION['user_picture'])) {
	  $gambar_profilx = $weburlmain . "/modul_peribadi/default_image.png";
	  $gambar_profil = "<img title='gambar profil' src=" . $gambar_profilx . ">";
	} else {
	  $gambar_profilx = $weburlmain . "/modul_peribadi/gambar_profil/" . $_SESSION['user_picture'];
	  $gambar_profil = "<img title='gambar profil' src=" . $gambar_profilx . ">";
	}
	
	//bullet icon
	$icon_menu = '<i style="font-size:0.4em;color:#ccc;vertical-align:top !important;" class="fa fa-square"></i>';
	//tindakan
	$action_name = "Tindakan";
	//button color
	$button_color = "secondary";
?>
<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="Sistem IDB Institut Latihan DBKL (IDB)">
  <meta name="author" content="">
  <meta name="keyword" content="IDB,Sistem IDB,Institut Latihan Dewan Bandaraya Kuala Lumpur">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo $server_url; ?>/img/fav.png">
  <title>Sistem IDB Institut Latihan DBKL</title>
  <link rel="manifest" href="<?php echo $server_url; ?>/assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo $server_url; ?>/assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Vendors styles-->
  <link rel="stylesheet" href="<?php echo $server_url; ?>/vendors/simplebar/css/simplebar.css">
  <link rel="stylesheet" href="<?php echo $server_url; ?>/css/vendors/simplebar.css">
  <!-- Main styles for this application-->
  <link href="<?php echo $server_url; ?>/css/style.css" rel="stylesheet">
  <!-- We use those styles to show code examples, you should remove them in your application.-->
  <link href="<?php echo $server_url; ?>/css/examples.css" rel="stylesheet">
  <link href="<?php echo $server_url; ?>/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  <!-- select box -->
  <link href="<?php echo $server_url ?>/css/select2.css" rel="stylesheet" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  
  <!-- font awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
  
  <!-- jquery confirm -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>

  <!-- nospaces -->
  <script src="<?php echo $server_url ?>/js/noSpaces.js"></script>
  <style>
	body {
		padding-bottom: 70px;
	}
	
	.sidebar-nav .nav-title {
		font-size: 73% !important;
		margin-top: 0px !important;
	}
	
	.nav-link {
		font-size: 88% !important;
	}	
	
	.badge-primary {
		background-color: #0d6efd !important;
		color: #fff !important;
		padding: 5px;
		font-size: 1em;
	}
	.badge-success {
		background-color: #28a745 !important;
		color: #fff !important;
		padding: 5px;
		font-size: 1em;
	}
	.badge-danger {
		background-color: #dc3545 !important;
		color: #fff !important;
		padding: 5px;
		font-size: 1em;
	}
	
	.fixed-bottom {
		z-index: 0 !important;
	}
    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    a:hover {
      text-decoration: none;
    }
	
	a i {
		vertical-align: middle;
	}

    a:active {
      text-decoration: none;
    }

    .show_jumlah {
      margin-top: -3px;
      text-align: center;
      color: #FF0000;
      font-weight: bold;
    }

    .kategori_counter {
      display: inline;
      float: right;
      font-size: 10px;
      font-family: arial;
      border-style: solid;
      border-width: 1px;
      border-color: #D8DFEA;
      margin-right: 10px;
      padding-left: 2px;
      padding-right: 2px;
      background-color: #D8DFEA;
      color: #3B5998;
      font-weight: bold;
      border-radius: 2px;
    }

    /* TABLE PROPERTIES */
    table,
    td,
    th {
      font-family: "Verdana", Helvetica, Arial, sans-serif !important;
      vertical-align: middle !important;
	  font-weight:bold;
	  font-size:10px;
	  color:#FFF;
    }
	
	.text_center, th {
		text-align:center;
	}
	
	table, th.text_left {
		text-align:left;
	}

    table {
      width: 95% !important;
      margin: 0px auto !important;
    }

    th,
    td {
      height: 40px !important;
	  vertical-align: top !important;
    }

    table.rounded-corners {
      /* Change these properties */
      --border: 1px solid #ccc !important;
      border-radius: 10px;

      /* Don't change these properties */
      border-spacing: 0;
      border-collapse: separate;
      border: var(--border);
      overflow: hidden;
    }

    /* Apply a border to the right of all but the last column */
    table.rounded-corners th:not(:last-child),
    table.rounded-corners td:not(:last-child) {
      border-right: var(--border);
    }

    /* Apply a border to the bottom of all but the last row */
    table.rounded-corners>thead>tr:not(:last-child)>th,
    table.rounded-corners>thead>tr:not(:last-child)>td,
    table.rounded-corners>tbody>tr:not(:last-child)>th,
    table.rounded-corners>tbody>tr:not(:last-child)>td,
    table.rounded-corners>tfoot>tr:not(:last-child)>th,
    table.rounded-corners>tfoot>tr:not(:last-child)>td,
    table.rounded-corners>tr:not(:last-child)>td,
    table.rounded-corners>tr:not(:last-child)>th,
    table.rounded-corners>thead:not(:last-child),
    table.rounded-corners>tbody:not(:last-child),
    table.rounded-corners>tfoot:not(:last-child) {
      border-bottom: var(--border);
    }

    table.rounded-corners th {
      *background: #f48016 !important;
	  background: #3c4b64 !important;
      color: #fff !important;
    }
	
	table.rounded-corners, tr.thead_td td {
		background: #FFFF99 !important;
		color: #000;
		font-weight:bold;
		font-size:10px;
		text-align:left;
		letter-spacing:1px;
		font-family:Verdana, Geneva, sans-serif;
	}

    /*pagination */
    .pagination li a {
      font-size: 0.7em !important;
    }

    /**breadcrum */
    .breadcrumb-item,
    .active li a {
      font-size: 0.9em !important;
    }

    .breadcrumb,
    .my-0,
    .ms-2 ol a {
      font-size: 0.9em !important;
    }
	
	.form-inline {
	  display: flex;
	  flex-flow: row wrap;
	  align-items: center;
	}
	
	.tabx {
		width:22%;
	}
	
	.alert {
		width:40%;  
		text-align: center;	
	}
	
	.dropdown-item {
		font-size: 9pt !important;
	}
	
	.btnXX {
		font-size: 9pt !important;
		color: #fff;
	}
	
	.nav-link {
		white-space: normal !important;
	}
	
  </style>
</head>

<body>
  <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="<?php echo $server_url; ?>/assets/brand/coreui.svg#full"></use>
      </svg>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="<?php echo $server_url; ?>/assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <!-- Menu -->
      <?php
			include("menu_latihan.php");
      ?>
      <!-- #Menu -->
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
      <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
          <svg class="icon icon-lg">
            <use xlink:href="<?php echo $server_url; ?>/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
          </svg>
        </button><a class="header-brand d-md-none" href="#">
          <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?php echo $server_url; ?>/assets/brand/coreui.svg#full"></use>
          </svg></a>
        <ul class="header-nav ms-3">
          <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-md"><img class="avatar-img" src="<?php echo $gambar_profilx; ?>" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
              <div class="dropdown-header bg-light py-2">
                <div class="fw-semibold">Akaun</div>
              </div><a class="dropdown-item" href="<?php echo $weburlmain ?>/modul_peribadi">
                <svg class="icon me-2">
                  <use xlink:href="<?php echo $server_url; ?>/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg> Profil</a><a class="dropdown-item" href="<?php echo $server_url; ?>/login.php?logout">
                <svg class="icon me-2">
                  <use xlink:href="<?php echo $server_url; ?>/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Log Keluar</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="header-divider"></div>
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0 ms-2">
            <?php
            include(dirname(__FILE__) . DIRECTORY_SEPARATOR . '../breadcrumb.php');
            ?>
          </ol>
        </nav>
      </div>
    </header>
	
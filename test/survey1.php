<?php
	error_reporting(0);
	session_start();
	include_once 'connect.php';

	if(!isset($_SESSION['user']))
	{
	 header("Location: index.php");
	}

	$userinfo = mysql_query("SELECT * FROM admin WHERE admin_id = '".$_SESSION['user']."'");
	$user = mysql_fetch_assoc($userinfo);

if(isset($_POST['submit-btn']))
{
	$mem_num = $_POST['mem_num'];
	$puno = $_POST['puno'];
	$other_members = $_POST['other_members'];
	$om_name = $_POST['om_name'];
	$om_age = $_POST['om_age'];
	$om_gender = $_POST['om_gender'];
	$om_relation = $_POST['om_relation'];
	$om_dahilan = $_POST['om_dahilan'];
	$ofw = $_POST['ofw'];
	$ofw_name = $_POST['ofw_name'];
	$ofw_relation = $_POST['ofw_relation'];
	$ofw_country = $_POST['ofw_country'];
	$ofw_work = $_POST['ofw_work'];
	$isang_magulang = $_POST['isang_magulang'];
	$im_name = $_POST['im_name'];
	$im_cause = $_POST['im_cause'];
	$pwd = $_POST['pwd'];
	$pwd_cause = $_POST['pwd_cause'];
	$pwd_name = $_POST['pwd_name'];
	$pwd_type = $_POST['pwd_type'];
	$pwd_tulong = $_POST['pwd_tulong'];
	$pinanggalingan = $_POST['pinanggalingan'];
	$sc_name = $_POST['sc_name'];
	$sc_id = $_POST['sc_id'];
	$sc_use = $_POST['sc_use'];
	$board_passer = $_POST['board_passer'];
	$bp_name = $_POST['bp_name'];
	$bp_profession = $_POST['bp_profession'];
	$nagpapagamot = $_POST['nagpapagamot'];
	$saan_nagpapagamot = $_POST['saan_nagpapagamot'];
	$num_couples = $_POST['num_couples'];
	$couple_name = $_POST['couple_name'];
	$family_planning = $_POST['family_planning'];
	$fp_ways = $_POST['fp_ways'];
	$dating_kasambahay = $_POST['dating_kasambahay'];
	$dk_name = $_POST['dk_name'];
	$dk_gender = $_POST['dk_gender'];
	$dk_age = $_POST['dk_age'];
	$death_cause = $_POST['death_cause'];
	$water_source = $_POST['water_source'];
	$water_location = $_POST['water_location'];
	$palikuran = $_POST['palikuran'];
	$sambahayan_status = $_POST['sambahayan_status'];
	$rental_fee = $_POST['rental_fee'];
	$electricity = $_POST['electricity'];
	$consumption_fee = $_POST['consumption_fee'];
	$materials_bubong = $_POST['materials_bubong'];
	$materials_dingding = $_POST['materials_dingding'];
	$katayuan_pamamalagi = $_POST['katayuan_pamamalagi'];
	$lawak_sinasaka = $_POST['lawak_sinasaka'];
	$lawak_fishpond = $_POST['lawak_fishpond'];
	$bilang_fishcage = $_POST['bilang_fishcage'];
	$bangka = $_POST['bangka'];
	$kumokolekta_basura = $_POST['kumokolekta_basura'];
	$kadalas_pangongolekta = $_POST['kadalas_pangongolekta'];
	$nasalanta = $_POST['nasalanta'];
	$gutom = $_POST['gutom'];
	$pagpatay = $_POST['pagpatay'];
	$pagpatay_lalaki = $_POST['pagpatay_lalaki'];
	$pagpatay_babae = $_POST['pagpatay_babae'];
	$pagnanakaw = $_POST['pagnanakaw'];
	$pagnanakaw_lalaki = $_POST['pagnanakaw_lalaki'];
	$pagnanakaw_babae = $_POST['pagnanakaw_babae'];
	$panggagahasa = $_POST['panggagahasa'];
	$panggagahasa_lalaki = $_POST['panggagahasa_lalaki'];
	$panggagahasa_babae = $_POST['panggagahasa_babae'];
	$pananakit = $_POST['pananakit'];
	$pananakit_lalaki = $_POST['pananakit_lalaki'];
	$pananakit_babae = $_POST['pananakit_babae'];
	$iba_crime = $_POST['iba_crime'];
	$iba_crime_lalaki = $_POST['iba_crime_lalaki'];
	$iba_crime_babae = $_POST['iba_crime_babae'];
	$pagsasaka = $_POST['pagsasaka'];
	$pagsasaka_salapi = $_POST['pagsasaka_salapi'];
	$pagsasaka_bagay = $_POST['pagsasaka_bagay'];
	$paghahayop = $_POST['paghahayop'];
	$paghahayop_salapi = $_POST['paghahayop_salapi'];
	$paghahayop_bagay = $_POST['paghahayop_bagay'];
	$pangingisda = $_POST['pangingisda'];
	$pangingisda_salapi = $_POST['pangingisda_salapi'];
	$pangingisda_bagay = $_POST['pangingisda_bagay'];
 	$pangangahoy = $_POST['pangangahoy'];
	$pangangahoy_salapi = $_POST['pangangahoy_salapi'];
	$pangangahoy_bagay = $_POST['pangangahoy_bagay'];
	$pagtitinda = $_POST['pagtitinda'];
	$pagtitinda_salapi = $_POST['pagtitinda_salapi'];
	$pagtitinda_bagay = $_POST['pagtitinda_bagay'];
	$paggawa = $_POST['paggawa'];
	$paggawa_salapi = $_POST['paggawa_salapi'];
	$paggawa_bagay = $_POST['paggawa_bagay'];
	$pantao = $_POST['pantao'];
	$pantao_salapi = $_POST['pantao_salapi'];
	$pantao_bagay = $_POST['pantao_bagay'];
	$transportasyon = $_POST['transportasyon'];
	$transportasyon_salapi = $_POST['transportasyon_salapi'];
	$transportasyon_bagay = $_POST['transportasyon_bagay'];
	$pagmimina = $_POST['pagmimina'];
	$pagmimina_salapi = $_POST['pagmimina_salapi'];
	$pagmimina_bagay = $_POST['pagmimina_bagay'];
	$construction = $_POST['construction'];
	$construction_salapi = $_POST['construction_salapi'];
	$construction_bagay = $_POST['construction_bagay'];
	$pangkabuhayan = $_POST['pangkabuhayan'];
	$pangkabuhayan_salapi = $_POST['pangkabuhayan_salapi'];
	$pangkabuhayan_bagay = $_POST['pangkabuhayan_bagay'];
	
	$buhay_hayop = $_POST['buhay_hayop_uri']."(".$_POST['buhay_hayop_bilang'].")";
	$karne = $_POST['karne_uri']."(".$_POST['karne_bilang'].")";
	$gatas = $_POST['gatas_uri']."(".$_POST['gatas_bilang'].")";
	$itlog = $_POST['itlog_uri']."(".$_POST['itlog_bilang'].")";
	$iba_pa = $_POST['iba_uri']."(".$_POST['iba_bilang'].")";
	
	$g = count($_POST['yamang_tubig']);
	for($i=0; $i<$g; $i++)
	{
		if($_POST['yamang_tubig'][$i] != "")
		{
			$yamang_tubig = $_POST['yamang_tubig'][$i];
			$ani = $_POST['ani'][$i];
			$isda[] = $yamang_tubig."(".$ani.")";
		}
	}
	if(!empty($isda))
	{
		$huling_isda = implode(", ",$isda);
	}else
	{
		$huling_isda = "";
	}
	$x = count($_POST['fishcage']);
	$j = 1;
	for($i=0; $i<$x; $i++)
	{
		if($_POST['fishcage'][$i] != "")
		{
			$fishcages[] = "Fishcage ".$j."(".$_POST['fishcage'][$i].")";
			$j++;
		}
	}
	if(!empty($fishcages))
	{
		$sukat_fishcage = implode(", ",$fishcages);
	}else
	{
		$sukat_fishcage = "";
	}
	$y = count($_POST['palaisdaan']);
	for($i=0; $i<$y; $i++)
	{
		$palaisdaan = $_POST['palaisdaan'][$i];
		if($palaisdaan == "1-Oo")
		{
			$pangingisdaa[] = $palaisdaan;
		}
	}
	if(!empty($pangingisdaa))
	{
		$lugar_pangingisda = implode(", ",$pangingisdaa);
	}else
	{
		$lugar_pangingisda = "";
	}
	$z = count($_POST['alaga']);
	for($i=0; $i<$z; $i++)
	{
		$alaga = $_POST['alaga'][$i];
		if($alaga == "1-Oo")
		{
			$ilan = $_POST['ilan'][$i];
			$alaga_hayop[] = $alaga."(".$ilan.")";
		}
	}
	if(!empty($alaga_hayop))
	{
		$alagang_hayop = implode(", ",$alaga_hayop);
	}else
	{
		$alagang_hayop = "";
	}
	$ind = count($_POST['agrikultura']);
	for($i=0; $i<$ind; $i++)
	{
		$agrikultura = $_POST['agrikultura'][$i];
		if($agrikultura == "1-Oo")
		{
			$pagaari = $_POST['pagaari'][$i];
			$gamit_agrikultura[] = $agrikultura."(".$pagaari.")";
		}
	}
	if(!empty($gamit_agrikultura))
	{
		$kagamitang_pangagrikultura = implode(", ",$gamit_agrikultura);
	}else
	{
		$kagamitang_pangagrikultura = "";
	}
	$cntrrr = count($_POST['uri']);
	for($i=0; $i<$cntrrr; $i++)
	{
		if($_POST['uri'][$i] != "")
		{
			$uri = $_POST['uri'][$i];
			$dami = $_POST['dami'][$i];
			$uri_dami[] = $uri."(".$dami.")";
		}
	}
	if(!empty($uri_dami))
	{
		$pananim = implode(", ",$uri_dami);
	}else
	{
		$pananim = "";
	}
	$cntr = count($_POST['kasangkapan']);
	for($i=0; $i<$cntr; $i++)
	{
		$apps = $_POST['kasangkapan'][$i];
		if($apps == "1-Mayroon")
		{
			$kagamitan[] = $apps;
		}
	}
	if(!empty($kagamitan))
	{
		$devices = implode(", ",$kagamitan);
	}else
	{
		$devices = "";
	}
	$cntrr = count($_POST['electricity_source']);
	for($i=0; $i<$cntrr; $i++)
	{
		$source = $_POST['electricity_source'][$i];
		if($source == "1-Oo")
		{
			$elec_source[] = $source;
		}
	}
	if(!empty($elec_source))
	{
		$electric_source = implode(", ",$elec_source);
	}else
	{
		$electric_source = "";
	}
	$f = count($_POST['gamit']);
	for($i=0; $i<$f; $i++)
	{
		$gamit = $_POST['gamit'][$i];
		if($gamit == "1-Oo")
		{
			$pagaarii = $_POST['pagaarii'][$i];
			switch($pagaarii)
			{
				case "1-Oo": $own = "Pag-aari";
				break;
				case "2-Hindi" : $own = "Hindi Pag-aari";
				break;
				default: $own = NULL;
			}
			$gamit_pangisda[] = $gamit."(".$own.")";
		}
	}
	if(!empty($gamit_pangisda))
	{
		$kagamitan_pangingisda = implode(", ",$gamit_pangisda);
	}else
	{
		$kagamitan_pangingisda = "";
	}
	$h = count($_POST['basura']);
	for($i=0; $i<$h; $i++)
	{
		$pamamahala = $_POST['basura'][$i];
		if($pamamahala == "1-Oo")
		{
			$pamamahala_ng[] = $pamamahala;
		}
	}
	if(!empty($pamamahala_ng))
	{
		$pamamahala_basura = implode(", ",$pamamahala_ng);
	}else
	{
		$pamamahala_basura = "";
	}
	$k = count($_POST['kalamidad']);
	for($i=0; $i<$k; $i++)
	{
		$kalamidad = $_POST['kalamidad'][$i];
		if($kalamidad == "1-Oo")
		{
			$nanalanta[] = $kalamidad;
		}
	}
	if(!empty($nanalanta))
	{
		$sumalanta = implode(", ",$nanalanta);
	}else
	{
		$sumalanta = "";
	}
	$m = count($_POST['buwan']);
	for($i=0; $i<$m; $i++)
	{
		if($_POST['buwan'][$i] != "")
		{
			$buwan = $_POST['buwan'][$i];
			$araw = $_POST['araw'][$i];
			$buwan_araw[] = $buwan."(".$araw.")";
		}
	}
	if(!empty($buwan_araw))
	{
		$buwan_gutom = implode(", ",$buwan_araw);
	}else
	{
		$buwan_gutom = "";
	}
	$region = mysql_real_escape_string($_POST['region']);
	$city = mysql_real_escape_string($_POST['city']);
	$barangay = mysql_real_escape_string($_POST['barangay']);
	$purok = mysql_real_escape_string($_POST['purok']);
	
	if(mysql_query("INSERT INTO simbahayan(num_members,simbahayan_head,other_members,om_name,om_age,om_gender,om_relation,om_dahilan,ofw,ofw_name,ofw_relation,ofw_country,ofw_work,isang_magulang,im_name,im_cause,pwd,pwd_name,pwd_cause,pwd_type,pwd_tulong,pinanggalingan,sc_name,sc_id,sc_use,board_passer,bp_name,bp_profession,nagpapagamot,saan_nagpagamot,num_couples,couple_name,family_planning,fp_ways,dating_kasambahay,dk_name,dk_gender,dk_age,death_cause,pagpatay,pagpatay_lalaki,pagpatay_babae,pagnanakaw,pagnanakaw_babae,panggagahasa,panggagahasa_lalaki,panggagahasa_babae,pananakit,pananakit_lalaki,pananakit_babae,iba_crime,iba_crime_lalaki,iba_crime_babae,water_source,water_location,palikuran,sambahayan_status,rental_fee,electricity,electricity_source,consumption_fee,kasangkapan,materials_dingding,materials_bubong,pagsasaka,pagsasaka_salapi,pagsasaka_bagay,paghahayop,paghahayop_salapi,paghahayop_bagay,pangingisda,pangingisda_salapi,pangingisda_bagay,pangangahoy,pangangahoy_salapi,pangangahoy_bagay,pagtitinda,pagtitinda_salapi,pagtitinda_bagay,paggawa,paggawa_salapi,paggawa_bagay,pantao,pantao_salapi,pantao_bagay,transportasyon,transportasyon_salapi,transportasyon_bagay,pagmimina,pagmimina_salapi,pagmimina_bagay,pangkabuhayan,pangkabuhayan_salapi,pangkabuhayan_bagay,katayuan_pamamalagi,lawak_sinasaka,pananim,kagamitang_pangagrikultura,alagang_hayop,buhay_hayop,karne,gatas,itlog,iba_pa,lugar_pangingisda,lawak_fishpond,bilang_fishcage,sukat_fishcage,huling_isda,bangka,kagamitan_pangingisda,pamamahala_basura,kumokolekta_basura,kadalas_pangongolekta,nasalanta,sumalanta,gutom,buwan_gutom,coordinator_id,region,city,barangay,purok) VALUES ('$mem_num','$puno','$other_members','$om_name','$om_age','$om_gender','$om_relation','$om_dahilan','$ofw','$ofw_name','$ofw_relation','$ofw_country','$ofw_work','$isang_magulang','$im_name','$im_cause','$pwd','$pwd_name','$pwd_cause','$pwd_type','$pwd_tulong','$pinanggalingan','$sc_name','$sc_id','$sc_use','$board_passer','$bp_name','$bp_profession','$nagpapagamot','$saan_nagpapagamot','$num_couples','$couple_name','$family_planning','$fp_ways','$dating_kasambahay','$dk_name','$dk_gender','$dk_age','$death_cause','$pagpatay','$pagpatay_lalaki','$pagpatay_babae','$pagnanakaw','$pagnanakaw_babae','$panggagahasa','$panggagahasa_lalaki','$panggagahasa_babae','$pananakit','$pananakit_lalaki','$pananakit_babae','$iba_crime','$iba_crime_lalaki','$iba_crime_babae','$water_source','$water_location','$palikuran','$sambahayan_status','$rental_fee','$electricity','$electric_source','$consumption_fee','$devices','$materials_dingding','$materials_bubong','$pagsasaka','$pagsasaka_salapi','$pagsasaka_bagay','$paghahayop','$paghahayop_salapi','$paghahayop_bagay','$pangingisda','$pangingisda_salapi','$pangingisda_bagay','$pangangahoy','$pangangahoy_salapi','$pangangahoy_bagay','$pagtitinda','$pagtitinda_salapi','$pagtitinda_bagay','$paggawa','$paggawa_salapi','$paggawa_bagay','$pantao','$pantao_salapi','$pantao_bagay','$transportasyon','$transportasyon_salapi','$transportasyon_bagay','$pagmimina','$pagmimina_salapi','$pagmimina_bagay','$pangkabuhayan','$pangkabuhayan_salapi','$pangkabuhayan_bagay','$katayuan_pamamalagi','$lawak_sinasaka','$pananim','$kagamitang_pangagrikultura','$alagang_hayop','$buhay_hayop','$karne','$gatas','$itlog','$iba_pa','$lugar_pangingisda','$lawak_fishpond','$bilang_fishcage','$sukat_fishcage','$huling_isda','$bangka','$kagamitan_pangingisda','$pamamahala_basura','$kumokolekta_basura','$kadalas_pangongolekta','$nasalanta','$sumalanta','$gutom','$buwan_gutom','".$user['admin_id']."','$region','$city','$barangay','$purok')"))
	{
		echo "<script>alert('successful!');</script>";
	}else	 
	{
		echo "<script>alert('Unsuccessful!');</script>";
	}
	
	/*pagnanakaw_lalaki, $pagnanakaw_lalaki,
	,'$construction','$construction_salapi','$construction_bagay'
	
	
	construction,construction_salapi,construction_bagay
	*/
	$id = mysql_query("SELECT * FROM simbahayan ORDER BY simbahayan_id DESC LIMIT 1");
	$simbahayan_id = mysql_fetch_assoc($id);
	$cnt = count($_POST['name']);
	$var = $_POST['name'];
	for ($i=0; $i<$cnt; $i++)
	{
		$name = $var[$i];
		$registered = $_POST['registered'][$i];
		$relationship = $_POST['relationship'][$i];
		$gender = $_POST['gender'][$i];
		$bdate = $_POST['bdate'][$i];
		$age = $_POST['age'][$i];
		$civil_status = $_POST['civil_status'][$i];
		$religion = $_POST['religion'][$i];
		$ind_tribe = $_POST['ind_tribe'][$i];
		$tribe = $_POST['tribe'][$i];
		$year_stayed = $_POST['year_stayed'][$i];
		$former_place = $_POST['former_place'][$i];
		$studying = $_POST['studying'][$i];
		$taon = $_POST['taon'][$i];
		$private_public = $_POST['private_public'][$i];
		$working = $_POST['working'][$i];
		$work_class = $_POST['work_class'][$i];
		$job_type = $_POST['job_type'][$i];
		$industry_class = $_POST['industry_class'][$i];
		$industry = $_POST['industry'][$i];
		$jobs = $_POST['job_status'][$i];
		$worker_class = $_POST['work_class'][$i];
		$did_work = $_POST['did_work'][$i];
		$way = $_POST['way'][$i];
		$reason = $_POST['reason'][$i];
		$chance = $_POST['chance'][$i];
		$willing = $_POST['willingness'][$i];
		$write_read = $_POST['write_read'][$i];
		$association = $_POST['association'][$i];
		$org_name = $_POST['org_name'][$i];
		$register = $_POST['register'][$i];
		$voted = $_POST['voted'][$i];
		
		if(mysql_query("INSERT INTO members(member_name,relation,gender,member_birthdate,age,registered,civil_status,religion,indigenous_tribe,tribe_name,years_stayed,former_home,studying,year,school_status,working,work_explanation,work_type,industry_explanation,industry,work_status,worker_class,searching,way,chance,willingness,write_read,association,assoc_name,voter,voted,simbahayan_id,coordinator_id) VALUES('$name','$relationship','$gender','$bdate',$age,'$registered','$civil_status','$religion','$ind_tribe','$tribe',$year_stayed,'$former_place','$studying','$taon','$private_public','$working','$work_class','$job_type','$industry_class','$industry','$jobs','$worker_class','$did_work','$way','$chance','$willing','$write_read','$association','$org_name','$register','$voted',".$simbahayan_id['simbahayan_id'].",".$user['admin_id'].")"))
		{
			echo "<script>alert('successful!');</script>";
		}else
		{
			echo "<script>alert('Unsuccessful!');</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simbahayan | Survey</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
	<form action="" method="post" id="survey" role="form">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SMB</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Simbahayan</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
             
              <!-- Tasks: style can be found in dropdown.less -->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $user['last_name'].", ".$user['first_name'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $user['last_name'].", ".$user['first_name']." - ".$user['position']?>
                      <small>Member since March 2016</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
            
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php?logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $user['last_name'].", ".$user['first_name'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!--form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
			<?php 
			if($user['position'] == 'UST Admin')
			{
				echo "
				<li>
				  <a href='acctmgt.php'>
					<i class='fa fa-gear'></i> <span>Account Management</span> 
				  </a>
				</li>
				<li>
				  <a href='addacct.php'>
					<i class='fa fa-user-plus'></i> <span>Add Simbahayan Admin</span>
				  </a>
				</li>";
			}
			?>
            <li>
              <a href="members.php">
                <i class="fa fa-users"></i> <span>Members</span> 
              </a>
            </li>
           <li>
              <a href="upload.php">
                <i class="fa fa-upload"></i> <span>Upload</span>
              </a>
            </li> 
			<li>
              <a href="survey.php">
                <i class="fa fa-file"></i> <span>Survey</span>
              </a>
            </li>
			<li>
              <a href="download.php">
                <i class="fa fa-download"></i> <span>Download</span>
              </a>
            </li> 
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Survey
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Survey</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
		  <div class="box box-warning">
			<div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <!--h3 class="box-title"></h3-->
				  <div class="box-body">
					  <div class="row">
					    <div class="col-md-12">
						 <div class="form-group">
							  <label for="members">Simbahayan ID:</label>
							  <input type="text" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					  <h4>Pagkakakilanlan ng Lokasyon</h4>
					   <div class="col-md-6">
						<div class="form-group">
							<label>Region</label>
							<?php
								$regionlist = mysql_query("SELECT * FROM regions");
								echo "<select name='region' class='form-control select2' style='width: 100%;'>";
									while($region = mysql_fetch_array($regionlist))
									{
									echo "<option value='". $region['region_id'] ."'>" . $region['region_name'] . "</option>"; 
									}
								echo "</select>";
							?>
						</div>
						 <div class="form-group">
							  <label for="members">Lalawigan:</label>
							  <input type="number" class="form-control" name="region" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   <div class="col-md-6">
						 <div class="form-group">
							  <label for="members">Lungsod/Bayan:</label>
							  <input type="number" class="form-control" name="city" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   <div class="col-md-6">
						 <div class="form-group">
							  <label for="members">Barangay:</label>
							  <input type="number" class="form-control" name="barangay" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   <div class="col-md-6">
						 <div class="form-group">
							  <label for="members">Purok/Sitio:</label>
							  <input type="number" class="form-control" name="purok" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					   <div class="col-md-6">
					   <h4>Numerong Pagkakakilanlan ng Sambahayan:</h4>
						 <div class="form-group">
							  <input type="text" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					   <div class="col-md-6">
					   <h4>Tirahan ng Sambahayan:</h4>
						 <div class="form-group">
							  <input type="text" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					   <div class="col-md-12">
					   <h4>Pangalan ng Nakapanayam:</h4>
						 <div class="form-group">
							  <input type="text" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					   <div class="col-md-4">
					   <h4>Petsa ng Panayam:</h4>
						 <div class="form-group">
							  <input type="date" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					   <div class="col-md-4">
					   <h4>Oras Nagsimula:</h4>
						 <div class="form-group">
							  <input type="time" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					   <div class="col-md-4">
					   <h4>Oras Natapos:</h4>
						 <div class="form-group">
							  <input type="time" class="form-control" name="mem_num" id="lsname" placeholder="" style="width: 100%;">
							</div>
					   </div>
					   
					    <div class="col-md-12">
						<h4>Pangalan ng Tagapanayam:</h4>
						 <div class="form-group">
							  <input type="text" class="form-control" id="lsname">
							</div>
					   </div>
					   
					  <div class="col-md-12">
					  <h4>Puna/pansin sa kalidad at tiwala sa nakuhang impormasyon:</h4>
						 <div class="form-group">
							  <input type="text" class="form-control" id="lsname">
							</div>
					   </div>
					   <div class="col-md-6">
						 <div class="form-group">
							  <label for="members">Ilang miyembro mayroon dito sa inyong sambahayan?</label>
							  <input type="number" class="form-control" id="lsname">
							</div>
					   </div>
					   <div class="col-md-6">
						<div class="form-group">
							  <label for="head">Sino ang puno ng sambahayan?</label>
							  <input type="text" class="form-control" id="fsname" name="puno" placeholder="" style="width: 100%;">
							</div>
					   </div>   
					<div class="col-md-12">
					<div id="member1" class="clonedInput">
						<div class="box box-danger collapsed-box">
							<div class="box-header with-border">
								<h3 class="box-title heading-reference" id="reference" name="reference">Member 1</h3>
								<fieldset>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
								</div><!-- /.box-tools -->
							</div><!-- /.box-header -->


							<div class="box-body">
								<div class="row">
									<div class="col-md-3">	
										<div class="form-group">
											<label for="name">PANGALAN</label>
											<input type="text" class="form-control" id="name" name="name[]" placeholder="APELYIDO, UNANG PANGALAN" style="width: 100%;">
										</div>
										<div class="form-group">
											<label for="mdname">Nakarehistro ba sa lokal na registrar ang kapanganakan?</label>
											<select class="form-control select2" name="registered[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Oo</option>
												<option>2-Hindi</option>
											</select>
										</div>
										<div class="form-group">
											<label>Katutubongww lahi napapabilang?</label>
											<select class="form-control select2" name="tribe[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Bago</option>
												<option>2-Ibanag</option>
												<option>3-Kankanaey</option>
												<option>4-Mangyan</option>
												<option>5-Ibaloi</option>
												<option>6-Aeta</option>
												<option>7-Tagbanuas</option>
												<option>8-Cuyonen</option>
												<option>9-Subanen</option>
												<option>10-B'laan</option>
												<option>11-Mandaya</option>
												<option>12-Manobo</option>
												<option>13-Tenduray</option>
												<option>14-Bukidnon</option>
												<option>15-Ati</option>
												<option>16-Cimaron</option>
												<option>17-Itom</option>
												<option>18-Pullon</option>
												<option>19-Badjao</option>
												<option>20-Batak</option>
												<option>21-Palawano</option>
												<option>22-Tau't Bato</option>
												<option>23-Dumagat</option>
												<option>24-T'boli</option>
											</select>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Relasyon sa puno ng sambahayan?</label>
											<select class="form-control select2" name="relationship[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Puno</option>
												<option>2-Asawa</option>
												<option>3-Anak</option>
												<option>4-Manugang</option>
												<option>5-Apo</option>
												<option>6-Magulang</option>
												<option>7-Iba pang kamag-anak</option>
												<option>8-Katulong</option>
												<option>9-Iba pang hindi kamag-anak</option>
											</select>
										</div><!-- /.form-group -->

										<div class="form-group">
											<label>Katayuang sibil?</label>
											<select class="form-control select2" name="civil_status[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Walang asawa</option>
												<option>2-Legally married</option>
												<option>3-Biyudo/biyuda</option>
												<option>4-Hiwalay sa asawa</option>
												<option>5-Common Law/"Live in"</option>
												<option>6-Hindi alam</option>
											</select>
										</div><!-- /.form-group -->
										<div class="form-group">
											<label for="">Gaano katagal na naninirahan dito sa barangay?</label>
											<input type="number" class="form-control" name="year_stayed[]" id="" placeholder="" style="width: 100%;">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Lalaki o babae?</label>
											<select class="form-control select2" name="gender[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Lalaki</option>
												<option>2-Babae</option>
											</select>
										</div><!-- /.form-group -->

										<div class="form-group">
											<label>Relihiyon?</label>
											<select class="form-control select2" name="religion[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Katoliko</option>
												<option>2-Protestante</option>
												<option>3-Iglesia ni Kristo</option>
												<option>4-Aglipay</option>
												<option>5-Islam</option>
												<option>6-Iba pa</option>
												<option>7-Hindi alam</option>
											</select>
										</div><!-- /.form-group -->
										<div class="form-group">
											<label for="name">Saan naninirahan bago lumipat dito sa barangay?</label>
											<input type="text" class="form-control" id="name" name="former_place[]" placeholder="BARANGAY,LUNGSOD/BAYAN,LALAWIGAN&BANSA" style="width: 100%;">
										</div>

									</div>

									<div class="col-md-3">
										<div class="form-inline">
											<label for="bday">Petsa ng kapanganakan? EDAD?</label>
											<input type="date" class="form-control" id="bday" name="bdate[]" placeholder="" style="width: 70%;">
											<input type="number" class="form-control" id="age" name="age[]" oninput="showDiv()" placeholder="" style="width: 25%;">
										</div>
										<script>
											function showDiv()
											{
												var vall = document.getElementById('age').value;
												if(vall > 2)
												{
													document.getElementById('div1').style.display = "block";
												}else
												{
													document.getElementById('div1').style.display = "none";
												}
												if(vall > 4)
												{
													document.getElementById('div2').style.display = "block";
												}else
												{
													document.getElementById('div2').style.display = "none";
												}
												if(vall > 9)
												{
													document.getElementById('div3').style.display = "block";
												}else
												{
													document.getElementById('div3').style.display = "none";
												}
												if(vall > 16)
												{
													document.getElementById('div4').style.display = "block";
												}else
												{
													document.getElementById('div4').style.display = "none";
												}
												if(vall > 0 && vall < 6)
												{
													document.getElementById('div5').style.display = "block";
												}else
												{
													document.getElementById('div5').style.display = "none";
												}
											}
										</script>
									<br>
										<div class="form-group">
											<label for="" >May katutubong lahi?</label>
											<select class="form-control select2" name="ind_tribe[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Oo</option>
												<option>2-Hindi</option>
											</select>
										</div>

									</div>
								</div>
								
								<div id="div1" style="display:none" class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 3 TAONG GULANG PATAAS</h3>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Nag-aaral ba sa paaralan?</label>
												<select class="form-control select2" name="studying[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Oo</option>
													<option>2-Hindi</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Taon at baitang ang pinag-aaralan?</label>
												<select class="form-control select2" name="taon[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-</option>
													<option>2-</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Nag-aaral ba sa pribadong o publikong paaralan?</label>
												<select class="form-control select2" name="private_public[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-PRIBADO</option>
													<option>2-PUBLIKO</option>
												</select>
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->
								<div id="div2" style="display:none" class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 5 TAONG GULANG PATAAS</h3>
									</div>
										<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Mayroon bang hanapbuhay noong nakaraang 3 buwan?</label>
												<select class="form-control select2" name="working[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Mayroon</option>
													<option>2-Wala</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Ano ang pangunahing hanapbuhay noong nakaraang 3 buwan?</label>
												<input type="text" class="form-control" id="" name="work_class[]" placeholder="Ilarawan ang uri ng hanapbuhay" style="width: 100%;">
												<select class="form-control select2" name="job_type[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Officials of government and special interest organizations, corporate, executive, manager,
													managing proprietors, and supervisors</option>
													<option>2-Professionals</option>
													<option>3-Technicians & associate professional</option>
													<option>4-Clerks</option>
													<option>5-Service workers & shop & market sales worker</option>
													<option>6-Farmers, forestry workers & fiserfolks</option>
													<option>7-Trades & related workers</option>
													<option>8-Plant & machine operatores & assemblers</option>
													<option>9-Laborers & unskilled workers</option>
													<option>10-Special occupation</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Saang negosyo o industriya naghahanapbuhay industriya?</label>
												<input type="text" class="form-control" id="" name="industry_class[]" placeholder="Ilarawan ang uri ng negosyo o industriya" style="width: 100%;">
												<select class="form-control select2" name="industry[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Agriculture, Hunting & Forestry</option>
													<option>2-Fishing</option>
													<option>3-Mining & Quarrying</option>
													<option>4-Manufacturing</option>
													<option>5-Electricity, Gas & Water Supply</option>
													<option>6-Construction</option>
													<option>7-Wholesale & Retail Trade; Repair of Motor Vehicles & Personal & Household Goods</option>
													<option>8-Hotel and Restaurant</option>
													<option>9-Transport, Storage and Communication</option>
													<option>10-Financial Intermediation</option>
													<option>11-Real Estate, Renting and Business Activities</option>
													<option>12-Public Administration and Defense; Compulsory Social Security</option>
													<option>13-Education</option>
													<option>14-Health & Social Work</option>
													<option>15-Other Community, Social and Personal Service Activities</option>
													<option>16-Private Household w/ Employed Persons</option>
													<option>17-Extra-territorial organization & Bodies</option>
												</select>
											</div>
											<br>
											<div class="col-md-4">
												<label>Ano and katayuan sa hanapbuhay?</label>
												<select class="form-control select2" name="job_status[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Permanenteng trabaho o negosyo</option>
													<option>2-Panandalian o seasonal</option>
													<option>3-Paiba-iba o palipat-lipat ng trabaho o negosyo</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Ano ang uri/klase ng manggagawa?</label>
												<select class="form-control select2" name="worker_class[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Nagtratrabaho sa isang sambahayan</option>
													<option>2-Nagtratrabaho sa isang pribadong kumpanya</option>
													<option>3-Nagtratrabaho sa gobyerno</option>
													<option>4-Nagtratrabaho sa sariling negosyo at walang empleyado</option>
													<option>5-Nagtratrabaho sa negosyong pag-aari ng pamilya at mayroong empleyado</option>
													<option>6-Nagtratrabaho ng may bayad sa negosyong pag-aari ng pamilya</option>
													<option>7-Nagtratrabaho ng walang bayad sa negosyong pag-ari ng pamilya</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Naghanap ng trabaho o hanapbuhay noong nakaraang 3 buwan?</label>
												<select class="form-control select2" name="did_work[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Oo</option>
													<option>2-Hindi</option>
												</select>
											</div>
											<br>
											<div class="col-md-4">
												<label>Ano ang mga sinagawang hakbang sa paghahanap ng hanapbuhay?</label>
												<select class="form-control select2" name="way[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Nagparehistro sa pampublikong emplyment agency</option>
													<option>2-nagparehistro sa pribadong employment agency</option>
													<option>3-Lumapit sa may-ari ng negosyo o kumpanya</option>
													<option>4-Lumapit sa mga kamag-anak/kaibigan</option>
													<option>5-Sumagot sa pribadong anunsyo</option>
													<option>6-Iba pa</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Bakit hindi naghanap ng hanapbuhay?</label>
												<select class="form-control select2" name="reason[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Naniniwalang walang makikihang trabaho</option>
													<option>2-Naghihintay ng resulta mula sa inaplayang trabaho</option>
													<option>3-Panandalian nakasakit/kapansanan</option>
													<option>4-Masamang panahon</option>
													<option>5-Nahihintay ng muling mabubukas ng pinapaskuang trabaho</option>
													<option>6-bata pa, Matanda na, Retiro o may permanenteng kapansanan</option>
													<option>7-Taong-bahay</option>
													<option>8-Nagaaral</option>
													<option>9-Iba pang dahilan</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Kung nagkaroon ng pagkakataon na magtrabaho, handa ba na tanggapin ito noong nakaraang 3 buwan?</label>
												<select class="form-control select2" name="chance[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Oo</option>
													<option>2-Hindi</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Willing ba na maghanapbuhay noong nakaraang 3 buwan o sa susunod na isang buwan?</label>
												<select class="form-control select2" name="willingness[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Oo</option>
													<option>2-Hindi</option>
												</select>
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->
					
								<div id="div3" style="display:none" class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 10 TAONG GULANG PATAAS</h3>
									</div>
										<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Nakakabasa at nakakasulat ng simpleng mensaha sa alinmang wika o dialekto?</label>
												<select class="form-control select2" name="write_read[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Oo</option>
													<option>2-Hindi</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Mayroon bang kinaaanibang samahan o asosasyong pang komunidad?</label>
												<select class="form-control select2" name="association[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Mayroon</option>
													<option>2-Wala</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Buong pangalan ng oraganisasyon na kinaaniban?</label>
												<input type="text" class="form-control" name="org_name[]" id="" placeholder="" style="width: 100%;">
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->

								<div id="div4" style="display:none" class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 17 TAONG GULANG PATAAS</h3>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Rehistradong botante sa munisipyo/lungsod?</label>
												<select class="form-control select2" name="register[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-Oo</option>
													<option>2-Hindi</option>
												</select>
											</div>
										<div class="col-md-4">
											<label>Bumoto noong huling eleksyon?</label>
											<select class="form-control select2" name="voted[]" style="width: 100%;">
												<option selected="selected">---</option>
												<option>1-Oo</option>
												<option>2-Hindi</option>
											</select>
										</div>
										</div><!-- /.box-body -->
									</div><!-- /.box -->
								</div><!-- /.box-body -->
								
								<div id="div5" style="display:none" class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 0-5 TAONG GULANG</h3>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Antas ng kalusugan ng mga bata mula sa barangay nutrition scholar?</label>
												<select class="form-control select2" name="nutrition[]" style="width: 100%;">
													<option selected="selected">---</option>
													<option>1-</option>
													<option>2-</option>
												</select>
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->
							</div><!-- /.box-body -->
						</div>
					</div>
					<p>
					  <button type="button" id="btnAdd" name="btnAdd" class="btn btn-success">Add Member</button>
					  <button type="button" id="btnDel" name="btnDel" class="btn btn-danger">Remove Member</button>
					</p>
					</fieldset>
					</div>
		
				</div>
				
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Iba pang Miyembro ng Pamilya
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Mayroon bang miyembro na di kasama sa sambahayan ngunit babalik sa loob ng 12 buwan?</label>
										<select class="form-control select2" name="other_members" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon</option>
											<option>2-Wala (Pumunta sa Susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan ng kapamilya?</label>
										<input type="text" name="om_name" class="form-control" id="" placeholder="1. Apelyido, Unang Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang edad noong huling kaarawan?</label>
										<input type="number" name="om_age" class="form-control" id="" placeholder="1. Edad" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Kasarian?</label>
										<select class="form-control select2" name="om_gender" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Lalaki</option>
											<option>2-Babae</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang relasyon sa puno ng sambahayan?</label>
										<select class="form-control select2" name="om_relation" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Asawa</option>
											<option>2-Anak</option>
											<option>3-Manugang</option>
											<option>4-Apo</option>
											<option>5-Magulang</option>
											<option>6-Iba pa</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang dahilan bakit nawala sa sambahayan?</label>
										<select class="form-control select2" name="om_dahilan" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Nag-aaral</option>
											<option>2-Naghahanapbuhay</option>
											<option>3-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Overseas Filipino Worker
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Mayroon bang miyembro na di kasama sa sambahayan ngunit babalik sa loob ng 12 buwan?</label>
										<select class="form-control select2" name="ofw" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon</option>
											<option>2-Wala (Pumunta sa Susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan?</label>
										<input type="text" name="ofw_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang relasyon sa puno ng sambahayan?</label>
										<select class="form-control select2" name="ofw_relation" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Asawa</option>
											<option>2-Anak</option>
											<option>3-Manugang</option>
											<option>4-Apo</option>
											<option>5-Magulang</option>
											<option>6-Iba pa</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Saang bansa naghahanapbuhay?</label>
										<input type="text" name="ofw_country" class="form-control" id="" placeholder="1. Bansa" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang hanapbuhay?</label>
										<input type="text" name="ofw_work" class="form-control" id="" placeholder="1. Hanapbuhay" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Mga Kasambahay na Nag-iisang Magulang
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>May miyembro ba na nag-iisang magulang na may kinakalingang anak?</label>
										<select class="form-control select2" name="isang_magulang" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon</option>
											<option>2-Wala (Pumunta sa Susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan?</label>
										<input type="text" name="im_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang dahilan bakit nagiisang magulang?</label>
										<select name="im_cause" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Pagkamatay ng Asawa</option>
											<option>2-Nakakulong ang Asawa</option>
											<option>3-Walang kakayahang pisikal at/o mental ng asawa</option>
											<option>4-Hiwalay sa asawa, legal man o hindi nang hindi bababa sa isang taon at nasa kanyang pangangalaga ang kanyang mga anak</option>
											<option>5-Pagkawalang-bisa ng kasa ayon sa batas ng korte o simbahan at nasa kanyang pangangalaga ang mga anak</option>
											<option>6-Higit sa isang taon nang iniwan o inabandona ng asawa</option>
											<option>7-Ina/ama na hindi ikanasal at pinoling kaingain ang mga anak</option>
											<option>8-Mag-isang nagbibigay ng pangangalaga sa bata, sa kondisyong siya ay lisensyadong "foster parent"
											ng DSWD o itinalaga bilang "legal guardian" ng korte</option>
											<option>9-Mag-isang umaako ng reponsibilidad sa bata dahil sa pagkamatay, pag-abandona, pagkawala o kawalang komunikasyon ng magulang nito
											nang hindi bababa sa isang taon</option>
											<option>10-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Mga Kasambahay na may Kapansanan
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>May miyembro ba sa sambahayan na may kapansanan?</label>
										<select name="pwd" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon</option>
											<option>2-Wala (Pumunta sa Susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan?</label>
										<input type="text" name="pwd_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang uri ng kapansanan?</label>
										<select name="pwd_type" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Total blindness</option>
											<option>2-Partial blindness</option>
											<option>3-Low vision</option>
											<option>4-Totally deaf</option>
											<option>5-Partially deaf</option>
											<option>6-Hard of hearing</option>
											<option>7-Oral defect</option>
											<option>8-One hand</option>
											<option>9-No hands</option>
											<option>10-One leg</option>
											<option>11-No legs</option>
											<option>12-Mild cerebral palsy</option>
											<option>13-Severe cerebral palsy</option>
											<option>14-Regularly intellectually impaired</option>
											<option>15-Severely intellectually impaired</option>
											<option>16-Regularly impaired by mental illness</option>
											<option>17-Severely impaired by mental illness</option>
											<option>18-Regularly multiple impaired</option>
											<option>19-Severely multiple impaired</option>
											<option>20-Iba pa</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang sanhi ng kapansanan?</label>
										<select name="pwd_cause" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-In born</option>
											<option>2-pagkakasakit</option>
											<option>3-Aksidente</option>
											<option>4-Katandaan</option>
											<option>5-Iba pa</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Anong tulong ang natangap dahil sa kapansanan?</label>
										<input type="text" name="pwd_tulong" class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Saan nanggaling ang tulong?</label>
										<select name="pinanggalingan" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Gobyerno</option>
											<option>2-NGO</option>
											<option>3-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                            Mga Kasambahay na Senior Citizens
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Pangalan ng kasambahay na may 60 taong gulang pataas</label>
										<input type="text" name="sc_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>May "senior citizen's" ID?</label>
										<select name="sc_id" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon (Sagutan ang susunod na tanong)</option>
											<option>2-Wala (Pumunta sa susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Saan nagagamit ang kanyang ID?</label>
										<input type="text" name="sc_use" class="form-control" id="" placeholder="1." style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                            Mga Kasambahay na Nakapasa sa Board o Bar Exam
                          </a>
                        </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Mayroon bang kasambahay na nakapasa sa board o bar exam?</label>
										<select name="board_passer" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon</option>
											<option>2-Wala (Pumunta sa susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Pangalan ng kasambahay na nakapasa sa board o bar exam</label>
										<input type="text" name="bp_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang naipasang propesyon?</label>
										<input type="text" name="bp_profession" class="form-control" id="" placeholder="1. Propesyon" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                            Kalusugan
                          </a>
                        </h4>
                      </div>
                      <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Noong nakaraang labing-dalawang buwan, kayo ba ay nagpapagamot upang malunansan ang sakit?</label>
										<select name="nagpapagamot" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon (Sagutan ang susunod na tanong)</option>
											<option>2-Hindi (Lagpasan ang sumunod na tanong)</option>
											<option>3-Hindi nagkasakit (Lagpasan ang sumunod na tanong)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Sa huling pagkakasakit ng sinumang miyembro, saan kayo nagpagamot?</label>
										<select name="saan_nagpapagamot" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Public hospital (Provincial hospital)</option>
											<option>2-Public hospital (Municipal/City hospital)</option>
											<option>3-Public hospital (District hospital)</option>
											<option>4-Public hospital (National)</option>
											<option>5-Private Hospital/Clinic</option>
											<option>6-Rural Health Units</option>
											<option>7-Brgy. Health Station/Center</option>
											<option>8-Non-medical/non-trained Hilot/Personnel</option>
											<option>9-Iba pa</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ilan ang mag-asawa sa inyong sambahayan?</label>
										<input type="number" name="num_couples" class="form-control" id="" placeholder="1." style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pangalan ng mga mag-asawa</label>
										<input type="text" name="couple_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Gumamit ba ng pamamaraan ng magplano ng pamilya?</label>
										<select name="family_planning" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Yes (Sagutan ang susunod na tanong)</option>
											<option>2-No (Pumunta sa susunod na Panel)</option>
											<option>3-Hindi alam (Pumunta sa susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang ginagamit na pamamaraan?</label>
										<select name="fp_ways" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Basal body temperature</option>
											<option>2-Billings ovulation method</option>
											<option>3-Standard days method</option>
											<option>4-Symptothermal method</option>
											<option>5-Lactational Amenorrhea Method (LAM)</option>
											<option>6-Barrier method (condom, diaphragm)</option>
											<option>7-IUD</option>
											<option>8-Pills</option>
											<option>9-Injectible</option>
											<option>10-Vasectomy</option>
											<option>11-Tubal ligation</option>
											<option>12-Hindi alam</option>
											<option>13-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                            Mga Dating Kasambahay 
                          </a>
                        </h4>
                      </div>
                      <div id="collapseEight" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Mayroon ba kayong dadting kasambahay na namatay noong kanaraang 12 buwan?</label>
										<select name="dating_kasambahay" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon (Sagutan ang susunod na tanong)</option>
											<option>2-Wala (Pumunta sa susunod na Panel)</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Pangalan ng kasambahay na namatay?</label>
										<input type="text" name="dk_name" class="form-control" id="" placeholder="1. Pangalan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Kasarian</label>
										<select name="dk_gender" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Lalaki</option>
											<option>2-Babae</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Edad</label>
										<input type="text" name="dk_age" class="form-control" id="" placeholder="1. Edad" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang sanhi ng pagkamatay?</label>
										<select name="death_cause" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Sakit sa puso</option>
											<option>2-Sakit sa "vascular system"</option>
											<option>3-Pneumonia</option>
											<option>4-Tuberculosis</option>
											<option>5-Cancer</option>
											<option>6-Diarrhea</option>
											<option>7-Measles</option>
											<option>8-Komplikasyon sa pagbubuntis o panganganak</option>
											<option>9-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                            Biktima ng Krimen
                          </a>
                        </h4>
                      </div>
                      <div id="collapseNine" class="panel-collapse collapse">
                        <div class="box-body">
							<label>Noong nakaraang 12 buwan, kayo ba o sinuman sa inyong kasambahay ay naging biktima ng alin man sa mga sumusunod na krimen?</label>
							<div class="row">
								<div class="col-md-4">
									<label>Pagpatay</label>
										<select name="pagpatay" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="pagpatay_lalaki" class="form-control" id="" placeholder="Ilang Lalaki" style="width: 100%;">
										<input type="number" name="pagpatay_babae" class="form-control" id="" placeholder="Ilang Babae" style="width: 100%;">
										<input type="number" name="kabuuan_pagpatay" class="form-control" id="" placeholder="Kabuuan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pagnanakaw</label>
										<select name="pagnanakaw" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="pagnanakaw_lalaki" class="form-control" id="" placeholder="Ilang Lalaki" style="width: 100%;">
										<input type="number" name="pagnanakaw_babae" class="form-control" id="" placeholder="Ilang Babae" style="width: 100%;">
										<input type="number" name="kabuuan_pagnanakaw" class="form-control" id="" placeholder="Kabuuan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Panggagahasa</label>
										<select name="panggagahasa" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="panggagahasa_lalaki" class="form-control" id="" placeholder="Ilang Lalaki" style="width: 100%;">
										<input type="number" name="panggagahasa_babae" class="form-control" id="" placeholder="Ilang Babae" style="width: 100%;">
										<input type="number" name="kabuuan_panggagahasa" class="form-control" id="" placeholder="Kabuuan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pananakit</label>
										<select name="pananakit" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="pananakit_lalaki" class="form-control" id="" placeholder="Ilang Lalaki" style="width: 100%;">
										<input type="number" name="pananakit_babae" class="form-control" id="" placeholder="Ilang Babae" style="width: 100%;">
										<input type="number" name="kabuuan_pananakit" class="form-control" id="" placeholder="Kabuuan" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Iba pa</label>
										<select name="iba_crime" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="iba_crime_lalaki" class="form-control" id="" placeholder="Ilang Lalaki" style="width: 100%;">
										<input type="number" name="iba_crime_babae" class="form-control" id="" placeholder="Ilang Babae" style="width: 100%;">
										<input type="number" name="kabuuan_iba_crime" class="form-control" id="" placeholder="Kabuuan" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                            Tubig at Kalinisan 
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTen" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-4">
									<label>Ano ang pinagkukunan ng tubig na inumin ng sambahayan?</label>
										<select name="water_source" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Pamayanang sistema ng tubig - sariling gamit</option>
											<option>2-Pamayanang sistema sa tubig - kasalo ang ibang samabahayan</option>
											<option>3-Artesian deep well - sariling gamit</option>
											<option>4-Atesian deep well - kasalo ang iabng samabahayan</option>
											<option>5-atesian shallow well - sariling gamit</option>
											<option>6-Artesian shallow well - kasaalo ang ibang sambahayan</option>
											<option>7-Dug/shallow well - sariling gamit</option>
											<option>8-Dug/shallow well - kasalo ang ibang sambahayan</option>
											<option>9-Ilog, sapa, lawa, bukal, atbp anyong tubig</option>
											<option>10-Bottled/Purified/Distilled Water</option>
											<option>11-Tanker truck/Peddler</option>
											<option>12-Iba pang pinagkukunan</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Gaano kalayo ang pinagkukunan ng inumang tubig? (Sagutan kung ang sagot sa nakaraang tanong ay 1-9)</label>
										<select name="water_location" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Sa loob lang ng pamamahay</option>
											<option>2-Sa labas ng bahay/bakuran ngunit hindi higit sa 250 metro ang layo</option>
											<option>3-Higit sa 250 metro ang layo</option>
											<option>4-Hindi alam</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Anong uri ng palikuran ang ginagamit (Sagutan kung ang sagot sa nakaraang tanong ay 10-12)</label>
										<select name="palikuran" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Water sealed flush to sewerage system/ septic tank - sariling gamit</option>
											<option>2-Water sealed flush to sewerage system/ septic tank - kasalo ang ibang sambahayan</option>
											<option>3-Hukay na may takip</option>
											<option>4-Hukay na walang takip</option>
											<option>5-Walang palikuran</option>
											<option>6-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                            Tirahan
                          </a>
                        </h4>
                      </div>
                      <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-8">
									<label>Ano ang katayuan ng inyong sambahayan sa pamamalagi sa bahay at lupang tinitirhan?</label>
										<select name="sambahayan_status" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Pag-aari ang bahay at lupa</option>
											<option>2-Inuupahan ang bahay/kwarto at lupa</option>
											<option>3-Pag-aari ang bahay ngunit inuupahan ang lupa</option>
											<option>4-pag-aari ang bahay, libreng upa sa lupa na may pahintulot ng may-ari</option>
											<option>5-Pag-aari ang bhay, libreng upa sa lupa ngunit walang pahintulot ng may-ari</option>
											<option>6-Libreng paninirahan sa bahay at lupa na may pahintulot ng may-ari</option>
											<option>7-Libreng paninirahan sa bahay at lupa na walang pahintulot ng may-ari</option>
											<option>8-Iba pa</option>
										</select>
								</div>
							</div>
							<br>
							<div class="row">
								<br>
								<label>Kung ang sagot sa pamamalagi sa bahay at/o lupa sa ay "2" lagpasan ang susunod na tanong kung hindi sagutan ang susunod na tanong</label>
								<div class="col-md-8">
									<label>Magkano ang tantiyang upa sa 1 buwan sa inyong tinitirhan kung ito ay inuupahan</label>
										<input type="number" name="rental_fee" class="form-control" id="" placeholder="" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<label>May kuryente ba sa inyong bahay?</label>
										<select name="electricity" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mayroon (Sagutan ang susunod na tanong)</option>
											<option>2-Wala (Lagpasan ang susunod na 2 tanong)</option>
										</select>
								</div>
							</div>
							<br>
							<label>Ano ang pinanggagalingan ng kuryente sa bahay?</label>
							<div class="row">
								<div class="col-md-2">
									<label>Electric Company</label>
										<select name="electricity_source[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Electric Company">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Generator</label>
										<select name="electricity_source[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Generator">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Solar</label>
										<select name="electricity_source[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Solar">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Battery</label>
										<select name="electricity_source[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Battery">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Iba pa</label>
										<select name="electricity_source[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-8">
									<label>Magkano ang karaniwang binabayaran sa konsumo sa kuryente kada buwan</label>
										<input type="text" name="consumption_fee" class="form-control" id="" placeholder="" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Mayroon ba ang inyong sambahayan ng mga sumusunod na nagagamit na kasangkapan?</label>
							<div class="row">
								<div class="col-md-2">
									<label>Radio/Radio Casette</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Radio/Radio Casette">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Television</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Television">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>CD/VCD/DVD player</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="CD/VCD/DVD Player">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Stereo/Component</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Stereo/Component">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Karaoke</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Karaoke">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Refrigerator/Freezer</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Refrigerator/Freezer">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Electric Fan</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Electric Fan">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Electric Iron</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Electric Iron">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>LPG Gas Stove/Range</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="LPG Gas Stove/Range">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Washing Machine</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Washing Machine">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Microwave Oven</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Microwave Oven">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Personal Computer</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Personal Computer">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Mobile Phone/Cellular Phone</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Mobile Phone/ Cellular Phone">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div><div class="col-md-2">
									<label>Landline Telephone</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option name="Landline Telephone">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div><div class="col-md-2">
									<label>Air Conditioner</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Air Conditioner">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Sewing Machine</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Sewing Machine">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
								<div class="col-md-2">
									<label>Cer, Jeep, Motorcycle/other motorized vehicles</label>
										<select name="kasangkapan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Car, Jeep, Motorcycle at iba pa">1-Mayroon</option>
											<option>2-Wala</option>
										</select>
								</div>
							</div>
							<br>
							<label style="color: red">Sagutin batay sa uri ng materyales na ginagamit at sa pagkakagawa sa nasabing bahagi ng bahay:</label>
							<div class="row">
								<div class="col-md-4">
									<label>Materyales na ginamit sa dingding</label>
										<select name="materials_dingding" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Strong Materials</option>
											<option>2-Light materials</option>
											<option>2-Salvaged/makeshift materials</option>
											<option>2-Mixed but predominantly strong materials</option>
											<option>2-Mixed but prdominantly light materials</option>
											<option>2-Mixed but prdominantly salvaged materials</option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Materyales na ginamit sa Bubong</label>
										<select name="materials_bubong" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Strong Materials</option>
											<option>2-Light materials</option>
											<option>2-Salvaged/makeshift materials</option>
											<option>2-Mixed but predominantly strong materials</option>
											<option>2-Mixed but prdominantly light materials</option>
											<option>2-Mixed but prdominantly salvaged materials</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">
                            Pinagmumulan ng Kita ng Sambahayan (Gawaing Pangkabuhayan)
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwelve" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<label>Noong nakaraang 12 buwan, kayo ba o sinuman sa mga kasambahay ay nagsagawa ng mga sumusinod na gawaing pangkabuhayan para magkaroon ng
								kita para sa sambahayan?</label>
								<br>
								<label>Magkano ang kabuuang netong kita mula sa mga gawaing pangkabuhayan na ito noong nakaraang 12 buwan?</label>
								<br>
								<br>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Pagsasaka at paghahhalaman tulad ng pagttanim ng palay, mais, kamote, gulay, prutas, atbp panamin</label>
									<select name="pagsasaka" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input type="number" name="pagsasaka_salapi" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input type="number"  name="pagsasaka_bagay" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pag-aalaga ng mga hayp katulad ng kalabaw, baka, baboy, kambing, manok, bibe, atbp. Kasama sa gawaing ito ang 
									pagkuha ng gatas mula sa kalabaw, baka at kambing at pagkuha ng itlog mula sa kalabaw, baka at kambing at pagkuha ng itlog 
									mula sa manok, bibe at pugo</label>
									<select name="paghahayop" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input type="number" name="paghahayop_salapi" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input type="number" name="paghahayop_bagay" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pangingisda o panghuhuli ng isada atbp yamang tubig tulad ng tahong, suso, talaba, seaweeds, etc. Kasama din dito ang
									pag-aalaga ng isada katulad ng bangus, tilapia, talaba, tahong, atbp.</label>
									<select name="pangingisda" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input type="number" name="pangingisda_salapi" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input type="number" name="pangingisda_bagay" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pangangahoy at pangangaso, tulad ng pagtatanim ng puno, pagkuha ng panggatong, pagkuha ng mga prodiktong mula sa gubat gaya ng kahoy,
									cogon, nipa, rattan, kawayan atbp o panghuhuli ng mga hayop tulad ng usa, baboy-ramo, mga ibon atbp.</label>
									<select name="pangangahoy" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="pangangahoy_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="pangangahoy_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pagtitinda o pangangalakal ng anumang produkto. Kasama dito ang pagtitinda sa palengke, lansangan, malls, bahay-bahay atbp.</label>
									<select name="pagtitinda" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="pagtitinda_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="pagtitinda_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Paggawa ng produkto tulad ng basahan, patahian ng damit, tsinelas, bagoong, tuyo atbp.</label>
									<select name="paggawa" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="paggawa_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="paggawa_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Mga serbisyong pantao o pangbayan tulad ng serbisyong pangkalusugan, "dental", pamamalakad ng paaralan,
									"restaurants", "hotel", atbp.</label>
									<select name="pantao" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="pantao_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="pantao_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Serbisyo sa transportasyon at komunikasyon. Halimbawa nito ay pagpapasada ng dyipni, trisikel, taxi, "messenger",
									at postal service. Kasama din dito ang mga negosyong nagbibigay ng serbisyong pagtatago at pag-iimbak ng produkto</label>
									<select name="transportasyon" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="transportasyon_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="transportasyon_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pagmimina ng graba, buhangin, bakal, ginto atbp mahahalagang bato. Kasama din dito ang paggawa ng asin, pagtitibag, atbp.</label>
									<select name="pagmimina" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="pagmimina_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="pagmimina_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Konstruksyon tulad ng paggawa at pagkumpuni ng bahay, gusali, tulay atbp</label>
									<select name="construction" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="construction_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="construction_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Mga gawaing pangkabuhayan na hindi kahalintulad sa mga nabanggit, tulad ng serbisyo sa kuryente, gaas at tubig,
									mga negosyo ukol sa pinansyal tulad ng real estate, insurance atbp.</label>
									<select name="pangkabuhayan" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
									</select>
									<input name="pangkabuhayan_salapi" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Salapi" style="width: 100%;">
									<input name="pangkabuhayan_bagay" type="number" class="form-control" id="fsname" placeholder="Netong kita sa Bagay" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>Pasamahin ang netong kita sa salapi</label>
									<input name="netong_salapi" type="number" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pasamahin ang netong kita sa bagay</label>
									<input name="netong_bagay" type="number" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">
                            Pinagmumulan ng Kita ng Sambahayan (Sahod/Sweldo mula sa Pinapasukang Trabaho)
                          </a>
                        </h4>
                      </div>
                      <div id="collapse13" class="panel-collapse collapse">
                        <div class="box-body">
							<label>Noong nakaraang 12 buwan, Ano ang kabuuang halaga ng sweldo/sahod na natanggap nang kahit sino sa kasambahay?</label>
							<br>
							<div class="row">
								<div class="col-md-3">
										<input type="text" class="form-control" id="fsname" placeholder="Pangalan" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Salapi" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Bagay" style="width: 100%;">
										</select>
								</div>
								<div class="col-md-3">
										<input type="text" class="form-control" id="fsname" placeholder="Pangalan" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Salapi" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Bagay" style="width: 100%;">
										</select>
								</div>
								<div class="col-md-3">
										<input type="text" class="form-control" id="fsname" placeholder="Pangalan" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Salapi" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Bagay" style="width: 100%;">
										</select>
								</div>
								<div class="col-md-3">
										<input type="text" class="form-control" id="fsname" placeholder="Pangalan" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Salapi" style="width: 100%;">
										<input type="text" class="form-control" id="fsname" placeholder="Kabuuang Kita sa Bagay" style="width: 100%;">
										</select>
								</div>
							</div>
							<br>
							<br>
							<div class="row">
							<label>Noong nakaraang 12 buwan, magkano ang natanggap ninyo o sinuman sa inyong kasambahay mula sa mga sumusunod</label>
							<br>
							<br>
								<div class="col-md-4">
									<label>Bahaging produksyon katulad ng ani na panamin at mga hayop na pinaalagaan sa ibang sambahayan</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Suporta galing sa mga kamag-anak na nasa iabng bansa o Overseas Filipino Workers</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Iba pang suporta galing sa iabng bansa, katulad ng pensyion, benepisyo, kita mula sa puhunan sa negosyo, tulong pinansyal
									o regalong natanggap mula sa mga institusyon na nasa ibang bansa</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Suporta o tulong pinansyal galing sa mga kamag-anak, pamahalaan o pribadong institusyon dito sa bansa</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Bayad galing sa pinauupahang lupa, gusali atbp ari-arian. Hindi kasama dito ang mga lupain na ginagamit sa agrikultura</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Mga interes o tubo galing sa perang nakaimpok sa bamko at mga pautang sa ibang tao o sambahayan</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pensyon, benepisyo mula sa pagreretiro, at "social security benefits"</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Dibidendo o mga kita sa mga pinamuhunan sa ibang negosyo</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Iba pang kita na hindi kasama sa mga nabanggit</label>
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Salapi" style="width: 100%;">
									<input type="text" class="form-control" id="fsname" placeholder="Kita sa Bagay" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Kabuuang Kita Mula sa iba pang Pinagkukunan ng Kita</label>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>Kabuuang Kita sa Salapi</label>
									<input type="text" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Kabuuang Kita sa Bagay</label>
									<input type="text" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Kabuuang Tantiya ng Upa ng Tinitirahang Bahay at Lupa</label>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>Kunkin ang buwanang tantiya ng upa mula sa Tanong: "Sa inyong palagay, magkano ang tantiyang upa sa 1 buwan sa inyong
									tinitirahan kung ito ay inyong inuupahan (Sekyon/Panel TIRAHAN)"</label>
									<input type="text" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Kabuuang Kita Sa Salapi at Sa Bagay</label>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>(Kabuuang Netong Kita sa Salapi) + (Kabuuang Sahod/Sweldo sa Salapi) + (Kabuuang Kita sa Salapi)</label>
									<input type="text" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>(Kabuuang Netong Kita sa Bagay) + (Kabuuang Sahod/Sweldo sa Bagay) + (Kabuuang Kita sa Bagay) + (Kabuuang Tantiya ng Upa 
									ng Tinitirahang Bahay at Lupa)</label>
									<input type="text" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Kabuuang Kita ng Sambahayan</label>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>(Kabuuang Kita sa Salapi) + (Kabuuang Kita sa Bagay)</label>
									<input type="text" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">
                            Agrikultura 
                          </a>
                        </h4>
                      </div>
                      <div id="collapse14" class="panel-collapse collapse">
                        <div class="box-body">
							<label style="color: red">*Sagutan ang laman ng panel na ito kung ang uri ng kabuhayan ay Pagsasaka at paghahalaman kung hindi tumuloy sa susunod na panel</label>
							<br>
							<div class="row">
								<div class="col-md-8">
									<label>Ano ang katayuan ninyo o ng kasambahay sa pamamalagi sa lupaing inyong sinasaka?</label>
										<select name="katayuan_pamamalagi" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Pag-aari ang lupang sinasaka</option>
											<option>2-Nangungupahan</option>
											<option>3-Hindi pag-aari ngunit mayroong pahintuloy ng may-ari</option>
											<option>4-Hindi pag-aari ngunit walang pahintulot ng may-ari</option>
											<option>5-Iba pa</option>
										</select>
								</div>
								<div class="col-md-8">
									<label>Gaano kalawak ang lupang sinasaka?</label>
										<select name="lawak_sinasaka" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mababa sa 1 hektarya</option>
											<option>2-1-3 hektarya</option>
											<option>3-3.1-5 hektarya</option>
											<option>4-Higit sa 5 hektarya</option>
										</select>
								</div>
							</div>
							<br>
							<div class="row">
								<label>Anu-ano ang mga naaning pananim o bungang-kahoy noong nakaraang 12 buwan? At gaano kadami ang mga inani noong
								huling anihan</label>
								<br>
								<div class="col-md-3">
										<input type="text" name="uri[]" class="form-control" id="fsname" placeholder="Uri ng Pananim" style="width: 100%;">
										<input type="number" name="dami[]" class="form-control" id="fsname" placeholder="Dami ng Naani" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="uri[]" class="form-control" id="fsname" placeholder="Uri ng Pananim" style="width: 100%;">
										<input type="number" name="dami[]" class="form-control" id="fsname" placeholder="Dami ng Naani" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="uri[]" class="form-control" id="fsname" placeholder="Uri ng Pananim" style="width: 100%;">
										<input type="number" name="dami[]" class="form-control" id="fsname" placeholder="Dami ng Naani" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="uri[]" class="form-control" id="fsname" placeholder="Uri ng Pananim" style="width: 100%;">
										<input type="number" name="dami[]" class="form-control" id="fsname" placeholder="Dami ng Naani" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<label>Kayo ba o sinumang miyembro ng sambahayan ay gumagamit ng mga sumusunod na kagamitang pangagrikultura? <br>
								Sagutan ang susunod na dropdown kung pag-aari ba ito ng sambahayan</label>
								<br>
								<br>
								<div class="col-md-3">
										<label>Beast of Burden</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Beast of Burden">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Plow</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Plow">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Harrow</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Harrow">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Mower</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Mower">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Thresher</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Thresher">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Insecticide Sprayer</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Insecticide Sprayer">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Farm Tractor</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Farm Tractor">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Turtle/Mudboat</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Turtle/Mudboat">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Planter/Transplanter/Dryer</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Planter/Transplanter/Dryer">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Mechanical dryer</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Mechanical Dryer">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Multipurpose drying pavement</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Multipurpose Drying Pavement">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Rice/Corn/Feed Mill</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Rice/Corn/Feed Mill">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Harvester, any crop</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Harvester, any crop">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Warehouse granary</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Warehouse Granary">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Farmshed</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Farmshed">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Irrigation pump</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Irrigation Pump">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
										<label>Iba pa</label>
										<select name="agrikultura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pag-aari">1-Oo</option>
											<option value="Hindi Pag-aari">2-Hindi</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">
                            Paghahayupan
                          </a>
                        </h4>
                      </div>
                      <div id="collapse16" class="panel-collapse collapse">
                        <div class="box-body">
							<label style="color: red">*Sagutan ang laman ng panel na ito kung ang uri ng kabuhayan ay Pangingisda kung hindi tumuloy sa susunod na panel</label>
							<br>
							<label>Noong nakaraang 12 buwan, ano ang mga inalagaang hayop para pagkakitaan?</label>
							<div class="row">
								<div class="col-md-3">
									<label>Patabaing Baboy</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Patabaing Baboy">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Inahing baboy</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Inahing Baboy">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Kambing</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Kambing">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Kalabaw</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Kalabaw">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Baka</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Baka">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Manok</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Manok">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Paitluging Manok</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Paitluging Manok">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Itik/Bibe</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Itik/Bibe">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<select name="alaga[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<input type="number" name="ilan[]" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Gaano ang karaniwang dami ng produksyon mula sa pag-aalaga ng hayop?</label>
							<div class="row">
								<div class="col-md-3">
									<label>Buhay na hayop (bilang)</label>
										<input type="text" name="buhay_hayop_uri" class="form-control" id="fsname" placeholder="Uri" style="width: 100%;">
										<input type="number" name="buhay_hayop_bilang" class="form-control" id="fsname" placeholder="Dami" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Karne (timbang-kg)</label>
										<input type="text" name="karne_uri" class="form-control" id="fsname" placeholder="Uri" style="width: 100%;">
										<input type="number" name="karne_bilang" class="form-control" id="fsname" placeholder="Dami" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Gatas (litro)</label>
										<input type="text" name="gatas_uri" class="form-control" id="fsname" placeholder="Uri" style="width: 100%;">
										<input type="number" name="gatas_bilang" class="form-control" id="fsname" placeholder="Dami" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Itlog (bilang)</label>
										<input type="text" name="itlog_uri" class="form-control" id="fsname" placeholder="Uri" style="width: 100%;">
										<input type="number" name="itlog_bilang" class="form-control" id="fsname" placeholder="Dami" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<input type="text" name="iba_uri" class="form-control" id="fsname" placeholder="Uri" style="width: 100%;">
										<input type="text" name="iba_bilang" class="form-control" id="fsname" placeholder="Dami" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">
                            Pangingisda
                          </a>
                        </h4>
                      </div>
                      <div id="collapse15" class="panel-collapse collapse">
                        <div class="box-body">
							<label style="color: red">*Sagutan ang laman ng panel na ito kung ang uri ng kabuhayan ay Pangingisda kung hindi tumuloy sa susunod na panel</label>
							<br>
							<br>
							<label>Saan nangingisda ang sambahayan?</label>
							<div class="row">
								<div class="col-md-3">
									<label>Fishpond</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Fishpond">1-Oo (Pumunta sa susunod na tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Fishcage</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Fishcage">1-Oo (Pumunta sa susunod na tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Sea</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Sea">1-Oo (Lagpasan ang susunod na 3 tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Marsh</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Marsh">1-Oo (Lagpasan ang susunod na 3 tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Lake</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Lake">1-Oo (Lagpasan ang susunod na 3 tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>River</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="River">1-Oo (Lagpasan ang susunod na 3 tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Stream/Creek</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Stream/Creek">1-Oo (Lagpasan ang susunod na 3 tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<select name="palaisdaan[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo (Lagpasan ang susunod na 3 tanong)</option>
											<option>2-Hindi</option>
										</select>
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>Gaano kalawak ang inyong fishpond?</label>
										<select name="lawak_fishpond" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Mababa sa 1 hektarya</option>
											<option>2-1-3 hektarya</option>
											<option>3-3.1-5 hektarya</option>
											<option>4-Higit sa 5 hektarya</option>
										</select>
								</div>
								<div class="col-md-6">
									<label>Ilan fishcage mayroon kayo?</label>
										<input type="number" name="bilang_fishcage" class="form-control" id="fsname" placeholder="Ilan" style="width: 100%;">
								</div>
							</div>
							<br>
							<br>
							<label>Ano ang sukat ng inyong fishcage (SQ.M.)?</label>
							<div class="row">
								<div class="col-md-3">
									<label>Fishcage 1</label>
										<input type="text" name="fishcage[]" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Fishcage 2</label>
										<input type="text" name="fishcage[]" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Fishcage 3</label>
										<input type="text" name="fishcage[]" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Fishcage 4</label>
										<input type="text" name="fishcage[]" class="form-control" id="fsname" placeholder="" style="width: 100%;">
								</div>
							</div>
							<br>
							<br>
							<label>Noong nakaraang 12 buwan, anu-ano ang mga nahuling isda o iba pang yamang tubig </label>
							<label>Gaano kadami ang karaniwang ani/huli na isda o iba pang yamang tubig? (kilograms)?</label>
							<div class="row">
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
								<div class="col-md-3">
										<input type="text" name="yamang_tubig[]" class="form-control" id="fsname" placeholder="Huli na isda o yamang tubig" style="width: 100%;">
										<input type="number" name="ani[]" class="form-control" id="fsname" placeholder="Dami ng huli/ani (kg)" style="width: 100%;">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<br>
									<br>
									<label>Mayroon ba kayong bangka?</label>
										<select name="bangka" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo, bangkang de-motor</option>
											<option>2-Oo, bangkang hindi de-motor</option>
											<option>3-Hindi</option>
										</select>
								</div>
							</div>
							<br>
							<label>Kayo ba o sinuman miyembro ng sambahayan ay gumagamit ng mga sumusunod na kagamitan?<br>
							Ito ba ay pag-aari ng sambahayan?</label>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Fish net</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Fish Net">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Electricity</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Electricity" >1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Bagnets</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Bagnets">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Gillnets</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Gillnets">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pag-aari[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Traps</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Traps">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Hooks & line</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Hooks & Line">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Sift net</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Sift Net">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<select name="gamit[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo</option>
											<option>2-Hindi</option>
										</select>
										<select name="pagaarii[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">
                            Pamamahala sa Basura
                          </a>
                        </h4>
                      </div>
                      <div id="collapse17" class="panel-collapse collapse">
                        <div class="box-body">
							<label>Ano ang pamamaraan sa pamamahala sa basura?</label>
							<br>
							<div class="row">
								<div class="col-md-3">
									<label>Kinokolekta ang basura</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Kinokolekta ang basura" >1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Sinusunog</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Sinusunog" >1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Composting</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Composting">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Recycling</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Recycling">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Waste segregation</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Waste Segregation">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Hukay na may takip</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Hukay na may takip">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Hukay na walang takip</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Hukay na walang takip">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<select name="basura[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<br>
									<br>
									<label>Sino ang kumokolekta ng basura?</label>
										<select name="kumokolekta_basura" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Municipal/city garbage colletor</option>
											<option>2-Brgy garbage colletor</option>
											<option>3-Private garbage colletor</option>
											<option>4-Iba pa</option>
										</select>
								</div>
								<div class="col-md-4">
									<br>
									<br>
									<label>Gaano kadalas ang pagkokolekta ng basura?</label>
										<select name="kadalas_pangongolekta" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Araw-araw</option>
											<option>2-Tatlong beses sa isang linggo</option>
											<option>3-Dalawang beses sa isang linggo</option>
											<option>4-Isang beses sa isang linggo</option>
											<option>5-Iba pa</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">
                            Mga Kalamidad
                          </a>
                        </h4>
                      </div>
                      <div id="collapse18" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-10">
									<label>Noong nakaraang 12 buwan, ang inyong sambahayan ba ay nasalanda o lubhang naapektuhan ng mga kalamidad
									ng bagyo, baha o sunog?</label>
										<select name="nasalanta" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo </option>
											<option>2-Hindi (Pumunta sa susunod na panel)</option>
										</select>
								</div>
							</div>
							<br>
							<br>
							<label>Ano ang mga kalamidad na sumalanta sa inyong sambahayan?</label>
							<div class="row">
								<div class="col-md-3">
									<label>Bagyo</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Bagyo">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Baha</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Baha">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Tagtuyot</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Tagtuyot">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Lindol</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Lindol">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Pagsabog ng bulkan</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Pagsabog ng bulkan">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Armed Conflict</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Armed Conflict">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Sunog</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Sunog">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<select name="kalamidad[]" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option value="Iba pa">1-Oo </option>
											<option>2-Hindi</option>
										</select>
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
					<div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">
                            Dalas ng Pagkain
                          </a>
                        </h4>
                      </div>
                      <div id="collapse19" class="panel-collapse collapse">
                        <div class="box-body">
							<div class="row">
								<div class="col-md-10">
									<label>Noong nakaraang 3 buwan, nangyari ba kahit isang beses na nakaranas ang sambahayan ng gutom at walang makain?</label>
										<select name="gutom" class="form-control select2" style="width: 100%;">
											<option selected="selected">---</option>
											<option>1-Oo</option>
											<option>2-Hindi</option>
										</select>
								</div>
							</div>
							<br>
							<label>Noong nakaraang 3 buwan, ilang araw nakaranas ang sambahayan ng gutom at walang makain?</label>
							<div class="row">
								<div class="col-md-4">
									<label>Unang Buwan</label>
										<input type="text" name="buwan[]" class="form-control" id="fsname" placeholder="Pangalan ng Buwan" style="width: 100%;">
										<input type="number" name="araw[]" class="form-control" id="fsname" placeholder="Blg. ng Araw" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ikalawang Buwan</label>
										<input type="text" name="buwan[]" class="form-control" id="fsname" placeholder="Pangalan ng Buwan" style="width: 100%;">
										<input type="number" name="araw[]" class="form-control" id="fsname" placeholder="Blg. ng Araw" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ikatlong Buwan</label>
										<input type="text" name="buwan[]" class="form-control" id="fsname" placeholder="Pangalan ng Buwan" style="width: 100%;">
										<input type="number" name="araw[]" class="form-control" id="fsname" placeholder="Blg. ng Araw" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
                    <div class="panel box box-success">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Collapsible Group Success
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="box-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
					<button type="submit" id="btnAdd" onClick="return confirm('Do you want to continue?')" name="submit-btn" class="btn btn-success">Submit</button>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
		  </div>
          

         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	</form>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Simbahayan</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Clone -->
	<script type="text/javascript" src="plugins/clone/clone-form-td.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>

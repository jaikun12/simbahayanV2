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
$mem_id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simbahayan | Information</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
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
            Information
            <small>Version 1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Information</li>
          </ol>
        </section>
		<?php
			$mem2 = mysql_query("SELECT * FROM members WHERE member_id='$mem_id'");
			$mem3 = mysql_fetch_array($mem2);
			$sim = mysql_query("SELECT * FROM simbahayan WHERE simbahayan_id='".$mem3['simbahayan_id']."'");
			$sim2 = mysql_fetch_array($sim);
		?>

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
					   <div class="col-md-6">
						 <div class="form-group">
							  <label for="members">Ilang miyembro mayroon dito sa inyong sambahayan?</label>
							  <input type="number" class="form-control" id="lsname" value="<?php echo $sim2['num_members'];?>" style="width: 100%;" disabled>
							</div>
					   </div>
					   <div class="col-md-6">
						<div class="form-group">
							  <label for="head">Sino ang puno ng sambahayan?</label>
							  <input type="text" class="form-control" id="fsname" value="<?php echo $sim2['simbahayan_head'];?>" style="width: 100%;" disabled>
							</div>
					   </div>
					<form action="#" method="post" id="survey" role="form">   
					<div class="col-md-12">
					<div id="member1" class="clonedInput">
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title heading-reference" id="reference" name="reference">Member 1</h3>
								<fieldset>
								
							</div><!-- /.box-header -->
		
							<div class="box-body">
								<div class="row">
									<div class="col-md-3">	
										<div class="form-group">
											<label for="name">PANGALAN</label>
											<input type="text" class="form-control" id="name" disabled <?php echo "value= '".$mem3['member_name']."'"?> placeholder="APELYIDO, UNANG PANGALAN" style="width: 100%;">
										</div>
										<div class="form-group">
											<label for="mdname">Nakarehistro ba sa lokal na registrar ang kapanganakan?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['registered'].""?></option>
											</select>
										</div>
										<div class="form-group">
											<label>Katutubong lahi napapabilang?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['tribe_name'].""?></option>
											</select>
										</div><!-- /.form-group -->
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Relasyon sa puno ng sambahayan?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['relation'].""?></option>
											</select>
										</div><!-- /.form-group -->

										<div class="form-group">
											<label>Katayuang sibil?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['civil_status'].""?></option>
											</select>
										</div><!-- /.form-group -->
										<div class="form-group">
											<label for="">Gaano katagal na naninirahan dito sa barangay?</label>
											<input type="number" <?php echo "value= '".$mem3['years_stayed']."'"?> disabled class="form-control" id="" placeholder="" style="width: 100%;">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Lalaki o babae?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['gender'].""?></option>
											</select>
										</div><!-- /.form-group -->

										<div class="form-group">
											<label>Relihiyon?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['religion'].""?></option>
											</select>
										</div><!-- /.form-group -->
										<div class="form-group">
											<label for="name">Saan naninirahan bago lumipat dito sa barangay?</label>
											<input type="text" <?php echo "value= '".$mem3['former_home']."'"?> disabled class="form-control" id="name" placeholder="BARANGAY,LUNGSOD/BAYAN,LALAWIGAN&BANSA" style="width: 100%;">
										</div>

									</div>

									<div class="col-md-3">
										<div class="form-inline">
											<label for="bday">Petsa ng kapanganakan? EDAD?</label>
											<input type="date" <?php echo "value= '".$mem3['member_birthdate']."'"?> disabled class="form-control" id="bday" placeholder="" style="width: 70%;">
											<input type="number" <?php echo "value= '".$mem3['age']."'"?> disabled class="form-control" id="age" placeholder="" style="width: 25%;">
										</div>
									<br>
										<div class="form-group">
											<label for="" >May katutubong lahi?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['indigenous_tribe'].""?></option>
											</select>
										</div>

									</div>
								</div>
								
								<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 3 TAONG GULANG PATAAS</h3>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Nag-aaral ba sa paaralan?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['studying'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Taon at baitang ang pinag-aaralan?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['year'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Nag-aaral ba sa pribadong o publikong paaralan?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['school_status'].""?></option>
												</select>
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->
															<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 5 TAONG GULANG PATAAS</h3>
									</div>
										<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Mayroon bang hanapbuhay noong nakaraang 3 buwan?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['working'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Ano ang pangunahing hanapbuhay noong nakaraang 3 buwan?</label>
												<input type="text" <?php echo "value= '".$mem3['work_explanation']."'"?> disabled class="form-control" id="" style="width: 100%;">
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['work_type'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Saang negosyo o industriya naghahanapbuhay industriya?</label>
												<input type="text" <?php echo "value= '".$mem3['industry_explanation']."'"?> disabled class="form-control" id="" style="width: 100%;">
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['industry'].""?><option>
												</select>
											</div>
											<br>
											<div class="col-md-4">
												<label>Ano and katayuan sa hanapbuhay?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['work_status'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Ano ang uri/klase ng manggagawa?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['worker_class'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Naghanap ng trabaho o hanapbuhay noong nakaraang 3 buwan?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['searching'].""?></option>
												</select>
											</div>
											<br>
											<div class="col-md-4">
												<label>Ano ang mga sinagawang hakbang sa paghahanap ng hanapbuhay?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['way'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Bakit hindi naghanap ng hanapbuhay?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected">1-Naniniwalang walang makikihang trabaho</option>
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
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['chance'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Willing ba na maghanapbuhay noong nakaraang 3 buwan o sa susunod na isang buwan?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['willingness'].""?></option>
												</select>
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->
					
								<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 10 TAONG GULANG PATAAS</h3>
									</div>
										<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Nakakabasa at nakakasulat ng simpleng mensaha sa alinmang wika o dialekto?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['write_read'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Mayroon bang kinaaanibang samahan o asosasyong pang komunidad?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['association'].""?></option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Buong pangalan ng oraganisasyon na kinaaniban?</label>
												<input type="text" <?php echo "value= '".$mem3['assoc_name']."'"?> disabled class="form-control" id="" placeholder="" style="width: 100%;">
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->

								<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 17 TAONG GULANG PATAAS</h3>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Rehistradong botante sa munisipyo/lungsod?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['voter'].""?></option>
												</select>
											</div>
										<div class="col-md-4">
											<label>Bumoto noong huling eleksyon?</label>
											<select class="form-control select2" style="width: 100%;">
												<option selected="selected"><?php echo "".$mem3['voted'].""?></option>
											</select>
										</div>
										</div><!-- /.box-body -->
									</div><!-- /.box -->
								</div><!-- /.box-body -->
								
								<div class="box box-danger">
									<div class="box-header with-border">
										<h3 class="box-title">PARA SA 0-5 TAONG GULANG</h3>
									</div>
									<div class="box-body">
										<div class="row">
											<div class="col-md-4">
												<label>Antas ng kalusugan ng mga bata mula sa barangay nutrition scholar?</label>
												<select class="form-control select2" style="width: 100%;">
													<option selected="selected"><?php echo "".$mem3['nutrition_status'].""?></option>
												</select>
											</div>
										</div>
									</div><!-- /.box-body -->
								</div><!-- /.box -->
							</div><!-- /.box-body -->
						</div>
					</div>
					</fieldset>
					</div>
					</form>
		
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['other_members'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan ng kapamilya?</label>
										<input type="text" <?php echo "value= '".$sim2['om_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang edad noong huling kaarawan?</label>
										<input type="text" <?php echo "value= '".$sim2['om_age']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Kasarian?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['om_gender'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang relasyon sa puno ng sambahayan?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['om_relation'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang dahilan bakit nawala sa sambahayan?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['om_dahilan'].""?></option>
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['ofw'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan?</label>
										<input type="text" <?php echo "value= '".$sim2['ofw_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang relasyon sa puno ng sambahayan?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['ofw_relation'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Saang bansa naghahanapbuhay?</label>
										<input type="text" <?php echo "value= '".$sim2['ofw_country']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang hanapbuhay?</label>
										<input type="text" <?php echo "value= '".$sim2['ofw_work']."'"?> disabled class="form-control" id="" style="width: 100%;">
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['isang_magulang'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan?</label>
										<input type="text" <?php echo "value= '".$sim2['im_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang dahilan bakit nagiisang magulang?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['im_cause'].""?></option>
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pwd'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang pangalan?</label>
										<input type="text" <?php echo "value= '".$sim2['pwd_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang uri ng kapansanan?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pwd_type'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang sanhi ng kapansanan?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pwd_cause'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Anong tulong ang natangap dahil sa kapansanan?</label>
										<input type="text" <?php echo "value= '".$sim2['pwd_tulong']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Saan nanggaling ang tulong?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pinanggalingan'].""?></option>
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
										<input type="text" <?php echo "value= '".$sim2['sc_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>May "senior citizen's" ID?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['sc_id'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Saan nagagamit ang kanyang ID?</label>
										<input type="text" <?php echo "value= '".$sim2['sc_use']."'"?> disabled class="form-control" id="" style="width: 100%;">
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['board_passer'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Pangalan ng kasambahay na nakapasa sa board o bar exam</label>
										<input type="text" <?php echo "value= '".$sim2['bp_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang naipasang propesyon?</label>
										<input type="text" <?php echo "value= '".$sim2['bp_profession']."'"?> disabled class="form-control" id="" style="width: 100%;">
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['nagpapagamot'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Sa huling pagkakasakit ng sinumang miyembro, saan kayo nagpagamot?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['saan_nagpagamot'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ilan ang mag-asawa sa inyong sambahayan?</label>
										<input type="text" <?php echo "value= '".$sim2['num_couples']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pangalan ng mga mag-asawa</label>
										<input type="text" <?php echo "value= '".$sim2['couple_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Gumamit ba ng pamamaraan ng magplano ng pamilya?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['family_planning'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Ano ang ginagamit na pamamaraan?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['fp_ways'].""?></option>
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['dating_kasambahay'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Pangalan ng kasambahay na namatay?</label>
										<input type="text" <?php echo "value= '".$sim2['dk_name']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Kasarian</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['dk_age'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Edad</label>
										<input type="text" <?php echo "value= '".$sim2['dk_age']."'"?> class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Ano ang sanhi ng pagkamatay?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['death_cause'].""?></option>
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pagpatay'].""?></option>
										</select>
										<input type="text" <?php echo "value= 'Ilang lalaki:  ".$sim2['pagpatay_lalaki']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Ilang babae:  ".$sim2['pagpatay_babae']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Kabuuan:   ".$sim2['kabuuan_pagpatay']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pagnanakaw</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pagnanakaw'].""?></option>
										</select>
										<input type="text" <?php echo "value= 'Ilang lalaki:  ".$sim2['pananakaw_lalaki']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Ilang babae:  ".$sim2['pagnanakaw_babae']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Kabuuan:   ".$sim2['kabuuan_pagnanakaw']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Panggagahasa</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['panggagahasa'].""?></option>
										</select>
										<input type="text" <?php echo "value= 'Ilang lalaki:  ".$sim2['panggagahasa_lalaki']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Ilang babae:  ".$sim2['panggagahasa_babae']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Kabuuan:   ".$sim2['kabuuan_panggagahasa']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Pananakit</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pananakit'].""?></option>
										</select>
										<input type="text" <?php echo "value= 'Ilang lalaki:  ".$sim2['pananakit_lalaki']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Ilang babae:  ".$sim2['pananakit_babae']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Kabuuan:   ".$sim2['kabuuan_pananakit']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
								<div class="col-md-4">
									<label>Iba pa</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['iba_crime'].""?></option>
										</select>
										<input type="text" <?php echo "value= 'Ilang lalaki:  ".$sim2['iba_crime_lalaki']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Ilang babae:  ".$sim2['iba_crime_babae']."'"?> disabled class="form-control" id="" style="width: 100%;">
										<input type="text" <?php echo "value= 'Kabuuan:   ".$sim2['kabuuan_iba_crime']."'"?> disabled class="form-control" id="" style="width: 100%;">
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['water_source'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Gaano kalayo ang pinagkukunan ng inumang tubig? (Sagutan kung ang sagot sa nakaraang tanong ay 1-9)</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['water_location'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Anong uri ng palikuran ang ginagamit (Sagutan kung ang sagot sa nakaraang tanong ay 10-12)</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['palikuran'].""?></option>
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['sambahayan_status'].""?></option>
										</select>
								</div>
							</div>
							<br>
							<div class="row">
								<br>
								<label style="color: red">Kung ang sagot sa pamamalagi sa bahay at/o lupa ay "2" lagpasan ang susunod na tanong kung hindi sagutan ang susunod na tanong</label>
								<div class="col-md-8">
									<label>Magkano ang tantiyang upa sa 1 buwan sa inyong tinitirhan kung ito ay inuupahan</label>
										<input type="text" <?php echo "value= '".$sim2['rental_fee']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<label>May kuryente ba sa inyong bahay?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['electricity'].""?></option>
										</select>
								</div>
							</div>
							<br>
							<div class="row">
									<div class="col-md-12">
									<label>Ano ang pinanggagalingan ng kuryente sa bahay?</label>
										<input type="textarea" <?php echo "value= '".$sim2['electricity_source']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<label>Magkano ang karaniwang binabayaran sa konsumo sa kuryente kada buwan</label>
										<input type="text" <?php echo "value= '".$sim2['consumption_fee']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
									<div class="col-md-12">
									<label>Mayroon ba ang inyong sambahayan ng mga sumusunod na nagagamit na kasangkapan?</label>
										<input type="textarea" <?php echo "value= '".$sim2['kasangkapan']."'"?> disabled class="form-control" id="" style="width: 100%;">
								</div>
							</div>
							<br>
							<label style="color: red">Sagutin batay sa uri ng materyales na ginagamit at sa pagkakagawa sa nasabing bahagi ng bahay:</label>
							<div class="row">
								<div class="col-md-4">
									<label>Materyales na ginamit sa dingding</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['materials_dingding'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<label>Materyales na ginamit sa Bubong</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['materials_bubong'].""?></option>
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
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pagsasaka'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['pagsasaka_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['pagsasaka_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pag-aalaga ng mga hayp katulad ng kalabaw, baka, baboy, kambing, manok, bibe, atbp. Kasama sa gawaing ito ang 
									pagkuha ng gatas mula sa kalabaw, baka at kambing at pagkuha ng itlog mula sa kalabaw, baka at kambing at pagkuha ng itlog 
									mula sa manok, bibe at pugo</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['paghahayop'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['paghahayop_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['paghahayop_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pangingisda o panghuhuli ng isada atbp yamang tubig tulad ng tahong, suso, talaba, seaweeds, etc. Kasama din dito ang
									pag-aalaga ng isada katulad ng bangus, tilapia, talaba, tahong, atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pangingisda'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['pangingisda_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['pangingisda_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pangangahoy at pangangaso, tulad ng pagtatanim ng puno, pagkuha ng panggatong, pagkuha ng mga prodiktong mula sa gubat gaya ng kahoy,
									cogon, nipa, rattan, kawayan atbp o panghuhuli ng mga hayop tulad ng usa, baboy-ramo, mga ibon atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pangangahoy'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['pangangahoy_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['pangangahoy_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pagtitinda o pangangalakal ng anumang produkto. Kasama dito ang pagtitinda sa palengke, lansangan, malls, bahay-bahay atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pagtitinda'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['pagtitinda_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['pagtitinda_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Paggawa ng produkto tulad ng basahan, patahian ng damit, tsinelas, bagoong, tuyo atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['paggawa'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['paggawa_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['paggawa_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Mga serbisyong pantao o pangbayan tulad ng serbisyong pangkalusugan, "dental", pamamalakad ng paaralan,
									"restaurants", "hotel", atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pantao'].""?></option>
											<option>2-Hindi</option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['pantao_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['pantao_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Serbisyo sa transportasyon at komunikasyon. Halimbawa nito ay pagpapasada ng dyipni, trisikel, taxi, "messenger",
									at postal service. Kasama din dito ang mga negosyong nagbibigay ng serbisyong pagtatago at pag-iimbak ng produkto</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['transportasyon'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['transportasyon_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['transportasyon_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pagmimina ng graba, buhangin, bakal, ginto atbp mahahalagang bato. Kasama din dito ang paggawa ng asin, pagtitibag, atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pagmimina'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['pagmimina_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['pagmimina_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Konstruksyon tulad ng paggawa at pagkumpuni ng bahay, gusali, tulay atbp</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['contruction'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['contruction_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Netong kita sa Bagay: ".$sim2['contruction_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Mga gawaing pangkabuhayan na hindi kahalintulad sa mga nabanggit, tulad ng serbisyo sa kuryente, gaas at tubig,
									mga negosyo ukol sa pinansyal tulad ng real estate, insurance atbp.</label>
									<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['pangkabuhayan'].""?></option>
									</select>
									<input type="text" <?php echo "value= 'Kabuuang Netong kita sa Salapi:  ".$sim2['pangkabuhayan_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
									<input type="text" <?php echo "value= 'Kabuuang Netong kita sa Bagay: ".$sim2['pangkabuhayan_bagay']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>Pasamahin ang netong kita sa salapi</label>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['netong_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-6">
									<label>Pasamahin ang netong kita sa bagay</label>
									<input type="text" <?php echo "value= 'Netong kita sa Salapi:  ".$sim2['netong_salapi']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
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
									<label>Ano ang katayuan ng ninyo o ng kasambahay sa pamamalagi sa lupaing inyong sinasaka?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['katayuan_pamamalagi'].""?></option>
										</select>
								</div>
								<div class="col-md-8">
									<label>Gaano kalawak ang lupang sinasaka?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['lawak_sinasaka'].""?>option>
										</select>
								</div>
							</div>
							<br>
							<div class="row">
								<label>Anu-ano ang mga naaning pananim o bungang-kahoy noong nakaraang 12 buwan? At gaano kadami ang mga inani noong
								huling anihan</label>
								<br>
								<div class="col-md-12">
										<input type="text" <?php echo "value= '".$sim2['pananim']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<label>Kayo ba o sinumang miyembro ng sambahayan ay gumagamit ng mga sumusunod na kagamitang pangagrikultura? <br>
								Sagutan ang susunod na dropdown kung pag-aari ba ito ng sambahayan</label>
								<br>
								<br>
								<div class="col-md-12">
										<input type="textarea" <?php echo "value= '".$sim2['kagamitang_pangagrikultura']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
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
							<label>Noong nakaraang 12 buwan, ano ang mga inalagaang hayop para pagkakitaan? At ilan ang bawat isa</label>
							<div class="row">
								<div class="col-md-12">
										<input type="text" <?php echo "value= '".$sim2['alagang_hayop']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<label>Gaano ang karaniwang dami ng produksyon mula sa pag-aalaga ng hayop?</label>
							<div class="row">
								<div class="col-md-3">
									<label>Buhay na hayop (bilang)</label>
										<input type="text" <?php echo "value= '".$sim2['buhay_hayop']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Karne (timbang-kg)</label>
										<input type="text" <?php echo "value= '".$sim2['karne']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Gatas (litro)</label>
										<input type="text" <?php echo "value= '".$sim2['gatas']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Itlog (bilang)</label>
										<input type="text" <?php echo "value= '".$sim2['itlog']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
								<div class="col-md-3">
									<label>Iba pa</label>
										<input type="text" <?php echo "value= '".$sim2['iba_pa']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
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
								<div class="col-md-12">
									<input type="text" <?php echo "value= '".$sim2['lugar_pangingisda']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-md-6">
									<label>Gaano kalawak ang inyong fishpond?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['lawak_fishpond'].""?></option>
										</select>
								</div>
								<div class="col-md-6">
									<label>Ilan fishcage mayroon kayo?</label>
										<input type="text" <?php echo "value= '".$sim2['bilang_fishcage']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<br>
							<label>Ano ang sukat ng inyong fishcage (SQ.M.)?</label>
							<div class="row">
								<div class="col-md-12">
									<input type="text" <?php echo "value= '".$sim2['sukat_fishcage']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<br>
							<label>Noong nakaraang 12 buwan, anu-ano ang mga nahuling isda o iba pang yamang tubig </label>
							<label>Gaano kadami ang karaniwang ani/huli na isda o iba pang yamang tubig? (kilograms)?</label>
							<div class="row">
								<div class="col-md-12">
										<input type="text" <?php echo "value= '".$sim2['huling_isda']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<br>
									<label>Mayroon ba kayong bangka?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['bangka'].""?></option>
										</select>
								</div>
							</div>
							<br>
							<label>Kayo ba o sinuman miyembro ng sambahayan ay gumagamit ng mga sumusunod na kagamitan?<br>
							Ito ba ay pag-aari ng sambahayan?</label>
							<br>
							<div class="row">
								<div class="col-md-12">
										<input type="text" <?php echo "value= '".$sim2['kagamitan_pangingisda']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
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
								<div class="col-md-12">
									<input type="text" <?php echo "value= '".$sim2['pamamahala_basura']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<br>
									<br>
									<label>Sino ang kumokolekta ng basura?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['kumokolekta_basura'].""?></option>
										</select>
								</div>
								<div class="col-md-4">
									<br>
									<br>
									<label>Gaano kadalas ang pagkokolekta ng basura?</label>
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['kadalas_pangongolekta'].""?></option>
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
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['nasalanta'].""?></option>
										</select>
								</div>
							</div>
							<br>
							<br>
							<label>Ano ang mga kalamidad na sumalanta sa inyong sambahayan?</label>
							<div class="row">
								<div class="col-md-12">
									<input type="text" <?php echo "value= '".$sim2['sumalanta']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
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
								<div class="col-md-3">
									<label>Noong nakaraang 3 buwan, nangyari ba kahit isang beses na nakaranas ang sambahayan ng gutom at walang makain?
										<select class="form-control select2" style="width: 100%;">
											<option selected="selected"><?php echo "".$sim2['gutom'].""?></option>
										</select>
									</label>
								</div>
							</div>
							<br>
							<label>Noong nakaraang 3 buwan, ilang araw nakaranas ang sambahayan ng gutom at walang makain?</label>
							<div class="row">
								<div class="col-md-12">
									<input type="text" <?php echo "value= '".$sim2['buwan_gutom']."'"?> disabled class="form-control" id="fsname" style="width: 100%;">
								</div>
							</div>
						</div><!-- /.box-body -->
                      </div>
                    </div>
					
                   
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
		  </div>
          

         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

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
	<!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
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
	<script>
	  //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
</script>
  </body>
</html>

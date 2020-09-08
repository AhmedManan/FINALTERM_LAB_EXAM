<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>DIGITAL AID: ADMIN</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="/css/user/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="/css/user/ready.css">
	<link rel="stylesheet" href="/css/user/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="" class="logo">
					DIGITAL AID
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="../assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span >{{$userinfo->first_name}} </span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="../assets/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4>{{$userinfo->first_name}}</h4>
											<p class="text-muted">{{$userinfo->email}}</p><a href="/admin/viewprofile/{{$userinfo->username}}" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="/img/user/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{$userinfo->first_name}} {{$userinfo->last_name}} 
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="/admin/viewprofile/{{$userinfo->username}}">
											<span class="link-collapse">My Profile</span>
									</li>
									<li>
										<a href="#info">
											<span class="link-collapse">Edit Profile</span>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="/admin">
								<p>Dashboard</p>							
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/users">
								<p>All Users</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="tables.html">
								<p>Inventory</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="tables.html">
								<p>Announcement</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="notifications.html">
								<i class="la la-bell"></i>
								<p>Notifications</p>
								<!-- <span class="badge badge-success">3</span> -->
							</a>
						</li>
						<li class="nav-item">
							<a href="typography.html">
								<i class="la la-comment"></i>
								<p>Reports</p>
								<span class="badge badge-danger">25</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="typography.html">
								<i class="la la-envelope"></i>
								<p>Message</p>
								<span class="badge badge-danger">25</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="icons.html">
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
					<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{$userprofile->username}}</a></h2>
                                    <span class="badge badge-default">{{$userprofile->usertype}}</span>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="updateInfo-tab" data-toggle="tab" href="#updateInfo" role="tab" aria-controls="updateInfo" aria-selected="false">Update Information</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->first_name}} {{$userinfoprofile->last_name}}
                                            </div>
                                        </div>
										<hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->email}}
                                            </div>
                                        </div>
										<hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->phone}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">National ID Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->nid_no}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->gender}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->birthdate}}
                                            </div>
                                        </div>
										<hr />
										

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Join Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userinfoprofile->joindate}}
                                            </div>
                                        </div>
                                        <hr />

                                 </div>
                                <div class="tab-pane fade" id="updateInfo" role="tabpanel" aria-labelledby="updateInfo-tab">
										<!-- update form start  -->
										<form method="POST" >
									<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											
											<div class="row">
    											<div class="col">
      											<input type="text" class="form-control" placeholder="First name" value="{{$userinfoprofile->first_name}}" name="firstname">
   											 </div>
  											  <div class="col">
   											   <input type="text" class="form-control" placeholder="Last name" value="{{$userinfoprofile->last_name}}" name="lastname">
   											 </div>
 											 </div>
                                            </div>
                                        </div>
										<hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="text" class="form-control" placeholder="email" value="{{$userinfoprofile->email}}" name="email">
                                            </div>
                                        </div>
										<hr />

										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input class="form-control" type="text" value="{{$userinfoprofile->username}}" id="" readonly>
                                            </div>
                                        </div>
                                        <hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="text" class="form-control" placeholder="phone no" value="{{$userinfoprofile->phone}}" name="phone">
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">National ID Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="text" class="form-control" placeholder="National ID Number" value="{{$userinfoprofile->nid_no}}" name="nid_no">
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender</label>
											</div>
											<div class="col-md-8 col-6">
                                            <select name="gender" class="browser-default custom-select">	

											@if($userinfoprofile->gender=="male")																
												
											<option selected value="male">male</option>
 											 <option  value="female">female</option>
 											 <option  value="others">others</option>
											@elseif($userinfoprofile->gender=="female")																
												
											<option  value="male">male</option>
 											 <option selected  value="female">female</option>
 											 <option  value="others">others</option>
											@else															
												
											<option  value="male">male</option>
 											 <option  value="female">female</option>
 											 <option selected value="others">others</option>
											@endif
											
											</select>
											</div>
                                        </div>
										<hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input class="form-control" type="date" value="{{$userinfoprofile->birthdate}}" id="example-date-input">
                                            </div>
                                        </div>
                                        <hr />
									
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Join Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="text" class="form-control" readonly value="{{$userinfoprofile->joindate}}" name="phone">
                                            </div>
                                        </div>
										<hr />

										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">User Type</label>
											</div>
											<div class="col-md-8 col-6">
                                            <select name="usertype" class="browser-default custom-select">
											@if($userprofile->usertype=="admin")																
												
											<option selected value="admin">admin</option>
 											 <option  value="distributor">distributor</option>
 											 <option  value="consumer">consumer</option>
											@elseif($userprofile->usertype=="distributor")															
												
											<option value="admin">admin</option>
 											 <option selected value="distributor">distributor</option>
 											 <option  value="consumer">consumer</option>
											@elseif($userprofile->usertype=="consumer")															
												
											<option value="admin">admin</option>
 											 <option value="distributor">distributor</option>
 											 <option selected value="consumer">consumer</option>
											@endif
											</select>
											</div>
                                        </div>
										<hr />

										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nid Photo</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
											<input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                            				   <input type="file" style="display: none;" id="profilePicture" name="file" />
                                            </div>
                                        </div>
                                        <hr />

										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Action</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="submit" name="submit" value="update">
											<input type="submit" name="submit" value="delete">
                                            </div>
                                        </div>
										<hr />

                                    </div>
									</form>
									<!-- update form end -->
									<!-- History start -->


									<!-- History end -->
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
	</div>
	<!-- End -->
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
<script src="/js/user/core/jquery.3.2.1.min.js"></script>
<script src="/js/user/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/js/user/core/popper.min.js"></script>
<script src="/js/user/core/bootstrap.min.js"></script>
<script src="/js/user/plugin/chartist/chartist.min.js"></script>
<script src="/js/user/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<!-- <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->
<script src="/js/user/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/js/user/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/js/user/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/js/user/plugin/chart-circle/circles.min.js"></script>
<script src="/js/user/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/js/user/ready.min.js"></script>
<script src="/js/user/demo.js"></script>
</html>
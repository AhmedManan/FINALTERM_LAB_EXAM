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
                                                <label style="font-weight:bold;">Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userprofile->name}}
                                            </div>
                                        </div>
										<hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userprofile->email}}
                                            </div>
                                        </div>
										<hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											{{$userprofile->phone}}
                                            </div>
                                        </div>
                                        <hr />

                                 </div>
                                <div class="tab-pane fade" id="updateInfo" role="tabpanel" aria-labelledby="updateInfo-tab">
										<!-- update form start  -->
										<form method="POST" >
									<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											
											<div class="row">
    											<div class="col">
      											<input type="text" class="form-control" placeholder="name" value="{{$userprofile->name}}" name="name">
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
											<input type="text" class="form-control" placeholder="email" value="{{$userprofile->email}}" name="email">
                                            </div>
                                        </div>
										<hr />

										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input class="form-control" type="text" value="{{$userprofile->username}}" id="" readonly>
                                            </div>
                                        </div>
                                        <hr />
										
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">phone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="text" class="form-control" placeholder="phone no" value="{{$userprofile->phone}}" name="phone">
                                            </div>
                                        </div>
                                        <hr />

										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">company</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<input type="text" class="form-control" placeholder="company name" value="{{$userprofile->company}}" name="company">
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
 											 <option  value="employee">employee</option>
											@elseif($userprofile->usertype=="employee")															
												
											<option value="admin">admin</option>
 											 <option selected value="employee">employee</option>
											@endif
											</select>
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
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
	</div>
	<!-- End -->
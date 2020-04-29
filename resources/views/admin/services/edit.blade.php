@extends('admin-layouts.master')
@section('title', 'Services')
@section('content')
    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
          <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div><!-- input-group -->
        </div><!-- br-header-left -->
        <div class="br-header-right">
          <nav class="nav">
            <div class="dropdown">
              <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                <i class="icon ion-ios-email-outline tx-24"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                <!-- end: if statement -->
              </a>
              <div class="dropdown-menu dropdown-menu-header">
                <div class="dropdown-menu-label">
                  <label>Messages</label>
                  <a href="">+ Add New Message</a>
                </div><!-- d-flex -->

                <div class="media-list">
                  <!-- loop starts here -->
                  <a href="" class="media-list-link">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <div>
                          <p>Donna Seay</p>
                          <span>2 minutes ago</span>
                        </div><!-- d-flex -->
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                      </div>
                    </div><!-- media -->
                  </a>
                  <!-- loop ends here -->
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <div>
                          <p>Samantha Francis</p>
                          <span>3 hours ago</span>
                        </div><!-- d-flex -->
                        <p>My entire soul, like these sweet mornings of spring.</p>
                      </div>
                    </div><!-- media -->
                  </a>
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <div>
                          <p>Robert Walker</p>
                          <span>5 hours ago</span>
                        </div><!-- d-flex -->
                        <p>I should be incapable of drawing a single stroke at the present moment...</p>
                      </div>
                    </div><!-- media -->
                  </a>
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <div>
                          <p>Larry Smith</p>
                          <span>Yesterday</span>
                        </div><!-- d-flex -->
                        <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                      </div>
                    </div><!-- media -->
                  </a>
                  <div class="dropdown-footer">
                    <a href=""><i class="fa fa-angle-down"></i> Show All Messages</a>
                  </div>
                </div><!-- media-list -->
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
              <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                <i class="icon ion-ios-bell-outline tx-24"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                <!-- end: if statement -->
              </a>
              <div class="dropdown-menu dropdown-menu-header">
                <div class="dropdown-menu-label">
                  <label>Notifications</label>
                  <a href="">Mark All as Read</a>
                </div><!-- d-flex -->

                <div class="media-list">
                  <!-- loop starts here -->
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <p class="noti-text"><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                        <span>October 03, 2017 8:45am</span>
                      </div>
                    </div><!-- media -->
                  </a>
                  <!-- loop ends here -->
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <p class="noti-text"><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                        <span>October 02, 2017 12:44am</span>
                      </div>
                    </div><!-- media -->
                  </a>
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <p class="noti-text">20+ new items added are for sale in your <strong>Sale Group</strong></p>
                        <span>October 01, 2017 10:20pm</span>
                      </div>
                    </div><!-- media -->
                  </a>
                  <a href="" class="media-list-link read">
                    <div class="media">
                      <img src="https://via.placeholder.com/500" alt="">
                      <div class="media-body">
                        <p class="noti-text"><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                        <span>October 01, 2017 6:08pm</span>
                      </div>
                    </div><!-- media -->
                  </a>
                  <div class="dropdown-footer">
                    <a href=""><i class="fa fa-angle-down"></i> Show All Notifications</a>
                  </div>
                </div><!-- media-list -->
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown">
              <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <span class="logged-name hidden-md-down">Katherine</span>
                <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
                <span class="square-10 bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-header wd-250">
                <div class="tx-center">
                  <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                  <h6 class="logged-fullname">Katherine P. Lumaad</h6>
                  <p>youremail@domain.com</p>
                </div>
                <hr>
                <div class="tx-center">
                  <span class="profile-earning-label">Earnings After Taxes</span>
                  <h3 class="profile-earning-amount">$13,230 <i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
                  <span class="profile-earning-text">Based on list price.</span>
                </div>
                <hr>
                <ul class="list-unstyled user-profile-nav">
                  <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                  <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                  <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                  <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                  <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                  <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                </ul>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </nav>

        </div><!-- br-header-right -->
      </div><!-- br-header -->
      <!-- ########## END: HEAD PANEL ########## -->


      <!-- ########## START: MAIN PANEL ########## -->
      <div class="br-mainpanel">
        <div class="br-pagetitle">
          <i class="icon ion-ios-briefcase-outline tx-70 lh-0"></i>
          <div>
            <h4>Edit {{$service->name}} Services</h4>
            <p class="mg-b-0"> All Services details from website </p>
          </div>
        </div><!-- d-flex -->
        @include('admin-layouts.errors')



        <div class="br-pagebody">
            <div class="br-section-wrapper">
              <h6 class="br-section-label">Update the item</h6>
            <form action="{{route('services.update', $service->id)}}" method="POST" enctype='multipart/form-data'>
                  {{csrf_field()}}
                  @method('PUT')
              <div class="form-layout form-layout-1">
                <div class="row mg-b-25">
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label class="form-control-label">The Service Name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="name" value="{{$service->name}}" placeholder="Enter a name" style="border:{{ $errors->has('name') ? '1px solid #fc6a55' : ''}}">
                      @if($errors->has('name'))
                      <p class="help-block" style="color: #fc6a55">
                          {{ $errors->first('name') }}
                      </p>
                      @endif

                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-8">
                    <div class="form-group">
                      <label class="form-control-label">The Service Image: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image" >
                    </div>
                    <img src="{{asset('upload/'. $service->image)}}" class="img-fluid rounded-circle" alt="">
                  </div><!-- col-4 -->
                   <br>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">The Service Description: <span class="tx-danger">*</span></label>
                    <textarea name="body" class="summernote">{{$service->body}}</textarea>
                    @if($errors->has('body'))
                    <p class="help-block" style="color: #fc6a55">
                        {{ $errors->first('body') }}
                    </p>
                    @endif
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                  <button class="btn btn-primary">Update the Service</button>
                <a style="color:white" class="btn btn-secondary" href="{{route('services.index')}}">Cancel</a>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
            </form>
            </div><!-- br-section-wrapper -->
          </div><!-- br-pagebody -->
        <footer class="br-footer">
          <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2020. Pro-Branding. All Rights Reserved.</div>
          </div>
        </footer>
      </div><!-- br-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->


      @endsection

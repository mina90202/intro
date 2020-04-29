@extends('admin-layouts.master')
@section('title', 'Contact Us')
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
          <i class="icon ion-ios-contact-outline tx-70 lh-0"></i>
          <div>
            <h4>Contact Us Messages</h4>
            <p class="mg-b-0"> All messages and inquiries from website </p>
          </div>
        </div><!-- d-flex -->
        @include('admin-layouts.errors')


        <div class="br-pagebody">

            <table class="table table-bordered table-colored table-info">
                <thead>
                  <tr>
                    <th class="wd-10p">ID</th>
                    <th class="wd-35p">Name</th>
                    <th class="wd-35p">E-mail</th>
                    <th class="wd-35p">Company</th>
                    <th class="wd-20p">Mobile</th>
                    <th class="wd-20p">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                  <tr>
                  <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->company}}</td>
                    <td>{{$contact->mobile}}</td>
                  <td style="text-align:center"><a href="{{route('dashboard.contact.delete', $contact->id)}}"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

          <!-- hidden on purpose using d-none class to have a different look with the original -->
          <!-- feel free to unhide by removing the d-none class below -->
          <div class="row row-sm mg-b-20 d-none">
            <div class="col-sm-6 col-xl-3">
              <div class="bg-info rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                  <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">1,975,224</p>
                    <span class="tx-11 tx-roboto tx-white-8">24% higher yesterday</span>
                  </div>
                </div>
                <div id="ch1" class="ht-50 tr-y-1"></div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
              <div class="bg-purple rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                  <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Today Sales</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">$329,291</p>
                    <span class="tx-11 tx-roboto tx-white-8">$390,212 before tax</span>
                  </div>
                </div>
                <div id="ch3" class="ht-50 tr-y-1"></div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-teal rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                  <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">54.45%</p>
                    <span class="tx-11 tx-roboto tx-white-8">23% average duration</span>
                  </div>
                </div>
                <div id="ch2" class="ht-50 tr-y-1"></div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
              <div class="bg-primary rounded overflow-hidden">
                <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                  <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Bounce Rate</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">32.16%</p>
                    <span class="tx-11 tx-roboto tx-white-8">65.45% on average time</span>
                  </div>
                </div>
                <div id="ch4" class="ht-50 tr-y-1"></div>
              </div>
            </div><!-- col-3 -->
          </div><!-- row -->



        </div><!-- br-pagebody -->
        <footer class="br-footer">
          <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2020. Pro-Branding. All Rights Reserved.</div>
          </div>
        </footer>
      </div><!-- br-mainpanel -->
      <!-- ########## END: MAIN PANEL ########## -->


      @endsection

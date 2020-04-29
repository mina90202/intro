 <!-- ########## START: LEFT PANEL ########## -->
 <div class="br-logo"><a href="{{url('dashboard')}}"><span>[</span>Control <i>Panel</i><span>]</span></a></div>
 <div class="br-sideleft sideleft-scrollbar">

   <ul class="br-sideleft-menu">
     <li class="br-menu-item">
     <a href="{{url('dashboard')}}" class="br-menu-link {{request()->is('dashboard') ? 'active' : ''}}">
         <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
         <span class="menu-item-label">Dashboard</span>
       </a><!-- br-menu-link -->
     </li><!-- br-menu-item -->
     <li class="br-menu-item">
       <a href="{{url('dashboard/contact-us')}}" class="br-menu-link {{request()->is('dashboard/contact-us') ? 'active' : ''}}">
         <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
         <span class="menu-item-label">Mailbox</span>
       </a><!-- br-menu-link -->
     </li><!-- br-menu-item -->

     <li class="br-menu-item">
        <a href="{{url('dashboard/subscribe')}}" class="br-menu-link {{request()->is('dashboard/subscribe') ? 'active' : ''}}">
          <i class="menu-item-icon icon ion-ios-plus-outline tx-24"></i>
          <span class="menu-item-label">Subscribers</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->

     <li class="br-menu-item">
     <a href="{{route('services.index')}}" class="br-menu-link {{request()->is('dashboard/services') ? 'active' : ''}}">
         <i class="menu-item-icon icon ion-ios-briefcase-outline tx-20"></i>
         <span class="menu-item-label">Services</span>
       </a><!-- br-menu-link -->
     </li>
     <li class="br-menu-item">
     <a href="{{route('blogs.index')}}" class="br-menu-link {{request()->is('dashboard/blogs') ? 'active' : ''}}">
         <i class="menu-item-icon icon ion-ios-book-outline tx-24"></i>
         <span class="menu-item-label">Blog</span>
       </a><!-- br-menu-link -->
     </li><!-- br-menu-item -->
     <li class="br-menu-item">
     <a href="{{route('porfolios.index')}}" class="br-menu-link {{request()->is('dashboard/porfolios') ? 'active' : ''}}">
         <i class="menu-item-icon ion-ios-paper-outline tx-24"></i>
         <span class="menu-item-label">Porfolio</span>
       </a><!-- br-menu-link -->
     </li><!-- br-menu-item -->

   </ul><!-- br-sideleft-menu -->

   <br>
 </div><!-- br-sideleft -->
 <!-- ########## END: LEFT PANEL ########## -->

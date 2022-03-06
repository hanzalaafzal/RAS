<!-- Left Sidenav -->
 <div class="left-sidenav">
     <!-- LOGO -->
     <div class="brand">
         <a href="#" class="logo">
             <span>
                 <img src="{{asset('assets/images/OPAL_LOGO.png')}}" height="80" class="logo-md">
             </span>
             <span>
                 <img src="{{asset('assets/images/OPAL_LOGO.png')}}" alt="logo-large" class="logo-lg logo-light">
                 <img src="{{asset('assets/images/OPAL_LOGO.png')}}" alt="logo-large" class="logo-lg logo-dark">
             </span>
         </a>
     </div>
     <!--end logo-->
     <div class="menu-content h-100" data-simplebar>
         <ul class="metismenu left-sidenav-menu">
             <li class="menu-label mt-0">Main</li>
             <li>
                 <a href="#"> <i data-feather="grid" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
             </li>

             <li>
                 <a href="javascript: void(0);"><i class="mdi mdi-car-estate"></i><span>Vehicles</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                 <ul class="nav-second-level" aria-expanded="false">
                     <li class="nav-item"><a class="nav-link" href="{{route('add.vehicle')}}"><i class="ti-control-record"></i>Add New</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{route('list.vehicle')}}"><i class="ti-control-record"></i>List All</a></li>
                 </ul>
             </li>

             <li>
               <a href="{{route('add.category')}}"> <i data-feather="grid" class="align-self-center menu-icon"></i><span>Categories</span></a>


             </li>

             <hr class="hr-dashed hr-menu">

             <li>
                 <a href="javascript: void(0);"><i class="mdi mdi-account-check-outline"></i><span>Certificates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                 <ul class="nav-second-level" aria-expanded="false">
                     <li class="nav-item"><a class="nav-link" href="{{route('add.learner')}}"><i class="ti-control-record"></i>New Leaners Certificate</a></li>
                     <li class="nav-item"><a class="nav-link" href="{{route('learner.list')}}"><i class="ti-control-record"></i>List All</a></li>
                 </ul>
             </li>
        
              <hr class="hr-dashed hr-menu">
              <li>
               <a href="{{route('logout')}}"><i data-feather="log-out" class="align-self-center menu-icon"></i><span>Logout</span></a>

              </li>
         </ul>

     </div>
 </div>

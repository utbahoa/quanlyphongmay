   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
           <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
           </div>
           <div class="sidebar-brand-text mx-3">Admin</div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
           <a class="nav-link" href="{{route('admin.home')}}">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       @can('admin')
       <!-- Nav Item - Tables -->
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.may.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý máy</span></a>
       </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
           <a class="nav-link" href="{{route('admin.phong.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý phòng</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.phanmem.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý phần mềm</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.khoa.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý khoa</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.lop.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý lớp</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.nganh.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý Ngành</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.thongbao.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý Thông Báo</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.may_phanmem.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý Máy-Phần Mềm</span></a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.may_phanmem.index')}}">
               <i class="fas fa-fw fa-table"></i>
               <span>Quản lý đăng ký</span></a>
       </li>
       @endcan

       @can('sinhvien')
       <li class="nav-item">
           <a class="nav-link" href="">
               <i class="fas fa-fw fa-table"></i>
               <span>Cập nhật thông tin</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="">
               <i class="fas fa-fw fa-table"></i>
               <span>Đăng ký máy</span></a>
       </li>
       
       <li class="nav-item">
           <a class="nav-link" href="">
               <i class="fas fa-fw fa-table"></i>
               <span>Xem kết quả đăng ký</span></a>
       </li>
       @endcan

       @can('giangvien')
       <li class="nav-item">
           <a class="nav-link" href="">
               <i class="fas fa-fw fa-table"></i>
               <span>Cập nhật thông tin</span></a>
       </li>

       
       @endcan
       <!-- Divi
       der -->
       <hr class="sidebar-divider">
       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
           <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>
   </ul>
   <!-- End of Sidebar -->
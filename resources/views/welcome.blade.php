<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Vue Js  - Admin Dashboard</title>

  <!-- General CSS Files index -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- General CSS Files create-post -->
  <link rel="stylesheet" href="{{ asset('assets/admin/bundles/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/bundles/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
  <!-- General CSS Files datatables -->
  <link rel="stylesheet" href="{{ asset('assets/admin/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/bundles/pretty-checkbox/pretty-checkbox.min.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/admin/img/favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/backend/css/toastr.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky"  id="topbar" v-show="$route.path ===  '/' || $route.path ===  '/register' || $route.path ===  '/forget' || $route.path ===  '/index' ? false : true " style="display: none;">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="javascript:void(0);" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="javascript:void(0);" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="javascript:void(0);" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ asset('assets/admin/img/user.png') }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"><b>User</b></div>

              <div class="dropdown-divider"></div>
              <a href="" 
                 onclick="" 
                 class="dropdown-item has-icon text-danger"> 
                 <i class="fas fa-user"></i>
                  Profile
              </a>
              <a href="/logout"
                 class="dropdown-item has-icon text-danger"> 
                 <i class="fas fa-sign-out-alt"></i>
                  Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2"  id="sidebar" v-show="$route.path ===  '/' || $route.path ===  '/register' || $route.path ===  '/forget' || $route.path ===  '/index' ? false : true " style="display: none;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="javascript:void(0);"> <span
                class="logo-name">Indelible</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><router-link class="nav-link" to="/home"><i class="fa fa-tachometer" style="margin-left: 1px !important; width: 20px; margin-right: 3px;"></i><span style="margin-left: 5px;">Dashboard</span></router-link></li>
           

            
            <li class="dropdown {{ Request::is('admin/roles', 'admin/roles/create') ? 'active' : '' }}"><router-link class="menu-toggle nav-link has-dropdown" to="">
              <i data-feather="anchor"></i><span>Roles</span>
            </router-link>
              <ul class="dropdown-menu">
                
                <li class="{{ Request::is('admin/roles') ? 'active' : '' }}"><router-link class="nav-link" to="/roles">All Roles</router-link></li>
               
                <li class="{{ Request::is('admin/roles/create') ? 'active' : '' }}"><router-link class="nav-link" to="/role/create">Add Role</router-link></li>
                
              </ul>
            </li>
            
            <li class="dropdown {{ Request::is('admin/permissions', 'admin/permissions/create') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="activity"></i><span>Permissions</span></a>
              <ul class="dropdown-menu">
                
                <li class="{{ Request::is('admin/permissions') ? 'active' : '' }}"><router-link class="nav-link" to="/permissions">All Permissions</router-link></li>
                
                <li class="{{ Request::is('admin/permissions/create') ? 'active' : '' }}"><router-link class="nav-link" to="/permission/create">Add Permission</router-link></li>
                
              </ul>
            </li>
            

            
            <li class="dropdown {{ Request::is('admin/users', 'admin/users/create') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="user-check"></i><span>Users</span></a>
              <ul class="dropdown-menu">
                
                <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><router-link class="nav-link" to="/users">All Users</router-link></li>
                
                <li class="{{ Request::is('admin/users/create') ? 'active' : '' }}"><router-link class="nav-link" to="/user/create">Add User</router-link></li>
                
              </ul>
            </li>
            
            <li class="dropdown {{ Request::is('admin/category', 'admin/category/create') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Categories</span></a>
              <ul class="dropdown-menu">
                
                <li class="{{ Request::is('admin/category') ? 'active' : '' }}"><router-link class="nav-link" to="/">All Categories</router-link></li>
               
                <li class="{{ Request::is('admin/category/create') ? 'active' : '' }}"><router-link class="nav-link" to="/">Add Category</router-link></li>
               
              </ul>
            </li>
           
            <li class="dropdown {{ Request::is('admin/language', 'admin/language/create') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="aperture"></i><span>Language</span></a>
              <ul class="dropdown-menu">
                
                <li class="{{ Request::is('admin/language') ? 'active' : '' }}"><router-link class="nav-link" to="/">All Languages</router-link></li>
                
                
                <li class="{{ Request::is('admin/language/create') ? 'active' : '' }}"><router-link class="nav-link" to="/">Add Language</router-link></li>
                
              </ul>
            </li>
            
            <li class="dropdown {{ Request::is('admin/post', 'admin/post/create') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="edit"></i><span>Posts</span></a>
              <ul class="dropdown-menu">
                
                <li class="{{ Request::is('admin/post') ? 'active' : '' }}"><router-link class="nav-link" to="/">All Post</router-link></li>
                
                
                <li class="{{ Request::is('admin/post/create') ? 'active' : '' }}"><router-link class="nav-link" to="/">Add Post</router-link></li>
                
              </ul>
            </li>
            
            <li class="dropdown {{ Request::is('admin/content', 'admin/content/create') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>General Settings</span></a>
              <ul class="dropdown-menu">
               
                <li class="{{ Request::is('admin/content') ? 'active' : '' }}"><router-link class="nav-link" to="/">All content</router-link></li>
               
                <li class="{{ Request::is('admin/content/create') ? 'active' : '' }}"><router-link class="nav-link" to="/">Add content</router-link></li>
               
              </ul>
            </li>
            
            
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <router-view></router-view>
      </div>

      <footer class="main-footer"  id="footer" v-show="$route.path ===  '/' || $route.path ===  '/register' || $route.path ===  '/forget' || $route.path ===  '/index' ? false : true " style="display: none;">
        <div class="footer-left">
          <b style="color:#212529;">Copyright © {{ date('Y') }} <a href="https://reignsol.com" target="_blank" style="color:#6777ef; text-decoration:none;"><b>reignsol</b></a>. All rights reserved.</b>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- JS Libraies index-->
  <script src="{{ asset('assets/admin/bundles/apexcharts/apexcharts.min.js') }}"></script>
  <!-- JS Libraies create-post-->
  <script src="{{ asset('assets/admin/bundles/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('assets/admin/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('assets/admin/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
  <script src="{{ asset('assets/admin/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
  <!-- JS Libraies datatables -->
  <script src="{{ asset('assets/admin/bundles/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/admin/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/admin/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Page Specific JS File index -->
  <script src="{{ asset('assets/admin/js/page/index.js') }}"></script>
  <!-- Page Specific JS File create-post -->
  <script src="{{ asset('assets/admin/js/page/create-post.js') }}"></script>
  <!-- Page Specific JS File datatables -->
  <script src="{{ asset('assets/admin/js/page/datatables.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
  <script src="{{ asset('assets/admin/backend/js/toastr.min.js') }}"></script>
  

  <script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error!!', {
      closeButton:true,
      progressBar:true,
    });
    @endforeach
    @endif
  </script>

  @stack('js')

</body>
</html>
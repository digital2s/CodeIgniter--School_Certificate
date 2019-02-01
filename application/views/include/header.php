  <body>



    <!-- Page Content -->
    <div class="container">


<!-- 
2 - Navbar with brand left, links on center and right that collapse in the vertical mobile
    menu
-->
<nav style="background: #737373  !important" class="navbar navbar-light navbar-expand-md bg-light justify-content-center">
    <a href="<?=  site_url('c_certificate'); ?>"><i  class="fa fa-file  text-info"></i></a>
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="<?=  site_url('c_school'); ?>">School<span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=  site_url('c_student'); ?>">Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=  site_url('c_speciality'); ?>">Speciality</a> 
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
            <li class="nav-item  dropdown">
                <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#"  id="navbarDropdownMenuLink"><i class="fa fa-user mr-1"></i>
                </a>

            <div class="dropdown-menu  "  aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="<?=  site_url('c_responsable/updateResponsable'); ?>"><i class="fa fa-pencil fa-fw"></i> Update Account</a>
                    
              
                        <a class="dropdown-item" href="<?=  site_url('c_responsable/signout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
               
                    </div>

            </li>



        </ul>
    </div>
</nav>

<style type="text/css">
    .nav-link{
        color : #fff  !important;
    }
</style>
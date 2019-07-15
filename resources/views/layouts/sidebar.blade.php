<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-0">
            <img src="{{URL::asset('img/gabsi-logo.png')}}" alt="gabsi pic" height="64" width="32">
        </div>
        <div class="sidebar-brand-text mx-3">Administrasi Bridge DIY</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Atlet</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Diri:</h6>
                <a class="collapse-item" href="#">Tambah</a>
                <a class="collapse-item" href="#">Edit</a>
                <a class="collapse-item" href="#">Hapus</a>
            </div>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Prestasi:</h6>
                <a class="collapse-item" href="#">Tambah</a>
                <a class="collapse-item" href="#">Edit</a>
                <a class="collapse-item" href="#">Hapus</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PadiApp <sup>Comparison</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->

<!-- Nav Item - Charts -->
<li class="nav-item <?php echo $getactive['name']?>">
    <a class="nav-link" href="/main/index">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>DB vs Impor (Nama)</span></a>
</li>

<li class="nav-item <?php echo $getactive['alias']?>">
    <a class="nav-link" href="/main/alias">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>DB vs Impor (Alias)</span></a>
</li>

<li class="nav-item <?php echo $getactive['hunter']?>">
    <a class="nav-link" href="/main/hunter">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Hunter vs User_ID</span></a>
</li>

<li class="nav-item <?php echo $getactive['sla']?>">
    <a class="nav-link" href="/main/sla">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>SLA db vs SLA xls</span></a>
</li>

<li class="nav-item <?php echo $getactive['download']?>">
    <a class="nav-link" href="/main/download">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Download Excel</span></a>
</li>
<li class="nav-item <?php echo $getactive['downloadorphan']?>">
    <a class="nav-link" href="/main/downloadorphan">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Tidak ada di excel</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

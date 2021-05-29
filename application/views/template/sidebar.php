 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">SIMORA</div>
     </a>


     <!-- Divider -->
     <hr class="sidebar-divider my-0">
     <?php foreach ($menu as $m) : ?>
         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
             <a class="nav-link" href="<?= $m['url'] ?>">
                 <i class="fas fa-fw fa-tachometer-alt"></i>
                 <span><?= $m['menu']; ?></span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">
     <?php endforeach; ?>
     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->
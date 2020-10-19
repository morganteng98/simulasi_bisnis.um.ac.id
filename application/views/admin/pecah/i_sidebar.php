<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <!-- menu-open // disimpen ini ay buat klo pen close-->
            <a href="<?php echo base_url('admin') ?>" class="nav-link">
              <!-- active = biru-->
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">

            </ul> -->
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master Produk
                <i class="fas fa-angle-right right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product/category') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product/category_sb') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sumber Bahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product/category_jb') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Bahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product/category_mb') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Macam Bahan</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Master Jasa
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Jasa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/product/category') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Jasa</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/product/promotion') ?>" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Master Pemasaran
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
            </ul>

          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Master Analisis
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Analysis/All') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analisis Semua</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Analysis/Product')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analisis SWOT Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Analysis/Promotion') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analisis SWOT M.Promosi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Analysis/Target') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analisis SWOT Sasaran</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master User
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Profile') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/User') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              
            </ul>
          </li>

          
             </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Admin</span></li>
<li class="nav-item{{ request()->is('customer') ? ' active' : '' }}"><a href="{{ url('/admin/customer') }}"><i class="fas fa-user-friends"></i><span> Customer</span></a></li>
<li class="nav-item{{ request()->is('barang') ? ' active' : '' }}"><a href="{{ url('/admin/barang') }}"><i class="fas fa-chalkboard-teacher"></i><span>Barang</span></a></li>
<li class="nav-item{{ request()->is('keluhan') ? ' active' : '' }}"><a href="{{ url('/admin/keluhan') }}"><i class="fas fa-book-open"></i><span>Keluhan</span></a></li>
<li class="nav-item{{ request()->is('kendaraan') ? ' active' : '' }}"><a href="{{ url('/admin/kendaraan') }}"><i class="fas fa-users"></i><span>Kendaraan</span></a></li>
<li class="nav-item{{ request()->is('pegawai') ? ' active' : '' }}"><a href="{{ url('/admin/pegawai') }}"><i class="fas fa-user-graduate"></i><span>Pegawai</span></a></li>
<li class="nav-item{{ request()->is('supplier') ? ' active' : '' }}"><a href="{{ url('/admin/supplier') }}"><i class="far fa-bell"></i><span>Supplier</span></a></li>
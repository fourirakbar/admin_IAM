        <!-- Collapsible Inbox Navigation -->
        <div class="js-inbox-nav d-none d-md-block">
          <div class="block">
            <ul class="nav-main">
              <li>
                <a href="{{url('radiology/beranda')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span></a>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Permintaan</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/order/show')}}"><span class="sidebar-mini-hide">Permintaan Hari Ini</span></a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/order/create')}}"><span class="sidebar-mini-hide">Buat Permintaan</span></a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/order/show/recap')}}"><span class="sidebar-mini-hide">Rekap Permintaan</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Belanja</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/order/mustbuy')}}">Rencana Belanja</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/transaction/show')}}">Daftar Belanja</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/transaction/show/recap')}}">Histori Belanja</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Produksi</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/production/today')}}">Jadwal Produksi Harian</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/production/show')}}">Laporan Produksi</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Pengantaran</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/order/show/now')}}">Rekap Pesanan Hari Ini</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Bahan Makanan</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/ingredients/create')}}">Buat Bahan Makanan Baru</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/ingredients/show')}}">Lihat Semua Bahan Makanan</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Resep Makanan</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/recipe/create')}}">Buat Resep Makanan Baru</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/recipe/show')}}">Lihat Semua Resep Makanan</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/recipe/foodperday')}}">Atur Makanan Per Harian</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Stock</span></a>
                <ul>
                  <li>
                    <a href="{{URL::to('nutrition/stock/show')}}">Lihat Semua Stock Makanan</a>
                  </li>
                  <li>
                    <a href="{{URL::to('nutrition/stock/recap')}}">Rekap Stock Makanan</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- END Collapsible Inbox Navigation -->
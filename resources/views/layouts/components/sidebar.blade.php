 <div class="sidebar">
 	<div class="sidebar-wrapper" id="sidebar">
 		<div class="logo">
 			<a href="http://www.creative-tim.com" class="simple-text logo-normal">
                DPTSI - ITS
            </a>
 			{{-- <a href="http://www.creative-tim.com">

 				<img src="{{asset('assets/img/logo.png')}}" height="25">
 			</a> --}}
 		</div>
 		<div class="user">
 			<div class="photo">
 				<img src="{{asset('assets/img/default-avatar.png')}}" />
 			</div>
 			<div class="info ">
 				<a>
 					<span>Administrator
 					</span>
 				</a>
 			</div>
 		</div>
 		<ul class="nav  main-nav">
 			<li class="nav-item ">
 				<a class="nav-link" href="./dashboard.html">
 					<i class="fa fa-home"></i>
 					<p>Dashboard</p>
 				</a>
 			</li>
 			<li class="nav-item ">
 				<a class="nav-link" href="./dashboard.html">
 					<i class="fa fa-envelope"></i>
 					<p>Pesan</p>
 				</a>
 			</li>

 			@yield('sidebarcomponent')
 			{{-- <li class="nav-header">
 				<a class="nav-link ">
 					<p>Gudang Farmasi</p>
 				</a>
 			</li>
 			<li class="nav-item active">
 				<a class="nav-link" data-toggle="collapse" href="#componentsExamples">
 					<i class="fa fa-exchange"></i>
 					<p>
 						Transaksi
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse show" id="componentsExamples">
 					<ul class="nav">
 						<li class="nav-item">
 							<a class="nav-link" href="./components/buttons.html">
 								<span class="sidebar-mini">T</span>
 								<span class="sidebar-normal">Tambah Transaksi</span>
 							</a>
 						</li>
 						<li class="nav-item active">
 							<a class="nav-link" href="./components/buttons.html">
 								<span class="sidebar-mini">B</span>
 								<span class="sidebar-normal">Transaksi Terbaru</span>
 								<span class="sidebar-line"></span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="./components/grid.html">
 								<span class="sidebar-mini">R</span>
 								<span class="sidebar-normal">Rekap Transaksi</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#formsExamples">
 					<i class="fa fa-truck"></i>
 					<p>
 						Supplier
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="formsExamples">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="./forms/regular.html">
 								<span class="sidebar-mini">DS</span>
 								<span class="sidebar-normal">Daftar Supplier</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="./forms/extended.html">
 								<span class="sidebar-mini">TS</span>
 								<span class="sidebar-normal">Tambah Supplier</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#tablesExamples">
 					<i class="fa fa-cubes"></i>
 					<p>
 						Barang
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="tablesExamples">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="./tables/regular.html">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Daftar Barang</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="./tables/extended.html">
 								<span class="sidebar-mini">ET</span>
 								<span class="sidebar-normal">Tambah Barang</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="./tables/bootstrap-table.html">
 								<span class="sidebar-mini">BT</span>
 								<span class="sidebar-normal">Mutasi Barang</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li> --}}
 			
			{{-- @include('radiology/components/sidebar') --}}
			{{-- <li class="nav-header">
 				<a class="nav-link ">
 					<p>Gizi</p>
 				</a>
 			</li> --}}
 			{{-- <li class="nav-item">
				<a class="nav-link" href="{{url('radiology/beranda')}}">
					<i class="fa fa-line-chart"></i>
					<p>
						Beranda
					</p>
				</a>
			</li> --}}
 			{{-- <li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionIngredients">
 					<i class="fa fa-exchange"></i>
 					<p>
 						Bahan Makanan
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse" id="nutritionIngredients">
 					<ul class="nav">
 						<li class="nav-item">
 							<a class="nav-link" href="{{url('nutrition/ingredients/create')}}">
 								<span class="sidebar-mini">B</span>
 								<span class="sidebar-normal">Buat Bahan Makanan Baru</span>
 								<span class="sidebar-line"></span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/ingredients/show')}}">
 								<span class="sidebar-mini">LS</span>
 								<span class="sidebar-normal">Lihat Semua Bahan Makanan</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>

 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionRecipe">
 					<i class="fa fa-newspaper-o"></i>
 					<p>
 						Resep Makanan
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse" id="nutritionRecipe">
 					<ul class="nav">
 						<li class="nav-item">
 							<a class="nav-link" href="{{url('nutrition/recipe/create')}}">
 								<span class="sidebar-mini">B</span>
 								<span class="sidebar-normal">Buat Resep Makanan Baru</span>
 								<span class="sidebar-line"></span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/recipe/show')}}">
 								<span class="sidebar-mini">LS</span>
 								<span class="sidebar-normal">Lihat Semua Resep Makanan</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionOrder">
 					<i class="fa fa-tint"></i>
 					<p>
 						Pemesanan
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionOrder">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/order/create')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Buat Pesanan Baru</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/order/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Lihat Pesanan Diet</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionStock">
 					<i class="fa fa-cubes"></i>
 					<p>
 						Stock
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionStock">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/stock/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Lihat Semua Stock Makanan</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionTransaction">
 					<i class="fa fa-exchange"></i>
 					<p>
 						Belanja
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionTransaction">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/order/mustbuy')}}">
 								<span class="sidebar-mini">MB</span>
 								<span class="sidebar-normal">List Belanja</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/transaction/create')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Tambah Belanja</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/transaction/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Lihat Rekap Belanja</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionPengantaran">
 					<i class="fa fa-truck"></i>
 					<p>
 						Pengantaran
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionPengantaran">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/order/show/now')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Rekap Pesanan Hari Ini</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionProduction">
 					<i class="fa fa-truck"></i>
 					<p>
 						Produksi
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionProduction">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/production/create')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Tambah Produksi</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{url('nutrition/production/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Rekap Produksi</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li> --}}
 		</ul>
 	</div>
 </div>
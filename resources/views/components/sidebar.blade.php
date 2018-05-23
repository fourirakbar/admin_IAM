 <!-- <div class="sidebar">
 	<div class="sidebar-wrapper" id="sidebar">
 		<div class="logo">
 			<a href="http://www.creative-tim.com">
 				<img src="{{asset('assets/img/logo.png')}}" height="25">
 			</a>
 		</div>
 		<div class="user">
 			<div class="photo">
 				<img src="{{asset('assets/img/default-avatar.png')}}" />
 			</div>
 			<div class="info ">
 				<a>
 					<span>Tania Irawan
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
 			</li> -->
 			<li class="nav-header">
 				<a class="nav-link ">
 					<p>Gizi</p>
 				</a>
 			</li>
 			{{-- <li class="nav-item">
				<a class="nav-link" href="{{url('radiology/beranda')}}">
					<i class="fa fa-line-chart"></i>
					<p>
						Beranda
					</p>
				</a>
			</li> --}}
			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionOrder">
 					<i class="fa fa-cutlery"></i>
 					<p>
 						Permintaan
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionOrder">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/order/show')}}">
 								<span class="sidebar-mini"><i class="nc-icon nc-simple-add"></i></span>
 								<span class="sidebar-normal">Permintaan Hari Ini</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/order/create')}}">
 								<span class="sidebar-mini"><i class="nc-icon nc-refresh-02"></i></span>
 								<span class="sidebar-normal">Buat Permintaan</span>
 							</a>
 						</li> 						
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/order/show/recap')}}">
 								<span class="sidebar-mini"><i class="nc-icon nc-refresh-02"></i></span>
 								<span class="sidebar-normal">Rekap Permintaan</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionTransaction">
 					<i class="fa fa-shopping-cart"></i>
 					<p>
 						Belanja
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionTransaction">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/order/mustbuy')}}">
 								<span class="sidebar-mini"><i class="nc-icon nc-refresh-02"></i></span>
 								<span class="sidebar-normal">Rencana Belanja</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/transaction/show')}}">
 								<span class="sidebar-mini"><i class="nc-icon nc-refresh-02"></i></span>
 								<span class="sidebar-normal">Daftar Belanja</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/transaction/show/recap')}}">
 								<span class="sidebar-mini"><i class="nc-icon nc-refresh-02"></i></span>
 								<span class="sidebar-normal">Histori Belanja</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" data-toggle="collapse" href="#nutritionProduction">
 					<i class="fa fa-exchange"></i>
 					<p>
 						Produksi
 						<b class="caret"></b>
 					</p>
 				</a>
 				<div class="collapse " id="nutritionProduction">
 					<ul class="nav">
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/production/today')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Jadwal Produksi Harian</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/production/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Laporan Produksi</span>
 							</a>
 						</li>
 						{{-- <li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/production/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Tambah Laporan Produksi</span>
 							</a>
 						</li> --}}
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
 							<a class="nav-link" href="{{URL::to('nutrition/order/show/now')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Rekap Pesanan Hari Ini</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			<li class="nav-item">
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
 							<a class="nav-link" href="{{URL::to('nutrition/ingredients/create')}}">
 								<span class="sidebar-mini">B</span>
 								<span class="sidebar-normal">Buat Bahan Makanan Baru</span>
 								<span class="sidebar-line"></span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/ingredients/show')}}">
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
 							<a class="nav-link" href="{{URL::to('nutrition/recipe/create')}}">
 								<span class="sidebar-mini">B</span>
 								<span class="sidebar-normal">Buat Resep Makanan Baru</span>
 								<span class="sidebar-line"></span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/recipe/show')}}">
 								<span class="sidebar-mini">LS</span>
 								<span class="sidebar-normal">Lihat Semua Resep Makanan</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/recipe/foodperday')}}">
 								<span class="sidebar-mini">LS</span>
 								<span class="sidebar-normal">Atur Makanan Per Harian</span>
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
 							<a class="nav-link" href="{{URL::to('nutrition/stock/show')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Lihat Semua Stock Makanan</span>
 							</a>
 						</li>
 						<li class="nav-item ">
 							<a class="nav-link" href="{{URL::to('nutrition/stock/recap')}}">
 								<span class="sidebar-mini">RT</span>
 								<span class="sidebar-normal">Rekap Stock Makanan</span>
 							</a>
 						</li>
 					</ul>
 				</div>
 			</li>
 			
 			
 			
<!--  		</ul>
 	</div>
 </div> -->
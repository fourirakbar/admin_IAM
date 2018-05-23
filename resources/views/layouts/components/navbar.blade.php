<nav class="navbar navbar-expand-lg navbar-inverse fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" data-toggle="modal" data-target="#menuModal" style="cursor: pointer"><i class="nc-icon nc-bullet-list-67"></i> Admin Page </a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <!-- <ul class="nav navbar-nav mr-auto">
                <form class="navbar-form navbar-left navbar-search-form" role="search">
                    <div class="input-group">
                        <i class="nc-icon nc-zoom-split"></i>
                        <input type="text" value="" class="form-control" placeholder="Search...">
                    </div>
                </form>
            </ul> -->
            <ul class="navbar-nav">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-planet"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Create New Post</a>
                        <a class="dropdown-item" href="#">Manage Something</a>
                        <a class="dropdown-item" href="#">Do Nothing</a>
                        <a class="dropdown-item" href="#">Submit to live</a>
                        <li class="divider"></li>
                        <a class="dropdown-item" href="#">Another action</a>
                    </ul>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-bell-55"></i>
                        <span class="notification">5</span>
                        <span class="d-lg-none">Notification</span>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Notification 1</a>
                        <a class="dropdown-item" href="#">Notification 2</a>
                        <a class="dropdown-item" href="#">Notification 3</a>
                        <a class="dropdown-item" href="#">Notification 4</a>
                        <a class="dropdown-item" href="#">Notification 5</a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-bullet-list-67"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="nc-icon nc-email-85"></i> Messages
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="nc-icon nc-umbrella-13"></i> Help Center
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="nc-icon nc-settings-90"></i> Settings
                        </a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
                        </a>
                        <a href="#" class="dropdown-item text-danger">
                            <i class="nc-icon nc-button-power"></i> Log out
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="menuModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('pasien')}}" >
                            <i class="fa fa-user"></i>
                            <br> Pasien
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('rawatinap/bangsal')}}" >
                            <i class="fa fa-bed"></i>
                            <br> Rawat Inap
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('rawatjalan/poliklinik')}}" >
                            <i class="fa fa-wheelchair"></i>
                            <br> Rawat Jalan
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('igd/ruangan')}}" >
                            <i class="fa fa-medkit"></i>
                            <br> IGD
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('apotek')}}" >
                            <i class="fa fa-cubes"></i>
                            <br> Farmasi
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('radiologi/transaksi')}}" >
                            <i class="fa fa-exclamation-triangle"></i>
                            <br> Radiologi
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('kasir/transaksi')}}" >
                            <i class="fa fa-usd"></i>
                            <br> Kasir
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('warehouse')}}" >
                            <i class="fa fa-truck"></i>
                            <br> Gudang Farmasi
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a class="nav-link" href="{{url('nutrition/order/show')}}" >
                            <i class="fa fa-cutlery"></i>
                            <br> Gizi
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
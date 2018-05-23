<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
<script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
<script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
<script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/codebase.js')}}"></script>

<!-- Hakim Nambah -->
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.bootstrap.wizard.min.js')}}"></script>


<!-- Page Plugins -->
<script src="{{asset('assets/js/plugins/slick/slick.min.js')}}"></script>

<script src="{{asset('assets/js/plugins/wickedpicker/wickedpicker.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/masked-inputs/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/dropzonejs/min/dropzone.min.js')}}"></script>

<script src="{{asset('js/diagnosis/function.js')}}"></script>
<script src="{{asset('js/identitas/function.js')}}"></script>
<script src="{{asset('js/resep/function.js')}}"></script>
<script src="{{asset('js/gizi/function.js')}}"></script>
<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Slick Slider plugin)
        Codebase.helpers('slick');
    });
    jQuery(function () {
        // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
        Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'masked-inputs', 'rangeslider', 'tags-inputs']);
    });
</script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_comp_charts.js')}}"></script>
<script>
    jQuery(function () {
        // Init page helpers (Easy Pie Chart plugin)
        Codebase.helpers('easy-pie-chart');
    });
</script>


<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/magnific-popup/magnific-popup.min.js')}}"></script>

<!-- Page JS Code -->
<script>
    jQuery(function () {
        // Init page helpers (Magnific Popup plugin)
        Codebase.helpers('magnific-popup');
    });
</script>
<script>
    jQuery(function () {
        // Init page helpers (Table Tools helper)
        Codebase.helpers('table-tools');
    });
</script>
<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/sweetalert2/es6-promise.auto.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/be_ui_activity.js')}}"></script>
<script>
    jQuery(function () {
        // Init page helpers (BS Notify Plugin)
        Codebase.helpers('notify');
    });
</script>

<script type="text/javascript" src="{{asset('assets/js/lightgallery/lightgallery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/lightgallery/lg-fullscreen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/lightgallery/lg-pager.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/lightgallery/lg-zoom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/lightgallery/lg-video.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#penunjangGallery").lightGallery({
            pager: true,
            zoom: true,
            actualSize: true,
            fullscreen: true,
            thumbnail:true,
            animateThumb: false,
            showThumbByDefault: false,
            selector:'.btn.selector'
        });
    })
</script>



<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/moment-with-locales.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap-datepaginator.js')}}"></script>
<script type="text/javascript">$.fn.poshytip={defaults:null};</script>
<script src="{{asset('assets/js/jquery-editable-poshytip.min.js')}}"></script>
<script src="{{asset('assets/js/typeahead.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/numeral.min.js')}}"></script>
<script src="{{asset('assets/js/underscore-min.js')}}"></script>
<script src="{{asset('assets/js/backbone-min.js')}}"></script>


<script src="{{asset('assets/js/mustache.js')}}"></script>
<script type="text/javascript">
    var customTags = [ '@{{', '}}' ];
</script>

<script src="{{asset('assets/js/pagination-twb.min.js')}}"></script>

<script type="text/javascript">
    moment.locale('id');
</script>

@if (session('status'))
<script type="text/javascript">
    swal({
      type: 'success',
      title: "{{session('title')}}",
      text: "{{ session('message') }}",
  });
</script>

@elseif (session('status') == -1)

<script type="text/javascript">
    swal({
      type: 'error',
      title: "{{session('title')}}",
      text: "{{ session('message') }}",
  });
</script>
@endif

<script type="text/javascript">
    var API_URL = "{{url('api')}}";
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
    function goToHref(url)
    {
        window.location = url;
    }
</script>

<script type="text/javascript">
    function callSwal(type,title,text,url)
    {
        swal({
            type: type,
            title: title,
            text: text,
            timer:3000,
        }).then((result) => {
            if (result.dismiss != '') swalRedirect(url);
        })
    }

    function swalRedirect(url)
    {
        if(url !== '0')
        {
            newurl = "{{url('')}}/"+url;
            window.location.href = newurl;
        }
    }
</script>

@yield('js')

{{--
<!--
<script type="text/javascript">
    var app = angular.module('medifyApp', ['ngSanitize','ui.bootstrap','ngAnimate']);
</script>
<script type="text/javascript">
    var app = angular.module('medifyApp');
    var API_URL = "{{url('api')}}";
    app.controller('navbarController', function($scope,$http) {
        $http.get(API_URL + '/user')
        .then(function (response){
            $scope.mydata = response.data;
            console.log('here');
            console.log($scope.mydata);
        }, function (error)
        {
            console.log(error.status);
        })
    });
</script>-->
--}}

@yield('angular')
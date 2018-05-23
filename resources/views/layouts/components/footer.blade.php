	<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
	<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
	<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
	<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-datepaginator.js')}}"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}"></script>
	<script src="{{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
	<script src="{{asset('assets/js/plugins/nouislider.js')}}"></script>
	<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>			
	<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>			
	<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>			
	<script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>			
	<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>			
	<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>			
	<script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=2.0.1')}}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.3/js/ajax-bootstrap-select.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>





	@yield('js')
	

	<script type="text/javascript">
		var app = angular.module('medifyApp', ['ngSanitize','ui.bootstrap','ngAnimate']);
	</script>

	<script type="text/javascript">
		Number.prototype.formatMoney = function(c){
	        var n = this, 
	            c = isNaN(c = Math.abs(c)) ? 2 : c, 
	            d = ",", 
	            t = ".", 
	            s = n < 0 ? "-" : "", 
	            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
	            j = (j = i.length) > 3 ? j % 3 : 0;
	           return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        };
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

		jQuery(document).ready(function($) {
		    $(".clickable-row").click(function() {
		        window.location = $(this).data("href");
		    });
		});

		function formatDate(date) {
		  var monthNames = [
		    "January", "February", "March",
		    "April", "May", "June", "July",
		    "August", "September", "October",
		    "November", "December"
		  ];

		  var day = date.getDate();
		  var monthIndex = date.getMonth();
		  var year = date.getFullYear();
		  var hours = date.getHours();
		  var min = date.getMinutes();

		  return day + ' ' + monthNames[monthIndex] + ' ' + year + ', ' + hours + ':' + min;
		}

		function formatMoney(money) {
			//var n = 1234567
            //console.log(n.toLocaleString())
            //console.log(money.toLocaleString());
      		return money.toLocaleString();
    	}



	</script>



    	@if (session('status'))
    		<script type="text/javascript">
    			swal("{{session('title')}}", "{{ session('message') }}", "success")
    		</script>
    	@endif

    	<script>
    		function swalError()
    		{
    			swal({
			  type: 'warning',
			  title: 'Oops Sorry...',
			  text: 'Terjadi Error! Coba untuk reload halaman lagi. Tekan F5 untuk reload halaman',
			  footer: 'Jika masalah ini sering muncul, hubungi Admin',
			})
    		}
    	</script>



	@yield('angular')

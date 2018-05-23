@extends('layouts.main')

@section('title')
DPTSI - ITS
@endsection

@section('sidebarcomponent')
    {{-- @include('components.sidebar') --}}
@endsection

@section('content')

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card stacked-form">
					<div class="card-header ">
						<h4 class="card-title">{{ $value }}</h4>
					</div>
					<div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <div class="fresh-datatables">
              <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Port</th>
                    <th>IP</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
                $i=0;
                $index = 1;
                ?>
                <tbody>
                 
              </tbody>
            </table>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('css')
	<style type="text/css">
		.hidden {
			display: none;
		}
	</style>
@endsection

@section('angular')
<script type="text/javascript">
$(document).ready(function() {
$('#datatables').DataTable({
  "pagingType": "full_numbers",
  "lengthMenu": [
  [10, 25, 50, -1],
  [10, 25, 50, "All"]
  ],
  responsive: true,
  language: {
    search: "_INPUT_",
    searchPlaceholder: "Search records",
  }

});


var table = $('#datatables').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      if ($tr.hasClass('child')) {
        $tr = $tr.prev('.parent');
      }

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		@if(session('status'))
      	swal('Berhasil', '{{(session('status'))}}', 'success');
  	@endif
		var i=1;
		
		var src = "{{ url('/nutrition/autocomplete') }}";

		$('#add-form').click(function() {
			console.log("boi");
			i++;
			$('#dynamic_field').append('<div class="form-group row" > <div class="col-md-7 ml-auto"> <label>Bahan Makanan</label> <select id="test'+i+'" class="selectpicker" data-title="Pilih bahan makanan" data-style="btn-default btn-outline" data-menu-style="dropdown-blue" data-live-search="true" data-live-search-style="startsWith" name="ingredients[]" required="">Pilih satuan @foreach ($data as $key => $value) <option value="{{ $value->id_ingredients }}">{{ $value->name_ingredients }} -- {{ $value->unit_ingredients }}</option> @endforeach </select> </div> <div class="col-md-3"> <label>Jumlah</label> <input type="text" placeholder="Masukkan Jumlah" class="form-control" name="qty_ingredients[]" required=""> </div> <div class="col-md-1"> <button type="button" rel="tooltip" title="" class="btn btn-info btn-link btn-xs" data-original-title="Delete Ingredients"> <i class="fa fa-trash-o fa-2x" style="padding-top: 23px;" id="remove" aria-hidden="true"></i> </button> </div> </div>'); 
			$('#test'+i).selectpicker('refresh');
		}); 
		$('.typeahead').typeahead({
			
			source: function (query, process) {
				var path = "{{ URL::to('/nutrition/autocomplete') }}";
				console.log('jon');
				return $.get(path, { word: query }, function (data) {
					console.log(data);
					return process(data);
				});
			}
		});	

		$('body').on('click','#remove',function(){
			$(this).closest('div.row').remove(); 
	});
	});
	
</script> --}}
@endsection
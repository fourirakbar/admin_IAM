//DECLARING FOR TRANSAKSI DETAIL USING X-EDITABLE

$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {
	initEditable();
	initSelect2Layanan(".layanan");


});
function initEditable(){
	$('.jumlah').editable({
		inputclass: 'form-control',
		defaultValue : 'Empty',
		showbuttons : false,
		disabled : true,
		onblur : 'submit',
		validate: function(value) {
			if($.trim(value) == '') {
				return 'This field is required';
			}
		},
		success: function(response, newValue) {
			var jumlah = newValue;
			var harga = $(this).parent().siblings(".harga-par").children('.harga').editable('getValue').undefined;
			var diskon = $(this).parent().siblings(".diskon-par").children('.diskon').editable('getValue').undefined;
			var subtotal = $(this).parent().siblings(".subtotal");
			var id = $(this).data("pk")
			updateRecord(jumlah,harga,diskon,subtotal,id);
		}
	});


	$('.keterangan').editable({
		inputclass: 'form-control',
		defaultValue : '',
		disabled : true,
		showbuttons : false,
		onblur : 'submit',
		rows : 2,
		success: function(response, newValue) {
			var jumlah = $(this).parent().siblings(".jumlah-par").children('.jumlah').editable('getValue').undefined;;
			var harga = $(this).parent().siblings(".harga-par").children('.harga').editable('getValue').undefined;
			var diskon = $(this).parent().siblings(".diskon-par").children('.diskon').editable('getValue').undefined;
			var subtotal = $(this).parent().siblings(".subtotal");
			var keterangan = newValue;
			var id = $(this).data("pk")
			updateRecord(jumlah,harga,diskon,subtotal,id,keterangan);
		}
	});

	$('.harga').editable({
		inputclass: 'form-control',
		defaultValue : 'Empty',
		showbuttons : false,
		disabled : true,
		onblur : 'submit',
		display: function(value) {
			$(this).text('Rp ' + numeral(value).format('0,0'));
		},
		validate: function(value) {
			if($.trim(value) == '') {
				return 'This field is required';
			}
		},
		success: function(response, newValue) {
			var jumlah = $(this).parent().siblings(".jumlah-par").children('.jumlah').editable('getValue').undefined;
			var harga = newValue;
			var diskon = $(this).parent().siblings(".diskon-par").children('.diskon').editable('getValue').undefined;
			var subtotal = $(this).parent().siblings(".subtotal");
			var id = $(this).data("pk")
			updateRecord(jumlah,harga,diskon,subtotal,id);
		}
	});
	$('.diskon').editable({
		inputclass: 'form-control',
		defaultValue : 'Empty',
		showbuttons : false,
		disabled : true,
		onblur : 'submit',
		display: function(value) {
			$(this).text(value + ' %');
		},
		validate: function(value) {
			if($.trim(value) == '') {
				return 'This field is required';
			}
		},
		success: function(response, newValue) {
			var jumlah =  $(this).parent().siblings(".jumlah-par").children('.jumlah').editable('getValue').undefined;
			var harga = $(this).parent().siblings(".harga-par").children('.harga').editable('getValue').undefined;
			var diskon = newValue;
			var subtotal = $(this).parent().siblings(".subtotal");
			var id = $(this).data("pk")
			updateRecord(jumlah,harga,diskon,subtotal,id);
		}
	});


	$('.layanan').on('select2:select', function (e) {
		var data = e.params.data;

		var harga = $(this).parent(".layanan-par").siblings(".harga-par").children('.harga');
		var jumlah = $(this).parent(".layanan-par").siblings(".jumlah-par").children('.jumlah');
		var diskon = $(this).parent(".layanan-par").siblings(".diskon-par").children('.diskon');
		var subtotal = $(this).parent(".layanan-par").siblings(".subtotal");
		var keterangan = $(this).parent(".layanan-par").siblings(".keterangan-par").children('.keterangan');

		harga.editable('toggleDisabled');
		jumlah.editable('toggleDisabled');
		diskon.editable('toggleDisabled');
		keterangan.editable('toggleDisabled');

		id = $(this).data("pk")

		harga.editable('setValue',data.harga);
		jumlah.editable('setValue',1);
		diskon.editable('setValue',0);

		subtotal_number = data.harga * 1;
		subtotal_number_formatted = numeral(subtotal_number).format('0,0');

		subtotal.html('Rp ' + subtotal_number_formatted);

		backboneAddTransaksiDetail(id,data.id,data.name,1,data.harga,0,subtotal_number);

	});

	$('button.remove').click(function(){
		var layanan = $(this).parent(".remove-par").siblings(".layanan-par").children('.layanan');
		var harga = $(this).parent(".remove-par").siblings(".harga-par").children('.harga');
		var jumlah = $(this).parent(".remove-par").siblings(".jumlah-par").children('.jumlah');
		var diskon = $(this).parent(".remove-par").siblings(".diskon-par").children('.diskon');
		var subtotal = $(this).parent(".remove-par").siblings(".subtotal");
		var keterangan = $(this).parent(".remove-par").siblings(".keterangan-par").children('.keterangan');

		layanan.val('').trigger('change')
		harga.editable('setValue', 0);
		jumlah.editable('setValue', 0);
		diskon.editable('setValue', 0);
		keterangan.editable('setValue', '');
		subtotal.html("Rp 0");


		harga.editable('toggleDisabled');
		jumlah.editable('toggleDisabled');
		diskon.editable('toggleDisabled');
		keterangan.editable('toggleDisabled');


		var id = keterangan.data("pk")
		var transaksidetail = transaksiCollection.findWhere({pk_id: id});
		if(typeof transaksidetail !== "undefined") var is_delete = 1;
		else var is_delete = 0; 
		if(is_delete)
		{
			transaksiCollection.remove(transaksidetail)
		}

		updateAllTotal();

	});

}


function destroySelect2()
{
	$(".layanan").select2("destroy")
}

function initSelect2Layanan(selector)
{
	$(selector).select2({
		ajax: {
			url: API_URL+"/keuangan/layanan",
			dataType: 'json',
			delay: 250,
			data: function (params) 
			{
				return {
					keyword: params.term,
					page: params.page
				};
			},
			processResults: function (data, params) {
				params.page = params.page || 1;
				return {
					results: data.data,
				};
			},
			cache: true
		},
		escapeMarkup: function (markup) { return markup; },
		minimumInputLength: 3,
		placeholder: "Cari layanan",
		templateResult: formatPasien,
		templateSelection: formatPasienSelection,
	});
}



function updateRecord(jumlah,harga,diskon,subtotal,id,keterangan = '')
{
	subtotal_number = (harga * jumlah) - (harga*diskon/100*jumlah);
	subtotal_number_formatted = numeral(subtotal_number).format('0,0');

	subtotal.html('Rp ' + subtotal_number_formatted);

	backboneUpdateTransaksi(jumlah,harga,diskon,subtotal_number,keterangan,id);
}

var globalJumlah = 0;
var globalDiskon = 0;
var globalTotal = 0;

function updateAllTotal()
{
	var subtotals = transaksiCollection.pluck("subtotal");
	var jumlahs = transaksiCollection.pluck("jumlah");
	var hargas = transaksiCollection.pluck("harga");
	var diskons = transaksiCollection.pluck("diskon");

	var allJumlah = 0;
	var allDiskon = 0;
	var allTotal = 0;

	$.each(subtotals, function( index, value ) {
		allJumlah+= hargas[index]*jumlahs[index]
		allDiskon+= hargas[index]*diskons[index]/100
	});

	allTotal = allJumlah-allDiskon;

	globalTotal = allTotal;
	globalDiskon = allDiskon;
	globalJumlah = allJumlah;

	var allJumlahFormat = numeral(allJumlah).format('0,0');
	var allDiskonFormat = numeral(allDiskon).format('0,0');
	var allTotalFormat = numeral(allTotal).format('0,0');


	$('#allJumlah').html('Rp '+allJumlahFormat)
	$('#allDiskon').html('Rp '+allDiskonFormat)
	$('#allTotal').html('Rp '+allTotalFormat)
	//console.log(transaksiCollection);


}


//INITIATE SELECT2
$("#kategori").select2();

$("#pasien").select2({
	ajax: {
		url: API_URL+"/pasien/get",
		dataType: 'json',
		delay: 250,
		data: function (params) 
		{
			return {
				keyword: params.term,
				page: params.page
			};
		},
		processResults: function (data, params) {
			params.page = params.page || 1;
			return {
				results: data.data,
			};
		},
		cache: true
	},
	escapeMarkup: function (markup) { return markup; },
	minimumInputLength: 3,
	placeholder: "Cari Pasien",
	templateResult: formatPasien,
	templateSelection: formatPasienSelection
});

//FORMAT DISPLAY
function formatPasien (item) {
	if (item.loading) {
		return item.text;
	}

	var markup = item.name

	return markup;
}

//FORMAT UNTUK DI SHOW DI HTML
function formatPasienSelection (item) {
	return item.name || item.text;
}

var TransaksiDetail = Backbone.Model.extend({
	defaults: {
		pk_id: "",
		layanan_id: "",
		layanan_string: "",
		jumlah: "",
		harga: "",
		diskon: "",
		subtotal: "",
		keterangan:""
	},
	idAttribute: "id"
});

var Transaksi = Backbone.Collection.extend({
	model: TransaksiDetail,
	sort_key: 'pk_id'
});

var transaksiCollection = new Transaksi();

function backboneAddTransaksiDetail(id,layanan_id,layanan_string,jumlah,harga,diskon,subtotal)
{
	if(transaksiCollection.length > 0)
	{
		var transaksidetail = transaksiCollection.findWhere({pk_id: id});
		if(typeof transaksidetail !== "undefined") var is_delete = 1;
		else var is_delete = 0; 
		if(is_delete)
		{
			transaksiCollection.remove(transaksidetail)
		}
	}
	var detail = new TransaksiDetail({ 
		pk_id:id,
		layanan_id: layanan_id,
		layanan_string: layanan_string,
		jumlah: jumlah,
		harga: harga,
		diskon: diskon,
		subtotal: subtotal
	});

	transaksiCollection.add(detail);

	updateAllTotal();
}


function backboneUpdateTransaksi(jumlah,harga,diskon,subtotal,keterangan,id)
{
	var transaksidetail = transaksiCollection.findWhere({pk_id: id});
	if(typeof transaksidetail !== "undefined") var exist = 1;
	else var exist = 0; 
	//console.log('exist : ' + exist);
	//console.log('id : ' + id);
	if(exist)
	{
		transaksidetail.set({
			pk_id: id,
			jumlah: jumlah,
			harga: harga,
			diskon: diskon,
			subtotal: subtotal,
			keterangan:keterangan
		});
	}
	updateAllTotal();
}

/*BUTTON EVENT*/


var recordCount = 3;
$('#tambahRecord').click(function() {
	recordCount++;
	content = '<tr id="transaksiRow'+ recordCount +'">'
	content+= '<th class="text-center" scope="row">'+ recordCount +'</th>'
	content+= '<td class=" text-view layanan-par">'
	content+= '<select class="js-select2 form-control layanan" id="select2Layanan'+ recordCount +'" data-pk="'+ recordCount +'" name="pasien" style="width: 100%;"></select>'
	content+= '</td>'
	content+= '<td class="text-center keterangan-par"><a href="#" class="keterangan" data-type="textarea" data-pk="'+ recordCount +'" data-placeholder="Opsional"></a></td>'
	content+= '<td class="text-center jumlah-par"><a href="#" class="jumlah" data-type="number" data-pk="'+ recordCount +'" data-placeholder="Masukkan jumlah">0</a></td>'
	content+= '<td class="text-right harga-par"><a href="#" class="harga" data-type="text" data-pk="'+ recordCount +'" data-placeholder="Harga Satuan">0</a></td>'
	content+= '<td class="text-center diskon-par"><a href="#" class="diskon" data-type="text" data-pk="'+ recordCount +'" data-placeholder="Diskon %">0</a></td>'
	content+= '<td class="text-right  bg-warning-lighter subtotal">Rp 0</td>'
	content+= '<td class="text-right remove-par"><button class="btn btn-alt-danger btn-sm remove"><i class="fa fa-remove"></i></button></td>'
	content+= '</tr>'


	$('#transaksiTable tr:last').after(content);
	$('#transaksiRow'+recordCount).hide();
	initSelect2Layanan("#select2Layanan"+recordCount);
	initEditable();
	$('#transaksiRow'+recordCount).show();
});

$('#buttonSubmit').click(function() {
	var transaksiCollectionJSON = JSON.stringify(transaksiCollection);

	$('#buttonSubmit').hide();
	$('#buttonLoading').show();

	console.log(transaksiCollection);
	console.log(transaksiCollectionJSON);
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	var pasien_id = $('#pasien').val();
	var tanggal = $('#tanggaltransaksi').val();
	var kategori = $('#kategori').val();



	$.ajax({
		type: "POST",
		url: API_URL + "/keuangan/pemasukan/baru",
		dataType: "json",
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		data: {
			pasien_id : pasien_id,
			tanggal : tanggal,
			kategori : kategori,
			transaksi: transaksiCollectionJSON,
			alltotal : globalTotal,
			alldiskon : globalDiskon,
			alljumlah : globalJumlah
		},
		success: function (data) {
			callSwal(data.type,data.title,data.text,data.url);
			$('#buttonSubmit').show();
			$('#buttonLoading').hide();
			//$('#buttonLoading').fadeOut();

		},
		error: function () {
			callSwal('error','Transaksi Gagal','Silahkan Coba Lagi',0);
			$('#buttonSubmit').show();
			$('#buttonLoading').hide();
		}
	});


});

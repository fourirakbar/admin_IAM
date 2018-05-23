$(document).ready(function(){

    var pharmacyId = 1;

    $('input:radio[name=kategori]').change(function () {
        if ($("input[name='kategori']:checked").val() == 'generik') {
            $("#resep-racikan").hide();
            $("#resep-obat").show();
        }
        if ($("input[name='kategori']:checked").val() == 'racikan') {
            $("#resep-obat").hide();
            $("#resep-racikan").show();
        }
    });

    $('#nama-apotek').on('change', function(e) {

        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;

        pharmacyId = valueSelected;

    });


    var ItemKV = {};
    var idItem;

    jQuery('.resep-autocomplete').autoComplete({


        minChars: 3,
        source: function(term, suggest){

            term = term.toLowerCase();

            var hostname = window.location.hostname;
            var dir = 'medifyhospital';
            var icdList;
            console.log(term);
            $.get('/'+dir+'/public/item/'+pharmacyId+'/'+term, function(data) {
                var i;
                for (i = 0; i < data.length; i++) {
                    ItemKV[data[i].name] = data[i].id;
                    if (~ data[i].name.toLowerCase().indexOf(term)) suggestions.push(data[i].name);
                }
                suggest(suggestions);

            });

            var countriesList  = ['Afghanistan','Albania','Algeria','Andorra','Angola','Anguilla','Antigua &amp; Barbuda','Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia &amp; Herzegovina','Botswana','Brazil','British Virgin Islands','Brunei','Bulgaria','Burkina Faso','Burundi','Cambodia','Cameroon','Cape Verde','Cayman Islands','Chad','Chile','China','Colombia','Congo','Cook Islands','Costa Rica','Cote D Ivoire','Croatia','Cruise Ship','Cuba','Cyprus','Czech Republic','Denmark','Djibouti','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Estonia','Ethiopia','Falkland Islands','Faroe Islands','Fiji','Finland','France','French Polynesia','French West Indies','Gabon','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guam','Guatemala','Guernsey','Guinea','Guinea Bissau','Guyana','Haiti','Honduras','Hong Kong','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Isle of Man','Israel','Italy','Jamaica','Japan','Jersey','Jordan','Kazakhstan','Kenya','Kuwait','Kyrgyz Republic','Laos','Latvia','Lebanon','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Luxembourg','Macau','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Mauritania','Mauritius','Mexico','Moldova','Monaco','Mongolia','Montenegro','Montserrat','Morocco','Mozambique','Namibia','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand','Nicaragua','Niger','Nigeria','Norway','Oman','Pakistan','Palestine','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russia','Rwanda','Saint Pierre &amp; Miquelon','Samoa','San Marino','Satellite','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','South Africa','South Korea','Spain','Sri Lanka','St Kitts &amp; Nevis','St Lucia','St Vincent','St. Lucia','Sudan','Suriname','Swaziland','Sweden','Switzerland','Syria','Taiwan','Tajikistan','Tanzania','Thailand','Timor L\'Este','Togo','Tonga','Trinidad &amp; Tobago','Tunisia','Turkey','Turkmenistan','Turks &amp; Caicos','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','Uruguay','Uzbekistan','Venezuela','Vietnam','Virgin Islands (US)','Yemen','Zambia','Zimbabwe'];
            var suggestions    = [];


        },
        onSelect: function(event, term, item) {
            idItem = ItemKV[term];
            console.log(idItem);
            $("#id-diagnosis").val(ItemKV[term]);
        }
    });

    $("#button-tambah-obat").click( function() {

        var type = $('#tipe-obat').find(":selected").text();
        var obat = $("input[name='nama-obat']").val();
        var no = $("input[name='no']").val();
        var aturan = $("input[name='aturan']").val();

        $("input[name='tipe-obat[]']:first").val(type);
        $("input[name='nama-obat[]']:first").val(obat);
        $("input[name='nomor-obat[]']:first").val(no);
        $("input[name='aturan-obat[]']:first").val(aturan);
        $("input[name='id-obat[]']:first").val(idItem);

        $("#display-nama-obat").text(obat);
        $("#display-kategori-tipe-obat").text(type);
        $("#display-nomor-aturan-obat").text(no).append(' - ' + aturan);

        $("#data-obat").clone().attr('style', '').appendTo($("#daftar-obat"));

        $("input[name='nama-obat']").val('');
        $("input[name='no']").val('');
        $("input[name='aturan']").val('');

        // var cat = $("input[name='kategori']:checked").val();
        // var type = $('#tipe-obat').find(":selected").text();
        // var no = $("input[name='no']").val();
        // var aturan = $("input[name='aturan']").val();
        //
        // if ( $("input[name='kategori']:checked").val() == 'generik' ) {
        //
        //     var obat = $("input[name='nama-obat']").val();
        //     $("input[name='nama-obat[]']:first").val(obat);
        //     $("#display-nama-obat").text(obat);
        //
        //     $("#display-kategori-tipe-obat").text(cat).append('-' + type);
        //
        // } else if ( $("input[name='kategori']:checked").val() == 'racikan' ) {
        //
        //     var racikan = $("#racikan").val();
        //     $("input[name='nama-obat[]']:first").val(racikan);
        //     $("#display-nama-obat").text(racikan);
        //
        // }
        //
        // $("#display-nomor-aturan-obat").text(no).append(' - ' + aturan);
        // $("#display-kategori-tipe-obat").text(cat).append(' - ' + type);
        // $("input[name='kategori-obat[]']:first").val(cat);
        // $("input[name='tipe-obat[]']:first").val(type);
        // $("input[name='nomor-obat[]']:first").val(no);
        // $("input[name='aturan-obat[]']:first").val(aturan);
        // $("#data-obat").clone().attr('style', '').appendTo($("#daftar-obat"));
    });
});

var AutoCompleteObat = function() {

    var DiagnosisKV = {};

    // Init jQuery AutoComplete example, for more examples you can check out https://github.com/Pixabay/jQuery-autoComplete
    var initAutoComplete = function(){
        // Init autocomplete functionality

    };

    return {
        init: function () {
            // Init jQuery AutoComplete example
            initAutoComplete();
        }
    };
}();
var service = contactService;
var Navigation = navigationMenu;

var datePicker = $('#datepicker');

$( document ).on( "pageinit", function( event ) {
   datePicker.datepicker();
$('#addressBook').on('keyup', function() {
    service.quick_search(this.value);
    navigation.setup_page();
    navigation.activate();
});
});

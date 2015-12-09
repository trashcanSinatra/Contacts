var service = contactService;


$( document ).on( "pageinit", function( event ) {
$('#addressBook').on('keyup', function() {
    service.quick_search(this.value);
});
});

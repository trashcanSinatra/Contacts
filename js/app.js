var service = contactService;
var menu = navigationMenu;

$( document ).on( "pageinit", function( event ) {
$('#addressBook').on('keyup', function() {
    service.quick_search(this.value);
    menu.setup_page();
    menu.activate();
});
});

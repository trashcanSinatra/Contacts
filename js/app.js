var service = contactService;

$( document ).on( "pageinit", function( event ) {
   $('#datepicker').datepicker();

   $('#addressBook').on('keyup', function() {
       service.quick_search(this.value);
    });
});

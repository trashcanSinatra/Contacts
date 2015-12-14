var service = contactService;

$( document ).on( "pageinit", function( event ) {
   $('#datepicker').datepicker({
      changeMonth: true,
      changeYear: true
    });
    

   $('#addressBook').on('keyup', function() {
       service.quick_search(this.value);
    });
});

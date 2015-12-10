var navigationMenu = (function() {

      var addyBookLink = $('#addyBookLink');
      var newCallLink = $('#newCallLnk');
      var mainContent = $('#mainContent');
      var viewNewCall = $('#view_newCall');
      var datePicker = $('#datepicker');
      var rightMenu = document.getElementById( 'showRight' );

      var page_setup = (function() {
          viewNewCall.hide();
      })();

      var activate = function() {

         newCallLink.click(function() {
            mainContent.hide();
            viewNewCall.show();
            datePicker.datepicker();
         });

         addyBookLink.click(function() {
            viewNewCall.hide();
            mainContent.show();
         });


      }()();
})();

var navigationMenu = (function() {

      var addyBookLink = $('#bookLink');
      var newCallLink = $('#newCallLink');
      var mainContent = $('#mainContent');
      var viewNewCall = $('#view_newCall');


      var setup_page = (function() {
          viewNewCall.hide();
      })();

      var activate = (function() {

         newCallLink.click(function() {
            mainContent.hide();
            viewNewCall.show();
         });

         addyBookLink.click(function() {
            viewNewCall.hide();
            mainContent.show();
         });

      })();
})();

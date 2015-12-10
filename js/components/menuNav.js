var navigationMenu = (function() {
      //Main Nav Links
      var addyBookLink = $('#bookLink');
      var newCallLink = $('#newCallLink');

      //Main Nav Div Targets
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

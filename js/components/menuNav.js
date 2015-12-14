var navigationMenu = (function() {

      var addyBookLink = $('#bookLink');
      var newCallLink = $('#newCallLink');
      var mainContent = $('#mainContent');
      var viewNewCall = $('#view_newCall');
      var noteBox = $("#notes_box");

      // Checks placeholder for new sales call general notes.
      function noteCheck() {
         if (noteBox.val() == "") {
            noteBox.val("General Notes...");
         }
      }

      var setup_page = (function() {
          viewNewCall.hide();
      })();

      var activate = (function() {

         newCallLink.click(function() {
            mainContent.hide();
            viewNewCall.show();
            noteCheck();
         });

         // Removes placeholder for new call general Notes.
         noteBox.on('focus', function(event) {
            event.preventDefault();
            if ($(this).val() == "General Notes...") {
               $(this).val("");
            }
         });

         addyBookLink.click(function() {
            viewNewCall.hide();
            mainContent.show();
         });

      })();

})();

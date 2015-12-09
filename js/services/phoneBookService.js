var contactService = (function() {

  window.requestParam = 'contacts';
  var requestUrl = 'api/index.php/';
  var templates = templateManager;

  var publicAPI = {

    get_contacts : function(type) {
      var url = type ? requestUrl + 'contacts/' + type : requestUrl + 'contacts';
      $.getJSON(url, templates.displayContacts);
   },  // END: get_contacts method

    get_companies : function() {
      $.getJSON(requestUrl + 'company/names', publicAPI.display);
   },

    get_contact : function(id) {
      $.getJSON(requestUrl + 'contact/' + id, function(contact) {

            if(contact.length == 1) {
               $results = $('#mainContent');

               $.each(contact, function(i, rep) {
                  contactInfo = '<p>' + rep.first_name + ' ' + rep.last_name + '</p>';
               });
               $results.append(contactInfo);
            }
      });
   },  // END: get_contact method

   contacts_like : function(param) {
     $.getJSON(requestUrl + 'like/contacts/' + param ,
         templates.displayContacts);
   },

   companies_like : function(stringPartial) {
      $.getJSON(requestUrl + 'like/company/' + stringPartial,
         templates.displayCompanies);
   },

   quick_search : function(param) {
      if(requestParam === 'contacts') {
         publicAPI.contacts_like(param);
      } else {
         publicAPI.companies_like(param);
      }
   },

   display : function(data) {
     var results = $('#results');

     if(data.length >= 1) {

      results.html("");
      var list = '';
        $.each(data, function(i, val) {
           results.append(val['first_name'] + " " + val['last_name'] + "<br />");
           console.log(val);
        });
      } else {
        results.html("");
        results.append("<p>No Matches...<p>");
      }
    }
  };

  return publicAPI;

})();

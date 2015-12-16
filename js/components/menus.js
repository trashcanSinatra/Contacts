(function() {

var searchInput = $('#addressBook');

$('#toggleCompany').mousedown(function() {

   var color = $(this).css("background-color");
   var $person = $('#togglePerson');

   if(color == 'rgb(210, 224, 24)') {

      return false;

   } else {

      $(this).css({

         "background-color" : "rgb(210, 224, 24)",
         "color" : "#49240a",
         "border-color" : "rgb(210, 224, 24)",
         "border-width" : "2px",
         "box-shadow" : "3px 3px grey"

      });
      $person.css({

         "background-color" : "white",
         "color" : "#FE8B05",
         "border-color" : "rgb(210, 224, 24)",
         "border-width" : "1px",
         "box-shadow" : "3px 3px 3px grey"
      });

      searchInput.attr('placeholder', 'Search Companies...');

      // Define api search parameters for main page.
      requestParam = 'company/names';
   }
});


$('#togglePerson').mousedown(function() {

   var color = $(this).css("background-color");
   var $company = $('#toggleCompany');

   if(color == 'rgb(210, 224, 24)') {

      return false;

   } else {

      $(this).css({
         "background-color" : "rgb(210, 224, 24)",
         "color" : "#49240a",
         "border-color" : "rgb(210, 224, 24)",
         "border-width" : "2px",
         "box-shadow" : "3px 3px grey"
      });
      $company.css({
         "background-color" : "white",
         "color" : "#FE8B05",
         "border-color" : "rgb(210, 224, 24)",
         "border-width" : "1px",
         "box-shadow" : "3px 3px 3px grey"
      });

      searchInput.attr('placeholder', 'Search Contacts...');

      // Define api search parameters for main page.
      requestParam = 'contacts';
   }
});


window.twinkleBtns = function(c, btn) {

   setTimeout(function(c, btn){

      if(btn.style.color == '') {

         btn.style.color = 'white';
      }

      c = c || 0;
      c++;

      if(c <= 3) {

       if(btn.style.color == 'white')
       {
          btn.style.borderColor = '#bde5c9';
          btn.style.backgroundColor = '#d2e018';
          btn.style.color = '#49240a';

       } else {

          btn.style.borderColor = '#d2e018';
          btn.style.backgroundColor = '#76CA8F';
          btn.style.color = 'white';
       }
         twinkleBtns(c, btn);
      }
   },135,c, btn);
}



// Define variables for menu divs, swipe regions.

    var menuLeft = document.getElementById( 'cbp-spmenu-s1' );
    var menuRight = document.getElementById( 'cbp-spmenu-s2' );
    var showLeft = document.getElementById( 'showLeft' );
    var showRight = document.getElementById( 'showRight' );
    var body = document.body;
    var LeftMenu = document.getElementById('leftPane');
    var RightMenu = document.getElementById('rightPane');
    var whole = document.getElementById('wholesale');
    var cont = document.getElementById('contractor');
    var eng = document.getElementById('engineer');
    var newContact = document.getElementById('newContact');
    var salesCalls = document.getElementById('salesCalls');
    var bookLink = document.getElementById('bookLink');
    var newCall = document.getElementById('newCallLink');
    var newTopic = document.getElementById('addTopic');
    var newMtg = document.getElementById('addMeeting');

// Handle clicks for showing menue on top nav buttons.

showLeft.onclick = function() {
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toleft' );
   classie.toggle( menuRight, 'cbp-spmenu-open' );
   disableOther( 'showLeft' );
};

showRight.onclick = function() {
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

newTopic.onclick = function() {
   twinkleBtns(0, showLeft);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toleft' );
   classie.toggle( menuRight, 'cbp-spmenu-open' );
   disableOther( 'showLeft' );
};

newMtg.onclick = function() {
   twinkleBtns(0, showLeft);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toleft' );
   classie.toggle( menuRight, 'cbp-spmenu-open' );
   disableOther( 'showLeft' );
};

whole.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

eng.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

newCall.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

salesCalls.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

bookLink.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

newContact.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};

cont.onclick = function() {
   twinkleBtns(0, showRight);
   classie.toggle( this, 'active' );
   classie.toggle( body, 'cbp-spmenu-push-toright' );
   classie.toggle( menuLeft, 'cbp-spmenu-open' );
   disableOther( 'showRight' );
};
// Disable other button

function disableOther( button ) {
   if( button !== 'showLeft' ) {
     classie.toggle( showLeft, 'disabled' );
   }
   if( button !== 'showRight' ) {
     classie.toggle( showRight, 'disabled' );
   }
}
})();

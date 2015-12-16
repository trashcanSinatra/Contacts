<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>pc501</title>
		<meta name="description" content="pc501 - Aspinall Contacts" />
		<meta name="author" content="Codrops" />
		
		<link rel="stylesheet" type="text/css" href="css/slide.css" />
		<link rel="stylesheet" type="text/css" href="css/modal.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/jquery-ui.theme.css">
    	<link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive'rel='stylesheet'type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	 	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300' rel='stylesheet' type='text/css'>
	 	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100' rel='stylesheet' type='text/css'>

	   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	   <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>
<!-- SLIDE MENUS -->

	<body class="cbp-spmenu-push">
	<div id="container">
	  <div id="leftPane">
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<a id="bookLink" rel="external" href="">Address Book</a>
			<a id="wholesale" rel="external" href="">Wholesalers</a>
			<a id="contractor" rel="external" href="">Contractors</a>
			<a id="engineer" rel="external" href="">Engineers</a>
			<a id="newContact" rel="external" href="">New Contact</a>
			<a id="salesCalls" rel="external" href="">Sales Calls</a>
			<a id="newCallLink" rel="external" href="">New Call</a>
		</nav>
	</div>
	<div id="rightPane">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<a id="addTopic" rel="external"  class="md-trigger" data-modal="newTopic_mdl" href="">New Topic</a>
		<a id="addMeeting" rel="external" class="md-trigger" data-modal="newMtg_mdl"  href="">New Meeting</a>
		</div>
	</div>

<!-- SLIDE MENUS: END -->

	<div id="headerBackground" class="header-cont">
	<header>
		<ul>
		  <div id="pc501"><span style="color:#FE8B05;">rep</span>Lynk</div>

		   <div id="headerBtnLeft">
		   <button id="showLeft" style="backgroundColor:#76CA8F;"
		   	onmousedown="twinkleBtns(0, this)">
			<i class="fa fa-flask" style="font-size:20px;"></i>
		   </button>
		   </div>

		   <div id="headerBtnRight">
		   <button id="showRight" style="backgroundColor:#76CA8F;"
		   	onmousedown="twinkleBtns(0, this)">
		   <i class="fa fa-bars"></i>
	   	  </button>
		   </div>
	  </ul>
	</header>
   </div>

<!-- New Sales Call Modal Windows -->

	<div class="md-modal md-effect-2" id="newTopic_mdl">
		<div class="md-content">
			<h3>Add Topic</h3>
			<div>
				<p>This is a modal window. You can do the following things with it:</p>
				<ul>
					<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
					<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
					<li><strong>Close:</strong> click on the button below to close the modal.</li>
				</ul>
				<button class="md-close">Cancel</button>
			</div>
		</div>
	</div>


	<div class="md-modal md-effect-2" id="newMtg_mdl">
		<div class="md-content">
			<h3>Add Meeting</h3>
			<div>
				<p>This is a modal window. You can do the following things with it:</p>
				<ul>
					<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
					<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
					<li><strong>Close:</strong> click on the button below to close the modal.</li>
				</ul>
				<button class="md-close">Cancel</button>
			</div>
		</div>
	</div>

	<div id="mainContent">
		<div id="filterToggle">
			<button id="toggleCompany" class="toggleBtns" >
			<i class="fa fa-industry"></i>
		   </button>

			<button id="togglePerson" class="toggleBtns">
			<i class="fa fa-users"></i>
		   </button>
		</div>

		<div id="mainSearch">
		<input id="addressBook" type="text" placeholder="Search Contacts..." />
		</div>

		<div id="results"></div>
	</div> <!-- End Main Content -->


	<div id="view_newCall">
		<h2 id="newCallHeader"> New Sales Call </h2>
		<div>
	   	<input type="text" id="datepicker" placeholder="Select Date...">
		</div>
		<br />
		<div>
			<textarea id="notes_box">General Notes...</textarea>
		</div>
		<div id="selector_div">
			<button><span>0</span>Topics<i class="fa fa-chevron-down"></i></button>
			<br />
			<button><span>0</span>Meetings<i class="fa fa-chevron-down"></i></button>
		</div>
	</div>


	</div>  <!-- End Container -->

<script src="js/vendor/classie.js"></script>
<script src="js/templates/phoneBookTemplate.js"></script>
<script src="js/services/phoneBookService.js"></script>
<script src="js/components/menus.js"></script>
<script src="js/components/menuNav.js"></script>
<script src="js/app.js"></script>

<script src="js/vendor/modalEffects.js"></script>

<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
	// this is important for IEs
	var polyfilter_scriptpath = '/js/';
</script>
<script src="js/vendor/cssParser.js"></script>
<script src="js/vendor/css-filters-polyfill.js"></script>

</div>  <!-- End Container -->
</body>
</html>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>pc501</title>
		<meta name="description" content="pc501 - Aspinall Contacts" />
		<meta name="author" content="Codrops" />

		<!-- <link rel="stylesheet" type="text/css" href="css/hover-min.css" /> -->
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/newCall.css" />
		<link rel="stylesheet" type="text/css" href="css/slide.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive'rel='stylesheet'type='text/css'>
    	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	 	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:300' rel='stylesheet' type='text/css'>
	 	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,100' rel='stylesheet' type='text/css'>

	   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	   <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	</head>
<!-- SLIDE MENUS -->

	<body class="cbp-spmenu-push">
	<div id="container">
	  <div id="leftPane">
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<a id="addyBookLink" href="#">Address Book</a>
			<a href="#">Wholesalers</a>
			<a href="#">Contractors</a>
			<a href="#">Engineers</a>
			<a href="#">New Contact</a>
			<a href="#">Sales Calls</a>
			<a id="newCallLnk" href="#">New Call</a>
		</nav>
	</div>
	<div id="rightPane">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<h3>Contacts</h3>
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
			<i class="fa fa-search"></i>
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
		<p>Date: <input type="text" id="datepicker"></p>
	</div>


	</div>  <!-- End Container -->


<script src="js/vendor/classie.js"></script>
<script src="js/components/menus.js"></script>
<script src="js/components/menuNav.js"></script>
<script src="js/templates/phoneBookTemplate.js"></script>
<script src="js/services/phoneBookService.js"></script>
<script src="js/app.js"></script>

</div>  <!-- End Container -->
</body>
</html>

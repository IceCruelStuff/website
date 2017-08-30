<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="This is a tool to help you build plugins for PocketMine." name="description">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
	<title>PocketMine Tools</title>
	<meta content="yes" name="mobile-web-app-capable">
<meta name="propeller" content="f3c556c511d0d893b7cfc918fba19ee2" />
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<meta content="Plugin Making Tools" name="apple-mobile-web-app-title">
	<meta content="images/logo.png" name="msapplication-TileImage">
	<meta content="#3372DF" name="msapplication-TileColor">
	<link href="images/logo.png" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en"
	 rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<link href="https://archive.org/download/material-design-style-css/styles.css" rel="stylesheet">
<style>
	      #view-source {
	        position: fixed;
	        display: block;
	        right: 0;
	        bottom: 0;
	        margin-right: 40px;
	        margin-bottom: 40px;
	        z-index: 900;
	      }
	</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">PocketMine Tools</span>
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<nav class="demo-navigation mdl-navigation mdl-color--cyan mdl-color-text--white">
				<!-- Compile phar page -->
				<a class="mdl-navigation__link mdl-color-text--white" target="content" href="pages/zip2phar/"><i class="mdl-color-text--white material-icons" role=
				"presentation">build</i>Create PHAR</a>
				<!-- zip2phar page -->
				<a class="mdl-navigation__link mdl-color-text--white" target="content" href="pages/phar2zip/"><i class=
				"mdl-color-text--white material-icons" role="presentation">folder</i>Extract PHAR</a> 
				<!-- Plugin creator page -->
				<a target="content" class="mdl-navigation__link mdl-color-text--white"
				 href="pages/create.html"><i class="mdl-color-text--white material-icons" role=
				"presentation">brush</i>Plugin Creator (pending)</a>
				<!-- Plugin creator page -->
				<a target="content" class="mdl-navigation__link mdl-color-text--white"
				 href="pages/apiUpdator/"><i class="mdl-color-text--white material-icons" role=
				"presentation">settings</i>API Updater</a>
				<!-- Desktop app download -->
				<a target="content" class="mdl-navigation__link mdl-color-text--white"
				href="pages/desktop.html"><i class="mdl-color-text--white material-icons" role=
			   "presentation">computer</i>Desktop apps (alpha)</a>
				<a target="content" class="mdl-navigation__link mdl-color-text--white"
				 href="pages/PSM.html"><i class="mdl-color-text--white material-icons" role=
				"presentation">new_releases</i>[NEW] PSM</a>

				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link mdl-color-text--white" href="https://en.ad5001.eu"><i class="mdl-color-text--white material-icons" role="presentation">description</i>
					<span>View en.ad5001.eu</span>
				</a>
				<a class="mdl-navigation__link mdl-color-text--white" href="https://twitter.com/NFGamerMC"><i class="mdl-color-text--white material-icons" role="presentation">favorite</i>
					<span>Follow NFGamerMC</span>
				</a>
				<a class="mdl-navigation__link mdl-color-text--white" href="https://twitter.com/PocketMineTools"><i class="mdl-color-text--white material-icons" role="presentation">help_outline</i>
					<span>Support (new)</span>
				</a>
			</nav>
		</div>
		<main class="mdl-layout__content mdl-color--grey-100">
				<div class="mdl-grid demo-content">
					<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
					<iframe name="content" id="content" src="pages/home.html"></iframe>
					</div>
				</div>
			</div>
		</main>
	</div>
	<svg style="position: fixed; left: -1000px; height: -1000px;" version="1.1" xmlns="http://www.w3.org/2000/svg">
		<defs>
			<g id="piechart"></g>
		</defs>
	</svg>
	<svg style="position: fixed; left: -1000px; height: -1000px;" version="1.1" viewbox="0 0 500 250" xmlns="http://www.w3.org/2000/svg">
		<defs>
			<g id="chart">
				<g id="Gridlines"></g>
				<g id="Numbers"></g>
				<g id="Layer_5">
					<polygon opacity="0.36" points="0,223.3 48,138.5 154.7,169 211,88.5 294.5,80.5 380,165.2 437,75.5 469.5,223.3" stroke-miterlimit="10"></polygon>
				</g>
				<g id="Layer_4">
					<polygon points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7 296.7,128 380.7,184.3 436.7,125" stroke-miterlimit="10"></polygon>
				</g>
			</g>
		</defs>
	</svg>
	<a class=
	"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white mdl-button--fab" 
	href="https://github.com/pmt-mcpe-fun/WebApp" id="view-source" target="_blank">
		<i class="mdl-color-text--white material-icons" role= "presentation">code</i>
	</a>
	<script src="https://code.getmdl.io/1.3.0/material.min.js">

	</script>
	<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
</body>

</html>

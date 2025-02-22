<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php _($title);?></title>
	<link href="https://cdn.bootcdn.net/ajax/libs/mdui/1.0.2/css/mdui.min.css" rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/mdui/1.0.2/js/mdui.min.js"></script>
	<style>
		.mdui-appbar .mdui-toolbar{
			/*height:56px;*/
			font-size: 16px;
		}
		.mdui-toolbar>*{
			padding: 0 16px;
			margin: 0 2px;
			opacity:0.5;
		}
		.mdui-toolbar>.mdui-typo-headline{
			padding: 0 16px 0 0;
		}
		.mdui-toolbar>i{
			padding: 0;
		}
		.mdui-toolbar>a:hover,a.mdui-typo-headline,a.active{
			opacity:1;
		}
		.mdui-container{
			max-width:980px;
		}
	</style>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="mdui-appbar mdui-color-theme">
		<div class="mdui-toolbar mdui-container">
			<a href="/" class="mdui-typo-headline">oneindex</a>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="javascript:;" >admin</a>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="javascript:;" class="active">setpass</a>
			<div class="mdui-toolbar-spacer"></div>
			<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>
		</div>
	</header>
	
	<div class="mdui-container">
    	<?php view::section('content');?>
  	</div>

	
</body>
</html>
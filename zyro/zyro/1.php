<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Home" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180222160547" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180329084725" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1522559989" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1522559989" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = '';</script>	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb-menu"><ul class="hmenu"></ul><div class="clearfix"></div></div><div id="wb_element_instance1" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><span class="wb_tr_ok">Image Search</span></h1>
</div><div id="wb_element_instance3" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle" style="text-align: center;"><span class="wb_tr_ok">Our website is coming soon</span></h5><br><form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form></br></div><div id="wb_element_instance4" class="wb_element" style=" line-height: normal;"><h3 class="wb-stl-heading3"><span style="color:#ffffff;">This text should be replaced with information about you and your business This text should be replaced with information about you and your business This text should be replaced with information about you and your...</span></h3></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance5" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance6" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle" style="text-align: center;">65</h5></div><div id="wb_element_instance7" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance8" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span class="wb_tr_ok">Days</span></h2></div><div id="wb_element_instance9" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance10" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle" style="text-align: center;">9</h5></div><div id="wb_element_instance11" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span class="wb_tr_ok">Hours</span></h2></div><div id="wb_element_instance12" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance13" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance14" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance15" class="wb_element wb-elm-orient-horizontal"><div class="wb-elm-line"></div></div><div id="wb_element_instance19" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance19");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance19").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 210px;"><div id="wb_element_instance16" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span class="wb_tr_ok">Contact us</span></h2></div><div id="wb_element_instance17" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span class="wb-stl-highlight"><strong><span class="wb_tr_ok">Address:</span></strong> </span></p>

<p class="wb-stl-normal"> </p>

<p class="wb-stl-normal"><span class="wb-stl-highlight"><span class="wb_tr_ok">New York</span></span></p>

<p class="wb-stl-normal"><span class="wb-stl-highlight"><span class="wb_tr_ok">NY 10118</span></span></p>

<p class="wb-stl-normal"><span class="wb-stl-highlight"><span class="wb_tr_ok">USA</span></span></p>
</div><div id="wb_element_instance18" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><strong><span class="wb-stl-highlight"><span class="wb_tr_ok">Phone:</span></span></strong></p>

<p class="wb-stl-normal"> </p>
</div><div id="wb_element_instance20" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>

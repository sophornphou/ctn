<?php
require('vertex/cms_core_functions.php');
s5_restricted_access_call();
/*
-----------------------------------------
Helion - Shape 5 Club Design
-----------------------------------------
Site:      shape5.com
Email:     contact@shape5.com
@license:  Copyrighted Commercial Software
@copyright (C) 2013 Shape 5 LLC

*/

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" <?php s5_language_call(); ?>>
<head>
<?php s5_head_call(); ?>
<?php
require("vertex/parameters.php");
require("vertex/general_functions.php");
require("vertex/module_calcs.php");
require("vertex/includes/vertex_includes_header.php");
?>

<?php if ($browser == "ie7" || $browser == "ie8") { ?>
<link href="<?php echo $s5_directory_path ?>/css/IECSS3.css" rel="stylesheet" type="text/css"  />
<?php } ?>

<?php if(($s5_fonts_highlight != "Arial") && ($s5_fonts_highlight != "Helvetica") && ($s5_fonts_highlight != "Sans-Serif")) { ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo str_replace(" ","%20",$s5_fonts_highlight); if ($s5_fonts_highlight_style != "") { echo ":".$s5_fonts_highlight_style; } ?>" />
<?php } ?>

<?php if ($s5_light_dark == "light") { ?>
<link href="<?php echo $s5_directory_path ?>/css/light.css" rel="stylesheet" type="text/css"  />
<?php } ?>

<style type="text/css"> 
body, .inputbox {font-family: '<?php echo $s5_fonts;?>',Helvetica,Arial,Sans-Serif ;} 

.s5_mod_h3, .inputbox, .registration input, .login input, .contact-form input, #jform_contact_message, #mod-search-searchword, input, textarea, .s5_is_display h3, #s5_drop_down_text_inner, .btn, label, #s5_register, #s5_login, .s5_sub_a_span, .highlight_font, #s5_breadcrumb_wrap .showHere, .s5_am_innermenu, .jdGallery .slideInfoZone p, .article-info, p.readmore a, .readon, .s5_mod_h3, .s5_page_heading, h1, h2, h3, h4, h5, #s5_nav li a, .button, .btn-primary, .popular_item a, #s5navfs li, #s5_drop_down_text_inner, .pagenav a, .jdGallery .slideInfoZone h2, .middle_top_image_wrap h4, .highlight_font {
font-family: <?php echo $s5_fonts_highlight ?>;
font-weight:400;
}

#s5_nav li:hover, #s5_nav li.mainMenuParentBtnFocused, #s5_nav li.active, .button, button, #subMenusContainer div ul, .module_round_box-highlight1, #s5_login, .s5_ts_not_active a {
background:#<?php echo $s5_highlight1; ?> !important;
}

.module_round_box-highlight1 .s5_mod_h3_outer {
background:#<?php echo change_Color($s5_highlight1,'+25'); ?>  !important;
}

.module_round_box-highlight2, button:hover, .button:hover, .btn-primary:hover {
background:#<?php echo $s5_highlight2; ?> !important;
}

.module_round_box-highlight2 .s5_mod_h3_outer {
background:#<?php echo change_Color($s5_highlight2,'+20'); ?>  !important;
}

.module_round_box-highlight3 {
background:#<?php echo change_Color($s5_highlight3,'+25'); ?> !important;
}

.module_round_box-highlight4 {
background:#<?php echo $s5_highlight4; ?> !important;
}

.module_round_box-highlight4 .s5_mod_h3_outer {
background:#<?php echo change_Color($s5_highlight4,'+20'); ?>  !important;
}

.module_round_box-highlight3 .s5_mod_h3_outer {
background:#<?php echo change_Color($s5_highlight3,'+40'); ?>  !important;
}

#subMenusContainer div.s5_sub_wrap_lower ul, #subMenusContainer div.s5_sub_wrap_lower_rtl ul {
border:solid 1px #<?php echo change_Color($s5_highlight1,'-15'); ?> !important;
}

a, .module_round_box_outer ul li a:hover, .dropdown-menu li > a:hover, .dropdown-menu li > a:focus, .dropdown-submenu:hover > a, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-list > .active > a, .nav-list > .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover, .btn-group.open .btn-primary.dropdown-toggle, .btn-primary, .item-page .dropdown-menu li > a:hover, .blog .dropdown-menu li > a:hover, .item .dropdown-menu li > a:hover {
color:#<?php echo $s5_highlight1; ?>;
}

#s5box_login ul li a:hover, .btn-link {
color:#<?php echo $s5_highlight1; ?> !important;
}

.module_round_box-underline1 .s5_mod_h3_outer {
border-bottom:solid 1px #<?php echo $s5_highlight1; ?>;
}

.module_round_box-underline2 .s5_mod_h3_outer {
border-bottom:solid 1px #<?php echo $s5_highlight2; ?>;
}

.module_round_box-underline3 .s5_mod_h3_outer {
border-bottom:solid 1px #<?php echo $s5_highlight3; ?>;
}

.module_round_box-underline4 .s5_mod_h3_outer {
border-bottom:solid 1px #<?php echo $s5_highlight4; ?>;
}

.highlight1_text {
color:#<?php echo $s5_highlight1; ?>;
}

.highlight2_text {
color:#<?php echo $s5_highlight2; ?>;
}

.highlight3_text {
color:#<?php echo $s5_highlight3; ?>;
}

.highlight4_text {
color:#<?php echo $s5_highlight4; ?>;
}

p.readmore a, .readon {
background:#<?php echo $s5_highlight4; ?> url(<?php echo $s5_directory_path ?>/images/s5_readmore.png) no-repeat center right !important;
}

p.readmore a:hover, .readon:hover {
background:#<?php echo change_Color($s5_highlight4,'+25'); ?> url(<?php echo $s5_directory_path ?>/images/s5_readmore.png) no-repeat center right !important;
}

.pagenav a {
background:#<?php echo $s5_highlight4; ?> !important;
}

.pagenav a:hover {
background:#<?php echo change_Color($s5_highlight4,'+25'); ?> !important;
}

ul.menu li.current a, #s5_accordion_menu #current a, #s5_accordion_menu a:hover {
color:#<?php echo $s5_highlight1; ?> !important;
}

.jdGallery .slideInfoZone h2<?php if ($s5_light_dark == "dark") { ?>, .accordion_text h4, .image_slide_wrap h4<?php } ?> {
color:#<?php echo $s5_highlight3; ?> !important;
}

#s5_nav li {
background:#<?php echo $s5_highlight2; ?> !important;
border-right:solid 1px #<?php echo change_Color($s5_highlight2,'-15'); ?> !important;
}

.jdGallery .slideInfoZone, #myGallery {
background:#<?php echo $s5_highlight2; ?> !important;
}

.s5_va_active, #s5_accordion_menu h3.s5_am_open .s5_accordion_menu_left {
border-left:solid 1px #<?php echo $s5_highlight1; ?> !important;
}

<?php if ($s5_h3_highlight == "yes") { ?>
.s5_h3_first {
color:#<?php echo $s5_highlight1; ?>;
}
<?php } ?>

<?php if ($s5_fixed_header == "yes") { ?>
#s5_header_area1 {
/*position:fixed;*/
z-index:2;
top:0px;
}
#s5_menu_spacer {
display:block;
}
#subMenusContainer {
position:fixed !important;
}
<?php } ?>

<?php if ($s5_background_lines == "no") { ?>
#s5_body_padding {
background:none;
}
<?php } ?>

<?php if ($s5_logo_location == "below") { ?>
@media screen and (max-width: 750px){
#s5_header_area1 {
display:none;
}
#s5_logo, #s5_logo_module, #s5_pos_banner {
float:none;

}
#s5_logo{margin-top:-18px;}
}
<?php } ?>

<?php if ($s5_header_bar == "no") { ?>
#s5_header_area1 {
background:none !important;
-webkit-box-shadow: none !important; 
box-shadow: none !important; 
-moz-box-shadow: none !important; 
border:none !important;
}
body {
background-position:0px 0px;
}
#s5_header_area_inner {
/*-moz-box-shadow:0 0px 50px rgba(0, 0, 0, 0.55);
-webkit-box-shadow: 0 0px 50px rgba(0, 0, 0, 0.55);
box-shadow:0 0px 50px rgba(0, 0, 0, 0.55);*/
}
<?php } ?>

<?php if ($s5_uppercase == "yes") { ?>
.pagenav a, #s5_nav li, .s5_mod_h3_outer, #s5_login, #s5_register, .middle_top_image_wrap h4, p.readmore a, .readon, button, .button, .btn, label, fieldset, .uppercase {
text-transform:uppercase;
}
<?php } ?>

<?php if ($s5_small_menu == "yes") { ?>
.S5_parent_subtext {
display:none;
}
<?php } ?>

<?php if ($s5_small_menu == "no") { ?>
#s5_nav li {
padding-top:10px;
height:47px;
}
#s5_nav li a {
padding-bottom:2px;
}
<?php } ?>

<?php if ($s5_pos_custom_2 == "published") { ?>
#s5_component_call_wrap {
width:<?php echo 100 - $s5_component_inset_width; ?>%;
float:left;
}
#s5_pos_custom_2 {
width:<?php echo $s5_component_inset_width; ?>%;
}
<?php } ?>

<?php if ($s5_pos_middle_top_1 == "unpublished" && $s5_pos_middle_top_2 == "unpublished" && $s5_pos_middle_top_3 == "unpublished" && $s5_pos_middle_top_4 == "unpublished" && $s5_pos_middle_top_5 == "unpublished" && $s5_pos_middle_top_6 == "unpublished") { ?>
#s5_social_login_wrap {
padding-bottom:0px;
}
#s5_below_custom_1_wrap {
background:none;
}
<?php } ?>

<?php if ($browser == "ie7" || $browser == "ie8" || $browser == "ie9") { ?>
.s5_lr_tab_inner {writing-mode: bt-rl;filter: flipV flipH;}
<?php } ?>

<?php if($s5_thirdparty == "enabled") { ?>
/* k2 stuff */
div.itemHeader h2.itemTitle, div.catItemHeader h3.catItemTitle, h3.userItemTitle a, #comments-form p, #comments-report-form p, #comments-form span, #comments-form .counter, #comments .comment-author, #comments .author-homepage,
#comments-form p, #comments-form #comments-form-buttons, #comments-form #comments-form-error, #comments-form #comments-form-captcha-holder {font-family: '<?php echo $s5_fonts;?>',Helvetica,Arial,Sans-Serif ;} 
<?php } ?>	
.s5_wrap{width:<?php echo $s5_body_width; echo $s5_fixed_fluid ?>;}	
</style>
</head>

<body id="s5_body">

<div id="s5_scrolltotop"></div>

<!-- Top Vertex Calls -->
<?php require("vertex/includes/vertex_includes_top.php"); ?>

<!-- Body Padding Div Used For Responsive Spacing -->		
<div id="s5_body_padding">

	<div id="s5_menu_spacer"></div>

	<!-- Header -->	
	<div style="width:86%; height:28px;margin: auto; ">
			 <span style="margin-left:4px; float:right; padding: 3px">
			 	<a href="http://localhost/ctn/index.php/kh/">
			                 <img src="<?php echo htmlspecialchars('templates/helion/images/km.gif'); ?>" style="width:32px;" title="Khmer" alt=""/></span></a>
							 <span style="margin-left:4px; float:right; padding: 3px">
							 <a href="http://localhost/ctn/index.php/en/">
                            		<img src="<?php echo htmlspecialchars('templates/helion/images/en.gif'); ?>" style="width:35px; " title="English" alt="" /></span>
                            		</a>
			
		</div>		
		<div id="s5_header_area1">		
		<div id="s5_header_area2">	
		
		<div id="s5_header_area_inner" class="s5_wrap">					
			<div id="s5_header_wrap">
				<?php if ($s5_logo_location == "top") { ?>
					<?php if($s5_pos_logo == "published") { ?>
						<div id="s5_logo_module">
							<?php s5_module_call('logo','notitle'); ?>
						</div>	
					<?php } else { ?>
						<img alt="logo" src="<?php echo $s5_directory_path ?>/images/s5_logo.png" id="s5_logo" onclick="window.document.location.href='<?php echo $LiveSiteUrl ?>'" />
					<?php } ?>
				<?php } ?>
				<?php if ($s5_show_menu == "show") { ?>
					<div id="s5_menu_wrap">
						<?php include("vertex/s5flex_menu/default.php"); ?>
					</div>
				<?php } ?>
				<?php if ($s5_pos_search == "published") { ?>
					<div id="s5_search_wrap">
						<?php s5_module_call('search','notitle'); ?>
					</div>
				<?php } ?>
				<div style="clear:both; height:0px"></div>			
			</div>
		</div>
		</div>
		</div>
	<!-- End Header -->	
	
	<?php if ($s5_logo_location == "below" || $s5_pos_banner == "published") { ?>
		<div id="s5_logo_banner_row" class="s5_wrap">
			<?php if ($s5_logo_location == "below") { ?>
				<?php if($s5_pos_logo == "published") { ?>
					<div id="s5_logo_module">
						<?php s5_module_call('logo','notitle'); ?>
					</div>	
				<?php } else { ?>
					<img alt="logo" src="<?php echo $s5_directory_path ?>/images/s5_logo.png" id="s5_logo" onclick="window.document.location.href='<?php echo $LiveSiteUrl ?>'" />
				<?php } ?>
			<?php } ?>
			<?php if ($s5_pos_banner == "published") { ?>
				<div id="s5_pos_banner">
					<?php s5_module_call('banner','notitle'); ?>
				</div>
			<?php } ?>
			<div style="clear:both; height:0px"></div>	
		</div>
	<?php } ?>
	
	<?php if ($s5_pos_top_row1_1 == "published" || $s5_pos_top_row1_2 == "published" || $s5_pos_top_row1_3 == "published" || $s5_pos_top_row1_4 == "published" || $s5_pos_top_row1_5 == "published" || $s5_pos_top_row1_6 == "published" || $s5_pos_top_row2_1 == "published" || $s5_pos_top_row2_2 == "published" || $s5_pos_top_row2_3 == "published" || $s5_pos_top_row2_4 == "published" || $s5_pos_top_row2_5 == "published" || $s5_pos_top_row2_6 == "published" || $s5_pos_top_row3_1 == "published" || $s5_pos_top_row3_2 == "published" || $s5_pos_top_row3_3 == "published" || $s5_pos_top_row3_4 == "published" || $s5_pos_top_row3_5 == "published" || $s5_pos_top_row3_6 == "published") { ?>
	
	<div id="s5_top_body_section" class="s5_body_section s5_wrap">
	<div id="s5_top_body_section_inner">
	
	<?php } ?>
	
	
	<!-- Top Row1 -->	
		<?php if ($s5_pos_top_row1_1 == "published" || $s5_pos_top_row1_2 == "published" || $s5_pos_top_row1_3 == "published" || $s5_pos_top_row1_4 == "published" || $s5_pos_top_row1_5 == "published" || $s5_pos_top_row1_6 == "published") { ?>
			<div id="s5_top_row1_area1">
			<div id="s5_top_row1_area2">
			<div id="s5_top_row1_area_inner">

				<div id="s5_top_row1_wrap">
					<div id="s5_top_row1">
					<div id="s5_top_row1_inner">
					
						<?php if ($s5_pos_top_row1_1 == "published") { ?>
							<div id="s5_pos_top_row1_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_1_width ?>%">
								<?php s5_module_call('top_row1_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_2 == "published") { ?>
							<div id="s5_pos_top_row1_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_2_width ?>%">
								<?php s5_module_call('top_row1_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_3 == "published") { ?>
							<div id="s5_pos_top_row1_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_3_width ?>%">
								<?php s5_module_call('top_row1_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_4 == "published") { ?>
							<div id="s5_pos_top_row1_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_4_width ?>%">
								<?php s5_module_call('top_row1_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_5 == "published") { ?>
							<div id="s5_pos_top_row1_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_5_width ?>%">
								<?php s5_module_call('top_row1_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_top_row1_6 == "published") { ?>
							<div id="s5_pos_top_row1_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row1_6_width ?>%">
								<?php s5_module_call('top_row1_6','round_box'); ?>
							</div>
						<?php } ?>
						
						<div style="clear:both; height:0px"></div>

					</div>
					</div>
				</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Top Row1 -->	
		
		
		
	<!-- Top Row2 -->	
		<?php if ($s5_pos_top_row2_1 == "published" || $s5_pos_top_row2_2 == "published" || $s5_pos_top_row2_3 == "published" || $s5_pos_top_row2_4 == "published" || $s5_pos_top_row2_5 == "published" || $s5_pos_top_row2_6 == "published") { ?>
		<div id="s5_top_row2_area1">
		<div id="s5_top_row2_area2">
		<div id="s5_top_row2_area_inner">			
		
			<div id="s5_top_row2_wrap">
				<div id="s5_top_row2">
				<div id="s5_top_row2_inner">					
					<?php if ($s5_pos_top_row2_1 == "published") { ?>
						<div id="s5_pos_top_row2_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_1_width ?>%">
							<?php s5_module_call('top_row2_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_2 == "published") { ?>
						<div id="s5_pos_top_row2_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_2_width ?>%">
							<?php s5_module_call('top_row2_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_3 == "published") { ?>
						<div id="s5_pos_top_row2_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_3_width ?>%">
							<?php s5_module_call('top_row2_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_4 == "published") { ?>
						<div id="s5_pos_top_row2_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_4_width ?>%">
							<?php s5_module_call('top_row2_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_5 == "published") { ?>
						<div id="s5_pos_top_row2_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_5_width ?>%">
							<?php s5_module_call('top_row2_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row2_6 == "published") { ?>
						<div id="s5_pos_top_row2_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row2_6_width ?>%">
							<?php s5_module_call('top_row2_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>
				</div>
				</div>	
			</div>	
				
		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Top Row2 -->
	
	
	
	<!-- Top Row3 -->	
		<?php if ($s5_pos_top_row3_1 == "published" || $s5_pos_top_row3_2 == "published" || $s5_pos_top_row3_3 == "published" || $s5_pos_top_row3_4 == "published" || $s5_pos_top_row3_5 == "published" || $s5_pos_top_row3_6 == "published") { ?>
		<div id="s5_top_row3_area1">	
		<div id="s5_top_row3_area2">
		<div id="s5_top_row3_area_inner">
		
			<div id="s5_top_row3_wrap">
				<div id="s5_top_row3">
				<div id="s5_top_row3_inner">
				
					<?php if ($s5_pos_top_row3_1 == "published") { ?>
						<div id="s5_pos_top_row3_1" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_1_width ?>%">
							<?php s5_module_call('top_row3_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_2 == "published") { ?>
						<div id="s5_pos_top_row3_2" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_2_width ?>%">
							<?php s5_module_call('top_row3_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_3 == "published") { ?>
						<div id="s5_pos_top_row3_3" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_3_width ?>%">
							<?php s5_module_call('top_row3_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_4 == "published") { ?>
						<div id="s5_pos_top_row3_4" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_4_width ?>%">
							<?php s5_module_call('top_row3_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_5 == "published") { ?>
						<div id="s5_pos_top_row3_5" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_5_width ?>%">
							<?php s5_module_call('top_row3_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_top_row3_6 == "published") { ?>
						<div id="s5_pos_top_row3_6" class="s5_float_left" style="width:<?php echo $s5_pos_top_row3_6_width ?>%">
							<?php s5_module_call('top_row3_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>

				</div>
				</div>
			</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Top Row3 -->	
		
	<?php if ($s5_pos_top_row1_1 == "published" || $s5_pos_top_row1_2 == "published" || $s5_pos_top_row1_3 == "published" || $s5_pos_top_row1_4 == "published" || $s5_pos_top_row1_5 == "published" || $s5_pos_top_row1_6 == "published" || $s5_pos_top_row2_1 == "published" || $s5_pos_top_row2_2 == "published" || $s5_pos_top_row2_3 == "published" || $s5_pos_top_row2_4 == "published" || $s5_pos_top_row2_5 == "published" || $s5_pos_top_row2_6 == "published" || $s5_pos_top_row3_1 == "published" || $s5_pos_top_row3_2 == "published" || $s5_pos_top_row3_3 == "published" || $s5_pos_top_row3_4 == "published" || $s5_pos_top_row3_5 == "published" || $s5_pos_top_row3_6 == "published") { ?>
	
	<div style="clear:both; height:0px"></div>
	
	</div>
	</div>
	
	<?php } ?>
		
	<!-- Center area -->	
		<?php if ($s5_show_component == "yes" || $s5_pos_left_top == "published" || $s5_pos_left == "published" || $s5_pos_left_inset == "published" || $s5_pos_left_bottom == "published" || $s5_pos_right_top == "published" || $s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_bottom == "published" || $s5_pos_middle_top_1 == "published" || $s5_pos_middle_top_2 == "published" || $s5_pos_middle_top_3 == "published" || $s5_pos_middle_top_4 == "published" || $s5_pos_middle_top_5 == "published" || $s5_pos_middle_top_6 == "published" || $s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published" || $s5_pos_middle_bottom_1 == "published" || $s5_pos_middle_bottom_2 == "published" || $s5_pos_middle_bottom_3 == "published" || $s5_pos_middle_bottom_4 == "published" || $s5_pos_middle_bottom_5 == "published" || $s5_pos_middle_bottom_6 == "published" || $s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published" || $s5_pos_above_columns_1 == "published" ||  $s5_pos_above_columns_2 == "published" ||  $s5_pos_above_columns_3 == "published" ||  $s5_pos_above_columns_4 == "published" ||  $s5_pos_above_columns_5 == "published" ||  $s5_pos_above_columns_6 == "published" ||  $s5_pos_below_columns_1 == "published" ||  $s5_pos_below_columns_2 == "published" ||  $s5_pos_below_columns_3 == "published" ||  $s5_pos_below_columns_4 == "published" ||  $s5_pos_below_columns_5 == "published" ||  $s5_pos_below_columns_6 == "published") { ?>
		
		<div id="s5_middle_body_section" class="s5_body_section s5_wrap">
		<div id="s5_middle_body_section_inner">
		
		<div id="s5_center_area1">
		<div id="s5_center_area2">
		<div id="s5_center_area_inner">
		
		<!-- Above Columns Wrap -->	
			<?php if ($s5_pos_above_columns_1 == "published" || $s5_pos_above_columns_2 == "published" || $s5_pos_above_columns_3 == "published" || $s5_pos_above_columns_4 == "published" || $s5_pos_above_columns_5 == "published" || $s5_pos_above_columns_6 == "published") { ?>
			<div id="s5_above_columns_wrap1">	
			<div id="s5_above_columns_wrap2">
			<div id="s5_above_columns_inner">

					
						<?php if ($s5_pos_above_columns_1 == "published") { ?>
							<div id="s5_above_columns_1" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_1_width ?>%">
								<?php s5_module_call('above_columns_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_2 == "published") { ?>
							<div id="s5_above_columns_2" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_2_width ?>%">
								<?php s5_module_call('above_columns_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_3 == "published") { ?>
							<div id="s5_above_columns_3" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_3_width ?>%">
								<?php s5_module_call('above_columns_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_4 == "published") { ?>
							<div id="s5_above_columns_4" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_4_width ?>%">
								<?php s5_module_call('above_columns_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_5 == "published") { ?>
							<div id="s5_above_columns_5" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_5_width ?>%">
								<?php s5_module_call('above_columns_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_above_columns_6 == "published") { ?>
							<div id="s5_above_columns_6" class="s5_float_left" style="width:<?php echo $s5_pos_above_columns_6_width ?>%">
								<?php s5_module_call('above_columns_6','round_box'); ?>
							</div>
						<?php } ?>						
						<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</div>
			<?php } ?>
		<!-- End Above Columns Wrap -->			
				
			<!-- Columns wrap, contains left, right and center columns -->	
			<div id="s5_columns_wrap">
			<div id="s5_columns_wrap_inner">
				
				<div id="s5_center_column_wrap">
				<div id="s5_center_column_wrap_inner" style="margin-left:<?php echo $s5_center_column_margin_left ?>px; margin-right:<?php echo $s5_center_column_margin_right ?>px;">
				
				<?php //if ($s5_pos_custom_1 == "unpublished") { ?>
					<div id="s5_pos_custom_1">
					<div id="s5_custom_1_inner">
						<?php s5_module_call('slideshow','notitle'); ?>
					</div>
					</div>
				<?php //} ?>
					
					<?php if ($s5_login  != "" || $s5_register  != "" || $s5_rss  != "" || $s5_twitter  != "" || $s5_facebook  != "" || $s5_google  != "" || $s5_pos_middle_top_1 == "published" || $s5_pos_middle_top_2 == "published" || $s5_pos_middle_top_3 == "published" || $s5_pos_middle_top_4 == "published" || $s5_pos_middle_top_5 == "published" || $s5_pos_middle_top_6 == "published") { ?>
					
					
					<div id="s5_below_custom_1_wrap">
						
						
						
						<div id="s5_middle_top_wrap">
							
							<div id="s5_middle_top">
							<div id="s5_middle_top_inner">
							<div id="s5_pos_middle_top_1" class="s5_float_left" style="float:left; width:40%;">
							<?php s5_module_call('banner_content_left_top_right','round_box'); ?>
							
									
									</div>
							<div id="s5_pos_middle_top_2" class="s5_float_left" style="width:60%">
						<?php s5_module_call('banner_content_right_top_right','round_box'); ?>
						
									</div>
									</div>
					 <div style="clear:both; height:0px"></div>

							
							</div>
						
						</div>
						
						</div>


					<?php } ?>
					
					<?php if ($s5_show_component == "yes" || $s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published" || $s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published") { ?>
						
						<div id="s5_component_wrap">
						<div id="s5_component_wrap_inner">
						
						<?php if ($s5_pos_custom_2 == "published") { ?>
							<div id="s5_pos_custom_2">
							<div id="s5_custom_2_inner">
								<?php s5_module_call('custom_2','round_box'); ?>
							</div>
							</div>
						<?php } ?>
						
							<?php if ($s5_pos_above_body_1 == "published" || $s5_pos_above_body_2 == "published" || $s5_pos_above_body_3 == "published" || $s5_pos_above_body_4 == "published" || $s5_pos_above_body_5 == "published" || $s5_pos_above_body_6 == "published") { ?>
						
								<div id="s5_above_body_wrap">
									
									<div id="s5_above_body">
									<div id="s5_above_body_inner">
									
										<?php if ($s5_pos_above_body_1 == "published") { ?>
											<div id="s5_pos_above_body_1" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_1_width ?>%">
												<?php s5_module_call('above_body_1','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_2 == "published") { ?>
											<div id="s5_pos_above_body_2" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_2_width ?>%">
												<?php s5_module_call('above_body_2','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_3 == "published") { ?>
											<div id="s5_pos_above_body_3" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_3_width ?>%">
												<?php s5_module_call('above_body_3','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_4 == "published") { ?>
											<div id="s5_pos_above_body_4" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_4_width ?>%">
												<?php s5_module_call('above_body_4','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_5 == "published") { ?>
											<div id="s5_pos_above_body_5" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_5_width ?>%">
												<?php s5_module_call('above_body_5','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_above_body_6 == "published") { ?>
											<div id="s5_pos_above_body_6" class="s5_float_left" style="width:<?php echo $s5_pos_above_body_6_width ?>%">
												<?php s5_module_call('above_body_6','round_box'); ?>
											</div>
										<?php } ?>						
										<div style="clear:both; height:0px"></div>

									</div>
									</div>
								
								</div>

							<?php } ?>
									
							<?php if ($s5_show_component == "yes") { ?>
							
								<div id="s5_component_call_wrap">
								<div id="s5_component_call_wrap_inner">
									<?php s5_component_call(); ?>
									<div style="clear:both;height:0px"></div>
								</div>
								</div>
								
							<?php } ?>
							<div id="s5_pos_middle_top_2" class="s5_float_left" style="width:100%">
						<?php s5_module_call('banner_content_right_bottom','round_box'); ?>
							
						</div>
							<?php if ($s5_pos_below_body_1 == "published" || $s5_pos_below_body_2 == "published" || $s5_pos_below_body_3 == "published" || $s5_pos_below_body_4 == "published" || $s5_pos_below_body_5 == "published" || $s5_pos_below_body_6 == "published") { ?>
						
								<div id="s5_below_body_wrap">			
								
									<div id="s5_below_body">
									<div id="s5_below_body_inner">
									
										<?php if ($s5_pos_below_body_1 == "published") { ?>
											<div id="s5_pos_below_body_1" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_1_width ?>%">
												<?php s5_module_call('below_body_1','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_2 == "published") { ?>
											<div id="s5_pos_below_body_2" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_2_width ?>%">
												<?php s5_module_call('below_body_2','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_3 == "published") { ?>
											<div id="s5_pos_below_body_3" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_3_width ?>%">
												<?php s5_module_call('below_body_3','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_4 == "published") { ?>
											<div id="s5_pos_below_body_4" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_4_width ?>%">
												<?php s5_module_call('below_body_4','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_5 == "published") { ?>
											<div id="s5_pos_below_body_5" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_5_width ?>%">
												<?php s5_module_call('below_body_5','round_box'); ?>
											</div>
										<?php } ?>
										
										<?php if ($s5_pos_below_body_6 == "published") { ?>
											<div id="s5_pos_below_body_6" class="s5_float_left" style="width:<?php echo $s5_pos_below_body_6_width ?>%">
												<?php s5_module_call('below_body_6','round_box'); ?>
											</div>
										<?php } ?>						
										<div style="clear:both; height:0px"></div>

									</div>
									</div>
								</div>

							<?php } ?>
							
							<div style="clear:both;height:0px"></div>
							
						</div>
						</div>
						
					<?php } ?>
					
					<?php if ($s5_pos_middle_bottom_1 == "published" || $s5_pos_middle_bottom_2 == "published" || $s5_pos_middle_bottom_3 == "published" || $s5_pos_middle_bottom_4 == "published" || $s5_pos_middle_bottom_5 == "published" || $s5_pos_middle_bottom_6 == "published") { ?>
					
						<div id="s5_middle_bottom_wrap">
							
							<div id="s5_middle_bottom">
							<div id="s5_middle_bottom_inner">
							
								<?php if ($s5_pos_middle_bottom_1 == "published") { ?>
									<div id="s5_pos_middle_bottom_1" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_1_width ?>%">
										<?php s5_module_call('middle_bottom_1','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_2 == "published") { ?>
									<div id="s5_pos_middle_bottom_2" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_2_width ?>%">
										<?php s5_module_call('middle_bottom_2','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_3 == "published") { ?>
									<div id="s5_pos_middle_bottom_3" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_3_width ?>%">
										<?php s5_module_call('middle_bottom_3','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_4 == "published") { ?>
									<div id="s5_pos_middle_bottom_4" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_4_width ?>%">
										<?php s5_module_call('middle_bottom_4','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_5 == "published") { ?>
									<div id="s5_pos_middle_bottom_5" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_5_width ?>%">
										<?php s5_module_call('middle_bottom_5','round_box'); ?>
									</div>
								<?php } ?>
								
								<?php if ($s5_pos_middle_bottom_6 == "published") { ?>
									<div id="s5_pos_middle_bottom_6" class="s5_float_left" style="width:<?php echo $s5_pos_middle_bottom_6_width ?>%">
										<?php s5_module_call('middle_bottom_6','round_box'); ?>
									</div>
								<?php } ?>						
								<div style="clear:both; height:0px"></div>

							</div>
							</div>
						
						</div>

					<?php } ?>
					
				</div>
				</div>
				<!-- Left column -->	
				<div id="s5_left_column_wrap" class="s5_float_left" style="width:<?php echo $s5_left_column_width ?>px">
					<div id="s5_left_column_wrap_inner">
						
							<div id="s5_left_top_wrap" class="s5_float_left" style="width:<?php echo $s5_left_column_width ?>px">
								<?php s5_module_call('side_menu','round_box'); ?>
							</div>
						
						
							<div id="s5_left_wrap" class="s5_float_left" style="width:<?php echo $s5_left_width ?>px">
								<?php s5_module_call('highligh_news','round_box'); ?>
							</div>
						
							<div id="s5_left_inset_wrap" class="s5_float_left" style="width:<?php echo $s5_left_inset_width ?>px">
								<?php s5_module_call('highligh_video','round_box'); ?>
							</div>
						
						
						<div id="s5_social_login_wrap">
							<div id="s5_social_wrap">
									
										<div id="s5_facebook" onclick="window.open('<?php echo $s5_facebook; ?>')"></div>
										
									
										<div id="s5_google" onclick="window.open('<?php echo $s5_google; ?>')"></div>
									
									
										<div id="s5_twitter" onclick="window.open('<?php echo $s5_twitter; ?>')"></div>
									
										<div id="s5_rss" onclick="window.open('<?php echo $s5_rss; ?>')"></div>
									
								</div>
							
							
							<?php if ($s5_login  != "" || $s5_register  != "") { ?>	
								<div id="s5_loginreg">	
									<div id="s5_logregtm">
										<?php if ($s5_register  != "") { ?>
											<?php if ($s5_user_id) { } else {?>
												<div id="s5_register" class="s5box_register">
													<ul class="s5boxmenu">
														<li><?php echo $s5_register;?></li>
													</ul>
												</div>
											<?php } ?>
										<?php } ?>
										<?php if ($s5_login  != "") { ?>
											<div id="s5_login" class="s5box_login">
												<ul class="s5boxmenu">
													<li>
														<?php if ($s5_user_id) { echo $s5_loginout; } else { echo $s5_login; } ?>
													</li>
												</ul>
											</div>
										<?php } ?>	
									</div>
								</div>
							<?php } ?>
							
							<div style="clear:both; height:0px"></div>
							
						</div>
							
						
						
							<div id="s5_left_bottom_wrap" class="s5_float_left" style="width:<?php echo $s5_left_column_width ?>px">
								<?php 
								s5_module_call('banner_content_left','round_box'); ?>
							</div>
						
						<div style="clear:both; height:0px"></div>
					</div>
					</div>
					
				<!-- End Left column -->	
				<!-- Right column -->	
				<?php if($s5_pos_right == "published" || $s5_pos_right_inset == "published" || $s5_pos_right_top == "published" || $s5_pos_right_bottom == "published") { ?>
					<div id="s5_right_column_wrap" class="s5_float_left" style="width:<?php echo $s5_right_column_width ?>px; margin-left:-<?php echo $s5_right_column_width + $s5_left_column_width ?>px">
					<div id="s5_right_column_wrap_inner">
						<?php if($s5_pos_right_top == "published") { ?>
							<div id="s5_right_top_wrap" class="s5_float_left" style="width:<?php echo $s5_right_column_width ?>px">
								<?php s5_module_call('right_top','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right_inset == "published") { ?>
							<div id="s5_right_inset_wrap" class="s5_float_left" style="width:<?php echo $s5_right_inset_width ?>px">
								<?php s5_module_call('right_inset','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right == "published") { ?>
							<div id="s5_right_wrap" class="s5_float_left" style="width:<?php echo $s5_right_width ?>px">
								<?php s5_module_call('right','round_box'); ?>
							</div>
						<?php } ?>
						<?php if($s5_pos_right_bottom == "published") { ?>
							<div id="s5_right_bottom_wrap" class="s5_float_left" style="width:<?php echo $s5_right_column_width ?>px">
								<?php s5_module_call('right_bottom','round_box'); ?>
							</div>
						<?php } ?>
						<div style="clear:both; height:0px"></div>
					</div>
					</div>
				<?php } ?>
				<!-- End Right column -->	
			</div>
			</div>
			<!-- End columns wrap -->	
			
		<!-- Below Columns Wrap -->	
			<?php if ($s5_pos_below_columns_1 == "published" || $s5_pos_below_columns_2 == "published" || $s5_pos_below_columns_3 == "published" || $s5_pos_below_columns_4 == "published" || $s5_pos_below_columns_5 == "published" || $s5_pos_below_columns_6 == "published") { ?>
			<div id="s5_below_columns_wrap1">	
			<div id="s5_below_columns_wrap2">
			<div id="s5_below_columns_inner">

					
						<?php if ($s5_pos_below_columns_1 == "published") { ?>
							<div id="s5_below_columns_1" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_1_width ?>%">
								<?php s5_module_call('below_columns_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_2 == "published") { ?>
							<div id="s5_below_columns_2" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_2_width ?>%">
								<?php s5_module_call('below_columns_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_3 == "published") { ?>
							<div id="s5_below_columns_3" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_3_width ?>%">
								<?php s5_module_call('below_columns_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_4 == "published") { ?>
							<div id="s5_below_columns_4" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_4_width ?>%">
								<?php s5_module_call('below_columns_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_5 == "published") { ?>
							<div id="s5_below_columns_5" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_5_width ?>%">
								<?php s5_module_call('below_columns_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_below_columns_6 == "published") { ?>
							<div id="s5_below_columns_6" class="s5_float_left" style="width:<?php echo $s5_pos_below_columns_6_width ?>%">
								<?php s5_module_call('below_columns_6','round_box'); ?>
							</div>
						<?php } ?>						
						<div style="clear:both; height:0px"></div>

			</div>
			</div>
			</div>
			<?php } ?>
		<!-- End Below Columns Wrap -->				
			
			
		</div>
		</div>
		</div>
		
		<div style="clear:both; height:0px"></div>
		
		</div>
		</div>
		
		<?php } ?>
	<!-- End Center area -->	
	
	
	<div id="s5_footer_body_section" class="s5_body_section s5_wrap">
	<div id="s5_footer_body_section_inner">
	
	<!-- Bottom Row1 -->	
		<?php if ($s5_pos_bottom_row1_1 == "published" || $s5_pos_bottom_row1_2 == "published" || $s5_pos_bottom_row1_3 == "published" || $s5_pos_bottom_row1_4 == "published" || $s5_pos_bottom_row1_5 == "published" || $s5_pos_bottom_row1_6 == "published") { ?>
			<div id="s5_bottom_row1_area1">
			<div id="s5_bottom_row1_area2">
			<div id="s5_bottom_row1_area_inner">

				<div id="s5_bottom_row1_wrap">
					<div id="s5_bottom_row1">
					<div id="s5_bottom_row1_inner">
					
						<?php if ($s5_pos_bottom_row1_1 == "published") { ?>
							<div id="s5_pos_bottom_row1_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_1_width ?>%">
								<?php s5_module_call('bottom_row1_1','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_2 == "published") { ?>
							<div id="s5_pos_bottom_row1_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_2_width ?>%">
								<?php s5_module_call('bottom_row1_2','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_3 == "published") { ?>
							<div id="s5_pos_bottom_row1_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_3_width ?>%">
								<?php s5_module_call('bottom_row1_3','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_4 == "published") { ?>
							<div id="s5_pos_bottom_row1_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_4_width ?>%">
								<?php s5_module_call('bottom_row1_4','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_5 == "published") { ?>
							<div id="s5_pos_bottom_row1_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_5_width ?>%">
								<?php s5_module_call('bottom_row1_5','round_box'); ?>
							</div>
						<?php } ?>
						
						<?php if ($s5_pos_bottom_row1_6 == "published") { ?>
							<div id="s5_pos_bottom_row1_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row1_6_width ?>%">
								<?php s5_module_call('bottom_row1_6','round_box'); ?>
							</div>
						<?php } ?>
						
						<div style="clear:both; height:0px"></div>

					</div>
					</div>
				</div>

		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Bottom Row1 -->	
		
		
	<!-- Bottom Row2 -->	
		<?php if ($s5_pos_bottom_row2_1 == "published" || $s5_pos_bottom_row2_2 == "published" || $s5_pos_bottom_row2_3 == "published" || $s5_pos_bottom_row2_4 == "published" || $s5_pos_bottom_row2_5 == "published" || $s5_pos_bottom_row2_6 == "published") { ?>
		<div id="s5_bottom_row2_area1">
		<div id="s5_bottom_row2_area2">
		<div id="s5_bottom_row2_area_inner">			
		
			<div id="s5_bottom_row2_wrap">
				<div id="s5_bottom_row2">
				<div id="s5_bottom_row2_inner">					
					<?php if ($s5_pos_bottom_row2_1 == "published") { ?>
						<div id="s5_pos_bottom_row2_1" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_1_width ?>%">
							<?php s5_module_call('bottom_row2_1','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_2 == "published") { ?>
						<div id="s5_pos_bottom_row2_2" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_2_width ?>%">
							<?php s5_module_call('bottom_row2_2','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_3 == "published") { ?>
						<div id="s5_pos_bottom_row2_3" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_3_width ?>%">
							<?php s5_module_call('bottom_row2_3','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_4 == "published") { ?>
						<div id="s5_pos_bottom_row2_4" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_4_width ?>%">
							<?php s5_module_call('bottom_row2_4','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_5 == "published") { ?>
						<div id="s5_pos_bottom_row2_5" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_5_width ?>%">
							<?php s5_module_call('bottom_row2_5','round_box'); ?>
						</div>
					<?php } ?>
					
					<?php if ($s5_pos_bottom_row2_6 == "published") { ?>
						<div id="s5_pos_bottom_row2_6" class="s5_float_left" style="width:<?php echo $s5_pos_bottom_row2_6_width ?>%">
							<?php s5_module_call('bottom_row2_6','round_box'); ?>
						</div>
					<?php } ?>						
					<div style="clear:both; height:0px"></div>
				</div>
				</div>	
			</div>	
				
		</div>
		</div>
		</div>
		<?php } ?>
	<!-- End Bottom Row2 -->
<div id="s5_breadcrumb_font_wrap">
	<?php s5_module_call('partner_ctn','round_box'); ?>
						
		<div style="clear:both"></div>
	</div>
	<?php if ($s5_pos_breadcrumb == "published" || $s5_font_resizer == "yes") { ?>
	<div id="s5_breadcrumb_font_wrap">
		<?php if ($s5_pos_breadcrumb == "published") { ?>
			<div id="s5_breadcrumb_wrap">
				<?php s5_module_call('breadcrumb','notitle'); ?>
			</div>
		<?php } ?>
		
		<?php if($s5_font_resizer == "yes") { ?>
			<div id="fontControls"></div>
		<?php } ?>
		
		<div style="clear:both"></div>
	</div>
	<?php } ?>
	
	
	<!-- Footer Area -->
		<div id="s5_footer_area1">
		<div id="s5_footer_area2">
		<div id="s5_footer_area_inner">
		
			<?php if($s5_pos_footer == "published") { ?>
				<div id="s5_footer_module">
					<?php s5_module_call('footer','notitle'); ?>
				</div>	
			<?php } else { ?>
				<div id="s5_footer">
					<?php require("vertex/footer.php"); ?>
				</div>
			<?php } ?>
			
			<?php if($s5_pos_bottom_menu) { ?>
				<div id="s5_bottom_menu_wrap">
					<?php s5_module_call('bottom_menu','notitle'); ?>
				</div>	
			<?php } ?>
			<div style="clear:both; height:0px"></div>
			
		</div>
		</div>
		</div>
	<!-- End Footer Area -->
	
	
	<div style="clear:both; height:0px"></div>
	
	</div>
	</div>
	
	<?php s5_module_call('debug','round_box'); ?>
	
	<!-- Bottom Vertex Calls -->
	<?php require("vertex/includes/vertex_includes_bottom.php"); ?>
	
</div>
<!-- End Body Padding -->
	

</body>
</html>

<?php get_header();?>
<h1>	Layout - Griding Technique		</h1>
<p> Griding Floating Technique for floating 	</p>

<div class="row">
	<header class="col-12">
	<h1> Header of the sight </h1> 
	</header>
</div>

<div class="row">
	<div class="col-4 asidenav">
		<ul >
			<li><a href="#"> Home </a></li>
			<li><a href="#">Services </a></li>
			<li><a href="#"> Team </a></li>
		</ul>
	</div>
	<div class="col-8 artical">
		<h1> London </h1>
		<img src="<?php echo LHTML_PATH; ?>/screen.bmp" alt="error in loading images" style ="max-width:100%;height:auto;">
		<p>	London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.

			Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.
		</p>
	</div>	
</div>
	<div class="row">
		<h1>Media Query Section</h1>
		<p>In addition to resize text and images, it is also common to use media queries in responsive web pages.

		With media queries you can define completely different styles for different browser sizes.

		Example: resize the browser window to see that the three div elements below will display horizontally on large screens and stacked vertically on small screens:</p>
	</div>
	<div class="row">
		<div class="col-3 leftmenu"style="">
			left menu
		</div>
		<div class="col-6 maincontent">
			main content
		</div>
		<div class="col-3 rightside" style="">
			Right side
		</div>
		
	</div>
<div class="row">
	<div  class="col-12 gridingfooter">
		End of Griding Technique Footer
	</div>
</div>



<?php get_footer();?>
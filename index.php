<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<link rel="stylesheet" href="bootstrap.min.css">
<title><?php bloginfo( 'name' ); ?> : <?php bloginfo('description'); ?></title>
<meta name="description" content="true job : truejob.in provides you all the latest govt/Sarkari Results, Govt Jobs, Admit Cards, in various sectors such as Railway, Bank, CDS, NDA, SSC, Army, Navy, Police, RSMSSB, UPPSC, UPSSSC and more jobalerts only one place."></meta>
<meta name="keywords" content=" Last Date, Admit Cards, Sarkari Result, latest sarkari results, Sarkariresult, Sarkari JOBS, Sarkariresults"></meta>
<meta name="rating" content="general" />
<meta http-equiv="content-language" content="en" />
<meta name="distribution" content="global" />
<meta name="robots" content="index, follow" />

<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css"></link>
</head>
<body>
<div align="center">
<div id="header">
<div id="head-title"><?php bloginfo( 'name' ); ?><br /></div>
<font size="+1" color="#ffffff"><b><?php bloginfo( 'url' ); ?></b></font>
</div>
<div id="menu">
<ul class="menu">
<li><a href="http://127.0.0.1/wordpress/" class="parent"><span>Home</span></a></li>
<li><a href="http://127.0.0.1/wordpress/category/latest_job/" class="parent"><span>All India Jobs</span></a></li>
<li><a href="http://127.0.0.1/wordpress/category/answer_key/" class="parent"><span>Answer Key</span></a></li>
<li><a href="http://127.0.0.1/wordpress/category/latest_job/" class="parent"><span>Latest Jobs</span></a></li>
<li><a href="http://127.0.0.1/wordpress/category/admit_card/" class="parent"><span>Admit Card</span></a></li>
<li><a href="http://127.0.0.1/wordpress/category/result/" class="parent"><span>Results</span></a></li>
</a></li>
<li><a href="http://127.0.0.1/wordpress/category/syllabus/" class="parent"><span>Syllabus</span>
	<!--<li><a href="#" class="parent"><span>Railway Jobs </span></a></li>
</a></li>
<li><a href="#" class="parent"><span> Banking Jobs</span>-->
<li><a href="#" class="parent"><span>contact us</span></a>
<li>
</li>

<br>
</div>
</div>
<br>
<br>
<div align="center">
<div id="marquee0" align="center">
	<?php $i = 1; 

$custom_query = new WP_Query('cat=4'); // exclude category 9
while($custom_query->have_posts() && $i < 3) : $custom_query->the_post(); ?>
<a href="<?php the_permalink() ?>" target=_blank><b><font size="4"><?php the_title(); ?></font></b></a> ||
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</div><div id="marquee1" align="center">
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="f1a80adeaa41ba9339409f79-"></script><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">
	<?php $i = 1; 

$custom_query = new WP_Query('cat=3'); // exclude category 9
while($custom_query->have_posts() && $i < 4) : $custom_query->the_post(); ?>
	<a href="<?php the_permalink() ?>" target=_blank><b><font size="3"><?php the_title(); ?></font></b></a> ||
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	</marquee>
	
	
</div><div id="marquee1" align="center">
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="f1a80adeaa41ba9339409f79-"></script><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">
	<?php $i = 1; 

$custom_query = new WP_Query('cat=2'); // exclude category 9
while($custom_query->have_posts() && $i < 4) : $custom_query->the_post(); ?>
	
	<a href="<?php the_permalink() ?>" target=_blank><b><font size="3"><?php the_title(); ?></font></b></a> || 
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	</marquee>
</div><div id="marquee1" align="center">
	

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="f1a80adeaa41ba9339409f79-"></script><marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">
	<?php $i = 1; 

$custom_query = new WP_Query('cat=10'); // exclude category 9
while($custom_query->have_posts() && $i < 4) : $custom_query->the_post(); ?>
	<a href="<?php the_permalink() ?>" target=_blank><b><font size="3"><?php the_title(); ?></font></b></a> ||<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?> </marquee>
</div></div>
    <br>
    
   
<br>
<div align="center">
<table>
<tr>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=4'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image1" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=3'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image2" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=5'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image3" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=2'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image4" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++;
endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
</tr>
<tr>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=6'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image5" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=7'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image6" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=9'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image7" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
<td>
	
	<?php $i = 1; 

$custom_query = new WP_Query('cat=10'); // exclude category 9
while($custom_query->have_posts() && $i < 2) : $custom_query->the_post(); ?>
<div id="image8" align="center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>
	
	
</td>
</tr>
</table></div>




<center><div style="width:75%;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3937451403718752",
    enable_page_level_ads: true
  });
</script></div></center>





<br><br>
<table width="75%" align="center">
<tr valign="top">
<td align="left">
<div id="box1" align="left" style="height:660px">
<div id="heading">
<div id="font" align="center">Result</div>
<div style="margin-top:610px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/result/" target=_blank>View More</a></div>
</div>
</div>
<div id="post">
	

	<?php $i = 1; 

$custom_query = new WP_Query('cat=2'); // exclude category 9
while($custom_query->have_posts() && $i < 11) : $custom_query->the_post(); ?>
	<ul>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>



</div>
</div>
<br>
<div align="left" id="box2"style="height:320px">
<div id="heading">
<div id="font" align="center">Answer Key</div>
<div style="margin-top:270px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/answer_key/" target=_blank>View More</a></div>
</div>
</div>
<div id="post">
<?php $i = 1; 

$custom_query = new WP_Query('cat=5'); // exclude category 9
while($custom_query->have_posts() && $i < 5) : $custom_query->the_post(); ?>
	<ul>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>
	
	</div>
	</div>


<br>
<br>
<div align="center" id="box2" style="margin-top:-20px;height:320px;">
<div id="heading">
<div align="center" font-size="10%" >Certificate Verification</div>
<div style="margin-top:270px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/certificate_verification/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=8'); // exclude category 9
while($custom_query->have_posts() && $i < 5) : $custom_query->the_post(); ?>
	<ul>
<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>     
	</div>
	
	
	
	<br>
<br>
<div align="center" id="box3" style="margin-top:-20px;height:320px;">
<div id="heading">
<div align="center">ONLINE SET PRACTICE</div>
<div style="margin-top:270px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/online-set_practice/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=10'); // exclude category 10
while($custom_query->have_posts() && $i < 5) : $custom_query->the_post(); ?>
	<ul>
<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>     
	</div>
	
	
<br>

</div>
</td>
<td align="center"><div id="box2" align="center" style="height:660px">
<div id="heading">
<div align="center">Admit Card</div>
<div style="margin-top:610px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/admit_card/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=3'); // exclude category 9
while($custom_query->have_posts() && $i < 11) : $custom_query->the_post(); ?>
	<ul>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>
</div>
</div>
<br>
<br>
<div align="center" id="box2" style="margin-top:-20px;height:320px;">
<div id="heading">
<div align="center">Syllabus</div>
<div style="margin-top:270px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/syllabus/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=6'); // exclude category 9
while($custom_query->have_posts() && $i < 5) : $custom_query->the_post(); ?>
	<ul>
<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>
	</div>
	</div>


<br>
<br>
<div align="center" id="box2" style="margin-top:-20px;height:320px;">
<div id="heading">
<div align="center">Important</div>
<div style="margin-top:270px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/important/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=9'); // exclude category 9
while($custom_query->have_posts() && $i < 5) : $custom_query->the_post(); ?>
	<ul>
<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>
	
	
	
	
<br>

</div></td>
<td align="right">
<div id="box1" align="right" style="height:660px">
<div id="heading">
<div id="font" align="center">Latest Jobs</div>
<div style="margin-top:610px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/latest_job/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=4'); // exclude category 9
while($custom_query->have_posts() && $i < 11) : $custom_query->the_post(); ?>
	<ul>
<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>


</div>
</div>
</div>
<br>
<div align="center" id="box3" style="height:660px; ">
<div id="heading">
<div align="center">Admission</div>
<div style="margin-top:610px">
<div id="view" align="center"><a href="http://127.0.0.1/wordpress/category/admission/" target=_blank>View More</a></div>
</div>
</div>
<div id="post" align="left">
<?php $i = 1; 

$custom_query = new WP_Query('cat=7'); // exclude category 9
while($custom_query->have_posts() && $i < 5) : $custom_query->the_post(); ?>
	<ul>
<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
		</ul>
	<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

</div>
</div>
</div>

</div></td>
</tr>
</table>




<center><div style="width:75%;"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3937451403718752",
    enable_page_level_ads: true
  });
</script>
	</div></center>



<center><a href="//www.dmca.com/Protection/Status.aspx?ID=e1ef0e48-53d0-4514-8c50-4a5f7b070bb7" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120l.png?ID=e1ef0e48-53d0-4514-8c50-4a5f7b070bb7"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></center>
<br><br>


<?php get_footer(); ?>
 <script src="jq.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
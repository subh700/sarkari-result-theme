<?php
get_header(); 
?>
<center>
<style>
table a{
  color:blue;
  font-weight:700;

}
table h1{
  color:#222222;


}
table h2{
  color:;


}
table h3{
  color:green;


}
table h4{
  color:#ff00ff;


}
table b{
  color:red;
  font-weight:800;

}

</style>
<div style="width:75%;height:auto;margin-top:0px;">
<table style="width:100%;height:auto;">
<tr>
<td style="width:55%;"><h1><?php echo get_the_title( $post_id ); ?></h1><hr>

	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div <?php post_class(); ?>>
		<?php the_content(); ?>
		<?php edit_post_link(); ?>
		<?php wp_link_pages(); ?> 
	</div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php else : ?>
<?php endif; ?>
	
	
<td style="width:20%;">Responsive Ads Here!</td>
</tr>
</table>
	<div id="copy"> © Copyright 2019-20 at <a href="<?php bloginfo('url'); ?>"><?php bloginfo('url'); ?></a>
<br />For advertising in this website contact us <a href="#">smartjob@post.com</a><br><br></div></br>
</div>

</center>
<?php get_footer(); ?>

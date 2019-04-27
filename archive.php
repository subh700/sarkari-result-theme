<?php
get_header(); 
?>
<center>

<div style="width:75%;height:auto;margin-top:0px;">
<table style="width:100%;height:auto;">
<tr>
<td style="width:55%;"><div id="box1" align="left" style="height:auto;width:auto;margin-top:0;">
<div id="heading">
	<div id="font" align="center" ><?php
		if ( is_category() ) :
		    single_cat_title();

		elseif ( is_tag() ) :
		      single_tag_title();

		elseif (is_author() ) :
		    printf( __( 'Author: %s', 'geekystufftobuy' ), '<span class="vcard">' . get_the_author() . '</span>' );

		elseif (is_day() ) :
				printf( __( 'Day: %s', 'geekystufftobuy' ), '<span>' . get_the_date() . '</span>' );

		elseif (is_month() ) :
				printf( __( 'Month: %s', 'geekystufftobuy' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'geekystufftobuy' ) ) . '</span>' );

		elseif (is_year() ) :
				printf( __( 'Year: %s', 'geekystufftobuy' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'geekystufftobuy' ) ) . '</span>' );

		elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
			  _e( 'Asides', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
			  _e( 'Galleries', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
			  _e( 'Images', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
			  _e( 'Videos', 'geekystufftobuy' );

	  elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
				_e( 'Quotes', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
				_e( 'Links', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
			  _e( 'Statuses', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
				_e( 'Audios', 'geekystufftobuy' );

		elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
			  _e( 'Chats', 'geekystufftobuy' );

		else :
			  _e( 'Archives', 'geekystufftobuy' );

		endif;
		?></div>

</div>
<div id="post">
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<ul>
<li><a href="" target=_blank><a href="<?php the_permalink(); ?>" target=_blank><?php echo get_the_title( $post_id ); ?></a> </a></li>
</ul>
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			
<?php else : ?>
<?php endif; ?>

</div>
</div></td>
<td style="width:20%;padding:10px;"><!--<img src="https://tpc.googlesyndication.com/simgad/8237519466514634616?sqp=4sqPyQQ7QjkqNxABHQAAtEIgASgBMAk4A0DwkwlYAWBfcAKAAQGIAQGdAQAAgD-oAQGwAYCt4gS4AV_FAS2ynT4&rs=AOga4ql9Z2x88f8JLNMje-lKKAdtScQZNw"style="width:100%;">--></td>
</tr>
</table>
<div id="copy"> © Copyright 2018-2019 at www.YOUR DOMAIN.com
<br />For advertising in this website contact us <a href="#">YOUR E-MAIL IDF</a><br><br></div></br>
</div>

</center>
<?php get_footer(); ?>

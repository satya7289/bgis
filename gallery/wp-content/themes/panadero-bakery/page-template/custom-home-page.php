<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'panadero_bakery_above_slider' ); ?>

<?php if( get_theme_mod('panadero_bakery_slider_hide_show') != ''){ ?>
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'panadero_bakery_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $pages[] = $mod;
			        }
		      	}
		      	if( !empty($pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h2><?php the_title();?></h2>
			              	<p><?php $excerpt = get_the_excerpt(); echo esc_html( panadero_bakery_string_limit_words( $excerpt,20 ) ); ?></p>
			            </div>
			            <div class="read-btn">
			              <a href="<?php the_permalink();?>" class="aaaa" title="<?php esc_attr_e( 'Read More', 'panadero-bakery' ); ?>"><?php esc_html_e('Read More','panadero-bakery'); ?>
			              </a>
				       	</div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section>
<?php }?>

<?php do_action('panadero_bakery_below_slider'); ?>

<section id="product-section">
 	<div class="container-fluid">
		<?php $pages = array();
	        $mod = intval( get_theme_mod( 'panadero_bakery_featured-product'));
	        if ( 'page-none-selected' != $mod ) {
	          $pages[] = $mod;
	        }
	      	if( !empty($pages) ) :
	        $args = array(
	          	'post_type' => 'page',
	          	'post__in' => $pages,
	          	'orderby' => 'post__in'
	        );
	        $query = new WP_Query( $args );
	        if ( $query->have_posts() ) :
	          $i = 1;
	    ?>
	    <div class="featured-product">
	      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>		          	
              	<h2><?php the_title();?></h2>
              	<img src="<?php echo esc_html(get_template_directory_uri() . '/assets/images/headimg.png');?>" class="head-design">
              	<?php the_content(); ?>
	      	<?php $i++; endwhile; ?>
		        <?php else : ?>
		          <div class="no-postfound"></div>
		        <?php endif;
		      endif;
		      wp_reset_postdata()
		    ?>
	    </div>
 	</div>
</section>

<?php do_action('panadero_bakery_below_featured_product_section'); ?>

<div class="container-fluid">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
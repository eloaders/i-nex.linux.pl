    
<?php 
$wide_sidebar = of_get_option('wider_sidebar'); 
$col = (empty($wide_sidebar)) ? 9 : 8;	
?>

<!-- Main Blog Content -->
<div class="col-md-<?php echo $col;?>" role="content">
<?php printf( __('
<div class="container">
	<div class="row">
    		<div class="col-md-12">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- długi baner -->
			<ins class="adsbygoogle"
     				style="display:inline-block;width:728px;height:90px"
     				data-ad-client="ca-pub-0617278559483692"
     				data-ad-slot="1025820385"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</div>
'));
?>
<?php if ( have_posts() ) : ?>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
 
<?php endwhile; ?>
<?php openstrap_content_nav( 'nav-below' ); ?>
<?php else : ?>

<?php get_template_part( 'content', 'none' ); ?>	

<?php endif; // end have_posts() check ?>

</div> <!-- .col-md-9 .content -->

<!-- End Main Content -->
<?php get_sidebar(); ?>

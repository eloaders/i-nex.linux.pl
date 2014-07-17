<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Openstrap
 * @subpackage Openstrap
 * @since Openstrap 0.1
 */
?>

<?php 
	$display_post_meta_info = of_get_option('display_post_meta_info');
        $catname = $cat->slug;
?>
<?php if (in_category('186')) { ?>
<?php 
$panel_design = "panel-info";
?>
<?php }else { ?>
<?php 
$panel_design = "panel-default";
?>
<?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <header>
    <hgroup>
      <div class="panel <?php echo $panel_design ?>">
      <div class="panel-heading">
                <h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'openstrap' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>	
      </div>
      <div class="panel-body">
      <?php if(!empty($display_post_meta_info)):?>	
	<div class="post-meta entry-header">
	  <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
	    <span class="sticky"><i class="icon-pushpin"></i> <span class="badge"><?php _e( 'Sticky', 'openstrap' ); ?> </span></span>
	  <?php endif; ?>
	</div> 
      <?php endif;?>
      <?php if ( has_post_thumbnail()) : ?>
      <div class="featured-img pull-left">
	<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail( array(200,200) ); ?></a>
      </div>

      <?php endif; ?>
      <div class="entry-summary">
	<?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
      <div class="clearfix"/>
      </div>
      <div class="panel-footer">
	<ul class="list-group">
	  <li class="list-group-item">
	    <div class="row">
               <div class="col-md-6 pull-left">
               <i class="icon-comments"></i><a href="<?php the_permalink() ?>#comments"><?php comments_number(__('No comments', 'openstrap'),__('One comment','openstrap'),__('% comments','openstrap')); ?></a>
	       </div>
               <div class="col-md-4 pull-right">
               <?php printf( __( '<i class="icon-calendar"></i> %2$s by %3$s', 'openstrap' ),'meta-prep meta-prep-author',
		      sprintf( '<a href="%1$s" title="%2$s" rel="bookmark">%3$s</a>', get_permalink(), esc_attr( get_the_time() ), get_the_date()),
		      sprintf( '<a class="url fn n" href="%1$s" title="%2$s">%3$s</a>', get_author_posts_url( get_the_author_meta( 'ID' ) ),
		      sprintf( esc_attr__( 'View all posts by %s', 'openstrap' ), get_the_author() ), get_the_author()));
	       ?>
               </div>
            </div>
	  </li>
          <li class="list-group-item">
	    <?php _e('<i class="icon-tags"></i> &nbsp;', 'openstrap' );?>
	    <?php the_tags('<span class="label label-info">','</span>&nbsp<span class="label label-info">','</span>'); ?>
	    <?php _e('<i class="icon-folder-open"></i> &nbsp;', 'openstrap' );?>
	    <?php the_category(', '); ?>
	  </li>
          <li class="list-group-item text-right">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-xs" role="button">Read More</a>
          </li>
	 </ul>
	</div>
      </div>
    </hgroup>
  </header>
</article>
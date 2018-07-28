<?php // Display Artist info on single product page
  if ( get_field( 'artist_full_name' ) ): ?>

<?php 

	$artist = get_field( 'artist_full_name' );
	$page_path = "featured-artist/$artist";
	$page = get_page_by_path( basename( untrailingslashit( $page_path ) ) , OBJECT, 'featured-artist');
	$page_ID = $page->ID;
?>



<div id="featured-artist-top" class="container-fluid waypoint-fade">
	<!-- Title -->
	<div id="wrapper" class="padding-top">
		<div class="row">
			<div id="featured-artist" class="col-md-12">
				<h4>The Artist</h4>
				<h1 class="artist-title animated fadeInDown"><?php echo get_the_title( $page ); ?></h1>
				<h4><?php the_field( 'artist_location', $page_ID ); ?></h4>
			</div>
		</div>
	</div>
</div>
<div id="featured-artist-top-below" class="container-fluid padding-top">
	<!-- About Artist Container -->
	<div id="about-artist" class="row product-artist">
		<div class="col-md-6 mobile">
			<div class="image-cropper waypoint-up mobile">

				<?php if (has_post_thumbnail() && empty( get_field( 'profile_image' ) ) ): ?>
					  <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
				<?php else : ?>
					<?php $image = get_field( 'profile_image' ); ?>
					<img id="coverImage" src="<?php echo $image['url']; ?>" />
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-3 about waypoint-left">
			<h2>About
  			<?php echo get_the_title( $page ); ?>
<!--
				<?php
					global $first_name;
					$title = get_the_title($page);
					$title_array = explode( ' ', $title );
					$first_name = $title_array[0]; 
					
					echo $first_name;
				?>
--></h2>
				
			<p><?php the_field( 'artist_about', $page_ID); ?></p>
			<form style="display: inline" action="<?php echo get_permalink( $page_ID); ?>" method="get">
				<button class="artist-button">View More!</button>
			</form>
		</div>
		<div class="col-md-6">
			<div class="image-cropper waypoint-up desktop">

				<?php if (has_post_thumbnail() && empty( get_field( 'profile_image' ) ) ): ?>
					  <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
				<?php else : ?>
					<?php $image = get_field( 'profile_image' ); ?>
					<img id="coverImage" src="<?php echo $image['url']; ?>" />
				<?php endif; ?>
			</div>
		</div>
		<div class="col-md-3">
	</div>
</div>
</div>

<?php endif; ?>
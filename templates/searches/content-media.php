<?php
$search = $_GET['s'];
// WP_Query arguments
$args = array (
    'posts_per_page' => -1,
    'post_type'     => array( 'attachment' ),
    'post_status'   => array( 'publish', 'inherit' ),
    'tax_query'     => [
        [
            'taxonomy' => 'location',
            'relation ' => 'OR',
            'field' => 'name',
            'terms' => array($search),
            'compare' => 'LIKE'
        ]
    ]
);
//print_r($args);
// The Query
$query = new WP_Query( $args );
//echo $query->request;
?>
<hgroup class="mb20">
    <h1><?= __('Search Results','sage');?></h1>
    <h2 class="lead"><strong class="text-danger"><?= $query->post_count?></strong> <?= __('Results were found for the search for','sage');?> <strong class="text-danger"><?=$search?></strong></h2>
</hgroup>
<?php
if ( $query->have_posts() ):
?>
<div id="links">
<!-- the loop -->
        <?php
        while ( $query->have_posts() ):
            $query->the_post();
            $meta = get_post_meta( $query->post->ID );
            $img_url = wp_get_attachment_url( $query->post->ID );
            $thumb_url = wp_get_attachment_thumb_url($query->post->ID);
        ?>
            <a href="<?= $img_url; ?>" title="<?= $search;?>" data-gallery>
                <img src="<?= $thumb_url; ?>" alt="<?= $search;?>">
            </a>
        <?php
        endwhile;
        ?>
</div>
<!-- end of the loop -->
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<?php wp_reset_postdata();
else: ?>
    <p>No results</p>
<?php endif;?>
<!--<br>My query is: <?= $query->request;?>-->

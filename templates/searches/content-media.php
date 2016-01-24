<?php
/*
$args = [
    'showposts' => -1,
    'post_type' => 'attachment',
    'tax_query' => [
        [
        'taxonomy' => 'location',
        'field' => 'slug',
        'terms' => array('margarita', 'gran-sabana')
        ]
    ]
];
print_r($args);
$myposts = get_posts($args);

foreach ($myposts as $mypost) {
echo $mypost->post_title . '<br/>';
//echo $mypost->post_content . '<br/>';
echo  $mypost->ID . '<br/><br/>';
}*/
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

?>
<hgroup class="mb20">
    <h1>Search Results</h1>
    <h2 class="lead"><strong class="text-danger"><?= $query->post_count?></strong> results were found for the search for <strong class="text-danger"><?=$search?></strong></h2>
</hgroup>
<?php
    if ( $query->have_posts() ):
?>
    <div id="links">
    <!-- the loop -->
    <?php
        while ( $query->have_posts() ) {
            $query->the_post();
            $meta = get_post_meta( $query->post->ID );
            //print_r($meta);
            //echo wp_get_attachment_image($query->post->ID,'thumbnail');
    ?>
        <a href="<?= wp_get_attachment_url($meta['file-upload']); ?>" title="Banana" data-gallery>
            <img src="<?= wp_get_attachment_url($meta['file-upload']); ?>" alt="Banana">
        </a>
        <!--<div class="col-xs-3">
            <a href="<?= wp_get_attachment_url($meta['file-upload']); ?>" class="thumbnail">
                <img src="<?= wp_get_attachment_url($meta['file-upload']); ?>" class="img-responsive">

            </a>
        </div>-->

    <?php
        }
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
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <p>No results</p>
<?php endif;?>
<!--<br>My query is: <?= $query->request;?>-->

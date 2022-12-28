<?php
    $special_class = $args;
?>
<?php
    $background = '';

    if( $special_class['configuration']['show_background'] == 1 ):
        $background = 'background: url('.$special_class['background']['image']['url'].') right bottom/100px no-repeat';
    endif;
?>

<section class="course-offerring-special-class py-4">
    <div class="container-lg" style="<?php echo $background; ?>">
        <div class="header d-flex align-items-center pb-2 px-3">
        <?php if( !empty( $series['header']['series_icon']['url'] ) ): ?>
            <img class="icon" src="<?php echo $special_class['header']['icon']['url']; ?>" alt="<?php echo $special_class['header']['icon']['alt']; ?>" />
        <?php else: ?>
            <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon_special_class.png" alt="Special Class" />
        <?php endif; ?>
            <h3 class="ms-3"><?php echo $special_class['header']['title']; ?></h3>
        </div>
        <div class="lede px-3 mt-3">
            <p><?php echo $special_class['lede']['text']; ?></p>
        </div>

        <div class="classes" >
            <?php foreach($special_class['special_class']['courses'] as $course): ?>
            <div class="class mb-5 row">
                <div class="media-image text-center col-12 col-md-3" >
                    <a href="<?php echo get_site_url(); ?>/courses/<?php echo $course['course']->{'post_name'};?>">
                        <img src="<?php echo get_the_post_thumbnail_url($course['course']->{'ID'}); ?> " alt="..." /> 
                    </a>
                </div>
                <div class="description text-center text-md-start col-12 col-md-9">
                    <p><?php echo $course['description']; ?></p>
                    <a href="<?php echo get_site_url(); ?>/courses/<?php echo $course['course']->{'post_name'};?>" class="btn btn-primary">
                        <?php echo $course['button_label']; ?>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
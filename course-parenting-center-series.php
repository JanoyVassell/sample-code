<?php
    $series = $args;
?>

<section class="course-offerring-series py-4">
    <div class="container-lg">
        <div class="header d-flex align-items-center pb-2 px-3">
        <?php if( !empty( $series['header']['series_icon']['url'] ) ): ?>
            <img class="icon" src="<?php echo $series['header']['series_icon']['url']; ?>" alt="<?php echo $series['header']['series_icon']['alt']; ?>" />
        <?php else: ?>
            <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon_series.png" alt="Series" />
        <?php endif; ?>
            <h3 class="ms-3"><?php echo $series['header']['title']; ?></h3>
        </div>
        <div class="lede px-3 mt-3">
            <p><?php echo $series['lede']['text']; ?></p>
        </div>

        <div class="series">
            <?php foreach( $series['series']['courses'] as $course ): ?>
            <div class="card">
                <h6 class="card-title text-center mt-3">
                    <a href="<?php get_site_url(); ?>/courses/<?php echo $course['course']->{'post_name'}; ?>">
                        <?php echo $course['course']->{'post_title'}; ?>
                    </a>
                </h6>

                <a href="<?php echo get_site_url(); ?>/courses/<?php echo $course['course']->{'post_name'}; ?>" class="mt-3 d-block">
                    <img src=" <?php echo get_the_post_thumbnail_url( $course['course']->{'ID'}) ; ?> " class="card-img-top d-block mx-auto" alt="...">
                </a>
                <div class="card-body">
                    <p class="card-text">
                        <?php $ages_tags = get_the_terms($course['course']->{'ID'},'ld_course_category'); ?>

                        <span class="cat-tag d-inline-block mb-3"><span class="fw-bold">Age(s):</span>
                        <?php foreach($ages_tags as $tag): ?>
                            <?php if($tag->{'term_id'} == 693):?>
                            <?php echo $tag->{'name'}; ?>
                                <?php break; ?>
                            <?php else: ?>
                             <?php echo $tag->{'name'}; ?><span class="comma">,</span>
                            <?php endif; ?>
                        <?php endforeach;?>
                        </span>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

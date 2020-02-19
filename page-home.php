<?php
/*
  * Template name: Home
  * */
get_header();
?>

<section class="home_slider">
    <div class="flexslider">
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('homesliderslug')); ?>

            <?php if ($slider): ?>
                <?php foreach($slider['slides'] as $slide) : ?>
                    <li>

                        <figure>
                            <?php if ($slide['image']) : ?>
                                <img src="<?php echo ($slide['image']); ?>" alt="<?php $slide['title']; ?>">
                            <?php endif; ?>

                            <?php if($slide['title'] or $slide['description'] or $slide['html']) {?>
                                <figcaption>
                                    <?php if($slide['title']) { echo '<span class="mainslidertitle">'.$slide['title'].'</span>'; } ?>
                                    <?php if ($slide['description']){ echo '<span class="mainsliderdescription">'.$slide['description'].'</span>'; } ?>
                                    <?php if ($slide['html'] and $slide['description']){ echo '<br>'; } ?>
                                    <?php if ($slide['html']){ echo $slide['html']; } ?>
                                    <br>
                                    <?php if($slide['url']) { echo '<a href="'.$slide['url'].'" class="sliderlinkmore">Details</a>'; } ?>
                                </figcaption>
                            <?php } ?>
                        </figure>

                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>


<?php get_footer();


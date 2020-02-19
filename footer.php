<footer class="footer">
    <div class="wrapper">

        <div class="footer_top">
            <div class="footer_logo">
               <?php 
               if (ale_get_option('sitelogofooter')) { ?>
                   <a href="#" class="footer_logo">
                    <img src="<?php echo ale_get_option('sitelogofooter'); ?>" alt="">
                </a>
                <?php }
                else {
                    echo 'Logo not found';
                } 
                ?>
            </div>

            <nav class="footer_items footer_menu">
                <h5 class="footer_items_title"><?php if (ale_get_option('footermenutitle')) {
                    echo ale_get_option('footermenutitle');
                } ?></h5>
                <?php
                if ( has_nav_menu( 'footer_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'footer_menu',
                        'menu'          => 'Footer Menu',
                        'menu_class'    => 'footermenu cf',
                        'walker'        => new Aletheme_Nav_Walker(),
                        'container'     => '',
                    ));
                }
                ?>
            </nav>

            <div class="footer_items footer_address">
                <h5 class="footer_items_title">Contacts</h5>
                <p class="footer_phone"><?php echo ale_get_option('footerphone'); ?></p>
                <p class="footer_street"><?php echo ale_get_option('footeraddress'); ?></p>
                <p class="footer_website"><?php echo ale_get_option('footerwebsite'); ?></p>
            </div>

            <div class="footer_items footer_twitter">
                <div class="twitter_logo">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <span>@iglesia</span>
                </div>
                <div class="twitter_post">
                   All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this over 200 Latin words, combined with a handful of model sentence structures...

                   <span class="post_date">
                    25 july 2014
                </span>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="footer_left footer_copyright">
            <p>
                <?php if (ale_get_option('copyrights')) {
                   echo ale_get_option('copyrights');
                } ?>
            </p>
        </div>
        <div class="footer_right footer_social social_section">
            <?php if(ale_get_option('vi')) { ?>
                <a href="<?php echo ale_get_option('vi'); ?>" target=_blank>
                    <i class="fa fa-vimeo-square" aria-hidden="true"></i>
                </a>
            <?php   } ?>

            <?php if(ale_get_option('insta')) { ?>
                <a href="<?php echo ale_get_option('insta');?>" target=_blank>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            <?php   } ?>


            <?php if(ale_get_option('twi')) { ?>
                <a href="<?php echo ale_get_option('twi');?>" target=_blank>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a>
            <?php   } ?>

            <?php if(ale_get_option('fb')) { ?>
                <a href="<?php echo ale_get_option('fb');?>" target=_blank>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
            <?php   } ?>
        </div>
    </div>

</div>
</footer>

<!--     <div class="center">
        <ul class="nav">
            <li><span><?php echo ale_get_option('footermenutitle'); ?></span>
                <?php
                if ( has_nav_menu( 'footer_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'footer_menu',
                        'menu'          => 'Footer Menu',
                        'menu_class'    => 'footermenu cf',
                        'walker'        => new Aletheme_Nav_Walker(),
                        'container'     => '',
                    ));
                }
                ?>
            </li>
        </ul>
    </div> -->


<!--         <?php if (ale_get_option('copyrights')) : ?>
            <p class="right"><?php echo ale_option('copyrights'); ?></p>
        <?php else: ?>
            <p class="right">&copy; <?php _e('2013 ALL RIGHTS RESERVED', 'aletheme')?></p>
        <?php endif; ?>

        <ul class="left">
            <?php if(ale_get_option('fb')){ echo '<li class="facebook"><a href="'.ale_get_option('fb').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('twi')){ echo '<li class="twitter"><a href="'.ale_get_option('twi').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('gog')){ echo '<li class="google"><a href="'.ale_get_option('gog').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('pint')){ echo '<li class="pinterest"><a href="'.ale_get_option('pint').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('flickr')){ echo '<li class="flickr"><a href="'.ale_get_option('flickr').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('linked')){ echo '<li class="linkedin"><a href="'.ale_get_option('linked').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('insta')){ echo '<li class="instagram"><a href="'.ale_get_option('insta').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('emailcont')){ echo '<li class="mail"><a href="mailto:'.ale_get_option('emailcont').'" rel="external"></a></li>'; } ?>
            <?php if(ale_get_option('rssicon')){?><li class="rss"><a href="<?php echo home_url(); ?>/feed" rel="external"></a></li><?php } ?>
        </ul> -->
        <!-- Scripts -->
        <?php wp_footer(); ?>
    </body>
    </html>
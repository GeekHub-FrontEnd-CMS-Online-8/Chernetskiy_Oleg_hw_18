<?php get_header('blog'); ?>

    <h1 class="blog_head_title"></h1>
    <!--<div class="about_title_block">-->
        <!--<h1 class="about_title_block-title">about us</h1>-->
        <!--<p class="about_title_block-text">home / about</p>-->
    <!--</div>-->
</section>

<section class="blog">
    <div class="blog_box">

        <?php $query = new WP_Query( 'cat=3' ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="blog_box_item">
                <?php the_post_thumbnail( 'full' , 'class=blog_item_photo' ); ?>
                <div class="blog_box_item_icons">
                    <p class="blog_box_item_date"><?php the_date('F j, Y'); ?></p>
                    <p class="blog_box_item_comment"><i class="far fa-comment-alt"></i> 8</p>
                    <p class="blog_box_item_like"><i class="fas fa-heart"></i> 15</p>
                </div>
                <h3 class="blog_box_item_title"><?php the_title(); ?></h3>
                <div class="blog_box_item_text"><?php the_excerpt(); ?></div>
                <p class="blog_box_item_link"><a href="<?php the_permalink(); ?>">continue reading &#8702;</a></p>
            </div>

        <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <div class="blog_box_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/blog_1.png" alt="">
            <div class="blog_box_item_icons">
                <p class="blog_box_item_date">October 13, 2015</p>
                <p class="blog_box_item_comment"><i class="far fa-comment-alt"></i> 8</p>
                <p class="blog_box_item_like"><i class="fas fa-heart"></i> 15</p>
            </div>
            <h3 class="blog_box_item_title">THE BIG LEAGUES OUR TURN STRAIGHTNIN</h3>
            <div class="blog_box_item_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p></div>
            <p class="blog_box_item_link"><a href="#">continue reading &#8702;</a></p>
        </div>
        <div class="blog_box_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/blog_1.png" alt="">
            <div class="blog_box_item_icons">
                <p class="blog_box_item_date">October 13, 2015</p>
                <p class="blog_box_item_comment"><i class="far fa-comment-alt"></i> 8</p>
                <p class="blog_box_item_like"><i class="fas fa-heart"></i> 15</p>
            </div>
            <h3 class="blog_box_item_title">THE BIG LEAGUES OUR TURN STRAIGHTNIN</h3>
            <div class="blog_box_item_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p></div>
            <p class="blog_box_item_link"><a href="#">continue reading &#8702;</a></p>
        </div>
        <div class="blog_box_item">
            <img src="<?php bloginfo('template_url') ?>/img/blog/blog_1.png" alt="">
            <div class="blog_box_item_icons">
                <p class="blog_box_item_date">October 13, 2015</p>
                <p class="blog_box_item_comment"><i class="far fa-comment-alt"></i> 8</p>
                <p class="blog_box_item_like"><i class="fas fa-heart"></i> 15</p>
            </div>
            <h3 class="blog_box_item_title">THE BIG LEAGUES OUR TURN STRAIGHTNIN</h3>
            <div class="blog_box_item_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p></div>
            <p class="blog_box_item_link"><a href="#">continue reading &#8702;</a></p>
        </div>
    </div>

    <?php get_sidebar(); ?>
</section>

<section class="bottom">
    <div class="bottom_block">
        <div class="bottom_title-block">
            <h2 class="bottom_title-block_text">YOU THINK WE'RE COOL ? LET'S WORK TOGETHER</h2>
            <div class="bottom_title-block_btn">
                <a href="#">get in touch</a>
            </div>
        </div>
        <div class="bottom_form-block">
            <h2 class="bottom_form-block_title">STAY INFORMED WITH OUR NEWSLETTER</h2>
            <p class="bottom_form-block_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <form action="#" method="post" class="form_block">
                <label>
                    <input class="form_block_item" type="email" name="E-mail" placeholder="your email" required>
                </label>
                <div>
                    <button class="form_block_button" type="submit">send</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
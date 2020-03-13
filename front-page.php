<?php

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
             <!-- Featured Products Gallery -->
            <div class="featured-products fp-section">
                <div class="first-container">
                    <div class="intro-container">
                        <div class="intro">
                            <h2><?php the_field('heading'); ?></h2>
                            <p><?php the_field('intro'); ?></p>
                        </div>
                    </div><!-- intro-container -->

                        <!-- PRODUCT 1 -->
                    <div class="product-1 product">
                        <div class="product-1-img product-img">
                            <?php 
                            $image = get_field('product_1');
                            if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                        <div class="product-1-desc product-desc">
                            <p><?php the_field('product_1_description'); ?></p>
                        </div>
                        <div class="shop-btn">
                            <button><a href="/shop">Shop Now</a></button>
                        </div>
                    </div>
                </div>

                <!-- PRODUCT 2 -->
                <div class="product-2 product">
                    <div class="product-2-img product-img">
                        <?php 
                        $image = get_field('product_2');
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>

                    <div class="product-2-desc product-desc">
                        <p><?php the_field('product_1_description'); ?></p>
                    </div>
                    <div class="shop-btn">
                        <button><a href="/shop">Shop Now</a></button>
                    </div>
                </div>

                <!-- PRODUCT 3 -->
                <div class="product-3 product">
                        <div class="product-3-img product-img">
                            <?php 
                            $image = get_field('product_3');
                            if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        
                        <div class="product-3-desc product-desc">
                            <p><?php the_field('product_1_description'); ?></p>
                        </div>
                        <div class="shop-btn">
                            <button><a href="/shop">Shop Now</a></button>
                        </div>
                    </div>


            </div><!-- Featured Products Gallery -->

            <!-- Front Page 2 - About Section -->
            <div class="about-container fp-section">
                <div class="about-img">
                    <?php 
                        $image = get_field('about_image');
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="about-text">
                    <h2><?php the_field('about_heading'); ?></h2>
                    <p><?php the_field('about_text'); ?></p>
                </div>
            </div>

            <!-- Instagram Feed -->
            <div class="instagram-container fp-section">
                <div class="insta-header">
                    <h2><?php the_field('instagram_heading'); ?></h2>
                </div>
                <?php if ( is_active_sidebar( 'instagram' ) ) : ?>
                    <div id="instagram-widget" class="instagram-widget widget-area" role="complementary">
                    <?php dynamic_sidebar( 'instagram' ); ?>
                </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </div>

            <!-- Reviews -->
            <div class="reviews-container">
                <h2><?php the_field('reviews_section_title') ?></h2>
                <div class="reviews-inner">
                    <div class="review-1 reviews">
                        <div class="reviews-text">
                            <p><?php the_field('review_1'); ?></p>
                            <p class="customer-name"><?php the_field('review_name_1'); ?><p>
                        </div>
                        <div class="reviews-product">
                                <div class="image-container">
                                    <?php 
                                        $image = get_field('product_image_1');
                                        if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <a href="/shop"><button>Shop Now</button></a>
                                </div>
                                <p><?php the_field('product_name_1'); ?></p>
                            </div>
                        </div><!-- Review 3 -->
                    
                    <!-- Review 2 -->
                    <div class="review-2 reviews">
                        <div class="reviews-text">
                            <p><?php the_field('review_2'); ?></p>
                            <p class="customer-name"><?php the_field('review_name_2'); ?><p>
                        </div>
                        <div class="reviews-product">
                                <div class="image-container">
                                    <?php 
                                        $image = get_field('product_image_2');
                                        if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <a href="/shop"><button>Shop Now</button></a>
                                </div>
                                <p><?php the_field('product_name_2'); ?></p>
                            </div>
                        </div><!-- Review 2 -->

                    <!-- Review 3 -->
                    <div class="review-3 reviews">
                        <div class="reviews-text">
                            <p><?php the_field('review_3'); ?></p>
                            <p class="customer-name"><?php the_field('review_name_3'); ?><p>
                        </div>
                        <div class="reviews-product">
                                <div class="image-container">
                                    <?php 
                                        $image = get_field('product_image_3');
                                        if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <a href="/shop"><button>Shop Now</button></a>
                                </div>
                                <p><?php the_field('product_name_3'); ?></p>
                            </div>
                        </div><!-- Review 3 -->
                    </div> <!-- Reviews Inner -->
                </div><!-- Reviews Container -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();

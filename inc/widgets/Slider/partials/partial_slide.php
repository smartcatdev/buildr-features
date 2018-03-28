<div class="slide" style="height: <?php echo !empty( $instance['slider_height'] ) ? esc_attr( $instance['slider_height'] ) : 600; ?>px; background-image: url(<?php echo esc_url( $instance['slide_image_' . $slide] ); ?>);">

    <div class="slide-inner primary-gradient">

        <div class="flex-container-wrap">
            
            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <div class="slide-content">

                            <?php if ( !empty( $instance['slide_pre_title_' . $slide] ) ) : ?>
                                <span class="pre-title wow fadeInLeftBig">
                                    <?php echo esc_html( $instance['slide_pre_title_' . $slide] ); ?>
                                </span>
                            <?php endif; ?>

                            <?php if ( !empty( $instance['slide_title_' . $slide] ) ) : ?>
                                <h2 class="slide-title wow fadeInLeft">
                                    <?php echo esc_html( $instance['slide_title_' . $slide] ); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if ( !empty( $instance['slide_caption_' . $slide] ) ) : ?>
                                <p class="wow fadeInLeft">
                                    <?php echo esc_html( $instance['slide_caption_' . $slide] ); ?>
                                </p>
                            <?php endif; ?>

                            <?php if ( !empty( $instance['slide_button_label_' . $slide] ) && !empty( $instance['slide_button_url_' . $slide] ) ) : ?>
                                <a class="button hollow wow fadeInUpBig" href="<?php echo esc_url( $instance['slide_button_url_' . $slide] ); ?>">
                                    <?php echo esc_html( $instance['slide_button_label_' . $slide] ); ?>
                                </a>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>

    </div>

</div>
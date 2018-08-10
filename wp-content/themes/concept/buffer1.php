<?php //codes from page-services.php ?>
<div class="row">

               <?php

               $args = array( 'post_type' => 'services', 'posts_per_page' => 6 );
                        $the_query = new WP_Query( $args ); ?>
                        <?php if ( $the_query->have_posts() ) {?>
                        <?php while ( $the_query->have_posts() ) { $the_query->the_post();

                ?>


               <div class="col-md-4 col-sm-6 ">
                  <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                     <span class="icon">
                        <!--Extracting the icon from the custom field -->
                        <?php $icon = get_post_meta(get_the_id(), 'icon', true); ?>
                        <i class="icon-<?php echo $icon; ?>"></i>
                     </span>
                     <h3><?php the_title(); ?></h3>
                     <p><?php //the_content(); 
                        echo wp_trim_words(get_the_content(), 4); ?></p>
                     <p><a href="<?php  the_permalink(); ?>">Learn more</a></p>
                  </div>
               </div>
                  <?php wp_reset_postdata(); } }
   ?>
</div>
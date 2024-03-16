<?php get_header() ?>

<div>
      <section class='px-[100px]'>
        <?php
              $args = array(
                'post_type' => 'formation',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'id', // ou title, date
                'order' => 'ASC', // ou ASC (par ordre decroissant, alphabethique,)
                'categ_formation' => ["informatique", "anglais", "japonais", "espagnol", "management"]
                
              );
              $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="flex gap-15 justify-between items-center">
          <!-- {/* text */} -->
          <div class=" flex-1">
            <!-- {/* angalis jour */} -->
            <div class="flex flex-col gap-2">
              <p class="text-[24px] font-semibold pb-5 md:text-[30px] xl:text-[35px] "><?php the_title(); ?></p>
              <div class="flex flex-col gap-3">
                <!-- {/* anglais du mardi */} -->
                <div class="">
                  <p class="pb-1 md:text-[20px]"> <span class='font-semibold'>Date:</span> <span class='text-[#c5842c]'><?php echo the_field("Date du jour")?></span></p>
                  <p class="md:text-[20px]">Heure: <span class='font-semibold'><?php echo the_field("Heure du jour")?></span></p>
                </div>
                <!-- {/* anglais du samedi */} -->
                <div class="">
                  <p class="pb-1 text-[20px]"><span class='font-semibold'>Date:</span> <span class='text-[#c5842c]'><?php echo the_field("date2_du_matin")?></span></p>
                  <p class="text-[20px]">Heure: <span class="font-semibold"><?php echo the_field("heure2_du_jour")?> </span> </p>
                </div>
              </div>
              <p class="text-[20px]"><span class='text-[#c5842c] font-semibold '>Lieu: </span> <?php echo the_field("lieu_du_matin")?> </p>
            </div>
            <!-- {/* anglais du soir */} -->
            <div class="flex flex-col gap-2">
              <p class="text-[24px] font-semibold py-5 md:text-[30px] xl:text-[35px]"><?php echo the_field("cours_du_soir")?></p>
              <div class="flex flex-col gap-3">
                <!-- {/* anglais mardi */} -->
                <div class="">
                  <p class="pb-1 md:text-[20px]"><span class='font-semibold '>Date:</span> <span class='text-[#c5842c]'><?php echo the_field("date_du_soir")?></span></p>
                  <p class="md:text-[20px]">Heure: <span class='font-semibold'><?php echo the_field("heure_du_soir")?></span></p>
                </div>
                <!-- {/* anglais jeudi */} -->
                <div class="">
                  <p class="pb-1 md:text-[20px]"><span class='font-semibold'>Date:</span> <span class='text-[#c5842c]'><?php echo the_field("date2_du_soir")?></span></p>
                  <p class="md:text-[20px]">Heure: <span class='font-semibold'><?php echo the_field("heure2_du_soir")?></span> </p>
                </div>
              </div>
              <p class="md:text-[20px]"><span class='text-[#c5842c] font-semibold'>Lieu: </span><?php echo the_field("lieu_du_soir")?></p>
            </div>
          </div>
          <!-- {/* image */} -->
          <div class="flex-1">
            <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
            <img src="<?= $featured_img_url; ?>" alt="" class="h-full w-full">
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
            show 404 error here
        Nothing to show
        <?php endif; ?> 
      </section>
 </div>


<?php get_footer() ?>
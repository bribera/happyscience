<?php get_header() ?>

<div>
      <div class=" relative">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/courses/bg-courses.jpg" alt="" class="object-cover w-full h-[500px]">
        <div class=" absolute top-0 h-full w-[100%] bg-[#ffbc3a] bg-opacity-60"></div>
        <div class="absolute flex justify-center items-center bottom-0 h-fit w-full p-[15px] mx-auto">
          <p class="mb-[20px] text-white text-[50px] font-semibold">Notre Blog</p>
        </div>
      </div>
      <section class="relative block bg-slate-50 px-[50px] lg:px-[50px]">
        <div class="flex flex-row gap-10">
            <div class="basis-[100%] md:basis-[70%] ">
                <!-- {/* aricle */} -->
                <div class="mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">

                    <?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 4,
						'orderby' => 'id', // ou title, date
						'order' => 'ASC' // ou ASC (par ordre decroissant, alphabethique,)
					);
					$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post(); ?>

                        <div class="bg-white rounded-lg border ">
                            <div class="relative">
                                <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                                <img src="<?= $featured_img_url; ?>" alt="" class="h-full w-full">
                                <div class="absolute flex flex-col text-white bg-[#0000FF] p-2 top-0">
                                    <?php $date_creation = get_the_date(); ?>
                                    <?php $heure_creation = get_the_time(); ?>
                                    <p class="font-semibold"><?php echo $date_creation; ?></p> 
                                    <p class=""><?php echo $heure_creation; ?></p>
                                    <!-- <p class="">2023</p> -->
                                </div>
                            </div>
                            <div class=" p-4">
                                <div class="py-4">
                                    <p class="font-semibold text-xl mb-2 xl:text-[28px]"><?php the_title(); ?></p>
                                    <p class="text-gray-700 text-base xl:text-[25px] exemp"><?php the_excerpt(); ?></p>   
                                </div>
                                <?php $nb_commentaires = get_comments_number(); ?>
                                <div class="details p-4 flex justify-between">
                                    <button class='btn2 xl:text-[24px] xl:py-[7pxpx] xl:px-[11px] rounded-full flex justify-center items-center'>
                                        <a href="#" class="hover:underline xl:text-[24px] xl:py-[10px] xl:px-[13px]">Lire plus</a>
                                        <i class="fa-solid fa-arrow-right text-[24px]"></i>
                                    </button>
                                    <div class="flex items-center gap-3 xl:text-[24px]">
                                        <p class="text-[#ffbc3a]"><?php echo the_field("auteur")?></p>
                                        <div class="flex items-center gap-1">
                                            <i class="fa-regular fa-comment-dots"></i>
                                            <p class=""><?php echo $nb_commentaires; ?></p>
                                        </div>                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                        show 404 error here
                    Nothing to show
                    <?php endif; ?> 
                    
                    </div>
                </div> 
            </div>
            <div class="hidden md:flex basis-[30%] p-4 w-full relative bg-[#fff8eb]">
                <div class="">
                    <div class="sidebar-box">
                        <form action="" class="">
                            <div class="relative items-center justify-center flex border rounded-sm ">
                            <input type="text" class='h-[36px] bg-white text-gray-400 border-none w-full pl-1' placeholder='Recherche...' />
                            <div class="absolute top-[10%] right-[20px] translate-y-[50%]">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <div class="">
                            <p class="py-[20px] text-[22px] font-semibold">Les nouvelles récentes</p>
                            <div class=" flex flex-col gap-5">
                            <!-- {/* first news */} -->
                            <?php
                                $random_args = array(
                                    'post_type'      => 'post',
                                    'post_status'    => 'publish',
                                    'orderby'        => 'rand',
                                    'posts_per_page' => 3
                                );
                                $random_query = new WP_Query( $random_args );

                                // Vérifier si des articles aléatoires sont trouvés
                                if ( $random_query->have_posts() ) : ?>
                                    <?php while ( $random_query->have_posts() ) : $random_query->the_post(); ?>
                            
                             <div class="">
                                <a href="/blog-single">
                                <div class="flex justify-center items-center gap-2">
                                <!-- {/* Image */} -->
                                <div class="">
                                    <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                                    <img src="<?= $featured_img_url; ?>" alt="" class="h-[252px]">
                                </div>
                                <!-- {/* text */} -->
                                <div class="flex flex-col text-[14px] gap-2 justify-start">
                                    <p class="font-semibold"><?php the_title(); ?></p>
                                    <p class="py-2"><?= custom_excerpt (get_the_content(), 20); ?></p>
                                    <?php $date_creation = get_the_date(); ?>
                                    <?php $heure_creation = get_the_time(); ?>
                                    <div class="flex gap-2 items-center"> 
                                        <span class='text-[#ffbc3b] text-[12px]'><i class="fa-regular fa-clock"></i> <?php echo $heure_creation; ?></span>
                                        <p class="text-[12px] text-slate-400"><?php echo $date_creation; ?></p>
                                    </div>
                                </div>
                                </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="py-[20px] text-[22px] font-semibold">Tags</p>
                        <div class="">
                            <div class="uppercase ">
                            
                                <a href="/blog" class="min-h-[50px] inline-block leading-[10px] hover:bg-[#c5842c] hover:border-white  hover:text-white px-[15px] py-[10px] w-fit border border-[#f6783a] mr-[5px] mb-[8px] text-center rounded-[2px]">Informatique</a>
                            
                            
                                <a class='min-h-[50px] inline-block leading-[10px] hover:bg-[#c5842c] hover:border-white  hover:text-white px-[15px] py-[10px] border border-[#f6783a] mr-[5px] mb-[8px] w-fit text-center rounded-[2px]' href="/blog">Angalis</a>
                            
                            
                                <a class='min-h-[50px] inline-block leading-[10px] hover:bg-[#c5842c] hover:border-white  hover:text-white px-[15px] py-[10px] border border-[#f6783a] mr-[5px] mb-[8px] w-fit text-center rounded-[2px]' href="/blog">Japonais</a>
                            
                            
                                <a class='min-h-[50px] inline-block leading-[10px] hover:bg-[#c5842c] hover:border-white  hover:text-white px-[15px] py-[10px] border border-[#f6783a] mr-[5px] mb-[8px] w-fit text-center rounded-[2px]' href="/blog">Gestion de Projet</a>
                            
                            
                                <a class='min-h-[50px] inline-block leading-[10px] hover:bg-[#c5842c] hover:border-white  hover:text-white px-[15px] py-[10px] border border-[#f6783a] mr-[5px] mb-[8px] w-fit text-center rounded-[2px]' href="/blog">Dance</a>
                            
                            
                                <a class='min-h-[50px] inline-block leading-[10px] hover:bg-[#c5842c] hover:border-white  hover:text-white px-[15px] py-[10px] border border-[#f6783a] mr-[5px] mb-[8px] w-fit text-center rounded-[2px]' href="/blog">Espagnol</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- {/* pagination */} -->
        <div class="mt-5">
            <nav aria-label="Page navigation example">
            <ul class="flex items-center gap-1 -space-x-px h-10 text-base">
                <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-full hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                </a>
                </li>
                <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight rounded-full text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight rounded-full text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                <a href="#" aria-current="page" class="z-10 flex items-center justify-center rounded-full px-4 h-10 leading-tight text-[#ffbc3a] border border-white bg-[#ffbc3a]-50 hover:bg-[#ffbc3a]-100 hover:text-[#ffbc3a]-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight rounded-full text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight rounded-full text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight rounded-full text-gray-500 bg-white border border-gray-300 rounded-full hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                </a>
                </li>
            </ul>
            </nav>
        </div>   
      </section>
</div>



<?php get_footer() ?>

<!-- <div class="bg-white rounded-lg border ">
    <div class="relative">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article.jpg" alt="" class="w-full h-48 rounded-t-md object-cover">
        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
            <p class="font-semibold">01</p>
            <p class="">Nov.</p>
            <p class="">2023</p>
        </div>
    </div>
    <div class=" p-4">
    <div class="font-semibold text-xl mb-2">Skills To Develop Your Child Memory</div>
    <p class="text-gray-700 text-base">
        This is a simple blog card example using Tailwind CSS. You can replace this text with your own blog content.
    </p>
    </div>
    <div class=" p-4 flex justify-between">
        <button class='btn2 rounded-full flex justify-center items-center'>
        <a href="#" class="hover:underline">Read More</a>
        <i class="fa-solid fa-arrow-right text-[24px]"></i>
        </button>
        <div class="flex items-center gap-3">
            <p class="text-[#ffbc3a]">Admin</p>
            <div class="flex items-center gap-1">
                <i class="fa-regular fa-comment-dots"></i>
                <p class=""> 5 </p>
            </div>                   
        </div>
    </div>
</div>
<div class="bg-white rounded-lg border ">
    <div class="relative">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article.jpg" alt="" class="w-full h-48 rounded-t-md object-cover">
        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
            <p class="font-semibold">01</p>
            <p class="">Nov.</p>
            <p class="">2023</p>
        </div>
    </div>
    <div class=" p-4">
    <div class="font-semibold text-xl mb-2">Skills To Develop Your Child Memory</div>
    <p class="text-gray-700 text-base">
        This is a simple blog card example using Tailwind CSS. You can replace this text with your own blog content.
    </p>
    </div>
    <div class=" p-4 flex justify-between">
        <button class='btn2 rounded-full flex justify-center items-center'>
        <a href="#" class="hover:underline">Read More</a>
        <i class="fa-solid fa-arrow-right text-[24px]"></i>
        </button>
        <div class="flex items-center gap-3">
            <p class="text-[#ffbc3a]">Admin</p>
            <div class="flex items-center gap-1">
                <i class="fa-regular fa-comment-dots"></i>
                <p class=""> 5 </p>
            </div>                   
        </div>
    </div>
</div>
<div class="bg-white rounded-lg border ">
    <div class="relative">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article.jpg" alt="" class="w-full h-48 rounded-t-md object-cover">
        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
            <p class="font-semibold">01</p>
            <p class="">Nov.</p>
            <p class="">2023</p>
        </div>
    </div>
    <div class=" p-4">
    <div class="font-semibold text-xl mb-2">Skills To Develop Your Child Memory</div>
    <p class="text-gray-700 text-base">
        This is a simple blog card example using Tailwind CSS. You can replace this text with your own blog content.
    </p>
    </div>
    <div class=" p-4 flex justify-between">
        <button class='btn2 rounded-full flex justify-center items-center'>
        <a href="#" class="hover:underline">Read More</a>
        <i class="fa-solid fa-arrow-right text-[24px]"></i>
        </button>
        <div class="flex items-center gap-3">
            <p class="text-[#ffbc3a]">Admin</p>
            <div class="flex items-center gap-1">
                <i class="fa-regular fa-comment-dots"></i>
                <p class=""> 5 </p>
            </div>                   
        </div>
    </div>
</div> -->

 <!-- {/* second news */} -->
 <!-- <div class="">
    <a href="/blog-single">
    <div class="flex justify-center items-center gap-2">
    {/* Image */}
    <div class="">
        <Image src="/images/blog/blog-single.jpg" alt='' width={500} height={500} class=' w-[90%] h-[80px]'/>
    </div>
    {/* text */}
    <div class="flex flex-col text-[14px] gap-2 justify-start">
        <p class="font-semibold">Comment réussir son master?</p>
        <div class="flex gap-2 items-center"> 
        <span class='text-[#ffbc3b] text-[12px]'><i class="fa-regular fa-clock"></i></span>
        <p class="text-[12px] text-slate-400">24 Mars 2023</p>
        </div>
    </div>
    </div>
    </a>
</div> -->
<!-- {/* third news */} -->
<!-- <div class="">
    <a href="/blog-single">
    <div class="flex justify-center items-center gap-2">
    {/* Image */}
    <div class="">
        <Image src="/images/blog/blog-single.jpg" alt='' width={500} height={500} class=' w-[90%] h-[80px]'/>
    </div>
    {/* text */}
    <div class="flex flex-col text-[14px] gap-2 justify-start">
        <p class="font-semibold">Comment réussir son master?</p>
        <div class="flex gap-2 items-center"> 
        <span class='text-[#ffbc3b] text-[12px]'><i class="fa-regular fa-clock"></i></span>
        <p class="text-[12px] text-slate-400">24 Mars 2023</p>
        </div>
    </div>
    </div>
    </a>
</div> -->
<!-- {/* four news */} -->
<!-- <div class="">
    <a href="/blog-single">
    <div class="flex justify-center items-center gap-2">
    {/* Image */}
    <div class="">
        <Image src="/images/blog/blog-single.jpg" alt='' width={500} height={500} class=' w-[90%] h-[80px]'/>
    </div>
    {/* text */}
    <div class="flex flex-col text-[14px] gap-2 justify-start">
        <p class="font-semibold">Comment réussir son master?</p>
        <div class="flex gap-2 items-center"> 
        <span class='text-[#ffbc3b] text-[12px]'><i class="fa-regular fa-clock"></i></span>
        <p class="text-[12px] text-slate-400">24 Mars 2023</p>
        </div>
    </div>
    </div>
    </a>
</div> -->
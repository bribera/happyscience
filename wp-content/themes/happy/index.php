<?php get_header() ?>

    <?php depicter(1); ?>

    <div class="">
        <div class="flex w-full ">
        <!-- {/* orange */} -->
            <div class=" bg-[#ffbc3a] flex-1 flex flex-col justify-center items-center gap-3 p-6">
                <!-- <IoLibraryOutline class='text-white text-[50px]'/> -->
                <i class="fa-solid fa-book-bookmark text-white text-[30px] xl:text-[35px]"></i>
                <div class="flex flex-col justify-center items-center gap-3">
                <p class="text-white text-[24px] xl:text-[30px]">Eduction special</p>
                <p class="text-white text-[18px] text-center xl:text-[20px]">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
            </div>
            <!-- {/* blue */} -->
            <div class="bg-[#5c5c76] flex-1 flex flex-col justify-center items-center gap-3 p-6">
                <!-- <PiStudentFill class='text-white text-[50px]'/> -->
                <i class="fa-solid fa-user-graduate text-white text-[30px] xl:text-[35px]"></i>
                <div class="flex flex-col justify-center items-center gap-3">
                <p class="text-white text-[24px] xl:text-[30px]">Eduction special</p>
                <p class="text-white text-[18px] text-center xl:text-[20px]">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- {/* courses */} -->
   <section class=''>
      <div class="flex flex-col justify-center items-center pb-[50px]">
        <h2 class='text-[#2A2F4A] text-[40px] xl:text-[50px] pb-[30px] text-center'>Nos formations</h2>
        <p class="text-center w-[600px] lg:w-[900px] xl:text-[24px]">eparated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
      </div>
     <!-- formation -->
     <div>
      <div class="flex flex-col lg:flex-row h-auto gap-3 px-[100px]">
        <!-- {/* left */} -->
        <div class=" lg:basis-[50%] ">
            <div class=" flex flex-col gap-5 w-full  h-full">
                <!-- {/* haut */} -->
                <div class="relative h-1/2">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/background/bg-bibliotheque.jpg" alt="" class="object-cover w-full h-full">
                    <div class="absolute bottom-[0px] bg-slate-500 bg-opacity-50 border-blur w-full ">
                        <div class="p-[15px] ">
                            <button class='btn1 xl:text-[24px] xl:py-[12px] xl:px-[15px]'>Débuter</button>
                            <p class="text-white my-[20px] xl:text-[22px]">Cours de Comptabilité</p>
                            <div class="flex justify-start gap-5 xl:text-[22px]">
                                <div class="flex gap-3 xl:text-[22px] justify-center items-center">
                                    <!-- <FaRegCalendarAlt class="text-white"/> -->
                                    <i class="fa-solid fa-calendar-days text-white"></i>
                                    <p class="text-white">En cours</p>
                                </div>
                                <div class="flex gap-3 xl:text-[22px] justify-center items-center">
                                    <!-- <FaRegComment class="text-white"/> -->
                                    <i class="fa-regular fa-comment text-white"></i>
                                    <p class="text-white xl:text-[22px]">30</p>
                                </div>
                                <div class="flex gap-3 xl:text-[22px] justify-center items-center">
                                    <!-- <i class="fa-regular fa-user text-white"></i> -->
                                    <i class="fa-regular fa-user text-white"></i>
                                    <p class="text-white">Arsène YATTA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {/* bas */} -->
                <div class="relative h-1/2">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/background/bg-bibliotheque.jpg" alt="" class="object-cover w-full h-full">
                    <div class="absolute bottom-[0px] bg-slate-500 bg-opacity-50 border-blur w-full ">
                        <div class="p-[15px] ">
                            <button class='btn1 xl:text-[24px] xl:py-[12px] xl:px-[15px]'>Débuter</button>
                            <p class="text-white my-[20px] xl:text-[22px]">Cours d'Infographie</p>
                            <div class="flex justify-start gap-5 xl:text-[22px]">
                                <div class="flex gap-3 xl:text-[22px] justify-center items-center">
                                    <i class="fa-solid fa-calendar-days text-white"></i>
                                    <p class="text-white">En cours</p>
                                </div>
                                <div class="flex gap-3 justify-center items-center">
                                    <i class="fa-regular fa-comment text-white"></i>
                                    <p class="text-white">30</p>
                                </div>
                                <div class="flex gap-3 justify-center items-center">
                                    <i class="fa-regular fa-user text-white"></i>
                                    <p class="text-white">Arsène YATTA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- {/* right */} -->
        <div class=" hidden lg:flex h-auto basis-[50%]">
            <div class="relative  h-full">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/formation/informatic-class.jpg" alt="" class="object-cover w-full h-full">
                    <div class="absolute bottom-[0px] bg-slate-500 bg-opacity-50 border-blur w-full h-auto">
                        <div class="p-[15px] ">
                            <button class='btn1 xl:text-[24px] xl:py-[12px] xl:px-[15px]'>Débuter</button>
                            <p class="text-white my-[20px] xl:text-[22px]">Cours d'Informatique</p>
                            <div class="flex justify-start gap-5 xl:text-[22px]">
                                <div class="flex gap-3 justify-center items-center">
                                    <!-- <FaRegCalendarAlt class="text-white"/> -->
                                    <i class="fa-solid fa-calendar-days text-white"></i>
                                    <p class="text-white">En cours</p>
                                </div>
                                <div class="flex gap-3 justify-center items-center">
                                    <!-- <FaRegComment class="text-white"/> -->
                                    <i class="fa-regular fa-comment text-white"></i>
                                    <p class="text-white">30</p>
                                </div>
                                <div class="flex gap-3 justify-center items-center">
                                    <!-- <i class="fa-regular fa-user text-white"></i> -->
                                    <i class="fa-regular fa-user text-white"></i>
                                    <p class="text-white">Arsène YATTA</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
      </div>
    </div>
   </section>
    <!-- {/* etablissemment */} -->
    <section class="bg-[#F2EDE3]">
      <div class="flex flex-col justify-center items-center pb-[50px]">
        <h2 class='text-[#2A2F4A] text-[40px] xl:text-[50px] pb-[30px] text-center'>Découvrez notre centre de formation</h2>
        <p class="text-center w-[600px] lg:w-[900px] xl:text-[24px]">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
      </div>
      <!-- Boss -->
      <div class="grid grid-cols-3 gap-5 px-[100px] xl:text-[24px]">
        <!-- {/* président */} -->
        <div class="">
            <div class="group relative overflow-hidden text-center block ease-in-out transition duration-500 hover:text-[#ffbc3a]">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/teachers/woman3-teacher.jpg" alt="" class="w-full h-full object-cover">
                <!-- <Image src="/images/teachers/woman3-teacher.jpg" alt='' width={500} height={500} class='' /> -->
                <p class="text-[20px] xl:text-[24px] font-semibold pt-[30px]">Bienvenu ASSOGBA</p>
                <div class="absolute group-hover:bg-slate-200 group-hover:w-full bg-opacity-10 p-1 bottom-[70px] hidden font-bold transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:flex group-hover:justify-center group-hover:gap-5 group-hover:curseur-pointer">
                    <div class="">
                        <a href="/"> 
                            <!-- <SlSocialFacebook class=''/>   -->
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="">
                        <a href="/">
                            <!-- <SlSocialaedin class=''/>   -->
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="">
                        <a href="/">
                         <!-- <PiWhatsappLogoLight class='text-[18px]'/> -->
                         <i class="fa-brands fa-whatsapp"></i>  
                        </a>
                    </div>
                </div>
            </div>
            <!-- {/* text */} -->
            <div class="text-center py-[20px]  font-normal">
                <p class="">Président HAPPY SCIENCE</p>
            </div>
        </div>
        <!-- {/* coordonnateur */} -->
        <div class="">
            <div class="group relative overflow-hidden text-center block ease-in-out transition duration-500 hover:text-[#ffbc3a]">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/teachers/man-teacher.jpg" alt="" class="object-cover w-full h-full">
                <!-- <Image src="/images/teachers/man-teacher.jpg" alt='' width={500} height={500} class='' /> -->
                <p class="text-[20px] xl:text-[24px] font-semibold pt-[30px]">Arsene YATTA</p>
                <div class="absolute group-hover:bg-slate-200 group-hover:w-full bg-opacity-10 p-1 bottom-[70px] hidden font-bold transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:flex group-hover:justify-center group-hover:gap-5 group-hover:curseur-pointer">
                    <div class="">
                        <a href="/"> 
                            <!-- <SlSocialFacebook class=''/>   -->
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="">
                        <a href="/">
                            <!-- <SlSocialaedin class=''/>   -->
                            <i class="fa-brands fa-linkedin-in"></i>                        </a>
                    </div>
                    <div class="">
                        <a href="/">
                         <!-- <PiWhatsappLogoLight class='text-[18px]'/> -->
                         <i class="fa-brands fa-whatsapp"></i>  
                        </a>
                    </div>
                </div>
            </div>
            <!-- {/* text */} -->
            <div class="text-center py-[20px] font-normal">
                <p class="">Coordonateur HAPPY SCIENCE</p>
            </div>
        </div>
        <!-- {/* Assitante de Direction */} -->
        <div class="">
            <div class="group relative overflow-hidden text-center block ease-in-out transition duration-500 hover:text-[#ffbc3a]">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/teachers/woman2-teacher.jpg" alt="" class="object-cover w-full h-full">
                <!-- <Image src="/images/teachers/woman2-teacher.jpg" alt='' width={500} height={500} class='' /> -->
                <p class="text-[20px] xl:text-[24px] font-semibold pt-[30px]">Bianca ASSOGBA</p>
                <div class="absolute group-hover:bg-slate-200 group-hover:w-full bg-opacity-10 p-1 bottom-[70px] hidden font-bold transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:flex group-hover:justify-center group-hover:gap-5 group-hover:curseur-pointer">
                    <div class="">
                        <a href="/"> 
                            <!-- <SlSocialFacebook class=''/>   -->
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="">
                        <a href="/">
                            <!-- <SlSocialaedin class=''/>   -->
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="">
                        <a href="/">
                         <!-- <PiWhatsappLogoLight class='text-[18px]'/> -->
                         <i class="fa-brands fa-whatsapp"></i>  
                        </a>
                    </div>
                </div>
            </div>
            <!-- {/* text */} -->
            <div class="text-center py-[20px] font-normal">
                <p class="">Assistante de Direction HAPPY SCIENCE</p>
            </div>
        </div>
      </div>
      
    </section>
    <!-- {/* Testimonial */} -->
    <section class="">
      <div class="flex flex-col justify-center items-center pb-[50px]">
        <h2 class='text-[#2A2F4A] text-[40px] pb-[30px] text-center'>Que disent nos étudiants de nous</h2>
        <p class="text-center w-[600px] lg:w-[900px]">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
      </div>
      <!--Testimonial slide -->
      <div class="testimonial">
        <main class="">
            <div class="slider">
                <div class="slide-row" id="slide-row">
                    <div class="slide-col">
                        <div class="content">
                            <p>Zen Doan is a business analyst, entrepreneur and media proprietor, and investor. She also known as the best selling book author.</p>
                            <h2>Zen</h2>
                            <p>Author</p>
                        </div>
                        <div class="hero">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/event-speakers/speaker-1.jpg" alt="" class="object-cover w-full h-full">
                        </div>
                    </div>
        
                    <div class="slide-col">
                        <div class="content">
                            <p>Jonathan Koletic is an American internet entrepreneur and media proprietor, and investor. He is the founder of the multi-national technology company Treymont.</p>
                            <h2>Jonathan</h2>
                            <p>Treymont Inc.</p>
                        </div>
                        <div class="hero">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/event-speakers/speaker-2.jpg" alt="" class="object-cover w-full h-full">
                        </div>
                    </div>
        
                    <div class="slide-col">
                        <div class="content">
                            <p>Charlie Green is an European entrepreneur and media consultant, and investor. He is the founder of the Hallmark Inc.</p>
                            <h2>Charlie</h2>
                            <p>Hallmark Inc.</p>
                        </div>
                        <div class="hero">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/event-speakers/speaker-3.jpg" alt="" class="object-cover w-full h-full">
                            <!-- <img src="https://user-images.githubusercontent.com/13468728/234031646-10533999-39e5-4c7b-ab54-d0299b13ce74.jpg" alt="avatar"> -->
                        </div>
                    </div>
                
                    <div class="slide-col">
                        <div class="content">
                            <p>Sarah Dam is an American internet entrepreneur and media proprietor, and investor. She is the founder of the multi-national technology company Zara.</p>
                            <h2>Sarah</h2>
                            <p>Zara Inc.</p>
                        </div>
                        <div class="hero">
                            <img src="https://github.com/ecemgo/ecemgo/assets/13468728/55116c98-5f9a-4b0a-9fdb-4911b52d5ef3" alt="avatar">
                        </div>
                    </div>

                </div>
            </div>
        
            <div class="indicator">
                <span class="btn4 active"></span>
                <span class="btn4"></span>
                <span class="btn4"></span>
                <span class="btn4"></span>
            </div>
        </main>
      </div>
      
    </section>
    <!-- {/* requete */} -->
    <section class="">
      <div class="relative w-full h-auto">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/requete/requete1.jpg" alt="" class="object-cover w-full h-full">
        <!-- <Image src="/images/requete/requete1.jpg" alt='' width={500} height={500} class=' w-full h-[450px] lg:h-full'/> -->
        <div class=" absolute bg-[#ffbc3a] inset-0 bg-opacity-40"></div>
        <div class="absolute flex top-0 text-white w-full md:py-[50px] justify-center items-center lg:pb-[180px] lg:pt-[110px] px-12">
            <div class="hidden lg:flex flex-1 w-full h-full"></div>
            <div class="flex-1 flex-col ">
              <div class="flex flex-col justify-start items-start">
                <p class="text-[30px] font-bold xl:text-[37px]">Faire un requête</p>
                <p class="py-[20px] xl:text-[25px]">
                  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                </p>
              </div>
              <div class="">
                <form action="" class=''>
                  <div class="grid grid-cols-2 gap-5 xl:text-[28px]">
                    <!-- {/* left */} -->
                    <div class="">
                      <div class="flex flex-col gap-5">
                          <div class="flex flex-col sm:col-span-3">
                            <label htmlFor="name" class='text-[18px] xl:text-[30px]'>Nom</label>
                            <input type="text" placeholder='Veuillez entre votre nom' class='bg-transparent inline-block border-b-2 text-white p-2 pl-5 placeholder:text-white' />
                          </div>
                        
                          
                          <div class="">
                            <select name="formation" id="" class='bg-transparent'> 
                              <option value="choix" class="text-slate-500 text-[18px]">Sélectionnez votre choix</option>
                              <option value="informatique" class="text-slate-500 text-[18px]">Informatique</option>
                              <option value="anglais" class="text-slate-500 text-[18px]">Anglais</option>
                              <option value="infographie" class="text-slate-500 text-[18px]">Infographie</option>
                              <option value="espagnol" class="text-slate-500 text-[18px]">Espagnol</option>
                            </select>
                          </div>
                          
                          <div class="flex flex-col justify-center">
                            <label htmlFor="message" class='text-[18px] xl:text-[30px]'>Message</label>
                            <div class="mt-2">
                              <textarea name="message" id="message" cols="" rows="3" placeholder='Veuillez entrez votre image' class='pl-5 placeholder:text-white bg-transparent border-b-2'></textarea>
                            </div>
                          </div>
                          
                      </div>
                      <!-- {/* <div class="grid grid-cols-2 gap-x-6 gap-y-8">
                        <div class="">
                          <select name="formation" id="" class='bg-transparent'> 
                            <option value="choix" class="text-slate-500">Sélectionnez votre choix</option>
                            <option value="informatique" class="text-slate-500">Informatique</option>
                            <option value="anglais" class="text-slate-500">Anglais</option>
                            <option value="infographie" class="text-slate-500">Infographie</option>
                            <option value="espagnol" class="text-slate-500">Espagnol</option>
                          </select>
                        </div>
                        <div class="">
                          <div class="flex flex-col justify-center sm:col-span-3">
                            <label htmlFor="name">Téléphone</label>
                            <input type="text" placeholder='Veuillez entre votre numéro' class='bg-transparent border-b-2 text-white p-2 pl-5' />
                          </div>
                        </div>
                      </div> */} -->
                      <!-- {/* <div class="grid grid-cols-2 gap-x-6 gap-y-8">
                        <div class="flex flex-col justify-center">
                          <label htmlFor="message">Message</label>
                          <div class="mt-2">
                            <textarea name="message" id="message" cols="" rows="3" placeholder='Veuillez entrez votre image' class='bg-transparent border-b-2'></textarea>
                          </div>
                        </div>
                        <div class=""></div>
                      </div> */} -->
                    </div>
                    <!-- {/* right */} -->
                    <div class="flex flex-col gap-5">
                      <div class="flex flex-col sm:col-span-3">
                            <label htmlFor="name" class="text-[18px] xl:text-[30px]">Prénom</label>
                            <input type="text" placeholder='Veuillez entre votre prénom' class='bg-transparent border-b-2 text-white p-2 pl-5 placeholder:text-white' />
                      </div>
                      <div class="">
                            <div class="flex flex-col justify-center sm:col-span-3">
                              <label htmlFor="name" class='text-[18px] xl:text-[30px]'>Téléphone</label>
                              <input type="text" placeholder='Veuillez entre votre numéro' class=' placeholder:text-white bg-transparent border-b-2 text-white p-2 pl-5' />
                            </div>
                      </div>
                      <div class="">
                        <button class='btn w-full rounded-full xl:px-[18px] xl:py-[28px] xl:text-[32px]'>Envoyez</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- {/* recents actualités */} -->
    <section class="">
      <div class="flex flex-col justify-center items-center pb-[50px]">
        <h2 class='text-[#2A2F4A] text-[40px] pb-[30px] text-center xl:text-[50px]'>Nos récentes articles de notre blog</h2>
        <p class="text-center w-[600px] lg:w-[900px] xl:w-[970px] xl:text-[24px]">here is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
      </div>
        <!-- Article -->
        <div class="container mx-auto xl:w-[2000px] p-4 px-[50px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4 xl:text-[24px]">
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
                        <img src="<?= $featured_img_url; ?>" alt="" class="h-[252px]">
                        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
                            <?php $date_creation = get_the_date(); ?>
                            <?php $heure_creation = get_the_time(); ?>
                            <p class="font-semibold"><?php echo $date_creation; ?></p> 
                            <p class=""><?php echo $heure_creation; ?></p>
                        </div>
                    </div>
                    <div class=" p-4">
                        <div class="font-semibold text-xl mb-2 xl:text-[28px]"><?php the_title(); ?></div>
                            <p class="text-gray-700 text-base xl:text-[20px]">
                                <?php the_excerpt(); ?>                    
                            </p>
                    </div>
                    <?php $nb_commentaires = get_comments_number(); ?>
                    <div class=" p-4 flex justify-between">
                        <button class='btn2 xl:text-[24px] xl:py-[7px] xl:px-[10px] rounded-full flex justify-center items-center'>
                            <a href="#" class="hover:underline xl:text-[24px] xl:py-[10px] xl:px-[13px]">Lire plus</a>
                            <i class="fa-solid fa-arrow-right text-[24px]"></i>
                        </button>
                        <div class="flex items-center gap-3">
                            <p class="text-[#ffbc3a]"><?php echo the_field("auteur")?></p>
                            <div class="flex items-center gap-1">
                                <i class="fa-regular fa-comment-dots"></i>
                                <p class=""><?php echo $nb_commentaires; ?></p>
                            </div>                   
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
                    show 404 error here
                Nothing to show
                <?php endif; ?> 
                <!-- <div class="bg-white rounded-lg border ">
                    <div class="relative">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article1.jpg" alt="" class="object-cover w-full h-full">
                        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
                            <p class="font-semibold">01</p>
                            <p class="">Nov.</p>
                            <p class="">2023</p>
                        </div>
                    </div>
                    <div class=" p-4">
                    <div class="font-semibold text-xl mb-2 xl:text-[28px]">Skills To Develop Your Child Memory</div>
                    <p class="text-gray-700 text-base xl:text-[20px]">
                        This is a simple blog card example using Tailwind CSS. You can replace this text with your own blog content.
                    </p>
                    </div>
                    <div class=" p-4 flex justify-between">
                        <button class='btn2 rounded-full flex justify-center items-center'>
                        <a href="#" class="hover:underline xl:text-[24px] xl:py-[10px] xl:px-[13px]">Read More</a>
                        <i class="fa-solid fa-arrow-right text-[24px]"></i>
                        </button>
                        <div class="flex items-center gap-3">
                            <p class="text-[#ffbc3a]">Admin</p>
                            <div class="flex items-center gap-1">
                                <MdOutlineMessage />
                                <p class=""> 5 </p>
                            </div>                   
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border ">
                    <div class="relative">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article2.jpg" alt="" class="object-cover w-full h-full">
                        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
                            <p class="font-semibold">01</p>
                            <p class="">Nov.</p>
                            <p class="">2023</p>
                        </div>
                    </div>
                    <div class=" p-4">
                    <div class="font-semibold text-xl mb-2 xl:text-[28px]">Skills To Develop Your Child Memory</div>
                    <p class="text-gray-700 text-base xl:text-[20px]">
                        This is a simple blog card example using Tailwind CSS. You can replace this text with your own blog content.
                    </p>
                    </div>
                    <div class=" p-4 flex justify-between">
                        <button class='btn2 rounded-full flex justify-center items-center'>
                        <a href="#" class="hover:underline xl:text-[24px] xl:py-[10px] xl:px-[13px]">Read More</a>
                        <i class="fa-solid fa-arrow-right text-[24px]"></i>
                        </button>
                        <div class="flex items-center gap-3">
                            <p class="text-[#ffbc3a]">Admin</p>
                            <div class="flex items-center gap-1">
                                <MdOutlineMessage />
                                <p class=""> 5 </p>
                            </div>                   
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border ">
                    <div class="relative">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article3.jpg" alt="" class="object-cover w-full h-full">
                        <div class="absolute text-white bg-[#0000FF] p-2 top-0">
                            <p class="font-semibold">01</p>
                            <p class="">Nov.</p>
                            <p class="">2023</p>
                        </div>
                    </div>
                    <div class=" p-4">
                    <div class="font-semibold text-xl mb-2 xl:text-[28px]">Skills To Develop Your Child Memory</div>
                    <p class="text-gray-700 text-base xl:text-[20px]">
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
                                <MdOutlineMessage />
                                <p class=""> 5 </p>
                            </div>                   
                        </div>
                    </div>
                </div> -->
            
            </div>
        </div>
    </section>

    <script>
            // slide testimonial
        const btns = document.querySelectorAll(".btn4");
        const slideRow = document.getElementById("slide-row");
        const main = document.querySelector("main");

        let currentIndex = 0;

        function updateSlide() {
        const mainWidth = main.offsetWidth;
        const translateValue = currentIndex * -mainWidth;
        slideRow.style.transform = `translateX(${translateValue}px)`;

        btns.forEach((btn4, index) => {
            btn4.classList.toggle("active", index === currentIndex);
        });
        }

        btns.forEach((btn4, index) => {
        btn4.addEventListener("click", () => {
            currentIndex = index;
            updateSlide();
        });
        });

        window.addEventListener("resize", () => {
        updateSlide();
        });

    </script>

<?php get_footer() ?>
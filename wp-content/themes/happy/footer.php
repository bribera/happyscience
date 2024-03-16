
<footer class=''>
      <section class="bg-[#2e1e01] px-[50px] flex justify-center items-center">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12">
          <!-- {/* logo */} -->
          <div class="flex flex-col gap-5">
            <!-- {/* logo.jpg */} -->
            <div class="">
              <a href="/" class='text-blue-500 text-[40px] xl:text-[50px]'>
                LOGO
              </a>
            </div>
            <!-- {/* text */} -->
            <p class="text-slate-300 xl:text-[24px]">
              Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.
            </p>
            <div class="flex items-center gap-3 ">
              <!-- {/* facebook */} -->
              <div class="">
                <a href="/" class='cursor-pointer text-[18px] xl:text-[24px] hover:text-[#ffbc3a]'>
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              </div>
              <!-- {/* whatsapp */} -->
              <div class="">
                <a href="/" class='cursor-pointer text-[18px] xl:text-[24px] hover:text-[#ffbc3a]'>
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
              </div>
              <!-- {/* aedink */} -->
              <div class="">
                <a href="/" class='cursor-pointer text-[18px] xl:text-[24px] hover:text-[#ffbc3a]'>
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- {/* useas */} -->
          <div class=" flex flex-col gap-5 text-slate-200">
            <div class="">
              <p class="text-white text-[24px] xl:text-[32px]">Liens Utiles</p>
            </div>
            <div class="flex flex-col gap-3 xl:text-[24px]">
              <a href="/">Home</a>
              <a href="/a-propos">A propos</a>
              <a href="/cours">Cours</a>
              <a href="/évenement">Evènements</a>
            </div>
          </div>
          <!-- {/* recente article */} -->
          <div class="flex flex-col gap-5">
            <div class="">
              <p class="text-white text-[24px] xl:text-[32px]">Les articles récentes</p>
            </div>
            <div class="">
              <div class="grid grid-cols-2 gap-3">
                <!-- {/* left */} -->
                <div class=" flex flex-col gap-3">
                  <div class="relative group block overflow-hidden text-center ease-in-out transition duration-500">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article.jpg" alt="" class="object-cover w-full h-full">

                  <!-- <Image src="/images/article/article.jpg" alt='' class='' width={500} height={500} /> -->
                    <div class="absolute hidden group-hover:bg-[#ffbc3a] group-hover:w-full group-hover:h-full 
                      group-hover:bg-opacity-40 top-0 group-hover:flex group-hover:justify-center group-hover:items-center
                      transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:curseur-pointer">
                        <div class="">
                          <a href="/" class='text-white'>
                            <i class="fa-solid fa-circle-plus"></i>
                          </a>
                        </div> 
                    </div>
                  </div>
                  <div class="relative group block overflow-hidden text-center ease-in-out transition duration-500">
                  <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article2.jpg" alt="" class="object-cover w-full h-full">
                  <!-- <Image src="/images/article/article2.jpg" alt='' class='' width={500} height={500} /> -->
                    <div class="absolute hidden group-hover:bg-[#ffbc3a] group-hover:w-full group-hover:h-full 
                      group-hover:bg-opacity-40 top-0 group-hover:flex group-hover:justify-center group-hover:items-center
                      transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:curseur-pointer">
                        <div class="">
                          <a href="/" class='text-white'>
                            <i class="fa-solid fa-circle-plus"></i>
                          </a>
                        </div> 
                    </div>
                  </div>
                </div>
                <!-- {/* right */} -->
                <div class=" flex flex-col gap-3">
                  <div class="relative group block overflow-hidden text-center ease-in-out transition duration-500">
                  <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article3.jpg" alt="" class="object-cover w-full h-full">

                  <!-- <Image src="/images/article/article3.jpg" alt='' class='' width={500} height={500} /> -->
                    <div class="absolute hidden group-hover:bg-[#ffbc3a] group-hover:w-full group-hover:h-full 
                      group-hover:bg-opacity-40 top-0 group-hover:flex group-hover:justify-center group-hover:items-center
                      transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:curseur-pointer">
                        <div class="">
                          <a href="/" class='text-white'>
                            <i class="fa-solid fa-circle-plus"></i>
                          </a>
                        </div> 
                    </div>
                  </div>
                  <div class="relative group block overflow-hidden text-center ease-in-out transition duration-500">
                    <!-- <Image src="/images/article/article1.jpg" alt='' class='' width={500} height={500} /> -->
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/article/article1.jpg" alt="" class="object-cover w-full h-full">
                    <div class="absolute hidden group-hover:bg-[#ffbc3a] group-hover:w-full group-hover:h-full 
                      group-hover:bg-opacity-40 top-0 group-hover:flex group-hover:justify-center group-hover:items-center
                      transition-all duration-500 ease-out group-hover:text-[#ffbc3a] group-hover:curseur-pointer">
                        <div class="">
                          <a href="/" class='text-white'>
                            <i class="fa-solid fa-circle-plus"></i>
                          </a>
                        </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- {/* contact */} -->
          <div class=" flex flex-col gap-5 text-slate-200">
            <div class="">
              <p class="text-white text-[24px] xl:text-[32px]"> Une préoccupation?</p>
            </div>
            <!-- {/* coordonnées */} -->
            <div class="flex flex-col gap-5">
              <!-- {/* appel */} -->
              <div class="flex items-center gap-3 xl:text-[24px]">
                <i class="fa-solid fa-phone"></i>
                <p class="">+229 97 79 29 04</p>
              </div>
              <!-- {/* email */} -->
              <div class="flex items-center gap-3 xl:text-[24px]">
                <i class="fa-solid fa-envelope"></i>
                <p class="">happyscience@gmail.com</p>
              </div>
              <!-- {/* localisation */} -->
              <div class="flex items-start gap-3 xl:text-[24px]">
                <div class="pt-1">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <p class="">Bénin, Abomey-Calavi, Carrefour Bidossessi, immeuble avant le supermarché AZIMA, dernier étage</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="bg-black py-[20px] xl:text-[24px]">
        <p class="text-center">Copyright ©2023 All rights reserved | This template is made by Bribéra AGOSSOU</p>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
<?php get_header() ?>


    <div class='bg-slate-200'>

      <section class="px-[50px] flex flex-col gap-12 text-[#c5842c]">
        <!-- {/* Anglais */} -->
        <div class=" bg-white rounded-lg hover:drop-shadow-xl hover:-translate-y-6  hover:ease-in-out hover:duration-700 hover:scale-100">
          <div class="flex gap-5  items-center">
            <!-- {/* image */} -->
            <div class="flex-1">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/courses/english.jpg" alt="" class="object-cover w-fit ">
            </div>
            <!-- {/* text */} -->
            <div class="flex-1 justify-center">
              <p class="text-[30px] font-bold xl:text-[60px]">Le cours débute bientôt!</p>
            </div>
          </div>
        </div>
        <!-- {/* Informatique */} -->
        <div class="bg-white rounded-lg hover:drop-shadow-xl hover:-translate-y-6  hover:ease-in-out hover:duration-700 hover:scale-100">
          <div class="flex md:gap-5 gap-24 justify-end items-center">
            
            <!-- {/* text */} -->
            <div class="pl-[20px] flex-1 justify-center">
              <p class="text-[30px] font-bold">Le cours débute bientôt!</p>
            </div>
            <!-- {/* image */} -->
            <div class="flex-1">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/courses/informatique.jpg" alt="" class="object-cover w-full ">
            </div>
          </div>
        </div>
        <!-- {/* danse */} -->
        <div class="bg-white rounded-lg hover:drop-shadow-xl hover:-translate-y-6  hover:ease-in-out hover:duration-700 hover:scale-100">
          <div class="flex gap-5  items-center">
            <!-- {/* image */} -->
            <div class="flex-1">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/courses/dance.jpg" alt="" class="object-cover w-full ">
            </div>
            <!-- {/* text */} -->
            <div class="flex-1 justify-center">
              <p class="text-[30px] font-bold xl:text-[60px]">Le cours débute bientôt!</p>
            </div>
          </div>
        </div>
        <!-- {/* gestion de projet */} -->
        <div class="bg-white rounded-lg hover:drop-shadow-xl hover:-translate-y-6  hover:ease-in-out hover:duration-700 hover:scale-100">
          <div class="flex gap-24 justify-end items-center">       
            <!-- {/* text */} -->
            <div class="pl-[20px] flex-1 justify-center">
              <p class="text-[30px] font-bold xl:text-[60px]">Le cours débute bientôt!</p>
            </div>
            <!-- {/* image */} -->
            <div class="flex-1">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/courses/management.jpg" alt="" class="object-cover w-full ">
            </div>
          </div>
        </div>
      </section>
      
    </div>

<?php get_footer() ?>
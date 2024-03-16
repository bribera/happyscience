<?php get_header() ?>


    <div>
      <section class='px-[50px]'>
        <div class="flex flex-row bg-white drop-shadow-xl rounded-lg">
          <div class="hidden lg:flex basis-[30%] rounded-tl-lg rounded-bl-lg text-white py-12 px-8 bg-[#c5842c] flex flex-col gap-5">
              <div class="flex flex-col gap-3">
                <p class="text-[30px] font-semibold">Prenez contact avec nous</p>
                <p class="text-[18px] text-slate-200">Nous sommes ouverte à toutes vos questions, suggestion ou pour toute discussion.</p>
              </div>
              <div class="flex flex-col gap-4">
                <!-- {/* Adresse */} -->
                <div class="flex flex-col gap-2">
                  <!-- {/* icon*/} -->
                  <div class="p-3 w-10 h-10 rounded-full border border-slate-300 text-[18px] flex items-center ">
                    <span><i class="fa-solid fa-location-dot"></i></span>
                  </div>
                  <!-- {/* adresse */} -->
                  <div class="">
                    <span class="font-semibold">Adresse: </span> 
                    Bénin, Abomey-Calavi, carrefour Bidossessi immeuble à côté su supermarché AZIMA
                  </div>
                </div>
                <!-- {/* Phone */} -->
                <div class="flex flex-col gap-2">
                  <!-- {/* icon */} -->
                  <div class="p-3 w-10 h-10 rounded-full border border-slate-300 text-[18px] flex items-center">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <!-- {/* adresse */} -->
                  <div class="">
                    <span class="font-semibold">Téléphone: </span> 
                    +229 97 79 29 07
                  </div>
                </div>
                <!-- {/* email */} -->
                <div class="flex flex-col gap-2">
                  <!-- {/* icon */} -->
                  <div class="p-3 w-10 h-10 rounded-full border border-slate-300 text-[18px] flex items-center">
                    <i class="fa-solid fa-envelope"></i>
                  </div>
                  <!-- {/* adresse */} -->
                  <div class="">
                    <span class="font-semibold">Email: </span> 
                    happyscience@gmail.com
                  </div>
                </div>
              </div>
          </div>
          <div class="basis-[70%] py-12 px-8">
            <p class="text-[28px] pb-20 font-semibold">Contactez nous</p>
            <div class="">
              <form action="" class="flex flex-col gap-10">
                <div class="grid grid-cols-2 gap-20 ">
                  <!-- {/* full name */} -->
                  <div class="flex flex-col gap-2 ">
                    <label htmlFor="name" class=" text-[18px] text-[#c5842c]">Nom complet</label>
                    <input type="text" id='name' class="border-b-2" placeholder='Nom & Prénoms' required/>
                  </div>
                  <!-- {/* email */} -->
                  <div class="flex flex-col gap-2">
                    <label htmlFor="mail" class="text-[18px] text-[#c5842c]">Email</label>
                    <input type="text" id='mail' class="border-b-2" placeholder='Email' required/>
                  </div>
                </div>
                <!-- {/* subjet */} -->
                <div class="flex flex-col gap-2">
                    <label htmlFor="sujet" class="text-[18px] text-[#c5842c]">Sujet</label>
                    <input type="text" id='sujet' class="border-b-2" placeholder='Sujet'/>
                </div>
                <!-- {/* message */} -->
                <div class="">
                  <div class="flex flex-col gap-2">
                      <label htmlFor="message" class="text-[#c5842c] text-[18px]">Message</label>
                      <textarea name="message" id="message" class='border-b-2' cols="30" rows="10" placeholder=''></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>


<?php get_footer() ?>
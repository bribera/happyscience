<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre Culturel Japonnais</title>
    <?php wp_head() ?>
</head>
<body class="overflow-x-hidden" <?php body_class(); ?>>
    
<header>
    <!-- head -->
   
        <div class=''>
            <div class="hidden md:flex justify-center mx-auto p-1 ">
                <div class="flex md:flex-col lg:flex-row lg:justify-between lg:items-center lg:gap-32 md:justify-center xl:text-[25px] text-center items-center">
                    <!-- call  -->
                    <div class="flex justify-center items-center gap-5 mb-[5px]">
                        <p class=""> <span class='font-bold'>call </span> +229 56 45 67 22</p>
                        <div class="">
                        <p class=""><span class="font-bold">email </span> happyscience@gmail.com</p>
                        </div>
                        <div class=" flex gap-3 items-center text-[16px]">
                        <a href="/" class='hover:text-[#ffbc3b]'><FiFacebook /></a>
                        <a href="/" class='hover:text-[#ffbc3b]'><FiTwitter /></a>
                        <a href="/" class='hover:text-[#ffbc3b]'><IoLogoWhatsapp /></a>
                        </div>
                    </div>
                    <!--  menu  -->
                    <div class="flex justify-center font-bold items-center gap-3">
                        <a href="/notice" class='uppercase hover:text-[#ffbc3b]'>notice</a>
                        <!-- {/* <a href="/reseach" class='uppercase hover:text-[#ffbc3b]'>research</a> */} -->
                        <a href="/scholarship" class='uppercase hover:text-[#ffbc3b]'>schorlarship</a>
                        <!-- {/* <a href="/login" class='uppercase hover:text-[#ffbc3b]'>login</a> -->
                        <a href="/register" class='uppercase hover:text-[#ffbc3b]'>register</a> 
                    </div>
                </div>
            </div>
            <!-- {/* second header */} -->
            <div class="px-12 lg:px-24 py-2 border-t-[#5c5c77] border">
                <div class="flex  justify-between items-center">
                    <!-- {/* logo */} -->
                    <div class="">
                        <a href="/" class='text-[50px] xl:text-[70px] text-blue-600 font-bold'>LOGO</a>
                    </div>
                    <!-- {/* connect*/} -->
                    <div class=" flex gap-5 xl:gap-10">
                        <a href="http://localhost/happy/inscription/" class="">
                            <button class='py-[7px] px-[15px] btn xl:py-[19px] xl:px-[25px] xl:text-[28px]' id="connectBtn">Se connecter</button>
                        </a>
                        <!--affiche connect-->
                            
                            
                            <!-- inscrire-->
                        <button class='btn py-[10px] px-[15px] xl:py-[17px] xl:px-[25px] xl:text-[30px]' id="registerBtn" >S'inscrire</button>
                        <!--affiche inscription -->                           
                        
                    </div>
                </div>
            </div>
            <!-- {/*third header */}  -->
            <div class="">
            <!-- {/* liste de menu */} -->
            <nav class=" bg-[#5c5c77] md:gap-5 text-white flex justify-between items-center px-12 lg:px-24 py-8">
               
                <div class="lg:hidden">
                    <button class='text-[30px] p-2 outline-none focus:border-gray-400 focus:border' >
                    
                        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                        
                    </button>
                </div>
                <div class="  uppercase  text-[18px] ">
                    
                    <?php wp_nav_menu(['theme_location' => 'header',
                                    'container' => false,
                                    'menu_class' => 'list flex flex-col lg:static left-0 absolute z-[99] top-[330px] w-full  lg:flex-row lg:bg-transparent justify-center items-center text-[24px]  transition-all opacity-0 duration-500 ease-in-out  gap-y-5 py-5 font-semibold bg-[#b68D40]   lg:opacity-100 gap-y-4 justify-center lg:justify-start lg:gap-y-1 items-center lg:gap-0 gap-5'
                    ]) ?>
                </div>
               
                <!-- {/* recherche */} -->
                <div class="text-white">
                    <div class=" bg-[#5c5c77] border-2 p-2 border-solid border-white rounded-full flex items-center">
                        <IoSearch class='text-white'/>
                        <?php  echo do_shortcode('[custom_search_form]'); ?>
                        <!-- <input type="text" placeholder='Recherchez' class=' bg-[#5c5c77] border-none outline-none text-white pl-2 ' /> -->
                    </div>
                </div>
            </nav>
            
            </div>
        </div>
</header>







<script>

    const list = document.querySelector(".list")
    const nav = document.querySelector(".nav")

    function Menu(e) {
        e.name === "menu" ? (e.name = "close", list.classList.add('top-[300px]'), list.classList.add('opacity-100')) 
            : 
            (e.name = "menu", list.classList.remove('top-[300px]'), list.classList.remove('opacity-100'));
    } 

    function Nav(e) {
        e.name === "menu" ? (e.name = "close", nav.classList.add('top-[60px]'), nav.classList.add('opacity-100')) 
            : 
            (e.name = "menu", nav.classList.remove('top-[60px]'), nav.classList.remove('opacity-100'));
    } 

    const connectBtn = document.getElementById("connectBtn");
    const registerBtn = document.getElementById("registerBtn");
    const connectPopup = document.getElementById("connectPopup");
    const registerPopup = document.getElementById("registerPopup");

    function showPopup(popup) {
     popup.classList.remove("hidden"); // Remove the hidden class to show popup
    }

    function closePopup(popup) {
        popup.classList.add("hidden"); // Masquer le popup
    }
    // Event listeners for button clicks
    connectBtn.addEventListener("click", () => showPopup(connectPopup));
    registerBtn.addEventListener("click", () => showPopup(registerPopup));



    // Écouteurs d'événements pour les boutons de fermeture
    const closeBtn = connectPopup.querySelector(".close-btn");
    const closeBtn1 = registerPopup.querySelector(".close-btn1");
    // for (const closeBtn of closeBtns) {
    // closeBtn.addEventListener("click", () => {
    //     closePopup(closeBtn.parentNode); // Fermer le popup parent du bouton
    // });
    // }

    closeBtn.addEventListener("click", () => {
        closePopup(connectPopup); // Fermer le popup parent du bouton
    });
    closeBtn1.addEventListener("click", () => {
        closePopup(registerPopup); // Fermer le popup parent du bouton
    });

  

</script>

<?php wp_footer() ?>
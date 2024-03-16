<?php get_header() ?>

<div>
      <!-- {/* en tête */} -->
      <div class="">
        <div class="relative ">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/about/about2.jpg" alt="" class="object-cover w-full h-fit ">
            <div class="absolute bg-slate-300 top-72 w-full h-[917px] xl:h-[1345px] flex justify-center">
                <!-- {/* text about us */} -->
                <div class="absolute bg-[#ffbc3a] text-white px-[70px] py-[30px] top-[-40px] left-[40%] rounded-[10px]">
                <p class="text-[40px] font-bold">A propos</p>
                </div>
                <!-- {/* who are you */} -->
                <div class=" md:px-[100px] flex justify-center items-center">
                    <div class="flex justify-center gap-10 items-center">
                        <!-- {/* image */} -->
                        <div class="flex-1">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/about/about.jpg" alt="" class="object-cover w-full h-full">
                        </div>
                        <!-- {/* texte */} -->
                        <div class="flex-1">
                        <!-- {/* Our history */} -->
                        <div class="flex flex-col items-start gap-5">
                            <div class="">
                                <p class="text-[#2A2F4A] text-[40px] pb-[30px] xl:text-[50px]">Hello, We are Centre Culturel Japonais</p>
                            </div>
                            <div class="flex flex-col justify-start items-start xl:text-[24px]">
                                <p class="">
                                Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, 
                                et auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam 
                                luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. 
                                Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt 
                                gravida interdum. Proin sed urna mauris. In molestie quis risus commodo gravida.
                                </p>
                                <p class="">
                                Donec molestie tincidunt tellus sit amet aliquet. Proin auctor nisi ut purus eleifend, 
                                et auctor lorem hendrerit. Proin vitae tortor nec risus tristique efficitur. Aliquam 
                                luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. 
                                Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt 
                                gravida interdum. Proin sed urna mauris. In molestie quis risus commodo gravida.
                                </p>
                            </div>
                            <button class="btn xl:px-[30px] xl:py-[20px] xl:text-[30px]">
                                Lire plus +
                            </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- {/* image */}-->
        <div class="bg-transparent py-0 ">
            <div class="relative flex justify-center ">
            <!-- <video autoplay loop muted src={"/images/about/about1.mp4"} class='' style={{ width: "100%", height: "90%" }} /> -->
                <video class="w-full"  autoplay loop muted poster="placeholder.jpg">
                    <source src="<?= get_template_directory_uri(); ?>/assets/images/about/about1.mp4" type="video/mp4">
                </video>
                <div class="absolute flex justify-center items-center h-full w-full top-[0px] bg-[#ffbc3a] bg-opacity-60">
                    <div class="">
                        <div class="px-[100px]">
                            <div class="counters flex justify-center items-center gap-24 text-[20px] text-white">
                                <!-- {/* formation */} -->
                                <div class="flex flex-col justify-center items-center  bg-white px-[15px] py-[18px] xl:px-[61px] xl:py-[78px]  border-b-[10px] border-b-orange-300 text-black">
                                    <div class="">
                                        <span class="num font-bold text-[40px] xl:text-[80px]" data-target="10">0</span> <span class="text-[40px] xl:text-[80px]">+</span>                                     
                                    </div>
                                    <div class="">
                                        <p class="text-center font-semibold leading-tight -tracking-wide xl:text-[30px]">Formations</p>
                                    </div>
                                </div>
                                <!-- {/* certification */} -->
                                <div class="flex flex-col justify-center items-center bg-white px-[15px] py-[18px] xl:px-[61px] xl:py-[78px]  border-b-[10px] border-b-orange-300 text-black">
                                    <div class="">
                                        <span class="num font-bold text-[40px] xl:text-[80px]" data-target="350">0</span> <span class="text-[40px] xl:text-[80px]">+</span>                                    
                                    </div>
                                    <div class="">
                                        <p class="text-center font-semibold leading-tight -tracking-wide xl:text-[30px]">Certifications</p>
                                    </div>
                                </div>
                                <!-- {/* formé */} -->
                                <div class="flex flex-col justify-center items-center bg-white px-[15px] py-[18px] xl:px-[61px] xl:py-[78px]  border-b-[10px] border-b-orange-300 text-black">
                                    <div class="">
                                        <span class="num font-bold text-[40px] xl:text-[80px]" data-target="650">0</span> <span class="text-[40px] xl:text-[80px]">+</span>                                   
                                    </div>
                                    <div class="">
                                     <p class="text-center font-semibold leading-tight -tracking-wide xl:text-[30px]">Formés</p>
                                    </div>
                                </div>                            
                                <!-- {/* Professeurs */} -->
                                <div class="flex flex-col justify-center items-center bg-white px-[15px] py-[18px] xl:px-[61px] xl:py-[78px] border-b-[10px] border-b-orange-300 text-black">
                                    <div class="">
                                        <span class="num font-bold text-[40px] xl:text-[80px]" data-target="20">0</span> <span class="text-[40px] xl:text-[80px]">+</span>                                    
                                    </div>
                                    <div class="">
                                        <p class="text-center font-semibold leading-tight -tracking-wide xl:text-[30px]">Professeurs</p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>

    <script>
        let valueDisplays = document.querySelectorAll(".num")
        let container = document.querySelectorAll(".counters")
        // let interval = 1000;
        let activated =false

        window.addEventListener("scroll", () => {
            if(
                pageYOffset > container.offsetTop - container.offsetHeight - 200 
                && activated === false
            ) {
                valueDisplays.forEach((valueDisplay) => {

                    valueDisplay.innerText = 0;

                    let count = 0;
                    
                    function updated() {

                    const target = parseInt(valueDisplay.dataset.count);
                        // const count = Number(valueDisplay.innerText)
                        // const duration = target / interval;
                    if (count < target) {
                        // valueDisplay.innerText =Math.floor(duration + count)
                        // setTimeout(updated, 1)
                        valueDisplay.innerText =count;
                        setTimeout(updated, 10);
                    }else {
                        valueDisplay.innerText =target;
                    }
                    }
                    updated()
                    activated = true;
                    });
            } else if (
                pageYOffset < container.offsetTop -container.offsetHeight - 500
                ||pageYOffset === 0
                && activated === true
            ) {
                valueDisplays.forEach(valueDisplay => {
                    valueDisplay.innerText = 0;
                } )
                activated = false;
            }
        })

        
    </script>


<?php get_footer() ?>
<?php get_header() ?>

<div class="">
    <div class=" h-[600px] relative ">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/courses/bg-courses.jpg" alt="" class="object-cover w-full h-fit">
        <div class=" absolute top-0 h-full w-[100%] bg-[#ffbc3a] bg-opacity-60"></div>
        <div class="absolute bg-[#ffbc3a] z-[99] text-white px-[70px] py-[30px] bottom-[-40px] left-[40%] rounded-[10px]">
            <p class="text-[40px] font-bold">Liste des cours</p>
        </div>
    </div>
    <div class="relative block bg-slate-50 p-[50px] lg:p-[100px]">
      <div class="flex flex-row">
        <div class="basis-[25%] hidden md:block px-[15px] w-full relative">
          <!-- {/* recherche */} -->
          <div class="sidebar-box">
            <form action="" class="">
              <div class="relative items-center justify-center flex ">
                <input type="text" id="searchInput" class='h-[36px] bg-white text-gray-400 border-none w-full pl-1 xl:h-[40px]' placeholder='Recherche...' />
                <div class="absolute top-[10%] right-2 lg:right-[20px] translate-y-[50%]">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </div>
              </div>
            </form>
          </div>
          <!-- {/* type de formation */} -->
          <div class="sidebar-box">
            <h3 class="text-[18px] mb-[15px] font-extrabold xl:text-[26px]">Type de Formation</h3>
            <form action="" class=" flex flex-col ">
              <label htmlFor="category-1">
              <input type="checkbox" name="category-1" value="anglais" id="category-1" class='mr-[7px] formation-checkbox xl:text-[24px] ' />
                <span class="xl:text-[24px]">Anglais</span>
              </label>
              <br />
              <label htmlFor="category-1 ">
              <input type="checkbox" name="category-2" value="informatique" id="category-2" class='mr-[7px] formation-checkbox xl:text-[24px]' />
                <span class="xl:text-[24px]">Informatique</span>
              </label>
              <br />
              <label htmlFor="category-1 ">
                <input type="checkbox" name="category-1" id="category-1" class='mr-[7px] xl:text-[24px]' />
                <span class="xl:text-[24px]">Espagnol</span>
              </label>
              <br />
              <label htmlFor="category-1 ">
                <input type="checkbox" name="category-1" id="category-1" class='mr-[7px] xl:text-[24px]' />
                <span class="xl:text-[24px]">Japonnais</span>
              </label>
              <br />
              <label htmlFor="category-1 ">
                <input type="checkbox" name="category-1" id="category-1" class='mr-[7px] xl:text-[24px]' />
                <span class="xl:text-[24px]">Gestion des Projets</span>
              </label>
              <br />
              <label htmlFor="category-1 ">
                <input type="checkbox" name="category-1" id="category-1" class='mr-[7px] xl:text-[24px]' />
                <span class="xl:text-[24px]">Danse</span>
              </label>
              <br />
            </form>

          </div>
          <!-- {/* Jour ou soir */} -->
          <div class="sidebar-box">
            <h3 class="text-[18px] mb-[15px]  font-extrabold xl:text-[26px]">Type d'Horaire</h3>
            <form action="" class="flex flex-col">
              <label htmlFor="category-1 ">
              <input type="checkbox" name="horaire-1" value="jour" id="horaire-1" class='mr-[7px] horaire-checkbox xl:text-[24px]' />
                <span class="text-[24px]">Jour</span>
              </label>
              <br />
              <label htmlFor="category-1 ">
              <input type="checkbox" name="horaire-2" value="soir" id="horaire-2" class='mr-[7px] horaire-checkbox xl:text-[24px]' />
                <span class="text-[24px]">Soir</span>
              </label>
            </form>
          </div>
        </div>
        <div class="basis-[75%] px-[40px] lg:px-[80px]">
          <!-- {/* cours */} -->
          <div class=" flex flex-col lg:grid lg:grid-cols-2 gap-12 pb-[]">
            <!-- {/* Anglais jour A1*/} -->
            <?php
              $args = array(
                'post_type' => 'formation',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'orderby' => 'id', // ou title, date
                'order' => 'ASC', // ou ASC (par ordre decroissant, alphabethique,)
              );
              $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="bg-white shadow-sm shadow-slate-200 pb-4 rounded-lg hover:shadow-lg hover:shadow-slate-300 hover:-translate-y-2">
              <div class="">
                <a href="/course-single">
                  <div class="w-full h-[200px]">
                    <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                    <img src="<?= $featured_img_url; ?>" alt="" class="h-full w-full">
                  </div>
                  <!-- {/* text */} -->
                  <div class="course p-4" data-formation="anglais" data-horaire="jour">
                    <p class="text-[20px] pb-4 xl:text-[32px]"><?php the_title(); ?></p>
                    <div class="flex pb-4 text-[24px]">
                      <p class="mr-2">Dirigé par:</p>
                      <p class="text-[#ffbc3a]"><?php echo the_field("dirige_par")?></p>
                    </div>
                    <div class="flex justify-between border-t-2 pt-4">
                      <div class="flex justify-center gap-y-3">
                        <p class="ml-[10px] text-slate-400 xl:text-[24px]">Niveau:</p>
                        <p class="ml-[10px] text-slate-400 xl:text-[24px]"> <?php echo the_field("niveau")?></p>
                      </div>
                      <p class="text-[#ffbc3a] xl:text-[24px]"> <?php echo the_field("prix")?> </p>
                    </div>
                  </div>
                </a>
              </div>
              <button class='ml-[15px]  btn2 cursor-pointer'>
                <a href="<?= the_permalink(); ?>" class="xl:text-[24px]">
                  Voir les détails
                </a>
                </button>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                show 404 error here
            Nothing to show
            <?php endif; ?> 
          
        </div>
      </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.querySelector("#searchInput");
    const formationCheckboxes = document.querySelectorAll(".formation-checkbox");
    const horaireCheckboxes = document.querySelectorAll(".horaire-checkbox");
    const courses = document.querySelectorAll(".course");

    // Fonction de filtrage des résultats
    function filtrerResultats() {
        const recherche = searchInput.value.toLowerCase();
        const formationsSelectionnees = [...formationCheckboxes].filter(checkbox => checkbox.checked).map(checkbox => checkbox.value);
        const horairesSelectionnes = [...horaireCheckboxes].filter(checkbox => checkbox.checked).map(checkbox => checkbox.value);

        courses.forEach(course => {
            const titre = course.querySelector(".course-title").textContent.toLowerCase();
            const typeFormation = course.dataset.formation.toLowerCase();
            const typeHoraire = course.dataset.horaire.toLowerCase();

            // Vérifier si le titre correspond à la recherche
            // Et si le type de formation et le type d'horaire correspondent aux sélections
            if (titre.includes(recherche) &&
                (formationsSelectionnees.length === 0 || formationsSelectionnees.includes(typeFormation)) &&
                (horairesSelectionnes.length === 0 || horairesSelectionnes.includes(typeHoraire))) {
                course.style.display = "block";
            } else {
                course.style.display = "none";
            }
        });
    }

    // Ajouter des écouteurs d'événements pour les éléments de formulaire
    searchInput.addEventListener("input", filtrerResultats);
    formationCheckboxes.forEach(checkbox => checkbox.addEventListener("change", filtrerResultats));
    horaireCheckboxes.forEach(checkbox => checkbox.addEventListener("change", filtrerResultats));
});

</script>

<?php get_footer() ?>

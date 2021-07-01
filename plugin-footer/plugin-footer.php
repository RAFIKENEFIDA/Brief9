<?php

/*

Plugin Name: Best design
 
Plugin URI: https://Best design.com/
 
Description: C'est une extension utilisés par des millions, qui vous guidées a créer des interfaces professionnels .
 
Version: 1.0.0
 
Author: RAFIK


*/
add_action('admin_menu','My_admin_menu');

function My_admin_menu(){
    //parameters details
//    add_management_page($page_title,$menu_title,$capability,$menu_slug,$function);
// add a new setting page under setting menu
// add_management_page('footer text','footer text','manage_option',__FILE__,//'footer_text_admin_page');
//add new menu and its sub menu
add_menu_page('Footer Text title','Footer Settings','manage_option','footer_setting_page','footer_text_admin_page');
add_submenu_page('footer_setting_page','Page title','Sub-menu title','manage_options','child-submenu-handle','mt_setting_page');

}


function footer_text_admin_page(){
    echo "this is where we will edit the variable";
    
}
function mt_setting_page(){
    echo "<h2>" .__('Configurer votre footer','menu-test')."</h2>";
    include_once('footer_setting_page.php');
}

?>
<?php 
 function add_footer(){

    echo '
    
    <footer class="bg-light text-center text-dark">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn  btn-floating m-2" href="'.get_option('facebook_lien').'" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn  btn-floating m-2" href="'.get_option('twitter_lien').'" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn  btn-floating m-2" href="'.get_option('google_lien').'" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn  btn-floating m-2" href="'.get_option('instagram_lien').'" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

     

      <!-- Github -->
      <a class="btn  btn-floating m-2" href="'.get_option('github_lien').'" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Address Email :  '.get_option('google_lien').'  </label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     '.get_option('Copyright_text').' 
  </div>
  <!-- Copyright -->
</footer>
    ';
 }
 add_action('wp_footer','add_footer');


?>
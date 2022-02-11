<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailwindcss
 */

?>
<footer class="bg-gray-600 opacity-95">
    <div class="flex flex-wrap justify-between pt-8">
        <!--1/3 col -->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 rounded-t rounded-b-none overflow-hidden text-center shadow-lg">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <div class="w-full font-bold text-xl text-gray-900 px-6">FishBEE</div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Footer',
                            'menu_class' => 'footer-menu',
                        )
                    );
                    ?>
            </div>
        </div>


        <!--1/3 col Google Map-->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 overflow-hidden">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <div class="w-full font-bold text-xl text-white text-center pb-5 px-6">Visit us on the Spot
                    </div>
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.1594230342016!2d115.8743863152178!3d-32.010794981210175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bcf37bb3dde5%3A0x27908984f678d94e!2sFarmers%20Market%20on%20Manning!5e0!3m2!1sen!2sau!4v1634725046724!5m2!1sen!2sau"
                            height="300" class="h-400 w-full rounded-xl" loading="lazy"></iframe>
                </a>
            </div>
        </div>

        <!--1/3 col Contact-->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                <div class="w-full  font-bold text-xl text-center text-gray-900 px-6">Contact Us</div>
                <ul class="list-reset  md:flex-none items-center p-10">
                    <li class="pb-5">
                        📞 <a href="#" class="hover:text-white ml-1">0412 345 678</a>
                    </li>
                    <li class="pb-5">📧 <a href="mailto:info@fishbee.com.au" class="hover:text-white ml-1">
                            info@fishbee.com.au</a>
                    </li>
                    <li class="pb-5">
                        📍 <a
                                href="https://www.google.com/maps/dir//Farmers+Market+on+Manning+George+Burnett+Park+Corner+Manning+and+Elderfield+Rd+Karawara+WA+6152/@-32.010795,115.876575,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2a32bcf37bb3dde5:0x27908984f678d94e"
                                class="hover:text-white ml-1">The George Burnett Park
                            Corner of Manning Road and Elderfield Road, Karawara</a>
                    </li>
                    <li>
                        <!-- Up Top -->
                        <div class="large-12 medium-12 pb-5 pl-12">
                            <div class="grid-x grid-padding-x">
                                <div class="large-12 medium-12 columns search cell">
                                    <a href="#"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>

</html>

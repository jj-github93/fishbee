<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tailwindcss
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php tailwindcss_post_thumbnail(); ?>

    <div class="flex h-full bg-transparent overflow-hidden shadow-lg rounded-b-lg">
        <div class="w-full md:w-1/3">
            <img
                    src="<?php
                    if (has_post_thumbnail())
                        echo the_post_thumbnail_url();
                    else
                        echo "https://source.unsplash.com/collection/494263/800x600" ?>"

                    class="h-full w-full shadow">
        </div>

        <div class="w-full md:w-2/3 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">
                    <?php the_author(); ?>
                </p><br>
                <div class="w-full font-bold text-xl text-gray-900 px-6">
                    <?php
                    the_title();
                    ?>

                </div>
                <p class="text-gray-800 font-serif text-base px-6 mb-5"><br>
                    <?php
                    the_post();

                    ?>
                </p>
            </div>

            <div
                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                <div class="flex items-center justify-between">
                    🐝
                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                </div>
            </div>
        </div>

    </div>

    <footer class="entry-footer">
        <?php tailwindcss_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

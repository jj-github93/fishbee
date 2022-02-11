<div class="flex h-full bg-transparent overflow-hidden shadow-lg rounded-b-lg">
    <a href="<?php the_permalink();?>" class="flex flex-wrap no-underline hover:no-underline">
        <div class="w-full md:w-2/3">
            <img
                    alt="article thumbnail"
                    src="<?php
                    if (has_post_thumbnail())
                        echo the_post_thumbnail_url();
                    else
                        echo "https://source.unsplash.com/collection/494263/800x600" ?>"

                    class="h-full w-full shadow">
        </div>

        <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">
                    <?php if(the_author() != null) echo the_author(); else echo 'FishBEE'; ?>
                </p><br>
                <div class="w-full font-bold text-xl text-gray-900 px-6">
                    <?php
                    the_title();
                    ?>

                </div>
                    <?php
                    the_excerpt();
                    
                    ?>
            </div>

            <div
                    class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                <div class="flex items-center justify-between">
                    🐝
                    <p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
                </div>
            </div>
        </div>

    </a>
</div>

<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
        <a href="<?php the_permalink(); ?>" class="flex flex-wrap no-underline hover:no-underline">
            <img src="<?php
            if (has_post_thumbnail())
                echo the_post_thumbnail_url();
            else
                echo "https://source.unsplash.com/collection/494263/800x600" ?>"
            class="h-64 w-full rounded-t pb-6"
            alt="article thumbnail">
            <div class="w-full font-bold text-xl text-gray-900 px-6">
                <?php the_title(); ?> 
            </div>
                <?php the_excerpt(); ?>
        </a>
    </div>
    <div
            class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
        <div class="flex items-center justify-between">
            <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name"
                 src="http://i.pravatar.cc/300" alt="Avatar of Author">
        </div>
    </div>
</div>
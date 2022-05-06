<div class="container">

    <div class="post mb-5 mx-auto text-center bg-light p-3 border-3">
        <div class="media">
            <?php
                //the_post_thumbnail( );
            ?>

            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="image">

            <div class="media-body">
                <h3 class="title mb-1">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>

                <div class="meta mb-1">
                    <span class="date"><?php the_date(); ?></span>
                    <span class="comment"><a href="#"><?php //comments_number(); ?></a></span>
                </div>

                <div class="intro"><?php the_excerpt(); ?></div>

                <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
            </div><!--//media-body-->

        </div><!--//media-->
    </div>

</div>
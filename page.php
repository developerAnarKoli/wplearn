<?php
    if(have_posts()):
        while(have_posts()): the_post();
        ?>
         <article>
            <h2>this is the only home page</h2>
            <h1> <?php the_title(); ?></h1>
            <p> <?php the_content(); ?> </p>
        </article>
        <?php
        endwhile;
    endif;
?>
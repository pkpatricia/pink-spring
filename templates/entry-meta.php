<section class="post--byline">
    <span class="byline--author author vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></span> &#8226; <time class="byline--date published" datetime="<?php echo get_the_time( 'c' ); ?>"><?php the_time( 'F j, Y' ); ?></time>
</section>

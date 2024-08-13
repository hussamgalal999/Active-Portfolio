<?php get_header(); ?>






<div class="main-wraper">
        <section class="section bg-profile clip-profile" id="header">
            <div class="zoo-profile">
                <div class="container">
                    <div class="row">
<?php get_sidebar(); ?>

                        <section>




                        &lt;?php if ( have_posts() ) : ?&gt;
&lt;?php while ( have_posts() ) : the_post(); ?&gt;
  &lt;div id=&quot;post-&lt;?php the_ID(); ?&gt;&quot; &lt;?php post_class(); ?&gt;&gt;
    &lt;div class=&quot;post-header&quot;&gt;
       &lt;div class=&quot;date&quot;&gt;&lt;?php the_time( 'M j y' ); ?&gt;&lt;/div&gt;
       &lt;h2&gt;&lt;a href=&quot;&lt;?php the_permalink(); ?&gt;&quot; rel=&quot;bookmark&quot; title=&quot;Permanent Link to &lt;?php the_title_attribute(); ?&gt;&quot;&gt;&lt;?php the_title(); ?&gt;&lt;/a&gt;&lt;/h2&gt;
       &lt;div class=&quot;author&quot;&gt;&lt;?php the_author(); ?&gt;&lt;/div&gt;
    &lt;/div&gt;&lt;!--end post header--&gt;
    &lt;div class=&quot;entry clear&quot;&gt;
       &lt;?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?&gt;
       &lt;?php the_content(); ?&gt;
       &lt;?php edit_post_link(); ?&gt;
       &lt;?php wp_link_pages(); ?&gt; &lt;/div&gt;
    &lt;!--end entry--&gt;
    &lt;div class=&quot;post-footer&quot;&gt;
       &lt;div class=&quot;comments&quot;&gt;&lt;?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?&gt;&lt;/div&gt;
    &lt;/div&gt;&lt;!--end post footer--&gt;
    &lt;/div&gt;&lt;!--end post--&gt;
&lt;?php endwhile; /* rewind or continue if all posts have been fetched */ ?&gt;
    &lt;div class=&quot;navigation index&quot;&gt;
       &lt;div class=&quot;alignleft&quot;&gt;&lt;?php next_posts_link( 'Older Entries' ); ?&gt;&lt;/div&gt;
       &lt;div class=&quot;alignright&quot;&gt;&lt;?php previous_posts_link( 'Newer Entries' ); ?&gt;&lt;/div&gt;
    &lt;/div&gt;&lt;!--end navigation--&gt;
&lt;?php else : ?&gt;
&lt;?php endif; ?&gt;





                        </section>

    <?php get_footer(); ?>
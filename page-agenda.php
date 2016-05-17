<div id="maincontent">



<?php include (TEMPLATEPATH . '/page.php'); 
//begin loop ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>

<div class="container">
<div class="col-md-12">
<?php the_content(); ?>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>


</div>
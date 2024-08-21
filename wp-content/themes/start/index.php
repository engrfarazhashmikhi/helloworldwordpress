<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): ?>
<?php the_post(); ?>
<!-- Features section-->
<section class="py-5" id="features">
<div class="container">
<div class="col">
<div class="row">
<div class="col mb-5 h-100">
<div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i>
</div>
<h2 class="h5"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
</div>
</div>
</div>
</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<marquee>
<script>
document.write(new Date().getFullYear());
</script>
</marquee>
</main>
<?php get_footer(); ?>


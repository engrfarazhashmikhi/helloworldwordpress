<?php get_header(); ?>
            <!-- About section one-->
            <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
            <?php the_post(); ?>
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                        <?php the_tpost_humbnail(); ?>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <!--
                            <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                            -->
                        </div>
                    </div>
                </div>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>
        </main>
        <?php get_footer(); ?>

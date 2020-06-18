<?php get_header(); ?>


<main class="container">
    <section class="m-center text-center">
        <h1 class="heading-primary text-secondary">Error 404</h1>
        <p class="paragraph">Parece ser que la url a la que estás intentando acceder ha cambiado o ya no existe.</p>
        <br />
        <a href="<?php echo get_page_link( get_page_by_title( 'Inicio' )->ID ); ?>" class="btn btn--md gift__link m-center">Volver a Inicio</a>
    </section>
</main>

<?php get_footer(); ?>
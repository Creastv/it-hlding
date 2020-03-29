<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
        <h1 >404</h1>
        <h2>Ups! Coś tu jest nie tak.</h2>
        <p>Nic tu nie można znaleźć. </p>
        <a class="btn btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>">Powrót do strony głównej</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
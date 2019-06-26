<?php get_header(); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-5">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/404.jpg" alt="Нет такой страницы.">
                <h2 class="text-center">Такой страницы не существует.</h2>
            </div>
        </div>
    </div>

    <br><br><br>
            
    <?php require_once "quote.php"?>

    <br>
        
<?php get_footer();?>


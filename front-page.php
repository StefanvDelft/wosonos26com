<?php
/* Custom homepage template */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
     <head>
     <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <?php wp_head(); ?>
     </head>

     <body <?php body_class(); ?>>

          <header class="hero">
               <h1>Welkom op onze site</h1>
               <a href="/tickets" class="btn-primary">Ga naar de winkel</a>
          </header>

          <?php wp_footer(); ?>
     </body>
</html>
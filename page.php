<!DOCTYPE html>
<html 
    <?php 
        echo language_attributes();
    ?>
>
    <head>
        <?php 
            require_once retrieve_meta_url();
        ?>
    </head>
    <body>
        <?php 
            get_header();
        ?>
        
        <main>

        </main>
        
        <?php
            get_footer(); 
            wp_footer(); 
        ?>
    </body>
</html>
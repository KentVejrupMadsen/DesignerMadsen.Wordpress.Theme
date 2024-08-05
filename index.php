<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="
            <?php 
                bloginfo( 
                    'charset' 
                ); 
            ?>"
        >
        <meta 
            name="viewport" 
            content="width=device-width, initial-scale=1.0"
        >
        
        <title>
            <?php 
                wp_title( 
                    '|', 
                    true, 
                    'right' 
                ); 
            ?>
        </title>
        
        <?php 
            wp_head(); 
        ?>
    </head>
    <body>
        <header>
        </header>
        
        <main>
        </main>
        
        <footer> 

        </footer>
    </body>
    
    <?php wp_footer(); ?>
</html>
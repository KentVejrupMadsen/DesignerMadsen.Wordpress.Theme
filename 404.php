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
            <div>
                <h1>
                    Ops.
                </h1>
                
                <h2> 
                    We're sorry, but the page is not found. 
                </h2>

                <p>
                    But we can't find what you're requesting.
                </p>

                <p>
                    Message: 404 Error
                </p>
            </div>
        </main>
        
        <?php
            get_footer(); 
            wp_footer(); 
        ?>
    </body>
</html>
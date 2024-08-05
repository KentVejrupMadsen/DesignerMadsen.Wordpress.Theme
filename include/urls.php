<?php 
    function retrieve_meta_url(): string
    {
        return get_template_directory() . '/include/documents/meta.php';
    }

    function retrieve_style_url(): string
    {
        return get_template_directory_uri() . '/style.css';
    }

?>
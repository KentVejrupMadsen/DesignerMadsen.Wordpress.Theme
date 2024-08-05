<?php 
    function retrieve_meta_url(): string
    {
        return get_template_directory() . '/include/documents/meta.php';
    }

    
    function retrieve_style_url(): string
    {
        return get_template_directory_uri() . '/style.css';
    }
    
    function retrieve_header_mobile_url(): string
    {
        return get_template_directory() . '/include/documents/header_mobile.php';
    }

    function retrieve_header_desktop_url(): string
    {
        return get_template_directory() . '/include/documents/header_desktop.php';
    }
?>
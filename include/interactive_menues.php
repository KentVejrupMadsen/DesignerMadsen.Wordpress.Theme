<?php 

    function RegistrationOfMenues(): void
    {
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'some-menu' => __('Social Media Menu')
            )
        );        
    }


?>
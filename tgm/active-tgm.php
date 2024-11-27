<?php 
    require_once get_template_directory(). '/tgm/class-tgm-plugin-activation.php';


    // tgm activation plugin

    if(!function_exists('nove_tgm_activation')){
        function nove_tgm_activation(){
            $plugins = array(
                array(
                    'name' => 'Secure Custom Fields',
                    'slug' => 'advanced-custom-fields',
                    'required' => true
                ),
                array(
                    'name' => 'Codestar Framework',
                    'slug' => 'codestar-framework',
                    'required' => true,
                    'source' => 'https://github.com/Codestar/codestar-framework.git'
                )
            );

            $config = array(
                'has_notices' => true,
                'dismissable' => true
            );

            tgmpa($plugins, $config);
        }
    }
    add_action('tgmpa_register', 'nove_tgm_activation');
?>
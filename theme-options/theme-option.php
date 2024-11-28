<?php 

    if(class_exists('CSF')){
        
        // create prefix
        $prefix = 'novena_options';

        // create option
        CSF::createOptions($prefix, array(
            'menu_title' => esc_html__('Theme Option', 'novena'),
            'framework_title' => esc_html__('Novena Theme Option', 'novena'),
            'menu_slug' => 'theme-option'
        ));

        // create section header top
        CSF::createSection($prefix, array(
            'id' => 'header_top',
            'title' => esc_html__('Header Top', 'novena')
        ));

        // header top left side
        CSF::createSection($prefix, array(
            'parent' => 'header_top',
            'title' => esc_html__('Header Left', 'novena'),
            'fields' => array(
                array(
                    'title' => esc_html__('Email', 'novena'),
                    'id' => 'header_top_email',
                    'type' => 'text',
                    'default' => 'support@novena.com'
                ),
                array(
                    'title' => esc_html__('Address', 'novena'),
                    'id' => 'header_top_address',
                    'type' => 'text',
                    'default' => 'Address Ta-134/A, New York, USA'
                )
            )
        ));

        // header to right
        CSF::createSection($prefix, array(
            'parent' => 'header_top',
            'title' => esc_html__('Header Right', 'novena'),
            'fields' => array(
                array(
                    'title' => esc_html__('Number', 'novena'),
                    'id' => 'header_top_number',
                    'type' => 'text',
                    'default' => '823-4565-13456'
                )
            )
        ));

        // header logo
        CSF::createSection($prefix, array(
            'parent' => 'header_top',
            'title' => esc_html__('Header Logo', 'novena'),
            'fields' => array(
                array(
                    'title' => esc_html__('Logo', 'novena'),
                    'id' => 'header_logo',
                    'type' => 'upload'
                )
            )
        ));

        // create a section for hero area
        CSF::createSection($prefix, array(
            'id' => 'hero_area',
            'title' => esc_html__('Hero Area', 'novena')
        ));

        // hero content area
        CSF::createSection($prefix, array(
            'parent' => 'hero_area',
            'title' => esc_html__('Hero Section', 'novena'),
            'fields' => array(
                array(
                    'id' => 'hero_sub_title',
                    'title' => esc_html__('Sub Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Total Health care solution'
                ),
                array(
                    'id' => 'hero_title',
                    'title' => esc_html__('Hero Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Your most trusted health partner'
                ),
                array(
                    'id' => 'hero_description',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.'
                ),
                array(
                    'id' => 'hero_btn_title',
                    'title' => esc_html__('Button Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Make Appoinment'
                ),
                array(
                    'id' => 'hero_btn_link',
                    'title' => esc_html__('Button Link', 'novena'),
                    'type' => 'text',
                    'default' => '#'
                )
            )
        ));

        // schedule section

        CSF::createSection($prefix, array(
            'id' => 'schedul_list',
            'title' => esc_html__('Schedeul', 'novena')
        ));

        // slougan
        CSF::createSection($prefix, array(
            'parent' => 'schedul_list',
            'title' => esc_html__('Merketing', 'novena'),
            'fields' => array(
                array(
                    'id' => 'merket_sub_title',
                    'title' => esc_html__('Sub title', 'novena'),
                    'type' => 'text',
                    'default' => '24 Hours Service'
                ),
                array(
                    'id' => 'merket_title',
                    'title' => esc_html__('Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Online Appoinment'
                ),
                array(
                    'id' => 'merket_description',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'Get ALl time support for emergency.We have introduced the principle of family medicine.'
                ),
                array(
                    'id' => 'merket_btn_text',
                    'title' => esc_html__('Button Text', 'novena'),
                    'type' => 'text',
                    'default' => 'Make a Appoinment'
                ),
                array(
                    'id' => 'merket_btn_link',
                    'title' => esc_html__('Button Link', 'novena'),
                    'type' => 'text',
                    'default' => '#'
                )
            )
        ));
        
        // working time
        CSF::createSection($prefix, array(
            'parent' => 'schedul_list',
            'title' => esc_html__('Work Time', 'novena'),
            'fields' => array(
                array(
                    'id' => 'work_sub_title',
                    'title' => esc_html__('Sub Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Timing schedule'
                ),
                array(
                    'id' => 'work_title',
                    'title' => esc_html__('Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Working Hours'
                ),
                array(
                    'id' => 'work_schedul',
                    'title' => esc_html__('Schedul', 'novena'),
                    'type' => 'group',
                    'button_title' => esc_html__('Add Schedul', 'novena'),
                    'fields' => array(
                        array(
                            'id' => 'schedul_week_name',
                            'title' => esc_html__('Week Name', 'novena'),
                            'type' => 'text'
                        ),
                        array(
                            'id' => 'schedul_time',
                            'title' => esc_html__('Time', 'novena'),
                            'type' => 'text'
                        )
                    )
                )
            )
        ));

        // emergncy
        CSF::createSection($prefix, array(
            'parent' => 'schedul_list',
            'title' => esc_html__('Emergency Cases', 'novena'),
            'fields' => array(
                array(
                    'id' => 'emergency_sub_title',
                    'title' => esc_html__('Sub Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Emegency Cases'
                ),
                array(
                    'id' => 'emergency_number',
                    'title' => esc_html__('Number', 'novena'),
                    'type' => 'text',
                    'default' => '1-800-700-6200'
                ),
                array(
                    'id' => 'emergency_des',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .'
                )
            )
        ));
    }


?>
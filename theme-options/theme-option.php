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
                    'id' => 'work_scheduls',
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

        // Personal care
        CSF::createSection($prefix, array(
            'id' => 'personal_care',
            'title' => esc_html__('Personal care', 'novena')
        ));

        // Personal care info
        CSF::createSection($prefix, array(
            'parent' => 'personal_care',
            'title' => esc_html__('Personal Info', 'novena'),
            'fields' => array(
                array(
                    'id' => 'personal_info_1_img',
                    'type' => 'upload',
                    'title' => esc_html__('Image 1', 'novena')
                ),
                array(
                    'id' => 'personal_info_2_img',
                    'type' => 'upload',
                    'title' => esc_html__('Image 2', 'novena')
                ),
                array(
                    'id' => 'personal_info_3_img',
                    'type' => 'upload',
                    'title' => esc_html__('Image 3', 'novena')
                ),
                array(
                    'id' => 'personal_info_title',
                    'type' => 'text',
                    'title' => esc_html__('Title', 'novena'),
                    'default' => 'Personal care & healthy living'
                ),
                array(
                    'id' => 'personal_info_des',
                    'type' => 'textarea',
                    'title' => esc_html__('Description', 'novena'),
                    'default' => 'We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.'
                ),
                array(
                    'id' => 'personal_info_btn_text',
                    'type' => 'text',
                    'title' => esc_html__('Buttonn Text', 'novena'),
                    'default' => 'SERVICE'
                ),
                array(
                    'id' => 'personal_info_btn_link',
                    'type' => 'text',
                    'title' => esc_html__('Buttonn Link', 'novena'),
                    'default' => '#'
                )
            )
        ));

        // novena counter
        CSF::createSection($prefix, array(
            'id' => 'novena_counter',
            'title' => esc_html__('Counter', 'novena')
        ));

        // counter content
        CSF::createSection($prefix, array(
            'parent' => 'novena_counter',
            'title' => esc_html__('Counter Content', 'novena'),
            'fields' => array(
                array(
                    'id' => 'counter_bg_img',
                    'type' => 'upload',
                    'title' => esc_html__('Counter background img', 'novena')
                ),
                array(
                    'id' => 'counter_number',
                    'title' => esc_html__('Counter Number', 'novena'),
                    'type' => 'group',
                    'button_title' => esc_html__('Add Counter', 'novena'),
                    'fields' => array(
                        array(
                            'id' => 'counter_digit',
                            'title' => esc_html__('Digit', 'novena'),
                            'type' => 'number',
                            'default' => '58'
                        ),
                        array(
                            'id' => 'counter_title',
                            'title' => esc_html__('Title', 'novena'),
                            'type' => 'text',
                            'default' => 'Happy People'
                        )
                    )
                )
            )
        ));

        // Award header
        CSF::createSection($prefix, array(
            'id' => 'award_header',
            'title' => esc_html__('Award Header', 'novena')
        ));

        // Award header content
        CSF::createSection($prefix, array(
            'parent' => 'award_header',
            'title' => esc_html__('Award content', 'novena'),
            'fields' => array(
                array(
                    'id' => 'award_title',
                    'title' => esc_html__('Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Award winning patient care'
                ),
                array(
                    'id' => 'award_des',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.'
                )
            )
        ));

        // boot appoinment
        CSF::createSection($prefix, array(
            'id' => 'boot_appoinment',
            'title' => esc_html__('Book Appoinment', 'novena'),
            'fields' => array(
                array(
                    'id' => 'book_app_title',
                    'title' => esc_html__('Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Book appoinment'
                ),
                array(
                    'id' => 'book_app_des',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.'
                ),
                array(
                    'id' => 'book_quick_num',
                    'title' => esc_html__('Number', 'novena'),
                    'type' => 'text',
                    'default' => '23 345 67980'
                ),
                array(
                    'id' => 'book_app_thumb',
                    'title' => esc_html__('Thumbnail', 'novena'),
                    'type' => 'upload'
                )
            )
        ));

        // testimonial
        CSF::createSection($prefix, array(
            'id' => 'testimonial_header',
            'title' => esc_html__('Testimonial', 'novena'),
            'fields' => array(
                array(
                    'id' => 'testimonial_title',
                    'title' => esc_html__('Title', 'novena'),
                    'type' => 'text',
                    'default' => 'We served over 5000+ Patients'
                ),
                array(
                    'id' => 'testimonial_des',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.'
                )
            )
        ));

        // Partners who support us
        CSF::createSection($prefix, array(
            'id' => 'partners_section',
            'title' => esc_html__('Partners', 'novena'),
            'fields' => array(
                array(
                    'id' => 'partners_title',
                    'title' => esc_html__('Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Partners who support us'
                ),
                array(
                    'id' => 'partners_des',
                    'title' => esc_html__('Description', 'novena'),
                    'type' => 'textarea',
                    'default' => 'Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.'
                ),
                array(
                    'id' => 'partners_groups',
                    'title' => esc_html__('Partners Logo', 'novena'),
                    'type' => 'group',
                    'button_title' => esc_html__('Add new company logo', 'novena'),
                    'fields' => array(
                        array(
                            'id' => 'company_name',
                            'title' => esc_html__('Company Name', 'novena'),
                            'type' => 'text'
                        ),
                        array(
                            'id' => 'company_logo',
                            'title' => esc_html__('Company Logo', 'novena'),
                            'type' => 'upload'
                        )
                    )
                )
            )
        ));

        // footer logo
        CSF::createSection($prefix, array(
            'id' => 'footer_area',
            'title' => esc_html__('Footer Area', 'Novena'),
            'menu_icon' => 'icofont-email'
        ));

        // footer logo content
        CSF::createSection($prefix, array(
            'parent' => 'footer_area',
            'title' => esc_html__('Footer Logo Content', 'novena'),
            'fields' => array(
                array(
                    'id' => 'footer_logo_img',
                    'title' => esc_html__('Footer Logo Image', 'novena'),
                    'type' => 'upload'
                ),
                array(
                    'id' => 'footer_logo_des',
                    'title' => esc_html__('Footer Logo Description', 'novena'),
                    'type' => 'text',
                    'default' => 'Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.'
                ),
                array(
                    'id' => 'footer_socials',
                    'title' => esc_html__('Footer Social', 'novena'),
                    'type' => 'group',
                    'button_title' => esc_html__('Add socials', 'novena'),
                    'fields' => array(
                        array(
                            'id' => 'footer_social_icon',
                            'title' => esc_html__('Footer social icon', 'novena'),
                            'type' => 'icon'
                        ),
                        array(
                            'id' => 'footer_social_link',
                            'title' => esc_html__('Social link', 'novena'),
                            'type' => 'text'
                        )
                    )
                )
            )
        ));

        // footer cta area
        CSF::createSection($prefix, array(
            'parent' => 'footer_area',
            'title' => esc_html__('Footer CTA', 'novena'),
            'fields' => array(
                array(
                    'id' => 'footer_cta_section_title',
                    'title' => esc_html__('Footer CTA Title', 'novena'),
                    'type' => 'text',
                    'default' => 'Get in Touch'
                ),
                array(
                    'id' => 'footer_cta_lists',
                    'title' => esc_html__('Footer CTA Lists', 'novena'),
                    'type' => 'group',
                    'button_title' => esc_html__('Add new footer cta list', 'novena'),
                    'fields' => array(
                        array(
                            'id' => 'footer_cta_icon',
                            'title' => esc_html__('Footer CTA Icon', 
                            'novena'),
                            'type' => 'icon'
                        ),
                        array(
                            'id' => 'footer_cta_sub_title',
                            'title' => esc_html__('Footer CTA Sub Title',  'novena'),
                            'type' => 'text',
                            'default' => 'Support Available for 24/7'
                        ),
                        array(
                            'id' => 'footer_cta_title',
                            'title' => esc_html__('Footer CTA Title',  'novena'),
                            'type' => 'text'
                        )
                    )
                )
            )
        ));
    }


?>
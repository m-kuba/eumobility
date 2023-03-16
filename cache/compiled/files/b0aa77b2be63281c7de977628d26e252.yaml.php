<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/eu/user/plugins/simple-cookie/blueprints.yaml',
    'modified' => 1678970780,
    'size' => 3291,
    'data' => [
        'name' => 'Simple Cookie',
        'version' => '0.1.8',
        'description' => 'Simple cookie plugin is based on the popular CookieConsent JS-library. For Advanced Opt-In/Opt-Out configurations you can use the \'Custom configuration\' option.',
        'icon' => 'shield',
        'author' => [
            'name' => 'Tom Schwarz',
            'email' => 'thomasschwarz96@web.de'
        ],
        'homepage' => 'https://github.com/tomschwarz/grav-plugin-simple-cookie',
        'keywords' => 'grav, plugin, cookie, cookieconsent, simple, opt-in, opt-out',
        'bugs' => 'https://github.com/tomschwarz/grav-plugin-simple-cookie/issues',
        'docs' => 'https://github.com/tomschwarz/grav-plugin-simple-cookie/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Position',
                    'default' => 'bottom-right',
                    'help' => 'Indicates where the cookie banner is placed on the website.',
                    'options' => [
                        'bottom' => 'Banner bottom',
                        'top' => 'Banner top',
                        'bottom-left' => 'Floating left',
                        'bottom-right' => 'Floating right'
                    ]
                ],
                'compliance' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Compliance',
                    'default' => 'info',
                    'help' => 'Indicates which mode the popup should have.',
                    'options' => [
                        'info' => 'Info',
                        'opt-in' => 'Opt-In',
                        'opt-out' => 'Opt-Out'
                    ]
                ],
                'layout' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Layout',
                    'default' => 'edgeless',
                    'help' => 'Indicates which style the cookie banner has.',
                    'options' => [
                        'block' => 'Block',
                        'classic' => 'Classic',
                        'edgeless' => 'Edgeless'
                    ]
                ],
                'palette' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'Default color themes',
                    'default' => 'gray',
                    'help' => 'Standard themes for the cookie banner.',
                    'options' => [
                        'black' => 'Black and yellow',
                        'white' => 'White and turquoise',
                        'gray' => 'Gray and blue'
                    ]
                ],
                'informations' => [
                    'type' => 'text',
                    'label' => 'Learn more link',
                    'help' => 'The Link with more informations to the usage of cookies.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'banner_message' => [
                    'type' => 'text',
                    'label' => 'Message',
                    'help' => 'The Message on the cookie banner.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'banner_dismiss' => [
                    'type' => 'text',
                    'label' => 'Dismiss button text',
                    'help' => 'The text on the dismiss button.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'banner_deny' => [
                    'type' => 'text',
                    'label' => 'Deny button text',
                    'help' => 'The text on the deny button.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'banner_accept' => [
                    'type' => 'text',
                    'label' => 'Accept button text',
                    'help' => 'The text on the accept button.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'banner_policy' => [
                    'type' => 'text',
                    'label' => 'Policy link text',
                    'help' => 'The text for the policy link.',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'custom' => [
                    'type' => 'toggle',
                    'label' => 'Use custom configuration',
                    'help' => 'Insert custom code for the cookieconsent plugin.',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'custom_config' => [
                    'type' => 'textarea',
                    'label' => 'Custom config Object',
                    'validate' => [
                        'type' => 'textarea'
                    ]
                ]
            ]
        ]
    ]
];

<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://vmcosta/vmcosta.yaml',
    'modified' => 1447344730,
    'data' => [
        'enabled' => true,
        'default_lang' => 'pt',
        'author' => 'Vitor Costa',
        'title_header' => false,
        'home_profile' => true,
        'infinite_scroll' => true,
        'analytics' => 'UA-24571011-1',
        'social' => [
            'twitter' => '@vmcosta'
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/vmcosta',
                            1 => 'user/themes/cacti'
                        ]
                    ]
                ]
            ]
        ]
    ]
];

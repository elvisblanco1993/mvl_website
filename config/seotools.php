<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "MVL Law Firm LLC", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Ms. Lorduy\'s practice is dedicated to helping her clients obtain lawful immigration status by receiving employment authorizations, Lawful Permanent Residency and other immigration relief and to ultimately naturalize as U.S Citizens.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['TPS, Temporary Protected Status, TPS Venezuela, TPS Miami, TPS Homestead, TPS Kendall, Proteccion Venezolanos Miami, DACA, TPS USA', 'Deferred Action for Childhood Arrivals Program'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'MVL Law Firm LLC', // set false to total remove
            'description' => 'Ms. Lorduy\'s practice is dedicated to helping her clients obtain lawful immigration status by receiving employment authorizations, Lawful Permanent Residency and other immigration relief and to ultimately naturalize as U.S Citizens.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@Merceylaw',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'MVL Law Firm LLC', // set false to total remove
            'description' => 'Ms. Lorduy\'s practice is dedicated to helping her clients obtain lawful immigration status by receiving employment authorizations, Lawful Permanent Residency and other immigration relief and to ultimately naturalize as U.S Citizens.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];

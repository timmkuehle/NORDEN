<?php

declare(strict_types=1);

/**
 * Client model class
 *
 * Defines all clients and provides current client information
 *
 * @property array $clients Holds information arrays for all existing clients
 */
class ClientModel {
    private array $clients = [
        [
            'name' => 'oetztal',
            'nicename' => 'Ötztal',
            'link' => 'https://www.oetz.com/',
            'logo' => '/content/resources/clientLogos/Oetztal.svg'
        ],
        [
            'name' => 'soelden',
            'nicename' => 'Sölden',
            'link' => 'https://www.soelden.com/',
            'logo' => '/content/resources/clientLogos/Soelden.svg'
        ],
        [
            'name' => 'gurgl',
            'nicename' => 'Gurgl',
            'link' => 'https://www.gurgl.com/',
            'logo' => '/content/resources/clientLogos/Gurgl.svg'
        ],
        [
            'name' => 'garda-trentino',
            'nicename' => 'Garda Trentino',
            'link' => 'https://www.gardatrentino.it/de',
            'logo' => '/content/resources/clientLogos/Garda_Logowhite.svg'
        ],
        [
            'name' => 'seefeld',
            'nicename' => 'Seefeld',
            'link' => 'https://www.seefeld.com/',
            'logo' => '/content/resources/clientLogos/Seefeld.svg'
        ],
        [
            'name' => 'alpachtal',
            'nicename' => 'Alpbachtal',
            'link' => 'https://www.alpbachtal.at/',
            'logo' => '/content/resources/clientLogos/Alpbachtal.svg'
        ],
        [
            'name' => 'bike-republic',
            'nicename' => 'Bike Republic',
            'link' => 'https://bikerepublic.soelden.com/',
            'logo' => '/content/resources/clientLogos/Bike_Republic.svg'
        ],
        [
            'name' => 'oetztaler-radmarathon',
            'nicename' => 'Ötztaler Radmarathon',
            'link' => 'https://www.oetztaler-radmarathon.com/',
            'logo' => '/content/resources/clientLogos/Oetztaler_Radmarathon.svg'
        ],
        [
            'name' => 'plansee',
            'nicename' => 'Plansee',
            'link' => 'https://www.alpbachtal.at/',
            'logo' => '/content/resources/clientLogos/Plansee_Group.svg'
        ],
        [
            'name' => 'bystronic',
            'nicename' => 'Bystronic',
            'link' => 'https://www.bystronic.com/',
            'logo' => '/content/resources/clientLogos/Bystronic.svg'
        ],
        [
            'name' => 'pleasure',
            'nicename' => 'Pleasure',
            'link' => 'https://www.pleasuremag.com/',
            'logo' => '/content/resources/clientLogos/PLEASURE.svg'
        ],
        [
            'name' => 'aranea',
            'nicename' => 'Aranea',
            'link' => 'https://aranea.or.at/',
            'logo' => '/content/resources/clientLogos/ARANEA.svg'
        ],
        [
            'name' => 'burton',
            'nicename' => 'Burton',
            'link' => 'https://www.burton.com/',
            'logo' => '/content/resources/clientLogos/BURTON_Logo.svg'
        ],
        [
            'name' => 'emf',
            'nicename' => 'Electric Mountain Festival',
            'link' => 'https://www.soelden.com/de/events-freizeittipps/events/electric-mountain-festival',
            'logo' => '/content/resources/clientLogos/Electric_Mountain_Festival_1.svg'
        ],
        [
            'name' => 'waldorf-innsbruck',
            'nicename' => 'Freie Waldorfschule Innsbruck',
            'link' => 'https://www.waldorf-innsbruck.at/',
            'logo' => '/content/resources/clientLogos/Freie_Waldorfschule_Innsbruck.svg'
        ],
        [
            'name' => 'holtmeyer',
            'nicename' => 'Holtmeyer',
            'link' => 'https://holtmeyer.net/',
            'logo' => '/content/resources/clientLogos/Holtmeyer.svg'
        ],
        [
            'name' => 'muri',
            'nicename' => 'Muri',
            'link' => 'https://www.etsy.com/shop/MURIhandcraftedgoods/',
            'logo' => '/content/resources/clientLogos/Muri.svg'
        ],
        [
            'name' => 'saac',
            'nicename' => 'SAAC',
            'link' => 'https://www.saac.at/',
            'logo' => '/content/resources/clientLogos/SAAC.svg'
        ]
    ];

    /**
     * Clients getter
     *
     * Gets client list, filtered by names if provided
     *
     * @param ?array $names Client slugs to return
     * @return array Filtered or full client list
     */
    public function getClients(?array $names = null): array {
        return $names
            ? array_values(
                array_filter(
                    $this->clients,
                    fn($client) => in_array($client['names'], $names)
                )
            )
            : $this->clients;
    }
}

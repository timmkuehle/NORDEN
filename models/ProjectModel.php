<?php

declare(strict_types=1);

/**
 * Project model class
 *
 * Defines projects and provides current project information
 *
 * @property array $projects Holds information arrays for all existing projects
 * @property array $currentProject Holds information about current projects, requested by project controller
 */
class ProjectModel {
    private array $projects = [
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Ötztal',
            'thumbnail' => '/content/resources/media/projectPreviews/01_Oetztal_CD_Startseite.gif',
            'category' => 'Corporate Design',
            'preview_title' => 'Marke Ötztal'
        ],
        [
            'slug' => '/projekte/gurgl',
            'content_path' => '/content/projects/gurgl',
            'title' => 'Gurgl',
            'thumbnail' => '/content/resources/media/projectPreviews/02_Gurgl.jpg',
            'category' => 'Corporate Design'
        ],
        [
            'slug' => '/projekte/aranea',
            'content_path' => '/content/projects/aranea',
            'title' => 'ARANEA',
            'thumbnail' => '/content/resources/media/projectPreviews/03_ARANEA.jpg',
            'category' => 'Corporate Design'
        ],
        [
            'slug' => '/projekte/soelden',
            'content_path' => '/content/projects/soelden',
            'title' => 'Sölden',
            'thumbnail' => '/content/resources/media/projectPreviews/04_Soelden_NEU.jpg',
            'category' => 'Corporate Design',
            'preview_title' => 'Marke Sölden'
        ],
        [
            'slug' => '/projekte/soelden/test-fest',
            'content_path' => '/content/projects/testFest',
            'title' => 'Test Fest Sölden',
            'thumbnail' => '/content/resources/media/projectPreviews/05_Test_Fest.jpg',
            'category' => 'Corporate Design'
        ],
        [
            'slug' => '/projekte/soelden/typografie',
            'content_path' => '/content/projects/soeldenTypo',
            'title' => 'Corporate Font Sölden',
            'thumbnail' => '/content/resources/media/projectPreviews/06_SOEL_Font_Startseite.gif',
            'category' => 'Typography'
        ],
        [
            'slug' => '/projekte/holtmeyer',
            'content_path' => '/content/projects/holtmeyer',
            'title' => 'Holtmeyer',
            'thumbnail' => '/content/resources/media/projectPreviews/07_Holtmeyer.jpg',
            'category' => 'Corporate Design'
        ],
        [
            'slug' => '/projekte/soelden/oetztaler-radmarathon',
            'content_path' => '/content/projects/oetztaler',
            'title' => 'Ötztaler Radmarathon',
            'thumbnail' => '/content/resources/media/projectPreviews/08_Radmarathon.jpg',
            'category' => 'Event Branding'
        ],
        [
            'slug' => '/projekte/seefeld',
            'content_path' => '/content/projects/seefeld',
            'title' => 'Seefeld',
            'thumbnail' => '/content/resources/media/projectPreviews/09_Seefeld_Startseite.gif',
            'category' => 'Corporate Design'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Ötztal Magazin',
            'thumbnail' => '/content/resources/media/projectPreviews/10_Oetztal_Magazin.jpg',
            'category' => 'Editorial Design'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Garda Trentino',
            'thumbnail' => '/content/resources/media/projectPreviews/11_Garda_CD.jpg',
            'category' => 'Corporate Design',
            'preview_title' => 'Marke Garda Trentino'
        ],
        [
            'slug' => '/projekte/soelden/electric-mountain-festival',
            'content_path' => '/content/projects/soeldenEmf',
            'title' => 'Electric Mountain Festival',
            'thumbnail' => '/content/resources/media/projectPreviews/12_EMF_Startseite.gif',
            'category' => 'Event Branding'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Bike Republic Sölden',
            'thumbnail' => '/content/resources/media/projectPreviews/13_BRS_Startseite.gif',
            'category' => 'Editorial Design',
            'preview_title' => 'Corporate Design'
        ],
        [
            'slug' => '/projekte/oetztal/font',
            'content_path' => '/content/projects/oetztalTypo',
            'title' => 'Ötztal Font',
            'thumbnail' => '/content/resources/media/projectPreviews/14_Oetztal_Font.jpg',
            'category' => 'Typography'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Florian Manz',
            'thumbnail' => '/content/resources/media/projectPreviews/15_FlorianManz.jpg',
            'category' => 'Logo Design'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Burton',
            'thumbnail' => '/content/resources/media/projectPreviews/16_Burton.jpg',
            'category' => 'Grafik Support'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Kaiserweis Kids Käsebox',
            'thumbnail' => '/content/resources/media/projectPreviews/17_Kaiserweis_Käasebox_Kids.jpg',
            'category' => 'Packaging Design'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Corporate Font Gurgl',
            'thumbnail' => '/content/resources/media/projectPreviews/18_GurgL_Font_Startseite.gif',
            'category' => 'Typography'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Rock Master',
            'thumbnail' => '/content/resources/media/projectPreviews/19_Rock_Master.jpg',
            'category' => 'Event Branding'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Pleasure Snowboard Magazin',
            'thumbnail' => '/content/resources/media/projectPreviews/20_Pleasure.jpg',
            'category' => 'Editorial Design'
        ],
        [
            'slug' => '/projekte/alpbachtal',
            'content_path' => '/content/projects/alpbachtal',
            'title' => 'Alpbachtal',
            'thumbnail' => '/content/resources/media/projectPreviews/21_Alpbachtal_Startseite.gif',
            'category' => 'Corporate Design',
            'preview_title' => 'Marke Alpbachtal'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Congress Centrum Alpbach',
            'thumbnail' => '/content/resources/media/projectPreviews/22_CCA.jpg',
            'category' => 'Corporate Design',
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Kaiserweis Premium Käsebox',
            'thumbnail' => '/content/resources/media/projectPreviews/23_Kaiserweis_Käsebox_premium.jpg',
            'category' => 'Packaging Design'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Corporate Font Garda Trentino',
            'thumbnail' => '/content/resources/media/projectPreviews/24_Garda_Font_Startseite.gif',
            'category' => 'Typography'
        ],
        [
            'slug' => '/projekte/oetztal-kids',
            'content_path' => '/content/projects/oetztalKids',
            'title' => 'Ötztal WIDI-(Kids)font',
            'thumbnail' => '/content/resources/media/projectPreviews/25_WidiFont.jpg',
            'category' => 'Typography'
        ],
        [
            'slug' => '/',
            'content_path' => '/',
            'title' => 'Tirols Hochplateau',
            'thumbnail' => '/content/resources/media/projectPreviews/26_TirolsHochplateau_Startseite.gif',
            'category' => 'Logo Design'
        ],

        
    ];
    private array $currentProject;

    /**
     * Constructor method
     *
     * Sets current project property, if slug is provided
     *
     * @param ?string $slug Slug of requested page
     */
    public function __construct(?string $slug = null) {
        if ($slug) {
            $filtered_projects = array_values(
                array_filter(
                    $this->sanitizeProjects($this->projects),
                    fn($project) => $project['slug'] === sanitize_uri($slug)
                )
            );

            $this->currentProject = $filtered_projects[0] ?? [];
        }
    }

    /**
     * Projects sanitization method
     *
     * Sanitizes slug and content path of every project
     *
     * @return array Sanitized projects array
     */
    private function sanitizeProjects(): array {
        return array_map(
            fn($project) => array_replace($project, [
                'slug' => sanitize_uri($project['slug']),
                'content_path' => sanitize_uri($project['content_path'])
            ]),
            $this->projects
        );
    }

    /**
     * Current project getter
     *
     * @return array Current project information, requested by project controller
     */
    public function getCurrentProject(): array {
        return $this->currentProject;
    }

    /**
     * Projects getter
     *
     * Gets project list, filtered by slugs if provided
     *
     * @param ?array $slugs Project slugs to return
     * @return array Filtered or full project list
     */
    public function getProjects(?array $slugs = null): array {
        $sanitized_slugs = $slugs
            ? array_map(fn($slug) => sanitize_uri($slug), $slugs)
            : [];
        $sanitized_projects = $this->sanitizeProjects();

        return $slugs
            ? array_values(
                array_filter(
                    $sanitized_projects,
                    fn($project) => in_array($project['slug'], $sanitized_slugs)
                )
            )
            : $sanitized_projects;
    }
}

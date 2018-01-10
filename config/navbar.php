<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom-uppgifter"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om den här sidan")
            ],

            "Grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Vertikalt grid")
            ],

            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography?hgrid"),
                "title" => t("Horisontellt grid")
            ],
            "theme-selector" => [
                "text"  => t("Tema-väljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Tema-väljare")
            ],
            "Tema" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Mina olika teman")
            ],
            "Analys" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis/"),
                "title" => t("Mina analyser")
            ],
            "Bilder" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Testsida för bilder")
            ],
            "Blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Min bild-blogg")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "Grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Vertikalt grid")
            ],

            "typography" => [
                "text"  => t("Typografi"),
                "url"   => $this->di->get("url")->create("typography?hgrid"),
                "title" => t("Horisontellt grid")
            ],
            "theme-selector" => [
                "text"  => t("Tema-väljare"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Tema-väljare")
            ],
            "Tema" => [
                "text"  => t("Tema"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Mina olika teman")
            ],
            "Analys" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis/"),
                "title" => t("Mina analyser")
            ],
            "Bilder" => [
                "text"  => t("Bilder"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Testsida för bilder")
            ],
            "Blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Min bild-blogg")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];

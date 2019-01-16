<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Rapport: Utvärdera webbplatsers färgval och känslan de signalerar",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport: Utvärdera webbplatsers färgval och känslan de signalerar",
                    ],
                    [
                        "text" => "Rapport: Utvärdera webbplatsers laddningstid och användbarhet",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport: Utvärdera webbplatsers laddningstid och användbarhet",
                    ],
                    [
                        "text" => "Rapport: Utvärdera webbplatsers laddningstid och användbarhet",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport: Utvärdera webbplatsers laddningstid och användbarhet",
                    ],
                    [
                        "text" => "Analys: Analys aktuell webbplatsdesign",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Analys: Analys aktuell webbplatsdesign",
                    ],
                    [
                        "text" => "Analys: Webbplatsers färgval och känslan de signalerar",
                        "url" => "rapport/design-och-webbplatser",
                        "title" => "Analys: Webbplatsers färgval och känslan de signalerar",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg.",
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Prov-sida.",
        ],
    ],
];

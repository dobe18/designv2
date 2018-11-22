---
views:
    flash:
        region: flash
        template: anax/v2/image/default
        data:
            src: "image/theme/coding.jpg?width=800&height=150&crop-to-fit&area=0,0,30,0"

    kursrepo:
        region: sidebar-left
        template: anax/v2/block/default
        sort: 2
        data:
            meta:
                type: single
                route: block/om-kursrepo
    redovisa:
        region: sidebar-right
        template: anax/v2/block/default
        sort: 3
        data:
            meta:
                type: single
                route: block/om-redovisa
---
Test
=========================

Prov-sida.

---
---
Rapport: Utvärdera webbplatsers laddningstid och användbarhet
=========================

Uppgiften handlar om att välja ut ett antal olika webbplatser och studera dem utifrån aspekten designprinciper.


Urval
=========================
Jag har valt fyra olika reklambyråer: https://www.markus.se/, https://ny.se/ och https://www.madebymedia.se/ eller https://www.soft.se/.  Jag valde att undersöka reklambyråer dels då dessa använder sig mest av design/extravagans och dels för att jag önskar bli inspirerad själv.


Metod
=========================
Min metod för att utföra undersökningen var att googla fram olika reklambyråer. Sedan använde jag mig av kursmaterialet som jag har blivit försedd med för detta kmom och analyserat de valda webbplatserna utifrån de designprinciper jag läst om.

Resultat
=========================

[FIGURE src=image/Nelly.png?w=200 class="right" caption="Nelly."]
Samlad data från mätningarna med Google Pagespeed och devtools för Nelly.se går att se i följande
[excelark](https://docs.google.com/spreadsheets/d/1wfqrh0kU1eIWplHxUDws6Gr7Hb4dIlrPTDzpIjhUkYg/edit#gid=0). Med hjälp av Google Pagespeed går det att se att hastighetsresultatet för Nelly.se när denna öppnas i mobilen är sämre än när man tittar på hemsidan på datorn. I mobilen visar analysen en 7a i skalan, vilket innebär att den är långsam medan på datorn är den genomsnittlig, 81 i betyg. Hemsidan är alltså inte anpassad för mobilen. Chrome devtools visade en genomsnittlig laddningstid på 2,26s där antalet resurser är 206 och sidans totala storlek 103kb i genomsnitt. Ett sätt att optimera och förbättra webbplatsen är tex att skicka bilder i modernare bildformat,
ta bort resurser som blockerar renderingen, undvika upprepade omdirigeringar och
skjuta upp CSS som inte används.

[FIGURE src=image/Aftonbladet.png?w=200 class="right" caption="Aftonbladet."]
Samlad data från mätningarna med Google Pagespeed och devtools för Aftonbladet.se går att se i följande [excelark](https://docs.google.com/spreadsheets/d/1wfqrh0kU1eIWplHxUDws6Gr7Hb4dIlrPTDzpIjhUkYg/edit#gid=2038006241). Med hjälp av Google Pagespeed går det att se att hastighetsresultatet för Aftonbladet.se när denna öppnas i mobilen är den sämre än när man tittar på hemsidan på datorn. I mobilen visar analysen 52 i skalan, vilket innebär att den är genomsnittlig medan på datorn är lite bättre men fortfarande genomsnittlig, 71 i betyg. Hemsidan funkar alltså bättre på datorn och mer anpassad för datorn än mobilen. Chrome devtools visade en genomsnittlig laddningstid på 4,38s där antalet resurser är 160 och sidans totala storlek 275kb i genomsnitt. Ett sätt att optimera och förbättra webbplatsen är tex att ta bort resurser som blockerar renderingen, skjuta upp inläsningen av bilder som inte visas på skärmen, skjuta upp CSS som inte används
och använda bilder med rätt storlek.


[FIGURE src=image/Youtube.png?w=200 class="right" caption="Youtube."]
Samlad data från mätningarna med Google Pagespeed och devtools för Youtube.se går att se i följande [excelark](https://docs.google.com/spreadsheets/d/1wfqrh0kU1eIWplHxUDws6Gr7Hb4dIlrPTDzpIjhUkYg/edit#gid=2038006241). Med hjälp av Google Pagespeed går det att se att hastighetsresultatet för Youtube när denna öppnas i mobilen är sämre än när man tittar på hemsidan på datorn. I mobilen visar analysen 54 i skalan, vilket innebär att den är genomsnittlig medan på datorn är den snabb, 97 i betyg. Hemsidan funkar alltså bättre på datorn och mer anpassad för datorn än mobilen. Chrome devtools visade en genomsnittlig laddningstid på 4,63s där antalet resurser är 104 och sidans totala storlek 892kb i genomsnitt. Ett sätt att optimera och förbättra webbplatsen är tex att undvika upprepade omdirigeringar,
skjuta upp inläsningen av bilder som inte visas på skärmen, ta bort resurser som blockerar renderingen, skjuta upp CSS som inte används och minska svarstiderna från servern (tid till första byte).



Analys
=========================


Efter att ha kört mätningen tre gånger på respektive sida så går det att konstatera att jag fick olika resultat varje gång. Detta kan bero på att sidorna laddar upp olika annonser eller skript varje gång eller så kan internetanslutningen variera. Gemensamt för respektive sida är att betyget är högre när man kollar på hemsidorna på datorn än i mobilen. Youtube som har flest videon visade längst laddningstid och näst längst laddningstid hade Aftonbladet som innehåller både videon och bilder. Kortast laddningstid visade Nelly.se då denna hemsidan har mindre bilder och kortare videon.
De vanligaste förbättringsåtgärderna för dessa tre webbplatser verkar vara att
skjuta upp CSS som inte används, ta bort resurser som blockerar renderingen och
undvika upprepade omdirigeringar.

Baserat på mätvärdena så ligger Youtube.se på topp följt av Aftonbladet.se och sedan Nelly.se. Youtube har en längre landningstid med 4,63s än de andra två hemsidorna på 4,38s och 2,26s men om man tittar på respektive sidas totala storlek så är Youtube betydligt större med 892kb i genomsnitt jämfört med 275kb och 103kb. Youtube får också bättre betyg när man tittar på hemsidan på mobilen och även hyfsat högt betyg
vid visning på datorn.

En gräns för absolut laddningstid som jag själv uppfattar som snabb är runt 2s medan en långsam är över 5s.  Mitt urval av mina webbplatser klarar mina gränsvärden och ligger inom 2-5s. Jag upplever dessa webbplatser snabba, dock kan Nelly.se och Aftonbladet.se lagga och det tar tid för tex bilderna på dessa sidor att laddas upp.


Referenser
=========================

Nelly. 2018. <https://nelly.com/se/kl%C3%A4der-f%C3%B6r-kvinnor/>

Youtube. 2018. <https://www.youtube.com/?gl=SE&hl=sv>

Aftonbladet. 2018. <https://www.aftonbladet.se/>

Pagespeed Insights. 2018 <https://developers.google.com/speed/pagespeed/insights/>

Moz. 2018. Page Speed. <https://moz.com/learn/seo/page-speed>

Övrigt
=========================

Denna rapport är skriven av Donjeta.

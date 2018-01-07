Om mina teman
==============================================

Jag valde att skapa ett antal less-variabler in en modul och sedan omdefiniera dessa variabler i varje tema-fil. Variablerna påverkar bara färger och fonter.

###base
Här tog jag i stort sett sidan från kmom02 och tog bort färgerna. Så sidan har struktur med tex. horisontell navbar, horisontella footer-kolumner och justerade regioner enlingt de vertikala och horisontella griderna.


###light

Här lade jag in gråtoner på de huvudsakliga regionerna (main, header, navbar, footer, sidebar)

###color

Här utgick jag från bilden som jag har i flash-regionen. Jag matade in den i adobes
[Adobe Color CC](https://color.adobe.com/create/color-wheel/) och valde sedan en färg som basfärg, #6798c1, och skapade ett monokromt tema utifrån den.
Som accentfärg valde jag en ljus komplementärfärg. Accentfärgen är bara synlig när man hoovrar över navbaren.

###dark

Css-funktionen invert kom väl till pass här. All less-kod är samma som i light-temat förutom att jag tillfogat följande på slutet:

        .wrap-all {
            filter: invert(100%);
        }
        @accentColor: #00c300;

Andra raden inverterar alla färger och sista raden sätter accentfärgen till samma rosa som "AF" i anax-flax-logons invererade färg.


###colorful

Jag tycker triadiska paletter är svårast att få till. Så det här temat är jag minst nöjd med. Även här tog jag [Adobe Color CC](https://color.adobe.com/create/color-wheel/) till hjälp och vred och vände tills jag fick tre färger jag var nöjd med. Dock blev resultatet ändå inte särskilt bra. Sidan är för orolig och lite för oharmonisk.


###typography

Jag letade länge bland Google-fonter. Jag ville ha en till rubrikerna som fångade uppmärksamheten, men på ett diskret avslappnat sätt. Till brödtexten valde jag länge mellan en rak och lättläst font, Roboto, och en mer extravagant, Shadows Into Light Two. Eftersom typografin skulle stå ut här, så valde jag den sista. Till min default-sida valde jag dock den diskretare, Roboto.

###default

Här utgick jag från resultatet av att mata [Adobe Color CC](https://color.adobe.com/create/color-wheel/) med min flash-bild, plus att jag ändrade fonter till två Google-fonter som passade. Som accentfärg valde jag en komplement-färg. Det här temat känns behagligt och vilosamt. Det är jag mest nöjd med.

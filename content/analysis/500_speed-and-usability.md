Hastighet
===============================

##Urval
Jag valde några sidor jag använder ofta:

* [Svt play](https://svtplay.se)
* [Lidköpings KK](http://www.lidkopingskk.se/)
* [SvD](https://svd.se)

##Verktyg
* [Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/?hl=sv)
* [Firefox Dev Tools Network Monitor](https://developer.mozilla.org/en-US/docs/Tools/Network_Monitor)

##Metod
Först undersöktes varje webb-plats med Google PageSpeed. Rankingen antecknades för Mobil och Desktop.

Sedan undersöktes tre sidor på varje webb-plats med Firefox Network Monitor. Antal laddade resurser, total sidostorlek och laddningstid antecknades. För laddningstiden gjordes tre mätningar på varje sida och ett snitt räknades ut.

##Resultat och förbättringsåtgärder
De vanligaste förbättringsförslagen från PageSpeed var följande:

1. Eliminate render-blocking JavaScript and CSS in above-the-fold content
2. Optimize images
3. Leverage browser caching

Dessa var de enda som fanns som förbättringsförslag för alla webb-platser.

[Detaljerade resultat i ett kalkyl-ark](https://docs.google.com/spreadsheets/d/16GeKY0aLmbuaqlBeCKYrmsmCM7k-VKTQem0w5ufbz20/edit?usp=sharing)
##Rangordning
1. Svt play
2. LKK
3. SvD

**Kommentar:**
Svt play var snabbast, särskilt om man bortser från första mätningen. Även PageSpeed-resultatet var bäst för Desktop. För Mobil var däremot resultatet på PageSpeed sämst.
På andra plats kommer LKK. LKK har samtidigt 4 ggr. så många förbättringsförslag på PageSpeed, så där finns mycket större förbättringspotential. Om alla förbättringar genomfördes, kanske den skulle bli riktigt snabb.
Sist kommer SvD. Det är inte så konstigt. Många tidningssidor laddar långsamt, eftersom de har tungt och mycket inehåll.

##Gräns för laddningstiden
Min subjektiva gräns för långsamhet ligger ungefär vid 4,5 sekunder. Om en sida behöver 5 s känns den långsam. 4 s däremot, känns ok.

##Gruppmedlemmar
Jag har jobbat ensam. Jag är distans-student.

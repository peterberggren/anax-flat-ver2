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

##Resultat

[Detaljerade resultat i ett kalkyl-ark](https://docs.google.com/spreadsheets/d/16GeKY0aLmbuaqlBeCKYrmsmCM7k-VKTQem0w5ufbz20/edit?usp=sharing)

###Svt play

[FIGURE src="image/speed/svtplay.png?w=90%" class="center" caption=[svtplay.se](https://svtplay.se)]

**Betyg från Google PageSpeed (desktop):** 81 <br>
**Betyg från Google PageSpeed (mobil):** 56 <br>
**Genomsnittlig laddningstid (desktop):** 3,72 s

**Förbättringsförslagen** från PageSpeed var följande:

**Mobil:**

- Minska svarstiden från servern

- Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten

- Undvik omdirigeringar från målsidan

- Prioritera synligt innehåll

- Utnyttja cachelagring i webbläsare

**Desktop:**

- Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten

- Undvik omdirigeringar från målsidan

- Optimera bilder

- Utnyttja cachelagring i webbläsare

###LKK

[FIGURE src="image/speed/lkk.png?w=90%" class="center" caption=[lidkopingskk.se](https://www.lidkopingskk.se)]

**Betyg från Google PageSpeed (desktop):** 79 <br>
**Betyg från Google PageSpeed (mobil):** 59 <br>
**Genomsnittlig laddningstid (desktop):** 3,15 s

**Förbättringsförslagen** från PageSpeed var följande:

**Mobil:**

- Minska svarstiden från servern

- Prioritera synligt innehåll

- Minska svarstiden från servern

- Aktivera komprimering

- Minifiera HTML

- Optimera bilder

- Utnyttja cachelagring i webbläsare

**Desktop:**

- Aktivera komprimering

- Optimera bilder

- Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten

- Minifiera HTML

- Utnyttja cachelagring i webbläsare

- Minska svarstiden från servern

- Minifera JavaScript

- Minifiera CSS


###SvD

[FIGURE src="image/speed/svd.png?w=90%" class="center" caption=[svd.se](https://svd.se)]

**Betyg från Google PageSpeed (desktop):** 61 <br>
**Betyg från Google PageSpeed (mobil):** 66 <br>
**Genomsnittlig laddningstid (desktop):** 5,79 s

**Förbättringsförslagen** från PageSpeed var följande:

**Mobil:**

- Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten

- Prioritera synligt innehåll

- Optimera bilder

- Utnyttja cachelagring i webbläsare

**Desktop:**

- Optimera bilder

- Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten

- Utnyttja cachelagring i webbläsare

- Aktivera komprimering

- Minifiera JavaScript

- Minifiera HTML

- Minifiera CSS

###Rangordning
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

<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - Usability</title>
    <link rel="stylesheet" href="https://use.typekit.net/wmt5acl.css">
    <link rel="stylesheet" href="https://use.typekit.net/rhb2jwa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
    
<body>
    <header class="header">
        
        <?php include('includes/header.php'); ?>
        
    </header>
    
    <h2 id="h2">Usability testmetoder</h2>
    
    <section class="indholdoversigt">

            <p id="indholdpaasiden">Indhold på siden</p>

            <ul>
                <li>
                    <a href="#hvad">Hvad er usability?</a>
                </li>
                <li>
                    <a href="#undersøgelsesdesign">Undersøgelsesdesign</a>
                </li>
                <li>
                    <a href="#gangster">Gangstertestmetoden</a>
                </li>
                <li>
                    <a href="#skema">Spørgeskema</a>
                </li>
                <li>
                    <a href="#bruger">Brugertest</a>
                </li>
                <li>
                    <a href="#kilder">Kilder</a>
                </li>
            </ul>
    
        </section>
    
        <section class="indholdcontainer">
        
            <section class="boks">
        
                <h3 class="h3" id="hvad">Hvad er usability?</h3> 
                
                <p class="tekst-i-boks">Usability betyder på dansk anvendelighed. Når vi laver en hjemmeside, er det vigtigt at den fungerer optimalt set fra brugerens synsvinkel. Den skal altså være anvendelig. Det findes forskellige testmetoder til at komme i mål med lige netop dette. Ens for alle testmetoderne er, at testpersonerne altid er brugerne. Usability handler altså om brugervenlighed. (Gregersen & Wisler-Poulsen, Hvad er usability, 2017)</p>
                
                <img src="billeder/usability.png" width="80%">
                
                <p class="tekst-i-boks">Vi ser alle sammen tingene forskelligt og det er derfor det er så vigtigt, at få testet sin hjemmeside. Derudover er det utrolig vigtigt, at man tester det på sin målgruppe. Det er dem der skal bruge siden, og det er derfor vigtigst, at de kan lide oplevelsen på siden. (ibid.)</p>
            
                
            </section>
            
            <h3 class="h3" id="undersøgelsesdesign">Undersøgelsesdesign</h3>
            
            <p class="tekst">Når man skal undersøge noget, må man gerne bruge flere metoder. Metoderne må også gerne kombineres. (Gregersen &amp; Wisler-Poulsen, Undersøgelsesdesign, 2017) Når vi skal teste vores side, skal vi først og fremmest vælge vores fokusområde. Det kunne være at vi ønskede at teste websidens hovedmenu. Derefter skal vi vælge hvilken testmetoder vi ønsker at anvende. Det kan f.eks. være gangstertestmetoden, til at teste navigationen. Til sidste skal vi forberede. Det kan f.eks. være ved at vælge hvilken underside der skal bruges, når vi kører gangstertesten. (ibid.) Her kan vi se hvilke testmetoder der passer til det fokusområde man har valgt.</p>
            
            <h4>Navigation og struktur(Informationsarkitektur)</h4>
            
            <p class="tekst">Gangstertest (navigation) og Kortsortering (informationsstruktur)</p>
            
            <h4>Funktionalitet (Interaktionsdesign)</h4>
            
            <p class="tekst">Spørgeskema, Ekspertvurdering (ud fra design-principper) og Brugertest</p>
            
            <h4>Layout og opbygning</h4>
            
            <p class="tekst">Gangstertest, Ekspertvurdering og Brugertest</p>
            
            <h4>Tilgængelighed</h4>
            
            <p class="tekst">Ekspertvurdering, Brugertest og Tilgængelighedstest</p>
            
            <h4>Forståelighed for bruger</h4>
            
            <p class="tekst">Spørgeskema, Kortsortering og Brugertest</p>
            
      
            <h3 class="h3" id="vej">Vejen til kunderne</h3>
            
            <p class="tekst">Her kigger vi på hvordan virksomheden kommunikerer med sine kunder og hvordan de når til dem. (ibid.) Vi kigger herunder på kommunikationskanaler, distributionskanaler og salgskanaler. Vi har her fokus på mange forskellige ting. Vi ser på hvordan virksomheden øger kundernes opmærksomhed på produkterne eller ydelserne, hvordan virksomheden gør det muligt for kunderne at købe produkterne og hvordan de yder kundesupport efter købet. (ibid.) </p>  
            
            
            
            <section class="boks">
        
                <h3 class="h3" id="gangster">Gangstertestmetoden</h3> 
                
                
                <p class="tekst-i-boks">Gangstertesten anvendes til at teste en websides navigation. Det er meget vigtigt at brugeren kan finde rundt på siden og finde dens informationer og funktioner. (Gregersen &amp; Wisler-Poulsen, Gangstertesten, 2017) Ved denne testmetode er der fokus på om brugerne kan finde frem til sin placering på en webside, efter at blive ”kastet” in på en underside. De skal finde frem til hvordan de er endt der og hvordan de kan komme videre. (ibid.)</p>
                
                <p class="tekst-i-boks">Man kan forestille sig, at man er blevet lukket inde i et bagagerum og bliver kørt rundt i en by, uden at vide hvor hen. Pludselig stopper bilen og man bliver smidt af. Ved at kigge sig omkring, kan man måske finde frem til, hvor i byen man er blevet smidt af. Det kan være vejskilte og husnumre. Det kan også være der er et skilt der peger ind mod centrum. Nogle gange finder man også et kort over byen eller en fodgænger der kan hjælpe. Man kan altså ret hurtigt finde ud af hvor man er og hvordan man kommer videre. (ibid.)</p>
                
                <p class="tekst-i-boks">Denne metafor kan man overføre til en webside og det er sådan gangstertesten fungerer. Man sender brugeren ind på en underside til et website og så skal de forsøge at finde information som kan hjælpe dem med at finde frem til hvor de er og hvordan de kommer videre. </p>
                
                <h4 class="h4boks">udførelsen</h4>
                
                <p class="tekst-i-boks">Før man kan starte testen, skal man have udvalgt en underside på det website, som skal testes. Man ender tit på tilfældige sider, når man laver specifikke søgninger på f.eks. google. Det kan derfor være en fordel at vælge en tilfældig underside til din test. (ibid.) </p>
                
                <p class="tekst-i-boks">Før man kan starte testen, skal man have udvalgt en underside på det website, som skal testes. Man ender tit på tilfældige sider, når man laver specifikke søgninger på f.eks. google. Det kan derfor være en fordel at vælge en tilfældig underside til din test. (ibid.) </p>
                
                
                <p class="tekst-i-boks">Følgende spørgsmål stiller man testpersonen: </p>
                
                <p class="tekst-i-boks"><span class="teksttyk">Hvilket website er du på? </span>Website ID: Se efter logo eller noget andet identifikation af afsenderen. </p>
                <p class="tekst-i-boks"><span class="teksttyk">Hvor er websitets globale menu?</span>Se efter den overordnede menu på websitet</p>
                <p class="tekst-i-boks"><span class="teksttyk">Hvilken underside er du på?</span>Se efter undersidens titel</p>
                <p class="tekst-i-boks"><span class="teksttyk">Hvilke muligheder har du på denne side?</span>Undermenuer, links, billeder, downloads og andre funktioner</p>
                <p class="tekst-i-boks"><span class="teksttyk">Hvordan er du kommet hertil?</span>Se efter brødkrummesti, overblik i navigation, marketing af aktuel placering</p>
                <p class="tekst-i-boks">Hvor kan du søge?<span id="teksttyk">Er søgefeltet let at finde?(Gregersen &amp; Wisler-Poulsen, Gangstertesten, 2017)</span></p>

                <p class="tekst-i-boks">Det er ikke nok at udpege de enkelte elementer. Man skal også give point til hver af de seks spørgsmål. (ibid.) Pointene gives ud fra, hvor let eller svært det var at finde på undersiden. Pointene gives efter følgende skala:</p>
                
                <p class="tekst-i-boks"><span class="teksttyk">0 point: </span>Denne information fremgår slet ikke af undersiden</p>
                <p class="tekst-i-boks"><span class="teksttyk">1 point: </span>Denne information fremgår kun delvis af undersiden, den er svært at finde</p>
                <p class="tekst-i-boks"><span class="teksttyk">2 point: </span>Denne information kunne fremgå tydeligere på undersiden</p>
                <p class="tekst-i-boks"><span class="teksttyk">3 point: </span>Denne information fremgår tydeligt på undersiden</p>

    
                <p class="tekst-i-boks">Websiden kan altså få imellem 0 og 18 point. (ibid.) 0 point er selvfølgelig et dårligt resultat og navigationen på siden er dårlig understøttet. 18 point betyder at navigationen er meget tydelig og godt understøttet. </p>
                
                <p class="tekst-i-boks">Man kan teste ”lige på og råt”, hvor man kun tester en enkel underside. Men hvis man ønsker en mere gennemgående test, kan det være en god ide at udvælge flere undersider, som er opbygget på forskellige måder. (ibid.)</p>
                
                <h4 class="h4boks">Dokumentation</h4>
                
                <p class="tekst-i-boks">Gangstertesten er meget enkel at dokumentere. (ibid.) Dokumentationen skal blot indholde:</p>
                
                <p class="tekst-i-boks">Skærmbilleder af undersiden, med markeringer af de områder der er udpeget</p>
                
                <p class="tekst-i-boks">Opsummering af testens gennemførsel og resultat. Det er her pointscoren indgår og her nævnes også en beskrivelse af designets 3 største mangler. </p>
                
                <p class="tekst-i-boks">En uddybende beskrivelse på ca. 1 side. Her skriver man erfaringer fra testen og løsningsforslag. </p>
                
                <p class="tekst-i-boks">Gangstertesten er en af mine yndlingstestmetoder. Jeg synes den er simpel og nem at gå til, samtidig med at man får nogle resultater der kan bruges. Jeg synes det fungerer rigtig godt med det pointsystem der anvendes, da man bedre kan se, hvor stort eller lille problemet egentligt er. Det gør det også nemmere at se hvilke problemer man skal fokusere på først. Pointsystemet er noget jeg fremover vil kombinere med andre testmetoder, når dette er muligt. Jeg lærte hurtigt gangstertesten at kende, ved hjælp at metaforen. Man får et klart billede af, hvordan testen skal bruges.  </p>
                
            </section>
            
            <h3 class="h3" id="skema">Spørgeskema</h3>
            
            <p class="tekst">Når vi bruger spørgeskema som testmetode, så ønsker vi at undersøge hvor meget, hvor mange, hvor ofte og andre målbare kriterier. (Gregersen &amp; Wisler-Poulsen, Spørgeskema, 2017) Når vi anvender spørgeskemaer, ønsker vi ofte et målbart resultat og der er fokus på mange testdeltagere. Det er derfor en kvantitativ testmetode. </p>
            
            
            <p class="tekst">En spørgeskemaundersøgelse kan både bruges som et udgangspunkt for en kvalitativ testmetode, som f.eks. en brugertest, men man kan også bruge den selvstændigt. </p>
            
            <p class="tekst">Ved at anvende spørgeskemaet kan man undersøge store grupper på samme tid. Resultatet behandles statistisk. Man kan herefter lave brugerprofiler baseret på den viden man har fået fra spørgeskemaerne. </p>
            
            <p class="tekst">Spørgeskemaer kan bruges enten analyserende eller evaluerende. (ibid.) I analysen bruges de til at forstå og beskrive brugerne. Det kan f.eks. være hvilke opgaver de løser på nettet eller hvilke ønsker og behov de har i forhold til websitet. I evalueringen bruges til at få brugernes egen beskrivelse af deres anvendelse af websitet. Det er f.eks. være hvad er brugernes oplevelse af designet eller hvad er brugernes forståelse af websitets funktioner og muligheder. (ibid.) </p>
            
            <h4>Forberedelse</h4>
            
            <p class="tekst">I forberedelsen skal man selvfølgelig have fokus på at få defineret hvad man ønsker at få besvaret med spørgeskemaet. (ibid.) Derefter skal man have opbygget sit spørgeskema, det kan gøres på følgende måde:</p>
            
            
            <p class="tekst"><span class="teksttyk">Brainstorm: </span>Skriv alle spørgsmål ned, som man kunne forestille sig at stille i spørgeskemaet. Man skal bare skrive løs, så alle spørgsmål kommer med. Lig på og råt</p>
            <p class="tekst"><span class="teksttyk">Gruppér: </span>Opdel alle spørgsmålene i overordnede grupper, som hører sammen. (ibid.) Det er en god ide at navngive grupperne, så man bedre forstår sammensætningen senere. </p>
            <p class="tekst"><span class="teksttyk">Sortér: </span>Gennemgå grupperne om der nogle spørgsmål der overlapper eller om der er nogle der skal slås sammen. Hvis der er spørgsmål der ikke er vigtige, så skal man slette dem, så man kun har de vigtigste spørgsmål til sidst. </p>
            <p class="tekst"><span class="teksttyk">Prioritér: </span>Opstil grupperne af spørgsmål i en logisk og naturlig rækkefølge. </p>
         
            <h4>Udførelsen</h4>
            
            <p class="tekst">For at få flest mulige testdeltagere, skal man begrænse sit omfang af spørgsmål. Der må ikke være over 20 spørgsmål og de må ikke tage over 10 minutter at besvare. </p>
            
            <h5>Indledning</h5>
            
            <p class="tekst">Spørgeskemaet skal altid have en indledning der redegør for følgende:</p>
            
            <p class="tekst">Hvad spørgeskemaet drejer sig om, hvad resultaterne skal bruges til, hvem gennemfører undersøgelsen, hvor lang er undersøgelsen, er det anonymt osv.</p>
            
            <h5>Opbygning</h5>
            
            <p class="tekst">I starten af sit spørgeskema er det en god idé at lægge ud med korte og nemme spørgsmål. Det kan være demografiske spørgsmål, som besvarer hvilket køn, hvor gammel og hvor i landet de kommer fra. Jo længere testdeltagerene er kommet ind i spørgeskemaet, desto større chance er der for, at de gennemfører det. </p>
            
            <p class="tekst">De spørgsmål der kræver mere tid og overvejelse bør være længere inde i spørgeskemaet. (ibid.) Så spørgsmål af kvantitativ karakter, altså spørgsmål hvor man udelukkende skal krydse af i et svarfelt skal være i starten. De spørgsmål med kvalitativ karakter, så som spørgsmål hvor testdeltageren skal skrive sit svar, skal være senere i skemaet. </p>
            
            <h5>Status</h5>
            
            <p class="tekst">For at sikre sig, at så mange som muligt gennemfører testen, skal man gøre det tydeligt for deltageren hvor langt de er med spørgeskemaet og hvor meget de mangler. (ibid.) Det skal f.eks. tilføje sidenummer, altså hvilen side man befinder sig på ud af hvor mange sider. Det kunne også være hvilket spørgsmål man er i gang med og igen ud af hvor mange. Dette kunne også vises i procent eller som en lille illustration. </p>
            
            <h5>Instruktion og formulering</h5>
            
            <p class="tekst">Det er en god ide at lave en lille supplerende vejledning til hvert spørgsmål så man undgår forvirring hos testdeltageren. Undersøgelsen skal bygges på testdeltagernes erfaringer frem for forventninger. (ibid.) Når man formulerer spørgsmål til hvad de forventer at ville gøre i en given situation, er der stor sandsynlighed for at, deres svar ikke er korrekt, fordi det er svært for dem at forudse. Hvis man i stedet spørger ind til deres erfaringer, er der bedre chance for et godt svar, da de oftest kan huske, hvad de valgte eller mente en den givne situation. </p>
            
            <p class="tekst">Når man stiller et spørgsmål, skal det som udgangspunkt altid være kort og præcist. (ibid.) Man skal undgå negative formuleringer. Det kan være et spørgsmål hvor man bruger ordet ”ikke”. Det kan nemt overses eller misforstås. (ibid.)</p>
            
            <h5>Udtømmende svarmuligheder</h5>
            
            <p class="tekst">Det er vigtigt at der ved alle spørgsmål er udtømmende svarmuligheder. Det vil altså sige, at der f.eks. ikke kun skal være et ”ja” og et ”nej”. Der skal også være en ekstra svarmulighed, som f.eks. kunne være ”ved ikke”. (ibid.) Når testpersonens ønskede svarmulighed ikke er til stede vælger de det svar der passer bedst, også selvom det er langt fra hvad de mener. Derudover kan det være en god ide at give deltagerne en mulighed for, at skrive en uddybende kommentar. På denne måde får man mere end bare ”ved ikke”. </p>
            
            <h5>Afbrydelse</h5>
            
            
            <p class="tekst">Det er vigtigt at gøre det klart for deltagerne, at de til hver en tid kan afbryde testen eller springe et svar over. (ibid.) Hvis ikke dette er tydeligt, kan det ende med at de svarer tilfældigt for at blive hurtigere færdige. Dette kan have stor betydning for testresultatet og dermed hele undersøgelsen. </p>
            
            <h5>Afslutning</h5>
            
            <p class="tekst">Det er en god ide at have en afslutning på et spørgeskema. Her kan man takke testdeltagerne for deres besvarelse. Deres bidragelse betyder meget for undersøgelsen og det er vigtigt at anerkende. (ibid.)</p>
            
            <h5>Opfølgning</h5>
            
            <p class="tekst">Det kan være en god ide at spørge om deres kontaktinformationer. Hvis man gør dette, er det meget vigtigt at understrege, at det ikke bliver sat i forbindelse med deres svar. (ibid.) Hvis man har deres kontaktoplysninger, kan man bruge testdeltagerne til opfølgende spørgsmål eller undersøgelser. </p>
            
            <h5>Belønning</h5>
            
            <p class="tekst">Belønninger er god stil og giver et godt indtryk. (ibid.) Derudover øger det motivationen hos testdeltagerne. Belønningen skal ses som en anerkendelse. En chance for en stor belønning er mere motiverende end en sikker lille belønning. De fleste foretrækker chancen for at vinde 200 kr. frem for at være sikker på at få en 20’er. </p>
            
            <h4>Analyse og dokumentation</h4>
            
            <p class="tekst">Hvis resultaterne er tal, skal man finde relevante repræsentationer af disse tal. (ibid.) Det kan f.eks. være at de skal oversættes til procentsatser eller sættes ind i diagrammer. Man skal have over 100 svar før testen er anvendelig. Hvis man har en lille mængde data, skal man være forsigtigt med at drage konklusioner. (ibid.) </p>
            
    
            <section class="boks">
             
                <h3 class="h3" id="bruger">Brugertest</h3>
                
                
                <p class="tekst-i-boks">Oftest er det ikke os selv der skal bruge websitet. Derfor laver vi brugertest, hvor vi afprøver vores website på brugerne. (Gregersen &amp; Wisler-Poulsen, Brugertest, 2017) Vi tester om brugerne kan finde informationer og løse de opgaver som websitet er konstrueret til. (ibid.) Derudover giver det også indblik i hvad brugerne tænker når de bruger websitet. Brugernes meninger og holdninger er de allervigtigste. Hvis de ikke synes om en side, går de videre til en anden side, som de synes virker bedre. </p>
                
                <p class="tekst-i-boks">Denne testmetode kan bruges både tideligt og sent i processen. (ibid.) Man kan altså sagtens teste en papir-prototype, før der er en rigtigt webside. Man kan selvfølgelig også teste et nylavet website eller en allerede eksisterende hjemmeside. </p>
                
                <p class="tekst-i-boks">For at få bedst muligt indblik i brugernes tanker, gør man brug af ”tænke højt”-metoden. Metoden går ud på, at man brugeren fortæller alle sine tanker. De skal dele alle deres begrundelser og overvejelser bag de valg og interaktioner, der forgår. </p>
                
                <p class="tekst-i-boks">En solid gennemførelse af en brugertest forløber over 4 uger. Nogle gange kan det også gøres hurtigere. Oftest vil der bruges 2-3 uger på forberedelse, 1-2 dage på udførelsen og 4-5 dage til efterbehandlingen. (ibid.) </p>
                
                <h4 class="h4boks">Forberedelse </h4>
                
                <p class="tekst-i-boks">Der en del forberedelse til en brugertest, hvilket også gør den meget ressourcekrævende. (ibid.) Først og fremmest skal man finde de rigtige testpersoner. Derefter skal man finde det sted og de lokaler hvor testen skal finde sted. Derudover skal der også forberedes spørgsmål og testopgaver. Der er altså meget der skal klares, før man starter en brugertest. </p>
                
                <p class="tekst-i-boks">En solid gennemførelse af en brugertest forløber over 4 uger. Nogle gange kan det også gøres hurtigere. Oftest vil der bruges 2-3 uger på forberedelse, 1-2 dage på udførelsen og 4-5 dage til efterbehandlingen. (ibid.) </p>
                
                 <h4 class="h4boks">Design af testopgaver </h4>
                
                <p class="tekst-i-boks">Når man skal udvælge testopgaver, er det bedre at udvælge få vigtige features end flere mindre vigtige. (ibid.) Hvis man f.eks. vælger 7 områder man ønsker at teste, så forsvinder de få vigtigste i mængden. Her er det vigtigt at man er helt klar på hvad websitets kernefunktion er. Når man har fundet de elementer eller dele af websitet som skal testet, skal man formulere dem som testopgaver. </p>
                
                <p class="teksttyk">Testopgaverne skal være:</p>
                
                <p class="tekst-i-boks">Mulige at løse. De skal kunne lade sig gøre på websitet.</p>
                <p class="tekst-i-boks">Relevante og realistiske. Test altid opgaverne, så man kan fornemme, om de virker kunstige eller utroværdige. Lad f.eks. være med at få testpersonerne til at være noget de ikke er.</p>
                <p class="tekst-i-boks">I en realistisk sekvens – ikke opdigtet. Hvis der er flere trin, så sørg for at de kommer i naturlig rækkefølge</p>
                <p class="tekst-i-boks">Beskrevet med et endeligt og forudsigeligt sæt af mulige løsninger. Der kan godet være flere løsninger til en opgave. Det kan være interessant at se, hvordan vejen til en løsning foregår for brugeren. Sørg dog for at have besluttet, hvad der er en løsning, og hvad der ikke er.</p>
                <p class="tekst-i-boks">Fordrende for handling – ikke mening. I brugertesten ønsker man at se brugeren interagere med websitet – ikke at hører deres mening om, hvordan det er lavet. Det kan man altid spørge om bagefter. </p>
                <p class="tekst-i-boks">Af en realistisk længde. Brugeren må ikke gå kolde eller kede sig, fordi det tager for lang tid. I en realistisk situation vil brugeren måske kun bruge websitet i 3 minutter. </p>
                <p class="tekst-i-boks">Beskrevet med skjult hjælp. Pas på med at hjælpe brugeren til at udføre opgaven, og brug ikke ord eller begreber i opgaven, som kan findes direkte på websitet. Det kan være selv små detaljer som ”søg på”, ”klik på” eller lignende. </p>
                
                
                <h4 class="h4boks">Opgaveskabelon</h4>
                
                <p class="tekst-i-boks">Opgaveskabelonen laves for at sikre at testen er gennemtænkt. Skabelonen kan også bruges til at kommunikere testens formål og indhold til andre i organisationen. (ibid.) I skabelonen står målet for testen, hypoteser man forventer at se, den tid en standartbruger ville bruge på at løse opgaven, selve opgaveteksten og andre vigtige noter. </p>
                
                <h4 class="h4boks">Roller</h4>
                
                <p class="tekst-i-boks">Når man udfører en brugertest, skal der være mindst to til at teste. (ibid.) Den ene skal være en testleder imens den anden skal observere. Det kan være svært for en person, både at skulle stille spørgsmål og observerer brugeren.</p>
                
                <p class="tekst-i-boks">Hvis undersøgelsen filmes, kan det være en god ide, at observatøren noterer tid ned. Så vil det senere hen være lettere at finde frem til relevante optagelser. Observatøren skal sidde lidt væk, for at forstyrre mindst muligt. </p>
                
                 <h4 class="h4boks">Praktiske forhold</h4>
                
                <p class="tekst-i-boks">Brugertesten kan foregå i professionelle testlokaler med spejlvægge og professionelle lyd- og videoforhold. (ibid.) Det er meget sjældent at man har alt dette til rådighed. Man kan sagtens udføre en god brugertest uden alt dette. Det vigtigste er, at man sidder i et lokale med ro til at brugeren kan have fuld fokus på websitet og testen. </p>
                
                <p class="tekst-i-boks">Det er vigtigt at man har en god dokumentation af testen. Man skal derfor bruge video, skærmoptagelse og lydoptagelse hvis det er muligt. (ibid.) Hellere for meget dokumentation end for lidt. </p>
                
                <h4 class="h4boks">Pilottest</h4>
                
                <p class="tekst-i-boks">Inden testen udføres er det en god ide at teste undersøgelsen. Her kan man få afprøvet de praktiske forhold, kørt opgaveskabelonen igennem og få afprøvet hele testens forløb. (ibid.) Man kan bruge en kollega eller en anden der minder om testpersonerne. </p>
                
                <h4 class="h4boks">Rekruttering</h4>
                
                <p class="tekst-i-boks">Når man skal udvælge testpersonerne, findes der igen en professionel løsning. Der er bureauer der kan screene og udvælge potentielle brugere. (ibid.) Dette er selvfølgelig ikke en nødvendighed for at kunne udføre testen. Det vigtigste er at man forsøger at finde testpersoner der reelt ville bruge websitet. Man kan udvælge dem med sin mavefornemmelse. Men det vil være mere optimalt at man kontakter personerne og finde ud af, om de passer ind til målgruppen. Her er det også vigtigt at fornemme om de er åbne og talende mennesker. </p>
                
                <h4 class="h4boks">Antal testdeltagere</h4>
                
                <p class="tekst-i-boks">Som udgangspunkt skal man blive ved med at teste, indtil der ikke kommer ny viden. (ibid.) Dog viser erfaringer at 5 testpersoner er tilstrækkeligt. Man skal derfor finde 7 personer, da det ikke er sikkert at de alle møder op. Hvis alle møder op, så tester man alle. Hvis det strækker sig over flere dage og man allerede har testet nok de to første dage, så kan man i nogle tilfælde nå at aflyse de sidste testpersoner. </p>
                
                <h4 class="h4boks">Udførelse</h4>
                
                <p class="tekst-i-boks">Testen må ikke overskride 1,5 time. Der er altså maks. 15 min. til velkomst og præsentation, maks. en time til at teste og maks. 15 min. til opsamling og afslutning. (ibid.)</p>
                
                <h4 class="h4boks">Velkomst</h4>
                
                <p class="tekst-i-boks">Det er vigtigt at man giver en god velkomst så testpersonen føler sig tryg og rolig. Man skal give hånden og takke for deltagelsen. </p>
                <p class="tekst-i-boks">For at få deltageren til at vænne sig til, at ”tænke højt” kan man lave en lille øvelse. (ibid.) Dette kaldes ”kuglepen-øvelsen”. Det går ud på at testpersonen skal skille en kuglepen ad, imens de skal forklare deres tanker og overvejelser. Man kan evt. stille spørgsmål undervejs, så testpersonen vænner sig til, at der generelt er en dialog igennem hele undersøgelsen. </p>
                
                <h4 class="h4boks">Testperioden</h4>
                
                <p class="tekst-i-boks">Under testen er det vigtigt at man observerer hvordan testdeltageren reagere på de situationer, der opstår. (ibid.) Søgen betyder f.eks. at det der ledes efter, ikke er blevet fundet endnu. Hvis deltageren tager genveje eller går tilbage, skal det også noteres. </p>
                <p class="tekst-i-boks">Man kan under testen have fokus på nogle kvantitative målinger. Det kan f.eks. være hvor mange fejl bliver der lavet, hvor mange klik bruger de og lignende ting der kan måles eller tælles. </p>
                <p class="tekst-i-boks">Testlederen kan undervej stille opfølgende spørgsmål hvis der er svar, der skal uddybes. Man skal undgå ja og nej spørgsmål og i stedet holde sig til mere åbne spørgsmål. Testlederen skal undervejs sørge for, testdeltageren tænker højt. Det er derudover vigtigt at man holder fokus på et emne ad gange.</p>
         
                
                <h4 class="h4boks">Afslutning</h4>
                
                <p class="tekst-i-boks">Når testen er ved at være færdig, kan man gå over til opsamlingen. (ibid.) Her kan man stille opfølgende spørgsmål, så man kan få deltagerens indtryk af indholdet og kvaliteten af websitet. I nogle tilfælde har deltageren også spørgsmål. Det er en god ide at spørge om man må kontakte deltageren, hvis det bliver nødvendigt. Til slut er det en god ide at give deltageren en belønning. Det kan være et gavekort, chokolade eller lignende. </p>
                
                <h4 class="h4boks">Dokumentation</h4>
                
                <p class="tekst-i-boks">Først og fremmest skal man vælge om video- og lydoptagelser skal indgå i dokumentationen. (ibid.) Det er nemlig meget mere krævende at håndtere end tekst. Det er dog en mere solid og stærk dokumentation. Hvis man beslutter sig for, at det skal indgå i dokumentationen, er det vigtigt at der stadig er beskrivelser af observationer osv. Videomaterialer og lignende er kun med til at underbygge sine observationer. </p>
                <p class="tekst-i-boks">Dokumentationen skal indeholde de 5 vigtigste fund eller problemstillinger. (ibid.) Derudover skal den indeholde en beskrivelse af metoden, testopgaverne og en introduktion af testdeltagerne. (ibid.) Til sidst kan man skrive anbefalinger til de problemer der er beskrevet. </p>
                <p class="tekst-i-boks">Brugertesten er i mine øjne en af de vigtigste testmetoder vi kan anvende. Når jeg designer en hjemmeside, kan jeg ofte have tendens til at gøre det ud fra hvad jeg synes giver bedst mening. Jeg har derfor lært, at det er vigtigt at teste tideligt, så jeg ikke ender ud med en hjemmeside, der fungerer for mig, men ikke for brugerne. Dette har jeg lært på den ”hårde” måde, hvor jeg stod med en high fidelity prototype som jeg havde brugt mange timer på at lave. Prototypen fungerede godt for mig, men ikke for brugeren. Denne situation kunne jeg have undgået, hvis jeg testede min papirprototype helt fra start. </p>
                
            </section>
            
            
            <h3 class="h3" id="kilder">Kilder</h3>
        
            <ul class="kildeliste">
                
                <li>
                    Gregersen, O., &amp; Wisler-Poulsen, I. (2017). Brugertest. I Usability (s. 96-115). København: Forlaget Grafisk Litteratur Aps.
                </li>
                <br>
                <li>
                   Gregersen, O., &amp; Wisler-Poulsen, I. (2017). Gangstertesten. I Usability (s. 42-49). København: Forlaget Grafisk Litteratur.
                </li>
                <br>
                <li>
                    Gregersen, O., &amp; Wisler-Poulsen, I. (2017). Hvad er usability. I Usability (s. 14-23). København: Forlaget Grafisk Litteratur Aps.
                </li>
                <br>
                <li>
                    Gregersen, O., &amp; Wisler-Poulsen, I. (2017). Spørgeskema. I Usability (s. 50-63). København: Forlaget Grafisk Litteratur Aps.
                </li>
                <br>
                <li>
                    Gregersen, O., &amp; Wisler-Poulsen, I. (2017). Undersøgelsesdesign. I Usability (s. 24-41). København: Forlaget Grafisk Litteratur Aps.
                </li>  
                
            </ul>
        
    </section>
    
        <?php include('includes/footer.php'); ?>
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
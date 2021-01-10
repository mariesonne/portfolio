<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - HTML</title>
    <link rel="stylesheet" href="https://use.typekit.net/wmt5acl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
    
<body>
    <header class="header">
        
        <?php include('includes/header.php'); ?>
        
    </header>
    
     <a name="top"></a>
    
    <h2 id="h2">HTML</h2>
    
    <section class="indholdoversigt">

            <p id="indholdpaasiden">Indhold på siden</p>

            <ul>
                <li>
                    <a href="#grundlæggende">Grundlæggende om HTML</a>
                </li>
                <li>
                    <a href="#editor">Editor</a>
                </li>
                <li>
                    <a href="#syntakst">Syntakst</a>
                </li>
                <li>
                <a href="#seo">SEO</a>
                </li>
                <li>
                    <a href="#skik">Kodeskik</a>
                </li>
                <li>
                    <a href="#adressering">Relativ og absolut adressering</a>
                </li>
                <li>
                    <a href="#video">Video- og lydintegration </a>
                </li>
                <li>
                    <a href="#pers">Personlig reflektion </a>
                </li>
                <li>
                    <a href="#kilder">Kilder</a>
                </li>
                
                
            </ul>

        </section>
    
    <section class="indholdcontainer">
        
         <section class="boks">
        
                <h3 class="h3" id="grundlæggende">Grundlæggende</h3>    

                <p class="tekst-i-boks">HTML står for HyperText Markup Language. HTML-koden bruges til at strukturer en websides indhold. (MDN, 2020) HTML er det vigtigste når vi koder en webside. Uden HTML ville vi ikke have nogen struktur eller noget indhold på websiden. (Willamson, HTML essential training, 2017) Hvis vi udelukkende brugte HTML ville vi stadig have mange muligheder for at opbygge en webside. Siden ville måske ikke se sådan ud som vi ønsker og der ville være funktioner vi måske manglede. Men der ville stadig være mulighed for at strukturer indholdet, linke til andre sider, indsætte billeder osv.</p>
             
                <p class="tekst-i-boks">Før vi overhovedet vidste hvad CSS og JavaScript var lavede vi en <a class="link-i-boks" href="websider/hundesiden/index.html" target="_blank">side om hunde.</a> Siden er eksempel på, hvordan man kan formidle et budskab og opbygge en hjemmeside udelukkende med HTML-kode. </p>
             
             
                <p class="tekst-i-boks">Før vi kan starte med at kode, skal vi have fundet ud af, hvor vi vil skrive koden.</p>
             
            </section>
        
            <h3 class="h3" id="editor">Editor</h3>
        
            <p class="tekst">Et html dokument er egentligt bare en helt almindelig tekstfil. (Willamson, 2017) Så man ville kunne bruge f.eks. Notepad til at kode sin HTML-fil. Men det ville være et kæmpe arbejde at skulle skrive det i en helt almindelig tekst-editor. En kode editor har mange egenskaber, der gør lettere at kode. (ibid.) I en editor har man for eksempel linjenumre, der er genveje som gør at man ikke skal skrive hele koden selv og den kan endda fortælle når der er lavet en fejl. Der er forskel på de forskellige editorer. Det der adskiller de forskellige editorer, er for det meste småting – men det er småting, som har stor betydning når man sidder koder. (ibid.) Derfor skal man vælge den editor, man synes der passer bedst til ens personlige præferencer.   </p>
           
            <p class="tekst">Jeg bruger kode-editoren Brackets. Det var den første editor jeg blev introduceret til. Jeg synes Brackets er meget simpel og nem at bruge. De egenskaber Brackets har, passer godt til mig når jeg sidder og koder – og det er det der vigtigst. </p>
        
            <h3 class="h3" id="syntakst">Syntakst</h3>
            
            <p class="tekst">HTML er et markup-sprog. (ibid.) Det betyder at vi HTML bruger tags til at markere indholdet og dermed forklare hvad det er og hvordan det relatere til det andet indhold. </p>
        
            <h4>Start og slut tag</h4>
        
            <p class="tekst">De fleste tags har både et start-tag og et slut-tag. Det kan f.eks. være hvis vi vil indsætte en overskrift. Her bruger vi &#60;h1	&#62;. Så starter vi med at indsætte start-tagget som er &#60;h1&#62;. Men det er også vigtigt at markere hvor overskriften slutter. Så når overskriften er slut, indsætter vi et slut-tag. Sluttagget ligner starttagget. Men her indsætter man en skråstreg, så den kommer til at se sådan ud: &#60;/h1&#62;. </p>
        
            <p class="tekst">Eksempel:</p>
            
            <p class="teksttyk">&#60;h1&#62;Sådan bruger du HTML-tags&#60;/h1&#62;</p>
            
        
            <p class="tekst">Så der er et start-tag og et slut-tag og så er der selvindholdet i mellem. Når man ser på det hele samlet, kalder man det et html-element. </p>
        
            <h4>Attributter</h4>
        
            <p class="tekst">I et tag, kan man også indsætte attributter. Der findes mange forskellige attributter. Til vores eksempel med overskriften er der ikke så mange attributter, da det er et h1-tag vi bruger. Men der er nogle attributter man kan bruge på alle tags. Vi kan f.eks. give vores overskrift en klasse. </p>
        
            <p class="tekst">Eksempel:</p>
        
            <p class="teksttyk">&#60;h1 class=”overskrift”&#62; Sådan bruger du HTML-tags&#60;/h1&#62;</p>
        
            <p class="tekst">Nu har vi tilføjet en attribut. Class er navnet på den attribut vi har anvendt og ”overskrift” er værdien. Værdien er altid markeret i anførselstegn. </p>
        
            <img src="billeder/html%20opbygningubg.png" width="100%">
        
            <h4>HTML-dokumentet</h4>
        
            <img id="html" src="billeder/html.png" width="100%">
        
            <p class="tekst">Dette er et eksempel på et HTML dokument. Først og fremmest fortæller man hvilken dokumenttype det er, så browseren ved hvordan dokumentet skal læses. I html start-tagget tilføjer vi en attribut der beskriver hvilket sprog teksten på siden er skrevet i.</p>
        
        
            <p class="tekst">Derefter kommer en head element. Her står alt metadata, titel, links til stylesheets osv. Det der står i head er ikke noget der kommer frem på siden, men det er meget vigtigt at have med. I body’en står alt indholdet. Det er her alt vi kan se på siden står. Og sådan opbygger man typisk en HTML-fil.  </p>
        
            <section class="boks">
                
                <h3 class="h3" id="tags">Tags</h3> 
                
                <p class="tekst-i-boks">Der er mange forskellige tags vi kan bruge i vores HTML-fil, men her er nogle af de mest brugte:</p>
                
                <h4>Overskrifter&#60;h1&#62;</h4>
                
                    <p class="tekst-i-boks"> &#60;h1&#62; &#60;h2&#62; &#60;h3&#62; osv. er heading-tags, altså overskrifter. h1 er den vigtigste overskrift, h2 er den næst vigtigste osv. h1 må kun bruges en gang i en html-fil, de andre tags på gerne bruges flere gange. </p>
                
                <h4>Paragraph &#60;p&#62;</h4>
        
                    <p class="tekst-i-boks"> &#60;p&#62; står for paragraph. Det er et tekstafsnit, og det er her man skriver alt ”brødteksten”.</p>
                
                <h4>Linjeskift &#60;br&#62;</h4>    
                
                    <p class="tekst-i-boks"> &#60;br&#62; kan bruges til at lave linjeskift. </p>
                
                <h4>Anchortag &#60;a&#62;</h4>
                
                    <p class="tekst-i-boks">&#60;a&#62; tagget bruges til at linke til f.eks. andre html-filer. I &#60;a&#62; tagget bruger vi ofte attributten href, som angiver linkets destination. Altså hvor vi skal lande, når vi klikker på linket. Det der er imellem start-tagget og slut-tagget bliver klikbart.  </p>
                
                <h4>Lister &#60;ol&#62;, &#60;ul&#62;, &#60;li&#62;</h4>
                    
                    <p class="tekst-i-boks">Når vi skal indsætte en liste, har vi to valgmuligheder. En ordered list: &#60;ol&#62; (nummereret) eller unordered list &#60;ul&#62; (ikke nummereret).  </p>
                
                    <p class="tekst-i-boks">Inde i vores liste, tilføjer vi list items: &#60;li&#62; Vi skal altså sætte hvert punkt i listen ind i en &#60;li&#62;-tag </p>
                
                
                <h4>Billeder &#60;img&#62;</h4>
             
                    <p class="tekst-i-boks"> Til at indsætte billeder bruger vi &#60;img&#62; tagget. Dette tag er en af de få tags som man ikke afslutter med et slut-tag. </p>
                
            </section>    
        
            <h3 class="h3" id="seo">SEO</h3> 
            
            <p class="tekst">SEO er en forkortelse for Search Engine Optimization. SEO er altså søgemaskineoptimering. Man skal altså optimere sin hjemmeside ud fra de faktorer som søgemaskinen kigger på, når de skal rangere hjemmesider. (Skjoldby, u.d.) Der flere ting man skal have fokus på. En af dem, er at sørge for at man altid bruger semantiske tags, hvis dette er muligt.</p>
        
            <h4>Semantiske tags</h4>
        
            <p class="tekst">Det er vigtigt at bruge semantiske tags. Semantiske tags fortæller noget om indholdet. (Inddeling i HTML, u.d.) Tags som &#60;div&#62; og &#60;span&#62; fortæller intet om indholdet og de er derfor ikke semantiske. Tags som &#60;header&#62;, &#60;footer&#62;, &#60;nav&#62; og &#60;section&#62; fortæller noget om indholdet. </p>
        
            <p class="tekst">Det er altid bedre at benytte tags som er semantiske af tre grunde:</p>
        
             <p id="tal">1</p>

                    <p class="tekst">Hjemmesiden bliver lettere at benytte for blinde, da skærm-oplæsere vil have lettere ved at finde strukturen for hjemmesiden</p>

            <p id="tal">2</p>

                    <p class="tekst">Hjemmesidens søgemaskineoptimering vil blive forbedret, da søgemaskiner vil have lettere ved at identificere indholdet på din hjemmeside og derved vil din side rangere højere i søgeresultater</p>

            <p id="tal">3</p>

                    <p class="tekst">Koden vil blive bedre struktureret og lettere at forstå for en selv og andre programmører (ibid.)</p>
        
        
            <h5>Header</h5>
        
                <p class="tekst">Tagget &#60;header&#62; bliver brugt til det indhold som omhandler den øverste del af siden, f.eks. er det ofte her vi indsætter en navigation og logo.</p>
        
            <h5>Footer</h5>
        
                <p class="tekst">&#60;footer&#62; bliver brugt til det der står i bunden af en side. Det kan f.eks. være kontaktoplysninger.</p>
        
            <h5>Section</h5>    
        
                <p class="tekst">Tagget &#60;section&#62; bliver brugt i sammenhæng med områder på siden som hører sammen i én, som f.eks. kapitler, artikler og indlæg. (ibid.)</p>
        
            <section class="boks">
        
                <h3 class="h3" id="skik">Kodeskik</h3>    

                <p class="tekst-i-boks">Når vi koder er der nogle uskrevne regler, som der er en god ide at overholde. Det gør det nemmere at læse og forstå koden. Dette kan være rart når andre skal læse koden, men det er også vigtigt at man selv har et overblik. Hvis man ikke selv har overblik, så laver man oftere fejl. En vigtig regel er at gøre brug af linjeskift og indrykninger. Det vil være meget svært at skulle læse en kode der stod ud i en lang smøre. Det kan ikke ses på siden, det udelukkende noget der skaber overblik i koden. Derudover kan man sætte kommentarer. </p>
             
                <p class="tekst-i-boks">Sådan indsættes kommentarer:</p>
             
                <p class="teksttyk">&#60;!--her skal kommentaren stå--&#62;</p>
                
                <p class="tekst-i-boks">Vi kan bruge kommentarer til at gøre det tydeligt hvor markere hvor et element starter og hvor det element slutter. På denne måde kan man hurtigt få overblik over HTML-filen. Når vi skal dele vores kode med andre, er det også en god måde at forklarer hvad de forskellige elementer bruges til eller generelt bare dele vores tanker. </p>
             
            </section>
            
            <h3 class="h3" id="adressering">Relativ og absolut adressering</h3> 
        
            <p class="tekst">Når vi skal indsætte billeder eller linke til andre filer, så er der flere måder at angive placeringen af filerne. (bilag niels html) Der er relativ og absolut adressering. </p>
        
            <p class="tekst">Absolut adressering indeholder hele webadressen på den side man linker til. </p>
        
            <p id="tal">Eksempel:</p>
            
            <p class="tekst">http://10763.web.eadania.dk /portfolio/billeder/billede.png</p>
        
            
            <p class="tekst">Ved relativ adressering skiver man kun stien hen til den side man linker til fra det sted man står. </p>
        
            <p id="tal">Eksempel 1: </p>
          
            <p class="tekst">billeder/billede.png</p>
        
            <p class="tekst">Ved dette eksempel er man placeret i ”roden”, så det er derfor en simpel sti hen til billedet. </p>
          
            <p id="tal">Eksempel 2:</p>
            
            <p class="tekst">../billeder/billede.png</p>
        
            <p class="tekst">I dette eksempel er man placeret i en undermappe. Det kan eksempel være en mappe man har til alle side undersider. Hvis man skal hen til mappen med billeder, bliver man nødt til at gå et skridt tilbage. Det gør man ved to punktummer og en skråstreg. </p>
        
            
            <section class="boks">
                <h3 class="h3" id="video">Video- og lydintegration </h3>  

                <h4 class="h4boks">Video</h4>

                <img src="billeder/video.png" width="80%">

                <p class="tekst-i-boks">Når vi skal indsætte en video på en hjemmeside, så skal vi gøre brug af video-tagget. For at undgå at filmen flimrer, så er det en god ide bruge attributter der angiver højden og bredden. Derudover kan man også anvende en attribut, der hedder controls. Controls tilføjer kontrolknapper som afspil knappen, pauseknappen og en knap der justerer lydstyrken. Source-tagget bruges til at fortælle browseren hvilken video der skal afspilles. Her er både en mp4-fil og en ogg-fil. Browseren vælger selv hvilken af filerne den afspiller.</p>

                <p class="tekst-i-boks">Så nemt er det at tilføje en video på sin side. Når man skal tilføje lydfiler, fungerer det på næsten samme måde.</p>

                <h4 class="h4boks">Lyd</h4>  

                <img src="billeder/lyd.png" width="80%">

                <p class="tekst-i-boks">Her er video-tagget skiftet ud med audio-tagget. Vi har igen controls-attributten, så brugerne har mulighed for at afspille og sætte lydklippet på pause igen, eller justerer lydstyrken. Vi gør igen brug af source til at fortælle browseren hvilken lydfil der skal afspilles. Her indsættes igen både en ogg-fil og en mp3-fil, så browseren har begge valgmuligheder. </p>
                
            </section>
            
            <h3 class="h3" id="pers">Personlig reflektion</h3>  
            
        
            <p class="tekst">At skulle kode, var noget af det jeg var mest nervøs for, da jeg skulle starte på denne uddannelse. Jeg vidste ingenting om at kode. Jeg har nu lært at kode hjemmesider. Dette har jeg hovedsageligt lært i min K3-tid. Det er selvfølgelig på baggrund af klasseundervisningen hvor jeg fik redskaberne til kunne kode. Men jeg fandt hurtigt ud af, at jeg blev nødt til at arbejde med det igen og igen, for at til sidste kunne finde ud af det. </p>
        
           <h3 class="h3" id="kilder">Kilder</h3>
        
            <ul class="kildeliste">
                <li>   
                    <a class="henvisning" href="pdf/bilag1.3.pdf" target="_blank">Bilag 1.3</a>
                </li>
                <br>
                <li>
                    Inddeling i HTML. (u.d.). Hentet December 2020 fra SimpleCode: <a class="henvisning" href="https://simplecode.dk/html/inddeling/" target="_blank">https://simplecode.dk/html/inddeling/</a> 
                </li>
                <br>
                <li>
                    MDN. (13. november 2020). HTML basics. Hentet fra Mozilla: <a class="henvisning" href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics" target="_blank">https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics</a>
                </li>
                <br>
                <li>
                    Skjoldby, L. (u.d.). HVAD ER SEO: EN GRUNDIG GUIDE TIL SØGEMASKINEOPTIMERING. Hentet december 2020 fra Skjoldbyogco: <a class="henvisning" href="https://www.skjoldby.com/viden/hvad-er-seo/" target="_blank" >https://www.skjoldby.com/viden/hvad-er-seo/</a>
                </li>
                <br>
                <li>
                    Willamson, J. (30. marts 2017). HTML essential training. Hentet fra LinkedIn Learning: <a class="henvisning" href="https://www.linkedin.com/learning/html-essential-training/the-importance-of-html?u=37312532" target="_blank">https://www.linkedin.com/learning/html-essential-training/the-importance-of-html?u=37312532</a>
                </li>
                <br>
                <li>
                    Willamson, J. (30. marts 2017). HTML Essential Training. Hentet fra <a class="henvisning" href="https://www.linkedin.com/learning/html-essential-training/quiz/urn:li:learningApiAssessment:595549?u=37312532" target="_blank">https://www.linkedin.com/learning/html-essential-training/quiz/urn:li:learningApiAssessment:595549?u=37312532</a>
                </li>
            </ul>
        
             
            <a class="henvisning" href="#top">Tilbage til toppen.</a>
        
    </section>
    
    <?php include('includes/footer.php'); ?> 
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
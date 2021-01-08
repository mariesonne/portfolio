<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - CSS</title>
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
    
    <h2 id="h2">CSS</h2>
    
    <section class="indholdoversigt">

            <p id="indholdpaasiden">Indhold på siden</p>

            <ul>
                <li>
                    <a href="#grundlæggende">Grundlæggende om CSS</a>
                </li>
                <li>
                    <a href="#syntakst">CSS-syntakst</a>
                </li>
                <li>
                <a href="#hvor">Hvor skriver vi så vores CSS?</a>
                </li>
                <li>
                    <a href="#kaskade">Kaskaderegler</a>
                </li>
                <li>
                    <a href="#box">Box-model</a>
                </li>
                <li>
                    <a href="#positionering">Positionering </a>
                </li>
                <li>
                    <a href="#grid">CSS-grid </a>
                </li>
                <li>
                    <a href="#pers">Personlig reflektion</a>
                </li>
                <li>
                    <a href="#kilder">Kilder</a>
                </li>
                
                
            </ul>

        </section>
    
    <section class="indholdcontainer">
        
         <section class="boks">
        
                <h3 class="h3" id="grundlæggende">Grundlæggende om CSS</h3>    

                <p class="tekst-i-boks">CSS står for Cascading Style Sheets. Vi burger CSS vores hjemmeside. (bilag 1.4) De vil altså sige, at css er et sprog hvor vi beskriver hvordan vores HTML-elementer skal præsenteres. Med CSS kan vi skelne imellem udseende og funktion. </p>
             
                <p class="tekst-i-boks">Et CSS-dokument kan også kaldes et StyleSheet. Et StyleSheet er en samling af ”styles”. ”Styles” angives som ”rules”. Rules kan navngives og refereres til HTML. (bilag 1.4) </p>
             
            </section>
        
            <h3 class="h3" id="syntakst">CSS-syntakst</h3>
            
            <p class="tekst">Når vi skal skrive CSS, skal vi først og fremmest vælge hvad der skal styles. Det er vores selector. Hvis man vil style alle tags af en bestemt type, så skal man bare skrive det tag, uden noget foran. Det kan f.eks. være p, h1, body, html, a osv. </p>
        
            <p class="tekst">Hvis man vil style flere udvalgte elementer, kan man vælge en class som selector.  Det kræver at man har tilføjet en class-attribut i sin HTML-kode. (bilag 1.4) Når man skal style en class, skal man skrive et punktum og derefter skrive sin attribute-value, altså det man har valgt at kalde sin class. Det kan f.eks. være .class, .navbar osv. </p>
        
            <p class="tekst">Hvis man vil vælge et helt specifikt element, skal man gøre brug af id som selector. Her kræver det selvfølgelig også, at man har gjort brug af en id-attribut i sin HTML-kode. Når man skal style et specifikt element, skal man skrive et hashtag og så skrive det man har kaldt sit id. Det kan f.eks. være #id, #grid, #billede2 osv. </p>
        
            <p class="tekst">Efter vi har skrevet vores selector, starter vi en declaration. (ibid.) Det gør vi ved at lave en krøllet parentes. Vi slutter en declaration på samme måde. </p>
        
            <p class="tekst">Vores declaration består af properties og values, altså egenskaber og værdier. (ibid.) </p>
        
            <p class="tekst">Der findes mange forskellige egenskaber. Det kan f.eks. være background-color. Man separeregenskaber og værdier med et kolon. Værdien kan f.eks. være green eller blue. Man skal altid afslutte sin egenskab med et semikolon.   </p>
        
            <p class="tekst">Her er det forklaret på en mere simpel måde:</p>
        
            <img src="billeder/csssyntakstubg.png" width="90%">
        
            
        
            <section class="boks">
                
                <h3 class="h3" id="hvor">Hvor skriver vi så vores CSS?</h3> 
                
                <p class="tekst-i-boks">Man skriver ofte sin CSS i et eksternt dokument. (bilag 1.4) Man linker altså til det eksterne CSS-dokument i sin head i sin HTML-kode. Man kan derved linke det sammen med flere forskellige HTML-filer. På den måde får man en ensartethed på alle sider. </p>
                
                <img src="billeder/external.png" id="external">
                
                <p class="tekst-i-boks">Man kan også placere sine styles i HTML-dokumentet. Så man har ikke et eksternt dokument. Man skriver det i head-elementet, hvor man bruger style-tagget. Det kræver mere arbejde, da man skal indsætte css i alle dokumenter. (ibid.) </p>
                
                <img src="billeder/internal.png" width="80%">
                
                <p class="tekst-i-boks">Man kan også vælge at skrive det in-line. Her placerer man styles direkte i HTML-elementet. Her bruger man en style-attribut. Hvis man bruger denne måde, så forsvinder ideen med at adskille struktur og layout. Dette er ikke noget man gør mere.  </p>
                
                <img src="billeder/inline.png" width="80%">
                
            </section>    
        
            <h3 class="h3" id="kaskade">Kaskaderegler</h3> 
            
            <p class="tekst">Vi kommer nogle gange ud for, at 2 eller flere af vores styles eller rules har de samme selectors. (ibid.) Her har vi nogle regler om hvilken style der skal gælde. Som udgangspunkt vil man gå efter source order. Det vil altså sige, at de seneste declarations overskriver de tidligere. </p>
        
            <p class="tekst"> Dog er der også en regel om specificity. Det vil altså sige, at det der er mere specifik overskriver det mere generelle. Så en class selector vil overskrive en element selector. </p>
        
            <p class="tekst">Der er kun en ting der kan overskrive kaskadereglerne. Det er ved at indsætte ”!important” i den declaration, man ønsker der skal gælde. Dette skal man helst undgå!</p>
        
             
            <section class="boks">
        
                <h3 class="h3" id="box">Box-model</h3>    

                <p class="tekst-i-boks">Et HTML-element kan ses som en boks. For at kunne kontrollere hvordan boksene placerer sig i forhold til hinanden, kan man benytte boksmodellen. (bilag 1.4) Modellen består af:</p>
             
                <p class="tekst-i-boks"><span class="teksttyk">CONTENT:</span> Det er selve indholdet i html-elementet</p>
                <p class="tekst-i-boks"><span class="teksttyk">PADDING:</span> Den rydder området rundt omkring indholdet.</p>
                <p class="tekst-i-boks"><span class="teksttyk">BORDER:</span>Den laver en ramme rundt om padding og content. Den kan være usynlig eller farvet.</p>
                <p class="tekst-i-boks"><span class="teksttyk">MARGIN:</span>Den laver afstand mellem border og tilstødende elementer</p>
             
                <img src="billeder/boxmodel.png" id="box-model">
             
            </section>
            
            <h3 class="h3" id="positionering">Positionering</h3> 
        
            <p class="tekst">Der er flere måder at positionere elementerne.</p>
        
            <h4>Position: static;</h4>
        
            <p class="tekst"> HTML-elementer er som standart placeret med denne måde. (CSS Layout - The position Property, u.d.) Den vil altså blive placeret, der hvor man har lagt den i firhold til de andre HTML-elementer. Elementet påvirkes ikke af top, buttom, left og right properties. </p>
        
            <h4>Position: relative;</h4>
            
            <p class="tekst">Et relativt element er placeret i forhold til sin normale position. Det vil altså sige at hvis man flytter den til venstre, så flytter man den mod venstre fra dens normale position. (ibid.) Det Andet indhold vil ikke blive justeret, så det passer ind i et hul, som elementet efterlader. (ibid.)</p>
        
            <h4>Position: fixed;</h4>
            
            <p class="tekst">Et element med denne placering er placeret i forhold til selve browservinduet. Elementet efterlader ikke et hul på den side, hvor det normalt ville have været placeret. Den forbliver altid på det samme sted, selvom der scrolles. Ligesom et lille klistremærke ovenpå indholdet. (ibid.)</p>
        
            <h4>Position: absolute;</h4>
          
            <p class="tekst">Et absolute element positionerer sig relativt til det andet element det ligger indeni. Et element der har postition absolute, positionere sig kun relativt til andre elementer som den ligger indeni hvis de har en position. Det vil altså sige, at den ikke fungere med position static, fordi det er standarten – Altså det samme som ikke have angivet en position.</p>
        
            <h4>Position: sticky;</h4>
        
            <p class="tekst"> Et element med denne placering er placeret ud fra brugerens rulleposition. (ibid.) Et sticky element skifter mellem relativ og fast afhængigt af rullepositionen. Den placeres relativt, indtil en given forskudt position er opfyldt i visningsporten - så "klæber" den på plads. Det kan evt. bruges til en navigationsbar.</p>
          
            
            <section class="boks">
                <h3 class="h3" id="grid">CSS-grid </h3>  

                <p class="tekst-i-boks">Ved at gøre brug a CSS grid slipper man for meget bøvl. (bilag 1.5) Et eksempel er, at man før grid skulle selv beregne bredder på elementer og få det til at passe. Grid beregner selv bredderne ud. Det er altså en let og smart måde at placere sine HTML-elementer.</p>

                <p class="tekst-i-boks">Der er 2 måder at bruge CSS grid. Jeg vil forklare den fremgangsmåde, som jeg synes fungere bedst, den giver bedst mening for mig og den er lettere at vedligeholde. (ibid.)</p>

               

                <p class="tekst-i-boks">Vi skal først og fremmest have en grid container. Hvor vi definerer det som grid.</p>
                
                <img src="billeder/step1.png" width="80%">
                
                <p class="tekst-i-boks">Herefter angiver vi grid- template-columns og eventuelt også grid-template-rows. Vi angiver det i fr. Enheden “fr” betyder fractions, altså dele. </p>
                
                <img src="billeder/step2.png" width="80%">
                
                <p class="tekst-i-boks">Vi giver derefter de elementer vi ønsker at placere et grid-area. Med gridarea kan vi navngive elementerne. Man bør navngive dem, så det giver mening. Altså et navn der gør, at man ved lige præcis hvilket element man placerer. Det kan f.eks. være overskrift, footer, foto osv. </p>
                
                <img src="billeder/step3.png" id="gridstep">
                
                <p class="tekst-i-boks">I grid-containeren tilføjer vi grid-template-areas. Her kan vi angive de areas der skal placeres. Vi bruger her de navne, som vi lige har givet til hvert element. Hvis vi ønsker at efterlade et tomt ”felt”, skal vi bare skrive et punktum i stedet for et af de areas vi har navngivet. </p>
                
                <img src="billeder/step4.png" id="gridstep">
                
                <p class="tekst-i-boks">og her er resultatet. </p>
                
                <img src="billeder/resultat.png" id="gridstep">
     
                
            </section>
            
            <h3 class="h3" id="pers">Personlig reflektion</h3>  
            
        
            <p class="tekst">Jeg har det lidt på samme måde med CSS, som jeg har det med HTML. Jeg lærer det kun ved at bruge det. Når jeg støder på nogle problemer eller noget som jeg ikke ved hvordan jeg skal gennemføre, så er Google og YouTube altid en god hjælp. Dog skal man være opmærksom på datoen, når man får hjælp fra nettet. Man skal være sikker på, at de også bruger CSS 3. </p>
        
           <h3 class="h3" id="kilder">Kilder</h3>
        
            <ul class="kildeliste">
                <li>   
                    <a class="henvisning" href="pdf/bilag1.4.pdf" target="_blank">Bilag 1.4</a>
                </li>
                <br>
                <li>   
                    <a class="henvisning" href="pdf/bilag1.5.pdf" target="_blank">Bilag 1.5</a>
                </li>
                <br>
                <li>
                    CSS Layout - The position Property. (u.d.). Hentet december 2020 fra W3schools: <a class="henvisning" href="https://www.w3schools.com/css/css_positioning.asp" target="_blank">https://www.w3schools.com/css/css_positioning.asp</a> 
                </li>
            </ul>
        
             
            
        
    </section>
    
    <?php include('includes/footer.php'); ?> 
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
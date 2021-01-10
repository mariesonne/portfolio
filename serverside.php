<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - Server</title>
    <link rel="stylesheet" href="https://use.typekit.net/wmt5acl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="footer.css">
    
</head>
    
<body>
    <header class="header">
        
        <?php include('includes/header.php'); ?>
        
    </header>
    
     <a name="top"></a>
    
    <h2 id="h2">Server</h2>
    
     <section class="indholdoversigt">

            <p id="indholdpaasiden">Indhold på siden</p>

            <ul>
                <li>
                    <a href="#serverbegrebet">Serverbegrebet</a>
                </li>
                <li>
                    <a href="#klient">Klient</a>
                </li>
                <li>
                    <a href="#serverside">Serverside-scripting</a>
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
        
        
        
            <h3 class="h3" id="serverbegrebet">Serverbegrebet</h3>    

            <p class="tekst"> Når vi snakkere om servere så er det både maskinen og det programmer vi arbejder i (Bilag 1.1) Så altså både hardware og software. Når vi omtaler maskinen, er det ofte bare som ”server”, imens programmer typisk omtales som deres funktion+server. Det kan f.eks. være en printserver. </p>
                
            <p class="tekst">Der findes forskellige servere, men er her nogle af det mest væsentlige:</p>
            
            <h4>Print-server</h4>
            <p class="tekst">Når vi trykker print, så sender vi det ud til en printserver. Printserveren modtager beskeden om hvad der skal printes og sender det så videre til printeren.</p>
                
            <h4>Web-server</h4>
            <p class="tekst">Web-serveren leder efter html-filen og sende den over til browseren. Hvis vi bruger serverside-scripting, så er det også her siden færdiggøres. </p>
            
            <h4>FTP-server</h4>
            <p class="tekst">FTP-serveren udveksler filerne som skal anvendes på f.eks. webserveren. Så vi bruger altså FTP-serveren når vi skal lægge vores nye websider ud på nettet. Derudover kan den også hente filer ned fra nettet. </p>
            
            <h4>Mail-server</h4>
            <p class="tekst">Mail-serveren kan ses som et posthus. Vi opretter os som bruger og så kan vi sende mails via denne server. Mail-serveren kan også modtage det post der kommer til os. </p>
            
            <h4>Database-server</h4>
            <p class="tekst">Database-serveren modtager og sender data til web-serveren. Database-serveren holder også styr på alt vores data.</p>

        
            <section class="boks">
                
                <h3 class="h3" id="klient">Klient</h3>

                <p class="tekst-i-boks">Vi tilgår servere med en klient. En klient er en software som kobler sig til serveren. Hver server har en eller flere klienter. F.eks så er Outlook en klient til mail-serveren. Outlook kommunikerer altså med mail-serveren hver gang vi sender en mail eller hver gang vi modtagere en mail. </p>


                <p class="tekst-i-boks">Når vi skal lægge nye websider ud på internettet, så bruger FTP-serveren. Jeg bruger Mac,så derfor er min FTP-klien FileZilla. FileZilla kommunikere med FTP-serveren hver gang jeg lægger nye filer ind. </p>

                <p class="tekst-i-boks">Lige nu er denne hjemmeside åben i en browser. Det kan være safari, Chrome eller noget helt tredje. Browseren er klienten til web-serveren. Når vi går ind på en hjemmeside, så sender webserveren HTML, CSS, JavaScript, billeder og andre filer ned til browseren, altså klienten.  </p>
        
            </section>
        
             <h3 class="h3" id="serverside">Serverside-scripting</h3>
        
        
            <p class="tekst">Serverside-scripting er hvor hjemmesiden bliver ”bagt færdig” på web-serveren inden den sendes ned til browseren. Dette kan vi f.eks. brug PHP til. PHP er det mest udbredte sprog til serverside-scripting. Med PHP kan vi f.eks. indsætte aktuel information om tidspunkt.  Det vi bruger den til indtil videre, er at indsætte små bider af kode. Dette er smart, hvis vi har kode, der går igen på alle undersider. Vi sparer derfor tid, ved at bruge PHP. (bilag 1.2) </p>
            
            <p class="tekst">Når vi ønsker at indsætte den samme bid kode på flere sider, skal vi bruge include. I koden kommer det til at se sådan her ud. </p>
        
            <img id="include" src="billeder/include.png" width="100%">
        
            <p class="tekst">På denne måde embedder vi php i en helt almindelig HTML-kode. Det er vigtigt at vi omdøber vores HTML-filer fra navn.html til navn.php, ellers virker det ikke. </p>
        
            <h3 class="h3" id="pers">Personlig reflektion</h3>
        
            <p class="tekst">Jeg vidste intet om servere før jeg startede på uddannelsen. I undervisningen lavede vi en form for Mind Map. Jeg meldte mig frivilligt som ”skribent”. På denne måde fik jeg lært de forskellige servere bedre at kende, da jeg før dette synes det var lidt forvirrende.</p> 

            <p class="tekst">Serverside-scripting fik jeg ret godt styr på den dag, vi havde om det i undervisningen. Dog kom jeg hurtigt fra det igen, og jeg fik det derfor ikke brugt. Da jeg skulle starte op på dette projekt, følte jeg, at jeg stod helt fra 0 i forhold til at bruge PHP, fordi jeg ikke havde fået det brugt siden undervisningen og dermed havde jeg glemt hvordan vi skulle bruge det. Jeg så en YouTubevideo og den fik mig hurtigt tilbage på sporet. Jeg vil fremover huske at bruge PHP oftere, så jeg ikke glemmer det igen. </p>
        
            <h3 class="h3" id="kilder">Kilder</h3>
        
            <ul class="kildeliste">
                <li>   
                 <a class="henvisning" href="pdf/bilag1.1.pdf" target="_blank">Bilag 1.1</a>
                </li> 
                <li>
                <a class="henvisning" href="pdf/bilag1.2.pdf" target="_blank">Bilag 1.2</a>
                </li> 
            </ul>
                
           
                
            <a class="henvisning" href="#top">Tilbage til toppen.</a>
        
    </section>
    
        <?php include('includes/footer.php'); ?>
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
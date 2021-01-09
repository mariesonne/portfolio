<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - Frameworks</title>
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
    
    <h2 id="h2">Frameworks</h2>
    
    <section class="indholdoversigt">

            <p id="indholdpaasiden">Indhold på siden</p>

            <ul>
                <li>
                    <a href="#hvad">Hvad er frameworks?</a>
                </li>
                <li>
                    <a href="#boot">Bootstrap</a>
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
        
                <h3 class="h3" id="hvad">Hvad er Frameworks?</h3>    

                <p class="tekst-i-boks">Når man bygger et hus, kommer de fleste dele færdiglavet. Det vil sige at man ikke selv skal til at lave de forskellige dele, men blot tilpasse dem. På samme måde kan vi hente færdiglavet kodeelementer ned til vores webside, som kan anvendes til at opbygge layout og funktionalitet op en struktureret og effektiv måde. (Bilag 1.7) På den måde skal man ikke starte forfra hver gang vi skal kode en ny webside. Der er mange forskellige udbydere af frameworks, f.eks. Bootstrap. </p>
             
                <p class="tekst-i-boks">Et framework indeholder typisk HTML templates. Man sætter en del af en html-kode ind. Det kan f.eks. være en nav-bar. Så kan vi selv tilpasse koden, så den indeholder vores egne emner og overskrifter. CSS’en er typisk lavet så den passer til alt. Det vil altså sige det er den samme CSS-fil man bruger til f.eks. en nav-bar og en billedkarrusel. Det er altså en meget stor CSS-fil. JavaScript fungerer på samme måde som CSS’en.  </p>
             
                <p class="tekst-i-boks"> Man kan enten have filerne hostet i skyen eller downloade filerne og integrere dem på ens webside, altså så man har filerne lokalt. (ibid.) På den måde har man selv styr på de forskellige versioner. Det er ikke nødvendigt at have internetforbindelse for at kunne teste websiden. Ved den hostet version linker man til filerne, som ligger på en server på nettet. Der er nogle forskellige ulemper når man har filerne hostet. Man kan ikke være sikker på at filerne ikke er hacket eller bliver hacket. Derudover kræver det, at serveren kører stabilt og hurtigt. Så man har altså ikke selv kontrollen over filerne og dermed har man også afgivet noget af kontrollen over ens egen webside. (ibid.)</p>
             
                <p class="tekst-i-boks"> Der er både fordele og ulemper når man gør brug af frameworks. Det er smart fordi man lynhurtigt kan lave noget der ser pænt ud og som har mange funktioner. Det er derudover let at gøre det brugervenligt. (ibid.) Som sagt bruges det samme CSS-kode og det samme JavaScript. Det vil altså sige, at der er meget unødvendig kode der skal hentes ned, hver gang man åbner websiden. Dette er meget dumt i forhold til SEO. Derudover er det også svært at lave et unikt design. Hvis man f.eks. bruger en nav-bar fra Bootstrap, så kan det tydeligt ses, også selvom man forsøger at re-designe den. Man lærer ikke at kode. Man lærer kun at bruge f.eks. Bootstrap. De skifter ofte hvilke udbydere der er ude med det nyeste, så derfor skal man bruge lang tid, på at sætte sig ind i det forskellige programmer. (ibid.)</p>
             
            </section>
            
            <h3 class="h3" id="boot">Bootstrap</h3> 
            
            <p class="tekst">Bootstrap er den mest populære udbyder indenfor frameworks. (What is Bootstrap?, 2020) Man kan med Bootstrap hurtigt designe responsive mobile-first-sider. Man bruger oftest Bootstrap til at hente delelementer ned, og indsætte dem på sin egen webside. Men Bootstrap tilbyder også hele websider. Inden man vælger den nemme løsning og lader Bootstrap gøre alt arbejdet, skal man huske på de ulemper der følger med, når man gør brug af frameworks. </p>
        
           
            <h3 class="h3" id="pers">Personlig reflektion</h3>  
            
        
            <p class="tekst">Personligt har jeg haft det meget blandet med frameworks. På den ene side synes jeg, at det er meget smart. Jeg synes det er fedt, at man så nemt og hurtigt kan indsætte elementer. Men på den anden side kan jeg bedst lide at have kontrollen over det hele. Det føler jeg ikke jeg har, når jeg bruger Bootstrap. Jeg vil derfor kun bruge Bootstrap og frameworks når det giver bedst mening for min side. Et eksempel er på denne webside, altså mit læringsportfolio. Jeg har her brugt et framework til min navigationsbar. Det har jeg valgt, da det giver bedst mening for min side. Det gør den mere brugervenlig, da drop-down menuen gør det nemmere at navigere rundt på siden.  </p>
        
           <h3 class="h3" id="kilder">Kilder</h3>
        
            <ul class="kildeliste">
                <li>   
                    <a class="henvisning" href="pdf/bilag1.7.pdf" target="_blank">Bilag 1.7</a>
                </li>
                <br>
                <li>
                    What is Bootstrap? (11. december 2020). Hentet fra W3schools.com: <a class="henvisning" href="https://www.w3schools.com/whatis/whatis_bootstrap.asp" target="_blank">https://www.w3schools.com/whatis/whatis_bootstrap.asp" target="_blank</a>
                </li>
            </ul>
        
             
            
        
    </section>
    
    <?php include('includes/footer.php'); ?> 
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
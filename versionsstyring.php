<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - Versionsstyring</title>
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
    
    <h2 id="h2">Versionsstyring</h2>
    
    <section class="indholdoversigt">

            <p id="indholdpaasiden">Indhold på siden</p>

            <ul>
                <li>
                    <a href="#hvad">Hvad er versionsstyring?</a>
                </li>
                <li>
                    <a href="#git">Git</a>
                </li>
                <li>
                <a href="#githib">Github</a>
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
        
                <h3 class="h3" id="hvad">Hvad er versionsstyring?</h3>    

                <p class="tekst-i-boks">Versionsstyring er en metodisk tilgang. (Bilag 1.6) Formålet med versionsstyring er at kunne gå tilbage til en tidligere version, hvis der opstår fejl. Derudover kan versionsstyring også bruges hvis der nu evt. skulle laves ens sider men i forskellige versioner til forskellige kunder. Så kan man holde styr på de forskellige delprojekter. (ibid.) Nogle gange arbejder flere på den samme side og her bruger man også versionsstyring til at kunne samarbejde og slå de forskellige versioner sammen.  </p>
             
                <p class="tekst-i-boks">Man kan hente en VCS (Version Control System), som er en software der holder styr på de forskellige versioner. Ofte er sådan en software baseret på Git-protokollen. </p>
             
            </section>
            
            <h3 class="h3" id="git">Git</h3> 
            
            <p class="tekst">Git er det mest anvendte versionsstyringssystem, som oprindeligt blev skrevet af Linus Thorvalds. (ibid.) Git er ikke det samme som GitHub! Git er open source. Det vil sige vi har alle mulighed for at sætte en Git-server op. Men man kan også vælge en af de allerede eksisterende servere. Det er f.eks. GitLab, BitBucket, GitHub og mange andre. (ibid.) </p>
        
            <h3 class="h3" id="github">GitHub</h3>
        
            <p class="tekst">GitHub er en webplatform der tillader at man kan oprette Git-repositories.(ibid.) Github sporer de ændringer, du foretager i filer, så du har en oversigt over, hvad der er blevet gjort, og du kan vende tilbage til specifikke versioner, hvis du nogensinde har brug for det. Github gør det også lettere at samarbejde om en hjemmeside, så ændringer fra flere personer kan flettes sammen.</p>
        
            <p class="tekst">GitHub er lidt en form for socialt medie for webudviklere. Man kan nemlig dele sine koder. Derudover bruges GitHub også som et portfolio, som man kan vise frem til jobsamtaler. </p>
        
            <section class="boks">
        
                <h4>Vigtige begreber</h4>    

                <p class="tekst-i-boks"><span class="teksttyk">REPOSITORY:</span> også kaldet "repo". Det er en samling af filer, som en projektmappe</p>
                <p class="tekst-i-boks"><span class="teksttyk">BRANCH:</span> En forgrening, en parallel version i dit repo, men berører ikke master</p>
                <p class="tekst-i-boks"><span class="teksttyk">MASTER BRANCH:</span>Hovedforløbet, den der gælder</p>
                <p class="tekst-i-boks"><span class="teksttyk">COMMIT:</span>En revision, som at gemme, men med mulighed for at finde tilbage – man kan også kalde det en milepæl</p>
                <p class="tekst-i-boks"><span class="teksttyk">PULL REQUEST:</span>Et forslag til en ny udgave (rettelser)</p>
                <p class="tekst-i-boks"><span class="teksttyk">DIFF:</span>Difference, en forskel mellem to commits</p>
                <p class="tekst-i-boks"><span class="teksttyk">MERGE:</span>Når ændringer i en branch samles med en anden (eks. gennem en pull request)</p>
                <p class="tekst-i-boks"><span class="teksttyk">PULL:</span>Når du henter ændringer og merger dem</p>
                
            </section>
            
            <h3 class="h3" id="pers">Personlig reflektion</h3>  
            
        
            <p class="tekst">Jeg synes at GitHub var meget svært at lære. Jeg havde svært ved at forstå hvordan det fungerede. Men da jeg begyndte at bruge GitHub sammen med mine projekter, så fik jeg ret hurtigt styr på det. Til denne hjemmeside med mit læringsportfolio har jeg allerede haft brug for at hente tidligere versioner ned et par gange. Så jeg laver helt så mange commits som muligt.  </p>
        
           <h3 class="h3" id="kilder">Kilder</h3>
        
            <ul class="kildeliste">
                <li>   
                    <a class="henvisning" href="pdf/bilag1.6.pdf" target="_blank">Bilag 1.6</a>
                </li>
            </ul>
        
             <a class="henvisning" href="#top">Tilbage til toppen.</a>
            
        
    </section>
    
    <?php include('includes/footer.php'); ?> 
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
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
        
            <p class="tekst"></p>
            <p class="tekst"></p>
            <p class="tekst"></p>
            <p class="tekst"></p>
            <p class="tekst"></p>
                
            
    
            
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
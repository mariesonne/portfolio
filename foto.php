<!DOCTYPE html>
<html lang="da"> 
<head>
    <meta charset="utf-8">
    <meta name= "description" content="Skriv en beskrivelse af hjemmesiden">
    <title>Læringsportfolio - Fotografering</title>
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
    
    <h2 id="h2">Grundlæggende fotografering</h2>
    
     <section class="indholdoversigt">
        
        <p id="indholdpaasiden">Indhold på siden</p>
    
        <ul>
            <li>
                <a href="#kamera">Kameraets opbygning</a>
            </li>
            <li>
                <a href="#trekant">Eksponeringstrekanten</a>
            </li>
            <li>
                <a href="#histogram">Histogram</a>
            </li>
            <li>
                <a href="#jpegraw">JPEG vs. RAW</a>
            </li>
            <li>
                <a href="#pers">Personlig reflektion</a>
            </li>
        </ul>
        
    </section>
    
    <section class="indholdcontainer">
        
        <h3 id="kamera" class="h3">Kameraets opbygning</h3>
       
        <p class="tekst">Før vi begynder at fotografere, er det en god ide at vide hvordan vores udstyr er opbygget. Som mange andre, så bruger jeg et spejlreflekskamera og det er derfor relevant at se på lige netop dette kamera. </p>
        
        <img src="billeder/anatomi.png" width="95%">
        
        <p class="tekst">På billedet ses et kamerahus med et objektiv på. Objektivet er opbygget af linser. Linserne har forskellige udformninger og de leder lyset gennem objektivet med den pågældende brændvidde. I objektivet sidder blænden også. </p>
        
        <p class="tekst">I kamerahuset har vi først og fremmest spejlet. Når vi tager et billede, klapper spejlet op og lukkeren som sidder foran sensoren åbnes. Dette kan også ses her:</p>
        
        <iframe src="https://giphy.com/embed/wR2iGUN9fLON26VFHn" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/wR2iGUN9fLON26VFHn"> </a></p>
        
        <p class="tekst">Vi kan igennem søgeren se hvad vi fotografere. Det er derfor vi alle vores spejle i kameraet. Den stiplede linje på billedet viser hvordan billedet bliver reflekteret igennem spejlene og op til vores øje. </p>
        
        <section class="boks">
        
            <h3 class="h3" id="trekant">Eksponeringstrekanten</h3>    
        
            <p class="tekst-i-boks">Blænde, lukkertid og ISO omtales som eksponeringstrekanten. Det er en kombination af de tre, som afgør eksponeringen af motivet. </p>
            <p class="tekst-i-boks">Hvis den ene øges, skal mindst en af de to andre formindskes, for at give den samme eksponering. Det betyder altså, at du kan opnå den samme eksponering for det samme billede ved at bruge mange forskellige kombinationer af blænde, lukkertid og ISO.</p>
            
            <section id="eksponeringstrekant">
                <img src="billeder/eksponeringtresort.png">
            </section>
            
            <h4 class="h4boks">Lukkertid</h4>
            
            <p class="tekst-i-boks">Lukkertid er den tid, hvor lukkeren i et kamera er åben. Jo længere tid lukkeren står åben, jo mere lys kommer der ind til sensoren.</p>
            
            <p class="tekst-i-boks">Ved en lang lukkertid kommer der en udtværing af motiver der er i bevægelse. Det gælder også hvis man ryster kameraet, så ved lange lukkertider kan det være nødvendigt at bruge stativ.</p>
            
            <p class="tekst-i-boks">Ved en kort lukkertid eller en hurtig lukkertid når der ikke at komme så meget lys ind til sensoren, som ved en længere lukkertid. Man kan ved en kort lukkertid fryse et billede. Man kan derved fange en hurtig bevægelse og fryse det.</p>
            
            <section id="lukkertid">
            
                <img src="billeder/lukkertid.png" width="90%">
                
            </section>
            
            <br><br>
            
            <h4 class="h4boks">Blænde</h4>
            
            <p class="tekst-i-boks">Blænden er en åbning i objektivet der regulerer hvor meget lys der slipper ind. Man kan med blænden mindske lysmængden ved at mindske åbningens størrelse. </p>
            
            <p class="tekst-i-boks">Blænderækken:<span id="citat">1-1,4-2-2,8-4-5,6-8-11-16-22-32</span></p>
            
            <img src="billeder/lilleblande.png">
            
            <p class="tekst-i-boks">Her kan man se en lille blændeåbning. Det vil sige at der ikke kommer så meget lys ind til sensoren.</p>
            
            <p class="tekst-i-boks">Dybdeskarpheden er stor. Det vil sige, at hvis man tog et billede af et bjerglandskab. Så vil man kunne få alle bjerge og selv bjergtoppene helt skarpe.</p>
            
            <img src="billeder/storblande.png">
            
            <p class="tekst-i-boks">Her kan man se en stor blændeåbning. Her kommer der meget mere lys ind til sensoren, end vi så med det den lille blændeåbning. Dybdeskarpheden er lille. Det vil sige at baggrunden af motivet bliver sløret. På den her måde kan man rette seerens fokus ind på motivet, da øjet først ser det der er skarpt.</p>
            
            <img src="billeder/dybdeskarphed.png" width="90%">
            
            <p class="tekst-i-boks">Det første billede viser en stor blændeåbning og dermed en lille dybdeskarphed. Vi har her fokus på den lille panda. </p>
            
            <p class="tekst-i-boks">På det andet billede er der en lille blændeåbning og dermed en stor dybdeskarphed. Vi har fokus på begge pandaer. </p>
        
            <h4 class="h4boks">ISO</h4>
            
            <p class="tekst-i-boks">En høj ISO-værdi (ex. 6400) gør billedsensoren mere følsom for lys, så man vil kunne bruge en hurtigere lukkertid eller et større blændetal.</p>
            
            <p class="tekst-i-boks">Men ISO har også en pris – og det er billedstøj. Billedstøj er pixels med forkert farve som dannes i de elektroniske kredsløb i ens kamera. Hvis man tager f.eks. et billede af en blå himmel, vil man forvente at billedet er helt blå. Hvis billedet er taget med en høj ISO-værdi og du zoomer helt ind, kan du opleve, at himlen ikke er ensfarvet, men derimod har masser af pixels med andre farver. Det er billedstøj.</p>
            
            <p class="tekst-i-boks">Det anbefales ofte, at du generelt bør bruge så lave ISO-værdi som muligt. Her ses et billede der er taget med en lav ISO og et der er taget med en høj ISO. </p>
            
            <img src="billeder/iso.png" width="90%">

    </section>
        
        <h3 class="h3" id="histogram">Histogram</h3> 
        
        <p class="tekst">Histogrammet afspejler præcist, hvordan de forskellige lysstyrker er repræsenteret i et billede. På sensoren modtager hver pixel en mængde lys defineres i en styrke fra 0 til 255. Lys Informationerne fordeles i histogrammet, hvor værdien 0, der svarer til sort, er i venstre side, mens 255, som er hvidt, er i den højre side. Søjlerne viser hvor mange pixels der har lige den værdi. </p>
        
        <img src="billeder/histogram.png" width="90%">
        
        <p class="tekst">Her kan først ses et undereksponeret billede, hvor man kan se at søjlerne trækker mod 0 – altså de sorte og mørke toner. Der er intet hvidt i billedet. </p>
        
        <p class="tekst">I midten ses et korrekt eksponeret billede, hvor der både er sort, hvis og en masse mellemtoner. </p>
        
        <p class="tekst">Til sidst ses et overeksponeret billede, hvor at søjlerne trækker mod højre og vi har intet sort i billedet. </p>
        
         <h3 class="h3" id="jpegraw">JPEG vs. RAW</h3> 
        
        <p class="tekst">Jpeg er standardformatet for alle kameraer. Når kameraet gemmer billedet, sker der en proces. Alle informationerne (billedet), som sensoren i kameraet opfanger bliver gemt hurtigt, så nogle farver ikke bliver gemt. Derfor har jpg-billeder kun 8 bit, da den gemmer det “groft”. Disse farver vil altså være tabt for altid. Billedet bliver komprimeret og “redigeret” på en måde af kameraet.</p>
       
        <p class="tekst">RAW er fællesbetegnelsen for alle kamera producenternes rå billedformat. RAW-filen bliver ikke bearbejdet på samme måde som JPEG. Det faktisk slet ikke behandlet på nogen måde. Derfor navnet rå. Det vil sige at RAW-filen indeholder hver enkel pixels lys, som er blevet opfanget på sensoren. Når du skyder i RAW vil du også få flere farver med på billedet. Det vil altså sige at man får det originale billede, som man derefter kan redigere. Filerne fylder dog mere. </p>
        
        <h3 class="h3" id="pers">Personlig reflektion</h3> 
        
        <p class="tekst">Jeg har taget billeder i mange år. Jeg lærte meget hurtigt de mest basale kamerateknikker på aftenskole. Deruover har jeg gået på fotografuddannelsen grundforløb, hvor jeg selfølgelig også har lært en masse om grundlæggende fotografering. Da jeg allerde vidste en del om at tage billeder, skulle jeg i undervisningen på klassen træde tilbage og lade de andre prøve - men sammentidig skulle jeg hjælpe dem. Jeg må ærlig indrømme at dette var en svær opgave og min tålmodighed blev i den grad sat på prøve. Men på denne måde lærte jeg at lære fra mig uden at tage kameraet ud af hånden på de andre.</p>
        
     </section>
    
        <?php include('includes/footer.php'); ?>
    
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
</body>
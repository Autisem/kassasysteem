Vereisten:
-	Voldoet aan normalisatie regels en word ontworpen doormiddel van de ERD techniek
-	Gebruik van SQL database
-	Communicatie tussen de applicaties door middel van API door middel van JSON
-	Word ontwikkeld in GitHub
-	Gelijke verdeling van uren tussen de leden van de groep
-	Code moet overeenkomen met de geleerde technieken zoals beschreven in de lessen (kan gevonden worde in de Code Conventie in de AMO Library)
-	Iedere 2 weken sprint review met de product owner


User story:
Klant gedeelte:
-	Moet kunnen inloggen om reserveringen te bekijken
-	Moet kunnen registreren voor het bioscoop reserveringssysteem (bevestigen via email)
-	Na het inloggen krijg je een email als bevestiging
-	Moet kaartjes kunnen selecteren aan de hand van beschikbare plaatsen (dit moet visueel zijn zodat de klant duidelijk kan aangeven waar deze wilt zitten)
-	Klant krijgt na het reserveren van de tickets een link doorgestuurd met daarin de barcode zodat deze uitgeprint kan worden en later gescand door een medewerker.
-	De klant moet per film een overzicht van de film kunnen zien. Dit zijn dus dingen zoals de tijdsduur, genre en een beschrijving.

Eigenaar gedeelte:
-	Klanten moeten eerst een account aan maken voordat ze tickets kunnen bestellen zodat er extra data word opgeslagen.
-	Demonstratie met het scannen van de barcode zodat de werking van de applicatie duidelijk is
-	Er moet voor de komende 2 weken alle films ingepland kunnen worden, dit moet efficiënt gedaan worden
-	Tickets moeten gescand kunnen worden en zo moet het bezoek geregistreerd worden. Mocht het bezoek al geregistreerd staan komt dat op een scherm te staan als foutmelding
-	Moet de beschikbaarheid van de stoelen per zaal visueel kunnen zien.
-	Een bioscoop medewerker moet ook stoelen kunnen reserveren zodat mensen ook op locatie geholpen kunnen worden.

Visual gedeelte:
-	Er moet een website gemaakt worden die voldoet aan de eisen en wensen van de klant
-	Op basis van de style van de bioscoop dient er een pagina gemaakt te worden zodat de product eigenaar akkoord kan geven met het design

Backend gedeelte:
-	Tijdens het reserveren moeten de geselecteerde stoelen voor 4 minuten voor de persoon die de reservering probeert te plaatsen gereserveerd zijn. Deze kunnen gedurende die 4 minuten dus niet door anderen gereserveerd worden.
-	Data mag niet persoonlijk worden opgeslagen in een database, hiervoor moet gebruik gemaakt worden van http://www.omdbapi.com/

Onderdelen:
-	Account creatie
o	Data moet opgeslagen worden in een sql database
o	de data moet opgeslagen worden met gebruik van http://www.omdbapi.com/
o	er moet een mail en wachtwoord opgeslagen worden voor het profiel
o	er moet aangegeven worden of de gebruiker een klant of personeel is
o	\Er moet een lijst komen voor alle reserveringen van de klant
o	?Er moet een bevestiging mail komen dat er een account is aangemaakt

-	Login
o	Kijken of het email en wachtwoord overeenkomen met het account in de database
o	?Er moet een mail verstuurd worden dat er is ingelogd
o	De klant kan nu tickets bestellen (kan naar deze pagina’s gaan)

-	|Films toevoegen (alle films draaien op vaste tijden)
o	Films moeten makkelijk toegevoegd kunnen worden aan een tijdsslot (aanvinken van beschikbare tijdssloten en door middel van knop doorvoeren)
o	Er moeten tijdssloten beschikbaar zijn voor films die over 2 weken draaien
o	\Per tijdsslot een lijst met barcodes van iedereen die komt aanmaken

-	Film weergeven
o	Er moet een titel, beschrijving en genre te zien zijn
o	De tijdssloten waarop de film draait moeten te zien zijn

-	Reserveringen weergeven
o	De klant moet alle aankomende films waarvoor hij of zij een reservering heeft gemaakt kunnen zien op een scherm (datum, tijd en stoel)

-	/Stoelen weergeven
o	De beschikbare stoelen moeten te zien en te selecteren zijn (visueel)
o	De stoelen die al gereserveerd zijn moeten niet te selecteren zijn (\andere kleur geven)
o	De stoelen die de klant heeft geselecteerd moeten voor 4 minuten als gereserveerd weergegeven worden om een dubbele boeking te voorkomen

-	/Bestellen tickets
o	De klant betaald met paypal
o	De klant krijgt een mail met daarin een barcode die gescand kan worden tijdens zijn of haar bezoek (mogelijk ook andere informatie zoals titel film, tijd en datum)
o	De stoelen worden definitief als gereserveerd gemarkeerd
o	De reservering/barcode word toegevoegd aan de film en gekoppeld aan de stoel(en)

-	|Scannen tickets
o	De barcode moet gescand kunnen worden en zo moet het bezoek bevestigd worden.
o	Indien de barcode al eerder is gescand word dit als een duidelijke foutmelding weergegeven

-	|Op locatie tickets kopen (kan mogelijk op dezelfde manier als dat je het zelf doet maar dan word het betaalverzoek verstuurd naar een terminal/betaal apparaat)
o	Een klant kan op locatie tickets kopen aan een desk


? = niet zeker of dat dit moet
\ = Mogelijk is dit handig, maar dit kan ook anders.
| = dit krijg je alleen te zien als je personeel bent
/ = hiervoor moet je ingelogd zijn







===============================
============= Old =============
===============================
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

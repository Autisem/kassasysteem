
Notes standup Week1 dag2:

- UID = Unique ID, een id die de gebruiker representeerd

- Beschikbare stoelen opslaan:
Elke stoel heeft zijn eigen nummer, je begint met tellen vanaf 1 (stoel 1), en gaat zo door tot het aatal stoel in de zaal.
De stoelen worden vervolgens in een duidelijke gui geplaatst door middel van html en css zodat het uit te lezen is.

[Register] systeem:
* Email
* voornaam, (tussenvoegsel) achternaam
* geslacht

[login] syteem:
* Email + Wachtwoord
Checken met database en als het correct is:
* UID ophalen (gebruikers id/account id)
* rank ophalen

[Plaatsen reservering]:
* UID, Zaal, tijd, stoel in tijdelijke database zetten als reservering
Als de betaling afgerond word:
* Reserverings id aanmaken (deze staat gelijk aan de barcode)
* De reservering in de definitieve database zetten

- [Landing page/home page] - > [register]
- [Landing page/home page] -> [login]
- [Films pagina] -> [info film] && [login]
- [info film] -> [!plaatsen reservering]
- [!plaatsen reserveringen] -> [afrond pagina/bestelling succes pagina]


- opbouw/uitleg structuur:
- Tussen [] en {} staat een korte omschrijving van de web pagina's
- Een -> betekend dat je via die pagina door kan klikken naar de volgende pagina('s).
- && betekend dat je ook door kan klikken naar
- ! in de omschrijving betekend dat je ingelogd moet zijn om door te kunnen klikken.




==============================
Onderdelen:
Account creatie
   *	Data moet opgeslagen worden in een sql database
   * de data moet opgeslagen worden met gebruik van http://www.omdbapi.com/
   *	er moet een mail en wachtwoord opgeslagen worden voor het profiel
   * er moet aangegeven worden of de gebruiker een klant of personeel is
   *	\Er moet een lijst komen voor alle reserveringen van de klant
   *	?Er moet een bevestiging mail komen dat er een account is aangemaakt

Login
   *	Kijken of het email en wachtwoord overeenkomen met het account in de database
   *	?Er moet een mail verstuurd worden dat er is ingelogd
   *	De klant kan nu tickets bestellen (kan naar deze pagina’s gaan)

|Films toevoegen (alle films draaien op vaste tijden)
   *	Films moeten makkelijk toegevoegd kunnen worden aan een tijdsslot (aanvinken van beschikbare tijdssloten en door middel van knop doorvoeren)
   *	Er moeten tijdssloten beschikbaar zijn voor films die over 2 weken draaien
   *	\Per tijdsslot een lijst met barcodes van iedereen die komt aanmaken

Film weergeven
   *	Er moet een titel, beschrijving en genre te zien zijn
   *	De tijdssloten waarop de film draait moeten te zien zijn

Reserveringen weergeven
   *	De klant moet alle aankomende films waarvoor hij of zij een reservering heeft gemaakt kunnen zien op een scherm (datum, tijd en stoel)

/Stoelen weergeven
   * De beschikbare stoelen moeten te zien en te selecteren zijn (visueel)
   *	De stoelen die al gereserveerd zijn moeten niet te selecteren zijn (\andere kleur geven)
   *	De stoelen die de klant heeft geselecteerd moeten voor 4 minuten als gereserveerd weergegeven worden om een dubbele boeking te voorkomen

/Bestellen tickets
   *	De klant betaald met paypal
   *	De klant krijgt een mail met daarin een barcode die gescand kan worden tijdens zijn of haar bezoek (mogelijk ook andere informatie zoals titel film, tijd en datum)
   *	De stoelen worden definitief als gereserveerd gemarkeerd
   *	De reservering/barcode word toegevoegd aan de film en gekoppeld aan de stoel(en)

|Scannen tickets
   * De barcode moet gescand kunnen worden en zo moet het bezoek bevestigd worden.
   * Indien de barcode al eerder is gescand word dit als een duidelijke foutmelding weergegeven

|Op locatie tickets kopen (kan mogelijk op dezelfde manier als dat je het zelf doet maar dan word het betaalverzoek verstuurd naar een terminal/betaal apparaat)
   *	Een klant kan op locatie tickets kopen aan een desk


? = niet zeker of dat dit moet

\ = Mogelijk is dit handig, maar dit kan ook anders.

| = dit krijg je alleen te zien als je personeel bent

/ = hiervoor moet je ingelogd zijn

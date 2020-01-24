<h1><strong>Rendszerterv</strong></h1>
<h3><strong>1) A Rendszer célja</strong></h3>
  Diákok számára készítünk chat programot, kifejezetten az iskolával kapcsolatos témák megvitatására. Megtudják beszélni a házi feladatot, segíteni tudnak egymásnak az anyag megértésében, pótlásában. Az új alkalmazás tehát az iskolával kapcsolatos kommunikáció színtere lenne. A diákok egy helyen tudják megosztani az információkat a tanulmányaik kapcsán. Mivel ez egy külön felület kifejezetten az iskolai feladatokra így átláthatóbbá válik, mert nem zavarnak be egyéb tényezők a beszélgetésbe, nem kell vissza keresgélni. A program használata a diákok számára szorosan a tanulmányokhoz kötődne. Bejelentkezés szükséges a program használatához. Fájlok csatolására nincsen lehetőség, elsősorban a szöveges üzenetek küldése biztosított.
A felhasználóknak mindig van egy aktuális státuszuk, ez lehet: ONLINE, AWAY és BUSY. Ezt ők maguk állíthatják be.
A felhasználóknak lehetőségük van profilképet használatára is, de ez nem kötelező. Csak kényelmi funkció, a program működését nem befolyásolja.
A program szerver és kliens részből is áll, a szerveren tárolva vannak az üzenetek, míg a kliens arra használandó hogy egyes felhasználók kapcsolatba tudjanak lépni másokkal.

<h3><strong>2) Projekt terv</strong></h3>
  <h4>Projektszerepkörök:</h4>
  <ul>
  <li>Project Manager</li>
  <li>Fejlesztő</li>
  <li>Tervező</li>
  </ul>

  <a href="https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/%C3%BCtemterv.md">Ütemterv</a>
<h3><strong>3) Üzleti folyamatok modellje</strong></h3>
  *  A diákok eddig csak személyesen tudtak kommunikálni a program segítségével, az információcserét meg tudják tenni az  általunk fejlesztett alkalmazás segítségével.
  *  A kommunikációs folyamat a programon keresztül úgy történik, hogy a bejelentkezési képernyőn megadnak egy felhasználó nevet, illetve a szerverrel kapcsolatos információkat, ez után a login gombra kattintva az alkalmazás fő ablaka jelenik meg, ami tartalmaz egy textboxot, ahová a felhasználó üzenetét tudja begépelni, majd az elküld gombra kattintva a szerveren jelen levő többi felhasználó látja az elküldött üzenetet.

<h3><strong>4) Követelmények</strong></h3>
  <a href="https://www.notion.so/67c6af5872ad433f85d5ff384d2307a0?v=b0ec53b48bf8483d954e16908574915b">Követelménylista</a>
<h3><strong>5) Funkcionális terv</strong></h3>
<h4>Rendszerszeplők:</h4>
Felhasználók:
Minden felhasználónak lehet egy általa választott felhasználó neve, valamint egy profilképe. A felhasználó név megadása   kötelező, a profilkép esetében van lehetőség a Default kép használatára, ami egy előre beállított kép. Ez a kép minden felhasználónak   azonos, ha nem választ a felhasználó saját képet automatikusan ez kerül majd beállításra.A chat program használatához meg kell adni a szerver adatait (hostname és port szám), ez a felhasználó feladata a kapcsolat létrehozása előtt. Ha helyesek az adatok a felhasználó üzeneteket küldhet és fogadhat. A felhasználó beállíthatja a saját státuszát egy legördülő listán az előre deffiniált státuszokból (ONLINE, BUSY, AWAY). <br>
Mivel a felhasználó manuálisan beállítja a kapcsolat létrehozásához szükséges részeket, így nincs szükség más kitüntetett szerepkörre a program használatához.<br>

Rendszerhasználati esetek és lefutásaik: https://drive.google.com/open?id=1fyC6sqUgozl49Uy6JTC1WsLg5Myc0CmE
<br>
<h4>Határosztályok:</h4>
Kezdőképernyő: https://drive.google.com/open?id=1CbXUm7lEC-_mJJRiYU7vxrpZyNFc2I-m
<br>
ChatCsoport: https://drive.google.com/open?id=1-Nu4d-eXz_1nwVE3WUqRqqmtZ9u0GcjZ

Kezdőképernyő.1: a felhasználónak lehetősége van a profilkép kiválasztására, ezzel a legördülő menüvel. Ha nem választ másikat a Default kép marad a profilhoz.<br>
Kezdőképernyő.2: a felhasználó profilképe. Ha választ a legördülő menü segítségével, a kiválasztott képet jeleníti meg. Default esetén a képen látható módon az alapértelmezetten beálított profilkép társul a felhasználóhoz.<br>
Kezdőképernyő.3: a felhasználónak meg kell adni a felhasználó nevét, amit ebben a mezőben tud megtenni a billentyűzet segítségével.<br>
Kezdőképernyő.4: A szerver adatinak megadása ebben a két mezőben történik. Az első mezőbe a felhasználónak a Hostname-et kell megadnia, a másodikban pedig a port számot. Ha ezek az adatok hibásak, nem tud kapcsolódni a szerverre.<br>
Kezdőképernyő.5: Ha a szerver adatok helyesek voltak akkor ennek a gombnak a megnyomásával kapcsolódik a felhasználó a szerverre. Ha minden rendben megy akkor automatikusan be lépünk a chat csoportba a korábban megadott felhasználónévvel, és az esetleg kiválasztott profilképpel.<br>

ChatCsoport.1: ezzel a legördülő menüvel a belépett felhasználó kiválaszthatja a státuszát (ONLINE, AWAY, BUSY). Alapértelmezésben az ONLINE státusz van beállítva belépéskor.<br>
ChatCsoport.2: itt jelenítődik meg a korábban kiválasztott profilkép vagy az alapértelmezett profilkép<br>
ChatCsoport.3: itt jelennek meg az adott szerverre felcsatlakozott felhasználók nevei, valamint a nevük mellett a státuszukra vonatkozó jelzés.<br>
ChatCsoport.4: ide gépelhető a felhasználó által elküldeni kívánt üzenet.<br>
ChatCsoport.5: A gomb lenyomására a begépelt üzenet elküldésre kerül, a többi felhasználónak látható módon.<br>
<br>A képernyő középső részén jelennek meg az elküldött és a fogadott üzenetek.



<h3><strong>6) Fizikai környeze</strong></h3>
  <h4>Fejlesztési nyelv: Java</h4>
  <h4>Használt framework: JavaFX</h4> 
<h3><strong>7) Absztrakt domain modell</strong></h3>
<h4>Státusz:</h4> A felhasználó megadhatja, hogy elérhetőnek jelezze-e ki a program a többi felhasználó felé. Az ONLINE, AWAY és BUSY lehetőségek közül választhat.
<h4>Üzenet típusok:</h4> A különböző üzenetek más-más kategóriába tartoznak: CONNECTED, DISCONNECTED, STATUS üzenetek, a USER-ek üzenetei, a SERVER által küldött üzenetek, NOTIFICATION, és VOICE, azaz hang üzenetek.<br>
<br>A rendszer durva vázlata: https://drive.google.com/open?id=15ewylUY14474dYwYU31Y-oLHu4MCckk9

<h3><strong>8) Architekturális terv</strong></h3>
A szerverre több kliens is fel tud csatlakozni.<br>
<br>Az alkalmazás fő komponensei: User osztály (Status enum), Listener osztály, Message osztály, Server.
(Részletesebben lásd az Implementációs tervben).<br>
<br>Biztonsági funkciók jelenleg nincsenek megvalósítva, de adott chat csoportba való belépéshez kell a hostname és a port szám pontos megadása.<br>
A későbbi verziókban lehet szó a felhasználók eltárolásáról, valamint bejelentkezéskor jelszó kéréséről az adott fiókhoz. A jelszó választásra lehetnek majd különböző megszorítások, pl.: minimum karakterhossz, maximum karakterhossz, tartalmazzon valamennyi kis/nagybetűt, esetleg számot.<br>
<br>A rendszer esetleg tovább bővíthető kényelmi funkciókkal is a biztonságiak mellett. Például a felület személyre szabása, reakciók az üzenetekre esetleg különböző formátumok csatolása.<br>
<br>A biztonsági funkciók és a további bővítések a következő verzió készítése esetén megbeszélésre kerülhetnek.


<h3><strong>9) Implementációs terv</strong></h3>

​		![Package animations](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20animations.png)

![Package bubble](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20bubble.png)

![Package chatwindow](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20chatwindow.png)

![Package login](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20login.png)

![Package messages](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20messages.png)

![Package models](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20models.png)

![Package util](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Package%20util.png)

![Server](https://github.com/afplabor2019/husi/blob/master/Chat%20project/Documents/class%20diagram/Server.png)




<h3><strong>10) Telepítési terv</strong></h3>

   * Supported platforms: Mac OS,Linux,Windows
   * Requirments to run the software: Java Runtime Evironment installed on the pc


<h3><strong>11) Tesztterv</strong></h3>
<h4>Fekete dobozos tesztelési technikával:</h4>
<table>
  <tr>
    <td><b><p>A teszt tárgya</p></b></td>
    <td><b><p>Teszteset</p></b></td>
    <td><b><p>Kilépési feltétel</p></b></td>
    <td><b><p>Eredmény</p></b></td>
  </tr>
  <tr>
     <td><p>Csatlakozás a szerverre, belépés a chat csoportba.</p></td>
    <td><p>Felhasználónév megadása, port és hostname megadása.</p></td>
    <td><p>A kezdőképernyőről a belépünk a chat csoportba.</p></td>
    <td><p>Sikeres</p></td>
  </tr>
  <tr>
    <td><p>Hibás szerver adatok esete.</p></td>
    <td><p>Felhasználónév, rossz port és/vagy hostname megadása.</p></td>
    <td><p>A kezdőképernyőn maradunk, sikertelen kapcsolódás.</p></td>
    <td><p>-</p></td>
  </tr>
  <tr>
    <td><p>Fénykép betöltése profilképnek.</p></td>
    <td><p>Legördülő menüvel fénykép választása a profilhoz + felhasználónév, hostname, port megadása.</p></td>
    <td><p>A kép már a kezdőképernyőn megjelenik az erre kijelölt helyen, a csoportba lépve továbbra is látható marad.</p></td>
    <td><p>-</p></td>
  </tr>
  <tr>
    <td><p>Nincs betöltve fénykép.</p></td>
    <td><p>Kapcsolódás előtt nem adunk meg fényképet, Deafault-on hagyjuk.</p></td>
    <td><p>A Default kép van a kezdőképernyőn és a csoportban is az erre kijelölt helyeken.</p></td>
    <td><p>-</p></td>
  </tr>
  <tr>
    <td><p>Státusz állítása.</p></td>
    <td><p>A kapcsolódás után legördülő menüvel kiválasztjuk a státuszt.</p></td>
    <td><p>A kiválasztott státusznak megfelelő jelzés van a felhasználó neve mellett, mindenki számára így jelenik meg.</p></td>
    <td><p>-</p></td>
  </tr>
  <tr>
    <td><p>Státusz Default.</p></td>
    <td><p>Nem állítunk semmit a státuszon a kapcsolódás után.</p></td>
    <td><p>A státusz online állapotot mutat, mindenki számára látható módon.</p></td>
    <td><p>-</p></td>
  </tr>
  <tr>
    <td><p>Üzenet küldése.</p></td>
    <td><p>A sikeres kapcsolódás után a megfelelő mezőt kitöltjük, majd Send gombbal elküldjük.</p></td>
    <td><p>Az elküldött üzenet megjelenik a csoportban, másik felhasználóknak is látható módon.</p></td>
    <td><p>Az üzenet nem jelent meg képernyőn, de a szerver jelezte, hogy érzékelte.</p></td>
  </tr>
 </table>

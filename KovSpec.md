# KovSpec

# Követelményspecifikáció

Ez a követelményspceifikáció az ügyvezetővel készült riport eredménye, még további pontosításra szorul.

# 1. Áttekintés

Egy gyorsétteremlánc számára készítünk mobiltelefonos applikációt Android és IOS rendszerre egyaránt. A program fő funciója, hogy a törzsvásárlóknak egyedi kedvezményeket adhasson az étterem központja, amit az országban bármelyik elfogadóhelyén érvényesíthetnek, de csak egyszer fejenként. Ezeket az ajánlatokat számítástechnikában felhasználói szintű készséggel rendelkező munkatárs fogja aktiválni.

# 2. Jelenlegi helyzet

Jelenleg semmiféle hasonló rendszer nem működik. A vásárló bemegy az étteremlánc egyik üzletébe, választ a menüről, fizet és távozik.
A választás időigényes lehet, míg a megfelelő termékeket az aktuális kedvezmények kombinációjával kiválasztják.
Az össze nem vonható kedvezmények esetleg félreértésekre adhatnak okot, amik további plusz időt jelenthetnek a pénztárnál.

# 3. Vágyálom rendszer

A vásárló bemegy az üzletlánc egyik éttermébe és a nála lévő mobiltelefonnal igénybe veszi a kedvezményt a vásárlásához, majd választ a menürőlk, fizet és távozik.
- A pénztárnál töltött idő így jelentősen lerövidül.
- A vásárlók a kedvezményekről már az étterembe érkezés előtt nagyon könnyen és egyszerűen tájékozódhatnak.
- A megfelelő kuponok használatával a nagyobb társaságok kiszolgálása is egyszerűsödik, a vásárlók számára is átláthatóbb a rendelésük. 
- Az alkalmazás felületének letisztultsága és egyszerűsége biztosítja, hogy mindenki számára gördülékenyen menjen a vásárlás, legyen rendszeres vagy alakalmi vendég. 
- A késöbbiekben az elkészült statisztikákkat felhasználva a ajánlatok még jobban a vásárlók igényeihez igazíthatóak,
 így tovább népszerűsítve az alkalmazást.

# 4. Rendszerre vonatkozó törvények, szabványok, ajánlások

**4.1. Szerzői jogszabályok:**

- A törvény szerint az eredeti számítógépes program az azt létrehozó személy vagy vállalat szellemi tulajdona. A számítógépes programokat szerzői jogi törvény védi, amely kimondja, hogy az ilyen művek engedély nélküli másolása törvénybe ütköző cselekedet. (Magyarországon a szerzői jogokat az 1999. évi LXXVI. törvény szabályozza)
- Licenszerződés(amennyiben van)

**4.2. Adatvédelmi jogszabályok:**

- AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.) a természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK rendelet hatályon kívül helyezéséről (általános adatvédelmi rendelet)
- évi CXII. törvény az információs önrendelkezési jogról és az információszabadságról ( Infotv.)

# 5. Jelenlegi üzleti folyamatok modellje

[Vásárló] –> (Ételt választ) –> [Éttermi alkalmazott] [Vásárló] –> (Fizet) –> [Éttermi alkalmazott] [Éttermi alkalmazott] – > (Kiszolgál) –> [Vásárló]

- Vásárló ételt választ: csak az étteremben szembesül az aktuális akciókkal, esetleg ezek ismeretében újra gondolja a rendelését, ami a pénztárnál jelenthet plusz időt
- Az éttermi alkalmazott beüti a termékeket: nagyobb társaság esetében az átláthatatlanság miatt könnyen történhetnek félre értések (összesen 9 sajtburger? Nem, csak 7, mert Kati mondta János adagját is, de János is mondta a saját adagját, nem tudva, hogy már rendeltek neki) ezek javítása megintcsak időigényes.

# 6. Igényelt üzleti folyamatok

[Vásárló] –> (Ételt választ) –> [Éttermi alkalmazott] [Vásárló] –> (Kupont lérvenyesít) –> [Éttermi alkalmazott] [Éttermi alkalmazott] –> (Kedvezmény) –> [Vásárló] [Vásárló] –> (Fizet) –> [Éttermi alkalmazott] [Éttermi alkalmazott] – > (Kiszolgál) –> [Vásárló]

-A vásárlók az aktuális ajánlatok ismeretével érkezhetnek az étterembe, ennek tudatában tervezve a rendelésüket. A pénztárnál a gondolkodással, variálással töltött idő jelentősen lerövidül.
- A kupunokon összeállított menük átláthatóbbá teszik a rendelést, a félre értések lehetősége minimálisra csökken, nagy társaságok esetén is.
- Tehát időt spóroltunk és a rendelés mind a vásárló, mind az éttermi alkalmazott számára egyszerűsödik, letisztul.
 

# 7. Követelmény Lista

[Untitled](https://www.notion.so/15839ee244c84b7296cab2838e603246)

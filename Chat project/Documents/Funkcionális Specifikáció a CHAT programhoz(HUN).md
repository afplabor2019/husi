# Funkcionális specifikácó

# Követelményspecifikáció

Ez a követelményspceifikáció az általunk megválaszolt saját riport eredménye. 

# 1. Áttekintés

A jelenlegi chat programok okozta káosz kiküszöbolésére, kínáljuk megoldásnak a komunikáció egységesítését. Egy helyen elérni a tanuláshoz szükséges dolgokat, zavaró tényezök nélkül. Hírdetések, zavaró/elterelö tényezök, mint például gifek, matricák, giccses dolgok nélkül. Persze a monotonitás, és a szürkeség elkerülésével vinnénk a programunkba színt.

# 2. Jelenlegi helyzet

Nincs hasonló rendszer. Ami van az nem használható tanulásra, csak szórakozásra. Mi teremtjük meg a lehetöséget arra, hogy az emberek tudjanak tanulni messzirröl is. A mi programunk kapcsolja össze az emereket, és létesít kapcsolatot.

# 3. Vágyálom rendszer

Egyedi és hasznos program létrehozása. Külölegességéböl adódóan elterjedt kapcsolati háló kialakulása. 
Amit várunk: diákoknak való megfelelés, építö kritika, pozítív visszajelzések.

# 4. Rendszerre vonatkozó törvények, szabványok, ajánlások

**4.1. Szerzői jogszabályok:**

- A törvény szerint az eredeti számítógépes program az azt létrehozó személy vagy vállalat szellemi tulajdona. A számítógépes programokat szerzői jogi törvény védi, amely kimondja, hogy az ilyen művek engedély nélküli másolása törvénybe ütköző cselekedet. (Magyarországon a szerzői jogokat az 1999. évi LXXVI. törvény szabályozza)
- Licenszerződés(amennyiben van)

**4.2. Adatvédelmi jogszabályok:**

- AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE (2016. április 27.) a természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK rendelet hatályon kívül helyezéséről (általános adatvédelmi rendelet)
- évi CXII. törvény az információs önrendelkezési jogról és az információszabadságról ( Infotv.)

**4.3 Felhasználálási feltételek:**

- A számítógépen lévö fájlokhoz, számítógép eszközeihez (pl.: kamera, mikrofon) való hozzáférést biztosítani kell. Ezeket bizalmasan kezeljük, harmadik félhez nem juttatjuk el, semmilyen formában, másnak hozzáférést nem biztosítunk.

# 5. Jelenlegi üzleti folyamatok modellje

[Felhasználó1] –> (informciók halmazát küldi el) -> [Felhasználó2] -> (információk halmazát küldi vissza) -> [Felhasználó1]
---probléma: a sok információ közt nem lehet megtalálni a tanulással kapcsolatos információkat.---

# 6. Igényelt üzleti folyamatok

[Felhasználó1] -> (az információ tanulásra vonatkozó része) -> [Felhasználó2] -> (válasz csak a kapott információkra) -> [Felhasználó1]
---Kommunikáció megvalósulhat szövegesen, és hang formájában.---


---Jelenlegi célunk, efelett a vonal felett található. A vonal alatt további verzió fejlesztések terve áll.---


[Felhasználó1] -> (új területre vonatkozó információ küldése) -> [Felhasználó2] -> (válasz csak a kapott információra) -> [Felhasználó1]
---Szeparálva lennének külön témakörökben. Fa szerü kategória feloszztás. Pl. Egy iskola, azon belül osztályok, azon belül X fös cspatok. Lehet több osztály, lehet több kis csoport.---

[Felhasználó] -> (csoportba helyez embereket)
[Felhasználó] -> (munka segítö táblázaatot hoz létre) -> (felosztja a felhasználók közt a folyamatokat) -> (határidöket ad a feladatokhoz) -> (részletes leírást ad hozzá) 
---Felhasználáshoz jogköröket is meg lehet adni. Pl.: emberek törléséhez egy-egy csoportból, csak a tanárnak legyen lehetösége, de a feladatok kiosztásához mindenkinek joga legyen. Utóbbihoz tartozna egy tájékoztató üzenet, arról hogy milyen események történtek.---

# 7. Követelmény Lista

[Untitled](https://www.notion.so/71f9454ff2d64f70ae11c01a468fa436)

# 8. Képernyőterv

![](Untitled-5e04754f-e0d3-4a67-8712-fe9abfa1aeda.png)

**Az alkalmazás kezdőképernyője**

# 9. Használati esetek

Vásárló felület: opcionális: Bejelentkezés/kijelentkezés VAGY regisztráció –> kupon kiválasztása –> kedvezmény részletes leírása –> kupon érvényesíthető –> használt kupon eltűnik

HR-es felülete: Bejelentkezés/Kijelentkezés –> új kupon hozzáadása (kedvezmény leírása, lejárati dátum) / kupon törlése / statisztikák megtekintése (havi/éves nézet, kuponok népszerűsége)

A HR-es nőci szerencsére rendelkezik némi számítógép használati ismerettel, de a könnyen használhatóság érdekében nem fogjuk túlbonyolítani a webes felületet.

A webes felület használatához bejelentkezésre van szüksége a HR-es nőcinek, akit ezentúl Jucusnak fogok hívni. Kizárólag Jucus, az ő távollétében a helyettese, használhatja a rendszert. 

Ezen az oldalon lehetősége van új kuponokat létrehozni, azokat hozzáadni a jelenleg érvényes kuponok közé, jelenleg érvényes kuponokat eltávolítani a listából. Ezeket a funkciókat a bejelentkezés után megjelnő oldalon tudja elvégezni a megfelelő menüpontok kiválasztásával.

Az új kupon létrehozása menüpontra kattintva Jucus képes információkat megadni az új kuponnal kapcsolatban pl: képet ami illusztrálja azt a dolgot amire kedvezményt kapunk a kupon által, egy dátumot amíg felhasználható az adott kupon, a kedvezmény mértékét.

A kupon törlése menüpontra kattintva van lehetősége Jucusnak a jelenleg érvényben lévő kuponok közül törölni a kívánt kupont.

Ezen a webes felületen van lehetősége Jucusnak az alkalmazás használatával kapcsolatos statisztikát megtekintenie a statisztika menüpontra kattintva.

A mobilos alkalmazás elindítása után a mi kis userünk egyből szembesül a jelenleg felhasználható kuponokkal, amelyek rendelkeznek képi illusztrációval, szöveges leírással ami tartalmazza a kedvezmény mértékét, egy kódot amit az eladó leolvas a kupon használata során. 

Az alkalmazás ezen oldalán lehetőség van megtekinteni a már lejárt kuponokat is.  

# 10. Forgatókönyv

- feltöltik a rendszerbe a kupont
- érvényesítik a kupont
- a kupon népszerűsége növekszik, a havi statisztikába bekerül
- a fiókból/ eszközről törlődik a felhasznált kupon (- a lejárt kuponok autómatikusan törlődnek mindenhonnan)

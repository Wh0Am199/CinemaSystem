## **A rendszer célja és nem céljai**

Az a tervünk, hogy egy olyan megbízható weboldalt készítsünk amivel könnyedén vásárolhatunk mozijegyet egy adott filmre. A célunk az, hogy maga a felület egyszerű és könnyedén kezelhető legyen a felhasználó számára, illetve mindig az aktuális filmek közül lehessen választani

Nem az a célünk, hogy ez az oldal legyen a legnépszerűbb, csak szeretnék az emberek számára több lehetőséget is adni, hogy ne csak egy webhelyről lehessen mozijegyeket vásárolni. Tegyük fel, hogy a cinemacity.hu weboldala valamilyen okból kifolyólag nem érhető el és szükségünk van egy másik weboldalra, ahol szintén biztonságosan tudunk vásárolni jegyeket. 

## **Projekt terv**

Project dolgozók: Dudás Botond, Balogh Dániel, Szalai Márk, Bárdos Bálint
				  
		Tervezet: Követelmény Specifikáció, Funkcionális Specifikáció, Rendszer Dizájn, Adattárolás, Tesztek
		BackEnd: A back-end réteg feladata a front-end réteg felől érkező adatok feldolgozása, ill. a keletkezett eredmény a front-end számára történő visszajuttatása.
		FrontEnd: A front-end réteg feladata a rendszerből kijutó adatok prezentálása, illetve a bejövő adatok fogadása a felhasználó vagy a csatlakoztatott rendszer felől.
				
## **Üzleti folyamatok modellje**
### Üzleti Szereplők
Foglaló: Ez az alapértelmezett felhasználó. Ő tud filmeket keresni, időpontokat keresni és az időponthoz rendelt jegyeket vásárolni.

Menedzser: Az ő feladata, hogy frissítse a műsor listát és a hozzájuk tartozó időpontokat.

Admin: Ő felel a weblap karbantartására.

## **Üzleti folyamat**
### Fogalási folyamat:
* 1.Bejelentkezés
* 2.Filmek keresése
* 3.Megfelelő időpont kiválasztása az adott filmhez
* 4.Ülőhely kiválasztása a szabad helyek közül
* 5.Az ülőhely foglalása
* 6.Tovább a vásárlásra

### Vásárlási folyamat:
* 1.A foglalt jegy kosárba rakása
* 2.További jegyek vásárlása/hozzá adása
* 3.A kiválasztott jegyek megvétele online banki tranzakcióval
* 4.Sikeres vásárlás esetén egy megerősítő e-mail küldése
  
### Menedzselés folyamata:
* 1.A filmek vetítési jogának a megszerzése/fentartása
* 2.A filmek magyar illetve más nyelveken történő vetítésének engedélyezése
* 3.Feliratok megszerzése, engedélyezése
* 4.Film vetítési engedélyezése

## **Fizikai környezet**

A mi elképzelésünk az, hogy html, php, css és Java script nyelven fogunk fejleszteni és mivel mi webszerverre fejlesztünk ezért az adatbázisunk egy localhost szerveren fog futni, amiről tudunk adatokat lekérdezni, illetve feltölteni. Mivel ez egy weblap felületen fog működni, ezért mint windowson mint linux rendszeren elérhető lesz ez a weboldal. Hálózatot tekintve LAN hálózatot fejlesztünk de később célunk kiterjeszteni az egész weboldalt egy WAN méretűre. 


Részei | Leírás
----------------------|-------
Fejlesztői eszközök| PhP, CSS, JavaScript, HTML
Keretrendszer| SQL adatbázis, .NET keretrendszer
Hálózati topológia| ![LAN.png](https://github.com/Wh0Am199/CinemaSystem/blob/master/Dokument%C3%A1ci%C3%B3/LAN.jpg)
 





## **Implementációs terv**

### Perzisztencia osztályok:
	
	* UserMapper - Model
	* ClassMapper - Model
	* LocationMapper - Model
	* MovieMapper - Model
	* StatsMapper - Model
	
### Üzleti logika osztályok:
	
	* LoginLogout
	* Registration
	* UserActions
	* AdminActions

### Kliens oldal osztályai:
	
	* LoginPage
	* RegisterPage
	* MainPage
	* SearchPage
	* UserStatsPage
	* AdminStatsPage
	* ReservePage
	* BuyPage
	* CartPage
	* ClassesPage

## **Karbantartási terv**

A szoftver a jövőben nem igényel nagy karbantartásokat, a szükséges karbantartások az 
alábbi egységekből állnak:

1. Frissebb verziójú böngészőkben történő tesztelés, hiba észlelése esetén azoknak javítása.
2. A kiszolgáló szerver státuszának ellenőrzése, offline szerver esetén újraindítás.
3. Igény esetén új funkciók implementálása.  

## **Telepítési terv**

### **Fizika telepítési terv:**

- Szükség van egy adatbázis szerverre, amely direktbe csatlakozik LAN-on 
  a webszerverre, amelyen egy alkalmazásszerver fut.
  
- A webszerver a lekérdezéseket REST API segítségével végzi.

- A webszerverre közvetlenül az internetről kapcsolódnak rá a kliensek.

### **Szoftver telepítési terv:**

- A szoftver webes felületéhez csak egy ajánlott böngésző telepítése szükséges
  (Google Chrome, Firefox, Opera, Safari), külön szoftver nem kell hozzá.  

### **Tesztterv:**

Tesztterv
A tesztelések célja a rendszer és komponensei funkcionalitásának teljes vizsgálata, ellenőrzése, a rendszer által megvalósított üzleti szolgáltatások verifikálása.
Tesztelési eljárások
			
	Unit teszt:

		Ahol csak lehetséges, szükséges már a fejlesztési idő alatt is tesztelni, hogy a metódusok megfelelően működnek-e.
		Ezért a metódusok megfelelő működésének biztosítására mindegyikhez írni kell Unit teszteket, a minnél nagyobb kódlefedettséget szem előtt tartva.
		A metódusok akkor vannak kész, ha a tesztesetek hiba nélkül lefutnak az egyes metódusokon.		
			
	Alfa teszt:

		A teszt elsődleges célja: az eddig meglévő funkcióknak a különböző böngészőkkel való kompatibilitásának tesztelése. 
		A tesztet a fejlesztők végzik.
		Az eljárás sikeres, ha különböző böngészőkben is megfelelően működnek a különböző funkciók. 
		A teszt időtartama egy hét.
		
	Beta teszt:

		Ezt a tesztet nem a fejlesztők végzik.
		
		Tesztelendő böngészők: Opera, Firefox, Google Chrome, Safari
		Tesztelendő kijelzőméretek: 1280x720 (minimum), 1366x768, 1920x1080

		A teszt időtartama egy hét. 
		A tesztelés alatt a tesztelő felhasználók visszajelzéseket küldhetnek a fejlesztőknek, probléma/hiba felmerülése esetén.
		Ha hiba lép fel, a fejlesztők kijavítják a lehető leghamarabb. Sok hiba esetén a tesztelés ideje elhúzódhat.
		
## **Architekturális terv**

Az architekturális terv a következőképpen épül fel:

	- BackEnd: Használati nyelv a PHP lesz és ehhez társul egy adatbázis kapcsolat is.
	- FrontEnd: Legfőképp HTML és CCS használata illetve JavaScript.
	- Rendszer: Menük illetve funkciók létrehozása, mint pl: regisztráció, belépés, kilépés, jegyfoglalás, kapcsolat felvétel.
	- Változások: Újabb funkciók beépítése, mai elvárásoknak való megfelelés, weboldal kinézetének finomítása.
	
A BackEnd részen a  kiszolgáló egy PHP-ban készült  szolgáltatás lesz. Ez csatlakozik az adatbázishoz, ahonnan eljárások segítségével 
képes lesz adatokat lekérni, felvinni valamint képes továbbküldeni és fogadni a kliens/kliensek által szolgáltatott adatokat.
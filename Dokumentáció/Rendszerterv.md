## **A rendszer célja és nem céljai**

Az a tervünk, hogy egy olyan megbízható weboldalt készítsünk amivel könnyedén vásárolhatunk mozijegyet egy adott filmre. A célunk az, hogy maga a felület egyszerű és könnyedén kezelhető legyen a felhasználó számára, illetve mindig az aktuális filmek közül lehessen választani

Nem az a célünk, hogy ez az oldal legyen a legnépszerűbb, csak szeretnék az emberek számára több lehetőséget is adni, hogy ne csak egy webhelyről lehessen mozijegyeket vásárolni. Tegyük fel, hogy a cinemacity.hu weboldala valamilyen okból kifolyólag nem érhető el és szükségünk van egy másik weboldalra, ahol szintén biztonságosan tudunk vásárolni jegyeket. 

##**Üzleti folyamatok modellje**
###Üzleti Szereplők

Foglaló: Ez az alapértelmezett felhasználó. Ő tud filmeket keresni, időpontokat keresni és az időponthoz rendelt jegyeket vásárolni.
Menedzser: Az ő feladata, hogy frissítse a műsor listát és a hozzájuk tartozó időpontokat.
Admin: Ő felel a weblap karbantartására.

##Üzleti folyamat
Fogalási folyamat:
  1.Bejelentkezés
  2.Filmek keresése
  3.Megfelelő időpont kiválasztása az adott filmhez
  4.Ülőhely kiválasztása a szabad helyek közül
  5.Az ülőhely foglalása
  6.Tovább a vásárlásra

Vásárlási folyamat:
  1.A foglalt jegy kosárba rakása
  2.További jegyek vásárlása/hozzá adása
  3.A kiválasztott jegyek megvétele online banki tranzakcióval
  4.Sikeres vásárlás esetén egy megerősítő e-mail küldése
  
Menedzselési folyamat:


##Tesztterv##

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
  


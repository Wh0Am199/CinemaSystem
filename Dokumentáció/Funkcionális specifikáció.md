# CinemaSystem Funkcionális specifikáció

## **Jelenlegi helyzet**
A minennapokban a mozijegy foglalás szinte csak egy oldalon érhető el ez pedig nem más mint a https://cinemacity.hu. Ez a egy legismertebb magyar eredetű weboldal van ami monopol helyzetet élvez itthon.

## **A rendszer célja és nem céljai**

Az a tervünk, hogy egy olyan megbízható weboldalt készítsünk amivel könnyedén vásárolhatunk mozijegyet egy adott filmre. A célunk az, hogy maga a felület egyszerű és könnyedén kezelhető legyen a felhasználó számára, illetve mindig az aktuális filmek közül lehessen választani

Nem az a célünk, hogy ez az oldal legyen a legnépszerűbb, csak szeretnék az emberek számára több lehetőséget is adni, hogy ne csak egy webhelyről lehessen mozijegyeket vásárolni. Tegyük fel, hogy a cinemacity.hu weboldala valamilyen okból kifolyólag nem érhető el és szükségünk van egy másik weboldalra, ahol szintén biztonságosan tudunk vásárolni jegyeket. 

## **A rendszerre vonatkozó külső megszorítások**

1. A mozi területére való belépéssel és/vagy a mozijegy lefoglalásával, megvásárlásával a mozilátogató tudomásul veszi és elfogadja a jelen Házirendben foglaltakat.

2. Jelen Házirend legalább egy példánya a mozi területén bárki által látható helyen kifüggesztésre kerül illetve az aktuális házirend a www.foglalj.hu weboldalon is megtalálható. A mozi fenntartja a jogot a jelen Házirend módosítására. A változásról és annak hatályba lépésének idejéről a www.foglalj.hu oldal ad tájékoztatást.

3. Minden, a Házirendben nem tárgyalt jogi vonatkozással kapcsolatban a magyarországi törvényeket és a magyarországi hatóságok döntéseit tartjuk irányadónak.

4. A magyar törvényi jogszabályok a Magyarországra kerülő filmeket korhatár besorolás alá kötelezik. A mozi ajánlja, de nem kötelezheti a programban feltüntetett korhatárjelölések szem előtt tartását, különösen kiskorú nézőink esetében.

5. A látogatók teljes mértékben felelősséget vállalnak az általuk kísért gyermekekért, a gyermekek időbeni tájékoztatásáért a mozi Házirendjéről és annak betartásáért.

 6. Belépőjegyet minden látogatónk köteles váltani kortól, foglalkozástól és minden egyéb tényezőtől függetlenül (kicsi gyermekek, felnőtt, diák).

7. A mozijegy az előadás kezdete előtt 30 perccel válik érvényessé, az előadás végével érvénytelenné.  A mozi területe és szolgáltatásai az érvényes mozijeggyel rendelkező vendégek számára vannak fenntartva.  A mozi területén érvényes mozijegy nélkül tartózkodókat a mozi személyzete a moziból eltávolíthatja.

8. A termekbe és a lobby-ba kizárólag az adott vetítésre érvényes mozijeggyel, legkorábban az előadás kezdete előtt 10 perccel lehet bemenni, amennyiben máshogy a mozi személyzete nem rendelkezik.

9. A látogatók a mozijegyükön feltüntetett sor és székszámnak megfelelő helyen kötelesek helyet foglalni, és jegyüket illetve blokkjukat az előadás végéig megőrizni.

Amennyiben valamilyen okból kifolyólag a látogató nem tudja elfoglalni a mozijegyén feltüntetett helyet, akkor kérje a mozi személyzetének segítségét, és kövesse a tőlük kapott eligazítást.

10. A mozitermekbe személyenként csak 1 csomag vihető be. Csomagmegőrzés a mozi területén nem vehető igénybe. A csomagot úgy kell elhelyezni, hogy a közlekedő folyosók szabadon maradjanak.

## **Követelmény lista**
### Követelmény csoportok
- A : admin felületre vonatkozó követelmények
- U :  userre vonatkozó követelmények

### Funkcionális követelmények
Csoport azonosító | Követelmény azonosító | Leírás
----------|---------|-----
A| A_login | admin bejelentkezési felület
A| A_moderate | admin lehetőségek jegyfoglalások módosítására, törlésére
A| A_supervise | basic és approved userek felülvizsgálatának lehetősége
U| u_browse | mozi helyszín böngészése
U| u_search | dátum és filmvetítés keresése
U| u_reserve | kiválasztott film lefoglalása
U| u_purchase | jegyvásárlás
U| u_cancel | jegyfoglalás visszamondása
U| u_delete | jegy törlése


### Nem-funkcionális követelmények
Követelmény azonosító | Leírás
----------------------|-------
passw_enc | jelszavak titkosítása
user_data_scope | bármely user csak a saját adataihoz fér hozzá
anonym_rating | a jegyfoglalások értékelése 






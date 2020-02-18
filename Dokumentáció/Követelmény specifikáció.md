# CinemaSystem követelményspecifikáció
## **Jelenlegi helyzet**
A mindennapokban a mozijegy foglalás szinte csak egy oldalon érhető el, ez pedig nem más mint a  https://cinemacity.hu. Ez az egy legismertebb magyar eredetű weboldal van ami monopolhelyzetet élvez itthon. 


## **Jelenlegi üzleti folyamatok modellje**
### Felhasználók jegyvásárlása
1. Felkeres egy keresőmotoron egy jegyfoglaló weboldalt
2. Rákeres az adott filmre ahova jegyet szeretne vásárolni, vagy az oldalon böngészik a lehetőségek közül
3. Kiválasztja az elérhető időpontok közül a megfelelőt
4. Kiválasztja a sor és oszlop által meghatározott helyet
5. Megadja a foglaláshoz szükséges adatokat
6. A megadott e-mail címre küldött visszaigazolást elfogadja a felhasználó
7. A fizetés módjától függően fizet

## **Igényelt üzleti folyamatok modellje**
1. Egy olyan szoftver fejlesztése amely segítségével bárhonnan intézhető a jegy vásárlás, valamint foglalás.
2. Segítségével könnyen nyomon követhető a jelenleg lefoglalt helyek száma, helye és ideje.
3. Biztonságosan intézhető banki átutalás, esetleg bevásárlókosár használata.
4. Használata regisztrációhoz között, az ügyfél fenntartja a jogot, hogy a foglalásokat és vásárlásokat bármikor megszüntetheti, így admin oldal készítése is elvárt.

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


## **Fogalom szótár**
- admin: 
	- Adminisztrátor, mindenre van ráhatása, bármit módosíthat, szabad keze van az alkalmazás egésze felett.
- user:
	- Felhasználó, aki csak használja az alkalmazás nyújtotta lehetőségeket, tud mozijegyet foglalni.
- approved cinema:
	- Olyan mozi, amely szerepel a jegyvásárlási listajegyzékben. Ha szerepel a listában akkor ő automatikusan approved.
- approved movie:
	- Jóváhagyott mozifilmek amelyek vetítésre fognak kerülni.
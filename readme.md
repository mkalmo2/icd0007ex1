### 1\. Ülesanne (ex1.php)

Kirjutage faili `ex1.php` kood, mis loeb mitu korda esineb number (mitte sõne) 3 `$numbers` listis ja väljastab tulemuse kujul "found it \<mitu korda\> times". Ärge kasutage olemasolevaid funktsioone vaid kirjutage kood ise (`for` tsükkel).

### 2\. Ülesanne (ex2.php)

Kirjutage faili `ex2.php` funktsioon `isInList($list, $elementToBeFound)`, mis ütleb kas listis on selline element või mitte.

  * `isInList([1, 2, 3], 2)` tagastab `true`.
  * `isInList([1, 2, 3], 4)` tagastab `false`.
  * `isInList([1, 2, 3], '2')` tagastab `false`.

Ärge kasutage olemasolevaid funktsioone vaid kirjutage kood ise (`for` tsükkel).

**NB\!**
Kui Php'st printida väär väärtus (`false`), siis ei ole väljundist midagi näha.

```php
print(false); // tulemust pole välundist näha
var_dump(false);  // trükitakse "bool(false)"
```

### 3\. Ülesanne (ex3.php)

Kirjutage faili `ex3.php` funktsioon, mis teisendab listi sõne kujule, milles on elemendid komaga eraldatud. `listToString([1, 2, 3])` tagastab `"[1, 2, 3]"`. Kasuks võib tulla funktsioon `join()`.

### 4\. Ülesanne (ex4.php)

Kirjutage lõpuni failis `ex4.php` olev funktsioon `stringToIntegerList()`, mis peaks tegema sõne kujul olevast listist numbrite listi. `"[1, 2, 3]"` -\> `[1, 2, 3]`

Kasuks võivad tulla funktsioonid:

  * `str_replace()` eemaldab sõnest alamsõne.
  * `explode()` teeb sõne osadeks.
  * `intval()` teisendab sõne täisarvuks.

### 5\. Ülesanne (ex5.php)

Failis `ex5.php` on näidisandmed puuviljade ja nende kaalu kohta. Kirjutage lõpuni failis `ex5.php` olev funktsioon `getAverageWeightsByType()`. See võtab sisse andmed näidatud kujul ja tagastab sõnastiku, mille võtmeteks on puuvilja nimetus (`type`) ja väärtuseks sisendandmete kaalude keskmine väärtus.

Näiteks, kui sisend oli:

```php
[['type' => 'apple', 'weight' => 1],
 ['type' => 'apple', 'weight' => 3],
 ['type' => 'orange', 'weight' => 1.2]]
```

siis tulemus on `['apple' => 2, 'orange' => 1.2]`.

Keskmine väärtus on ümardatud kahe kohani pärast koma. Kasuks võivad tulla Php funktsioonid `round()`, `array_sum()` ja `count()`.

### 6\. Ülesanne (ex6.php)

Aadressilt [https://www.ilmateenistus.ee/kliima/ajaloolised-ilmaandmed/](https://www.ilmateenistus.ee/kliima/ajaloolised-ilmaandmed/) leiab ilmajaamade vaatlusandmed xlsx formaadis. Eesmärk on nende andmete põjal mõned väärtused arvutada. Kuna Php ei oska ilma väliste teekideta `xlsx` faili lugeda, tuleks fail `csv` kujule teisendada. Selleks sobib nt. LibreOffice Calc või MS Excel. See samm on teie eest ära tehtud.

Failis `data/temperatures-sample.csv` on lühendatud näidis. Selles failis on ka andmeid, mis pole vajalikud. Teie ülesanne on kirjutada programm, mis teeb uue faili vaid vajalike andmetega.

Vajalikud andmed on:

  * aasta (veerg 0)
  * kuu (veerg 1)
  * päev (veerg 2)
  * tund (veerg 3)
  * temperatuur (veerg 9)

Algandmetes on tunni väärtuses ka minutid (nt. ":00"), mis tuleb eemaldada. Lisaks huvitavad meid ainult aastad 2004 ja 2022. Tööga on alustatud failis `ex6.php`.

### 7\. Ülesanne (ex7.php)

Failis `data/temperatures-filtered.csv` on temperatuuri andmed aastatest 2021-2023 eelmises ülesandes kirjeldatud kujul. Kirjutage faili `ex7.php` funktsioon `getDaysUnderTemp()`, mis võtab sisendiks aasta ja temperatuuri ning väljastab, mitu päeva antud aastal on temperatuur olnud võrdne või alla etteantud temperatuuri. Kuna andmed on tundide kohta, leidke tundide arv ja jagage see 24-ga. Näiteks `getDaysUnderTemp(2021, -10)` väljastab `12.67`.

Kasuks võivad tulla funktsioonid `intval()`, `floatval()` ja `round()`. Kuna arvutus tehakse suure hulga andmete pealt, on manuaalne kontroll aeganõudev. Kui saate teistsuguse tulemuse, kasutage silumiseks väiksemat andmehulka, näiteks faili `data/temperatures-debug.csv`.

### 8\. Ülesanne

Kirjutage funktsioon `getDaysUnderTempDictionary()`, mis võtab sisendina temperatuuri ja tagastab sõnastiku, mille võtmeteks on aastad ja väärtusteks päevade arv. Päevade arv arvutatakse eelmises ülesandes määratud reeglite järgi.

Lisaks kirjutage funktsioon `dictToString()`, mis teisendab sõnastiku sõne kujule.
Tulemuse näide: `"[2021 => 12.67, ... 2023 => 4.63]"`.

### 9\. Testimine ja esitamine

Ülesannete esitamiseks tehke esmalt projekti 1. osa, mille kirjelduse leiate Moodle'ist. Seejärel kopeerige kogu kood oma projekti kataloogi `ex1`. Ärge kopeerige `.git` ja `.idea` katalooge.

Enne esitamist on soovitatav automaattestid enda arvutis käivitada, et vigade parandamine oleks mugavam.
Testid leiate aadressilt [https://github.com/mkalmo2/icd0007tests](https://github.com/mkalmo2/icd0007tests). Kloonige see projekt oma arvutisse. See on eraldi projekt ja ei lähe teie reposse. Soovi korral võite selle repo enda konto alla importida.

Selle harjutustunni testid on failis `ex1.php`. Testide käivitamiseks pange selles failis olev kood käima. Et testid teie koodi üles leiaksid, määrake failis `ex1.php` konstandi `PROJECT_DIRECTORY` väärtuseks teie projekti asukoht arvutis.

### 10\. Lõpetamine

  * `Commit`'ige muudatused ja `push`'ige need Github'i.
  * Lisage `commit`'ile `tag` `ex1`.
  * Veenduge tulemuste lehelt, et kõik õnnestus.

-----

**Seletused ja lahendused (1-4):** [https://youtu.be/jAMRi8gucgk](https://youtu.be/jAMRi8gucgk)
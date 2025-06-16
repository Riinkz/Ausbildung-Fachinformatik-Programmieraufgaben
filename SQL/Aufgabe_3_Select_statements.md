```mySQL
mysql> select * from Wohnung;
+------------+--------------+-------------+-----------+-----------+
| WohnungsNr | AnzahlRäume  | Wohnfläche  | Kaltmiete | Vermietet |
+------------+--------------+-------------+-----------+-----------+
|          1 | 3            |        67.3 |       730 | 1         |
|          2 | 4            |        80.5 |       880 | 0         |
|          3 | 5            |          99 |      1200 | 1         |
|          4 | 3            |        71.8 |       940 | 1         |
|          5 | 5            |         120 |      1400 | 0         |
|          6 | 2            |        45.8 |       500 | 0         |
|          7 | 2            |        46.2 |       490 | 1         |
|          8 | 4            |        85.4 |       795 | 0         |
|          9 | 4            |        85.9 |       990 | 1         |
|         10 | 3            |        71.5 |       890 | 0         |
+------------+--------------+-------------+-----------+-----------+
10 rows in set (0,00 sec)

mysql> SELECT WohnungsNr
    -> FROM Wohnung
    -> WHERE AnzahlRäume >= 3 AND Kaltmiete < 1000;
+------------+
| WohnungsNr |
+------------+
|          1 |
|          2 |
|          4 |
|          8 |
|          9 |
|         10 |
+------------+
6 rows in set (0,00 sec)

mysql> SELECT WohnungsNr, Wohnfläche
    -> FROM Wohnung
    -> WHERE Wohnfläche BETWEEN 50 AND 100
    -> ORDER BY Wohnfläche DESC;
+------------+-------------+
| WohnungsNr | Wohnfläche  |
+------------+-------------+
|          3 |          99 |
|          9 |        85.9 |
|          8 |        85.4 |
|          2 |        80.5 |
|          4 |        71.8 |
|         10 |        71.5 |
|          1 |        67.3 |
+------------+-------------+
7 rows in set (0,00 sec)

mysql> SELECT AVG(Wohnfläche) AS Durchschnittswohnfläche
    -> FROM Wohnung;
+--------------------------+
| Durchschnittswohnfläche  |
+--------------------------+
|                    77.34 |
+--------------------------+
1 row in set (0,01 sec)

mysql> SELECT MIN(Kaltmiete) AS NiedrigsteKaltmiete
    -> FROM Wohnung
    -> WHERE AnzahlRäume = 4;
+---------------------+
| NiedrigsteKaltmiete |
+---------------------+
|                 795 |
+---------------------+
1 row in set (0,00 sec)

mysql> SELECT COUNT(*) AS FreieWohnungen
    -> FROM Wohnung
    -> WHERE Vermietet = '0';
+----------------+
| FreieWohnungen |
+----------------+
|              5 |
+----------------+
1 row in set (0,01 sec)
```

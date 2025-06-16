```mySQL

mysql> CREATE DATABASE Hardwareverwaltung;
Query OK, 1 row affected (0,00 sec)

mysql> use Hardwareverwaltung
Database changed
mysql> CREATE TABLE monitor(MonitorID int NOT NULL primary key  Auto_Increment, Name text, Preis double DEFAULT NULL, Größe double DEFAULT NULL);
Query OK, 0 rows affected (0,03 sec)

mysql> INSERT INTO monitor VALUES (1,'24MB56HQ-B',240,23.8),(2,'U28E590D',233,28),(3,'VS278H',192,27),(4,'HD2700',300,27),(5,'V176Lbmd',120,17),(6,'LS34J552WQUXEN',360,34),(7,'E2783QSU-B1',249,27),(8,'BL702A',135,17),(9,'U2417H',354,24),(10,'GW2480',121,24),(11,'VX3276-2K-MHD',239,32),(12,'XB2283HS-B3',500,22),(13,'MR17S',70,17),(14,'G276HLLbmidx',156,27);
Query OK, 14 rows affected (0,02 sec)
Records: 14  Duplicates: 0  Warnings: 0

mysql> INSERT INTO monitor (Name, Preis, Größe) VALUES ('UW3420K', 543, 34);
Query OK, 1 row affected (0,01 sec)

mysql>
mysql> UPDATE monitor SET Preis = Preis * 0.95 WHERE Größe = 27;
Query OK, 4 rows affected (0,01 sec)
Rows matched: 4  Changed: 4  Warnings: 0

mysql> UPDATE monitor SET Name = 'HD2771' WHERE MonitorID = 4;
Query OK, 1 row affected (0,01 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE monitor SET Preis = NULL WHERE MonitorID = 12;
Query OK, 1 row affected (0,01 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> DELETE FROM monitor WHERE Größe = 17;
Query OK, 3 rows affected (0,01 sec)

mysql> SELECT * FROM monitor
    -> ;
+-----------+----------------+--------------------+---------+
| MonitorID | Name           | Preis              | Größe   |
+-----------+----------------+--------------------+---------+
|         1 | 24MB56HQ-B     |                240 |    23.8 |
|         2 | U28E590D       |                233 |      28 |
|         3 | VS278H         | 182.39999999999998 |      27 |
|         4 | HD2771         |                285 |      27 |
|         6 | LS34J552WQUXEN |                360 |      34 |
|         7 | E2783QSU-B1    | 236.54999999999998 |      27 |
|         9 | U2417H         |                354 |      24 |
|        10 | GW2480         |                121 |      24 |
|        11 | VX3276-2K-MHD  |                239 |      32 |
|        12 | XB2283HS-B3    |               NULL |      22 |
|        14 | G276HLLbmidx   |              148.2 |      27 |
|        15 | UW3420K        |                543 |      34 |
+-----------+----------------+--------------------+---------+
12 rows in set (0,00 sec)

```

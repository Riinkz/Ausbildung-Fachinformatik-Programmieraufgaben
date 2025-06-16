## 1. Tabelle anlegen

Zuerst erstellen wir eine Datenbank mit

```mySQL
CREATE DATABASE myDatabase;
USE myDatabase;

CREATE TABLE Gewaesser (
    GewNr INT PRIMARY KEY,
    Name VARCHAR(100),
    Laenge DECIMAL(10, 2),
    Breite DECIMAL(10, 2)
);
```

Nun können wir uns die Tabelle anzeigen lassen

```mySQL
DESCRIBE Gewaesser;
```

## 2. Tabelle bearbeiten

```mySQL
ALTER TABLE Gewaesser
ADD COLUMN Tiefe INT;
```

## 3. Datentyp ändern

```mySQL
ALTER TABLE Gewaesser
MODIFY COLUMN Tiefe FLOAT;
```

## 4. Attribut löschen

```mySQL
ALTER TABLE Gewaesser
DROP COLUMN Tiefe;
```

## 5. Tabelle löschen

```mySQL
DROP TABLE Gewaesser;
```

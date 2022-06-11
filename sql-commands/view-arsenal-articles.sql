/* 
View:

- View'lar sanal tablo gibidirler.
- Kendi seçtiðimiz kriterler ve sorgulara göre oluþturulurlar. 
- Veri tabanýnda fiziksel olarak mevcut olan tablolardaki özel sorgularý view ile yaparýz.

*/

/* Arsenal Articles */
CREATE VIEW ArsenalArticles AS
SELECT * FROM sports
WHERE baslik = 'Arsenal';

SELECT * FROM ArsenalArticles;
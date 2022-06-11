/* 
View:

- View'lar sanal tablo gibidirler.
- Kendi seçtiðimiz kriterler ve sorgulara göre oluþturulurlar. 
- Veri tabanýnda fiziksel olarak mevcut olan tablolardaki özel sorgularý view ile yaparýz.

*/
CREATE VIEW LiverpoolArticles AS
SELECT * FROM sports
WHERE baslik = 'Liverpool';

SELECT * FROM LiverpoolArticles;

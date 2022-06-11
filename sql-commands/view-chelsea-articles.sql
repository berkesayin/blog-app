/* 
View:

- View'lar sanal tablo gibidirler.
- Kendi seçtiðimiz kriterler ve sorgulara göre oluþturulurlar. 
- Veri tabanýnda fiziksel olarak mevcut olan tablolardaki özel sorgularý view ile yaparýz.

*/

/* Chelsea Articles */
CREATE VIEW ChelsaeArticles AS
SELECT * FROM sports
WHERE baslik = 'Chelsea';

SELECT * FROM ChelsaeArticles;
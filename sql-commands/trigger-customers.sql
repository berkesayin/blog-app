/*
Triggers: 

- Bir tabloda gerçekleþen sorgu sonucuna göre baþka bir sorgunun çalýþmasýný saðlayan sql komutudur.
- Procedures'den farký, kullanýcý tarafýndan tetiklenmemesidir. 
- Trigger, 2 þekilde çalýþýr; ilki ana sorguyu engellemek(instead of), 
ikincisi ise birlikte çalýþmak(after-for) için. 

- Procedure'de biz CALL ile çaðýrýrýz, triggers'larda ise otomatik olarak sorgu tetiklenir ve çalýþýr.

- After; ilgili iþlem bittikten sonra gerçekleþen komut, for ise ilgili iþlem devam ettiði sýrada
gerçekleþen komut. 

*/

CREATE TRIGGER count_all_members
    AFTER INSERT on customersinfo FOR EACH ROW
    BEGIN
        SELECT * FROM customersinfo;
    end;


INSERT INTO customersinfo (id, name, surname, city, email, password, gender)
VALUES ('50', 'Burak', 'Keser', 'Istanbul', 'burakkeser@gmail.com', 'burakkeser', 'Man');
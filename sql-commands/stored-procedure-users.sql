/* 
Stored Procedures: 

Bazý durumlarda sorgularýmýz uzayabilir, veya sýklýkla o uzun sorgularý tekrar tekrar kullanmamý
gerekebilir, bu durumda Stored Procedure olayý bizi uzun sorgularý tekrar tekrar yazmaktan kurtarýr.
Kodlarýmýzi sorgularýmýz daha düzenli hale gelir. 

Ayrýca bir procedure yazdýktan sonra da üzerinde deðiþiklik yapaibliriz, güncelleyebiliriz ve farklý
þekillerde kullanabiliriz. Ve de açýk olan sql ifadelerine göre daha güvenli yapýdadýr. 

- System Stored Procedures
- Extended Stored Procedures
- User-Defined Stored Procedure
- CLR Stored Procedure


*/

CREATE PROCEDURE UsersFromIstanbul()
BEGIN
SELECT * FROM customersinfo WHERE city='Istanbul';
END

CALL UsersFromIstanbul()
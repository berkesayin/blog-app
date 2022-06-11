CREATE PROCEDURE PasiveArticles()
BEGIN
    SELECT * FROM sports WHERE aktif='0';
END

CALL PasiveArticles();
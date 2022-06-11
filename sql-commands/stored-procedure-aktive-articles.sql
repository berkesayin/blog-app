CREATE PROCEDURE AktiveArticles()
BEGIN
    SELECT * FROM sports WHERE aktif='1';
END

CALL AktiveArticles()
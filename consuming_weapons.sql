--this works
SELECT Own 
FROM greatsword 
WHERE Own= 1 
AND name=(SELECT consumes 
			FROM greatsword 
			WHERE id = 2)

			
--this doesn't work
UPDATE greatsword 
SET Own = 0 
WHERE Own= 1 
AND name=(SELECT consumes 
			FROM greatsword
			WHERE id = 2)
--#1093 - You can't specify target table 'greatsword' for update in FROM clause 


<pre style="text-align: left;">
    CREATE TABLE INGREDIENTE (
        ingrediente_id	    INT NOT NULL AUTO_INCREMENT,
        catingrediente_id   INT NOT NULL,
        ingrediente_name	VARCHAR	(50) NOT NULL,
        
        PRIMARY KEY (ingrediente_id),
        FOREIGN KEY (catingrediente_id) 
            REFERENCES CATEGORIA_INGREDIENTE (catingrediente_id) 
            ON UPDATE CASCADE ON DELETE CASCADE
    ); 
</pre>
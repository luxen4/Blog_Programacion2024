<pre style="text-align: left;">             
    CREATE TABLE PIZZA (
        pizza_id	        INT NOT NULL AUTO_INCREMENT,
        especialidad_id     INT NOT NULL,
        pizza_name		    VARCHAR	(10) NOT NULL,
        
        PRIMARY KEY (pizza_id),
        FOREIGN KEY (especialidad_id) 
          REFERENCES ESPECIALIDAD (especialidad_id) 
          ON UPDATE CASCADE ON DELETE CASCADE
    );
</pre>
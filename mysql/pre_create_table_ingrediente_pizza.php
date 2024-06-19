<pre style="text-align: left;">
CREATE TABLE INGREDIENTE_PIZZA (
    ingrepizza_id	INT NOT NULL AUTO_INCREMENT,
    ingrediente_id	INT NOT NULL,
    pizza_id        INT NOT NULL,
    PRIMARY KEY (ingrepizza_id),
    
    FOREIGN KEY (ingrediente_id) REFERENCES INGREDIENTE (ingrediente_id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (pizza_id) REFERENCES PIZZA (pizza_id) ON UPDATE CASCADE ON DELETE CASCADE
);   
    
</pre>
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

from selenium import webdriver
from chromedriver_py import binary_path # esto obtendrá la variable de ruta


# Configuración del WebDriver (asegúrate de tener el chromedriver en el PATH o proporciona la ruta completa)
svc = Service(executable_path=binary_path)
driver = webdriver.Chrome(service=svc)

# Credenciales de inicio de sesión
usuario = 'superlaya50@gmail.com'
contraseña = 'alberite1'


try:
    # Abre la página web
    driver.get("https://www.amazon.es/Acer-Nitro-AN515-46-R082-Ordenador-Operativo/dp/B0CN78NHDF/ref=pd_ci_mcx_pspc_dp_d_2_i_2?pd_rd_w=qXemV&content-id=amzn1.sym.f11fe75a-7397-412e-9b90-7e09bf6f5c14&pf_rd_p=f11fe75a-7397-412e-9b90-7e09bf6f5c14&pf_rd_r=HCR2XZ42S8Z77THNY8YB&pd_rd_wg=L6lAp&pd_rd_r=9ca0986d-b443-4861-b62f-d9631f1725bf&pd_rd_i=B0CN78NHDF")

    # Espera hasta que el botón de rechazar cookies esté presente y seleccionable (ajusta el selector según sea necesario)
    wait = WebDriverWait(driver, 10)
    boton_rechazar_cookies = wait.until(EC.element_to_be_clickable((By.ID, 'sp-cc-rejectall-link')))

    # Haz clic en el botón para rechazar las cookies
    boton_rechazar_cookies.click()

    # Espera hasta que el elemento esté presente y seleccionable (puedes ajustar el selector según tus necesidades)
    boton_generar = wait.until(EC.element_to_be_clickable((By.ID, 'amzn-ss-text-link')))

    # Haz clic en el botón para generar el código de producto
    boton_generar.click()

    # Espera un momento para que el código se genere (ajusta el tiempo según sea necesario)
    time.sleep(5)

    # Obtén el código de producto generado (ajusta el selector según tus necesidades)
    codigo_producto = driver.find_element(By.ID, 'ID_DEL_ELEMENTO_CODIGO').text
    print("Código de Producto Generado:", codigo_producto)

finally:
    # Cierra el navegador
    driver.quit()
    
    
'''
    CREATE TABLE ESPECIALIDAD (
        especialidad_id		INT NOT NULL AUTO_INCREMENT,
        especialidad_name	VARCHAR	(50) NOT NULL,
        PRIMARY KEY (especialidad_id)
    );

    INSERT INTO especialidad (especialidad_name)
    VALUES   
    (Clazzicas),(Deluxes);



    CREATE TABLE PIZZA (
        pizza_id	        INT NOT NULL AUTO_INCREMENT,
        especialidad_id     INT NOT NULL,
        pizza_name		    VARCHAR	(10) NOT NULL,
        
        PRIMARY KEY (pizza_id),
        FOREIGN KEY (especialidad_id) REFERENCES ESPECIALIDAD (especialidad_id) ON UPDATE CASCADE ON DELETE CASCADE
    );";
    
    INSERT INTO pizza (pizza_name, especialidad_id) VALUES   
    
    ('Cuatro quesos', 1), ('Carbonara', 1), ('Campiña', 1), 
    ('Hawaiana plus', 1), ('Tony Peperoni', 1), ('Pollo a la parrilla', 1),
    ('Barbacoa', 1), ('Pecado carnal', 1), ('Extrabaganza', 1),
    
    ('Tony Vergeroni', 2), ('Vegiña', 2), ('Varvacoa Heura', 2),
    ('Alabama Pulled Pork', 2), ('Texax BBQ Crispy', 2),
    ('Bufalo Chicken', 2), ('Parmesana Carbonara', 2)
    ('Cheesix', 2), ('Cabramelizada', 2), ('Chemozza BBQ', 2),
    ('Cremozza estilo bourbon', 2), ('Hawaiana Crispy', 2);
    
    
    
    
    
    CREATE TABLE INGREDIENTE_PIZZA (
        ingrepizza_id	INT NOT NULL AUTO_INCREMENT,
        ingrediente_id	INT NOT NULL,
        pizza_id        INT NOT NULL,
        PRIMARY KEY (ingrepizza_id),
        
        FOREIGN KEY (ingrediente_id) REFERENCES INGREDIENTE (ingrediente_id) ON UPDATE CASCADE ON DELETE CASCADE,
        FOREIGN KEY (pizza_id) REFERENCES PIZZA (pizza_id) ON UPDATE CASCADE ON DELETE CASCADE
    );   
    
    
    
    
    CREATE TABLE CATEGORIA_INGREDIENTE (
        catingrediente_id		INT NOT NULL AUTO_INCREMENT,
        catingrediente_name	VARCHAR	(50) NOT NULL,
        PRIMARY KEY (catingrediente_id)
    );   
    
    INSERT INTO CATEGORIA_INGREDIENTE (catingrediente_id, catingrediente_name)
    VALUES 
    (1, 'Salsas'), (2, 'Quesos'),
    (3, 'Cremas'), (4, 'Vegetales'), (5, 'Carnes');
    


    CREATE TABLE INGREDIENTE (
        ingrediente_id		INT NOT NULL AUTO_INCREMENT,
        catingrediente_id   INT NOT NULL,
        ingrediente_name	VARCHAR	(50) NOT NULL,
        
        PRIMARY KEY (ingrediente_id),
        FOREIGN KEY (catingrediente_id) REFERENCES CATEGORIA_INGREDIENTE (catingrediente_id) ON UPDATE CASCADE ON DELETE CASCADE
    );  
    
    INSERT INTO INGREDIENTE (catingrediente_id, ingrediente_name)
    VALUES   

    (1,'Salsa de tomate'), (1,'Salsa de tomate o crema fresca'),
    (1,'Salsa barbacoa original'), (1,'Salsa Barbacoa original por encima'),
    (1,'Salsa Bourbon por encima'),
    (1,'Salsa Momay'), (1,'Salsa Ranchera'), (1,'Salsa BBK'),

    (2,'Queso 100% mozzarella'),
    (2,'Chedar'),
    (2,'Emmental'),
    (2,'Gorgonzola'),
    (2,'Queso de cabra'),
    (2,'Extra de queso 100% mozzarella'),
    (2,'Queso chedar rayado por el borde'),
    (2,'Parmesano'),
    (2,'VeggiCheese Violife'),

    (3,'Crema fresca'),

    (4,'Champiñón'),
    (4,'Cebolla'),
    (4,'Cebolla caramelizada'),
    (4,'Pimiento verde'),
    (4,'Aceitunas negras'),
    (4,'Tomate natural'),
    (4,'Doble de pepperoni'),
    (4,'Maiz'),
    (4,'Veggeroni'),

    (5,'Pollo a la parrilla'),
    (5,'Doble de pollo a la parrilla'),
    (5,'Pollo bufalo con un toque picante'),
    (5,'Pulled Pork'),
    (5,'VeggiChiken de HEURA'),
    (5,'Bacon'),
    (5,'Bacon crispy'),
   
    (5,'Carne de vacuno'),
    (5,'York');







Hacer interfaz php que haga ingredientes


    
    
    
    '''
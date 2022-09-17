# Comunicacion serial

## 💙 ***Tipos de comunicacion***

- Segun la cantidad de bits que se envia
    - **COMUNICACION SERIAL**
    - **COMUNICACION EN PARALELO**
- Segun el sentido de la trasnmicion
    - **UNIDIRECCIONAL**
    - **BIDIRECCIONAL**
        - Half duplex: En un sentido por vez
        - Full duplex: Comunicaciond edispositivos en ambis sentidos
            - Harware full duplex pero funciona como half duplex por ejemplo el celular
- Dependiende senal de reloj
    - **SINCRONA**
        - Reloj
    - **ASINCRONA**
        - No hay reloj

**OJO**

- **BUS:** Grupo de conductores paralelos que interconectan dos o mas dispositivos en una red
- **BUS SERIAL:** Bus para comunicacion serial entre dos o mas dispositivos
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled.png)
    
    - **BUSES SERIALES SINCRONOS**
        
        ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%201.png)
        
        - Los dos primeros se usan mayormente para la conexion de microcontroladores con otros dispositivos
    - **BUSES SERIALES ASINCRONOS**
        
        ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%202.png)
        
- **BAUDIOS Y BITS POR SEGUNDO(BPS)**
    - (ROJO-Rango de tension que representara un numero del cero al tres y estaran en binario )
    - Cualquier tension de que este por ejemplo en el rango de 0 a 1 voltio se interpretada como 00
        - En el ejemplo 1 vemos una variacion de senal de 10 baudios

![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%203.png)

- En el ejemplo 2  vemos que se trasmite 20 bits por segundo, es decir 20 bps(tenemos que contar el numero total de bits en el grafico )

![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%204.png)

![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%205.png)

- En circuitos digitales se presenta el siguiente esquema

![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%206.png)

## 💙 ***Comunicacion serial sincrona***

- La linea gnd es escencial para cerrar un circuito

![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%207.png)

- El tiempo es fijo y  es el mismo para todos y su forma de trasmision es la siguiente
    - **PASO1:**A no trasmite (linea de trasmicion en uno-estado de marca)
    - **PASO2:**Al trasmitiar un dato pone su salida en 0 para que el computador B detecte el cambio de estado (bit de arranque )
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%208.png)
    
    - **PASO3:** Se trasmiten los bits de datos del menos significativo
        - Caracter: conjunto de bits de datos
    - **PASO4:** Opcionalmente bit de paridad(es un bit que sirver para sincronizar A y B . Determinar si el dispositivo remoto está recibiendo correctamente el carácter de datos que se transmite.).
    - **PASO5:**Transmite el bit de parada. Su duracion es de 1,1 1/2, 2  bit
    - **PASO6:**Si A ya no tiene otro caracter  para trasmitir la salida se matiene como 1 sino va a generar un bit de arranque para iniciar denuevo la trasmision
- **OJO**
    - Esta descripcion del formato de la trasmicion de un caracter se llama trama
- **DURACION DE TRASMISION DE UN BIT**
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%209.png)
    
- **TIPOS DE BITS DE PARIDAD**
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2010.png)
    
    - **PARIDAD PAR (SI EL NUMERO DE 1 ES PAR EL BIT DE PARIDAD ES 1)**
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2011.png)
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2012.png)
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2013.png)
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2014.png)
    
    - **PARIDAD IMPAR(SI EL NUMERO DE 1 ES IMPAR EL BIT DE PARIDAD ES 0)**
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2015.png)
    
    - **OTRAS FORMAS DE PARIDAD**
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2016.png)
    

- **METODO ABREVIADO DE COMUNICACION SINCRONA**
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2017.png)
    
    ![Untitled](Comunicacion%20serial%20a0a841870d4f412db12c6162dd05474e/Untitled%2018.png)
# ESTRUCTURA DE UN PROGRAMA ARDUINO 
- Se dividen en 3 partes 
![estructura](estructura.png)
## DECLARACION DE CONSTANTES
- Seccion opcional donde definimos constantes para todeo el programa 
## SETUP()
- Seccion obligatoria que inclusive si no hay nada dentro de esta, debe estar incluida 
- Sus funciones son las siguientes 
    - Configuracion de los modos de trabajo de los pines
    - Inizializacion de los pines 
    - Configuracion e inicializacio nde las comunicaciones serie 
    - Inicizalizacion de variables 
## LOOP()
-  Seccion obligatoria donde se ejecuta de forma automatica una vez ejecutado el setup 
# PROGRAMACION PRACTICA 
## ENTRADAS Y SALIDAS DIGITALES 
### ``PINMODE()``
- Indicamos si un pin es de salida o entrada
> https://www.arduino.cc/reference/en/language/functions/digital-io/pinmode/

> EJEMPLO 
```arduino
    void setup()
    {
        pinMode(A1, INPUT);
        pinMode(A4, OUTPUT);
    }

```
### ``DIGITALREAD()``
- Realiza la lectura de un pin digital 
> https://www.arduino.cc/reference/en/language/functions/digital-io/digitalread/

- Puede devolver 
    
    - ``INPUT``: Si el pin esta como input puede devolver
        - ``HIGH (1)``: Encendido
        - ``LOW (0)``: Apagado
    - ``INPUT_PULLUP``: Si el pin esta como input puede devolver
        - ``LOW (0)``: Encendido
        - ``HIGH (1)``: Apagado
### ``DIGITALWRITE()``
- Escribe el valor de un pin que esta configurado como salida
> https://www.arduino.cc/reference/en/language/functions/digital-io/digitalwrite/
## ENTRADAS Y SALIDAS ANALOGICAS
### ANALOGREAD()
- A diferencia de los pines digitales(solo es 0 o 5V) el analogico trabaja en un rango de 0 a 1023 (0 a 5V)
- No son necesarios configurarlos en la sentencia pinMode porque son pines de entrada analogica
### ANALOGREADRESOLUTION()
> https://www.arduino.cc/reference/en/language/functions/zero-due-mkr-family/analogreadresolution/
### ANALOGWRITE()
- Escribe valores en un pin PWM (En otras placas puede especificar un pin especial para salida analogica)
> https://www.arduino.cc/reference/en/language/functions/analog-io/analogwrite/
### ANALOGWRITERESOLUTION()
> https://www.arduino.cc/reference/en/language/functions/zero-due-mkr-family/analogwriteresolution/

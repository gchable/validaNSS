# validaNSS
Funcion para validar un Número de Seguridad Social México.

A la fecha básicamente es solo para validar errores de dedo en la captura de formularios, con la implementación de los servicios digitales del IMSS, los números de seguridad social ya vienen a once dígitos, hace algunos años, las "hojas rosas" y carnets solo venían con 10 dígitos, nos tocaba calcular el dígito verificador.

El NSS se compone de la siguiente manera:

84-93-77-1867-8

|84|93|77|1867|8|
|:---: |:---: |:---: |:---: |:---: |
|Subdelegación que otorga el registro|Año en que se otorga el registro|Año del nacimiento del trabajador|Número interno del instituto|Dígito verficador|

## ¿Cómo se calcula el dígito verficador?
Básicamente se trata de mulplicar cada uno de los números que componen el NSS por 1 y por dos, el primer número(8) se multiplica por 1, el segundo numero(4) x 2, el tercer número(9) x 1, y así sucesivamente.

Si el resultado son dos numeros, se suman entre sí para formar un solo número, 14 sería 1 + 4 = 5.

El resultado se resta a la siguiente decena inmediato superior 70-62 = 8, el digito es 8, si es una decena el digito es 0.

![image](https://github.com/gchable/validaNSS/assets/25260189/249dc427-4874-441a-a234-85e2cf96e205)

## Referencias

https://es.wikipedia.org/wiki/Algoritmo_de_Luhn<br>
https://tarjeton-imss.net/cual-es-el-digito-verificador-en-el-imss/<br>
https://es.stackoverflow.com/questions/32023/c%C3%B3mo-validar-un-n%C3%BAmero-de-seguridad-social-nss-de-m%C3%A9xico

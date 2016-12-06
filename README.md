![](images/logo_negro.png)
# ESIT ULL Grado de Informatica

### Equipo de trabajo
* Luis David Padilla Martín
* Omar Adolfo Álvarez Hernández
* Eduardo Escobar Alberto

### Descripción
Cafetsi es una aplicación que mediante opiniones y sugerencias de otros usuarios anteriores que hayan consumido en la cafetería de la ESIT, un usuario en concreto que quiera comer en la cafetería de la facultad, pueda introducir en nuestra app alguno de los platos que se ofrezcan ese día, y mediante las opiniones ya habladas, se le recomiende del 1 al 5 (valoración mediante estrellas) consumir ese plato específico. Los usuarios de nuestra app podrán tener un perfil en la misma que además de poder ser recomendados, puedan añadir nuevos comentarios con el fin de alimentar más la base de datos, y con ello poder sacar mejores recomendaciones para los clientes de la cafetería.

### Tecnologías a usar
* JQuery Mobile es un sistema de interfaz de usuario basado en HTML5 diseñado para crear sitios web y aplicaciones sensibles que sean accesibles en todos los dispositivos de teléfonos inteligentes, tabletas y equipos de escritorio. Lo utilizamos ya que nos permitirá de una forma sencilla construir cada una de las páginas con las que contará nuestra aplicación móvil.

* Phonegap: es un especie de servidor que hará de comunicación entre el ordenador donde desarrollemos el código y el móvil, que va a ser donde podamos presentar de una manera gráfica, o lo que es lo mismo, ver el resultado final de nuestra app.

* API MonkeyLearn: es un máquina en la web que a través de un corpus dado y mediante algoritmos como el de Naive-Bayes, podrá analizar frases y determinar a que ámbito (dado por nosotros) pertenece. Lo usaremos ya que nos ayudará a introducir todos los comentarios en ella, y luego poder recomendar un plato, ya que lo clasificará usando sus propios algoritmos.

* WAMP : es un servidor que integra apache, mysql y php. Nos ayudará a poder tener una conexión cliente-servidor, introducir datos en una base de datos y mediante el php que tiene, poder usar la API de MonkeyLearn.


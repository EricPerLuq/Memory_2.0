# Memory_2.0

## Definición
Este proyecto está creado con JavaScript, PHP, HTML y CSS, todo ello conforma un juego virtual popularmente conocido como Memory o Memorama.<br>
Es un juego de mesa con una baraja de cartas específicas, cada una de ellas tienen una pareja igual. El objetivo consiste en encontrar los pares con la misma figura impresa utilizando la memoria. El número de cartas y jugadores puede variar, lo habitual es que sean 28 cartas, pero en nuestro proyecto será de 1 jugador y 8 cartas, 4 parejas. 
<br><br>
Cuando ejecutamos el juego y empezamos a jugar veremos, según el nivel, todas cartas del reverso, deberemos pulsar un par de cartas, no más, y la propia aplicación comparará si las cartas seleccionadas coinciden o no. En caso que no coincidan a los 2 segundos se darán la vuelta mostrando de nuevo el reverso y permitirá de nuevo pulsar otras 2 cartas nuevas o las mismas. Por otro lado si las cartas coinciden se quedarán mostrando el anverso y directamente se podrá pulsar una nueva pareja de cartas.<br>
En la parte superior derecha habrá un contador de intentos, contará tanto las comparaciones correctas como las erróneas.<br><br>
El juego termina en el momento en que todas las cartas están mostrando el anverso, o en caso de jugar en el modo advanced marcar las cartas que estén sin pareja y haber encontrado las parejas correspondientes.<br>
Una vez muestra la pantalla de éxito podemos volver a la pantalla de inicio o ver el ranking de puntuaciones.<br>

## Cómo ejecutar el juego del memory:
1- Crea la carpeta donde vas a descargar los archivos del juego. Usaremos como ejemplo la carpeta "Documents".<br>
2- Abre la terminal "Konsole" o la que tengas instalada.<br>
3- Accede a la carpeta usando el comando: `cd Documents`<br>
4- Clona los archivos en tu carpeta Documents con el siguiente comando: `git clone https://github.com/EricPerLuq/Memory_2.0.git Memory2`<br>
5- Ahora abriremos un servidor local. Para ello accede a la carpeta con el juego recién creada con el comando: `cd Memory2`<br>
6- Para abrir una conexión en local host ejecuta el comando: `php -S 0:8080`<br>
7- Listo! Tu servidor local ya está en marcha y con los archivos del juego cargados, ahora simplemente ves a tu navegador favorito e introduce la siguiente URL: `http://localhost:8080/`<br>

¡A DISFRUTAR DEL JUEGO!
<br><br>
Game made by: Eric Perez, Montse Paús & Pau Valls.

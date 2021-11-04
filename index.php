<?php
    session_start()
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Memory 2.0</title>           
</head>
<body>
    <div align="center">
            <img src="/imgs/titulo.png">
    </div>
    <script type="text/javascript">
        window.onload=function(){
        document.onkeydown=chars;
        var barrera= document.getElementById("barra");
        var barreraPos=barrera.getBoundingClientRect();
        colision=barreraPos.right;
    }
        var leftRight=0;
        var colision=0;
    function chars(evento){
            if (window.event) {
                evento=window.event;
                caracteres(evento.keyCode);
            }}
    function caracteres(chars){
            var carta= document.getElementById("carta");
            var cartaPos=carta.getBoundingClientRect();
            colision2=cartaPos.left;
            console.log(colision2);
            if (chars==39){
                leftRight+=1;
                document.getElementById("carta").style.marginLeft=leftRight+"px";
            }
            if (chars==37){
                leftRight+=-1;
                document.getElementById("carta").style.marginLeft=leftRight+"px";
            }
        
            if (colision==colision2) {
                carta.src="imgs/tirarcuerda.jpg"
                //carta.style.visibility="hidden";              
            }
    }
    </script>
    <?php
    echo    "<h2><span class='nombreSessionIniciada' id='nombreUsuario'>".$_SESSION["nombreUsuario"]."</span></h2>" ;
    ?>
    <div align="center">
    </div>
    <table align="center">
        <tr>
            <td class="instrucciones" rowspan="4">
                <h1><span class="casilla">INSTRUCCIONES</span></h1>
                <p>· Debes girar 2 cartas por cada turno.</p>
                <p>· Si las cartas son las mismas, sumas un punto y se quedan desbloqueadas.</p>
                <p>· Si las cartas no coinciden, tienes 2 segundos para memorizarlas antes de que se vuelvan a ocultar.</p>
                <p>· La partida acaba cuando has encontrado todas las parejas.</p>
                <p>· El tiempo y el número de intentos son ilimitados.</p>
                <a class="casilla" href="Ranking.php">RANKING</a> 
            </td>
            <td rowspan="4">
                <img class="separacion" id="barra" src="./imgs/whiteline.png">
            </td>
            <td>
                <img class="imagen" id="carta" src="./imgs/CartaPortada.png">
            </td>
        </tr>
        <tr>
            <td>
                <form action="Juego.php" method="GET">
                    <input type="checkbox" id="advanced " name="advanced" value="Advanced">Advanced
            </td>
        </tr>
        <tr>
            <td class="filaBotonJugar"> 
                <input type="radio" id="nivel1" name="level" value="1" checked>
                <label for="nivel1">Nivel 1</label>
                <input type="radio" id="nivel2" name="level" value="2">
                <label for="nivel2">Nivel 2</label>
                <input type="radio" id="nivel3" name="level" value="3">
                <label for="nivel3">Nivel 3</label>
                <input type="radio" id="nivel4" name="level" value="4">
                <label for="nivel4">Nivel 4</label>
                <input type="radio" id="nivel5" name="level" value="5">
                <label for="nivel5">Nivel 5</label>         
            </td>
        </tr>
        <tr>
            <td class="filaBotonJugar">
                    <input type="text" name="nombreUsuario" placeholder="Nombre" value="<?php echo $_SESSION['nombreUsuario']?>" required/>
                    <input class="casilla" type="submit" value="JUGAR"/>
                </form>
            </td>
        </tr>
    </table>
    <?php
    if (isset($_GET["nombreUsuario"])) {
        $Usuario=$_GET["nombreUsuario"];    
        $_SESSION['nombreUsuario']=$Usuario;    
    }
    ?>
</body>
</html>

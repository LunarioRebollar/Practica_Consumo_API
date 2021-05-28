<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Responsive + Encoding Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link href = "../css/styles.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Title -->
    <title>Consumo API con Vue.js</title>
</head>
<body>
    <div id="main">
        <center>
        <h1> Consumo API con Vue.js</h1>
        <span>
            <img src="./img/icono.png" width="65" height="65"> 
        </span>
        <br>
        <br>
        <button type = "button" id = "get-joke" @click = "fetchAPIData" class="btn btn-primary">
            Mostrar el Chiste!!
        </button>
        <br><br>
        <tr>
            <td>Vue.js  Ejemplo de uso del API</td>
        <div v-if="responseAvailable == true">
            <hr>
                <table width="80%" cellspacing="0" cellpadding="5">
                    <tr>
                        <td width=”80%” height=”70″ border=4><img src="../img/large.jpg" width="200" height="200"></td>
                        <td width=”20%” height=”70″ border=4><p>{{result}}<p></td>
                    </tr>
                </table>
            </hr>
        </div>
        </tr>
        </center>
    </div>   
</body>
<!-- Vue and Custom JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script src = "../js/script.js"></script>
</html>
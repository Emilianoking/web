<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="bon non lo so.js"></script>
    <link rel="stylesheet" href="/css/prin.css">
</head>
<body>

    <!-- questo è il corpo -->
<header align="center">
        <a href="#" class="btn"></a>
    </header>
    <nav class="fixed-navbar">
        <button class="button"><a href="#home" style="color: #fff">inicio</a></button>
        <button class="button button2"><a href="#cause" style="color: #fff">quienes somos?</a></button>
        <button class="button button3"><a href="#fasi" style="color: #fff">Precios</a></button>
        <button class="button button3"><a href="pdf.php" style="color: #fff" target="_blank">PDF</a></button>
        <button class="button button3"><a href="salir.php" style="color: #fff">Salir</a></button>

       
    </nav>

    <body>
        <div class="background-image">
            <h1>Mundo de las dos ruedas</h1>
            
        </div>   
    </body>


    

<section id="home" >
  
    <h2 style="color: #000;">¡Bienvenido!</h2> 
    <p> 
    ¡Bienvenido al Mundo de las Dos Ruedas! 🏍️ Descubre la emoción de recorrer nuevos caminos, 
    la libertad de la carretera te espera. Explora nuestra selección de motos y haz realidad tu próxima aventura. 
    ¿Estás listo para vivir la pasión sobre dos ruedas? ¡Únete al Mundo de las Dos Ruedas hoy mismo! 🌎✨ 
    #Motos #AventuraEnDosRuedas #Bienvenido
    </p>
</section>

<!--le cause-->
<section id="cause">
    <h2 style="color: #000;">Motos mas destacadas</h2>
    <h4>motos más buscadas y solicitadas por los usuarios, proporcionando información detallada sobre cada una y permitiendo a los interesados conectarse entre sí para intercambiar experiencias y consejos. </h4>
</section>

<!-- Flip Card 1 -->
<div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/H2.jpg" class="card-image" alt="Fattori biologici">
      </div>
      <div class="flip-card-back">
        <h2>Fattori biologici</h2>
        <p>Alcune persone possono avere una predisposizione genetica alla dipendenza da gioco d'azzardo, poiché possono essere più vulnerabili agli effetti gratificanti e alle reazioni chimiche nel cervello associate al gioco d'azzardo.</p>
      </div>
    </div>
  </div>
  
  <!-- Flip Card 2 -->
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/TVS Apache.jpg" class="card-image" alt="Fattori Psicologici">
      </div>
      <div class="flip-card-back">
        <h2>Fattori Psicologici</h2>
        <p>L'ansia, la depressione, lo stress e altri disturbi psicologici possono contribuire allo sviluppo della ludopatia. Il gioco d'azzardo può diventare una forma di evasione o un modo per alleviare temporaneamente i sintomi emotivi negativi.</p>
      </div>
    </div>
  </div>
  
  <!-- Flip Card 3 -->
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="img/CBR1000RR.jpg" class="card-image" alt="Fattori Ambientali">
      </div>
      <div class="flip-card-back">
        <h2>Fattori Ambientali</h2>
        <p>L'accessibilità ai giochi d'azzardo, la promozione aggressiva da parte dell'industria del gioco d'azzardo, l'influenza dei pari e la cultura del gioco d'azzardo nella società possono influenzare lo sviluppo della ludopatia.</p>
      </div>
    </div>
  </div>
  
<!--FASI-->
<!-- Formulario para Agregar Moto -->
<div class="container">
<h2>Formulario para Agregar Moto</h2>
<form action="admi/agregar_moto.php" method="post">
    
    <div class="form-group">
        <label for="nombre">Nombre de la moto:</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="cc">CC:</label>
        <input type="text" class="form-control" id="cc" name="cc">
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="text" class="form-control" id="precio" name="precio">
    </div>
    <div class="form-group">
        <label for="marca_id">ID de la Marca:</label>
        <input type="text" class="form-control" id="marca_id" name="marca_id">
    </div>
    <button style="color: #000;" type="submit" class="btn btn-primary">Agregar Moto</button>
</form>

    

</div>
<div class="container">
    <h2>Eliminar Moto</h2>
    <form action="admi/eliminar_moto.php" method="post">
        <div class="form-group">
            <label for="id_moto">ID de la Moto:</label>
            <input type="number" class="form-control" id="id_moto" name="id_moto" required>
        </div>
        <button style="color: #000;" type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta moto?')">Eliminar Moto</button>
    </form>
</div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Actualizar Moto</title>
    
</head>


<div class="container">
    <h2>Actualizar Moto</h2>
    <form action="admi/actualizar_moto.php" method="post">
        <div class="form-group">
            <label for="id_moto">ID de la Moto:</label>
            <input type="number" class="form-control" id="id_moto" name="id_moto" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nuevo Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="cc">Nueva CC:</label>
            <input type="text" class="form-control" id="cc" name="cc" required>
        </div>
        <div class="form-group">
            <label for="precio">Nuevo Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="marca_id">Nuevo ID de la Marca:</label>
            <input type="number" class="form-control" id="marca_id" name="marca_id" required>
        </div>
        <button style="color: #000;" type="submit" class="btn btn-primary">Actualizar Moto</button>
    </form>
</div>



  

<!--Sintomi-->

<section id="sintomi">
    <h2 style="color: #000;">I SIerwtewrtwersdfasfsaNTOMI</h2>
        <h4>possono includere:</h4>
</section>
        <div class="symptoms-list">
            <div class="symptom">
                <div class="symptom-icon">🤯</div>
                <div class="symptom-description">Incapacità di controllare o fermare il gioco d'azzardo.</div>
            </div>
            <div class="symptom">
                <div class="symptom-icon">🔗</div>
                <div class="symptom-description">Pensieri possessivi sul gioco d'azzardo.</div>
            </div>
            <div class="symptom">
                <div class="symptom-icon">💳</div>
                <div class="symptom-description">Aumento della frequenza e dell'importo delle scommesse per ottenere l'eccitazione desiderata.</div>
            </div>
            <div class="symptom">
                <div class="symptom-icon">😡</div>
                <div class="symptom-description">Irritabilità o agitazione quando si cerca di smettere o ridurre il gioco d'azzardo.</div>
            </div>
            <div class="symptom">
                <div class="symptom-icon">🙁</div>
                <div class="symptom-description">Meno coinvolgimento nelle attività sociali, lavorative o familiari a causa del gioco d'azzardo.</div>
            </div>
        </div>
    </div>
</section>
        
   

    <div class="container">
      <div class="card">
        <div class="content">
        <p>zcz</p>
      </div>
      </div>
      <div class="card">
        <div class="content">
          <h3 style="color: #1f9f8e;">Terapia familiare</h3>
          <p>Coinvolgere i membri della famiglia nel processo di trattamento può aiutare a comprendere meglio il problema, migliorare la comunicazione e affrontare le dinamiche familiari associate alla ludopatia. In alcuni casi, possono essere prescritti farmaci per affrontare sintomi correlati come l'ansia, la depressione o il controllo.</p>
        </div>
      </div>
      <div class="card">
        <div class="content">
        <h3 style="color: #1f9f8e;">Tabla Motos Yamaha</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre de la Moto</th>
                <th>CC</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'admi/consultar_motos.php'; // Consultar y mostrar las motos ?>
            <?php
            // Mostrar los resultados de la consulta
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['cc'] . "</td>";
                    echo "<td>$" . $row['precio'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No hay motos Yamaha disponibles</td></tr>";
            }
            ?>
        </tbody>
    </table>

        </tbody>
    </table>  
      </div>
      </div>
      <div class="card">
        <div class="content">
        <h3 style="color: #1f9f8e;">Tabla Motos</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la Moto</th>
                <th>Marca</th>
                <th>Precio</th>
                

            </tr>
        </thead>
        <tbody>
            <?php include 'admi/mostrar_motos.php'; ?> <!-- Incluir el archivo PHP para mostrar las motos -->
        </tbody>
    </table>    
      </div>
      </div>
    </div>
</body>
</html>

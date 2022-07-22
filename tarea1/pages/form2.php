<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2 || Curso de PHP</title>
    <!-- Css Style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <a href="../">Regresar al Inicio</a>
        <h1>Formulario 2</h1>
        <form action="validate2.php" method="get" class="form">
            <div class="content">
                <label for="name">Nombre del alumno:</label>
                <input type="text" name="name" placeholder="Ingresa tu nombre">
            </div>
            <div class="content">
                <label for="age">Edad:</label>
                <input type="number" name="age" placeholder="Ingresa tu edad">
            </div>
            <div class="content">
                <label for="course">Curso a matricularse:</label>
                <select name="course">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Java">Java</option>
                </select>
            </div>
            <div class="content">
                <label for="name">Género:</label>
                <fieldset>
                    <label for="masculino">Hombre</label>
                    <input type="radio" id="masculino" name="gender" value="Hombre">
                    <label for="mujer">Mujer</label>
                    <input type="radio" id="mujer" name="gender" value="Mujer">
                </fieldset>
            </div>
            <div class="content">
                <label for="birthday">Fecha de nacimiento:</label>
                <input type="date" name="birthday">
            </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
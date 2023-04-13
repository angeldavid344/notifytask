<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>avisoMail</title>

    <style>
        body{
            background-position: center

        }
    </style>

    
</head>
<body>
    <h1>correo de recordatorio</h1>
    <p>este es un correo con el fin de recordarle que tiene una tarea en curso que culminara pronto</p>
    
    <p><strong>Tarea:<strong> {{$task->name_task}}</p>
    <p><strong>Descripcion:<strong> {{$task->description}}</p>
    <p><strong>Fecha de culminacion:<strong> {{$task->date_end}}</p>
    
</body>
</html>
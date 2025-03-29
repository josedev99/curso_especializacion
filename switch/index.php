<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Ejercicio 1!</h1>
        <br>
        <div class="card">
            <div class="card-header">
                <p>Un programa que reciba un número (1 a 7) y, dependiendo del número ingresado, imprima el nombre correspondiente del día de la semana. Utilizando la estructura switch para poder crearlo.</p>
            </div>
            <div class="card-body">
                <form id="form-show-day-string">
                    <div class="form-group mb-2">
                        <label for="">Ingresa un numero:</label>
                        <input type="nummber" name="number_day" min="1" max="7" step="1" id="number_day" class="form-control">
                    </div>
                    <button class="btn btn-outline-success btn-sm">Enviar</button>
                </form>
            </div>
            <div class="card-footer">
                <p class="text-succes text-center" id="display_day_string"></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const form = document.getElementById('form-show-day-string');
        if (form) {
            form.addEventListener('submit', obSumitForm);
        }

        function obSumitForm(e) {
            e.preventDefault();
            let formData = new FormData(e.target);
            fetch('./module/obtenerDiaSemana.php', {
                    method: 'POST',
                    body: formData
                })
                .then((response) => response.text())
                .then((result) => {
                    document.getElementById('display_day_string').textContent = result;
                })
                .catch((err) => {
                    console.log(err);
                });
        }
    </script>
</body>

</html>
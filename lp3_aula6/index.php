<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Calculadora de Índice de Massa Corpórea (IMC)</h1>
                <form action="recebeDados.php" method="POST">
                    <div class="mb-3">
                        <label for="campoPeso" class="form-label">Peso:</label>
                        <input type="Number" step="any" class="form-control" id="campoPeso"   name="txtPeso">
                    </div>
                    <div class="mb-3">
                        <label for="campoAltura" class="form-label">Altura:</label>
                        <input type="Number" step="any" class="form-control" id="campoAltura" name="txtAltura">
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>
            
            <div class="col-4">
                <h1>Sistema de Faturamento de Locadora de Veículos</h1>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                    Carro Comum
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                    <label class="form-check-label" for="radioDefault2">
                    Carro Popular
                    </label>
                </div> 
                <div class="mb-3">
                    <label for="Carro Popular" class="form-label">Carro Popular</label>
                    <input type="Number" step="any" class="form-control" id="Carro Popular"  name="txtcarropop">
                </div>
                <div class="mb-3">
                    <label for="campoAltura" class="form-label">Altura:</label>
                    <input type="Number" step="any" class="form-control" id="campoAltura" name="txtAltura">
                </div>
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar campos</button>

            </div> 
             
            
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
  <title>Reporte de Donaciones</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <style>
    .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
    }

    .table-bordered {
      border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
      padding: 0.5rem;
      vertical-align: middle;
      text-align: center;
    }

    .bg-primary {
      background-color: #007bff !important;
    }

    .text-white {
      color: #fff !important;
    }
  </style>

</head>

<body>
  <div class="container mt-5">
  <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Abrazo</span>Peludo</h1>
    <h1 class="text-center mb-4">Reporte de Donaciones</h1>
    <p class="text-center">Usuario: {{ Auth::user()->name }}</p>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="bg-primary text-white">ID DONACIÓN</th>
          <th class="bg-primary text-white">ID USUARIO</th>
          <th class="bg-primary text-white">ID MEDIO DE PAGO</th>
          <th class="bg-primary text-white">MONTO</th>
          <th class="bg-primary text-white">FECHA</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($donaciones as $donacion)
        <tr>
          <td>{{ $donacion->id_donacion }}</td>
          <td>{{ $donacion->id_users }}</td>
          <td>{{ $donacion->id_medio_de_pago }}</td>
          <td>{{ $donacion->monto }}</td>
          <td>{{ $donacion->fecha }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

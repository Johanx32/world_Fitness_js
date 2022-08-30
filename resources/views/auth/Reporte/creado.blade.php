<!DOCTYPE html>
<html>
<head>
     <title>Repote Registrado</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">

     <style>
         body {
    background: #ebebeb;
    font-family: 'Spartan', sans-serif;
}
.btn-ini{
    width: 150px;
    height: 40px;
    text-align: center;
    background: green;
    padding: 11px;
    padding-top: 30px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    margin: 10px 10px;
    text-decoration: none;
    display: inline-block;
}
.btn-iniciarse1{
  transform: translateY(20px);
}
     </style>
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

Swal.fire({
  title: '<strong>Reporte Registrado</strong>',
  icon: 'success',
  html:
    'El reporte fue <b>registrado correctamente</b>, ' +
    '¿Desea registrar otro reporte?, ' +
    '<br>, ' +
    '<a href="{{ route('reporte.create') }}" class="btn-ini ">Si</a> <a href="{{ route('reporte.index') }}" class="btn-ini btn-iniciarse1">No, volver a la lista</a>',
  showConfirmButton: false,
  width: 600
})
</script>

</body>
</html>
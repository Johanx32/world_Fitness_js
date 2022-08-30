<!DOCTYPE html>
<html>
<head>
     <title>Maquina Registrada</title>
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
  title: '<strong>Maquina Registrada</strong>',
  icon: 'success',
  html:
    'La maquina fue <b>registrada correctamente</b>, ' +
    '¿Desea registrar otra maquina?, ' +
    '<br>, ' +
    '<a href="{{ route('maquina.create') }}" class="btn-ini ">Si</a> <a href="{{ route('maquina.index') }}" class="btn-ini btn-iniciarse1">No, volver a la lista</a>',
  showConfirmButton: false,
  width: 600
})
</script>

</body>
</html>
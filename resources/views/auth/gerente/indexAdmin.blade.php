<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/indexAdmin.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class="fa-solid fa-dumbbell"></i>
      <span class="logo_name">WorldFitnessJS</span>
    </div>
    <ul class="nav-links">


      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-users"></i>
            <span class="link_name">Usuarios</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuarios</a></li>
          <li><a href="{{ route('usuario.index') }}">Usuarios</a></li>
          <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
          <li><a href="{{ route('entrenador.index') }}">Entrenadores</a></li>
          <li><a href="{{ route('gerente.index') }}">Gerente</a></li>
        </ul>
        
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-running"></i>
            <span class="link_name">Entrenamiento</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
        <li><a class="link_name" href="#">Entrenamiento</a></li>
        <li><a href="{{ route('rutina.index') }}">Rutinas</a></li>
          <li><a href="{{ route('valoracion_fisica.index')}}">Valoracion Fisica</a></li>
          <li><a href="{{ route('ejercicio.index') }}">Ejercicios</a></li>
        </ul>
        
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span class="link_name">Maquinaria</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Maquinaria</a></li>
          <li><a href="{{ route('maquina.index') }}">Maquinas</a></li>
          <li><a href="{{ route('mantenimiento.index') }}">Mantenimiento</a></li>
          <li><a href="{{ route('reporte.index') }}">Reportes</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa-solid fa-circle-info"></i>
          <span class="link_name">Perfil</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Perfil</a></li>
        </ul>
      </li>

      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">Johan Fonseca</div>
        <div class="job">Gerente</div>
      </div>
      <a href="{{ route('login.login') }}"><i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
</div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Menu principal</span>
    </div>

    <div class="row g-3 my-2 section-cards">
      <div class="col-md-3 section-cards-one">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">50</h3>
                  <p class="fs-5">Clientes</p>
              </div>
              <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>

      <div class="col-md-3">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">3</h3>
                  <p class="fs-5">Entrenadores</p>
              </div>
              <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>

      <div class="col-md-3">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">20</h3>
                  <p class="fs-5">Maquinas</p>
              </div>
              <i class="fa-solid fa-circle-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>

      <div class="col-md-3">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">%25</h3>
                  <p class="fs-5">Incremento</p>
              </div>
              <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>
  </div>

  </section>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>

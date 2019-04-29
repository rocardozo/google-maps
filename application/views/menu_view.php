<body style="height: 100%; margin: 0; padding: 0;">
  <nav id="menu" class="site-header sticky-top py-1 mb-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2 link" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
          <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
          <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
          <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
          <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
          <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
        </svg>
      </a>
      <a class="py-2 d-none d-md-inline-block link" href="<?=base_url()?>welcome">Simple</a>
      <a class="nav-link dropdown-toggle link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mapas con Marcadores</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?=base_url()?>welcome/mapa_marcador">Con un marcador</a>
          <a class="dropdown-item" href="<?=base_url()?>welcome/mapa_marcadores">Con varios marcadores</a>
          <a class="dropdown-item" href="<?=base_url()?>welcome/mapa_agrupamiento">Agrupamiento de marcadores</a>
        </div>
      <a class="py-2 d-none d-md-inline-block link" href="<?=base_url()?>welcome/mapa_vehiculos_act">Vehículos Activos</a>
      <a class="py-2 d-none d-md-inline-block link" href="<?=base_url()?>welcome/libreria_dibujo">Librería de dibujo</a>
      <a class="py-2 d-none d-md-inline-block link" href="<?=base_url()?>welcome/trazar_camino">Trazar camino</a>
      <a class="py-2 d-none d-md-inline-block link" href="<?= base_url()?>welcome/trazar_poligono">Dibujar Poligono</a>
      <a class="py-2 d-none d-md-inline-block link" href="<?=base_url()?>welcome/zona_exclusion">Zona de Exclusión</a>
    </div>
  </nav>
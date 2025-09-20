<?php include ("../../templates/headerNormal.php");?>

<!-- Pantalla de confirmación -->
<style>
  .box-success-bg{
    background: linear-gradient(135deg,#00c6ff 0%, #2f62c8 100%);
    min-height: 70vh;
    display: grid;
    place-items: center;
    padding: 24px 12px;
  }

  .ok-card{
    background: rgba(255,255,255,.10);
    border: 1px solid rgba(255,255,255,.28);
    color:#fff;
    border-radius:22px;
    padding: 38px 20px;
    max-width: 900px; width:100%;
    text-align:center;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    box-shadow: 0 18px 50px rgba(0,0,0,.28);
    animation: subir .7s ease-out both;
  }

  .ok-circle{
    width:94px; height:94px; margin:0 auto 14px; border-radius:50%;
    display:grid; place-items:center;
    background: rgba(46,204,113,.22);
    border:2px solid rgba(46,204,113,.85);
    box-shadow: 0 0 0 6px rgba(46,204,113,.12);
    animation: latido 1.9s ease-in-out infinite;
  }
  .ok-check{
    width:52px; height:52px;
    stroke:#2ecc71; fill:none; stroke-width:6; stroke-linecap:round; stroke-linejoin:round;
    stroke-dasharray:86; stroke-dashoffset:86;
    animation: dibujar .85s .15s ease-out forwards;
  }

  .ok-title{ font-weight:800; letter-spacing:.3px; }
  .ok-sub   { opacity:.95; }
  .ok-line  { width:82%; height:1px; margin:16px auto; background:rgba(255,255,255,.25); }

  .pill{
    display:inline-block; padding:.38rem .75rem; border-radius:999px;
    background: rgba(255,255,255,.12);
    border:1px solid rgba(255,255,255,.25);
    margin:.22rem; font-size:.95rem;
  }

  @keyframes dibujar { to{ stroke-dashoffset:0; } }
  @keyframes latido {
    0%{ transform:scale(1); }
    50%{ transform:scale(1.04); }
    100%{ transform:scale(1); }
  }
  @keyframes subir{
    from{ opacity:0; transform: translateY(18px) scale(.985);}
    to{   opacity:1; transform: translateY(0)    scale(1);}
  }

  @media (max-width: 576px){
    .ok-card{ padding:28px 16px; }
    .ok-title{ font-size:1.6rem; }
  }
</style>

<section class="box-success-bg">
  <div class="ok-card">

    <div class="ok-circle">
      <svg class="ok-check" viewBox="0 0 24 24">
        <polyline points="20 6 9 17 4 12"></polyline>
      </svg>
    </div>

    <h1 class="display-6 ok-title">¡Registro completado con éxito!</h1>
    <p class="lead ok-sub mb-1">Tus datos fueron guardados correctamente.</p>
    <p class="ok-sub mb-3">Te contactaremos a la brevedad.</p>

    <div class="ok-line"></div>

    <div class="mb-3">
      <span class="pill">ImpulsaDigital</span>
      <span class="pill">IPlacex Tecnológico Nacional · 2025</span>
      <span class="pill">Confirmación Nº: OK-<?php echo date('ymd'); ?>-<?php echo rand(100,999); ?></span>
    </div>

    <!-- Saqué el botón de "Regresar al Sitio Web" -->
    
    <div class="mt-3" style="opacity:.7; font-size:.95rem;">
      Si recargaste la página y vuelves a ver este mensaje, no te preocupes: el registro ya quedó.
    </div>
  </div>
</section>

<br>

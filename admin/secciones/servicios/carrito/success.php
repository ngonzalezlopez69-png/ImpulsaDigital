<?php include("../../../templates/headerNormal.php"); ?>

<body>
  <?php
  // Datos opcionales (si los mandas por GET/POST los mostramos)
  $monto  = $_GET['monto']  ?? $_POST['monto']  ?? '';
  $cuenta = $_GET['cuenta'] ?? $_POST['numero_cuenta'] ?? '';
  $ref    = $_GET['ref']    ?? strtoupper(substr(md5(uniqid('', true)), 0, 8)); // folio simple
  $fecha  = date('d-m-Y H:i');
  ?>

  <style>
    /* toque rápido “humano”: centrado, sombra suave y un check */
    .ok-wrap{max-width:760px;margin:36px auto;padding:0 14px;}
    .ok-card{
      background:#f8f9fa;border:1px solid #e9ecef;border-radius:14px;
      box-shadow:0 10px 28px rgba(0,0,0,.07);
    }
    .ok-head{padding:26px 24px;border-bottom:1px solid #e9ecef;text-align:center}
    .ok-check{
      width:64px;height:64px;border-radius:50%;display:inline-flex;
      align-items:center;justify-content:center;background:#198754;color:#fff;
      box-shadow:0 8px 24px rgba(25,135,84,.35);font-size:32px;margin-bottom:10px
    }
    .ok-body{padding:22px 24px}
    .ok-list{margin:0;padding:0;list-style:none}
    .ok-list li{display:flex;gap:8px;align-items:center;padding:6px 0;border-bottom:1px dashed #e9ecef}
    .ok-list li:last-child{border-bottom:none}
    .muted{color:#6c757d}
    .btn-row{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;margin:18px 0 8px}
  </style>

  <div class="ok-wrap">
    <div class="ok-card">
      <div class="ok-head">
        <div class="ok-check">✓</div>
        <h2 class="mb-1">¡Transferencia realizada!</h2>
        <p class="muted mb-0">Tu operación quedó registrada correctamente.</p>
      </div>

      <div class="ok-body">
        <ul class="ok-list">
          <li><span class="muted">Folio:</span> <strong><?= htmlspecialchars($ref) ?></strong></li>
          <?php if ($monto): ?>
            <li><span class="muted">Monto:</span> <strong>$<?= htmlspecialchars(number_format((float)preg_replace('/[^\d\.]/','',$monto), 0, ',', '.')) ?></strong></li>
          <?php endif; ?>
          <?php if ($cuenta): ?>
            <li><span class="muted">Cuenta destino:</span> <strong><?= htmlspecialchars($cuenta) ?></strong></li>
          <?php endif; ?>
          <li><span class="muted">Fecha:</span> <strong><?= $fecha ?></strong></li>
          <li class="muted" style="padding-top:10px;">
            Guarda este folio como respaldo. Si necesitas corregir algo, podrás editar desde el panel de pagos.
          </li>
        </ul>

        <h5 class="mt-4 mb-2 muted">¿Qué deseas hacer ahora?</h5>
        <div class="btn-row">
          <!-- ajustar la ruta si tu pago.php está en otro lado -->
          <a class="btn btn-success px-4" href="../pago.php">Realizar otra operación</a>
          <a class="btn btn-outline-secondary px-4" href="../../../../index.php">Volver al inicio</a>
        </div>
      </div>
    </div>
  </div>
</body>

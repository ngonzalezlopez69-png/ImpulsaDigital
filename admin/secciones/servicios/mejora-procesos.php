<?php 
include ("../../templates/headerNormal.php"); 
?>
<body class="bg-light">

  <!-- top-right -->
  <div class="d-flex justify-content-end p-3">
    <a class="btn btn-outline-dark" href="carrito/cart.php" aria-label="Ver carrito">
      <i class="bi-cart-fill me-1"></i> Carrito
      <span class="badge bg-dark text-white ms-1 rounded-pill">1</span>
    </a>
  </div>

  <section class="py-5">
    <div class="container">
      <div class="row g-5 align-items-start">

        <!-- galería -->
        <div class="col-lg-6">
          <div class="card shadow-sm border-0">
            <div class="card-body p-0">
              <div class="position-relative">
                <img 
                  id="mainImageProc"
                  src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1200&h=800&fit=crop"
                  class="img-fluid rounded"
                  alt="Mapeo y mejora de procesos"
                  style="width:100%;height:420px;object-fit:cover;cursor:zoom-in;"
                  loading="lazy" decoding="async"
                  onclick="openLightbox(this.src)"
                >
                <button class="btn btn-light shadow-sm position-absolute top-0 end-0 m-2" type="button" onclick="openLightbox(document.getElementById('mainImageProc').src)" aria-label="Ampliar">
                  <i class="bi-arrows-fullscreen"></i>
                </button>
              </div>

              <div class="d-flex gap-2 p-3">
                <img 
                  src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=160&h=160&fit=crop"
                  data-large="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1200&h=800&fit=crop"
                  class="border rounded thumb-proc active"
                  alt="Mapa proceso"
                  style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                  loading="lazy" decoding="async"
                  onclick="setMainFromThumb(this)"
                >
                <img 
                  src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=160&h=160&fit=crop"
                  data-large="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=1200&h=800&fit=crop"
                  class="border rounded thumb-proc"
                  alt="Tablero kanban"
                  style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                  loading="lazy" decoding="async"
                  onclick="setMainFromThumb(this)"
                >
                <img 
                  src="https://images.unsplash.com/photo-1556761175-129418cb2dfe?w=160&h=160&fit=crop"
                  data-large="https://images.unsplash.com/photo-1556761175-129418cb2dfe?w=1200&h=800&fit=crop"
                  class="border rounded thumb-proc"
                  alt="Workshop equipo"
                  style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                  loading="lazy" decoding="async"
                  onclick="setMainFromThumb(this)"
                >
              </div>
            </div>
          </div>
        </div>

        <!-- info -->
        <div class="col-lg-6">
          <div class="d-flex align-items-center gap-2 mb-2">
            <span class="badge bg-info">Operaciones</span>
            <span class="badge bg-secondary">Mejora Continua</span>
          </div>

          <h1 class="display-6 fw-bold mb-2 mt-0">Mejoras de Procesos</h1>
          <p class="text-muted mb-3">
            Ordenamos, simplificamos y aceleramos tu operación. Menos cuellos de botella, más flujo.
            Nos enfocamos en impacto real: costos, tiempos y calidad.
          </p>

          <!-- rating -->
          <div class="mb-3">
            <span class="text-warning" aria-label="Valoración 4.7 de 5">
              <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
              <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
              <i class="bi-star-half"></i>
            </span>
            <span class="text-muted">(59 reseñas)</span>
          </div>

          <!-- precio -->
          <div class="mb-4">
            <div class="d-flex align-items-center gap-3">
              <h3 class="text-success fw-bold mb-0">$5.400.000</h3>
              <span class="text-muted text-decoration-line-through fs-5">$6.800.000</span>
              <span class="badge bg-success">21% OFF</span>
            </div>
            <small class="text-muted">Incluye IVA — entregables y entrenamiento</small>
          </div>

          <!-- beneficios clave -->
          <h6 class="fw-bold">Resultados esperados:</h6>
          <ul class="list-unstyled mb-4">
            <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Reducción de tiempos de ciclo</li>
            <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Disminución de retrabajos y errores</li>
            <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Más visibilidad con tableros y métricas</li>
          </ul>

          <div class="card shadow-sm border-0">
            <div class="card-body">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="qtyProc" class="form-label">Horas de consultoría</label>
                  <div class="input-group">
                    <button class="btn btn-outline-secondary" type="button" onclick="decProc()">−</button>
                    <input id="qtyProc" class="form-control text-center" type="number" value="20" min="10" max="200" step="10" aria-label="Horas">
                    <button class="btn btn-outline-secondary" type="button" onclick="incProc()">+</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="focusProc" class="form-label">Foco</label>
                  <select id="focusProc" class="form-select">
                    <option>Atención al cliente</option>
                    <option>Backoffice / Finanzas</option>
                    <option>Operación / Logística</option>
                    <option>TI / Soporte</option>
                  </select>
                </div>
              </div>

              <div class="d-grid gap-2 mt-4">
                <button class="btn btn-info text-white" type="button">
                  <i class="bi-cart-plus me-2"></i>Agregar al Carrito
                </button>
                <a class="btn btn-outline-info" href="../../../index.php#contacto">
                  <i class="bi-telephone me-2"></i>Solicitar diagnóstico gratuito
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- métricas (counters) -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <div class="row text-center">
                <div class="col-md-3 mb-3">
                  <div class="display-5 fw-bold" data-counter="32">0%</div>
                  <div class="text-muted">menos tiempos de ciclo</div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="display-5 fw-bold" data-counter="27">0%</div>
                  <div class="text-muted">menos retrabajo</div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="display-5 fw-bold" data-counter="18">0%</div>
                  <div class="text-muted">mejor NPS interno</div>
                </div>
                <div class="col-md-3 mb-3">
                  <div class="display-5 fw-bold" data-counter="22">0%</div>
                  <div class="text-muted">ahorro de costos</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- mapa del proceso (timeline) -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card shadow-sm border-0">
            <div class="card-body p-5">
              <h2 class="fw-bold text-center mb-4">Nuestro enfoque</h2>
              <p class="lead text-center text-muted mb-5">
                Diagnóstico rápido, wins tempranos y luego proyectos más profundos. Siempre con datos.
              </p>

              <div class="row g-4">
                <div class="col-md-3 text-center">
                  <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                    <i class="bi-search fs-2"></i>
                  </div>
                  <h6 class="fw-bold">1) Diagnóstico</h6>
                  <p class="text-muted mb-0">Gemba walk, entrevistas, datos base y mapa del flujo.</p>
                </div>
                <div class="col-md-3 text-center">
                  <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                    <i class="bi-lightning-charge fs-2"></i>
                  </div>
                  <h6 class="fw-bold">2) Quick Wins</h6>
                  <p class="text-muted mb-0">Cambios simples que liberan capacidad y muestran valor.</p>
                </div>
                <div class="col-md-3 text-center">
                  <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                    <i class="bi-gear-wide-connected fs-2"></i>
                  </div>
                  <h6 class="fw-bold">3) Proyectos</h6>
                  <p class="text-muted mb-0">Automatización, estandarización, rediseño de flujos y roles.</p>
                </div>
                <div class="col-md-3 text-center">
                  <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                    <i class="bi-bar-chart-line fs-2"></i>
                  </div>
                  <h6 class="fw-bold">4) Control</h6>
                  <p class="text-muted mb-0">KPIs, tableros y rituales para sostener la mejora.</p>
                </div>
              </div>

              <!-- línea con puntos (decorativo) -->
              <div class="mt-4 position-relative" style="height:2px;background:rgba(0,0,0,.08);">
                <span class="position-absolute top-50 translate-middle-y" style="left:12.5%;width:10px;height:10px;border-radius:50%;background:#0d6efd;"></span>
                <span class="position-absolute top-50 translate-middle-y" style="left:37.5%;width:10px;height:10px;border-radius:50%;background:#198754;"></span>
                <span class="position-absolute top-50 translate-middle-y" style="left:62.5%;width:10px;height:10px;border-radius:50%;background:#ffc107;"></span>
                <span class="position-absolute top-50 translate-middle-y" style="left:87.5%;width:10px;height:10px;border-radius:50%;background:#dc3545;"></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- quick wins vs proyectos -->
      <div class="row mt-5 g-4">
        <div class="col-md-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <h5 class="fw-bold d-flex align-items-center gap-2"><i class="bi-bolt"></i> Quick Wins (2–4 semanas)</h5>
              <ul class="text-muted mt-3 mb-0">
                <li>Eliminar pasos sin valor</li>
                <li>Plantillas y checklists</li>
                <li>Colas y SLA visibles</li>
                <li>Acuerdos claros entre áreas</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <h5 class="fw-bold d-flex align-items-center gap-2"><i class="bi-diagram-3"></i> Proyectos (6–12 semanas)</h5>
              <ul class="text-muted mt-3 mb-0">
                <li>Automatizaciones y handoffs digitales</li>
                <li>Estandarización y capacitación</li>
                <li>Rediseño de roles y carga</li>
                <li>Tablero de control y KPIs</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQs -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <h3 class="fw-bold mb-3 text-center">Preguntas frecuentes</h3>
              <div class="accordion" id="faqProc">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="fq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fa1">¿Necesito mapas de procesos previos?</button>
                  </h2>
                  <div id="fa1" class="accordion-collapse collapse show" data-bs-parent="#faqProc">
                    <div class="accordion-body text-muted">No. Partimos con levantamiento rápido (personas, datos, tickets, tiempos) y armamos el mapa contigo.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="fq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fa2">¿Cómo medimos el impacto?</button>
                  </h2>
                  <div id="fa2" class="accordion-collapse collapse" data-bs-parent="#faqProc">
                    <div class="accordion-body text-muted">Definimos KPIs por etapa (tiempos, calidad, costo, satisfacción) y dejamos dashboard con línea base.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="fq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fa3">¿Pueden entrenar a mi equipo?</button>
                  </h2>
                  <div id="fa3" class="accordion-collapse collapse" data-bs-parent="#faqProc">
                    <div class="accordion-body text-muted">Sí. Incluimos sesiones hands-on, materiales y traspaso para que la mejora quede instalada.</div>
                  </div>
                </div>
              </div>

              <div class="text-center mt-4">
                <a class="btn btn-primary btn-lg" href="../../../index.php#contacto">
                  <i class="bi-calendar-check me-2"></i>Agendar diagnóstico de 30 min
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <footer class="py-4 bg-dark">
    <div class="container text-center">
      <p class="text-white m-0">Copyright Ngonzalez &copy; Your Website 2025</p>
    </div>
  </footer>

  <!-- Lightbox -->
  <div class="modal fade" id="lightboxProc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-body p-0">
          <img id="lightboxImgProc" src="" class="w-100" alt="Imagen ampliada">
        </div>
        <div class="p-2 text-end">
          <button class="btn btn-light btn-sm" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <style>
    .thumb-proc{transition:transform .15s ease,opacity .2s ease,box-shadow .2s ease}
    .thumb-proc:hover{opacity:.85;transform:translateY(-2px)}
    .thumb-proc.active{outline:2px solid #0dcaf0;box-shadow:0 0 0 3px rgba(13,202,240,.25)}
    .step-badge{width:80px;height:80px;transition:transform .3s ease, box-shadow .3s ease}
    .step-badge:hover{transform:scale(1.1);box-shadow:0 8px 20px rgba(0,0,0,.2)}
  </style>

  <script>
    // galería robusta con data-large
    function setMainFromThumb(el){
      var main=document.getElementById('mainImageProc');
      if(!main||!el) return;
      var large=el.getAttribute('data-large')||el.src;
      main.src=large;
      document.querySelectorAll('.thumb-proc').forEach(t=>t.classList.remove('active'));
      el.classList.add('active');
    }
    function openLightbox(src){
      var img=document.getElementById('lightboxImgProc');
      if(!img) return;
      img.src=src;
      var modal=new bootstrap.Modal(document.getElementById('lightboxProc'));
      modal.show();
    }

    // qty
    function incProc(){
      var i=document.getElementById('qtyProc'); if(!i) return;
      var max=parseInt(i.getAttribute('max')||'200',10);
      var step=parseInt(i.getAttribute('step')||'10',10);
      var v=parseInt(i.value||'20',10);
      if(v<max) i.value=v+step;
    }
    function decProc(){
      var i=document.getElementById('qtyProc'); if(!i) return;
      var min=parseInt(i.getAttribute('min')||'10',10);
      var step=parseInt(i.getAttribute('step')||'10',10);
      var v=parseInt(i.value||'20',10);
      if(v>min) i.value=v-step;
    }

    // contadores (animan cuando aparecen)
    (function(){
      const els=[...document.querySelectorAll('[data-counter]')];
      if(!('IntersectionObserver' in window) || els.length===0){
        els.forEach(el=>el.textContent=el.getAttribute('data-counter')+'%');
        return;
      }
      const obs=new IntersectionObserver((entries)=>{
        entries.forEach(e=>{
          if(e.isIntersecting){
            const el=e.target, target=parseInt(el.getAttribute('data-counter'),10)||0;
            let val=0; const step=Math.max(1, Math.round(target/40));
            const id=setInterval(()=>{
              val+=step;
              if(val>=target){ val=target; clearInterval(id); }
              el.textContent=val+'%';
            }, 25);
            obs.unobserve(el);
          }
        })
      }, {threshold:0.3});
      els.forEach(el=>obs.observe(el));
    })();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>

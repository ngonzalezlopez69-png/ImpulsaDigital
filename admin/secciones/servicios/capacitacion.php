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
                  id="mainImageTr"
                  src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?w=1200&h=800&fit=crop"
                  class="img-fluid rounded"
                  alt="Capacitación en sala"
                  style="width:100%;height:420px;object-fit:cover;cursor:zoom-in;"
                  loading="lazy"
                  decoding="async"
                  onclick="openLightbox(this.src)"
                >
                <button class="btn btn-light shadow-sm position-absolute top-0 end-0 m-2" type="button" onclick="openLightbox(document.getElementById('mainImageTr').src)" aria-label="Ampliar">
                  <i class="bi-arrows-fullscreen"></i>
                </button>
              </div>

              <div class="d-flex gap-2 p-3">
                <img 
                  src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?w=160&h=160&fit=crop"
                  data-large="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?w=1200&h=800&fit=crop"
                  class="border rounded thumb-tr active"
                  alt="Sala 1"
                  style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                  loading="lazy" decoding="async"
                  onclick="setMainFromThumb(this)"
                >
                <img 
                  src="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?w=160&h=160&fit=crop"
                  data-large="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?w=1200&h=800&fit=crop"
                  class="border rounded thumb-tr"
                  alt="Workshop"
                  style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                  loading="lazy" decoding="async"
                  onclick="setMainFromThumb(this)"
                >
                <img 
                  src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=160&h=160&fit=crop"
                  data-large="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=1200&h=800&fit=crop"
                  class="border rounded thumb-tr"
                  alt="Equipo"
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
            <span class="badge bg-info">Capacitación</span>
            <span class="badge bg-secondary">Empresas</span>
          </div>

          <h1 class="display-6 fw-bold mb-2 mt-0">Capacitación Profesional</h1>
          <p class="text-muted mb-3">
            Programas prácticos para equipos que quieren subir de nivel en serio: metodología, herramientas
            y casos reales. Hacemos que la gente aprenda, aplique y muestre resultados.
          </p>

          <div class="mb-3">
            <span class="text-warning" aria-label="Valoración 4.8 de 5">
              <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
              <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
              <i class="bi-star-half"></i>
            </span>
            <span class="text-muted">(73 reseñas)</span>
          </div>

          <div class="mb-4">
            <div class="d-flex align-items-center gap-3">
              <h3 class="text-success fw-bold mb-0">$2.900.000</h3>
              <span class="text-muted text-decoration-line-through fs-5">$3.600.000</span>
              <span class="badge bg-success">20% OFF</span>
            </div>
            <small class="text-muted">Incluye IVA — cupos limitados</small>
          </div>

          <h6 class="fw-bold">Qué aprenderás:</h6>
          <ul class="list-unstyled mb-4">
            <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Frameworks claros para ejecutar mejor</li>
            <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Herramientas que aceleran el día a día</li>
            <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Cultura de métricas y mejora continua</li>
          </ul>

          <div class="card shadow-sm border-0">
            <div class="card-body">
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="qtyTr" class="form-label">Cupos</label>
                  <div class="input-group">
                    <button class="btn btn-outline-secondary" type="button" onclick="decTr()">−</button>
                    <input id="qtyTr" class="form-control text-center" type="number" value="1" min="1" max="20" aria-label="Cupos">
                    <button class="btn btn-outline-secondary" type="button" onclick="incTr()">+</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="modeTr" class="form-label">Modalidad</label>
                  <select id="modeTr" class="form-select">
                    <option>Presencial</option>
                    <option>Online en vivo</option>
                    <option>Híbrido</option>
                  </select>
                </div>
              </div>

              <div class="d-grid gap-2 mt-4">
                <button class="btn btn-info text-white" type="button">
                  <i class="bi-cart-plus me-2"></i>Agregar al Carrito
                </button>
                <a class="btn btn-outline-info" href="../../../index.php#contacto">
                  <i class="bi-telephone me-2"></i>Agendar llamada
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- modalidades (tabs) -->
      <div class="row mt-5">
        <div class="col-12">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-pres-tab" data-bs-toggle="pill" data-bs-target="#pills-pres" type="button" role="tab">Presencial</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-live-tab" data-bs-toggle="pill" data-bs-target="#pills-live" type="button" role="tab">Online en vivo</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-hib-tab" data-bs-toggle="pill" data-bs-target="#pills-hib" type="button" role="tab">Híbrido</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-pres" role="tabpanel">
                  <p class="text-muted mb-0 text-center">Sesiones prácticas en tu oficina o en nuestras salas. Material impreso, dinámicas de equipo y retos reales.</p>
                </div>
                <div class="tab-pane fade" id="pills-live" role="tabpanel">
                  <p class="text-muted mb-0 text-center">Zoom/Meet con pizarra digital, grabaciones y foros. Ideal para equipos distribuidos.</p>
                </div>
                <div class="tab-pane fade" id="pills-hib" role="tabpanel">
                  <p class="text-muted mb-0 text-center">Mezcla sesiones presenciales clave con seguimientos online. Lo mejor de ambos mundos.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- temario (acordeón) -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <h3 class="fw-bold mb-3 text-center">Temario</h3>
              <div class="accordion" id="temarioTr">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c1">Fundamentos y diagnóstico</button>
                  </h2>
                  <div id="c1" class="accordion-collapse collapse show" data-bs-parent="#temarioTr">
                    <div class="accordion-body text-muted">Objetivos, métricas base y levantamiento rápido de contexto.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2">Herramientas clave</button>
                  </h2>
                  <div id="c2" class="accordion-collapse collapse" data-bs-parent="#temarioTr">
                    <div class="accordion-body text-muted">Tableros, automatizaciones, comunicación efectiva y rutinas.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="h3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3">Aplicación al negocio</button>
                  </h2>
                  <div id="c3" class="accordion-collapse collapse" data-bs-parent="#temarioTr">
                    <div class="accordion-body text-muted">Casos reales, ejercicios guiados y plan de acción de 30 días.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- testimonios -->
      <div class="row mt-4">
        <div class="col-12">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
              <h3 class="fw-bold mb-3 text-center">Testimonios</h3>
              <div class="row g-3">
                <div class="col-md-4">
                  <div class="p-3 border rounded-3 h-100">
                    <p class="mb-2">“El equipo salió con un plan concreto y mejoras visibles en dos semanas.”</p>
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi-person-circle fs-4"></i>
                      <small class="text-muted">Carolina — Operaciones</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="p-3 border rounded-3 h-100">
                    <p class="mb-2">“Muy aterrizado. Cero humo, harto ejemplo y práctica.”</p>
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi-person-circle fs-4"></i>
                      <small class="text-muted">Rodrigo — Producto</small>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="p-3 border rounded-3 h-100">
                    <p class="mb-2">“Nos ordenó la forma de trabajar y bajó el estrés del área.”</p>
                    <div class="d-flex align-items-center gap-2">
                      <i class="bi-person-circle fs-4"></i>
                      <small class="text-muted">María — Tecnología</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="alert alert-success d-flex align-items-center gap-2 mt-4 mb-0" role="alert">
                <i class="bi-shield-check fs-4"></i>
                <div><strong>Garantía:</strong> si no ves valor en 14 días, reprogramamos o devolvemos.</div>
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
  <div class="modal fade" id="lightboxTr" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-body p-0">
          <img id="lightboxImgTr" src="" class="w-100" alt="Imagen ampliada">
        </div>
        <div class="p-2 text-end">
          <button class="btn btn-light btn-sm" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <style>
    .thumb-tr{transition:transform .15s ease,opacity .2s ease,box-shadow .2s ease}
    .thumb-tr:hover{opacity:.85;transform:translateY(-2px)}
    .thumb-tr.active{outline:2px solid #0dcaf0;box-shadow:0 0 0 3px rgba(13,202,240,.25)}
  </style>

  <script>
    function setMainFromThumb(el){
      var main=document.getElementById('mainImageTr');
      if(!main||!el) return;
      var large=el.getAttribute('data-large')||el.src;
      main.src=large;
      document.querySelectorAll('.thumb-tr').forEach(t=>t.classList.remove('active'));
      el.classList.add('active');
    }
    function openLightbox(src){
      var img=document.getElementById('lightboxImgTr');
      if(!img) return;
      img.src=src;
      var modal=new bootstrap.Modal(document.getElementById('lightboxTr'));
      modal.show();
    }
    function incTr(){
      var i=document.getElementById('qtyTr'); if(!i) return;
      var max=parseInt(i.getAttribute('max')||'20',10);
      var v=parseInt(i.value||'1',10);
      if(v<max) i.value=v+1;
    }
    function decTr(){
      var i=document.getElementById('qtyTr'); if(!i) return;
      var min=parseInt(i.getAttribute('min')||'1',10);
      var v=parseInt(i.value||'1',10);
      if(v>min) i.value=v-1;
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>

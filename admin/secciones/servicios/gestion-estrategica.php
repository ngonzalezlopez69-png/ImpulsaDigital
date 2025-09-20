<?php 
// Header común del sitio
include ("../../templates/headerNormal.php"); 
?>
<body class="bg-light">

    <!-- Botón carrito -->
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-outline-dark" href="carrito/cart.php" aria-label="Ver carrito">
            <i class="bi-cart-fill me-1"></i>
            Carrito
            <span class="badge bg-dark text-white ms-1 rounded-pill">1</span>
        </a>
    </div>

    <!-- Contenido principal -->
    <section class="py-5">
        <div class="container">

            <!-- Breadcrumb (oculto). Si lo quieres, descomenta -->
            <!--
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="../../../index.php#services">Servicios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gestión Estratégica</li>
                </ol>
            </nav>
            -->

            <div class="row g-5 align-items-start">
                <!-- Columna imágenes -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-0">

                            <!-- Imagen principal -->
                            <div class="position-relative">
                                <img 
                                    id="mainImageGE"
                                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=900&h=600&fit=crop"
                                    class="img-fluid rounded"
                                    alt="Gestión estratégica - equipo trabajando"
                                    style="width:100%;height:400px;object-fit:cover;cursor:zoom-in;"
                                    loading="lazy"
                                    decoding="async"
                                    onclick="openLightbox(this.src)"
                                >
                                <button class="btn btn-light shadow-sm position-absolute top-0 end-0 m-2" type="button" onclick="openLightbox(document.getElementById('mainImageGE').src)" aria-label="Ampliar imagen">
                                    <i class="bi-arrows-fullscreen"></i>
                                </button>
                            </div>

                            <!-- Miniaturas -->
                            <div class="d-flex gap-2 p-3">
                                <img 
                                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=120&h=120&fit=crop"
                                    data-large="https://images.unsplash.com/photo-1551434678-e076c223a692?w=900&h=600&fit=crop"
                                    class="border rounded thumb-ge active"
                                    alt="Miniatura 1"
                                    style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                                    loading="lazy" decoding="async"
                                    onclick="setMainFromThumb(this)"
                                >
                                <img 
                                    src="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?w=120&h=120&fit=crop"
                                    data-large="https://images.unsplash.com/photo-1557426272-fc759fdf7a8d?w=900&h=600&fit=crop"
                                    class="border rounded thumb-ge"
                                    alt="Miniatura 2"
                                    style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                                    loading="lazy" decoding="async"
                                    onclick="setMainFromThumb(this)"
                                >
                                <img 
                                    src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=120&h=120&fit=crop"
                                    data-large="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=900&h=600&fit=crop"
                                    class="border rounded thumb-ge"
                                    alt="Miniatura 3"
                                    style="width:64px;height:64px;cursor:pointer;object-fit:cover;"
                                    loading="lazy" decoding="async"
                                    onclick="setMainFromThumb(this)"
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna info -->
                <div class="col-lg-6">
                    <h1 class="display-6 fw-bold mb-2 mt-0">Gestión Estratégica</h1>
                    <p class="text-muted mb-3">
                        Plan, ejecución y seguimiento para que tu empresa avance con foco y datos (sin humo).
                    </p>

                    <!-- Rating -->
                    <div class="mb-3">
                        <span class="text-warning" aria-label="Valoración 4.5 de 5">
                            <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                            <i class="bi-star-half"></i>
                        </span>
                        <span class="text-muted">(48 reseñas)</span>
                    </div>

                    <!-- Precio -->
                    <div class="mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <h3 class="text-success fw-bold mb-0">$6.900.000</h3>
                            <span class="text-muted text-decoration-line-through fs-5">$9.200.000</span>
                            <span class="badge bg-success">25% OFF</span>
                        </div>
                        <small class="text-muted">Incluye IVA</small>
                    </div>

                    <!-- Incluye -->
                    <h6 class="fw-bold">Incluye:</h6>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Diagnóstico PESTEL + 5 Fuerzas</li>
                        <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>OKR/KPI y cuadro de mando</li>
                        <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Roadmap trimestral con hitos</li>
                        <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Rituales de gobierno (weekly/retro)</li>
                        <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Plan de cambio y comunicaciones</li>
                        <li class="mb-1"><i class="bi-check-circle text-success me-2"></i>Acompañamiento 8 semanas</li>
                    </ul>

                    <!-- Formulario -->
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="qtyGE" class="form-label">Cantidad</label>
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary" type="button" onclick="decGE()">−</button>
                                        <input id="qtyGE" class="form-control text-center" type="number" value="1" min="1" max="5" aria-label="Cantidad">
                                        <button class="btn btn-outline-secondary" type="button" onclick="incGE()">+</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="focusGE" class="form-label">Enfoque</label>
                                    <select id="focusGE" class="form-select" aria-label="Selecciona enfoque del proyecto">
                                        <option>Escalamiento de Operaciones</option>
                                        <option>Transformación Digital</option>
                                        <option>Product/Market Fit</option>
                                        <option>Optimización de Costos</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-info text-white" type="button">
                                    <i class="bi-cart-plus me-2"></i>Agregar al Carrito
                                </button>
                                <a class="btn btn-outline-info" href="../../../index.php#contacto">
                                    <i class="bi-telephone me-2"></i>Agenda una reunión
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========================== -->
            <!-- Sección: Cómo trabajamos    -->
            <!-- =========================== -->
            <div class="row mt-5">
              <div class="col-12">
                <div class="card shadow-sm border-0">
                  <div class="card-body p-5">
                    <h2 class="fw-bold text-center mb-4">Cómo trabajamos</h2>
                    <p class="lead text-center text-muted mb-5">
                      Nuestro método combina estrategia, datos y acción. Nada de humo: resultados reales.
                    </p>
                    
                    <div class="row g-4">
                      <!-- Paso 1 -->
                      <div class="col-md-3 text-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                          <i class="bi-search fs-2"></i>
                        </div>
                        <h5 class="fw-bold">1) Diagnóstico</h5>
                        <p class="text-muted">Levantamos contexto, datos y brechas. Detectamos oportunidades que valen la pena.</p>
                      </div>

                      <!-- Paso 2 -->
                      <div class="col-md-3 text-center">
                        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                          <i class="bi-flag fs-2"></i>
                        </div>
                        <h5 class="fw-bold">2) Estrategia</h5>
                        <p class="text-muted">Objetivos claros, OKR/KPI y un plan alcanzable. Todos reman para el mismo lado.</p>
                      </div>

                      <!-- Paso 3 -->
                      <div class="col-md-3 text-center">
                        <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                          <i class="bi-gear-wide-connected fs-2"></i>
                        </div>
                        <h5 class="fw-bold">3) Ejecución</h5>
                        <p class="text-muted">Iniciativas con responsables y cadencia. Seguimiento en dashboard, no en promesas.</p>
                      </div>

                      <!-- Paso 4 -->
                      <div class="col-md-3 text-center">
                        <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center mx-auto mb-3 step-badge">
                          <i class="bi-bar-chart-line fs-2"></i>
                        </div>
                        <h5 class="fw-bold">4) Ajustes</h5>
                        <p class="text-muted">Medimos impacto, iteramos y traspasamos buenas prácticas al equipo.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark">
        <div class="container text-center">
            <p class="text-white m-0">Copyright Ngonzalez &copy; Your Website 2025</p>
        </div>
    </footer>

    <!-- Lightbox -->
    <div class="modal fade" id="lightboxGE" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark">
          <div class="modal-body p-0">
            <img id="lightboxImgGE" src="" class="w-100" alt="Imagen ampliada">
          </div>
          <div class="p-2 text-end">
            <button class="btn btn-light btn-sm" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Estilos -->
    <style>
        .thumb-ge { transition: transform .15s ease, opacity .2s ease, box-shadow .2s ease; }
        .thumb-ge:hover { opacity: .85; transform: translateY(-2px); }
        .thumb-ge.active { outline: 2px solid #0dcaf0; box-shadow: 0 0 0 3px rgba(13,202,240,.25); }
        .step-badge { width:80px; height:80px; transition: transform .3s ease, box-shadow .3s ease; }
        .step-badge:hover { transform: scale(1.1); box-shadow: 0 8px 20px rgba(0,0,0,.2); }
    </style>

    <!-- Scripts -->
    <script>
        function setMainFromThumb(el){
            var main = document.getElementById('mainImageGE');
            if(!main || !el) return;
            var large = el.getAttribute('data-large') || el.src;
            main.src = large;

            document.querySelectorAll('.thumb-ge').forEach(t => t.classList.remove('active'));
            el.classList.add('active');
        }

        function openLightbox(src){
            var img = document.getElementById('lightboxImgGE');
            if(!img) return;
            img.src = src;
            var modal = new bootstrap.Modal(document.getElementById('lightboxGE'));
            modal.show();
        }

        function incGE(){
            var i = document.getElementById('qtyGE');
            if(!i) return;
            var max = parseInt(i.getAttribute('max') || '5', 10);
            var val = parseInt(i.value || '1', 10);
            if(val < max) i.value = val + 1;
        }

        function decGE(){
            var i = document.getElementById('qtyGE');
            if(!i) return;
            var min = parseInt(i.getAttribute('min') || '1', 10);
            var val = parseInt(i.value || '1', 10);
            if(val > min) i.value = val - 1;
        }
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>

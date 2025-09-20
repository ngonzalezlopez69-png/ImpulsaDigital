<?php include ("../../templates/headerNormal.php");?>
<body class="bg-light">
    <!-- Navbar -->
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-outline-dark" href="carrito/cart.php" type="button">
            <i class="bi-cart-fill me-1"></i>
            Cart
            <span class="badge bg-dark text-white ms-1 rounded-pill">1</span>
        </a>
    </div>

    <!-- Hero section del servicio Seguridad Web -->
    <section class="py-5">
        <div class="container">

            <div class="row g-5">
                <!-- Galería de imágenes Seguridad Web -->
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            <!-- Imagen principal -->
                            <div class="main-image mb-3">
                                <img id="mainImageSeguridad" class="img-fluid rounded" src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=600&h=400&fit=crop" alt="Seguridad Web" style="width: 100%; height: 400px; object-fit: cover;">
                            </div>
                            <!-- Thumbnails Seguridad -->
                            <div class="d-flex gap-2 p-3">
                                <img class="thumbnail-img border rounded" src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=80&h=80&fit=crop" onclick="changeImageSeguridad(this.src)" style="width: 60px; height: 60px; cursor: pointer; object-fit: cover;">
                                <img class="thumbnail-img border rounded" src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=80&h=80&fit=crop" onclick="changeImageSeguridad(this.src)" style="width: 60px; height: 60px; cursor: pointer; object-fit: cover;">
                                <img class="thumbnail-img border rounded" src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=80&h=80&fit=crop" onclick="changeImageSeguridad(this.src)" style="width: 60px; height: 60px; cursor: pointer; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información del servicio Seguridad Web -->
                <div class="col-lg-6">
                    <div class="h-100">
                        <!-- Badge de categoría -->
                        <span class="badge bg-danger mb-2 px-3 py-2">Ciberseguridad</span>
                        
                        <!-- Título y subtítulo -->
                        <h1 class="display-6 fw-bold text-dark mb-2">Seguridad Web</h1>
                        <p class="text-muted mb-3">Protección integral de sitios web y aplicaciones contra amenazas cibernéticas. Implementamos las mejores prácticas de seguridad para proteger tu negocio digital.</p>

                        <!-- Rating y reviews -->
                        <div class="d-flex align-items-center mb-3">
                            <div class="text-warning me-2">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                            </div>
                            <span class="text-muted">(87 reseñas)</span>
                        </div>

                        <!-- Precios -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center gap-3">
                                <h3 class="text-success fw-bold mb-0">$7.500.000</h3>
                                <span class="text-muted text-decoration-line-through fs-5">$10.200.000</span>
                                <span class="badge bg-success">26% OFF</span>
                            </div>
                            <small class="text-muted">Precio incluye IVA</small>
                        </div>

                        <!-- Características destacadas Seguridad -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3">Incluye:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi-check-circle text-success me-2"></i>Auditoría completa de seguridad</li>
                                <li class="mb-2"><i class="bi-check-circle text-success me-2"></i>Certificados SSL/TLS</li>
                                <li class="mb-2"><i class="bi-check-circle text-success me-2"></i>Firewall de aplicaciones web (WAF)</li>
                                <li class="mb-2"><i class="bi-check-circle text-success me-2"></i>Protección contra malware</li>
                                <li class="mb-2"><i class="bi-check-circle text-success me-2"></i>Monitoreo 24/7</li>
                                <li class="mb-2"><i class="bi-check-circle text-success me-2"></i>Respaldo y recuperación</li>
                            </ul>
                        </div>

                        <!-- Formulario de compra -->
                        <div class="card border-0 bg-white shadow-sm">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Cantidad</label>
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="button" onclick="decreaseQuantitySeguridad()">-</button>
                                            <input class="form-control text-center" id="quantitySeguridad" type="number" value="1" min="1" max="5">
                                            <button class="btn btn-outline-secondary" type="button" onclick="increaseQuantitySeguridad()">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Tipo de Sitio</label>
                                        <select class="form-select">
                                            <option>Sitio Web Corporativo</option>
                                            <option>E-commerce</option>
                                            <option>Aplicación Web</option>
                                            <option>Portal de Clientes</option>
                                            <option>Blog/CMS</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="d-grid gap-2 mt-4">
                                    <button class="btn btn-danger btn-lg text-white">
                                        <i class="bi-cart-plus me-2"></i>Agregar al Carrito
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <i class="bi-shield-check me-2"></i>Análisis Gratuito
                                    </button>
                                </div>

                                <div class="row mt-3 text-center">
                                    <div class="col">
                                        <button class="btn btn-link text-muted p-0">
                                            <i class="bi-heart me-1"></i>Favoritos
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-link text-muted p-0">
                                            <i class="bi-share me-1"></i>Compartir
                                        </button>
                                    </div>
                                    <div class="col">
                                        <a href="../../../index.php#services" class="btn btn-link text-muted p-0">
                                            <i class="bi-arrow-left me-1"></i>Regresar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Descripción detallada del servicio Seguridad Web -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4 text-center">¿Qué incluye nuestro servicio de Seguridad Web?</h3>
                            <p class="lead text-center mb-5">Protegemos tu presencia digital con tecnologías avanzadas y monitoreo constante para garantizar la integridad y disponibilidad de tus servicios web.</p>
                            
                            <div class="row g-4 mt-3">
                                <div class="col-md-6">
                                    <div class="text-center p-3">
                                        <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="bi-shield-check text-white fs-4"></i>
                                        </div>
                                        <h5 class="fw-bold">Auditoría de Seguridad</h5>
                                        <p class="text-muted">Evaluación exhaustiva de vulnerabilidades y puntos débiles en tu infraestructura web.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center p-3">
                                        <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="bi-lock text-white fs-4"></i>
                                        </div>
                                        <h5 class="fw-bold">Certificados SSL/TLS</h5>
                                        <p class="text-muted">Implementación de certificados de seguridad para cifrar las comunicaciones.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center p-3">
                                        <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="bi-eye text-white fs-4"></i>
                                        </div>
                                        <h5 class="fw-bold">Monitoreo 24/7</h5>
                                        <p class="text-muted">Vigilancia continua para detectar y responder a amenazas en tiempo real.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center p-3">
                                        <div class="bg-danger rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                            <i class="bi-cloud-arrow-up text-white fs-4"></i>
                                        </div>
                                        <h5 class="fw-bold">Respaldos Seguros</h5>
                                        <p class="text-muted">Copias de seguridad automáticas y planes de recuperación ante desastres.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios similares mejorado -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6">Servicios Similares</h2>
                <p class="text-muted">Descubre otros servicios que podrían interesarte</p>
            </div>
            
            <div class="row g-4">
                <!-- Servicio 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-code text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Desarrollo de Software</h5>
                            <p class="text-muted mb-3">Aplicaciones web y móviles con tecnologías modernas</p>
                            <div class="mb-3">
                                <span class="h4 text-success fw-bold">$11.861.000</span>
                                <small class="text-muted d-block">Precio desde</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid">
                                <a class="btn btn-outline-primary" href="desarrollo-software.php">Ver más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-info rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-laptop text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Diseño UX</h5>
                            <p class="text-muted mb-3">Experiencias de usuario excepcionales y diseño intuitivo</p>
                            <div class="mb-3">
                                <span class="h4 text-success fw-bold">$8.500.000</span>
                                <small class="text-muted d-block">Precio desde</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid">
                                <a class="btn btn-outline-info" href="diseno-ux.php">Ver más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-chart-bar text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Gestión Estratégica</h5>
                            <p class="text-muted mb-3">Planificación y optimización de procesos empresariales</p>
                            <div class="mb-3">
                                <span class="h4 text-success fw-bold">$12.800.000</span>
                                <small class="text-muted d-block">Precio desde</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid">
                                <a class="btn btn-outline-warning" href="gestion-estrategica.php">Ver más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicio 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-cogs text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Mejora de Procesos</h5>
                            <p class="text-muted mb-3">Optimización y reingeniería de procesos empresariales</p>
                            <div class="mb-3">
                                <span class="h4 text-success fw-bold">$9.200.000</span>
                                <small class="text-muted d-block">Precio desde</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid">
                                <a class="btn btn-outline-success" href="mejora-procesos.php">Ver más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicio 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-secondary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-graduation-cap text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Capacitación</h5>
                            <p class="text-muted mb-3">Formación especializada en tecnologías y procesos</p>
                            <div class="mb-3">
                                <span class="h4 text-success fw-bold">$2.800.000</span>
                                <small class="text-muted d-block">Precio desde</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid">
                                <a class="btn btn-outline-secondary" href="capacitacion.php">Ver más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Servicio 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 hover-card">
                        <div class="card-body p-4 text-center">
                            <div class="bg-dark rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-chart-line text-white fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-3">Marketing Digital</h5>
                            <p class="text-muted mb-3">Estrategias SEO, SEM y gestión de redes sociales</p>
                            <div class="mb-3">
                                <span class="h4 text-success fw-bold">$3.200.000</span>
                                <small class="text-muted d-block">Precio desde</small>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-grid">
                                <a class="btn btn-outline-dark" href="marketing-digital.php">Ver más detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright Ngonzalez &copy; Your Website 2025</p></div>
    </footer>

    <!-- JavaScript para interactividad -->
    <script>
        function changeImageSeguridad(src) {
            document.getElementById('mainImageSeguridad').src = src.replace('80&h=80', '600&h=400');
        }

        function increaseQuantitySeguridad() {
            const input = document.getElementById('quantitySeguridad');
            if (input.value < 5) {
                input.value = parseInt(input.value) + 1;
            }
        }

        function decreaseQuantitySeguridad() {
            const input = document.getElementById('quantitySeguridad');
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        // Efecto hover en thumbnails
        document.querySelectorAll('.thumbnail-img').forEach(img => {
            img.addEventListener('mouseenter', function() {
                this.style.opacity = '0.7';
            });
            img.addEventListener('mouseleave', function() {
                this.style.opacity = '1';
            });
        });

        // Efecto hover en cards de servicios
        document.querySelectorAll('.hover-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.transition = 'all 0.3s ease';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>

    <!-- CSS adicional para efectos -->
    <style>
        .hover-card {
            transition: all 0.3s ease;
        }
        
        .hover-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1) !important;
        }
        
        .bg-danger { background-color: #dc3545 !important; }
    </style>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
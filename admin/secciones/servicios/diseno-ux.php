<?php 
// Incluyo el header normal del sitio
include ("../../templates/headerNormal.php"); 
?>
<body class="bg-light">

    <!-- Botón carrito arriba a la derecha -->
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-outline-dark" href="carrito/cart.php">
            <i class="bi-cart-fill me-1"></i>
            Carrito
            <span class="badge bg-dark text-white ms-1 rounded-pill">1</span>
        </a>
    </div>

    <!-- Sección principal -->
    <section class="py-5">
        <div class="container">

            <div class="row g-5">
                <!-- Columna imágenes -->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-0">
                            <!-- Imagen principal -->
                            <div class="main-image mb-3">
                                <img id="mainImageUX" src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=600&h=400&fit=crop" 
                                     class="img-fluid rounded" alt="Diseño UX" 
                                     style="width:100%; height:400px; object-fit:cover;">
                            </div>
                            <!-- Miniaturas -->
                            <div class="d-flex gap-2 p-3">
                                <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?w=80&h=80&fit=crop" 
                                     onclick="changeImageUX(this.src)" 
                                     class="border rounded" 
                                     style="width:60px; height:60px; cursor:pointer; object-fit:cover;">
                                <img src="https://images.unsplash.com/photo-1559028006-448665bd7c7f?w=80&h=80&fit=crop" 
                                     onclick="changeImageUX(this.src)" 
                                     class="border rounded" 
                                     style="width:60px; height:60px; cursor:pointer; object-fit:cover;">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop" 
                                     onclick="changeImageUX(this.src)" 
                                     class="border rounded" 
                                     style="width:60px; height:60px; cursor:pointer; object-fit:cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna info -->
                <div class="col-lg-6">
                    <h1 class="display-6 fw-bold mb-2 mt-0">Diseño UX - Experiencia de Usuario</h1>
                    <p class="text-muted">Diseño e implementación de soluciones a medida, pensadas en la experiencia de los usuarios.</p>

                    <!-- Estrellas -->
                    <div class="mb-3">
                        <div class="text-warning d-inline">
                            <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i><i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                        </div>
                        <span class="text-muted">(62 reseñas)</span>
                    </div>

                    <!-- Precio -->
                    <div class="mb-4">
                        <h3 class="text-success fw-bold mb-0">$8.500.000</h3>
                        <span class="text-muted text-decoration-line-through">$12.000.000</span>
                        <span class="badge bg-success">29% OFF</span><br>
                        <small class="text-muted">Incluye IVA</small>
                    </div>

                    <!-- Características -->
                    <h6 class="fw-bold">Incluye:</h6>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi-check-circle text-success"></i> Investigación de usuarios</li>
                        <li><i class="bi-check-circle text-success"></i> Wireframes y prototipos</li>
                        <li><i class="bi-check-circle text-success"></i> Diseño UI moderno</li>
                        <li><i class="bi-check-circle text-success"></i> Testing de usabilidad</li>
                        <li><i class="bi-check-circle text-success"></i> Guías de estilo</li>
                        <li><i class="bi-check-circle text-success"></i> Soporte 3 meses</li>
                    </ul>

                    <!-- Formulario -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Cantidad</label>
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary" type="button" onclick="decreaseQuantityUX()">-</button>
                                        <input id="quantityUX" type="number" value="1" min="1" max="5" class="form-control text-center">
                                        <button class="btn btn-outline-secondary" type="button" onclick="increaseQuantityUX()">+</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Tipo de Proyecto</label>
                                    <select class="form-select">
                                        <option>Aplicación Web</option>
                                        <option>Aplicación Móvil</option>
                                        <option>Sitio Corporativo</option>
                                        <option>E-commerce</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button class="btn btn-info text-white"><i class="bi-cart-plus me-2"></i>Agregar al Carrito</button>
                                <button class="btn btn-outline-info"><i class="bi-eye me-2"></i>Ver Portfolio UX</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de descripción -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="fw-bold text-center">¿Qué incluye nuestro servicio?</h3>
                            <p class="text-center text-muted">Transformamos ideas en experiencias digitales útiles y atractivas.</p>
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

    <!-- Scripts -->
    <script>
        function changeImageUX(src){
            document.getElementById('mainImageUX').src = src.replace('80&h=80','600&h=400');
        }
        function increaseQuantityUX(){
            let input = document.getElementById('quantityUX');
            if(input.value < 5){ input.value = parseInt(input.value)+1; }
        }
        function decreaseQuantityUX(){
            let input = document.getElementById('quantityUX');
            if(input.value > 1){ input.value = parseInt(input.value)-1; }
        }
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

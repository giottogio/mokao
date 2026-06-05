<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizador de Franelas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Sora:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>
<body> 
    <!-- Imagenes de base para los modelos de franela estarán en la carpeta images/shirts/ -->
    <main class="app-shell">
        <section class="hero">
            <p class="eyebrow">Mokao Studio</p>
            <h1>Diseña tu franela y cotízala al instante </h1>
            <p class="hero-copy">Explora estilos, talla, color y estampado desde un lienzo pensado para móvil. La idea es que el cliente vea rápido una referencia visual y un precio estimado.</p>
        </section>

        <section class="designer-layout">
            <article class="preview-panel">
                <div class="preview-copy">
                    <p class="section-label">Vista previa</p>
                    <h2>Tu franela personalizada</h2>
                </div>

                <div id="preview-area" class="preview-container">
                    <div class="stage-glow"></div>
                    <div class="shirt-stage">
                        <div id="shirt-model" class="shirt shirt-clasica" aria-label="Vista previa de la franela">
                
                            <div class="shirt-body">
                                <div id="design-layer" class="draggable position-center" data-position="center">
                                    <img id="user-upload" src="#" alt="Tu diseño personalizado">
                                    <div id="design-placeholder" class="design-placeholder">
                                        <span>Tu diseño</span>
                                        <small>Sube una imagen para verla aquí</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="preview-notes">
                    <div>
                        <span class="note-title">Estilo</span>
                        <strong id="summary-style">Clásica</strong>
                    </div>
                    <div>
                        <span class="note-title">Estampado</span>
                        <strong id="summary-position">Frontal</strong>
                    </div>
                    <div>
                        <span class="note-title">Talla</span>
                        <strong id="summary-size">S</strong>
                    </div>
                    <div>
                        <span class="note-title">Color</span>
                        <strong id="summary-color">Marrón</strong>
                    </div>
                </div>
            </article>

            <aside class="controls-panel">
                <div class="controls-header">
                    <p class="section-label">Configuración</p>
                    <h2>Personaliza tu pedido</h2>
                </div>

                <div class="controls">
                    <section class="control-group">
                        <div class="control-heading">
                            <label class="group-label">Estilo de franela</label>
                            <span class="group-help">Cada corte cambia la caída y el precio base.</span>
                        </div>
                        <div class="choice-grid choice-grid-3">
                            <label class="choice-card">
                                <input type="radio" name="estilo" value="clasica" data-price="15" checked>
                                <span>Clásica</span>
                                <small>$15</small>
                            </label>
                            <label class="choice-card">
                                <input type="radio" name="estilo" value="oversize" data-price="20">
                                <span>Oversize</span>
                                <small>$20</small>
                            </label>
                            <label class="choice-card">
                                <input type="radio" name="estilo" value="boxy" data-price="18">
                                <span>Boxy Fit</span>
                                <small>$18</small>
                            </label>
                        </div>
                    </section>

                    <section class="control-group">
                        <div class="control-heading">
                            <label class="group-label">Color</label>
                            <span class="group-help">Colores predefinidos para que el blanco y otros tonos se muestren con claridad.</span>
                        </div>
                        <div class="color-grid">
                            <label class="color-card">
                                <input type="radio" name="color" value="#7a5034" data-label="Marrón" checked>
                                <span class="swatch swatch-brown" aria-hidden="true"></span>
                                <strong>Marrón</strong>
                            </label>
                            <label class="color-card">
                                <input type="radio" name="color" value="#6fac45" data-label="Verde manzana">
                                <span class="swatch swatch-green" aria-hidden="true"></span>
                                <strong>Verde manzana</strong>
                            </label>
                            <label class="color-card">
                                <input type="radio" name="color" value="#ffffff" data-label="Blanco">
                                <span class="swatch swatch-white" aria-hidden="true"></span>
                                <strong>Blanco</strong>
                            </label>
                            <label class="color-card">
                                <input type="radio" name="color" value="#1b1b1b" data-label="Negro">
                                <span class="swatch swatch-black" aria-hidden="true"></span>
                                <strong>Negro</strong>
                            </label>
                            <label class="color-card">
                                <input type="radio" name="color" value="#8d8f92" data-label="Gris">
                                <span class="swatch swatch-grey" aria-hidden="true"></span>
                                <strong>Gris</strong>
                            </label>
                        </div>
                        <div class="color-chip">
                            <span>Color actual</span>
                            <strong id="color-label">Marrón</strong>
                        </div>
                    </section>

                    <section class="control-group">
                        <div class="control-heading">
                            <label class="group-label">Talla</label>
                            <span class="group-help">Las tallas grandes suman un pequeño ajuste.</span>
                        </div>
                        <div class="choice-grid choice-grid-4">
                            <label class="choice-card compact">
                                <input type="radio" name="talla" value="S" data-extra="0" checked>
                                <span>S</span>
                            </label>
                            <label class="choice-card compact">
                                <input type="radio" name="talla" value="M" data-extra="0">
                                <span>M</span>
                            </label>
                            <label class="choice-card compact">
                                <input type="radio" name="talla" value="L" data-extra="2">
                                <span>L</span>
                                <small>+$2</small>
                            </label>
                            <label class="choice-card compact">
                                <input type="radio" name="talla" value="XL" data-extra="4">
                                <span>XL</span>
                                <small>+$4</small>
                            </label>
                        </div>
                    </section>

                    <section class="control-group">
                        <div class="control-heading">
                            <label class="group-label">Posición del estampado</label>
                            <span class="group-help">Ubica el diseño sobre la prenda.</span>
                        </div>
                        <div class="choice-grid choice-grid-3">
                            <label class="choice-card">
                                <input type="radio" name="print-position" value="center" data-extra="0" checked>
                                <span>Frontal</span>
                                <small>Incluido</small>
                            </label>
                            <label class="choice-card">
                                <input type="radio" name="print-position" value="top-left" data-extra="1">
                                <span>Pecho</span>
                                <small>+$1</small>
                            </label>
                            <label class="choice-card">
                                <input type="radio" name="print-position" value="full" data-extra="3">
                                <span>Maxi print</span>
                                <small>+$3</small>
                            </label>
                        </div>
                    </section>

                    <section class="control-group">
                        <div class="control-heading">
                            <label for="print-size" class="group-label">Tamaño del diseño</label>
                            <span class="group-help">A mayor cobertura, mayor costo de producción.</span>
                        </div>
                        <div class="range-block">
                            <input type="range" id="print-size" min="60" max="145" value="100" step="5">
                            <div class="range-meta">
                                <span>Compacto</span>
                                <strong id="print-size-value">100%</strong>
                                <span>Grande</span>
                            </div>
                        </div>
                    </section>

                    <section class="control-group">
                        <div class="control-heading">
                            <label for="file-input" class="group-label">Diseño o logo</label>
                            <span class="group-help">Acepta PNG, JPG o WEBP para mostrar la referencia.</span>
                        </div>
                        <label class="upload-card" for="file-input">
                            <span>Seleccionar archivo</span>
                            <small id="file-name">Aún no has subido una imagen</small>
                        </label>
                        <input type="file" id="file-input" accept="image/*">
                    </section>
                </div>

                <div class="quote-card">
                    <div class="quote-copy">
                        <p class="section-label">Cotización estimada</p>
                        <div class="price-tag">$<span id="total-price">20</span></div>
                    </div>
                    <div class="price-breakdown">
                        <div>
                            <span>Base</span>
                            <strong id="breakdown-base">$15</strong>
                        </div>
                        <div>
                            <span>Talla</span>
                            <strong id="breakdown-size">$0</strong>
                        </div>
                        <div>
                            <span>Estampado</span>
                            <strong id="breakdown-print">$5</strong>
                        </div>
                    </div>
                    <button class="primary-button" type="button" onclick="saveDesign()">Guardar y cotizar</button>
                    <p id="save-feedback" class="save-feedback" aria-live="polite"></p>
                </div>
            </aside>
        </section>
    </main>

    <script src="js/script.js"></script>
</body>
</html>

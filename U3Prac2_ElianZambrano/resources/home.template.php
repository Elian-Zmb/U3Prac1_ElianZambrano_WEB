<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-5xl mx-auto py-16 text-center">
    <h1 class="text-5xl font-bold text-pink-700 mb-6">
        Proyecto de Aplicaciones Web
    </h1>

    <p class="text-lg text-gray-600 mb-10">
        Este sitio forma parte de una práctica académica enfocada en el uso de 
        <strong>PHP para la manipulación de arreglos asociativos y funciones personalizadas</strong> 
        que permiten procesar información antes de mostrarla dinámicamente en una página web.
    </p>

    <div class="flex justify-center gap-6 mb-12">
        <a href="/links" class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-lg shadow">
            Ver enlaces por categoría 
        </a>

        <a href="/post" class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-3 rounded-lg shadow">
            Ver artículo del proyecto
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-8 text-left mt-12">
        <div class="bg-white p-6 rounded-xl shadow border border-pink-100">
            <h3 class="text-xl font-semibold text-pink-600 mb-2">📚 Organización de Datos</h3>
            <p class="text-gray-600">
                Uso de arreglos asociativos en PHP para estructurar la información de un artículo
                con título, autor, fecha, contenido y etiquetas.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow border border-pink-100">
            <h3 class="text-xl font-semibold text-pink-600 mb-2">⚙️ Lógica y Presentación</h3>
            <p class="text-gray-600">
                Separación entre la lógica del controlador y la vista, utilizando funciones
                que procesan los datos antes de mostrarlos en pantalla.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow border border-pink-100">
            <h3 class="text-xl font-semibold text-pink-600 mb-2">💡 PHP Dinámico</h3>
            <p class="text-gray-600">
                Generación de contenido HTML dinámico mediante variables, funciones
                y estructuras de control propias de PHP.
            </p>
        </div>
    </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>

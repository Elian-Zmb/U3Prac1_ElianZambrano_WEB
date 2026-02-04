<?php require __DIR__ . '/partials/header.php'; ?>

<main class="py-12 px-4">
    <article class="max-w-4xl mx-auto bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <header class="bg-slate-50 p-8 sm:p-12 border-b border-gray-100">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-800 leading-tight mb-4">
                <?= $post['titulo'] ?>
            </h1>
            <div class="flex items-center text-blue-600 font-medium text-sm">
                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded mr-3">Autor</span>
                <?= formatear_info_autor($post) ?>
            </div>
        </header>

        <div class="p-8 sm:p-12">
            <div class="text-gray-700 leading-relaxed text-lg text-justify italic border-l-4 border-blue-200 pl-6 mb-10">
                <?= nl2br($post['contenido']) ?>
            </div>

            <footer class="mt-8 pt-6 border-t border-gray-50 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-sm text-slate-500">
                    <strong>Métrica:</strong> <?= contar_palabras($post['contenido']) ?> palabras encontradas.
                </div>
                <div class="flex flex-wrap gap-2">
                    <?= renderizar_tags_html($post['tags']) ?>
                </div>
            </footer>
        </div>
    </article>
</main>

<style>
    /* Estilos de etiquetas optimizados */
    .tag {
        background-color: #f1f5f9; /* slate-100 */
        color: #334155; /* slate-700 */
        padding: 5px 12px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        border: 1px solid #e2e8f0;
        transition: all 0.2s;
    }
    .tag:hover {
        background-color: #2563eb; /* blue-600 */
        color: white;
        border-color: #2563eb;
    }
</style>

<?php require __DIR__ . '/partials/footer.php'; ?>
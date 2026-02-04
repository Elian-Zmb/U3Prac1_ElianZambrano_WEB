<?php require __DIR__ . '/partials/header.php'; ?>

<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="border-b-2 border-emerald-500 pb-6 mb-12">
        <h2 class="text-4xl font-extrabold text-slate-800">
            Catálogo de Recursos de Ingeniería
        </h2>
        <p class="text-slate-500 mt-2">Explora herramientas y documentación técnica organizada por categorías.</p>
    </div>

    <div class="space-y-16">
        <?php foreach ($enlacesCategorizados as $categoria => $enlaces): ?>
            <section>
                <div class="flex items-center mb-6">
                    <div class="h-8 w-1 bg-emerald-600 mr-4 rounded-full"></div>
                    <h3 class="text-2xl font-bold text-slate-700 italic"><?= htmlspecialchars($categoria) ?></h3>
                </div>

                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-2">
                    <?php foreach ($enlaces as $enlace): ?>
                        <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:border-emerald-500 hover:shadow-lg transition-all duration-300">
                            <h4 class="text-lg font-semibold text-slate-800 group-hover:text-emerald-600 transition-colors">
                                <?= htmlspecialchars($enlace['descripcion']) ?>
                            </h4>
                            <p class="text-sm text-slate-400 mt-2 mb-4 font-mono truncate">
                                <?= htmlspecialchars($enlace['url']) ?>
                            </p>
                            <a href="<?= $enlace['url'] ?>" target="_blank" 
                               class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700 uppercase tracking-widest">
                                Abrir Recurso 
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
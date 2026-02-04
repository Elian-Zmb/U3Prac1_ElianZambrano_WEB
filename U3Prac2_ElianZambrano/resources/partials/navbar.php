<nav class="bg-slate-900 border-b border-blue-500/30 shadow-xl">
    <div class="mx-auto max-w-7xl flex h-16 items-center justify-between px-6">
        <div class="flex-shrink-0 flex items-center">
            <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center mr-3 shadow-lg shadow-blue-500/20">
                <span class="text-white font-bold text-lg">E</span>
            </div>
            <span class="text-white font-semibold tracking-wider text-sm uppercase hidden sm:block">
                Dev<span class="text-blue-400">Archive</span>
            </span>
        </div>

        <div class="flex gap-2">
            <?php 
            $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            
            $navLinks = [
                '/' => 'Inicio',
                '/about' => 'Acerca de',
                '/links' => 'Proyectos',
                '/post' => 'Post'
            ];

            foreach ($navLinks as $path => $label): 
                $isActive = ($currentPath === $path);
            ?>
                <a href="<?= $path ?>"
                   class="<?= $isActive 
                        ? 'bg-blue-600 text-white shadow-lg shadow-blue-900/50' 
                        : 'text-slate-300 hover:bg-slate-800 hover:text-blue-400' 
                   ?> transition-all duration-200 ease-in-out rounded-md px-4 py-2 text-sm font-medium border border-transparent <?= $isActive ? 'border-blue-400/30' : '' ?>">
                   <?= $label ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
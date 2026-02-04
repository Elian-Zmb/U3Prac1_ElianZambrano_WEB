Práctica 2: Manipulación de Datos con Arreglos y Funciones en PHP
📝 Información General
Asignatura: Programación de Aplicaciones Web / Fundamentos de Programación.

Carrera: Ingeniería en Software.

Estudiante: Elian Zambrano.

Fecha de Entrega: 05/02/2026.

Tema: Uso combinado de arreglos para estructurar datos y funciones para procesarlos.

🎯 Objetivos de Aprendizaje
Estructurar datos complejos utilizando arreglos asociativos en PHP.

Crear y utilizar funciones personalizadas que acepten arreglos como parámetros.

Separar la lógica de procesamiento de datos de la capa de presentación (Modelo-Vista-Controlador simplificado).

Generar contenido HTML dinámico a partir de los resultados de las funciones procesadoras.

🛠️ Tecnologías Utilizadas
Lenguaje: PHP 8.x.

Estilos: Tailwind CSS (Framework CSS de utilidad).

Servidor: XAMPP (Apache).

Arquitectura: MVC Simplificado (Separación de Controladores y Vistas).

📂 Estructura del Proyecto
Plaintext
U3Prac2_ElianZambrano/
├── app/
│   └── controller/
│       └── post.php          <-- Lógica, Arreglos y Funciones (Criterios 1, 2, 3)
├── public/
│   └── index.php             <-- Punto de entrada (Ruteo optimizado)
├── resources/
│   ├── post.template.php     <-- Vista principal (Criterio 4)
│   └── partials/
│       ├── navbar.php        <-- Navegación estilizada
│       └── footer.php        <-- Pie de página
└── routes/
    └── web.php               <-- Definición de rutas del sistema
🚀 Instalación y Ejecución
Descargar el proyecto y descomprimirlo en la carpeta C:\xampp\htdocs\.

Asegurarse de que el nombre de la carpeta sea exactamente U3Prac2_ElianZambrano.

Abrir el XAMPP Control Panel e iniciar el módulo Apache.

Acceder desde el navegador a la siguiente URL: http://localhost/U3Prac2_ElianZambrano/public/index.php/post

🧠 Explicación Técnica (Criterio 5)
Arreglo Asociativo: Se definió el arreglo $post en el controlador para almacenar de forma estructurada el título, autor, fecha, contenido y etiquetas del artículo.

Funciones de Procesamiento: * formatear_info_autor(): Procesa los metadatos del autor para una visualización uniforme.

renderizar_tags_html(): Recorre el arreglo de etiquetas y genera componentes visuales HTML dinámicamente.

contar_palabras(): Realiza un análisis del string de contenido para devolver el número total de palabras.

Independencia de Datos: El sistema fue configurado para operar de forma estática, eliminando la dependencia de bases de datos externas para garantizar la portabilidad y cumplimiento de la rúbrica.
Práctica 1: Refactorización con Arreglos Bidimensionales en PHP
📋 Información General
Asignatura: Aplicación de Tecnologías Web.

Carrera: Ingeniería en Tecnologias de la Informacion.

Estudiante: Elian Zambrano.

Fecha de Entrega: 03/02/2026.

Tema: Manipulación de arreglos bidimensionales en un entorno PHP real.

🎯 Objetivos de la Tarea
Aplicar conceptos de arreglos bidimensionales para organizar y gestionar datos complejos.

Refactorizar funcionalidades existentes para adaptarlas a nuevas estructuras de datos asociativas.

Fortalecer la separación de responsabilidades entre el Controlador (lógica) y la Vista (presentación).

📂 Estructura de Datos Implementada
Se ha refactorizado el archivo app/controller/links.php para utilizar una estructura asociativa de dos dimensiones:

Primera Dimensión (Categorías): Un arreglo asociativo donde las claves son los nombres de las categorías técnicas.

Segunda Dimensión (Enlaces): Cada categoría contiene un arreglo indexado de enlaces, donde cada elemento es a su vez un arreglo asociativo con las llaves url y descripcion.

🛠️ Requerimientos Funcionales Cumplidos
Controlador (links.php): Se definió el arreglo $enlacesCategorizados con 3 categorías y al menos 2 enlaces por cada una, cumpliendo con los requisitos de la rúbrica.

Vista (links.template.php): Se implementó un bucle anidado (foreach externo para categorías y foreach interno para enlaces) para renderizar dinámicamente el contenido en formato de tarjetas (cards).

Navegación: Hipervínculos funcionales que dirigen a los recursos externos mediante etiquetas <a>.

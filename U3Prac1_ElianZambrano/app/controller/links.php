<?php
/**
 * Controlador de Proyectos - Práctica 1
 * Implementación de Arreglos Bidimensionales
 */

$title = "Repositorio de Enlaces Técnicos";

// Definición del Arreglo Bidimensional
$enlacesCategorizados = [ 
    "Entornos de Desarrollo (IDEs)" => [ 
        [ 
            "url" => "https://code.visualstudio.com/", 
            "descripcion" => "VS Code: Editor ligero con soporte extenso para extensiones." 
        ], 
        [ 
            "url" => "https://www.jetbrains.com/phpstorm/", 
            "descripcion" => "PhpStorm: El IDE más completo para desarrollo profesional en PHP." 
        ] 
    ], 
    "Documentación y Estándares" => [ 
        [ 
            "url" => "https://www.php-fig.org/psr/", 
            "descripcion" => "Estándares PSR: Recomendaciones para la interoperabilidad en PHP." 
        ], 
        [ 
            "url" => "https://developer.mozilla.org/es/docs/Web/HTTP", 
            "descripcion" => "Protocolo HTTP: Guía completa sobre el funcionamiento de la web." 
        ] 
    ], 
    "Gestión de Dependencias y Paquetes" => [ 
        [ 
            "url" => "https://getcomposer.org/", 
            "descripcion" => "Composer: Gestor de dependencias esencial para proyectos PHP." 
        ], 
        [ 
            "url" => "https://www.npmjs.com/", 
            "descripcion" => "NPM: El registro de software más grande para librerías JavaScript." 
        ] 
    ] 
]; 

require_once __DIR__ . "/../../resources/links.template.php";
<?php
/*
Plugin Name: Desactivar Comentarios y Ocultar Elementos
Description: Este plugin desactiva los comentarios y oculta los elementos relacionados con los comentarios en todas las entradas y páginas de WordPress.
*/

function desactivar_comentarios_y_ocultar_elementos() {
    // Desactivar comentarios en entradas
    remove_post_type_support('post', 'comments');

    // Desactivar comentarios en páginas
    remove_post_type_support('page', 'comments');
    
    // Agregar reglas CSS para ocultar elementos de comentarios
    add_action('wp_head', 'ocultar_elementos_comentarios_css');
}

function ocultar_elementos_comentarios_css() {
    echo '<style type="text/css">
        /* Ocultar todos los elementos de comentarios */
        .comments-area,
        #respond,
        .comment-respond,
        .comment-form,
        .commentlist,
        .pinglist {
            display: none !important;
        }
    </style>';
}

add_action('init', 'desactivar_comentarios_y_ocultar_elementos');

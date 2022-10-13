<?php

// PER LO STYLE
// creiamo una funziona che linki il mio style.css----------------------------------------------------------------------------
// parametri: nome che do al mio style.css, uri, array delle dipendenze, versione, scopo(opzionale)
function osteopati_register_styles(){

    // creo una variabile associata alla versione che dichiaro nei commenti del mio style.css
    $version = wp_get_theme()->get('Version');
    // my style
    wp_enqueue_style('osteopati-style', get_template_directory_uri() . "/style.css", array('osteopati-bootstrap', 'osteopati-googlefontsone', 'osteopati-googlefontstwo', 'osteopati-googlefontsthree'), $version, 'all');
    // bootstrap
    wp_enqueue_style('osteopati-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css", array(), '5.2.1', 'all');
    // fontawesome
    wp_enqueue_style('osteopati-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css", array(), '6.2.0', 'all');
    // googlefonts
    wp_enqueue_style('osteopati-googlefontsone', "https://fonts.googleapis.com", array(), 'all');
    wp_enqueue_style('osteopati-googlefontstwo', "https://fonts.gstatic.com", array(), 'all');
    wp_enqueue_style('osteopati-googlefontsthree', "https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", array(), 'all');
    
}

// aggiungo l'azione di far partire la mia funzione quando wp fa partire 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'osteopati_register_styles');


// PER LO SCRIPT
// creiamo una funziona che linki il mio script.js-----------------------------------------------------------------------------------
// parametri: nome che do al mio js, uri, array delle dipendenze, versione, scopo(opzionale), true(per metterlo in fondo al body e non nell'head)
function osteopati_register_scripts(){

     // bootstrap
     wp_enqueue_script('osteopati-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js", array(), '5.2.1', true);
     // myJs
     wp_enqueue_script('osteopati-main', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
    
}

// aggiungo l'azione di far partire la mia funzione quando wp fa partire 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'osteopati_register_scripts');

?>
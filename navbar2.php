<?php
function renderSecondNavbar($activeItem = 'Seguros') {
    /*
     * Definimos el menú principal en un array.
     * Si un ítem tiene submenú, lo representamos como otro array 'submenu'.
     */
    $menuItems = [
        'Seguros' => [
            'label' => 'SEGUROS',
            'submenu' => [] // Este ítem no despliega submenú
        ],
        'Inicio' => [
            'label' => 'Inicio',
            'submenu' => []
        ],
        'Seguro para personas' => [
            'label' => 'Seguro para personas',
            'submenu' => [
                'Autos'              => 'Seguro de Autos',
                'SOAT'               => 'Seguro SOAT',
                'Seguro de Patineta' => 'Seguro de Patineta',
                'Hogar'             => 'Seguro de Acontramitación',
                'Estilo de vida'    => 'Multiriesgo',
                'Seguro de Bicicleta'=> 'Seguro de Bicicleta',
                'Plan Elige'        => 'Seguro Personalizado',
                'Salud'             => 'Seguro de Salud'
            ]
        ],
        'Reclamaciones' => [
            'label' => 'Reclamaciones',
            'submenu' => [
                'Solicitar Reembolso' => 'Solicitar Reembolso',
                'Estado de Reclamación'=> 'Estado de Reclamación'
            ]
        ],
        'Ayuda' => [
            'label' => 'Ayuda',
            'submenu' => []
        ]
    ];

    echo '<nav class="main-navbar">';
    echo '<ul class="menu">';

    // Recorremos cada ítem del menú principal
    foreach ($menuItems as $key => $data) {
        // Sacamos el texto que se mostrará en el menú
        $label = $data['label'];
        $submenu = $data['submenu'];
        
        // Si el ítem actual coincide con $activeItem, le damos clase 'active'
        $activeClass = ($key === $activeItem) ? 'active' : '';
        
        // Si el ítem tiene submenú, le añadimos la clase 'has-submenu'
        $hasSubmenuClass = (!empty($submenu)) ? 'has-submenu' : '';

        // Imprimimos el <li> principal y le agregamos el onclick
        echo '<li class="menu-item ' . $activeClass . ' ' . $hasSubmenuClass . '" onclick="navItemWhatsApp(\'' . $key . '\')">';
        echo $label;

        // Si tiene submenú, agregamos la flechita y la lista de submenú
        if (!empty($submenu)) {
            echo ' <span class="arrow">&#9662;</span>'; // Flecha hacia abajo

            // Submenú
            echo '<ul class="submenu">';
            foreach ($submenu as $subKey => $subLabel) {
                echo '<li>' . $subLabel . '</li>';
            }
            echo '</ul>';
        }
        echo '</li>';
    }

    echo '</ul>';
    echo '</nav>';
}
?>
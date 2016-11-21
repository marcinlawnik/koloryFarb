<?php

$poczatki = [
    'Nocne niebo',
    'Poranna mgła',
    'Zachód słońca',
    'Opad śniegu',
    'Romantyczny wieczór',
    'Upojna noc',
    'Romantyczny spacer',
    'Szybki numerek',
    'Deszczowy poranek',
    'Gradobicie',
    'Gorące popołudnie',
    'Słoneczny wieczór',
    'Mroźny wiatr',
    'Monsun',
];

$koncowki = [
    'nad Tamizą',
    'w Dubaju',
    'w Paryżu',
    'w Londynie',
    'w Poznaniu',
    'pod Wieżą Eiffla',
    'na plaży',
    'na łące',
    'w mieście',
    'w Pekinie',
    'na Alasce',
    'w samolocie',
];

echo (array_rand(array_flip($poczatki)). ' ' . array_rand(array_flip($koncowki)));
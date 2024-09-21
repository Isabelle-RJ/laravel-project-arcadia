<?php

return [
    'zoo' => [
        [
            'id' => '1',
            'name' => 'Arcadia',
            'description' => "Bienvenue à Arcadia, un zoo unique en son genre situé tout près de la légendaire forêt de Brocéliande en Bretagne, en France. Fondé en 1960, Arcadia vous invite à un voyage fascinant au cœur de la faune japonaise. Découvrez une diversité exceptionnelle d'animaux originaires du Japon dans un cadre enchanteur et préservé.",
        ],
    ],
    'users' => [
        [
            'id' => '1',
            'zoo_id'=> '1',
            'name' => 'José Admin',
            'email' => 'joseadmin@gmail.com',
            'password' => '123456789aze',
            'role' => 'admin',
        ],
        [
            'id' => '2',
            'zoo_id'=> '1',
            'name' => 'Josette Veterinarian',
            'email' => 'josetteveterinarian@gmail.com',
            'password' => '123456789aze',
            'role' => 'Veterinarian',
        ],
        [
            'id' => '3',
            'zoo_id'=> '1',
            'name' => 'Joseph Employee',
            'email' => 'josephemployee@gmail.com',
            'password' => '123456789aze',
            'role' => 'Employee',
        ],
    ],
    'habitats' => [
        [
            'id' => '1',
            'zoo_id'=> '1',
            'name' => 'Savane',
            'description' => "La savane est une vaste étendue de prairies parsemées d'arbres clairsemés, caractérisée par un climat saisonnier avec des périodes de pluies et de sécheresses. Elle abrite une grande diversité d'animaux, tels que les lions, éléphants et antilopes, adaptés à ce milieu ouvert.",
            'image' => 'test',
        ],
        [
            'id' => '2',
            'zoo_id'=> '1',
            'name' => 'Jungle',
            'description' => "La jungle est une forêt dense et humide, dominée par une végétation luxuriante, avec un climat tropical chaud et des pluies abondantes. Elle abrite une biodiversité riche, incluant des espèces comme les singes, jaguars et oiseaux exotiques, vivant dans un environnement ombragé et touffu.",
            'image' => 'test2',
        ],
        [
            'id' => '3',
            'zoo_id'=> '1',
            'name' => 'Marais',
            'description' => "Les marais sont des zones humides où l'eau stagnante recouvre le sol, créant un écosystème riche en végétation aquatique comme les roseaux. Ils abritent une faune diversifiée, incluant des oiseaux, amphibiens, et reptiles, adaptés à cet environnement saturé d'eau.",
            'image' => 'test3'
        ],
    ],
    'services' => [
        [
            'id' => '1',
            'zoo_id'=> '1',
            'type' => 'Restauration',
            'name' => "Croc'zoo Arcadia",
            'description' => "Situé au cœur du zoo, offrant une pause gourmande idéale pour toute la famille. Avec un menu varié allant des sandwichs savoureux aux salades fraîches, il y en a pour tous les goûts. Les enfants adoreront les menus thématiques inspirés des animaux du parc, tandis que les adultes pourront se détendre sur la terrasse ombragée. Le Croc'zoo est l'endroit parfait pour recharger les batteries avant de poursuivre la découverte des merveilles du zoo.",
            'image' => 'test',
        ],
        [
            'id' => '2',
            'zoo_id'=> '1',
            'type' => 'Visite guidée',
            'name' => 'Suivez le guide !',
            'description' => "Découvrez les merveilles du zoo d'Arcadia lors d'une visite guidée enrichissante qui vous plonge au cœur du monde animal. Accompagné d'un guide expert, explorez les habitats naturels recréés et apprenez des anecdotes fascinantes sur chaque espèce. Les enfants comme les adultes seront émerveillés par la diversité des animaux et les histoires captivantes qui les entourent. Cette aventure éducative et divertissante vous offre une expérience unique, enrichissant votre visite d'une compréhension plus profonde de la faune et de la flore. Ne manquez pas cette occasion de voir de près des créatures rares et exotiques tout en profitant d'un moment inoubliable en famille ou entre amis.",
            'image' => 'test2',
        ],
        [
            'id' => '3',
            'zoo_id'=> '1',
            'type' => 'Visite en petit train',
            'name' => 'Wakura Express',
            'description' => "Embarquez à bord du petit train touristique du zoo d'Arcadia pour une visite inoubliable à travers les différents mondes animaliers. Ce voyage confortable vous permet de découvrir les habitats des animaux tout en profitant de commentaires fascinants sur les espèces et leur mode de vie. Idéal pour les familles, le petit train offre une vue panoramique sur les zones les plus emblématiques du parc. Les enfants seront enchantés par cette balade ludique, tandis que les adultes apprécieront le rythme détendu de la visite. Une manière amusante et éducative de parcourir le zoo sans effort !",
            'image' => 'test3',
        ],
    ],
    'animals' => [
        [
            'id' => '1',
            'habitat_id' => '1',
            'name' => 'Isa',
            'breed' => 'Macaque',
            'image' => 'test',
            'description' => "Petit singe du Japon !",
        ],
        [
            'id' => '2',
            'habitat_id' => '1',
            'name' => 'Jade',
            'breed' => 'Panda roux',
            'image' => 'test',
            'description' => "Petit panda roux du Japon !",
        ],
        [
            'id' => '3',
            'habitat_id' => '1',
            'name' => 'Coco',
            'breed' => 'Renard',
            'image' => 'test',
            'description' => "Petit renard du Japon !",
        ],
        [
            'id' => '4',
            'habitat_id' => '1',
            'name' => 'Dark Vador',
            'breed' => 'Tanuki',
            'image' => 'test',
            'description' => "Petit tanuki du Japon !",
        ],
        [
            'id' => '5',
            'habitat_id' => '1',
            'name' => 'Luke',
            'breed' => 'Ours noir',
            'image' => 'test',
            'description' => "Ours à collier du Japon !",
        ],
    ],
];

<?php
// Configuration générale du cours
define('COURSE_TITLE', 'Gestion de Projet & Approche Agile (M110)');
define('COURSE_AUTHOR', 'Professeur OFPPT');
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours pour générer le sommaire dynamiquement
$course_parts = [
    "Partie 1 : Fondamentaux & Méthodologies" => [
        ['id' => 'concepts-base', 'title' => "Chapitre 1 : Définitions et Concepts Clés"],
        ['id' => 'acteurs-roles', 'title' => "Chapitre 2 : Acteurs, Rôles et Responsabilités"],
        ['id' => 'caracteristiques', 'title' => "Chapitre 3 : Caractéristiques et Contraintes"],
        ['id' => 'methodes-classiques', 'title' => "Chapitre 4 : Méthodologies Prévisibles"],
        ['id' => 'methodes-agiles', 'title' => "Chapitre 5 : Méthodologies Agiles"],
        ['id' => 'etapes-gestion', 'title' => "Chapitre 6 : Les Étapes de Cadrage"]
    ],
    "Partie 2 : Planification & Pilotage" => [
        ['id' => 'analyse-besoins', 'title' => "Chapitre 1 : Analyse du Cahier des Charges"],
        ['id' => 'decoupage-estimation', 'title' => "Chapitre 2 : Découpage (WBS) et Estimation (PERT)"],
        ['id' => 'ordonnancement', 'title' => "Chapitre 3 : Ordonnancement (Gantt)"],
        ['id' => 'pilotage', 'title' => "Chapitre 4 : Pilotage des Ressources et Coûts"]
    ],
    "Partie 3 : L'Approche Agile Scrum (Approfondie)" => [
        ['id' => 'scrum-theorie', 'title' => "Chapitre 1 : Théorie, Valeurs et Rôles"],
        ['id' => 'scrum-mecanique', 'title' => "Chapitre 2 : La Mécanique du Sprint (Artefacts & Événements)"],
        ['id' => 'jira-pratique', 'title' => "Chapitre 3 : Pilotage avec Jira et Indicateurs"],
        ['id' => 'exercices-agile', 'title' => "Chapitre 4 : Exercices Pratiques et Corrigés"]
    ]
];
?>
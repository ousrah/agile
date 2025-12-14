<?php
// Configuration générale du cours
define('COURSE_TITLE', 'Gestion de Projet & Approche Agile (M110)');
define('COURSE_AUTHOR', 'Professeur OFPPT');
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours pour générer le sommaire dynamiquement
$course_parts = [
    "Partie 1 : Fondamentaux et Méthodologies de Projet" => [
        ['id' => 'concepts-base', 'title' => "Chapitre 1 : Définitions et Concepts Clés"],
        ['id' => 'acteurs-roles', 'title' => "Chapitre 2 : Acteurs, Rôles et Responsabilités"],
        ['id' => 'caracteristiques', 'title' => "Chapitre 3 : Caractéristiques et Contraintes"],
        ['id' => 'methodes-classiques', 'title' => "Chapitre 4 : Méthodologies Prévisibles (Classiques)"],
        ['id' => 'methodes-agiles', 'title' => "Chapitre 5 : Méthodologies Non Prévisibles (Agiles)"],
        ['id' => 'etapes-gestion', 'title' => "Chapitre 6 : Les Étapes de Cadrage d'un Projet"]
    ],
    "Partie 2 : Planifier un Projet" => [
        ['id' => 'analyse-besoins', 'title' => "Chapitre 1 : Analyse du Cahier des Charges"],
        ['id' => 'decoupage-estimation', 'title' => "Chapitre 2 : Découpage et Estimation (PBS, WBS & PERT)"],
        ['id' => 'ordonnancement', 'title' => "Chapitre 3 : Ordonnancement et Chemin Critique"],
        ['id' => 'pilotage', 'title' => "Chapitre 4 : Pilotage des Ressources et Coûts"]
    ],
    "Partie 3 : L'Approche Agile Scrum en Profondeur" => [
        ['id' => 'scrum-theorie', 'title' => "Chapitre 1 : Théorie, Valeurs et Rôles"],
        ['id' => 'scrum-mecanique', 'title' => "Chapitre 2 : La Mécanique du Sprint (Artefacts & Événements)"],
        ['id' => 'jira-pratique', 'title' => "Chapitre 3 : Pilotage avec Jira et Indicateurs"],
        ['id' => 'exercices-agile', 'title' => "Chapitre 4 : Exercices Pratiques et Corrigés"]
    ],
    "Partie 4 : Qualité du Code & Versioning" => [
        ['id' => 'git-gitlab', 'title' => "Chapitre 1 : Git & GitLab"],
        ['id' => 'sonarqube', 'title' => "Chapitre 2 : Qualité du Code (SonarQube)"]
    ],
    "Partie 5 : La Chaîne DevOps" => [
        ['id' => 'devops-concepts', 'title' => "Chapitre 1 : Culture & Outils DevOps"],
        ['id' => 'ci-cd-gitlab', 'title' => "Chapitre 2 : CI/CD avec GitLab"]
    ],
    "Partie 6 : Administration, Sécurité et Optimisation" => [
        ['id' => 'securite', 'title' => "Chapitre 14 : La Sécurité : Gestion des Utilisateurs et des Rôles"],
        ['id' => 'objets-virtuels', 'title' => "Chapitre 15 : Objets de Base de Données Virtuels"],
        ['id' => 'backup-restore', 'title' => "Chapitre 16 : Sauvegarde et Restauration"],
        ['id' => 'exercices-partie6', 'title' => "Ateliers Pratiques : Administration et Sécurité"]
    ]
];
?>
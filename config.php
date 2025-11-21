<?php
// Configuration générale du cours
define('COURSE_TITLE', 'Gestion de Projet & Approche Agile (M110)');
define('COURSE_AUTHOR', 'Professeur OFPPT');
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours pour générer le sommaire dynamiquement
// Les 'id' correspondent aux ID des balises <section> dans les fichiers HTML/PHP.
$course_parts = [
    "Partie 1 : Fondamentaux & Méthodologies (Niveau Avancé)" => [
        ['id' => 'concepts-base', 'title' => "Chapitre 1 : Définitions et Concepts Clés"],
        ['id' => 'acteurs-roles', 'title' => "Chapitre 2 : Acteurs, Rôles et Responsabilités (RACI)"],
        ['id' => 'caracteristiques', 'title' => "Chapitre 3 : Caractéristiques et Contraintes (Q-C-D)"],
        ['id' => 'methodes-classiques', 'title' => "Chapitre 4 : Méthodologies Prévisibles (Waterfall, V, Y)"],
        ['id' => 'methodes-agiles', 'title' => "Chapitre 5 : Méthodologies Agiles (Manifeste, Kanban, Lean)"],
        ['id' => 'etapes-gestion', 'title' => "Chapitre 6 : Les Étapes de Cadrage d'un Projet"]
    ],
    "Partie 2 : Planification & Pilotage" => [
        ['id' => 'analyse-besoins', 'title' => "Chapitre 1 : Analyse du Cahier des Charges & Risques"],
        ['id' => 'decoupage-estimation', 'title' => "Chapitre 2 : Découpage (WBS) et Estimation (PERT)"],
        ['id' => 'ordonnancement', 'title' => "Chapitre 3 : Ordonnancement (Gantt) et Chemin Critique"],
        ['id' => 'pilotage', 'title' => "Chapitre 4 : Pilotage des Ressources et Coûts"]
    ],
    "Partie 3 : L'Approche Agile Scrum" => [
        ['id' => 'scrum-theorie', 'title' => "Chapitre 1 : La Méthodologie Scrum (Rôles, Cérémonies, Artefacts)"],
        ['id' => 'jira-pratique', 'title' => "Chapitre 2 : Manipuler un outil Agile (Jira)"]
    ],
    "Partie 4 : Qualité du Code & Versioning" => [
        ['id' => 'git-gitlab', 'title' => "Chapitre 1 : Gestion de versions (Git & GitLab)"],
        ['id' => 'sonarqube', 'title' => "Chapitre 2 : Qualité du Code (SonarQube)"]
    ],
    "Partie 5 : La Chaîne DevOps" => [
        ['id' => 'devops-concepts', 'title' => "Chapitre 1 : Culture & Outils DevOps"],
        ['id' => 'ci-cd-gitlab', 'title' => "Chapitre 2 : CI/CD avec GitLab"]
    ]
];
?>
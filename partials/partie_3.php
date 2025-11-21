<!-- =================================================================== -->
<!-- PARTIE 3 : L'APPROCHE AGILE SCRUM -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 3 : L'Approche Agile Scrum</h2>

<!-- ========== CHAPITRE 1 : LA MÉTHODOLOGIE SCRUM ========== -->
<section id="scrum-theorie" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 1 : La Méthodologie Scrum</h3>
    <p class="text-gray-700 mb-6">
        Scrum est le framework Agile le plus utilisé. Son nom vient du rugby (la mêlée). Il repose sur des cycles courts appelés <strong>Sprints</strong> (généralement 2 à 4 semaines).
    </p>

    <div class="grid lg:grid-cols-3 gap-6 mb-8">
        <!-- Rôles -->
        <div class="bg-blue-50 p-5 rounded-lg border border-blue-200">
            <h4 class="text-lg font-bold text-blue-900 mb-3 text-center">1. Les Rôles (3)</h4>
            <ul class="space-y-3 text-sm text-gray-800">
                <li>
                    <strong>Product Owner (PO) :</strong> Représente le client. Il définit "Quoi faire". Il gère le carnet de produit (Backlog).
                </li>
                <li>
                    <strong>Scrum Master (SM) :</strong> Le coach. Il s'assure que la méthode Scrum est respectée. Il aide l'équipe à lever les obstacles. Ce n'est pas un chef classique.
                </li>
                <li>
                    <strong>L'Équipe de Développement :</strong> (Dev Team) Ceux qui réalisent le travail. Ils sont autonomes et auto-organisés.
                </li>
            </ul>
        </div>

        <!-- Artefacts -->
        <div class="bg-green-50 p-5 rounded-lg border border-green-200">
            <h4 class="text-lg font-bold text-green-900 mb-3 text-center">2. Les Artefacts (3)</h4>
            <ul class="space-y-3 text-sm text-gray-800">
                <li>
                    <strong>Product Backlog :</strong> La liste de TOUTES les fonctionnalités désirées pour le produit, priorisées par le PO.
                </li>
                <li>
                    <strong>Sprint Backlog :</strong> La liste des tâches à faire uniquement pour le Sprint en cours (le plan de bataille de l'équipe pour 2 semaines).
                </li>
                <li>
                    <strong>L'Incrément :</strong> Le résultat utilisable livré à la fin du Sprint (une version du logiciel qui fonctionne).
                </li>
            </ul>
        </div>

        <!-- Evénements -->
        <div class="bg-purple-50 p-5 rounded-lg border border-purple-200">
            <h4 class="text-lg font-bold text-purple-900 mb-3 text-center">3. Les Événements (Cérémonies)</h4>
            <ul class="space-y-3 text-sm text-gray-800">
                <li><strong>Sprint Planning :</strong> Au début. On décide ce qu'on va faire dans le Sprint.</li>
                <li><strong>Daily Scrum :</strong> Chaque matin, 15 min debout. "Qu'ai-je fait hier ? Que fais-je aujourd'hui ? Ai-je un problème ?"</li>
                <li><strong>Sprint Review :</strong> À la fin. On présente la démo au client.</li>
                <li><strong>Retrospective :</strong> À la fin. L'équipe discute pour améliorer sa façon de travailler pour le prochain sprint.</li>
            </ul>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 2 : OUTIL DE GESTION (JIRA) ========== -->
<section id="jira-pratique" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 2 : Manipuler un outil Agile (Jira)</h3>
    <p class="text-gray-700 mb-6">Pour gérer un projet Scrum, on utilise des outils numériques comme <strong>Jira Software</strong>.</p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-6">
        
        <div>
            <h4 class="text-lg font-bold text-gray-800">2.1 Concepts clés dans Jira</h4>
            <ul class="list-disc ml-6 mt-2 text-gray-700">
                <li><strong>Projet :</strong> Regroupe toutes les tâches.</li>
                <li><strong>Ticket (Issue) :</strong> Une tâche unitaire.</li>
                <li><strong>Epic :</strong> Une grosse fonctionnalité qui sera découpée en plusieurs tickets/stories.</li>
                <li><strong>Workflow :</strong> Le cycle de vie d'un ticket (ex: À faire -> En cours -> Terminé).</li>
            </ul>
        </div>

        <div>
            <h4 class="text-lg font-bold text-gray-800">2.2 Le Tableau Scrum (Board)</h4>
            <p class="text-gray-700 mb-2">C'est le cœur de l'activité quotidienne. Il permet de visualiser l'avancement du Sprint.</p>
            <div class="flex flex-col md:flex-row gap-4 mt-4 text-center text-white text-sm font-bold">
                <div class="flex-1 bg-red-400 p-3 rounded">À FAIRE (To Do)</div>
                <div class="flex-1 bg-blue-400 p-3 rounded">EN COURS (In Progress)</div>
                <div class="flex-1 bg-green-400 p-3 rounded">TERMINÉ (Done)</div>
            </div>
            <p class="text-sm text-gray-500 mt-2 italic">Chaque membre déplace son ticket de gauche à droite au fur et à mesure de son travail.</p>
        </div>

        <div>
            <h4 class="text-lg font-bold text-gray-800">2.3 Les Rapports (Reporting)</h4>
            <p class="text-gray-700">Jira génère des graphiques pour suivre la performance :</p>
            <ul class="list-disc ml-6 mt-2 text-gray-700">
                <li><strong>Burndown Chart :</strong> Montre le travail restant à faire. La courbe doit descendre jusqu'à 0 à la fin du sprint. Idéal pour voir si on est en retard.</li>
                <li><strong>Vélocité :</strong> Moyenne de travail accompli par l'équipe à chaque sprint. Permet de mieux prévoir le futur.</li>
            </ul>
        </div>

    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>
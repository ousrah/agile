<!-- =================================================================== -->
<!-- PARTIE 3 : L'APPROCHE AGILE SCRUM (MASTER CLASS) -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 3 : L'Approche Agile Scrum en Profondeur</h2>

<div class="bg-purple-50 border-l-4 border-purple-500 p-4 mb-8">
    <p class="text-purple-800">
        <strong>Objectif du Master :</strong> Ne pas seulement apprendre le vocabulaire, mais comprendre comment piloter un projet complexe dans un environnement incertain grâce à l'empirisme.
    </p>
</div>

<!-- ========== CHAPITRE 1 : LE CADRE SCRUM & LES RÔLES ========== -->
<section id="scrum-theorie" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Théorie, Valeurs et Rôles</h3>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">1.1 L'Empirisme : Le cœur du réacteur</h4>
        <p class="text-gray-700 mb-4">
            Scrum n'est pas une méthodologie rigide, c'est un cadre de travail (framework) <strong>empirique</strong>. Cela signifie que la connaissance vient de l'expérience et que les décisions sont basées sur ce qui est observé.
        </p>
        <ul class="grid md:grid-cols-3 gap-4 text-sm text-gray-700">
            <li class="bg-gray-50 p-3 rounded border">
                <strong>1. Transparence :</strong> Les aspects significatifs du processus doivent être visibles pour ceux qui sont responsables du résultat. (Ex: Le tableau Jira est à jour).
            </li>
            <li class="bg-gray-50 p-3 rounded border">
                <strong>2. Inspection :</strong> Les utilisateurs Scrum doivent inspecter fréquemment les artefacts et l'état d'avancement pour détecter les écarts indésirables.
            </li>
            <li class="bg-gray-50 p-3 rounded border">
                <strong>3. Adaptation :</strong> Si une dérive est constatée, le processus ou le matériel doit être ajusté le plus vite possible.
            </li>
        </ul>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1.2 La Scrum Team : 3 Rôles, 0 Hiérarchie</h4>
        <p class="text-gray-700 mb-4">Dans Scrum, il n'y a pas de chef de projet traditionnel. La responsabilité est partagée.</p>

        <!-- Product Owner -->
        <div class="mb-6 border-l-4 border-blue-500 pl-4">
            <h5 class="text-lg font-bold text-blue-900">Le Product Owner (PO) - "La Voix du Client"</h5>
            <p class="text-gray-700 text-sm mb-2">Il est responsable de <strong>maximiser la valeur</strong> du produit.</p>
            <ul class="list-disc ml-5 text-sm text-gray-600">
                <li>Gère le <em>Product Backlog</em> (Carnet de produit).</li>
                <li>Définit les priorités (Quoi faire et dans quel ordre).</li>
                <li>Accepte ou rejette les User Stories (livrables).</li>
                <li><strong>Ce qu'il n'est pas :</strong> Un manager qui dicte "comment" coder.</li>
            </ul>
        </div>

        <!-- Scrum Master -->
        <div class="mb-6 border-l-4 border-green-500 pl-4">
            <h5 class="text-lg font-bold text-green-900">Le Scrum Master (SM) - "Le Leader Serviteur"</h5>
            <p class="text-gray-700 text-sm mb-2">Il est responsable de la promotion et du support de Scrum.</p>
            <ul class="list-disc ml-5 text-sm text-gray-600">
                <li>Coach l'équipe (aide à l'auto-organisation).</li>
                <li>Protège l'équipe des interférences extérieures.</li>
                <li>Facilite les événements (réunions).</li>
                <li>Supprime les obstacles (impediments).</li>
                <li><strong>Ce qu'il n'est pas :</strong> Un chef d'équipe ou une secrétaire.</li>
            </ul>
        </div>

        <!-- Developers -->
        <div class="border-l-4 border-purple-500 pl-4">
            <h5 class="text-lg font-bold text-purple-900">Les Developers (L'Équipe) - "Les Réalisateurs"</h5>
            <p class="text-gray-700 text-sm mb-2">Pluridisciplinaires, ils font tout le travail nécessaire pour livrer l'incrément.</p>
            <ul class="list-disc ml-5 text-sm text-gray-600">
                <li>Estiment la complexité des tâches.</li>
                <li>S'engagent sur la quantité de travail pour le Sprint.</li>
                <li>Assurent la qualité (Definition of Done).</li>
            </ul>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 2 : ARTEFACTS ET CEREMONIES ========== -->
<section id="scrum-mecanique" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : La Mécanique du Sprint (Artefacts & Événements)</h3>

    <!-- Étude de cas intégrée -->
    <div class="bg-yellow-50 p-5 rounded-lg border border-yellow-200 mb-8">
        <h4 class="font-bold text-yellow-900 mb-2">📚 Étude de Cas Fil Rouge : "MarketPlace Bio"</h4>
        <p class="text-sm text-yellow-800">
            Nous développons une application de vente de légumes bio. <br>
            <strong>Contexte :</strong> Le client veut lancer une première version rapidement pour tester le marché.
        </p>
    </div>

    <div class="space-y-8">
        <!-- Product Backlog -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800">2.1 Le Product Backlog (Carnet de Produit)</h4>
            <p class="text-gray-700 mb-2 text-sm">Liste ordonnée et vivante de tout ce qui est nécessaire au produit.</p>
            <div class="bg-gray-100 p-3 rounded text-sm font-mono">
                <p><strong>Exemple pour "MarketPlace Bio" (Priorisé) :</strong></p>
                <ol class="list-decimal ml-5">
                    <li>En tant que client, je veux voir la liste des légumes (Priorité Haute)</li>
                    <li>En tant que client, je veux ajouter un panier (Priorité Haute)</li>
                    <li>En tant que client, je veux payer par carte (Priorité Moyenne)</li>
                    <li>En tant que client, je veux noter le producteur (Priorité Basse - Future Release)</li>
                </ol>
            </div>
        </div>

        <!-- Le Sprint -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-4">2.2 Le Cycle de Vie d'un Sprint</h4>
            <p class="text-gray-700 mb-4 text-sm">Un sprint dure généralement entre 2 et 4 semaines. C'est un bloc de temps fixe (Timebox).</p>
            
            <div class="relative border-l-4 border-blue-200 ml-3 space-y-6">
                <!-- Planning -->
                <div class="ml-6">
                    <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 text-white text-xs font-bold">1</span>
                    <h5 class="font-bold text-gray-800">Sprint Planning (Début)</h5>
                    <p class="text-sm text-gray-600">
                        <strong>Qui :</strong> Toute l'équipe.<br>
                        <strong>Quoi :</strong> Le PO présente le "Quoi", l'équipe décide du "Comment" et s'engage sur une quantité de travail.<br>
                        <strong>Outil :</strong> Planning Poker (pour estimer la complexité en Story Points).
                    </p>
                </div>

                <!-- Daily -->
                <div class="ml-6">
                    <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 text-white text-xs font-bold">2</span>
                    <h5 class="font-bold text-gray-800">Daily Scrum (Tous les jours)</h5>
                    <p class="text-sm text-gray-600">
                        <strong>Durée :</strong> 15 min max, debout.<br>
                        <strong>Objectif :</strong> Synchronisation. Pas de reporting hiérarchique !
                    </p>
                </div>

                <!-- Review -->
                <div class="ml-6">
                    <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 text-white text-xs font-bold">3</span>
                    <h5 class="font-bold text-gray-800">Sprint Review (Fin)</h5>
                    <p class="text-sm text-gray-600">
                        <strong>Quoi :</strong> Démonstration du logiciel fonctionnel (L'Incrément) aux parties prenantes (Clients). On inspecte le résultat.
                    </p>
                </div>

                <!-- Retro -->
                <div class="ml-6">
                    <span class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 text-white text-xs font-bold">4</span>
                    <h5 class="font-bold text-gray-800">Sprint Retrospective (Fin)</h5>
                    <p class="text-sm text-gray-600">
                        <strong>Quoi :</strong> L'équipe s'inspecte elle-même. Qu'est-ce qui a marché ? Qu'est-ce qu'on doit améliorer dans nos processus ?
                    </p>
                </div>
            </div>
        </div>

        <!-- DoD -->
        <div class="bg-green-50 p-6 rounded-lg shadow-sm border border-green-200">
            <h4 class="text-lg font-bold text-green-900">Concept Clé : Definition of Done (DoD)</h4>
            <p class="text-sm text-green-800 mb-2">Quand est-ce qu'une tâche est vraiment "finie" ?</p>
            <ul class="list-disc ml-5 text-sm text-green-800 italic">
                <li>Le code est écrit.</li>
                <li>Les tests unitaires passent.</li>
                <li>La documentation est à jour.</li>
                <li>Le code est déployé sur l'environnement de test.</li>
            </ul>
            <p class="text-xs mt-2 text-green-700 font-bold">Sans DoD, on ne peut pas clôturer une User Story.</p>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 3 : OUTILS ET INDICATEURS (JIRA) ========== -->
<section id="jira-pratique" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 3 : Pilotage avec Jira et Indicateurs</h3>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">3.1 Le Tableau Scrum (Kanban board)</h4>
            <p class="text-sm text-gray-600 mb-4">Visualisation du flux de travail en temps réel.</p>
            <div class="flex justify-between text-center text-xs font-bold text-white gap-1">
                <div class="bg-gray-400 p-2 flex-1 rounded">BACKLOG</div>
                <div class="bg-blue-500 p-2 flex-1 rounded">A FAIRE</div>
                <div class="bg-yellow-500 p-2 flex-1 rounded">EN COURS</div>
                <div class="bg-orange-500 p-2 flex-1 rounded">A TESTER</div>
                <div class="bg-green-500 p-2 flex-1 rounded">DONE</div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">3.2 La Vélocité</h4>
            <p class="text-sm text-gray-600 text-justify">
                C'est la quantité de travail (en points) que l'équipe est capable de livrer en un Sprint.
                <br><em>Exemple : Sprint 1 = 20 pts, Sprint 2 = 22 pts, Sprint 3 = 18 pts.</em>
                <br><strong>Vélocité moyenne = 20 pts.</strong> Cela permet au PO de prédire les dates de livraison futures.
            </p>
        </div>
    </div>

    <div class="mt-6 bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="text-lg font-bold text-gray-800 mb-2">3.3 Le Burndown Chart</h4>
        <p class="text-sm text-gray-600 mb-4">
            Graphique qui montre le <strong>travail restant</strong> jour après jour.
        </p>
        <ul class="list-disc ml-5 text-sm text-gray-600">
            <li><strong>Axe X :</strong> Jours du sprint.</li>
            <li><strong>Axe Y :</strong> Points d'effort restants.</li>
            <li><strong>Courbe idéale :</strong> Diagonale descendante parfaite.</li>
            <li><strong>Courbe réelle :</strong> Si elle est au-dessus de l'idéale, on est en retard. En dessous, on est en avance.</li>
        </ul>
    </div>
</section>

<!-- ========== CHAPITRE 4 : EXERCICES D'APPLICATION ========== -->
<section id="exercices-agile" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 4 : Exercices Pratiques et Corrigés</h3>

    <div class="space-y-8">
        
        <!-- EXERCICE 1 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Exercice 1 : Qui fait quoi ? (Rôles)</h4>
            <p class="text-gray-700 mb-4">Dans le projet "MarketPlace Bio", identifiez qui doit prendre la décision dans les situations suivantes :</p>
            <ul class="list-decimal ml-6 text-sm text-gray-700 space-y-2 mb-4">
                <li>Le client demande d'ajouter une fonction "Paiement par Bitcoin" en plein milieu du Sprint.</li>
                <li>L'équipe se rend compte qu'elle ne pourra pas finir la page "Panier" avant la fin du Sprint.</li>
                <li>Deux développeurs se disputent sur le choix de la base de données (SQL vs NoSQL).</li>
                <li>L'équipe a besoin d'un nouveau serveur de test, mais la DSI bloque la demande.</li>
            </ul>

            <button class="solution-toggle mt-2 text-blue-600 hover:underline font-semibold">▼ Voir la solution</button>
            <div class="solution-content hidden mt-4 bg-green-50 p-4 rounded text-sm border-l-4 border-green-500">
                <p><strong>Corrigé :</strong></p>
                <ol class="list-decimal ml-5 space-y-1">
                    <li><strong>Product Owner (PO) :</strong> C'est lui qui gère le besoin. Il refusera probablement l'ajout <em>dans le sprint en cours</em> (pour ne pas déstabiliser l'équipe) mais l'ajoutera au Backlog pour plus tard.</li>
                    <li><strong>L'Équipe de Développement :</strong> Ils doivent alerter le PO. Ensemble, ils décideront de retirer cette tâche du sprint ou de la simplifier.</li>
                    <li><strong>L'Équipe de Développement :</strong> Les choix techniques appartiennent à ceux qui font (pas au PO, ni au SM). Le SM peut faciliter la discussion.</li>
                    <li><strong>Scrum Master (SM) :</strong> C'est un obstacle (impediment). Le SM doit aller voir la DSI pour débloquer la situation.</li>
                </ol>
            </div>
        </div>

        <!-- EXERCICE 2 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Exercice 2 : Calcul de Vélocité & Planification</h4>
            <p class="text-gray-700 mb-4">
                L'équipe "Alpha" a réalisé les scores suivants sur les 3 derniers sprints : <strong>24 pts, 26 pts, 22 pts</strong>.<br>
                Le Product Backlog restant contient <strong>120 points</strong>.
                <br>Question : Combien de Sprints faudra-t-il (environ) pour tout finir ?
            </p>

            <button class="solution-toggle mt-2 text-blue-600 hover:underline font-semibold">▼ Voir la solution</button>
            <div class="solution-content hidden mt-4 bg-green-50 p-4 rounded text-sm border-l-4 border-green-500">
                <p><strong>Corrigé :</strong></p>
                <p class="mb-2">1. Calcul de la vélocité moyenne : (24 + 26 + 22) / 3 = <strong>24 points / sprint</strong>.</p>
                <p class="mb-2">2. Calcul du nombre de sprints : 120 points (reste à faire) / 24 points (vélocité) = <strong>5 Sprints</strong>.</p>
                <p><em>Note : C'est une estimation. En Agile, on sait que cela peut varier, mais cela donne une visibilité au client.</em></p>
            </div>
        </div>

        <!-- EXERCICE 3 -->
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Exercice 3 : Analyse de Burndown Chart</h4>
            <p class="text-gray-700 mb-4">
                Vous êtes Scrum Master. Au milieu du sprint (jour 5 sur 10), vous regardez le Burndown Chart. La courbe réelle est horizontale (plate) depuis 3 jours et reste très au-dessus de la courbe idéale.
                <br>Que se passe-t-il ? Que faites-vous ?
            </p>

            <button class="solution-toggle mt-2 text-blue-600 hover:underline font-semibold">▼ Voir la solution</button>
            <div class="solution-content hidden mt-4 bg-green-50 p-4 rounded text-sm border-l-4 border-green-500">
                <p><strong>Analyse :</strong> Une courbe plate signifie qu'aucune tâche n'a été terminée ("Done") depuis 3 jours. L'équipe travaille, mais ne finit rien. C'est un signe de blocage ou de tâches trop grosses.</p>
                <p><strong>Action du SM :</strong></p>
                <ul class="list-disc ml-5">
                    <li>En parler au <strong>Daily Scrum</strong> immédiatement.</li>
                    <li>Demander : "Est-ce qu'on est bloqué par quelque chose ?" (Attente validation, bug technique...).</li>
                    <li>Vérifier si les tâches ne sont pas trop grosses. Si oui, proposer de les découper pour faire avancer le tableau.</li>
                </ul>
            </div>
        </div>

    </div>
    
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>

<script>
    // Petit script JS pour gérer l'affichage des solutions (Toggle)
    document.querySelectorAll('.solution-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            if (content.classList.contains('hidden')) {
                button.textContent = '▼ Voir la solution';
            } else {
                button.textContent = '▲ Masquer la solution';
            }
        });
    });
</script>
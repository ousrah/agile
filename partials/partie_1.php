<!-- =================================================================== -->
<!-- PARTIE 1 : FONDAMENTAUX DE LA GESTION DE PROJET (NIVEAU AVANCÉ) -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 1 : Fondamentaux et Méthodologies de Projet</h2>

<!-- ========== CHAPITRE 1 : DÉFINITIONS ET CONCEPTS CLÉS ========== -->
<section id="concepts-base" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Définitions et Concepts Clés</h3>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1.1 Qu'est-ce qu'un Projet ?</h4>
        <p class="text-gray-700 mb-4 text-justify">
            Selon le <strong>PMI (Project Management Institute)</strong>, un projet est une entreprise <strong>temporaire</strong> initiée dans le but de fournir un produit, un service ou un résultat <strong>unique</strong>.
        </p>
        <div class="grid md:grid-cols-3 gap-4 mt-4">
            <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500">
                <h5 class="font-bold text-blue-900">Temporaire</h5>
                <p class="text-sm text-blue-800">Tout projet a un début et une fin définis. Il n'est pas une activité continue (comme la maintenance ou la production).</p>
            </div>
            <div class="bg-green-50 p-4 rounded border-l-4 border-green-500">
                <h5 class="font-bold text-green-900">Unique</h5>
                <p class="text-sm text-green-800">Le résultat final est spécifique et nouveau (ex: un nouveau logiciel, une migration de base de données).</p>
            </div>
            <div class="bg-purple-50 p-4 rounded border-l-4 border-purple-500">
                <h5 class="font-bold text-purple-900">Progressif</h5>
                <p class="text-sm text-purple-800">Un projet s'élabore par étapes. On part d'une idée vague pour arriver à des spécifications précises.</p>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-xl font-bold text-gray-800 mb-2">1.2 La Gestion de Projet (Project Management)</h4>
            <p class="text-gray-700 text-justify">
                C'est l'application de connaissances, de compétences, d'outils et de techniques aux activités du projet afin d'en respecter les exigences. Elle vise à équilibrer les contraintes concurrentes du projet (Qualité, Coût, Délai).
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-xl font-bold text-gray-800 mb-2">1.3 Spécificités de la Gestion de Projet Informatique</h4>
            <p class="text-gray-700 mb-2">Les projets IT se distinguent par :</p>
            <ul class="list-disc ml-6 text-gray-700 space-y-1">
                <li><strong>L'immatérialité :</strong> Le produit (logiciel) est abstrait, difficile à visualiser avant la fin.</li>
                <li><strong>La complexité technologique :</strong> Évolution rapide des langages et outils.</li>
                <li><strong>L'incertitude :</strong> Il est souvent difficile de définir parfaitement le besoin au début (d'où l'essor de l'Agile).</li>
            </ul>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 2 : ACTEURS ET RÔLES ========== -->
<section id="acteurs-roles" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : Acteurs, Rôles et Responsabilités</h3>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.1 Les Parties Prenantes (Stakeholders)</h4>
        <p class="text-gray-700 mb-4">Ce sont tous les individus ou organisations activement impliqués dans le projet ou dont les intérêts peuvent être affectés positivement ou négativement par l'exécution du projet.</p>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-4 rounded">
                <h5 class="font-bold text-gray-900 border-b pb-2 mb-2">Acteurs Internes</h5>
                <ul class="list-disc ml-5 text-sm text-gray-700 space-y-2">
                    <li><strong>Le Sponsor :</strong> La personne qui finance le projet et le défend politiquement.</li>
                    <li><strong>L'Équipe Projet :</strong> Développeurs, designers, architectes.</li>
                    <li><strong>La Direction :</strong> Valide la stratégie.</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-4 rounded">
                <h5 class="font-bold text-gray-900 border-b pb-2 mb-2">Acteurs Externes</h5>
                <ul class="list-disc ml-5 text-sm text-gray-700 space-y-2">
                    <li><strong>Clients / Utilisateurs finaux :</strong> Ceux qui utiliseront le produit.</li>
                    <li><strong>Fournisseurs :</strong> Prestataires, hébergeurs, vendeurs de licences.</li>
                    <li><strong>Régulateurs :</strong> Organismes imposant des lois (ex: CNDP pour les données au Maroc).</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.2 La distinction MOA / MOE</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300 text-sm">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 p-3 text-left w-1/2">Maîtrise d'Ouvrage (MOA) - Le Client</th>
                        <th class="border border-gray-300 p-3 text-left w-1/2">Maîtrise d'Œuvre (MOE) - Le Réalisateur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 p-3 align-top">
                            <ul class="list-disc ml-4 space-y-1">
                                <li>Définit les objectifs et le budget.</li>
                                <li>Exprime le besoin fonctionnel (Cahier des charges).</li>
                                <li>Valide les livrables (Recette fonctionnelle).</li>
                                <li><strong>Responsable :</strong> Chef de Projet MOA.</li>
                            </ul>
                        </td>
                        <td class="border border-gray-300 p-3 align-top">
                            <ul class="list-disc ml-4 space-y-1">
                                <li>Conçoit la solution technique.</li>
                                <li>Réalise le produit (développement).</li>
                                <li>Garantit la qualité technique, les coûts et les délais.</li>
                                <li><strong>Responsable :</strong> Chef de Projet MOE (Informatique).</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-500 shadow-sm">
        <h4 class="text-xl font-bold text-yellow-900 mb-3">2.3 La Matrice RACI (Assignation des responsabilités)</h4>
        <p class="text-gray-800 text-sm mb-4">Outil indispensable pour éviter les conflits et les "trous dans la raquette". Pour chaque tâche, on définit :</p>
        <ul class="grid md:grid-cols-2 gap-4 text-sm text-gray-800">
            <li><strong class="text-red-600">R - Responsible (Réalisateur) :</strong> Celui qui fait le travail. (Le développeur).</li>
            <li><strong class="text-red-600">A - Accountable (Responsable/Approbateur) :</strong> Celui qui a l'autorité finale et qui rend des comptes. Il n'y en a qu'un seul par tâche (souvent le Chef de Projet).</li>
            <li><strong class="text-red-600">C - Consulted (Consulté) :</strong> Expert qu'on consulte avant de décider (ex: un Architecte DB). Communication bidirectionnelle.</li>
            <li><strong class="text-red-600">I - Informed (Informé) :</strong> Personne tenue au courant de l'avancement. Communication unidirectionnelle.</li>
        </ul>
    </div>
</section>

<!-- ========== CHAPITRE 3 : CARACTÉRISTIQUES ET CONTRAINTES ========== -->
<section id="caracteristiques" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 3 : Caractéristiques et Contraintes</h3>
    
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Caractéristiques -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-3">Caractéristiques de base</h4>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start"><span class="text-blue-500 mr-2">➤</span> <strong>Objectif SMART :</strong> Spécifique, Mesurable, Atteignable, Réaliste, Temporellement défini.</li>
                <li class="flex items-start"><span class="text-blue-500 mr-2">➤</span> <strong>Cycle de vie :</strong> Découpage en phases (Cadrage, Conception, Réalisation, Clôture).</li>
                <li class="flex items-start"><span class="text-blue-500 mr-2">➤</span> <strong>Irréversibilité :</strong> Certaines décisions (choix technologiques) sont difficiles à changer plus tard.</li>
            </ul>
        </div>

        <!-- Contraintes -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-3">Le Triangle d'Or (Q-C-D)</h4>
            <p class="text-sm text-gray-600 mb-3">La gestion de projet est un art de l'équilibre entre trois contraintes interdépendantes :</p>
            <div class="space-y-2 text-gray-700">
                <p><strong>1. Qualité / Périmètre (Scope) :</strong> Ce qu'il faut faire.</p>
                <p><strong>2. Coût (Cost) :</strong> Le budget et les ressources humaines.</p>
                <p><strong>3. Délai (Time) :</strong> Le temps imparti.</p>
            </div>
            <p class="text-xs text-red-600 mt-3 font-semibold"><em>Règle : Si on modifie l'un des côtés, au moins un des autres doit changer (ex: réduire le délai = augmenter le coût ou réduire la qualité).</em></p>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 4 : MÉTHODOLOGIES PRÉVISIBLES (CLASSIQUES) ========== -->
<section id="methodes-classiques" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 4 : Méthodologies Prévisibles (Classiques)</h3>
    <p class="text-gray-700 mb-6">Ces méthodes reposent sur l'idée que l'on peut tout planifier à l'avance. Elles sont séquentielles.</p>

    <div class="space-y-8">
        <!-- Waterfall -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-xl font-bold text-gray-800 mb-2">4.1 La Méthode en Cascade (Waterfall)</h4>
            <p class="text-gray-700 mb-2">Le modèle historique. Chaque phase doit être <strong>validée et terminée</strong> avant de passer à la suivante. Le flux descend comme une chute d'eau.</p>
            <p class="text-sm text-gray-500 mb-4">Étapes : Exigences -> Analyse -> Conception -> Implémentation -> Test -> Maintenance.</p>
            <div class="bg-red-50 p-3 rounded text-sm text-red-800">
                <strong>Inconvénient majeur :</strong> L'effet tunnel. Le client ne voit le produit qu'à la toute fin. Si le besoin a changé entre temps, c'est l'échec.
            </div>
        </div>

        <!-- Cycle en V -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-xl font-bold text-gray-800 mb-2">4.2 Le Cycle en V</h4>
            <p class="text-gray-700 mb-4">Une amélioration de la cascade. Le principe est d'associer chaque phase de conception (branche descendante) à une phase de validation/test correspondante (branche montante).</p>
            <ul class="grid md:grid-cols-2 gap-4 text-sm text-gray-700">
                <li>Spécifications Fonctionnelles ↔ Tests de Recette (Acceptation)</li>
                <li>Conception Globale ↔ Tests d'Intégration</li>
                <li>Conception Détaillée ↔ Tests Unitaires</li>
            </ul>
        </div>

        <!-- Cycle en Y -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-xl font-bold text-gray-800 mb-2">4.3 Le Cycle en Y (2TUP - 2 Track Unified Process)</h4>
            <p class="text-gray-700 mb-4">
                Utilisé pour les projets complexes. Il sépare le projet en deux branches (formant un Y) qui avancent en parallèle avant de fusionner :
            </p>
            <div class="grid md:grid-cols-3 gap-4 text-center text-sm">
                <div class="border p-2 rounded bg-blue-50">
                    <strong>Branche gauche :</strong><br>Fonctionnel<br>(Ce que le système doit faire)
                </div>
                <div class="border p-2 rounded bg-purple-50">
                    <strong>Branche droite :</strong><br>Technique<br>(Comment le système sera construit, Architecture)
                </div>
                <div class="border p-2 rounded bg-green-50 col-span-3 md:col-span-1 md:col-start-2">
                    <strong>Fusion :</strong><br>Réalisation & Intégration
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 5 : MÉTHODOLOGIES NON PRÉVISIBLES (AGILES) ========== -->
<section id="methodes-agiles" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 5 : Méthodologies Non Prévisibles (Agiles)</h3>
    <p class="text-gray-700 mb-6">L'Agile n'est pas une méthode, c'est une philosophie (Mindset) née pour répondre à l'imprévisibilité des projets IT.</p>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">5.1 Le Manifeste Agile (2001)</h4>
        <p class="text-gray-700 mb-4">4 valeurs fondamentales qui privilégient :</p>
        <ul class="list-none space-y-3">
            <li class="flex items-center bg-green-50 p-2 rounded"><span class="font-bold mr-2">1.</span> Les <strong>individus et leurs interactions</strong> plus que les processus et les outils.</li>
            <li class="flex items-center bg-green-50 p-2 rounded"><span class="font-bold mr-2">2.</span> Des <strong>logiciels opérationnels</strong> plus qu’une documentation exhaustive.</li>
            <li class="flex items-center bg-green-50 p-2 rounded"><span class="font-bold mr-2">3.</span> La <strong>collaboration avec les clients</strong> plus que la négociation contractuelle.</li>
            <li class="flex items-center bg-green-50 p-2 rounded"><span class="font-bold mr-2">4.</span> L’<strong>adaptation au changement</strong> plus que le suivi d’un plan.</li>
        </ul>
    </div>

    <!-- Tableau comparatif Agile vs Waterfall -->
    <div class="overflow-x-auto mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">5.2 Agile vs Waterfall (Comparaison)</h4>
        <table class="min-w-full bg-white border border-gray-300 text-sm">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="py-3 px-4 border">Critère</th>
                    <th class="py-3 px-4 border">Waterfall (Cascade)</th>
                    <th class="py-3 px-4 border">Agile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border font-bold">Approche</td>
                    <td class="py-2 px-4 border">Séquentielle, Linéaire.</td>
                    <td class="py-2 px-4 border">Itérative, Incrémentale.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border font-bold">Flexibilité</td>
                    <td class="py-2 px-4 border">Faible. Le changement coûte cher.</td>
                    <td class="py-2 px-4 border">Élevée. Le changement est bienvenu.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border font-bold">Livraison</td>
                    <td class="py-2 px-4 border">Unique, en fin de projet (Big Bang).</td>
                    <td class="py-2 px-4 border">Fréquente, par petits morceaux utilisables.</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border font-bold">Client</td>
                    <td class="py-2 px-4 border">Impliqué au début et à la fin.</td>
                    <td class="py-2 px-4 border">Impliqué tout au long du projet.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-lg shadow-sm border">
            <h5 class="font-bold text-blue-600 mb-2">La Méthode Scrum</h5>
            <p class="text-sm text-gray-600">Framework agile le plus populaire. Repose sur des cycles courts (Sprints) et des rôles définis (PO, Scrum Master, Team). <em>(Détaillé en Partie 3)</em>.</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-sm border">
            <h5 class="font-bold text-blue-600 mb-2">La Méthode Kanban</h5>
            <p class="text-sm text-gray-600">Inspiré de Toyota. Système visuel (étiquettes) pour gérer le flux de travail. Pas de sprints fixes, mais un flux continu. Limite le travail en cours (WIP).</p>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-sm border">
            <h5 class="font-bold text-blue-600 mb-2">La Méthode Lean</h5>
            <p class="text-sm text-gray-600">Philosophie visant à maximiser la valeur client en éliminant tout gaspillage (réunions inutiles, fonctionnalités superflues, attente).</p>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 6 : ÉTAPES DE GESTION (CADRAGE) ========== -->
<section id="etapes-gestion" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 6 : Les Étapes de Cadrage d'un Projet</h3>
    <p class="text-gray-700 mb-6">Avant de lancer le développement (Coding), il faut une phase cruciale de préparation.</p>

    <div class="space-y-6">
        <div class="flex items-start">
            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold mr-4">1</div>
            <div>
                <h4 class="text-lg font-bold text-gray-800">Compréhension des besoins client</h4>
                <p class="text-gray-700 text-sm">Il faut distinguer le <strong>Besoin Explicite</strong> (ce que le client demande) du <strong>Besoin Implicite</strong> (ce dont il a réellement besoin mais qu'il ne formule pas). L'écoute active et la reformulation sont clés.</p>
            </div>
        </div>

        <div class="flex items-start">
            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold mr-4">2</div>
            <div>
                <h4 class="text-lg font-bold text-gray-800">Contexte du projet</h4>
                <p class="text-gray-700 text-sm">Pourquoi lance-t-on ce projet maintenant ? (Ex: Obsolescence technique, nouvelle loi, concurrence, opportunité commerciale). C'est la justification stratégique.</p>
            </div>
        </div>

        <div class="flex items-start">
            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold mr-4">3</div>
            <div>
                <h4 class="text-lg font-bold text-gray-800">Périmètre du projet (Scope)</h4>
                <p class="text-gray-700 text-sm">Définir ce qui est <strong>IN</strong> (inclus dans le projet) et ce qui est <strong>OUT</strong> (hors périmètre). Cela évite la dérive des objectifs (Scope Creep).</p>
            </div>
        </div>

        <div class="flex items-start">
            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold mr-4">4</div>
            <div>
                <h4 class="text-lg font-bold text-gray-800">Détection des risques</h4>
                <p class="text-gray-700 text-sm">Identifier ce qui pourrait mal se passer.
                    <br><em>Exemples :</em> Risque technique (technologie non maîtrisée), Risque humain (départ d'un expert), Risque planning (délais irréalistes).
                </p>
            </div>
        </div>

        <div class="flex items-start">
            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold mr-4">5</div>
            <div>
                <h4 class="text-lg font-bold text-gray-800">Proposition des solutions</h4>
                <p class="text-gray-700 text-sm">Sur la base de l'analyse, proposer une ou plusieurs solutions techniques et fonctionnelles (Faisabilité, Budget estimatif, Planning macro).</p>
            </div>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>
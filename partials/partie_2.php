<!-- =================================================================== -->
<!-- PARTIE 2 : PLANIFICATION ET PILOTAGE DE PROJET -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 2 : Planifier un Projet</h2>

<div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-8">
    <p class="text-blue-700 text-sm">
        <strong>Introduction :</strong> La planification ne consiste pas seulement à mettre des dates sur un calendrier. C'est un processus complexe qui vise à transformer un besoin abstrait en un plan d'action concret, chiffré et ordonnancé.
    </p>
</div>

<!-- ========== CHAPITRE 1 : ANALYSE ET CADRAGE ========== -->
<section id="analyse-besoins" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Analyse du Cahier des Charges</h3>

    <!-- 1.1 Compréhension des besoins -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">1.1 La Typologie des Besoins</h4>
        <p class="text-gray-700 mb-4">
            Le point de départ de tout projet est l'expression du besoin. Un bon Chef de Projet (CP) ne se contente pas d'écouter, il analyse.
        </p>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="border p-4 rounded bg-gray-50">
                <h5 class="font-bold text-green-700 mb-2">Besoins Explicites</h5>
                <p class="text-sm text-gray-700">Ce sont les besoins clairement exprimés par le client. Ils sont écrits dans le cahier des charges.</p>
                <p class="text-xs text-gray-500 mt-2"><em>Exemple : "Je veux que le site soit accessible en trois langues."</em></p>
            </div>
            <div class="border p-4 rounded bg-gray-50">
                <h5 class="font-bold text-red-700 mb-2">Besoins Implicites</h5>
                <p class="text-sm text-gray-700">Ce sont les besoins non-dits, car ils semblent "évidents" pour le client, mais qui sont cruciaux. Si vous les ignorez, le projet échouera.</p>
                <p class="text-xs text-gray-500 mt-2"><em>Exemple : "Le site doit être sécurisé et rapide" (même si le client ne l'a pas précisé).</em></p>
            </div>
        </div>
    </div>

    <!-- 1.2 Périmètre et Dérive -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">1.2 La Gestion du Périmètre (Scope)</h4>
        <p class="text-gray-700 mb-3">
            Le périmètre définit les frontières du projet : ce qui est inclus et ce qui est exclu.
        </p>
        <div class="bg-yellow-50 p-4 rounded border-l-4 border-yellow-400">
            <h5 class="font-bold text-yellow-900">Attention à la "Dérive des Objectifs" (Scope Creep)</h5>
            <p class="text-sm text-yellow-800 mt-1">
                C'est l'ajout incontrôlé de fonctionnalités en cours de projet sans ajustement du budget ou des délais.
                <br><strong>Analogie :</strong> Aller au supermarché pour acheter du lait et ressortir avec un chariot plein. En gestion de projet, cela tue la rentabilité.
            </p>
        </div>
    </div>

    <!-- 1.3 Gestion des Risques -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-3">1.3 Identification des Risques</h4>
        <p class="text-gray-700 mb-4">Un risque est un événement incertain qui, s'il se produit, a un effet négatif sur le projet. On doit les identifier tôt.</p>
        <ul class="grid md:grid-cols-2 gap-3 text-sm text-gray-700">
            <li class="flex items-center"><span class="text-red-500 mr-2">⚠️</span> <strong>Risques Humains :</strong> Départ d'un expert, conflit dans l'équipe, maladie.</li>
            <li class="flex items-center"><span class="text-red-500 mr-2">⚠️</span> <strong>Risques Techniques :</strong> Obsolescence, panne serveur, complexité sous-estimée.</li>
            <li class="flex items-center"><span class="text-red-500 mr-2">⚠️</span> <strong>Risques Financiers :</strong> Coupe budgétaire, faillite d'un fournisseur.</li>
            <li class="flex items-center"><span class="text-red-500 mr-2">⚠️</span> <strong>Risques Juridiques :</strong> Changement de loi (ex: RGPD), propriété intellectuelle.</li>
        </ul>
    </div>
</section>

<!-- ========== CHAPITRE 2 : DÉCOUPAGE ET ESTIMATION ========== -->
<section id="decoupage-estimation" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : Découpage et Estimation (WBS & PERT)</h3>

    <!-- 2.1 WBS -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">2.1 Le WBS (Work Breakdown Structure)</h4>
        <p class="text-gray-700 mb-4">
            Appelé <strong>OT (Organigramme des Tâches)</strong> en français. C'est la décomposition hiérarchique du travail à exécuter.
        </p>
        
        <div class="flex flex-col md:flex-row gap-4 mb-4">
            <div class="flex-1 bg-gray-100 p-3 rounded">
                <h6 class="font-bold text-blue-600">Approche Descendante (Top-Down)</h6>
                <p class="text-xs text-gray-600">On part du projet global et on divise en sous-projets, puis en tâches. Idéal quand on connaît bien le produit final.</p>
            </div>
            <div class="flex-1 bg-gray-100 p-3 rounded">
                <h6 class="font-bold text-purple-600">Approche Ascendante (Bottom-Up)</h6>
                <p class="text-xs text-gray-600">On liste toutes les petites tâches et on les regroupe. Idéal pour les projets innovants ou flous.</p>
            </div>
        </div>
        
        <div class="text-center py-4 bg-gray-50 border border-dashed border-gray-300 rounded">
            <span class="font-bold text-gray-700">Structure :</span> Projet ➔ Phases ➔ Lots de travaux ➔ Tâches unitaires
        </div>
    </div>

    <!-- 2.2 Distinction Charge vs Durée -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">2.2 Distinction Clé : Charge vs Durée</h4>
        <p class="text-gray-700 mb-4">Confusion fréquente chez les débutants !</p>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="p-4 border-l-4 border-indigo-500 bg-indigo-50">
                <h5 class="font-bold text-indigo-900">La Charge (Work)</h5>
                <p class="text-sm text-indigo-800">C'est la quantité de travail nécessaire. Elle s'exprime en <strong>Jours-Homme (J/H)</strong>.</p>
                <p class="text-xs mt-2"><em>Exemple : Peindre un mur demande 2 jours de travail (2 J/H).</em></p>
            </div>
            <div class="p-4 border-l-4 border-pink-500 bg-pink-50">
                <h5 class="font-bold text-pink-900">La Durée (Duration)</h5>
                <p class="text-sm text-pink-800">C'est le temps calendaire qui s'écoule. Elle dépend des ressources.</p>
                <p class="text-xs mt-2"><em>Exemple : Si j'ai 1 peintre, durée = 2 jours. Si j'ai 2 peintres, durée = 1 jour.</em></p>
            </div>
        </div>
    </div>

    <!-- 2.3 Estimation PERT -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-3">2.3 Techniques d'Estimation : La méthode PERT</h4>
        <p class="text-gray-700 mb-4">
            Comment estimer la durée d'une tâche quand on n'est pas sûr ? On utilise l'estimation à 3 points (PERT) pour pondérer l'incertitude.
        </p>
        
        <div class="bg-gray-900 text-white p-4 rounded-lg font-mono text-center mb-4">
            Durée Moyenne = (Optimiste + Pessimiste + 4 × Plus_Probable) / 6
        </div>

        <ul class="list-disc ml-6 text-sm text-gray-700 space-y-2">
            <li><strong>Optimiste (Do) :</strong> Tout se passe à merveille.</li>
            <li><strong>Pessimiste (Dp) :</strong> Tout va mal (bugs, retards).</li>
            <li><strong>Plus Probable (Dc) :</strong> Scénario réaliste standard.</li>
        </ul>
        <p class="text-xs text-gray-500 mt-2 italic">Cette formule donne plus de poids à la probabilité réaliste tout en considérant les risques extrêmes.</p>
    </div>
</section>

<!-- ========== CHAPITRE 3 : ORDONNANCEMENT ========== -->
<section id="ordonnancement" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 3 : Ordonnancement et Chemin Critique</h3>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">3.1 Le Réseau PERT (Logique)</h4>
        <p class="text-gray-700 mb-4">
            Le diagramme de PERT représente les tâches sous forme de réseau pour visualiser les <strong>dépendances</strong> (qu'est-ce qui doit être fini avant de commencer la suite ?).
        </p>
        <ul class="list-none space-y-2 text-sm text-gray-700">
            <li>🔵 <strong>Tâche :</strong> Représentée par une flèche ou une boite.</li>
            <li>⚫ <strong>Étape :</strong> Début ou fin d'une tâche.</li>
            <li>🔴 <strong>Dépendance :</strong> Lien obligatoire (ex: On ne peut pas monter le toit avant les murs).</li>
        </ul>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">3.2 Le Chemin Critique (CPM)</h4>
        <p class="text-gray-700 mb-3">
            C'est le concept le plus important en planification. Dans un réseau de tâches, il existe plusieurs chemins pour aller du début à la fin.
        </p>
        <div class="p-4 bg-red-50 border border-red-200 rounded mb-4">
            <p class="font-bold text-red-800">Définition :</p>
            <p class="text-red-700 text-sm">
                Le <strong>Chemin Critique</strong> est la séquence de tâches la plus longue qui détermine la durée totale minimale du projet.
            </p>
        </div>
        <ul class="list-disc ml-6 text-sm text-gray-700">
            <li>Les tâches sur ce chemin sont dites <strong>critiques</strong>.</li>
            <li>Elles ont une <strong>marge nulle</strong> (Marge Totale = 0).</li>
            <li><strong>Conséquence :</strong> Tout retard sur une tâche critique retarde la date de fin du projet entier.</li>
        </ul>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-3">3.3 Le Diagramme de GANTT (Visuel)</h4>
        <p class="text-gray-700 mb-4">
            C'est l'outil de communication par excellence. Il traduit le réseau logique (PERT) en calendrier visuel.
        </p>
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <h5 class="font-bold text-gray-800">Utilité :</h5>
                <ul class="list-disc ml-4 text-sm text-gray-600">
                    <li>Visualiser le planning dans le temps.</li>
                    <li>Suivre l'avancement (Barres de progression).</li>
                    <li>Voir qui fait quoi (Ressources).</li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold text-gray-800">Limites :</h5>
                <ul class="list-disc ml-4 text-sm text-gray-600">
                    <li>Devient illisible sur les très gros projets.</li>
                    <li>Demande une mise à jour constante.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 4 : PILOTAGE (COÛTS ET RESSOURCES) ========== -->
<section id="pilotage" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 4 : Pilotage des Ressources et Coûts</h3>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-3">4.1 L'Affectation des Ressources (Lissage)</h4>
        <p class="text-gray-700 mb-3">
            Une fois le planning théorique établi, il faut affecter les humains. Problème : on ne peut pas faire travailler une personne 20h par jour.
        </p>
        <p class="text-sm text-gray-600">
            On doit donc procéder au <strong>Lissage</strong> ou au <strong>Nivellement</strong> des ressources : décaler certaines tâches non critiques (qui ont de la marge) pour éviter la surcharge de travail des équipes.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-3">4.2 La Maîtrise des Coûts</h4>
        <p class="text-gray-700 mb-4">Le budget se construit en plusieurs étapes de précision :</p>
        <ol class="list-decimal ml-6 text-sm text-gray-700 space-y-2">
            <li><strong>Estimation Analogique (Faisabilité) :</strong> Basée sur des projets similaires passés (peu précis : -25% à +75%).</li>
            <li><strong>Estimation Paramétrique (Avant-Projet) :</strong> Utilisation de statistiques et ratios (ex: coût au m² de code).</li>
            <li><strong>Estimation Analytique (Détaillée) :</strong> Somme du coût de chaque tâche unitaire (très précis : -5% à +10%). C'est le budget de référence.</li>
        </ol>
    </div>
    
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>
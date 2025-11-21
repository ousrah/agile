<!-- =================================================================== -->
<!-- PARTIE 4 : QUALITÉ DU CODE ET GESTION DE VERSIONS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 4 : Qualité du Code & Versioning</h2>

<!-- ========== CHAPITRE 1 : GIT ET GITLAB ========== -->
<section id="git-gitlab" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 1 : Git & GitLab</h3>
    <p class="text-gray-700 mb-6">
        Pour travailler en équipe sans s'écraser le travail les uns les autres, on utilise un <strong>VCS (Version Control System)</strong>. C'est comme une machine à remonter le temps pour votre code.
    </p>

    <div class="grid md:grid-cols-2 gap-6 mb-8">
        <div class="bg-white p-6 rounded-lg shadow-sm border border-l-4 border-orange-500">
            <h4 class="text-xl font-bold text-gray-800 mb-2">Git (Local)</h4>
            <p class="text-gray-600 text-sm mb-2">C'est le logiciel installé sur votre ordinateur.</p>
            <ul class="list-disc ml-6 text-sm text-gray-700">
                <li>C'est un système <strong>décentralisé</strong> (chacun a une copie de tout l'historique).</li>
                <li>Il permet de créer des versions (commits) et des branches.</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border border-l-4 border-purple-500">
            <h4 class="text-xl font-bold text-gray-800 mb-2">GitLab / GitHub (Distant)</h4>
            <p class="text-gray-600 text-sm mb-2">C'est la plateforme web où on stocke le code commun.</p>
            <ul class="list-disc ml-6 text-sm text-gray-700">
                <li>Permet de centraliser le travail de l'équipe.</li>
                <li>Gère les droits d'accès et la collaboration (Merge Requests).</li>
            </ul>
        </div>
    </div>

    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg mb-8">
        <h4 class="text-lg font-bold text-green-400 mb-4">Les Commandes de base à connaître par cœur</h4>
        <div class="grid md:grid-cols-2 gap-4 font-mono text-sm">
            <div>
                <p><span class="text-yellow-300">git init</span> : Initialiser un projet vide.</p>
                <p><span class="text-yellow-300">git clone [url]</span> : Copier un projet distant.</p>
                <p><span class="text-yellow-300">git add .</span> : Préparer les fichiers (Index).</p>
                <p><span class="text-yellow-300">git commit -m "msg"</span> : Valider les changements.</p>
            </div>
            <div>
                <p><span class="text-yellow-300">git status</span> : Voir l'état des fichiers.</p>
                <p><span class="text-yellow-300">git push</span> : Envoyer vers le serveur (GitLab).</p>
                <p><span class="text-yellow-300">git pull</span> : Récupérer les mises à jour.</p>
                <p><span class="text-yellow-300">git checkout -b [nom]</span> : Créer une branche.</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="text-xl font-bold text-gray-800 mb-2">Collaboration : Le Fork et la Merge Request</h4>
        <p class="text-gray-700 mb-4">Comment travailler ensemble sans casser le code principal ?</p>
        <ol class="list-decimal ml-6 space-y-2 text-gray-700">
            <li><strong>Fork :</strong> Je fais une copie du projet original sur mon compte.</li>
            <li><strong>Branche :</strong> Je crée une branche (ex: <code>feature-login</code>) pour ne pas toucher au code principal (master/main).</li>
            <li><strong>Commit & Push :</strong> Je fais mes modifications et je les envoie sur ma branche en ligne.</li>
            <li><strong>Merge Request (MR) :</strong> Je demande au responsable du projet d'intégrer (fusionner) mon travail. Il vérifie le code avant d'accepter.</li>
        </ol>
    </div>
</section>

<!-- ========== CHAPITRE 2 : QUALITÉ DU CODE (SONARQUBE) ========== -->
<section id="sonarqube" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 2 : Qualité du Code (SonarQube)</h3>
    <p class="text-gray-700 mb-6">
        Écrire du code qui marche, c'est bien. Écrire du code propre, maintenable et sécurisé, c'est mieux. 
        C'est là qu'intervient <strong>SonarQube</strong>.
    </p>

    <div class="bg-blue-50 p-6 rounded-lg border border-blue-200 mb-6">
        <h4 class="text-lg font-bold text-blue-800 mb-2">Définition : SonarQube</h4>
        <p class="text-gray-700">
            C'est un outil open-source d'<strong>analyse statique</strong> du code. Il scanne votre code source pour détecter des bugs, des vulnérabilités de sécurité et du "mauvais code" (code smells).
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">Les 3 indicateurs clés (MFS)</h4>
        <div class="grid md:grid-cols-3 gap-4 text-center">
            <div class="p-4 border rounded hover:shadow-md transition">
                <div class="text-3xl mb-2">🛠️</div>
                <h5 class="font-bold text-gray-800">Maintenabilité</h5>
                <p class="text-xs text-gray-500">Détecte les "Code Smells" (code sale, dupliqué, complexe). C'est la <strong>Dette Technique</strong>.</p>
            </div>
            <div class="p-4 border rounded hover:shadow-md transition">
                <div class="text-3xl mb-2">🐞</div>
                <h5 class="font-bold text-gray-800">Fiabilité</h5>
                <p class="text-xs text-gray-500">Détecte les <strong>Bugs</strong> qui vont faire planter l'application.</p>
            </div>
            <div class="p-4 border rounded hover:shadow-md transition">
                <div class="text-3xl mb-2">🔓</div>
                <h5 class="font-bold text-gray-800">Sécurité</h5>
                <p class="text-xs text-gray-500">Détecte les <strong>Vulnérabilités</strong> (failles) que les pirates peuvent exploiter.</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="text-xl font-bold text-gray-800 mb-2">Les 7 axes de qualité analysés</h4>
        <ul class="grid md:grid-cols-2 gap-2 text-gray-700 text-sm list-disc ml-4">
            <li>Duplication de code (Copier-coller = danger).</li>
            <li>Respect des standards de codage.</li>
            <li>Tests unitaires (Couverture de code).</li>
            <li>Complexité (Code trop compliqué à lire).</li>
            <li>Bugs potentiels.</li>
            <li>Commentaires (Trop ou pas assez).</li>
            <li>Architecture & Design.</li>
        </ul>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>
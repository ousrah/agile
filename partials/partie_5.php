<!-- =================================================================== -->
<!-- PARTIE 5 : LA CHAÎNE DEVOPS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 5 : La Chaîne DevOps</h2>

<!-- ========== CHAPITRE 1 : CONCEPTS DE BASE DEVOPS ========== -->
<section id="devops-concepts" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 1 : Culture & Outils DevOps</h3>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">C'est quoi le DevOps ?</h4>
        <p class="text-gray-700 mb-4">
            Le mot vient de la fusion de <strong>Dev</strong> (Développeurs) et <strong>Ops</strong> (Opérations/Administrateurs système).
            Historiquement, ces deux équipes étaient en conflit : les Devs veulent du changement (nouvelles fonctionnalités), les Ops veulent la stabilité (pas de bugs en prod).
        </p>
        <div class="p-4 bg-purple-50 border-l-4 border-purple-500 text-purple-900">
            <strong>Définition :</strong> DevOps est une culture et un ensemble de pratiques visant à automatiser et intégrer les processus entre le développement logiciel et les équipes informatiques.
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Les Piliers C.A.L.M.S</h4>
            <ul class="list-disc ml-6 text-sm text-gray-700 space-y-1">
                <li><strong>C</strong>ulture : Collaboration et communication.</li>
                <li><strong>A</strong>utomation : Automatiser tout ce qui peut l'être.</li>
                <li><strong>L</strong>ean : Éviter le gaspillage, aller vite.</li>
                <li><strong>M</strong>easurement : Mesurer la performance (KPI).</li>
                <li><strong>S</strong>haring : Partager les connaissances et outils.</li>
            </ul>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Les Outils de la chaîne</h4>
            <ul class="list-disc ml-6 text-sm text-gray-700 space-y-1">
                <li><strong>Code :</strong> Git, GitLab.</li>
                <li><strong>Build/Test (CI) :</strong> Jenkins, GitLab CI.</li>
                <li><strong>Conteneurisation :</strong> Docker.</li>
                <li><strong>Orchestration :</strong> Kubernetes.</li>
                <li><strong>Cloud :</strong> AWS, Azure.</li>
                <li><strong>Monitoring :</strong> Prometheus, Grafana.</li>
            </ul>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 2 : CI/CD AVEC GITLAB ========== -->
<section id="ci-cd-gitlab" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 2 : CI/CD avec GitLab</h3>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">Comprendre le CI/CD</h4>
        <div class="grid md:grid-cols-3 gap-4 text-center">
            <div class="p-4 bg-gray-50 rounded">
                <h5 class="font-bold text-blue-600">CI (Continuous Integration)</h5>
                <p class="text-xs mt-2">Je code, j'envoie sur GitLab. Automatiquement, le code est compilé (Build) et testé. Si ça casse, je suis prévenu tout de suite.</p>
            </div>
            <div class="p-4 bg-gray-50 rounded">
                <h5 class="font-bold text-orange-600">CD (Continuous Delivery)</h5>
                <p class="text-xs mt-2">Livraison Continue. Le code est prêt à être mis en production à tout moment, mais la validation finale est manuelle.</p>
            </div>
            <div class="p-4 bg-gray-50 rounded">
                <h5 class="font-bold text-green-600">CD (Continuous Deployment)</h5>
                <p class="text-xs mt-2">Déploiement Continu. Tout est automatique jusqu'à la mise en ligne pour le client final. C'est le but ultime.</p>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        <div class="bg-white p-6 rounded-lg shadow-sm border">
            <h4 class="text-xl font-bold text-gray-800 mb-2">Le Pipeline GitLab CI</h4>
            <p class="text-gray-700 mb-4">
                Un pipeline est un enchaînement d'étapes (<strong>Stages</strong>) composées de tâches (<strong>Jobs</strong>).
                Tout se configure dans un fichier unique à la racine du projet : <code>.gitlab-ci.yml</code>.
            </p>
            
            <div class="bg-gray-900 text-gray-300 p-4 rounded font-mono text-sm overflow-x-auto">
                <p class="text-gray-500"># Exemple de fichier .gitlab-ci.yml</p>
                <p><span class="text-purple-400">stages:</span></p>
                <p class="pl-4">- build</p>
                <p class="pl-4">- test</p>
                <p class="pl-4">- deploy</p>
                <br>
                <p><span class="text-blue-400">job_build:</span></p>
                <p class="pl-4">stage: build</p>
                <p class="pl-4">script:</p>
                <p class="pl-8">- echo "Compilation du code..."</p>
                <br>
                <p><span class="text-blue-400">job_test:</span></p>
                <p class="pl-4">stage: test</p>
                <p class="pl-4">script:</p>
                <p class="pl-8">- echo "Lancement des tests unitaires..."</p>
                <br>
                <p><span class="text-blue-400">job_deploy:</span></p>
                <p class="pl-4">stage: deploy</p>
                <p class="pl-4">script:</p>
                <p class="pl-8">- echo "Mise en ligne automatique !"</p>
            </div>
        </div>

        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
            <h5 class="font-bold text-yellow-800">Le Runner</h5>
            <p class="text-sm text-yellow-800">
                GitLab est le chef d'orchestre, mais il a besoin d'ouvriers pour exécuter les tâches. Ces ouvriers s'appellent des <strong>Runners</strong>. Ce sont des machines (serveurs) installées avec l'agent GitLab Runner qui exécutent les commandes définies dans votre fichier `.yml`.
            </p>
        </div>
    </div>
    <div class="text-right mt-8"> <a href="#page-top" class="text-sm font-semibold text-blue-600 hover:underline">↑ Retour en haut</a> </div>
</section>
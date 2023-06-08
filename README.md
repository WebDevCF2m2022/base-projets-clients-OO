# base-projets-clients-OO
## Base pour les projets clients en PHP Orienté Objet

Voici la structure minimale demandée pour les projets clients en OO.

- Dossier `datas` : contient les fichiers de données (csv, json, xml, SQL, maquettes etc...) qui peuvent être partagés entre les membres de l'équipe. Comme ce dossier est public et partagé sur github, il ne faut pas y mettre de fichiers sensibles (mots de passe non cryptés, clés d'API etc ...). Les données du localhost sont généralement peu voir non critiques, mais les données du serveur de production doivent être protégées.


- dossier `controllers`, autant des sous-dossiers et de contrôleurs que nécessaire, contient les contrôleurs de l'application.
    - Ces parties Contrôleur peuvent être faites en procédurale et sont appelées depuis le contrôleur frontal `public/index.php` ou depuis un autre contrôleur.
  
Les contrôleurs récupèrent les **requêtes HTTP**, elles font **le lien entre les données (`models`) et les vues (`views`)**. Elles peuvent aussi faire des redirections vers d'autres contrôleurs.


- dossier `models` : contient les classes métiers de l'application.
  - sous-dossier `Mappings` : contient les classes de mapping de nos tables SQL de l'application.
  - sous-dossier `Managers` : contient les classes de gestion de nos tables SQL de l'application.
  - sous-Dossier `Abstracts` : contient les classes abstraites de l'application.
  - sous-Dossier `Interfaces` : contient les interfaces de l'application.
  - sous-Dossier `traits` : contient les traits de l'application.
- dossier `views`
- dossier `public` : contient les fichiers accessibles depuis le navigateur (css, js, images, fichiers statiques etc ...) et surtout le contrôleur frontal `index.php` qui redirige les requêtes vers les contrôleurs.

- Fichier `.gitignore` : pour ignorer les fichiers de configuration de votre IDE, les fichiers de logs, les fichiers de cache, les bibliothèqes ou composants externes etc ...

- Fichier `config.php.bak` : contient les constantes de configuration de l'application (chemins, paramètres de connexion à la base de données etc ...). Il faut le renommer en `config.php` et le compléter avec vos propres paramètres.


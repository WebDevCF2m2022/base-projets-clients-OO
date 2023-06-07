# base-projets-clients-OO
## Base pour les projets clients en PHP Orienté Objet

Voici la structure minimale demandée pour les projets clients en OO.

- Dossier `datas` : contient les fichiers de données (csv, json, xml, SQL, maquettes etc ...) qui peuvent être partagés entre les membres de l'équipe.
- dossier `controllers`, autant des sous-dossiers et de contrôleurs que nécessaire, contient les contrôleurs de l'application.
    - Autant de dossiers et fichires que nécessaires

- dossier `models` : contient les classes métiers de l'application.
  - sous-dossier `Mapping` : contient les classes de mapping de nos tables SQL de l'application.
  - sous-dossier `Manager` : contient les classes de gestion de nos tables SQL de l'application.
  - sous-Dossier `Abstract` : contient les classes abstraites de l'application.
  - sous-Dossier `Interfaces` : contient les interfaces de l'application.
  - sous-Dossier `trait` : contient les traits de l'application.
- dossier `views`
- dossier `public` : contient les fichiers accessibles depuis le navigateur (css, js, images, fichiers statiques etc ...) et surtout le contrôleur frontal `index.php` qui redirige les requêtes vers les contrôleurs.

- Fichier `.gitignore` : pour ignorer les fichiers de configuration de votre IDE, les fichiers de logs, les fichiers de cache, les bibliothèqes ou composants externes etc ...

- Fichier `config.php.bak` : contient les constantes de configuration de l'application (chemins, paramètres de connexion à la base de données etc ...). Il faut le renommer en `config.php` et le compléter avec vos propres paramètres.


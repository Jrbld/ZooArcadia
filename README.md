# Projet STUDI - ECF Zoo Arcadia

# Mise en place du projet et déploiement de l'application

Pour l’élaboration de ce projet, j’ai opté pour une solution avec le framework Symfony.
Si j’ai choisi de travailler avec ce dernier, c’est parce qu’il offre une structure solide pour développer son application avec les différents langages.
J’ai notamment installé le Webpack Encore (grâce à npm), qui m’a permis de bien gérer les différents assets liés à ce projet.
J’ai mis en place le développement en différentes étapes.
J’ai tout d’abord créé un controller par section (HabitatController, HomeController…).
Dans ces controllers, j’ai spécifié les différentes routes menant aux pages (et sous-pages) concernées.
J’ai ensuite défini un fichier JavaScript par section (home.js), lié directement à un fichier CSS (home.css).
Dès lors que ces fichiers étaient créés, je les ai déclarés dans le « webpack.config.js » grâce à la méthode « .addEntry() » en les définissant par un nom, ce qui m’a permis de les appeler directement dans les fichiers Twig.
Dans ce même « webpack.config.js », j’ai déclaré la méthode « .copyFiles() », afin de récupérer les différentes images dont j’avais besoin et que j’avais déposé dans un sous-dossier « images » dans le dossiers « assets » à la racine de mon projet.
J’ai ensuite lié mon projet local avec mon repository distant sur GitHub, puis effectué un « npm run build » pour versionner mes fichiers présents dans assets, qui ont été placés dans un sous-dossier « build » dans le dossier « public ».
J’ai effectué la plupart de mon développement grâce au twig, au html et au css pour l’élaboration visuelle du site.
J’ai également déclaré un peu de script js dans mon fichier « base.html.twig » pour gérer le « menu déroulant/menu burger » qui s’affiche lorsque la taille de l’affichage diminue, ainsi que le changement de couleur pour les logos des réseaux sociaux au survol de ceux-ci.
Puis, j’ai utilisé du php, surtout dans les controllers, afin de déclarer les routes mais aussi de définir des slugs, pour que les URL s’adaptent aux sous-pages sur lesquelles se trouvent l’utilisateur.

Pour ce qui est du déploiement de l’application, j’ai choisi d’utiliser le service payant d’Infomaniak, qui m’a permis de mettre mon site en ligne tout en ayant accès au protocole de sécurité SSH (avec un utilisateur FTP/SSH), à un certificat SSL et j’ai également pu choisir mon nom de domaine.
C’est une solution de déploiement que j’ai trouvé assez intuitive, qui offre un certain nombres d’éléments paramétrables au niveau de l’hébergement et du site.



# Pour une mise en place locale de mon projet

git clone https://github.com/Jrbld/ZooArcadia.git

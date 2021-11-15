<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.xefi.fr/app/uploads/2020/01/logo-2.png" width="400"></a></p>


## Installation du projet

- Créer la base de données en local qui portera le nom "_projet_brice_" ("**create database projet_brice**")
- Faire un git clone du projet depuis la branch "Création" (La version finale du projet se trouve sur celle-ci)
- Modifier (Refactor) le fichier environnement (**env.example**) par (**.env**), completer la ligne "**DB_DATABASE**" par "**DB_DATABASE=projet_brice**"
- Vérifier que composer soit bien installé sur l'ordinateur, puis taper la commande suivante afin d'installer toutes les dépandances nécéssaires : "**composer install**" puis "**composer update**"
- Générer la clé du fichier d'environnement en tapant la commande "**php artisan key:generate**"
- Faire les migrations en tapant la commande "**php artisan migrate:fresh**"
- Envoyer les seeder dans la base de données à l'aide de la commande suivante : "**php artisan db:seed**"
- Vous pouvez dès à présent lancer l'application en tapant la commande "**php artisan serve**"
- Pour vous connecter en tant qu'administrateur à l'application, veuillez vous rendre ici : http://gofile.me/4pwZa/BK77Cze8A
- Le mot de passe de ce fichier est celui des comptes RD.

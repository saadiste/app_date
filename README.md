# Projet Dockerisé d'Affichage de la Date

Ce projet est une application Dockerisée simple qui affiche la date système et la stocke dans une base de données MySQL. Il a été développé avec les technologies suivantes :

- PHP 7.4
- Apache 2.4
- mariadb 10.4.25

## Prérequis

Avant d'exécuter ce projet, assurez-vous d'avoir installé Docker sur votre système. Vous pouvez trouver des instructions d'installation sur le site Web de Docker : [Installation de Docker](https://docs.docker.com/get-docker/).

## Installation et Exécution

1. Clonez ce dépôt sur votre machine :

   ```bash
   git clone URL_DU_DEPOT_GITHUB

2. Naviguez vers le répertoire du projet :

cd nom_du_projet

3. Exécutez les conteneurs Docker en utilisant Docker Compose :

docker-compose up -d

4. Accédez à l'application dans votre navigateur Web en visitant l'adresse :

http://localhost/app_date_doker/

5. Pour arrêter les conteneurs Docker, utilisez la commande :


docker-compose down

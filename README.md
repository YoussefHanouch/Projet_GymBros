🏋️‍♂️ Système de Gestion de Centre de Fitness
Application web de gestion de centre de fitness développée avec PHP/MySQL.

✨ Fonctionnalités Principales
<div class="features-grid"> <div class="feature-card"> <h3>👥 Gestion Clients</h3> <p>Inscription et informations des membres</p> </div> <div class="feature-card"> <h3>💰 Packs & Abonnements</h3> <p>3 types de formules (Normal, 3 mois, VIP)</p> </div> <div class="feature-card"> <h3>🏥 Rendez-vous Médecin</h3> <p>Prise de rendez-vous médical</p> </div> <div class="feature-card"> <h3>💳 Système de Paiement</h3> <p>Gestion des paiements et facturation</p> </div> <div class="feature-card"> <h3>🏋️‍♂️ Gestion Coachs</h3> <p>Informations des entraîneurs</p> </div> <div class="feature-card"> <h3>🔐 Administration</h3> <p>Interface d'administration sécurisée</p> </div> </div>
🗃️ Structure de la Base de Données
Tables Principales
Table	Description
informationc	Informations des clients/membres
pack / package	Types d'abonnements et tarifs
doctorapp	Rendez-vous médicaux
payment	Historique des paiements
trainer	Liste des coachs sportifs
logintb	Identifiants administrateur
📊 Packs Disponibles
Pack	Durée	Prix
PACK NORMAL	-	200 DH
PACK 3MOIS	3 mois	500 DH
PACK VIP	1 an	1500 DH
🛠️ Technologies Utilisées
Backend : PHP 7.4+ | MySQL 8.0

Frontend : HTML | CSS | SCSS | JavaScript

Style : Bootstrap 5

Outils : phpMyAdmin

📊 Statistiques du Projet
PHP : 53.7%

SCSS : 16.9%

CSS : 16.3%

HTML : 8.4%

JavaScript : 2.0%

🚀 Installation
Prérequis
Serveur web (Apache/Nginx)

PHP 7.4 ou supérieur

MySQL 8.0 ou supérieur

phpMyAdmin (recommandé)

Étapes d'installation
Importer la base de données

sql
-- Créer la base 'fitness' et importer le fichier SQL
Configurer la connexion

php
// Modifier les paramètres de connexion dans les fichiers PHP
$host = "127.0.0.1:3306";
$dbname = "fitness";
$username = "votre_utilisateur";
$password = "votre_mot_de_passe";
Accéder à l'application


http://localhost/votre-projet
🔐 Accès Administrateur

Nom d'utilisateur: admin
Mot de passe: pass
📋 Workflow d'Utilisation
Inscription Client - Formulaire d'inscription

Choix du Pack - Sélection d'abonnement

Paiement - Enregistrement du règlement

Rendez-vous - Prise de rendez-vous médical

Assignation Coach - Attribution d'un entraîneur

🎯 Fonctionnalités Avancées
✅ Gestion complète des membres

✅ Système de rendez-vous intégré

✅ Suivi des paiements

✅ Interface responsive

✅ Base de données normalisée

<div align="center"> 📞 Contact
Pour toute question concernant le système de gestion fitness.

💪 Développé pour les centres de fitness

Dernière mise à jour : Juillet 2022

</div>
📁 Structure du Projet

fitness-center/
├── admin/                 # Interface d'administration
├── client/               # Interface client
├── css/                  # Feuilles de style
├── js/                   # Scripts JavaScript
├── includes/             # Fichiers inclus (connexion DB, etc.)
├── images/               # Ressources images
└── database/             # Export de la base de données
🔧 Configuration
Fichiers de configuration importants :
includes/config.php - Paramètres de connexion à la base de données

.htaccess - Règles de réécriture d'URL

database/fitness.sql - Structure et données initiales

📝 Notes Techniques
Utilise des sessions PHP pour la gestion de l'authentification

Interface responsive avec Bootstrap 5

Validation côté client et serveur

Protection contre les injections SQL avec les requêtes préparées

🐛 Dépannage
Problèmes courants :
Erreur de connexion à la base de données

Vérifier les paramètres dans config.php

S'assurer que MySQL est démarré

Pages non accessibles

Vérifier la configuration du serveur web

S'assurer que le module rewrite est activé

Problèmes d'affichage CSS/JS

Vérifier les chemins des ressources

Vider le cache du navigateur

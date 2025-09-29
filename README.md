<h1>🏋️‍♂️ Fitness Center Management System</h1>


Application web de gestion de centre de fitness développée avec PHP/MySQL

</div>
✨ Fonctionnalités Principales
<div class="features-grid"> <div class="feature-card"> <h3>👥 Gestion Clients</h3> <p>Inscription et informations des membres</p> </div> <div class="feature-card"> <h3>💰 Packs & Abonnements</h3> <p>3 types de formules (Normal, 3 mois, VIP)</p> </div> <div class="feature-card"> <h3>🏥 Rendez-vous Médecin</h3> <p>Prise de rendez-vous médical</p> </div> <div class="feature-card"> <h3>💳 Système de Paiement</h3> <p>Gestion des paiements et facturation</p> </div> <div class="feature-card"> <h3>🏋️‍♂️ Gestion Coachs</h3> <p>Informations des entraîneurs</p> </div> <div class="feature-card"> <h3>🔐 Administration</h3> <p>Interface d'administration sécurisée</p> </div> </div>
🗃️ Structure de la Base de Données
Tables Principales
<table class="data-table"> <thead> <tr> <th>Table</th> <th>Description</th> </tr> </thead> <tbody> <tr> <td><strong>informationc</strong></td> <td>Informations des clients/membres</td> </tr> <tr> <td><strong>pack / package</strong></td> <td>Types d'abonnements et tarifs</td> </tr> <tr> <td><strong>doctorapp</strong></td> <td>Rendez-vous médicaux</td> </tr> <tr> <td><strong>payment</strong></td> <td>Historique des paiements</td> </tr> <tr> <td><strong>trainer</strong></td> <td>Liste des coachs sportifs</td> </tr> <tr> <td><strong>logintb</strong></td> <td>Identifiants administrateur</td> </tr> </tbody> </table>
📊 Packs Disponibles
<table class="pricing-table"> <thead> <tr> <th>Pack</th> <th>Durée</th> <th>Prix</th> </tr> </thead> <tbody> <tr> <td><strong>PACK NORMAL</strong></td> <td>-</td> <td>200 DH</td> </tr> <tr> <td><strong>PACK 3MOIS</strong></td> <td>3 mois</td> <td>500 DH</td> </tr> <tr> <td><strong>PACK VIP</strong></td> <td>1 an</td> <td>1500 DH</td> </tr> </tbody> </table>
🛠️ Technologies Utilisées
bash
Backend:    PHP 7.4+ | MySQL 8.0
Frontend:   HTML | CSS | SCSS | JavaScript
Style:      Bootstrap 5
Outils:     phpMyAdmin
📊 Statistiques du Projet
<div class="stats-container"> <div class="stat-item"> <span class="stat-badge php">PHP 53.7%</span> </div> <div class="stat-item"> <span class="stat-badge scss">SCSS 16.9%</span> </div> <div class="stat-item"> <span class="stat-badge css">CSS 16.3%</span> </div> <div class="stat-item"> <span class="stat-badge html">HTML 8.4%</span> </div> <div class="stat-item"> <span class="stat-badge js">JavaScript 2.0%</span> </div> </div>
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

text
http://localhost/votre-projet
🔐 Accès Administrateur
text
Username: admin
Password: pass
📋 Workflow d'Utilisation
<div class="workflow"> <div class="step"> <span class="step-number">1</span> <h4>Inscription Client</h4> <p>Formulaire d'inscription</p> </div> <div class="step"> <span class="step-number">2</span> <h4>Choix du Pack</h4> <p>Sélection d'abonnement</p> </div> <div class="step"> <span class="step-number">3</span> <h4>Paiement</h4> <p>Enregistrement du règlement</p> </div> <div class="step"> <span class="step-number">4</span> <h4>Rendez-vous</h4> <p>Prise de rendez-vous médical</p> </div> <div class="step"> <span class="step-number">5</span> <h4>Assignation Coach</h4> <p>Attribution d'un entraîneur</p> </div> </div>
🎯 Fonctionnalités Avancées
<ul class="features-list"> <li>✅ Gestion complète des membres</li> <li>✅ Système de rendez-vous intégré</li> <li>✅ Suivi des paiements</li> <li>✅ Interface responsive</li> <li>✅ Base de données normalisée</li> </ul>


<div align="center">
  📞 Contact
Pour toute question concernant le système de gestion fitness.
💪 Développé pour les centres de fitness

Dernière mise à jour: Juillet 2022


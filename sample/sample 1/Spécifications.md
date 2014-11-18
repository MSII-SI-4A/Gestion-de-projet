# Spécifications

Date : 18/11/2014

## 1 - Introduction

Notre société, ENY SAS, édite des logiciels spécialisés dans le domaine de Gestion des Ressources Techniques.

Elle  commercialise les offres suivantes :

 * Prestations de services (assistance, paramétrage et configuration, formation …)
 * Licences de logiciels 
 * Matériels

La Direction Commerciale souhaite booster les ventes et fidéliser les clients en mettant un outil de simulation a disposition des clients sur internet.

Le projet a été soumis à la DSI le 18 novembre 2014 à 10h00 et doit ètre terminé le 19 novembre 2014 à 10h30.

## 2 - Objectifs

 * Commerciale
	 * Fidéliser les clients.
	 * Booster les ventes.
 * Technique
	 * Fournir une application web.

## 3 - Besoins

 * Le projet doit ètre accessible par les clients au travers d'internet.
 * Les différentes remises applicable aux commandes doivent s'appliquer dirrectement depuis l'interface client.
 * Le client doit pouvoir remplir une fiche client.
 * La simulation de commande doit pouvoir se transformer en commande réelle.

## 4 - Solution retenue

Création d'une application web sous la forme d'un site web. Le serveur gère les vues et les données. Le client est en charge du rendu.

#### 4.1 - Technologies

 * Apache
 * PHP
 * HTML 5
 * CSS 3
 * EcmaScript 5.0
 * MySQL

## 5 - Principe de fonctionnement



## 6 - Procédure de fonctionnement

Voici la liste des procédures que l'utilisateur doit suivre pour utiliser l'application.

### 6.1 - Création d'une commande

1. Accéder au site de l'application.
	1. La liste des produits disponnibles s'affiche.
2. Le client séléctionne le nombre de produit shoutaité
3. Le client clique le bouton "Ajouter" situé sous le produit en question.
4. Le produit s'ajoute au panier de la commande.

### 6.2 - Visualiser le panier

1. Cliquer sur le logo panier situé en haut à droite de la page.
	1. Le panier s'affiche avec :
		1. La liste des produits selectionnés,
		2. Le total de la commande,
		3. Les réductions appliqués à la commande (si réduction).

### 6.3 - Passer la commande

1. A partir du panier, cliquer sur "Valider la commande". Le systéme de commande existant prend le relai.

### 6.4 - Règle de gestion

 * Si la commande totale atteint au moins 10 000€, une remise de 3% sur la commande
 * Si la commande totale atteint au moins 10 000€ comprenant au minimum 3 000€ de licences de logiciels, une remise de 5% sur la commande
 * Si la commande totale atteint au moins 10 000€ comprenant au minimum 6 000€ de licences de logiciels et 2 000€ de prestations, une remise de 10% sur la commande

## 7 - Spécification techniques

L'architechture technique reprend le modèle modèle vue controller (MVC) en utilisant le framework éprouvé **CakePHP**. La base de données sera prise en charge sur un serveur **MySQL**. De mannière à mutualiser les ressources, le serveur du site de l'entreprise (**Apache** et **MySQL**) seront ré-utilisés.
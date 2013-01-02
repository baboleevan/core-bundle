<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/fr/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][0] = 'Titre du site';
$GLOBALS['TL_LANG']['tl_settings']['websiteTitle'][1] = 'Saisir le titre du site internet.';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'Adresse e-mail de l\'administrateur';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Les messages générés automatiquement (ex: les e-mails de confirmation d\'inscription) seront envoyés à cette adresse.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Format de la date';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Choisir un format de date utilisé par la fonction PHP date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Format de l\'heure';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Choisir un format d\'heure utilisé par la fonction PHP date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Format de la date et de l\'heure';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Choisir un format de date et d\'heure utilisé par la fonction PHP date().';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Zone horaire';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Sélectionner une zone horaire.';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][0] = 'Chemin relatif vers le répertoire de Contao';
$GLOBALS['TL_LANG']['tl_settings']['websitePath'][1] = 'Le chemin relatif vers le répertoire de Contao est normalement généré automatiquement par l\'outil d\'installation.';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][0] = 'Jeu de caractères';
$GLOBALS['TL_LANG']['tl_settings']['characterSet'][1] = 'Il est recommandé d\'utiliser UTF-8 pour que les caractères spéciaux soient affichés correctement.';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][0] = 'Zones personnalisées';
$GLOBALS['TL_LANG']['tl_settings']['customSections'][1] = 'Saisir une liste, séparée par des virgules, de zones personnalisées.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Désactiver le planificateur de commandes';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Désactiver le planificateur de commandes périodiques et exécuter le script cron.php par une tâche cron réelle (que vous avez à configurer manuellement).';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][0] = 'Réduire le code HTML';
$GLOBALS['TL_LANG']['tl_settings']['minifyMarkup'][1] = 'Réduire le code HTML avant qu\'il ne soit envoyé au navigateur.';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][0] = 'Compresser les scripts';
$GLOBALS['TL_LANG']['tl_settings']['gzipScripts'][1] = 'Créer une version compressée et combinée des fichiers CSS et JavaScript. Nécessite des ajustements du fichier .htaccess.';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Enregistrements par page';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Définir le nombre d\'enregistrements par page à afficher dans le back office.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Nombre maximum d\'éléments par page';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Cette limite globale prend effet si un utilisateur choisit l\'option "Afficher tous les éléments".';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][0] = 'Exclure des répertoires de la synchronisation';
$GLOBALS['TL_LANG']['tl_settings']['fileSyncExclude'][1] = 'Saisir une liste, séparée par des virgules, des répertoires qui seront exclus de la synchronisation de fichiers (ex  : <em>attachments,music_academy</em>). Noter que les ressources exclues ne pourront être utilisées, par exemple dans  les éléments image ou téléchargement !';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Ne pas masquer les éléments';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Ne pas masquer les éléments lors de la prévisualisation dans le back office.';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][0] = 'Suffixe d\'URL';
$GLOBALS['TL_LANG']['tl_settings']['urlSuffix'][1] = 'Le suffixe d\'URL sera ajouté à la chaîne URI pour simuler des documents statiques.';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][0] = 'Mode du cache';
$GLOBALS['TL_LANG']['tl_settings']['cacheMode'][1] = 'Sélectionner le mode du cache';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][0] = 'Anonymiser les adresses IP';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeIp'][1] = 'Anonymiser toutes les adresses IP qui sont stockées dans la base de données, sauf dans la table <em>tl_session</em> (l\'adresse IP est liée à la session pour des raisons de sécurité).';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][0] = 'Anonymiser Google Analytics';
$GLOBALS['TL_LANG']['tl_settings']['privacyAnonymizeGA'][1] = 'Anonymiser les adresses IP qui sont envoyés à Google Analytics.';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][0] = 'Ré-écrire les URLs';
$GLOBALS['TL_LANG']['tl_settings']['rewriteURL'][1] = 'Laisser Contao générer des URL statiques sans le fragment index.php. Cette fonctionnalité nécessite "mod_rewrite", en renommant le fichier ".htaccess.default" en ".htaccess" et en ajustant le paramètre RewriteBase si nécessaire.';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][0] = 'Ajouter la langue à l\'URL';
$GLOBALS['TL_LANG']['tl_settings']['addLanguageToUrl'][1] = 'Ajouter la chaîne de langue en tant que premier paramètre de l\'URL (par exemple, <em>http://domain.tld/en/</em>).';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][0] = 'Ne pas rediriger les URL vides';
$GLOBALS['TL_LANG']['tl_settings']['doNotRedirectEmpty'][1] = 'Pour une URL vide afficher le site au lieu de rediriger vers la page racine de la langue (non recommandé).';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][0] = 'Utiliser le paramètre auto_item';
$GLOBALS['TL_LANG']['tl_settings']['useAutoItem'][1] = 'Passer les fragments de l\'URL <em>items/</em> ou <em>events/</em> et découvrir automatiquement l\'élément basé sur le paramètre <em>auto_item</em>.';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][0] = 'Annuler l\'usage des alias de page';
$GLOBALS['TL_LANG']['tl_settings']['disableAlias'][1] = 'Contao utilisera l\'ID numérique de la page à la place de l\'alias de la page.';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][0] = 'Activer les répertoires dans les URLs';
$GLOBALS['TL_LANG']['tl_settings']['folderUrl'][1] = 'Activer les URLs de style répertoire avec des alias du type <em>docs/install/download.html</em> à la place de <em>docs-install-download.html</em>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Balises HTML autorisées';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Saisir une liste de balises HTML. Toutes les autres balises seront enlevées des saisies de l\'utilisateur.';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][0] = 'Mode debug';
$GLOBALS['TL_LANG']['tl_settings']['debugMode'][1] = 'Afficher à l\'écran certaines informations d\'exécution comme par exemple les requêtes à la base de données (déconseillé pour les sites en production).';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][0] = 'Contourner le cache interne';
$GLOBALS['TL_LANG']['tl_settings']['bypassCache'][1] = 'Ne pas utiliser les fichiers de cache interne (utile par exemple lors du développement d\'extensions).';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Désactiver la demande de jetons';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Ne pas vérifier la demande de jeton quand un formulaire est soumis. Attention : risque potentiel pour la sécurité !';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][0] = 'Temps d\'attente en cas de compte verrouillé';
$GLOBALS['TL_LANG']['tl_settings']['lockPeriod'][1] = 'Saisir une durée d\'attente (en secondes). Un compte est verrouillé si le mot de passe a été entré 3 fois de suite de manière incorrecte.';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][0] = 'Afficher les messages d\'erreurs';
$GLOBALS['TL_LANG']['tl_settings']['displayErrors'][1] = 'Afficher les messages d\'erreur à l\'écran (déconseillé pour les sites en production).';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][0] = 'Sauvegarder les messages d\'erreurs';
$GLOBALS['TL_LANG']['tl_settings']['logErrors'][1] = 'Ecrire les messages d\'erreur dans le fichier journal des erreurs (<em>system/logs/error.log</em>)';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][0] = 'Exécuter en mode sans échec';
$GLOBALS['TL_LANG']['tl_settings']['coreOnlyMode'][1] = 'Exécuter Contao en mode sans échec charge seulement les modules de base.';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][0] = 'Désactiver le contrôle de l\'IP';
$GLOBALS['TL_LANG']['tl_settings']['disableIpCheck'][1] = 'Ne pas lier les sessions aux adresses IP. Choisir cette option est un risque potentiel pour la sécurité !';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Types de fichiers pouvant être téléchargés';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être téléchargés.';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][0] = 'Types d\'image valides';
$GLOBALS['TL_LANG']['tl_settings']['validImageTypes'][1] = 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être manipulés par la classe image.';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][0] = 'Types de fichiers pouvant être édités';
$GLOBALS['TL_LANG']['tl_settings']['editableFiles'][1] = 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être édités en ligne.';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][0] = 'Types de fichiers modèles';
$GLOBALS['TL_LANG']['tl_settings']['templateFiles'][1] = 'Saisir une liste, séparée par des virgules, des extensions de fichiers modèles supportées.';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][0] = 'Largeur maximale dans le front office';
$GLOBALS['TL_LANG']['tl_settings']['maxImageWidth'][1] = 'Si la largeur d\'une image ou d\'un film dépasse cette valeur, elle sera ajustée automatiquement.';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][0] = 'Qualité des vignettes JPG';
$GLOBALS['TL_LANG']['tl_settings']['jpgQuality'][1] = 'Choisir la qualité des vignettes JPG en pourcentage.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Largeur d\'image maximale';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Saisir la largeur d\'image maximale que la bibliothèque GD devra gérer.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Hauteur d\'image maximale';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Saisir la hauteur d\'image maximale que la bibliothèque GD devra gérer.';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][0] = 'Répertoire contenant les fichiers';
$GLOBALS['TL_LANG']['tl_settings']['uploadPath'][1] = 'Saisir le chemin relatif du répertoire contenant les fichiers (par défaut: <em>files</em>).';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Types de fichiers pouvant être envoyés';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Saisir une liste, séparée par des virgules, des extensions de fichiers pouvant être envoyés sur le serveur.';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][0] = 'Nombre de fichiers envoyés simultanément';
$GLOBALS['TL_LANG']['tl_settings']['uploadFields'][1] = 'Saisir le nombre de fichiers pouvant être envoyés simultanément.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Taille de fichier maximale lors de l\'envoi';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Saisir la taille maximale en octets des fichiers envoyés (1 Mo = 1000 Ko = 1000000 octets).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Largeur maximale des images';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Saisir la largeur maximale pour l\'envoi des images en pixels.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Hauteur maximale des images';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Saisir la hauteur maximale pour l\'envoi des images en pixels.';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][0] = 'Activer le moteur de recherche';
$GLOBALS['TL_LANG']['tl_settings']['enableSearch'][1] = 'Indexer les pages du front office afin qu\'elles puissent être recherchées.';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][0] = 'Indexer les pages protégées';
$GLOBALS['TL_LANG']['tl_settings']['indexProtected'][1] = 'Utiliser cette option avec soin et toujours penser à exclure de l\'indexation les pages personnalisées !';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][0] = 'Utiliser le SMTP pour l\'envoi des mails';
$GLOBALS['TL_LANG']['tl_settings']['useSMTP'][1] = 'Utiliser un serveur SMTP à la place de PHP <em>mail()</em> pour envoyer les e-mails.';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][0] = 'Nom d\'hôte du serveur SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpHost'][1] = 'Saisir le nom d\'hôte du serveur SMTP.';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][0] = 'Nom d\'utilisateur SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpUser'][1] = 'Si votre serveur de SMTP exige l\'authentification, saisir le nom d\'utilisateur.';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][0] = 'Mot de passe SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPass'][1] = 'Si votre serveur de SMTP exige l\'authentification, saisir le mot de passe.';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][0] = 'Sécurisation SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpEnc'][1] = 'Choisir la méthode de sécurisation SMTP (SSL or TLS).';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][0] = 'Numéro de port SMTP';
$GLOBALS['TL_LANG']['tl_settings']['smtpPort'][1] = 'Saisir le numéro de port du serveur SMTP.';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][0] = 'Modules inactifs';
$GLOBALS['TL_LANG']['tl_settings']['inactiveModules'][1] = 'Désactiver l\'administration des modules dont vous n\'avez pas besoin.';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][0] = 'Durée de stockage des états d\'annulation';
$GLOBALS['TL_LANG']['tl_settings']['undoPeriod'][1] = 'Saisir la durée de stockage des états d\'annulation en secondes (24 heures = 86400 secondes).';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][0] = 'Durée de stockage des versions';
$GLOBALS['TL_LANG']['tl_settings']['versionPeriod'][1] = 'Saisir la durée de stockage des différentes versions d\'un enregistrement en secondes (90 jours = 7776000 secondes).';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][0] = 'Durée de stockage des journaux';
$GLOBALS['TL_LANG']['tl_settings']['logPeriod'][1] = 'Saisir la durée de stockage des entrées du journal système en secondes (14 jours = 1209600 secondes).';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][0] = 'Durée d\'une session';
$GLOBALS['TL_LANG']['tl_settings']['sessionTimeout'][1] = 'Saisir la durée de vie d\'une session en secondes (60 minutes = 3600 secondes).';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][0] = 'Durée de connexion automatique';
$GLOBALS['TL_LANG']['tl_settings']['autologin'][1] = 'Définir la durée de connexion automatique (90 jours = 7776000 secondes).';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Utilisateur propriétaire par défaut';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Sélectionner un utilisateur comme propriétaire par défaut d\'une page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Groupe propriétaire par défaut';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Sélectionner un groupe comme propriétaire par défaut d\'une page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Permissions par défaut';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Assigner les permissions d\'accès par défaut des pages et articles.';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][0] = 'URL de la mise à jour automatique (Live Update)';
$GLOBALS['TL_LANG']['tl_settings']['liveUpdateBase'][1] = 'Saisir l\'URL de la mise à jour automatique (Live Update).';
$GLOBALS['TL_LANG']['tl_settings']['title_legend'] = 'Titre du site internet';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Date et heure';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Configuration globale';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Configuration du back office';
$GLOBALS['TL_LANG']['tl_settings']['frontend_legend'] = 'Configuration du front office';
$GLOBALS['TL_LANG']['tl_settings']['sections_legend'] = 'Sections de présentation';
$GLOBALS['TL_LANG']['tl_settings']['privacy_legend'] = 'Paramètres de confidentialité';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Paramètres de sécurité';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Fichiers et images';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Paramètres d\'envoi des fichiers';
$GLOBALS['TL_LANG']['tl_settings']['search_legend'] = 'Paramètres du moteur de recherche';
$GLOBALS['TL_LANG']['tl_settings']['smtp_legend'] = 'Configuration SMTP';
$GLOBALS['TL_LANG']['tl_settings']['ftp_legend'] = 'Safe Mode Hack';
$GLOBALS['TL_LANG']['tl_settings']['modules_legend'] = 'Modules inactifs';
$GLOBALS['TL_LANG']['tl_settings']['timeout_legend'] = 'Valeurs du timeout';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Permissions par défaut';
$GLOBALS['TL_LANG']['tl_settings']['update_legend'] = 'Mise à jour automatique';
$GLOBALS['TL_LANG']['tl_settings']['static_legend'] = 'Ressources statiques';
$GLOBALS['TL_LANG']['tl_settings']['edit'] = 'Éditer la configuration locale';
$GLOBALS['TL_LANG']['tl_settings']['both'] = 'Utiliser le cache du serveur et du navigateur';
$GLOBALS['TL_LANG']['tl_settings']['server'] = 'Utiliser seulement le cache du serveur';
$GLOBALS['TL_LANG']['tl_settings']['browser'] = 'Utiliser seulement le cache du navigateur';
$GLOBALS['TL_LANG']['tl_settings']['none'] = 'Désactiver le cache';

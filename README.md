# BLIH - Bocal Lightweight Interface for Humans

* Source et Documentation: [https://github.com/bocal/blih](https://github.com/bocal/blih)

Script d'installation rapide de blih (l'installation avec PIP etant moins pratique et contient des erreurs a l'installation).

## Installation

### Pre-requis
* Python 3 avec le module "requests" (souvent avec votre distribution par default)
* PHP en CLI
* Git

### Recuperation des fichiers
	git clone https://github.com/Rikette/ezblih.git
	
### Execution du script d'installation
	cd blih
	sudo php blih/install.php votre.login@epitech.eu
	
## Utilisation des raccourcis
	ezb [commande]
Commandes disponnibles :
* create
* setacl
* getacl
* delete
* list
* clone

## Configuration
Pour changer le login, editer le fichier ```bin/blih.conf```.

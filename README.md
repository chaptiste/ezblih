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
	cd ezblih

	sudo php install.php votre.login@epitech.eu
	
### Upload cle ssh
	ssh-keygen
	
(Presser 3 fois ```Enter```)

	ezb upload
	
## Utilisation des raccourcis
	ezb [commande]
	
Commandes disponnibles :
* upload
* config ```login_epitech```
* create ```nom_du_depot```
* setacl ```nom_du_depot user droits```
* getacl ```nom_du_depot```
* delete ```nom_du_depot```
* list
* clone ```nom_du_depot```

Il est possible d'utiliser n'importe quelle autre commande blih :

	ezb sshkey delete rikette@rikette

qui revient a utiliser :

	blih -u votre.login@epitech.eu sshkey delete rikette@rikette

## Configuration
Pour changer le login :

	sudo ezb config nouveau.login@epitech.eu

Pour afficher le login :

	ezb login
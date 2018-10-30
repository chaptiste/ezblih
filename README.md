# EZ Blih

Installation de Blih via NPM sans aucune dépendance (pas de python, full JS).	

## Installation

### Pre-requis
* [NodeJS](https://nodejs.org/en/download/)

Je ne vais pas faire un tuto pour installer Node. Sous Windows / Mac c'est un simple installer, sous Linux utilisez le [gestionnaire de paquet de votre distribution.](https://nodejs.org/en/download/package-manager/#debian-and-ubuntu-based-linux-distributions-enterprise-linux-fedora-and-snap-packages)

### Installer le package en global
	sudo npm i -g ezblih
	
### Upload cle ssh
	ssh-keygen
	
(Presser 3 fois ```Enter```)

	ezb upload
	
## Commandes
	ezb [commande]
	
Commandes disponnibles :
* upload
* list
* ping
* create ```nom_du_depot```
* setacl ```nom_du_depot user droits```
* getacl ```nom_du_depot```
* delete ```nom_du_depot```
* clone ```nom_du_depot```

## Configuration
Si vous êtes un gros flemmard et que vous ne souhaitez plus taper votre email et mot de passe a chaque commande, vous pouvez créer un fichier `.env` à la racine du dossier d'installation du paquet.
Sous Linux, le dossier devrait se situer sous `/usr/local/lib/node_modules/ezblih` ou `/usr/local/lib/node/ezblih` .

Pour savoir ou sont installés les paquets en global sous votre os, utilisez :

    npm root -g

Créer ensuite le fichier `.env` avec comme contenu :

    BLIH_EMAIL=votre.email@epitech.eu
    BLIH_PASSWORD=votremdp

Il est possible de renseigner uniquement le mail, dans ce cas seulement le mot de passe vous sera demandé.

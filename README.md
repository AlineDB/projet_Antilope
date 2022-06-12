## Projet client Antilope

Dans le cadre du cours de design web et mes études en Infographie option Web, en 2e année, il nous est demandé de réaliser un site complet sous Wordpress
à la demande d'un client.

Celui-ci se trouve être l'ISSEP en partenariat avec la HEPL, afin de promouvoir leur dispositifs élaboré pour mesurer la qualité de l'air.


## Recherche et moodboard

Un premier moodboard a été créer [Voir ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/moodboard%20antilope.xd)

Suite au feedback du client, je l'ai modifié et voici le [résultat](https://github.com/AlineDB/projet_Antilope/blob/main/doc/design%20antilope%202.xd)

Pour les recherches, une première recherche concenrnat les mots-clé / articles existants / partenaires / ... a été effectué [Voir ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/doc.md)


## Prototype / wireframe

Le prototype navigable basique [ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/design%20antilope%202.xd)


## Tests

GTMetrix -> Test pour un Desktop, serveur au Canada. Grade B, performance 84% et structure 91%. Les images ne sont pas bien optimisées. Il faudrait intégrer 
le srcset pour les images ajoutées directement dans le code. Sur WP, l'extension Imagify optimise les images et celles-ci sont automatiquement disponibles en plusieurs tailles.
J'en ai ajouté quelques-uns mais n'est pas eu le temps de le faire pour toutes les images. Je passe à 78% de performance et 90% de structure.
Par contre, j'ai un message concernant le cache.
Il précise que pour WP, cela se fait normalement automatiquement via un plugin afin d'améliorer la performance. J'installe donc un plugin.
Nouveau test et le résultat est à 83% de performance et une structure à 93% !

W3C HTML ->  Des erreurs dans le head ont été détectées que j'ai corrigé de suite. Par contre il détecte des erreurs dans le form, disant que la balise est ouverte
mais pas fermée et l'inverse pour l'autre formulaire alors que dans le code celles-ci sont bien présente.
Il demande un label pour les 3 div qui servent au burger. Ceux-ci restent vide car sont inutilisés.

W3C CSS -> 5 erreurs max-width auto erronées. A vérfier et corriger. Avertissement concernant les webkit des border radius.

W3C Links -> 7 avertissements sur le fait que des liens ne bloquent pas les robots et un qui indique qu'il n'a pas pu se connecter au serveur (lien issep.be).
Les 5 ancres sont ok.

CSS STATS -> Au niveau des couleurs, celles-ci sont peu nombreuses ce qui est le cas dans le site. Il y a quand même quelques déclarations similaires. A vérifier.
Les fonts sont bien déclarées et il y a bien 2 polices.
Le schéma des spécificités est plutôt correct, le pic s'observe au dernier tiers avec un score de 130 max.

Accessibilité via Wave -> Signale le manque de label pour le burger menu. Signal 32 erreurs de contraste qui correspondent au gris des titres H3. La structure est ok.
J'ai changé la couleur des titres. Pour les liens, grâce à leur outils je détermine une nouvelle couleur qui réussi les tests. Les seules erreurs de contraste restantes
sont celles du menu qui pourtant ressort très bien (blanc sur orange foncé).

Responsive via Google mobile friendly -> page adaptée.
Responsive via I am responsive -> check visuel. Sur tablette, Desktop et laptop tout semble ok. Sur mobile il semble que certains liens se mettent sur 2 ligne (accueil et dispositifs) et que le container articles dépasse de sa section.
Le reste semble ok.


Visitez le site [Antilope Breathe](https://antilope.aline-db.be/fr)











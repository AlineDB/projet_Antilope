## Projet client Antilope

Dans le cadre du cours de design web et mes études en Infographie option Web, en 2e année, il nous est demandé de réaliser un site complet sous Wordpress
à la demande d'un client.

Celui-ci se trouve être l'ISSEP en partenariat avec la HEPL, afin de promouvoir leur dispositifs élaboré pour mesurer la qualité de l'air.


## Recherche et moodboard

Un premier moodboard a été créer [Voir ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/moodboard%20antilope.xd)

Suite au feedback du client, je l'ai modifié et voici le [résultat](https://github.com/AlineDB/projet_Antilope/blob/main/doc/design%20antilope%202.xd)

Pour les recherches, une première recherche concenrnat les mots-clé / articles existants / partenaires / ... a été effectué [Voir ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/doc.md)


## Prototype / wireframe

Le prototype navigable basique [sur InVision](https://aline-db.invisionapp.com/console/share/HSTA28XU3KE)

Le wireframe complet [ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/prototype/antilope%20complet%20wireframe.png)

Les scénarios tests utilisateurs [ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/prototype/tests%20utilisatzeurs%20prototype.docx)

Analyse et personas se trouvent [ici](https://github.com/AlineDB/projet_Antilope/blob/main/doc/prototype/analyse%20et%20personas.docx)




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

------------------------------------------------------------------------------------------------------------------

## Antelope client project

As part of the web design course and my studies in Computer Graphics option Web, in 2nd year, we are asked to make a complete site in Wordpress
at the request of a client.

This one is the ISSEP in partnership with the HEPL, in order to promote their devices developed to measure the air quality.


## Research and moodboard

A first moodboard was created [See here](https://github.com/AlineDB/projet_Antilope/blob/main/doc/moodboard%20antilope.xd)

Following the client's feedback, I modified it and here is the [result](https://github.com/AlineDB/projet_Antilope/blob/main/doc/design%20antilope%202.xd)

For the research, a first research concerning the keywords / existing articles / partners / ... was done [See here](https://github.com/AlineDB/projet_Antilope/blob/main/doc/doc.md)


## Prototype / wireframe

The basic navigable prototype [on InVision](https://aline-db.invisionapp.com/console/share/HSTA28XU3KE)

The complete wireframe [here](https://github.com/AlineDB/projet_Antilope/blob/main/doc/prototype/antilope%20complet%20wireframe.png)

The user test scenarios [here](https://github.com/AlineDB/projet_Antilope/blob/main/doc/prototype/tests%20utilisatzeurs%20prototype.docx)

Analysis and personas can be found [here](https://github.com/AlineDB/projet_Antilope/blob/main/doc/prototype/analyse%20et%20personas.docx)




## Tests

GTMetrix -> Test for a Desktop, server in Canada. Grade B, performance 84% and structure 91%. Images are not well optimized. We should integrate
the srcset for images added directly in the code. On WP, the Imagify extension optimizes images and they are automatically available in several sizes.
I added some but did not have time to do it for all images. I'm up to 78% performance and 90% structure.
However, I have a message about the cache.
It says that for WP, this is normally done automatically via a plugin to improve performance. So I install a plugin.
New test and the result is 83% performance and a structure at 93%!

W3C HTML -> Errors in the head were detected that I corrected immediately. On the other hand it detects errors in the form, saying that the tag is open
but not closed and the opposite for the other form while in the code they are well present.
It asks for a label for the 3 divs used for the burger. These remain empty because they are not used.

W3C CSS -> 5 max-width auto errors. To check and correct. Warning about border radius webkit.

W3C Links -> 7 warnings about links not blocking robots and one that indicates that it could not connect to the server (link issep.be).
The 5 anchors are ok.

CSS STATS -> At the level of colors, they are few, which is the case in the site. There are still some similar statements. To check.
The fonts are well declared and there are 2 fonts.
The pattern of specificities is rather correct, the peak is observed in the last third with a score of 130 max.

Accessibility via Wave -> Reports the lack of label for the burger menu. Reports 32 contrast errors which correspond to the grey of the H3 titles. The structure is ok.
I changed the color of the titles. For the links, thanks to their tools I determine a new color that passes the tests. The only remaining contrast errors
are the ones in the menu which stands out very well (white on dark orange).

Responsive via Google mobile friendly -> responsive page.
Responsive via I am responsive -> visual check. On tablet, desktop and laptop everything seems ok. On mobile it seems that some links are put on 2 lines (home and devices) and that the articles container goes beyond its section.
The rest seems ok.


Visit the site [Antelope Breathe](https://antilope.aline-db.be/fr)












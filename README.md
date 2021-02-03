# E-Commerce
Commerce en ligne développé sous Laravel 7.30.4 et avec l'API Stripe.

Par Alexandre Vernet


![shop](https://user-images.githubusercontent.com/72151831/106760792-71e38200-6634-11eb-8fa2-d58b2263856c.png)



## Accueil
La page d'accueil propose une liste aléatoire de produits au client.

![accueil](https://user-images.githubusercontent.com/72151831/106763584-444c0800-6637-11eb-8818-41fb644a0288.png)


Les produits s'affichent sous forme de carte avec une pagination automatique.

![produits](https://user-images.githubusercontent.com/72151831/106764192-d94f0100-6637-11eb-85ee-3d10a61c803f.png)



## Produits
En cliquant sur un produit, une description plus détaillée du produit s'affiche ainsi que la possibilité d'ajouter ce produit au panier 

![description_produit](https://user-images.githubusercontent.com/72151831/106763986-ad338000-6637-11eb-91b0-bcea17a21e13.png)


Lorsqu'un produit a été ajouté au panier, un message apparaît.

![ajouter_panier](https://user-images.githubusercontent.com/72151831/106764575-31860300-6638-11eb-88b2-d38f053791d6.png)



## Panier
Lorsqu'un produit est ajouté au panier, une icone apparaît avec la quantité de produit présente dans le panier sur le bouton "panier". 
En cliquant sur ce bouton, la liste de nos produits s'affiche avec la possibilité d'ajuster la quantité.

![afficher_panier](https://user-images.githubusercontent.com/72151831/106764945-95103080-6638-11eb-9fe3-19d67332d7b6.png)



## Paiement
En cliquant sur le bouton "procéder au paiement", une page s'affiche en demandant les coordonnées bancaires à l'utilisateur

![paiement](https://user-images.githubusercontent.com/72151831/106765178-d1dc2780-6638-11eb-9817-d073214a6391.png)


En cas de paiement réussi, un message de succès apparait

![paiement_en_cours](https://user-images.githubusercontent.com/72151831/106765258-e6202480-6638-11eb-9bb5-1701514e2ac8.png)


![paiement_accepte](https://user-images.githubusercontent.com/72151831/106765248-e28c9d80-6638-11eb-934e-dea2acba168e.png)


Si le paiement échoue (carte expiré, plafond insuffisant, CVC incorrect ...), l'API Stripe détecte ces problèmes et affiche un message en conséquent

![paiement_carte_expire](https://user-images.githubusercontent.com/72151831/106765458-1c5da400-6639-11eb-9850-df8a29442c1a.png)


![paiement_refuse_cvc](https://user-images.githubusercontent.com/72151831/106765917-9beb7300-6639-11eb-8dae-9f69c33149a8.png)


L'API est également capable de reconnaître l'authentification à 2 facteurs

![paiement_3D_secure](https://user-images.githubusercontent.com/72151831/106766110-d2c18900-6639-11eb-80ec-d8e8d97505d6.png)


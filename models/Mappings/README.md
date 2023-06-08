# Les classes de type Mapping

Les classes de type Mapping sont des classes qui permettent de faire le lien entre les objets métiers et la base de données. Elles permettent de récupérer des données de la base de données et de les transformer en objets métiers. Elles permettent également de transformer des objets métiers en données pour les enregistrer dans la base de données.

On utilise généralement une table un mapping. Par exemple, la table `user` de la base de données est gérée par la classe `UserMapping`.

Les tables many to many n'ont pas un une classe de mapping spécifiques, elles sont gérées par des méthodes se trouvant dans des classes qui font la jointure. Par exemple, la table `user_has_role` de la base de données est gérée par la propriété `roles` de la classe `UserMapping`, et par exmple la méthode `addRole` de la classe `UserMapping`.
### Lab SQLi – Auth Bypass & Remédiation

## Objectifs
Petit lab pédagogique pour travailler sur une injection SQL dans un formulaire d’authentification, documenter l’exploitation et montrer la correction avec requêtes préparées.

## Contenu du dépôt
- `www/index.php` : version vulnérable (concaténation).
- `www/index_fixed.php` : version corrigée (PDO + password hashing).
- `db/init.sql` : création de la base et jeu de données minimal.
- `docs/` : documentation publique (GitHub Pages à venir).
- `pentest-proof/` : captures d’exploitation et rapport synthétique (à remplir).

## Mise en route rapide
1. Cloner le dépôt.
2. Copier `.env.example` en `.env` et ajuster les valeurs.
3. Lancer `docker-compose up -d`.
4. Accéder à `http://localhost:8080/index.php`.

## Statut
⚠️ Travail en cours : docker-compose, scripts d’initialisation et documentation restent à finaliser avant la release v1.0.

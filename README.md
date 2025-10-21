# Laravel Blog

Projet d’exemple avec Laravel. Ce guide explique comment cloner le dépôt, installer les dépendances, configurer l’environnement, migrer la base de données puis démarrer le serveur de développement. Il est volontairement simple et pragmatique.

## Prérequis

- PHP 8.x
- Composer
- MySQL/MariaDB (ou autre base compatible)
- Node.js et npm (si tu utilises Vite pour le front)
- Git

## Cloner le projet en local

Dans ton terminal :

```bash
git clone https://github.com/ton-utilisateur/laravel-blog.git
cd laravel-blog
```

## Installer les dépendances PHP et front

```bash
composer install     # installe les packages Laravel (vendor/)
npm install          # installe les packages front si tu utilises Vite
```

## Configurer ton environnement local

Crée ton fichier `.env` à partir du modèle :

```bash
cp .env.example .env
```

Génère ensuite la clé de l’application :

```bash
php artisan key:generate
```

Ouvre `.env` et configure la base de données : `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` (selon ta config locale).

## Migrer la base de données

```bash
php artisan migrate
```

## Lancer le serveur de développement

```bash
php artisan serve
```

Ouvre ensuite ton navigateur sur : `http://localhost:8000`

## Optionnel : utiliser Docker (Laravel Sail)

Si le projet a été initialisé avec Laravel Sail :

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan serve
```

Accède ensuite à l’URL exposée (souvent `http://localhost`).

## Scripts utiles

- Démarrer le serveur : `php artisan serve`
- Lancer les tests : `php artisan test`
- Développement front (Vite) : `npm run dev`
- Build de production (Vite) : `npm run build`
- Régénérer la clé d’application : `php artisan key:generate`

## Dépannage rapide

- `vendor/autoload.php` introuvable ? Exécute `composer install`.
- Erreur de connexion DB ? Vérifie les variables `DB_*` dans `.env`, assure-toi que la base existe, puis relance `php artisan migrate`.
- Assets manquants ? Exécute `npm install` puis `npm run dev`.
- Fichier `.env` absent ? Copie depuis `.env.example` puis génère la clé.

## Publier tes modifications sur GitHub

Si le dépôt distant est déjà configuré :

```bash
git add README.md
git commit -m "docs: add complete README with setup instructions"
git push
```

Sinon, configure le dépôt distant puis pousse :

```bash
git branch -M main
git remote add origin https://github.com/ton-utilisateur/laravel-blog.git
git push -u origin main
```

## Licence

Indique ici la licence que tu souhaites (ex. MIT).

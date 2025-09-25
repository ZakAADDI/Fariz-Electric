<h2 align="center">Fariz Electric – Site vitrine</h2>

Site vitrine d’électricien à Annecy (Haute‑Savoie) construit avec Laravel, Inertia, Vue 3, Tailwind CSS et Vite.

## Stack technique
- Laravel 11 + Inertia.js (serveur)
- Vue 3 (composition API)
- Tailwind CSS
- Vite (dev et build)

## Fonctionnalités
- Pages: Accueil, À propos, Contact, Mentions légales
- Formulaire de contact avec envoi d’email (Mailable + template HTML)
- SEO: meta tags, Open Graph/Twitter, sitemap.xml, robots.txt, JSON‑LD LocalBusiness
- Images de fond optimisées avec composant `LazyBackgroundImage`

## Prérequis
- PHP 8.2+, Composer
- Node.js 18+ (npm)
- Base de données facultative (site statique excepté formulaire)

## Installation locale
```bash
cp .env.example .env
composer install
npm ci
php artisan key:generate
```

## Démarrage
```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

## Variables d’environnement clés (.env)
- APP_ENV=local|production
- APP_DEBUG=true|false
- APP_URL=https://farizelectric.fr
- APP_LOCALE=fr, APP_FALLBACK_LOCALE=fr
- MAIL_MAILER, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_FROM_ADDRESS, MAIL_FROM_NAME

## Build production
```bash
npm run build
```
Les assets sont générés dans `public/build` (à déployer). Le dossier `.vite` est un cache de dev et n’est pas nécessaire en prod.

## Déploiement (ex. OVH)
1. Uploader le code (sans `node_modules`) + `public/build`
2. Configurer `.env` (APP_URL, MAIL_…)
3. Optimisations Laravel:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```
4. Forcer HTTPS côté serveur et ajouter des en‑têtes de sécurité (HSTS, etc.)

## SEO
- Canonical géré dans `resources/views/app.blade.php`
- Open Graph / Twitter par défaut
- `public/sitemap.xml` + `public/robots.txt`
- JSON‑LD `LocalBusiness` injecté dans le layout

## Emails (Thunderbird, Gmail, etc.)
- Le logo est embarqué inline via `$message->embed(...)` dans `resources/views/emails/contact.blade.php`
- Vérifier SPF/DKIM/DMARC pour la délivrabilité

## Dépannage
- Problèmes HMR/dev: supprimer `.vite` puis relancer `npm run dev`
- Assets manquants en prod: regénérer `npm run build` et déployer `public/build`
- Formulaire de contact: vérifier variables MAIL_* et les logs `storage/logs/laravel.log`

## Licence
Code sous licence MIT. © Fariz Electric - Développé par Infinity Dev

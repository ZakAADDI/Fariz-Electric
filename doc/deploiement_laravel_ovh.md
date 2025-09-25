# 🚀 Déploiement Laravel + Vite sur OVH (Production)

## ✅ À faire sur l’hébergement OVH

### 1. Vérifier/poser ces variables dans le `.env` de PROD
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://farizelectric.fr
```

---

### 2. Supprimer le fichier `public/hot`
- S’il existe, Laravel Vite croira que le **dev server** est actif.  
- Résultat : il injectera `@vite/client` (port `5173`) → erreur CORS.  
- 👉 Supprime `public/hot`.

---

### 3. Déployer les assets buildés
- En local, exécute :
  ```bash
  npm run build
  ```
- Uploade ensuite **tout le dossier `public/build`** vers le serveur.  
- Ne lance **jamais** `npm run dev` en production.

---

### 4. Vider et régénérer les caches Laravel sur le serveur
Si tu as accès SSH :  
```bash
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

👉 Si pas d’accès SSH (FTP uniquement), supprime manuellement :  
- `bootstrap/cache/*.php` (sauf `.gitignore`)  
- `storage/framework/views/*`

---

### 5. Purger le cache navigateur / Cloudflare (si applicable)
- Vide le cache navigateur.  
- Purge le CDN (si tu utilises Cloudflare ou équivalent).

---

## 📝 Résumé
- **`public/hot` présent** = injection du script `@vite/client` (dev server :5173).  
- **APP_ENV/APP_DEBUG mal réglés** = Laravel croit être en mode dev.  
- **En production** : seuls les fichiers compilés de `public/build` doivent être chargés.

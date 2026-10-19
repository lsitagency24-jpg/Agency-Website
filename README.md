# LSIT Agency — WordPress Theme

Custom WordPress theme for [lsitagency.com](https://lsitagency.com).

## Hostinger deploy (GitHub → WordPress)

1. Hostinger hPanel → **Advanced → GIT / Deploy from GitHub**
2. Repository: `Agency-Website`, Branch: **`main`**
3. Root directory → **Change** → `public_html/wp-content/themes/lsit-agency`
   (do **not** deploy to `public_html` directly, that is where WordPress itself lives)
4. Deploy, then WordPress Admin → **Appearance → Themes → LSIT Agency → Activate**
5. Edit homepage text: **Appearance → Customize → Homepage**

Every push to `main` can be redeployed from hPanel (or enable auto-deploy with the webhook Hostinger shows).

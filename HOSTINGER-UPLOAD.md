# Diamanti GmbH website - Hostinger upload

Ky projekt është PHP/HTML pa build step. Për publikim në Hostinger:

1. Ngarko të gjithë përmbajtjen e këtij folderi në `public_html`.
2. Sigurohu që të ngarkohen edhe `.htaccess`, `index.php` dhe folderi `assets`.
3. Ndrysho të dhënat e kontaktit në fillim të `index.php`:
   - `$site['phone']`
   - `$site['email']`
   - `$site['mail_to']`
4. Formulari i kontaktit përdor funksionin PHP `mail()`. Nëse Hostinger kërkon SMTP, lidhe më vonë me konfigurimin SMTP të domain-it.
5. URL-të e pastra si `/veranstaltungsschutz` punojnë përmes `.htaccess`.

Faqja kryesore është `index.php`.

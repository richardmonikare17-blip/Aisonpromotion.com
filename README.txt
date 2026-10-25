AISON PROMOTIONZ WEBSITE — SETUP GUIDE
====================================

WHAT IS INCLUDED
- Responsive public website using your supplied AISON PROMOTIONZ poster.
- All seven services from the poster: Event Marketing, Event Management, Talent Promotion, Artist Management, Graphics Designing, T-Shirt Printing, Blogs and Vlogs.
- Administrator login and dashboard to publish text updates and upload posters/photos.
- First-run setup creates the first/owner administrator account.
- The owner can add up to two more administrators (three total).
- Public customer discussion board; visitors can post without an account, and administrators can reply by posting messages while logged in.
- Post management (delete posts), discussion linking to a post, and mobile-friendly layout.

IMPORTANT: THIS IS A PHP WEBSITE, NOT A STATIC HTML FILE
The site needs a web host that supports PHP 8.0+ and writable folders. It is designed for shared hosting (for example, a cPanel host). It will not run correctly by simply opening index.php from your phone's Files app or by uploading only the image.

INSTALLATION
1. Extract the ZIP file on a computer.
2. Upload all files and folders inside a PHP-enabled hosting account's public web folder (often public_html or a subfolder such as public_html/aison).
3. Ensure the data/ and uploads/ folders are writable by PHP. Typical shared-hosting permissions are 750/755 for folders, depending on your host; do not make them world-writable unless your host specifically requires it.
4. Visit your domain/folder in a browser. The home page should appear.
5. Visit /admin.php. On first visit, create the owner administrator account. Use a strong password of at least 10 characters.
6. Sign in and use the dashboard to publish announcements, event information, artist promotions, images and posters.
7. The owner can add up to two more administrators from the dashboard. Share their login details privately.
8. Customers can open the Discussion link to ask questions or leave comments. Administrators can reply by adding a message on the same discussion page while logged in; their messages are marked AISON TEAM.

SECURITY / DEPLOYMENT NOTES
- Use HTTPS on the live domain.
- Keep the hosting account and administrator passwords private; use unique passwords.
- Back up the data/ and uploads/ folders regularly. These contain posts, accounts and discussion messages.
- The first account created is the owner. Keep access to it secure because it is the only account allowed to add administrators.
- Posts and discussions are shared between all visitors because the data is saved on the server, not only in one browser.
- This starter website uses JSON files for data storage to keep setup simple on basic PHP hosting. For a high-traffic public service, upgrade to a database, add moderation/rate-limiting and configure email notifications.
- Configure your host to use a current supported PHP version. The server must allow file uploads. Images are limited to 5 MB.
- If your host uses Nginx rather than Apache, ask the host how to deny direct web access to /data/ and prevent PHP execution in /uploads/; .htaccess rules are for Apache.

CONTACT SHOWN ON THE WEBSITE
+256 777 271 886

BRAND TAGLINE FROM YOUR POSTER
WE MAKE IT HAPPENS

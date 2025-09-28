# KMFSL - PHP Version

## Kaimur Financial Services Pvt. Ltd. - Professional Website

This is the PHP/HTML version of the KMFSL website, converted from React.js to ensure compatibility with standard web hosting services.

## 🌟 Features

### Frontend Features
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Professional UI/UX**: Corporate-grade design with smooth animations
- **SEO Optimized**: Server-side rendering for better search engine visibility
- **Fast Loading**: Optimized static assets and minimal JavaScript
- **Cross-browser Compatible**: Works on all modern browsers

### Backend Features
- **PHP 7.4+**: Modern PHP with PDO for database operations
- **MySQL Database**: Robust data storage with proper relationships
- **Contact Forms**: Direct email integration with form validation
- **Newsletter System**: Subscription management with email notifications
- **Client Portal**: User registration, login, and dashboard
- **Admin Panel**: Administrative interface for client management
- **Security**: Password hashing, input validation, and SQL injection protection

### Services Covered
- IEPF Claim Services
- Transmission of Shares
- Demat of Physical Shares
- Unclaimed Dividends Recovery
- Wealth Samadhan
- NRI Samadhan

## 📁 Project Structure

```
php-version/
├── assets/
│   └── images/
│       └── kmfsl-logo.svg
├── config/
│   └── database.php          # Database configuration
├── includes/
│   ├── header.php           # Common header
│   └── footer.php           # Common footer
├── services/
│   └── iepf-claim.php       # Service pages
├── client/
│   └── login.php            # Client portal
├── admin/
│   └── login.php            # Admin panel
├── index.php                # Homepage
├── about.php                # About page
├── contact.php              # Contact page
├── privacy-policy.php       # Privacy policy
├── subscribe.php            # Newsletter handler
└── README.md                # This file
```

## 🚀 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- mod_rewrite enabled (for Apache)

### Local Development Setup

1. **Clone/Copy the files**
   ```bash
   # Copy all files to your web server directory
   cp -r php-version/* /var/www/html/
   ```

2. **Database Setup**
   - Create a MySQL database named `kmfsl_production`
   - Update database credentials in `config/database.php`
   - The database tables will be created automatically on first run

3. **Configuration**
   ```php
   // config/database.php
   private $host = 'localhost';
   private $db_name = 'kmfsl_production';
   private $username = 'your_db_user';
   private $password = 'your_db_password';
   ```

4. **File Permissions**
   ```bash
   chmod 755 /var/www/html/
   chmod 644 /var/www/html/*.php
   ```

5. **Test the Installation**
   - Visit `http://localhost/` in your browser
   - Check that all pages load correctly
   - Test contact form submission

### Production Deployment

#### Option 1: Shared Hosting (Hostinger, etc.)

1. **Upload Files**
   - Upload all files to `public_html` directory
   - Ensure proper file permissions

2. **Database Setup**
   - Create MySQL database through hosting panel
   - Update `config/database.php` with production credentials

3. **Email Configuration**
   - Update email settings in contact forms
   - Use hosting provider's SMTP settings if needed

#### Option 2: VPS/Dedicated Server

1. **Server Setup**
   ```bash
   # Install LAMP stack
   sudo apt update
   sudo apt install apache2 mysql-server php php-mysql
   
   # Enable mod_rewrite
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

2. **Virtual Host Configuration**
   ```apache
   <VirtualHost *:80>
       ServerName yourdomain.com
       DocumentRoot /var/www/html
       
       <Directory /var/www/html>
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

3. **SSL Certificate**
   ```bash
   # Install Certbot
   sudo apt install certbot python3-certbot-apache
   
   # Get SSL certificate
   sudo certbot --apache -d yourdomain.com
   ```

## 🔧 Configuration

### Database Configuration

Update `config/database.php` with your database credentials:

```php
class Database {
    private $host = 'localhost';
    private $db_name = 'your_database_name';
    private $username = 'your_username';
    private $password = 'your_password';
    // ...
}
```

### Email Configuration

Update email settings in contact forms and newsletter:

```php
// In contact.php and other forms
$to = 'your-email@yourdomain.com';
$headers = "From: noreply@yourdomain.com\r\n";
```

### Admin Access

Default admin credentials (change in production):
- **Username**: admin
- **Password**: admin123

To change admin password:
```php
// Run this once to update admin password
$new_password = password_hash('your_new_password', PASSWORD_DEFAULT);
// Update in database: UPDATE admin_users SET password = '$new_password' WHERE username = 'admin'
```

## 📊 Database Schema

The system automatically creates the following tables:

- `users` - Client accounts
- `enquiries` - Contact form submissions
- `service_requests` - Client service requests
- `documents` - Uploaded documents
- `messages` - Client-admin communication
- `admin_users` - Admin accounts
- `newsletter_subscribers` - Newsletter subscriptions

## 🔒 Security Features

- **Password Hashing**: Using PHP's `password_hash()` function
- **SQL Injection Protection**: PDO prepared statements
- **XSS Protection**: Input sanitization with `htmlspecialchars()`
- **CSRF Protection**: Session-based form validation
- **Input Validation**: Server-side validation for all forms
- **File Upload Security**: Type and size validation

## 📱 Mobile Responsiveness

- Mobile-first design approach
- Responsive navigation with mobile menu
- Touch-friendly interface elements
- Optimized images and assets
- Fast loading on mobile networks

## 🎨 Customization

### Styling
- Uses Tailwind CSS for styling
- Custom CSS in `<style>` sections of each page
- Easy to modify colors, fonts, and layouts

### Content
- All content is in PHP files for easy editing
- No build process required
- Direct file editing for quick updates

### Adding New Pages
1. Create new PHP file
2. Include header and footer
3. Add navigation links
4. Follow existing page structure

## 🚀 Performance Optimization

- **Optimized Images**: SVG logos and icons
- **Minimal JavaScript**: Only essential scripts
- **CSS Optimization**: Tailwind CSS via CDN
- **Database Optimization**: Indexed queries
- **Caching**: Browser caching headers

## 🔍 SEO Features

- **Meta Tags**: Proper title and description tags
- **Structured Data**: Schema markup ready
- **Clean URLs**: SEO-friendly page URLs
- **Fast Loading**: Optimized for Core Web Vitals
- **Mobile-Friendly**: Responsive design

## 📞 Support

For technical support or customization:
- **Email**: help@kmfsl.in
- **Phone**: +91 7070972333

## 📄 License

This project is proprietary software of Kaimur Financial Services Pvt. Ltd.

## 🔄 Version History

- **v1.0** - Initial PHP conversion from React.js
- **v1.1** - Added admin panel and client portal
- **v1.2** - Enhanced security and mobile responsiveness

---

**Note**: This PHP version maintains 100% visual compatibility with the original React.js version while providing better hosting compatibility and faster loading times.
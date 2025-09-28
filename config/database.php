<?php
/**
 * Database Configuration for KMFSL Website
 * 
 * Update these credentials according to your hosting environment
 */

class Database {
    // Database credentials - UPDATE THESE FOR YOUR HOSTING
    private $host = 'localhost';            // Usually 'localhost' for shared hosting
    private $db_name = 'kmfsl_production';  // Your database name
    private $username = 'your_db_username'; // Your database username  
    private $password = 'your_db_password'; // Your database password
    public $conn;
    
    // Get database connection
    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                )
            );
            
            // Create tables if they don't exist
            $this->createTablesIfNotExist();
            
        } catch(PDOException $exception) {
            error_log("Connection error: " . $exception->getMessage());
            // For production, don't show database errors to users
            if (defined('ENVIRONMENT') && ENVIRONMENT === 'development') {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        
        return $this->conn;
    }
    
    // Create necessary tables
    private function createTablesIfNotExist() {
        if (!$this->conn) return;
        
        try {
            // Users table
            $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                phone VARCHAR(20),
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            $this->conn->exec($sql);
            
            // Contact enquiries table
            $sql = "CREATE TABLE IF NOT EXISTS enquiries (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                phone VARCHAR(20),
                service VARCHAR(255),
                preferred_contact ENUM('email', 'phone', 'whatsapp') DEFAULT 'email',
                message TEXT NOT NULL,
                status ENUM('new', 'in_progress', 'resolved') DEFAULT 'new',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            $this->conn->exec($sql);
            
            // Newsletter subscribers
            $sql = "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) UNIQUE NOT NULL,
                status ENUM('active', 'unsubscribed') DEFAULT 'active',
                subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            $this->conn->exec($sql);
            
            // Admin users table
            $sql = "CREATE TABLE IF NOT EXISTS admin_users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(100) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                role ENUM('admin', 'moderator') DEFAULT 'admin',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            $this->conn->exec($sql);
            
            // Insert default admin user if not exists
            $checkAdmin = $this->conn->query("SELECT COUNT(*) FROM admin_users WHERE username = 'admin'");
            if ($checkAdmin->fetchColumn() == 0) {
                $defaultPassword = password_hash('admin123', PASSWORD_DEFAULT);
                $stmt = $this->conn->prepare("INSERT INTO admin_users (username, password, email) VALUES (?, ?, ?)");
                $stmt->execute(['admin', $defaultPassword, 'admin@kmfsl.in']);
            }
            
        } catch(PDOException $exception) {
            error_log("Table creation error: " . $exception->getMessage());
        }
    }
    
    // Close connection
    public function closeConnection() {
        $this->conn = null;
    }
}

// Environment configuration
define('ENVIRONMENT', 'development'); // Change to 'production' on live server

// Email configuration
define('ADMIN_EMAIL', 'help@kmfsl.in');
define('FROM_EMAIL', 'noreply@kmfsl.in');
define('SITE_NAME', 'KMFSL - Kaimur Financial Services');

?>

<!-- 
  DATABASE SETUP INSTRUCTIONS:
  
  1. Create a MySQL database named 'kmfsl_production'
  2. Update the credentials above with your hosting details
  3. The tables will be created automatically when you first run the site
  4. Default admin login: username=admin, password=admin123 (CHANGE THIS!)
  
  For cPanel/Shared Hosting:
  - Database host is usually 'localhost'
  - Database name format: cpanel_username_dbname
  - Check your hosting control panel for exact credentials
  
  For testing locally (XAMPP/WAMP):
  - Host: localhost
  - Username: root  
  - Password: (leave empty)
  - Database: kmfsl_production
-->
# CMS Detection PHP

This project is a simple **CMS Detection Tool** written in PHP. It allows users to detect the Content Management System (CMS) used by a website, such as WordPress, Joomla, Drupal, Magento, or PrestaShop. The detection is based on unique patterns in the website's structure, including specific paths, files, and content associated with different CMS platforms.

## Features
CMS Detection: Identifies multiple CMS platforms based on their unique signatures in the HTML content of a webpage.
Error Handling: Gracefully manages scenarios where the target URL cannot be fetched.
Flexible Usage: Can be easily integrated or modified for various applications.

- Detects popular CMS platforms:
  - **WordPress**
  - **Joomla**
  - **Drupal**
  - **Magento**
  - **PrestaShop**
  - **Magento**
  - **Laravel**
  - **Next.js**
  - **Node.js**
  - **React.js**
    
- Easy to use with any URL.
- Provides a quick overview of the CMS being used on a given website.

## How to Use

1. Clone this repository:

   ```bash
   git clone https://github.com/el14m3/CMS_Detection.git
   ```
2. Open the `detectCMS.php` file and replace the `$url` variable with the website URL you want to check.
   
## Requirements
PHP 7.0 or higher
cURL extension enabled in PHP

## Installation
```bash
Copy the provided PHP code into a new file, e.g., detectCMS.php.
Ensure that the server has cURL enabled.
Access the script through a web server or command line.
```
   
4. The script will output the name of the CMS detected or inform you if no CMS was found.

## Developer Information

- **Developer**: el14m3
- **Country**: Morocco

## License

This project is open-source and available under the MIT License.

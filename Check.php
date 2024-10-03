<?php
/*
    Developer: el14m3
    Country: Morocco
*/
function detectCMS($url) {
    // Array of common CMS signatures
    $cmsList = [
        'WordPress' => '/wp-content|wp-includes|wp-admin/',
        'Joomla' => '/Joomla|joomla|index.php\?option=com/',
        'Drupal' => '/sites\/default\/files|drupal/',
        'Magento' => '/static\/version|mage|magento/',
        'PrestaShop' => '/prestashop|ps_|modules\/ps_|classes\/PS_|AdminPrestashop/'
    ];

    // Initialize curl to fetch headers and page content
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        return "Unable to fetch the URL.";
    }

    // Check each CMS by signature
    foreach ($cmsList as $cmsName => $pattern) {
        if (preg_match($pattern, $response)) {
            return "The site is using " . $cmsName;
        }
    }

    return "CMS not detected.";
}

// Example usage
$url = "https://example.com";  // Replace with the URL you want to check
echo detectCMS($url);
?>

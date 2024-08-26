<?php
echo "<pre>GET data:\n";
print_r($_GET);
echo "\nPOST data:\n";
print_r($_POST);
echo "</pre>";

// Check if 'Id' is set
if (isset($_GET['Id']) && !empty($_GET['Id'])) {
    // Process the ID from GET
    $id = intval($_GET['Id']);
} elseif (isset($_POST['Id']) && !empty($_POST['Id'])) {
    // Process the ID from POST
    $id = intval($_POST['Id']);
} else {
    echo "No valid ID provided.";
    exit;
}

// Your database deletion code here...
?>

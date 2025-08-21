<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen">
        <?php include('includes/products-section.php') ?>
        <?php include('includes/cart-section.php') ?>
    </div>

    <!-- Receipt Template (Hidden by default) -->
    <div id="receipt" class="receipt hidden fixed inset-0 bg-white p-8" style="width: 300px; margin: auto;">
        <!-- Receipt content will be dynamically inserted here -->
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>
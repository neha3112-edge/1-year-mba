<?php include "header.php"; ?>

<h1 class="text-[#1C3569] text-center text-[20px] md:text-2xl font-bold">Download Brochure</h1>
<p class="text-gray-600 text-center mb-4">Get complete program details instantly</p>
<?php

$brochure = $_GET['pdf'] ?? '';

$form_name = "Brochure Form";
?>

<?php include __DIR__ . "/assets/includes/form-template.php"; ?>

<?php include "footer.php"; ?>
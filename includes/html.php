<?php
if (!isset($pageTitle)) {
    $pageTitle = "SocialHub";
}
// Páginas sem header de navegação (auth + add) centram o body
$centeredPages = ['Login', 'Criar Conta', 'Criar Publicação'];
$isCentered = in_array($pageTitle, $centeredPages);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | SocialHub</title>
    <script src="https://kit.fontawesome.com/17afc949a2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body<?php echo $isCentered ? ' class="page-centered"' : ''; ?>>

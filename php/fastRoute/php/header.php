<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastRoute - Corriere Espresso</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Header -->
<header class="bg-primary text-white text-center py-4">
    <h1>FastRoute - Corriere Espresso</h1>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">FastRoute</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="login.php">Login Personale</a></li>
                <li class="nav-item"><a class="nav-link" href="spedizione.php">Registra Spedizione</a></li>
                <li class="nav-item"><a class="nav-link" href="consegna.php">Registra Consegna</a></li>
                <li class="nav-item"><a class="nav-link" href="ritiro.php">Registra Ritiro</a></li>
                <li class="nav-item"><a class="nav-link" href="stato_plico.php">Stato Plico</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard Spedizioni</a></li>
            </ul>
        </div>
    </div>
</nav>

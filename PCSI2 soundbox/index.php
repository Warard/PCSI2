<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>Soundbox</title>
    </head>
    <body>
        <!-- Main content -->
        <div class="container">
            <!-- Header -->
            <header>
                <h1>Soundbox</h1>
            </header>

            <!-- Separation btw header and songs list -->
            <br><br> 

            <!-- List of songs -->
            <?php 
                require_once('functions.php');
                generate_songs_list()
                ?>
    </body>
    
    <!-- JS -->
    <script src="script.js"></script>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New student App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

            <div class="d-flex justify-content-center align-items-center vh-100 mt-3 AppContent">
                <div class="text-center content">
                    <!-- Contenu de votre div -->
                    <h1>Bienvenue</h1>
                    <p>Nous vous aidons à déterminer les filières les plus prometteuses pour vous. </p>
                    <form action="" class="p-3">
                        <div class="mb-3">
                            <label for="serie" class="form-label">Sélectionnez votre série</label>
                            <select name="serie" id="serie" class="form-select" required>
                                <option value="">Choisir une série</option>
                                @foreach ($series as $serie)

                                    <option value="{{ $serie->id }}">{{ $serie->Nom }}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success">Continuer</button>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>

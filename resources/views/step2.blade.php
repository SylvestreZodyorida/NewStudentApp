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
<body class="font-sans ">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="d-flex justify-content-center align-items-center  mt-3 AppContent">
            <div class="text-center fade content">
                <!-- Contenu de votre div -->
                <h1>Renseignez vos notes</h1>
                <p>Consultez votre relevé de notes du baccalaureat série {{ $serie->Nom }}</p>
                <form action="{{ route('proccess') }}" method="POST" class="p-3">
                    @csrf
                    <input type="hidden" name="serie" value="{{ $serie->id }}"  required>

                    @foreach ($matieres->chunk(2) as $matierePair)
                        <div class="row mb-4">
                            @foreach ($matierePair as $matiere)
                                <div class="col-md-6">
                                    <label for="note_{{ $matiere->id }} " class="noteLabel col-form-label">{{ $matiere->Nom }} <span style="color: rgb(247, 59, 7);">/20</span></label>
                                    <input type="number" class="form-control" id="note_{{ $matiere->Nom }}" name="note_{{ $matiere->Nom }}" value="" required>
                                    <input type="hidden" class="form-control" id="coef_{{ $matiere->Coefficient }}" name="coef_{{ $matiere->Nom }}" value="{{ $matiere->Coefficient }}" required>
                                </div>
                            @endforeach
                        </div>
                    @endforeach


                    <button class="btn btn-success">Continuer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Bundle contenant Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            const content = document.querySelector('.content');
            setTimeout(() => {
                content.classList.add('show');
            }, 1000); // Délai pour déclencher le fade-in
        };
    </script>
</body>
</html>

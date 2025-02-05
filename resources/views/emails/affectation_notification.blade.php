<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification de Mutation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Notification de Mutation</h1>
        <p class="mb-4">Bonjour <span class="font-semibold">{{ $nom }} {{ $postnom }} {{ $prenom }}</span>,</p>
        <p class="mb-2"><strong>Matricule :</strong> <span class="text-blue-600">{{ $matricule }}</span></p>
        <p class="mb-2">Nous vous informons que vous avez été muté vers une nouvelle direction :</p>
        <p class="mb-2"><strong>Nouveau Service :</strong> <span class="text-blue-600">{{ $newService }}</span></p>
        <p class="mb-4"><strong>Date de l'affectation :</strong> <span class="text-blue-600">{{ $dateaffectation }}</span></p>
        <p>Merci de votre attention.</p>
        <p class="mt-6 text-sm text-gray-600">Cordialement,</p>
        <p class="text-sm text-gray-600">L'équipe des Ressources Humaines</p>
    </div>
</body>
</html>

<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-green-100 px-4">
        <h2 class="text-3xl font-bold text-green-800 mb-4">Inscription réussie !</h2>
        <p class="mb-6 text-gray-700">Votre compte a bien été créé.</p>
        <a href="{{ route('login') }}"
           class="px-6 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700">
            Se connecter
        </a>
    </div>
</x-guest-layout>

<head>
<style>
    /* Style général */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f7fc;
      display: flex;
      width: 100%;
    }

    /* Menu latéral */
    .sidebar {
      height: 100vh;
      width: 250px;
      background-color: #7e57c2;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 10px;
      color: white;
      transition: all 0.3s ease;
      z-index: 1000;
    }

    .sidebar h2 {
      text-align: center;
      font-size: 20px;
      color: white;
      margin-bottom: 10px;
    }

    .sidebar a {
      display: block;
      padding: 15px;
      color: white;
      text-decoration: none;
      font-size: 18px;
      border-bottom: 1px solid #fff;
      transition: background-color 0.3s ease;
    }

    .sidebar a:hover {
      background-color: #6d47a3;
    }

    /* Contenu principal */
    .main-content {
      margin-left: 250px;
      width: 110%;
      padding: 10px;
      background-color: #f4f7fc;
      min-height: 100vh;
    }

    /* Sections du tableau de bord */
    .section {
      margin-top: 20px;
      margin-bottom: 40px;
    }

    .section h3 {
      color: #7e57c2;
      font-size: 22px;
      margin-bottom: 10px;
    }

    .profile-info {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .profile-info div {
      flex: 1;
      padding: 15px;
      background-color: #f7f7f7;
      border-radius: 8px;
      margin-right: 15px;
    }

    .profile-info div:last-child {
      margin-right: 0;
    }

    .profile-info p {
      margin: 10px 0;
      color: #4f4f4f;
    }

    .profile-info .label {
      font-weight: bold;
      color: #7e57c2;
    }

    /* Cartes de transactions et solde */
    .card {
      background-color: #f7f7f7;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .card h4 {
      color: #7e57c2;
      margin-bottom: 15px;
    }

    .card p {
      color: #4f4f4f;
      font-size: 18px;
    }

    .transactions {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 20px;
    }

    .transaction-item {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: calc(33.333% - 15px);
    }

    .transaction-item p {
      margin: 5px 0;
      color: #4f4f4f;
    }

    /* Boutons */
    .btn {
      padding: 12px 20px;
      background-color: #7e57c2;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #6d47a3;
    }

    .logout-btn {
      margin-top: 30px;
      text-align: center;
    }

    .logout-btn a {
      text-decoration: none;
      color: white;
      background-color: #e53935;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 8px;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .logout-btn a:hover {
      background-color: #c62828;
    }
  </style>
</head>
<x-app-layout>
      <!-- Menu Latéral -->
  <div class="sidebar">
    <h2>Menu</h2>
    <a href="#">Tableau de Bord</a>
    <a href="{{ route('profile.edit') }}">Mon Profil</a>
    <a href="#">Transactions</a>
    <a href="#">Faire un virement</a>
    <a href="#">Ajouter un compte</a>
    <a href="{{ route('profile.edit') }}">Mettre à jour le mot de passe</a>
    <a href="{{ route('profile.edit') }}">Supprimer mon compte</a>
    <a href="#" class="logout-btn">
     Se déconnecter
    </a>
  </div>

  <!-- Contenu Principal -->
  <div class="main-content">

  <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1"> 
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>


    <!-- Profil de l'utilisateur -->
    <div class="section">
      <h3>Informations Profil</h3>
      <div class="profile-info">
        <div>
          <p class="label">Nom:</p>
          <p>{{ Auth::user()->name }}</p>
        </div>
        <div>
          <p class="label">Email:</p>
          <p>{{ Auth::user()->email }}</p>
        </div>
        <div>
          <p class="label">Numéro de téléphone:</p>
          <p>+216 12 345 678</p>
        </div>
      </div>
      <button class="btn">Mettre à jour le profil</button>
    </div>

    <!-- Solde et transactions -->
    <div class="section">
      <h3>Mon Solde</h3>
      <div class="card">
        <h4>Solde total</h4>
        <p>1 245,00 €</p>
      </div>
      <div class="card">
        <h4>Transactions récentes</h4>
        <div class="transactions">
          <div class="transaction-item">
            <p>+ 320 €</p>
            <p>Dépot du 15 avril</p>
          </div>
          <div class="transaction-item">
            <p>- 150 €</p>
            <p>Retrait du 12 avril</p>
          </div>
          <div class="transaction-item">
            <p>- 50 €</p>
            <p>Facture électricité</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Projects') }}</title>
    
    <!-- Fonte Inter para melhorar a aparência do texto -->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    
    <!-- Importação dos estilos -->
    @vite('resources/css/app.css')
</head>

<body class="font-sans bg-gray-50">
    <!-- Layout principal -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-4">
            <h2 class="text-2xl font-bold mb-6">Menu</h2>
            <!-- Opções de menu     -->
            <ul>
                <li class="mb-4"><a href="#" class="hover:text-indigo-400">Dashboard</a></li>
                <li class="mb-4"><a href="#" class="hover:text-indigo-400">Categorias</a></li>
                <li><a href="#" class="hover:text-indigo-400">Configurações</a></li>
            </ul>
        </div>

        <!-- Conteúdo principal -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <div class="flex justify-between items-center bg-white shadow-md p-4">
                <h1 class="text-xl font-bold text-gray-800">Gestão de despesas</h1>
                <button class="bg-gray-800 text-white py-2 px-4 rounded-lg hover:bg-gray-900 focus:outline-none">
                    Criar Categoria
                </button>
            </div>

            <!-- Corpo -->
            <div class="flex-1 p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Conteúdo do projeto</h2>
                <!-- Conteúdo do  projeto  -->
                <p class="text-gray-600"></p>
            </div>
        </div>
    </div>
</body>
</html>

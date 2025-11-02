<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Онлайн Библиотека</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Онлайн Библиотека
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Войдите для доступа к библиотеке
                </p>
                <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-md">
                    <p class="text-sm text-blue-800 text-center">
                        <strong>Тестовый доступ:</strong><br>
                        Логин: <code class="bg-blue-100 px-2 py-1 rounded">admin</code><br>
                        Пароль: <code class="bg-blue-100 px-2 py-1 rounded">admin</code>
                    </p>
                </div>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                
                @if ($errors->any())
                <div class="rounded-md bg-red-50 p-4">
                    <div class="text-sm text-red-800">
                        {{ $errors->first() }}
                    </div>
                </div>
                @endif

                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email" class="sr-only">Логин</label>
                        <input id="email" name="email" type="text" required 
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" 
                               placeholder="Логин" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Пароль</label>
                        <input id="password" name="password" type="password" required 
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" 
                               placeholder="Пароль">
                    </div>
                </div>

                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Войти
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

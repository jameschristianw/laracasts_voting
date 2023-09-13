<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast Voting</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900 text-sm bg-gray-background">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
        <div class="flex mt-2 md:mt-0 items-center">
            @if (Route::has('login'))
                <div class="sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex flex-col md:flex-row" style="">
        <div class="w-70 mx-auto md:mx-0 md:mr-5">
            <div class="bg-white md:sticky md:top-8  border-2 border-blue rounded-xl md:mt-16"
                style="
                        border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                        border-image-slice: 1;
                        background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                        background-origin: border-box;
                        background-clip: content-box, border-box;
                    ">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an Idea</h3>
                    <p class="text-sx mt-4">Let us know what you would like to do and we'll take a look</p>
                </div>

                <form action="#" method="POST" class="space-y-4 px-4 py-6 ">
                    <div>
                        <input type="text"
                            class="border-none text-sm w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2"
                            placeholder="Your idea">
                    </div>
                    <div class="">
                        <select name="category_add" id="category_add"
                            class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
                            <option value="Category1">Category1</option>
                            <option value="Category2">Category2</option>
                            <option value="Category3">Category3</option>
                            <option value="Category4">Category4</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4"
                            class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none"
                            placeholder="Describe your idea"></textarea>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3">
                            <svg class="text-gray-700 w-4 -rotate-45" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                            </svg>

                            <span class="ml-1">Attach</span>
                        </button>
                        <button type="submit"
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transtition duration-150 ease-in px-6 py-3 text-white">
                            <span class="ml-1">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-full md:w-175">
            <nav class="hidden md:flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a href="#" class="border-b-4 pb-3 border-blue">All Ideas (87)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering
                            (7)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                            progress (7)</a></li>
                </ul>
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented
                            (87)</a></li>
                    <li><a href="#"
                            class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed
                            (7)</a></li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
        {{-- <div class="w-24">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi quae quisquam maiores quia, ratione eveniet et laboriosam, eaque cumque nostrum recusandae reiciendis deleniti laudantium ea voluptatibus at possimus culpa. Totam, fugit nostrum asperiores nam inventore enim iure impedit iusto officiis dicta minima repellat unde laudantium quod itaque, doloremque aut, labore sequi ducimus? Iusto sunt quas odio repudiandae voluptatem error numquam architecto, molestiae nesciunt alias ut nemo impedit cupiditate, nam quod! Ad, necessitatibus totam accusamus facilis cupiditate fuga, sit eaque non tempora quis ipsa esse voluptas, porro explicabo? Quis nam quam consectetur recusandae! Optio deserunt corrupti quam quaerat adipisci temporibus tempora?
            </div> --}}
    </main>
</body>

</html>

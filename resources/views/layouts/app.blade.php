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
    <livewire:styles />

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
                    <p class="text-sx mt-4">
                        @auth
                            Let us know what you would like to do and we'll take a look
                        @else
                            Please login to create an idea.
                        @endauth
                    </p>
                </div>

                @auth
                    <livewire:create-idea />
                @else
                    <div class="my-6 text-center">
                        <a href="{{ route('login') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transtition duration-150 ease-in px-6 py-3 text-white">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="inline-block justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3 mt-4">
                            Sign up
                        </a>
                    </div>
                @endauth
            </div>
        </div>
        <div class="w-full md:w-175">
            <livewire:status-filters />

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
        {{-- <div class="w-24">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi quae quisquam maiores quia, ratione eveniet et laboriosam, eaque cumque nostrum recusandae reiciendis deleniti laudantium ea voluptatibus at possimus culpa. Totam, fugit nostrum asperiores nam inventore enim iure impedit iusto officiis dicta minima repellat unde laudantium quod itaque, doloremque aut, labore sequi ducimus? Iusto sunt quas odio repudiandae voluptatem error numquam architecto, molestiae nesciunt alias ut nemo impedit cupiditate, nam quod! Ad, necessitatibus totam accusamus facilis cupiditate fuga, sit eaque non tempora quis ipsa esse voluptas, porro explicabo? Quis nam quam consectetur recusandae! Optio deserunt corrupti quam quaerat adipisci temporibus tempora?
            </div> --}}
    </main>
    <livewire:scripts />
</body>

</html>

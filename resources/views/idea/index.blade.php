<x-app-layout>
    <div class="filters flex flex-col md:flex-row px-4 md:px-0 space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category1">Category1</option>
                <option value="Category2">Category2</option>
                <option value="Category3">Category3</option>
                <option value="Category4">Category4</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter1">Filter1</option>
                <option value="Filter2">Filter2</option>
                <option value="Filter3">Filter3</option>
                <option value="Filter4">Filter4</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder:text-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div>
    {{-- end filters --}}

    <div class="ideas-container space-y-6 my-6 mx-4 md:mx-0">
        @foreach ($ideas as $idea)
            <div x-data
                @click="
                const clicked = $event.target
                    const target = clicked.tagName.toLowerCase()
                    const ignores = ['button', 'svg', 'path', 'a']

                    if (!ignores.includes(target)) {
                        clicked.closest('.idea-container').querySelector('.idea-link').click()
                    }
                    "
                class="idea-container
                bg-white rounded-xl flex transition duration-150 ease-in hover:shadow-card cursor-pointer">
                <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 ">Vote</button>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                    <div class="flex-none mx-4 md:mx-0">

                        <a href="#">
                            <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>

                    <div class="w-full mx-4 flex flex-col justify-between">
                        <h4 class="text-xl font-semibold mt-2 md:mt-0">
                            <a href="{{ route('idea.show', $idea) }}"
                                class="idea-link hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <div class="text-gray-600 mt-3 line-clamp-3">
                            {{ $idea->description }}
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center justify-between mt-3">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>1{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">4 comments</div>
                            </div>
                            <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                                <div
                                    class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">
                                    Open</div>
                                <button @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                    <ul wire:ignore x-show="isOpen" @click.away="isOpen = false"
                                        x-transition.origin.top.left x-cloak @keydown.escape.window="isOpen = false"
                                        class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                        <li>
                                            <a href="#"
                                                class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                                as spam</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                                posts</a>
                                        </li>
                                    </ul>
                                </button>
                            </div>
                            <div class="flex items-center md:hidden mt-4 md:mt-0">
                                <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                    <div class="text-sm font-bold leading-none">12</div>
                                    <div class="text-xxs font-semibold leading-none text-gray-400">Vote</div>
                                </div>
                                <button
                                    class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 -mx-5">
                                    Vote
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end of idea-container -->
        @endforeach
    </div>
    {{-- end of ideas-container --}}
    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</x-app-layout>

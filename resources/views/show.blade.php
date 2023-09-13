<x-app-layout>
    <div class="mx-4 md:mx-0">
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4 mx-4 md:mx-0">
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none md:mx-4">

                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full md:mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="$" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, commodi.
                    Officia cupiditate sunt veniam nihil amet et, deleniti doloribus quia inventore repudiandae. Magnam
                    natus molestiae nisi assumenda eos quia deleniti?
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between mt-3">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900 md:block hidden">John Doe</div>
                        <div class="md:block hidden">&bull;</div>
                        <div>10 hours ago</div>
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
                            <ul x-show="isOpen" @click.away="isOpen = false" x-transition.origin.top.left x-cloak
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 right-0 top-8 md:top-0 md:ml-8 z-10">
                                <li><a href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                        as spam</a></li>
                                <li><a href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                        posts</a></li>
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

    <div class="flex items-center justify-between buttons-container mt-6">
        <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center w-32 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transtition duration-150 ease-in px-6 py-3 text-white">
                    Reply
                </button>
                <div x-show="isOpen" @click.away="isOpen = false" x-transition.origin.top.left x-cloak
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-70 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="$" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2 border-none"
                                placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                        </div>
                        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-full md:w-1/2 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transtition duration-150 ease-in px-6 py-3 text-white">
                                Post comment
                            </button>
                            <button type="button"
                                class="flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-700 w-4 -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="flex items-center justify-center w-36 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3 mt-2 md:mt-0">
                    <span>Set status</span>
                    <svg class="text-gray-700 w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div x-show="isOpen" @click.away="isOpen = false" x-transition.origin.top.left x-cloak
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="$" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-gray-900 bg-gray-200 border-none" type="radio"
                                        checked="" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-purple bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-yellow bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-green bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="form-radio text-red bg-gray-200 border-none" type="radio"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-3 py-2"
                                placeholder="Add an update comment (optional)"></textarea>
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
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input class="form-checkbox rounded bg-gray-200" type="checkbox" name="notify_others"
                                    checked="">
                                <span class="ml-2">Notify others</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-between space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                class="w-32 h-11 text-xs bg-gray-200 uppercase font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            </button>
        </div>
    </div> <!-- end of button container -->

    <div class="comments-container relative md:ml-22 mx-4 md:mx-0 space-y-6 my-8 mt-1 pt-6">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">

                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full md:mx-4">
                    {{-- <h4 class="text-xl font-semibold">
                        <a href="$" class="hover:underline">A random title can go here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                        perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nulla aperiam
                        reprehenderit, alias reiciendis cum impedit at ipsa cupiditate sed atque, accusantium ipsam
                        dolore eaque enim! Culpa, dignissimos ratione necessitatibus non dolor quidem tenetur asperiores
                        fugiat incidunt quae, aliquid quo!
                    </div>

                    <div class="flex items-center justify-between mt-3">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>10 hours ago</div>
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <ul x-show="isOpen" @click.away="isOpen = false" x-transition.origin.top.left x-cloak
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                            posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of comment-container -->

        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="uppercase text-center text-blue text-xxs font-bold mt-1">admin</div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="$" class="hover:underline">A random title by admin can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                        perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nulla aperiam
                        reprehenderit, alias reiciendis cum impedit at ipsa cupiditate sed atque, accusantium ipsam
                        dolore eaque enim! Culpa, dignissimos ratione necessitatibus non dolor quidem tenetur asperiores
                        fugiat incidunt quae, aliquid quo!
                    </div>

                    <div class="flex items-center justify-between mt-3">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <ul
                                    class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                            posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of comment-container -->

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">

                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title can go here</a>
          </h4> --}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                        perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nulla aperiam
                        reprehenderit, alias reiciendis cum impedit at ipsa cupiditate sed atque, accusantium ipsam
                        dolore eaque enim! Culpa, dignissimos ratione necessitatibus non dolor quidem tenetur asperiores
                        fugiat incidunt quae, aliquid quo!
                    </div>

                    <div class="flex items-center justify-between mt-3">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <ul
                                    class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                            as spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                            posts</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of comment-container -->
    </div> <!-- end of comments-container -->
</x-app-layout>

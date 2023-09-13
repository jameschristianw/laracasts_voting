<x-app-layout>
  <div>
    <a href="/" class="flex items-center font-semibold hover:underline">
      <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
      
      <span class="ml-2">All ideas</span>
    </a>
  </div>

  <div class="idea-container bg-white rounded-xl flex mt-4">
    <div class="flex flex-1 px-4 py-6">
      <div class="flex-none">

        <a href="#">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
      </div>

      <div class="w-full mx-4">
        <h4 class="text-xl font-semibold">
          <a href="$" class="hover:underline">A random title can go here</a>
        </h4>
        <div class="text-gray-600 mt-3 line-clamp-3">
          Lorem ipsum dolor sit amet.
        </div>

        <div class="flex items-center justify-between mt-3">
          <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
            <div class="font-bold text-gray-900">John Doe</div>
            <div>&bull;</div>
            <div>10 hours ago</div>
            <div>&bull;</div>
            <div>Category</div>
            <div>&bull;</div>
            <div class="text-gray-900">4 comments</div>
          </div>
          <div class="flex items-center space-x-2">
            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">Open</div>
            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>
              <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
              </ul>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end of idea-container -->

  <div class="flex items-center justify-between buttons-container mt-6">
    <div class="flex items-center space-x-4 ml-6">
      <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transtition duration-150 ease-in px-6 py-3 text-white">                                  
        <span>Reply</span>
      </button>
      <button type="button" class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3">
        <span>Set status</span>
        <svg class="text-gray-700 w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        </svg>
      </button>
    </div>

    <div class="flex items-center justify-between space-x-3">
      <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
        <div class="text-xl leading-snug">12</div>
        <div class="text-gray-400 text-xs leading-none">Votes</div>
      </div>
      <button type="button" class="w-32 h-11 text-xs bg-gray-200 uppercase font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtition duration-150 ease-in px-6 py-3">
        <span>Vote</span>
      </button>
    </div>
  </div> <!-- end of button container -->

  <div class="comments-container relative ml-22 space-y-6 my-8 mt-1 pt-6">
    <div class="comment-container relative bg-white rounded-xl flex mt-4">
      <div class="flex flex-1 px-4 py-6">
        <div class="flex-none">
  
          <a href="#">
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
          </a>
        </div>
  
        <div class="w-full mx-4">
          {{-- <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title can go here</a>
          </h4> --}}
          <div class="text-gray-600 mt-3">
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nulla aperiam reprehenderit, alias reiciendis cum impedit at ipsa cupiditate sed atque, accusantium ipsam dolore eaque enim! Culpa, dignissimos ratione necessitatibus non dolor quidem tenetur asperiores fugiat incidunt quae, aliquid quo!
          </div>
  
          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div class="font-bold text-gray-900">John Doe</div>
              <div>10 hours ago</div>
            </div>
            <div class="flex items-center space-x-2">
              <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
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
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
          </a>
          <div class="uppercase text-center text-blue text-xxs font-bold mt-1">admin</div>
        </div>
  
        <div class="w-full mx-4">
          <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title by admin can go here</a>
          </h4>
          <div class="text-gray-600 mt-3">
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nulla aperiam reprehenderit, alias reiciendis cum impedit at ipsa cupiditate sed atque, accusantium ipsam dolore eaque enim! Culpa, dignissimos ratione necessitatibus non dolor quidem tenetur asperiores fugiat incidunt quae, aliquid quo!
          </div>
  
          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div class="font-bold text-blue">Andrea</div>
              <div>10 hours ago</div>
            </div>
            <div class="flex items-center space-x-2">
              <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
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
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
          </a>
        </div>
  
        <div class="w-full mx-4">
          {{-- <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title can go here</a>
          </h4> --}}
          <div class="text-gray-600 mt-3">
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, perferendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nulla aperiam reprehenderit, alias reiciendis cum impedit at ipsa cupiditate sed atque, accusantium ipsam dolore eaque enim! Culpa, dignissimos ratione necessitatibus non dolor quidem tenetur asperiores fugiat incidunt quae, aliquid quo!
          </div>
  
          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div class="font-bold text-gray-900">John Doe</div>
              <div>10 hours ago</div>
            </div>
            <div class="flex items-center space-x-2">
              <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
                </ul>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of comment-container -->
  </div> <!-- end of comments-container -->
</x-app-layout>
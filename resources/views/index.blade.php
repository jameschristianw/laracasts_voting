<x-app-layout>
  <div class="filters flex space-x-6">
    <div class="w-1/3">
      <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
        <option value="Category1">Category1</option>
        <option value="Category2">Category2</option>
        <option value="Category3">Category3</option>
        <option value="Category4">Category4</option>
      </select>
    </div>
    <div class="w-1/3">
      <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
        <option value="Filter1">Filter1</option>
        <option value="Filter2">Filter2</option>
        <option value="Filter3">Filter3</option>
        <option value="Filter4">Filter4</option>
      </select>
    </div>
    <div class="w-2/3 relative">
      <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder:text-gray-900">
      <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="w-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg> 
      </div>
    </div>
  </div>
  {{-- end filters --}}

  <div class="ideas-container space-y-6 my-6">
    <div class="idea-container bg-white rounded-xl flex transition duration-150 ease-in hover:shadow-card cursor-pointer">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 ">Vote</button>
        </div>
      </div>
      <div class="flex flex-1 px-2 py-6">
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
                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
                </ul>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of idea-container -->
    <div class="idea-container bg-white rounded-xl flex transition duration-150 ease-in hover:shadow-card cursor-pointer">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 ">Vote</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>

        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">Another random title can go here</a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusamus eaque optio autem ratione accusantium molestiae. Perspiciatis consequatur, possimus aliquam eligendi ex repellendus in numquam ipsa, dolore quod consectetur ullam, perferendis fugiat beatae ipsum minus adipisci quasi! Quod totam, labore dolorum saepe pariatur perspiciatis fuga harum quo a voluptas necessitatibus. Eveniet, porro dolor quisquam, impedit sit commodi perspiciatis numquam tempore esse laboriosam fugiat in optio distinctio! Ab atque sunt deserunt illo, in recusandae laborum? Asperiores provident quam unde? Distinctio voluptas voluptates dolore reiciendis corrupti earum. Magnam ea, laboriosam nemo nam omnis a ex reiciendis placeat perferendis officiis eligendi harum architecto?
          </div>

          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category</div>
              <div>&bull;</div>
              <div class="text-gray-900">4 comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">Closed</div>
              <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
                </ul> --}}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of idea-container -->
    <div class="idea-container bg-white rounded-xl flex transition duration-150 ease-in hover:shadow-card cursor-pointer">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl text-blue">134</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 ">Voted</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>

        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title can go here</a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusamus eaque optio autem ratione accusantium molestiae. Perspiciatis consequatur, possimus aliquam eligendi ex repellendus in numquam ipsa, dolore quod consectetur ullam, perferendis fugiat beatae ipsum minus adipisci quasi! Quod totam, labore dolorum saepe pariatur perspiciatis fuga harum quo a voluptas necessitatibus. Eveniet, porro dolor quisquam, impedit sit commodi perspiciatis numquam tempore esse laboriosam fugiat in optio distinctio! Ab atque sunt deserunt illo, in recusandae laborum? Asperiores provident quam unde? Distinctio voluptas voluptates dolore reiciendis corrupti earum. Magnam ea, laboriosam nemo nam omnis a ex reiciendis placeat perferendis officiis eligendi harum architecto?
          </div>

          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category</div>
              <div>&bull;</div>
              <div class="text-gray-900">4 comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">In progress</div>
              <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
                </ul> --}}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of idea-container -->
    <div class="idea-container bg-white rounded-xl flex transition duration-150 ease-in hover:shadow-card cursor-pointer">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl text-blue">134</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 ">Voted</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>

        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title can go here</a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusamus eaque optio autem ratione accusantium molestiae. Perspiciatis consequatur, possimus aliquam eligendi ex repellendus in numquam ipsa, dolore quod consectetur ullam, perferendis fugiat beatae ipsum minus adipisci quasi! Quod totam, labore dolorum saepe pariatur perspiciatis fuga harum quo a voluptas necessitatibus. Eveniet, porro dolor quisquam, impedit sit commodi perspiciatis numquam tempore esse laboriosam fugiat in optio distinctio! Ab atque sunt deserunt illo, in recusandae laborum? Asperiores provident quam unde? Distinctio voluptas voluptates dolore reiciendis corrupti earum. Magnam ea, laboriosam nemo nam omnis a ex reiciendis placeat perferendis officiis eligendi harum architecto?
          </div>

          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category</div>
              <div>&bull;</div>
              <div class="text-gray-900">4 comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">Implemented</div>
              <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
                </ul> --}}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of idea-container -->
    <div class="idea-container bg-white rounded-xl flex transition duration-150 ease-in hover:shadow-card cursor-pointer">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl text-blue">134</div>
          <div class="text-gray-500">Votes</div>
        </div>
        <div class="mt-8">
          <button class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 ">Voted</button>
        </div>
      </div>
      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>

        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="$" class="hover:underline">A random title can go here</a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusamus eaque optio autem ratione accusantium molestiae. Perspiciatis consequatur, possimus aliquam eligendi ex repellendus in numquam ipsa, dolore quod consectetur ullam, perferendis fugiat beatae ipsum minus adipisci quasi! Quod totam, labore dolorum saepe pariatur perspiciatis fuga harum quo a voluptas necessitatibus. Eveniet, porro dolor quisquam, impedit sit commodi perspiciatis numquam tempore esse laboriosam fugiat in optio distinctio! Ab atque sunt deserunt illo, in recusandae laborum? Asperiores provident quam unde? Distinctio voluptas voluptates dolore reiciendis corrupti earum. Magnam ea, laboriosam nemo nam omnis a ex reiciendis placeat perferendis officiis eligendi harum architecto?
          </div>

          <div class="flex items-center justify-between mt-3">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours ago</div>
              <div>&bull;</div>
              <div>Category</div>
              <div>&bull;</div>
              <div class="text-gray-900">4 comments</div>
            </div>
            <div class="flex items-center space-x-2">
              <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 px-4 py-2">Considering</div>
              <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                {{-- <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as spam</a></li>
                  <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete posts</a></li>
                </ul> --}}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end of idea-container -->
  </div>
  {{-- end of ideas-container --}}
</x-app-layout>

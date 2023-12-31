<div>
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
            <livewire:idea-index :key="$idea->id" :idea="$idea" :voteCount="$idea->votes_count" />
        @endforeach
    </div>
    {{-- end of ideas-container --}}
    <div class="my-8">
        {{-- {{ $ideas->links() }} --}}
        {{ $ideas->appends(request()->query())->links() }}
    </div>
</div>

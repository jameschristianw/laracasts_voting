<nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
        <li><a wire:click.prevent="setStatus('All')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'All') border-blue text-gray-900 @endif">All
                Ideas (87)</a>
        </li>
        <li><a wire:click.prevent="setStatus('Considering')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Considering') border-blue text-gray-900 @endif">Considering
                (7)</a></li>
        <li><a wire:click.prevent="setStatus('In Progress')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'In Progress') border-blue text-gray-900 @endif">In
                progress (7)</a></li>
    </ul>
    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
        <li><a wire:click.prevent="setStatus('Implemented')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Implemented') border-blue text-gray-900 @endif">Implemented
                (87)</a></li>
        <li><a wire:click.prevent="setStatus('Closed')" href="#"
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Closed') border-blue text-gray-900 @endif">Closed
                (7)</a></li>
    </ul>
</nav>

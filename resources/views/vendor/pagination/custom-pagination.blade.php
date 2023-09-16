@if ($paginator->hasPages())
    <nav class="flex items-center justify-between p-4" aria-label="Table navigation">
        <ul class="inline-flex -space-x-px text-sm h-8 rounded-lg">
            <li>
                <a href="{{ $paginator->url(1) }}"
                    class="flex items-center justify-center px-3 py-4 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    First
                </a>
            </li>
            <li>
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="flex items-center justify-center px-3 py-4 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    << </a>
            </li>
            <li>
                <a href="{{ prevData() }}"
                    class="flex items-center justify-center px-3 py-4 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    < </a>
            </li>

            <li>
                <a href="{{ nextData() }}"
                    class="flex items-center justify-center px-3 py-4 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >
                </a>
            </li>
            <li>
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="flex items-center justify-center px-3 py-4 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    >>
                </a>
            </li>
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()) }}"
                    class="flex items-center justify-center px-3 py-4 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Last
                </a>
            </li>
        </ul>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                class="font-semibold text-gray-900 dark:text-white">
                @if ($paginator->firstItem())
                    {{ addNextData($paginator->firstItem()) }}-{{ addNextData($paginator->lastItem()) }}
                @else
                    {{ $paginator->count() }}
                @endif
            </span>
            of <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->total() }}</span></span>

    </nav>
@endif

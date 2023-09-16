@if ($paginator->hasPages())
    <nav class="flex items-center justify-between p-4" aria-label="Table navigation">
        <ul class="inline-flex -space-x-px text-sm h-8 rounded-lg">
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 py-4 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 py-4 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                            {{ $element }}
                        </a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-3 py-4 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white">
                                    {{ $page }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                    class="flex items-center justify-center px-3 py-4 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 py-4 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                class="font-semibold text-gray-900 dark:text-white">1000</span></span>

    </nav>
@endif

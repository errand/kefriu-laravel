<form {{ $attributes->merge(['class' => 'w-full relative']) }}
      action="{{ route('search.view') }}">
    <input name="term"
           type="search"
           placeholder="Search for products"
           class="w-full pl-2 text-sm border-1 border-white bg-black color-white placeholder:text-white"
           value="{{ $this->term }}" />

    <button class="absolute p-2 text-white hover:text-pink-600 transition -translate-y-1/2 right-1 top-1/2">
        <span class="sr-only">Submit Search</span>

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </button>
</form>

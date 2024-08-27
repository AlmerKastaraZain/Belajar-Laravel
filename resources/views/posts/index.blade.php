<x-header>
    <x-text-header-1>Post Index</x-text-header-1>
    @auth 
        <section>
            <div class="flex justify-end">
                <a href="{{ route('posts.create') }}" class="mt-4 bg-blue-500 px-8 py-2 rounded font-bold text-white shadow-md hover:bg-blue-700 transition-colors">Create</a>
            </div>
        </section>
    @endauth

    <p class="dark:text-white mb-8">Welcome to the Forum</p>
    <h2 class="dark:text-white">Latest Posts:</h2>

    <ul class="grid gap-4 grid-cols-3">
        @foreach ($posts as $post)
        <li class="dark:text-white">
            <a href="posts/{{ $post->id }}" class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 overflow-hidden ">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{
                    $post->title 
                }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ 
                    Str::limit($post->content, 20) 
                }}</p>
            </a>
        </li>
        @endforeach   
    </ul>
</x-header>
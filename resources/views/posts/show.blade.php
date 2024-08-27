<x-header>

    <x-text-header-1>{{ $post->title }}</x-text-header-1>
    <section class="flex justify-end content-center gap-4">
    @auth
        <a href="{{ route('posts.edit', $post->id) }}" class="mt-4 bg-blue-500 px-8 py-2 rounded font-bold text-white shadow-md hover:bg-blue-700 transition-colors">Edit</a>
        
        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="mt-4 bg-red-500 px-8 py-2 rounded font-bold text-white shadow-md hover:bg-red-700 transition-colors">Delete</button>
        </form>     
    @endauth
    </section>
    <main class="max-w-6xl mx-auto mt-6">
        <p class="dark:text-white text-black">{{ $post->content }}</p>
    </main>
</x-header>
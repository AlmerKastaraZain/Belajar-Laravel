<x-header>
    <div class="max-w-2xl mx-auto p-4">

    <x-text-header-1>Edit Post</x-text-header-1>

    <form method="POST" action="{{ route('posts.update', $post) }}" class="outline box-border px-10 py-6 outline-slate-900 rounded outline-1 bg-slate-100 shadow-lg dark:bg-slate-800">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input name="title" type="text" id="default-input" value="{{ old('title', $post->title) }}" class="
            @error('title')
                border-red-500
            @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            
            @error('title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="content" class="block mb-2 text-sm font-medium text-gray-90 dark:text-white">Content</label>
            <textarea name="content" id="message" rows="4" class="
            @error('title')
                border-red-500
            @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."> {{ old('content', $post->content) }} </textarea>
            @error('content')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-start gap-4">
            <button type="submit" class="mt-4 bg-blue-500 px-10 py-2 rounded font-bold text-white shadow-md hover:bg-blue-700 transition-colors">Update Post</button>
            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="mt-4 bg-red-500 px-8 py-2 rounded font-bold text-white shadow-md hover:bg-red-700 transition-colors">Delete</button>
            </form> 
        </div>
    </form>
    </div>

</x-header>
<x-header>
    <div class="max-w-2xl mx-auto p-4">
    
        <x-text-header-1>Login User</x-text-header-1>
    
        <form method="POST" action="{{ route('login') }}" class="outline box-border px-10 py-6 outline-slate-900 rounded outline-1 bg-slate-100 shadow-lg dark:bg-slate-800">
            @csrf
            <div class="mb-3">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input name="name" type="text" id="default-input" placeholder="Username" class="
                @error('name')
                    outline outline-2 outline-red-500
                @enderror border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input name="email" placeholder="Email" type="email" id="default-input" class="
                @error('email')
                    outline outline-2 outline-red-500
                @enderror border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input name="password" placeholder="Password" type="password" id="default-input" class="
                @error('password')
                    outline outline-2 outline-red-500
                @enderror  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button type="submit" class="mt-4 bg-blue-500 px-10 py-2 rounded font-bold text-white shadow-md hover:bg-blue-700 transition-colors">Login</button>
            </div>
        </form>
        </div>
    
</x-header>
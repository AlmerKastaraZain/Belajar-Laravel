<x-header>
    <x-text-header-1>Admin Panel</x-text-header-1>

    <form action="/posts" method="POST">
        @csrf
        <input type="text" name="">
        <button type="submit">Submit</button>
    </form>
    <form action="/posts" method="GET">
        @csrf
        <input type="text" name="">
        <button type="submit">Submit</button>
    </form>
    <form action="/posts" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="">
        <button type="submit">Submit</button>
    </form>
    <form action="/posts" method="POST">
        @csrf
        @method('GET')
        <input type="text" name="">
        <button type="submit">Submit</button>
    </form>
</x-header>
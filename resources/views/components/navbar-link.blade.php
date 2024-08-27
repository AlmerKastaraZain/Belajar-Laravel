@props(['active' => false])

<li>
    <a {{ $attributes }} @class([
      'block py-2 px-3 rounded md:p-0',
      'text-white dark:text-white bg-blue-700 md:dark:text-blue-500 md:text-blue-700 md:bg-transparent' => $active,
      'text-gray-500 hover:bg-blue-700 md:hover:bg-transparent md:hover:text-blue-700 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:bg-transparent' => !$active
    ])
    aria-current="page">{{ $slot }}</a>
</li>
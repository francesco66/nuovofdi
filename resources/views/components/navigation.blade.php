<div class="sticky top-0">
    {{-- DESKTOP --}}
    <div class="hidden sm:block">
        <div class="flex flex-rows items-center bg-indigo-950 justify-between h-12">
            <div class="ml-4">
                <a href="/">
                    <img src="/img/logo2.png" alt=""
                        class="transition ease-in delay-150 shadow-lg aspect-square w-10 h-10 border border-indigo-500 rounded-full hover:scale-125">
                </a>
            </div>
            <div class="flex flex-row gap-4">
                <div>
                    <a href="/"
                        class="{{ request()->is('/') ? 'border-b border-gray-200 rounded-none text-gray-200' : 'text-gray-400' }} text-xl font-semibold tracking-wide hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                </div>
                <div>
                    <a href="/manifesto"
                        class="{{ request()->is('manifesto') ? 'border-b border-gray-200 rounded-none text-gray-200' : 'text-gray-400' }} text-xl font-semibold tracking-wide hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Manifesto</a>
                </div>
                <div>
                    <a href="/#posts"
                        class="{{ request()->is('posts') ? 'border-b border-gray-200 rounded-none text-gray-200' : 'text-gray-400' }} text-xl font-semibold tracking-wide hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Posts</a>
                </div>
            </div>
            <div class="flex justify-center items-center bg-indigo-500 px-4 py-1 mr-4 rounded-sm">
                @if (Route::has('login'))
                    <div class="flex flex-row gap-4">
                        @auth
                            {{-- Admin --}}
                            @can('admin')
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-900 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @endcan
                            {{-- @if (Request::is('dashboard')) --}}
                                <a href="/profile"
                                    class="font-semibold text-gray-900 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profile</a>
                            {{-- @endif --}}
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')"
                                    class="font-semibold text-gray-900 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-lg font-semibold text-gray-900 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Accedi</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-lg ml-2 font-semibold text-gray-900 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrati</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{-- MOBILE --}}
    <div class="sm:hidden">
        <div x-data="{ open: false }" class="bg-indigo-950 shadow-md">
            <div class="container mx-auto flex justify-between items-center p-4 h-10">
                <a href="/">
                    <img src="/img/logo2.png" alt=""
                        class="transition ease-in delay-150 shadow-lg aspect-square w-8 h-8 border border-indigo-500 rounded-full hover:scale-125">
                </a>

                <button x-on:click="open = !open" x-on:click.outside="open = false" class="text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div x-show="open" class="">
                <ul class="fixed top-10 right-1 bg-white px-3 py-2">
                    <div class="pb-2">
                        <li><a class="font-medium tracking-wide text-blue-900 hover:border-b-2 hover:border-blue-900"
                                href="/">Home</a></li>
                        <li><a class="font-medium tracking-wide text-blue-900 hover:border-b-2 hover:border-blue-900"
                                href="/manifesto">Manifesto</a></li>
                        <li><a class="font-medium tracking-wide text-blue-900 hover:border-b-2 hover:border-blue-900"
                                href="posts">Posts</a>
                        </li>
                    </div>
                    @if (Route::has('login'))
                        <div class="border-t-2 border-slate-500 pt-2">
                            @auth
                                @can('admin')
                                    <li><a href="{{ url('/dashboard') }}"
                                            class="font-medium tracking-wide text-gray-700 hover:text-black hover:border-b-2 hover:border-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    </li>
                                @endcan
                                {{-- @if (Request::is('dashboard')) --}}
                                    <li><a href="/profile"
                                        class="font-semibold text-gray-900 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profile</a>
                                    </li>
                                {{-- @endif --}}
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li><a href="{{ route('logout') }}"
                                            class="font-medium tracking-wide text-gray-700 hover:text-black hover:border-b-2 hover:border-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a></li>
                                </form>
                            @else
                                <li><a href="{{ route('login') }}"
                                        class="font-medium tracking-wide text-gray-700 hover:text-black hover:border-b-2 hover:border-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Accedi</a>
                                </li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"
                                            class="font-medium tracking-wide text-gray-700 hover:text-gray-900 hover:border-b-2 hover:border-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrati</a>
                                    </li>
                                @endif
                            @endauth
                        </div>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>

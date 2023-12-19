@php use Diglactic\Breadcrumbs\Breadcrumbs; @endphp
<x-app-layout>
    <x-slot name="header">
        <x-header.index >
                <x-header.left-menu.index class="">
                    <x-header.left-menu.list>
                        <x-header.left-menu.link>For Business</x-header.left-menu.link>
                        <x-header.left-menu.link>Career in Avito</x-header.left-menu.link>
                        <x-header.left-menu.link>Support</x-header.left-menu.link>
                        <x-header.left-menu.link>Categories</x-header.left-menu.link>
                    </x-header.left-menu.list>
                </x-header.left-menu.index>
                <div class="flex">
                    <div class="mr-8 flex">
                        <a href="" class="text-white text-sm bg-blue-400 my-1 py-2 px-4 rounded hover:bg-blue-600">Add advertisement</a>
                    </div>
                    <div class="auth flex items-center">
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-black hover:text-rose-500 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ms-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                @else
                                    <a href="{{ route('login') }}" class="text-white mr-2 hover:text-rose-500">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-white hover:text-rose-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
        </x-header.index>
    </x-slot>

    <x-slot name="nav">
        <nav class="bg-white">
            <div class="container mx-auto flex items-center justify-center py-6">
                <div class="mr-4">
                    <img class="h-10" src="{{ asset('images/logo.png') }}" alt="">
                </div>
                <form class="flex items-center" action="">
                    <div class="mr-2">
                        <input class="border-2 w-80 h-10 border-blue-300 rounded focus:border-blue-400" type="text" value="" placeholder="Search">
                    </div>
                    <div class="">
                        <button type="submit" class="text-white bg-blue-300 py-2 px-4 hover:bg-blue-400 rounded">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </nav>
    </x-slot>
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render('country')  }}
    </x-slot>
    <x-slot name="section">
        <section>
            <div class="container mx-auto">
                <div class="grid mx-1 grid-cols-1 md:grid-cols-6 gap-2">
                    <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                        <div class="flex">
                            <div class="h-full">
                                Auto
                            </div>
                            <div class="h-full">
                                <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_1.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                        <div class="flex">
                            <div class="">
                                RE
                            </div>
                            <div class="">
                                <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_4_v2.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                        <div class="flex">
                            <div class="">
                                Jobs
                            </div>
                            <div class="">
                                <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_110.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                        <div class="flex">
                            <div class="">
                                Clothing
                            </div>
                            <div class="">
                                <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_27.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                        <div class="flex">
                            <div class="">
                                Hobby
                            </div>
                            <div class="">
                                <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_7.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                        <div class="flex">
                            <div class="">
                                Pets
                            </div>
                            <div class="">
                                <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_35.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </x-slot>

        <div class="container mx-auto">
            <div class="mt-12 mb-4">
                <p class="text-2xl font-bold">Recommendations for you</p>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class=" flex flex-col md:flex-col-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                        <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                            <div class="flex flex-col">
                                <div class="">
                                    <img class="h-20 " src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_1.png" alt="">
                                </div>
                                <div class="">
                                    <p>Titile</p>
                                    <p>Price</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </a>
                        <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                            <div class="flex flex-col">
                                <div class="">
                                    <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_4_v2.png" alt="">
                                </div>
                                <div class="">
                                    <p>Titile</p>
                                    <p>Price</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </a>
                        <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                            <div class="flex flex-col">
                                <div class="">
                                    <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_110.png" alt="">
                                </div>
                                <div class="">
                                    <p>Titile</p>
                                    <p>Price</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </a>
                        <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                            <div class="flex flex-col">
                                <div class="">
                                    <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_27.png" alt="">
                                </div>
                                <div class="">
                                    <p>Titile</p>
                                    <p>Price</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </a>
                        <a class="bg-gray-200 p-2 hover:bg-gray-300 rounded" href="">
                            <div class="flex flex-col">
                                <div class="">
                                    <img class="h-20" src="https://www.avito.st/s/avito/components/visual_rubricator/156x90/cat_7.png" alt="">
                                </div>
                                <div class="">
                                    <p>Titile</p>
                                    <p>Price</p>
                                    <p>Date</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col md:flex-col-4">
                    <ul class="max-w-sm">
                        <li>
                            <p class="font-bold">Delivery</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolore laudantium nam quo velit! Cumque deleniti doloribus dolorum esse eveniet expedita laborum nemo tenetur! Consequuntur eius hic maiores nobis placeat?</p>
                        </li>
                        <li><p class="font-bold">Auto Service</p></li>
                        <li>Service 3</li>
                        <li>Service 4</li>
                    </ul>
                </div>
            </div>
        </div>
</x-app-layout>


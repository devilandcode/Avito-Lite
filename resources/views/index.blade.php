<x-app-layout>
    <x-slot name="header">
        <header class="bg-black">
            <div class="container mx-auto flex justify-between items-center">
                <div class="">
                    <ul class="flex">
                        <li class="text-white mr-4"><a class="hover:text-rose-500" href="">For Business</a></li>
                        <li class="text-white mr-4"><a class="hover:text-rose-500" href="">Career in Avito</a></li>
                        <li class="text-white mr-4"><a class="hover:text-rose-500" href="">Support</a></li>
                        <li class="text-white mr-4"><a class="hover:text-rose-500" href="">Categories</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <div class="mr-8 flex">
                        <a href="" class="text-white text-sm bg-blue-400 my-1 py-2 px-4 rounded hover:bg-blue-600">Add advertisement</a>
                    </div>
                    <div class="auth flex items-center">
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-rose-500">Profile</a>
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
            </div>
        </header>
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


@extends('layouts.main')

@section('content')
    <main class="">

        <div
            class="h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
            <img src="https://picsum.photos/seed/picsum/1900/850" class="absolute top-0 left-0 min-h-full ob" alt="">
            <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
                <div class="col-span-6">
                    <span class="uppercase text-white text-xs font-bold mb-2 block">WE ARE EXPERTS</span>
                    <h1 class="text-white font-extrabold text-5xl mb-8">Finpoint provides Financial Consulting in different
                        ways</h1>
                    <p class="text-stone-100 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                    </p>
                    <button
                        class="mt-8 text-white uppercase py-4 text-base font-light px-10 border border-white hover:bg-white hover:bg-opacity-10">Get
                        started</button>
                </div>
            </div>
        </div>
        <div class="m-5"></div>
        <div class="container mx-auto px-6">
            <div class="h-64 rounded-md overflow-hidden bg-cover bg-center"
                style="background-image: url('https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">
                        <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
                        <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore
                            facere provident molestias ipsam sint voluptatum pariatur.</p>
                        <button
                            class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <span>Shop Now</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:flex mt-8 md:-mx-4">
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2"
                    style="background-image: url('https://images.unsplash.com/photo-1547949003-9792a18a2601?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Back Pack</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore
                                facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button
                                class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2"
                    style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Games</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore
                                facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button
                                class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Peralatan Dengan Kategori Camping --}}
            <div class="mt-16">
                <h3 class="text-gray-600 text-2xl font-medium">Kategori Camping</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach ($peralatan as $item)
                        @if ($item->jenis == 'Camping')
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="relative">
                                    <img src="{{ $item->foto }}" alt="Gambar Produk" class="w-full h-60 object-cover">
                                    <button
                                        class="absolute bottom-2 right-2 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500">
                                        Sewa Sekarang
                                    </button>
                                </div>
                                <div class="px-5 py-3">
                                    <h3>Rp. {{ number_format($item->harga, 0, ',', '.') }} / Hari</h3>
                                    <h3 class="text-gray-700 uppercase">{{ $item->namaPeralatan }}</h3>
                                    <div class="text-gray-500 mt-2">
                                        @foreach ($item->deskripsi as $desc)
                                            <!-- Perbaikan di sini -->
                                            <p>- {{ $desc }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>


            {{-- Peralatan Dengan Kategori Alat Masak --}}
            <div class="mt-16">
                <h3 class="text-gray-600 text-2xl font-medium">Kategori Camping</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach ($peralatan as $item)
                        @if ($item->jenis == 'Alat Masak')
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="relative">
                                    <img src="{{ $item->foto }}" alt="Gambar Produk" class="w-full 5-60 object-cover">
                                    <button
                                        class="absolute bottom-2 right-2 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500">
                                        Sewa Sekarang
                                    </button>
                                </div>
                                <div class="px-5 py-3">
                                    <h3>Rp. {{ number_format($item->harga, 0, ',', '.') }} / Hari</h3>
                                    <h3 class="text-gray-700 uppercase">{{ $item->namaPeralatan }}</h3>
                                    <div class="text-gray-500 mt-2">
                                        @foreach ($item->deskripsi as $desc)
                                        <!-- Perbaikan di sini -->
                                        <p>- {{ $desc }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>


        </div>
    </main>

    <footer class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Brand</a>
            <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
        </div>
    </footer>
@endsection

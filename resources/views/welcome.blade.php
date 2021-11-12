<x-app-layout>

    <!--Portada-->
    <section class="bg-cover" style="background-image: url({{asset('img/home/students1.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl"> Conviertete en un experto con nuestros cursos! </h1>
                <p class="text-white text-lg mt-2 mb-4"> En Frank Class encontraras cursos, manuales y articulos de interes que te ayudaran en tu formacion profesional en el area de TI</p>
                @livewire('search')
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6"> CONTENIDO CURSOS</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cont1.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos Diseño Web</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam voluptatem, iure laudantium alias accusantium fugit.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cont2.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos Laravel 8</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam voluptatem, iure laudantium alias accusantium fugit.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cont3.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Proyectos</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam voluptatem, iure laudantium alias accusantium fugit.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/cont4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Angular 10</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque veniam voluptatem, iure laudantium alias accusantium fugit.</p>
                </header>
            </article>
        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-xl">Revisa nuestros cursos</h1>
        <p class="text-center text-white">Visita nuestro catalogo de cursos y filtros por categorias o niveles</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-orange-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de Cursos
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Actualizado 2021</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <x-course-card :course="$course" />
            @endforeach
        </div>

    </section>
    
</x-app-layout>

<x-app-layout>

    <section class="bg-cover" style="background-image: url({{asset('img/cursos/portada1.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl"> Los mejores cursos para tu desarrollo profesional GRATIS </h1>
                <p class="text-white text-lg mt-2 mb-4"> En Frank Class encontraras cursos, manuales y articulos de interes que te ayudaran en tu formacion profesional en el area de TI</p>
                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('courses-index')

</x-app-layout>
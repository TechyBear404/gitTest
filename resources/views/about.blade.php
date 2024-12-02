<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('À propos de nous') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Notre entreprise</h3>
                    <p>Nous sommes une entreprise leader dans notre secteur, engagée à fournir des services de qualité à
                        nos clients.</p>
                    <h3 class="text-lg font-semibold mt-4">Notre mission</h3>
                    <p>Notre mission est de fournir une valeur exceptionnelle à nos clients grâce à des solutions
                        innovantes et un service client exceptionnel.</p>
                    <h3 class="text-lg font-semibold mt-4">Notre équipe</h3>
                    <p>Nous avons une équipe de professionnels dévoués qui sont passionnés par leur travail et
                        s'efforcent de dépasser les attentes.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

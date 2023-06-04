@extends('layouts.app')

@section('content')
    <div class="relative bg-white">
        <div class="mx-auto max-w-7xl lg:grid lg:grid-cols-12 lg:gap-x-8 lg:px-8">
            <div class="px-6 pt-10 pb-24 sm:pb-32 lg:col-span-7 lg:px-0 lg:pt-48 lg:pb-56 xl:col-span-6">
                <div class="max-w-2xl mx-auto lg:mx-0">
                    <h1 class="mt-24 text-4xl font-bold tracking-tight text-gray-900 sm:mt-10 sm:text-6xl">Wer hat den
                        SPÖ-Vorsitz?</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Seit 03. Juni 2023: Mag. Hans Peter Doskozil</p>
                </div>
                <div class="mt-20">
                    <a
                        href="{{ route('imprint') }}"
                        class="text-xs underline"
                    >Impressum</a>
                </div>
            </div>
            <div class="relative lg:col-span-5 lg:-mr-8 xl:absolute xl:inset-0 xl:left-1/2 xl:mr-0">
                <img
                    class="aspect-[4/3] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
                    src="{{ config('image.url') }}"
                    alt="Mag. Hans Peter Doskozil"
                >
            </div>
        </div>
    </div>
    <div class="block p-2 text-right">&copy; SPÖ/David Višnjić</div>
@endsection

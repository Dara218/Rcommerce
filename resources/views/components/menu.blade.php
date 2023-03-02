@props(['products'])
<x-layout>
    @include('components._navbar')

    <x-carousel/>

    <x-products-menu :products="$products"/>

</x-layout>

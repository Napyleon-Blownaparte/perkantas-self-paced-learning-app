<x-app-layout>
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 flex justify-center items-center z-50">
        <iframe 
            src="{{ asset('/pdf/sample.pdf') }}" 
            class="w-full h-full border-0">
        </iframe>
    </div>
</x-app-layout>
<x-app-layout>
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 flex justify-center items-center z-50">
        <embed 
            src="{{asset($book->pdf_link)}}" 
            class="w-full h-full border-0">
    </div>
</x-app-layout>

@props(['label', 'type', 'id'])

<div class="mb-4">
    <label for="{{ $id }}" class="block text-gray-700">{{ $label }}</label>
    <input id="{{ $id }}" type="{{ $type }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
</div>
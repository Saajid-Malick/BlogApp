
<x-app-layout>
    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $chirp->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button class="mt-4 purple-button">{{ __('Save') }}</x-primary-button>
                <a href="{{ route('chirps.indexs') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>

<style>
    .max-w-4xl {
        max-width: 64rem; 
        padding-left: 1rem;
        padding-right: 1rem;
        align-items: center;
    }

</style>
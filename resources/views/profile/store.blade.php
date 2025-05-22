<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="file" :value="__('File')" />
                <x-text-input id="file" class="block mt-1 w-full" type="file" name="file" :value="old('file')" required autofocus  autocomplete="username" />
            <x-input-error :messages="$errors->get('file')" class="mt-2" />
        </div>
            <button type="submit" class='text-sm px-4 py-2 border-2 border-blue-200 bg-blue-200 text-black rounded  focus:outline-none focus:ring-2 focus:ring-blue-400 mt-4'>Upload</button>
    </form>
</x-guest-layout>

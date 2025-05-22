<x-app-layout>
        <!-- Profil Header Container  -->

    <div class="grid grid-cols-[2fr_8fr] max-h-48 w-full px-8 py-8">
        <div class='max-h-48 flex justify-center align-center'>
            <img class="max-h-36 rounded-full" src="{{ asset('/profile_images/' . $user->profile->profile_img) }}" alt="profile img">
        </div>
        <div class='max-h-48 grid grid-rows-[2fr_2fr_6fr]'>
            <div class='flex flex-row gap-8 items-center'>
                <p class="font-semibold text-xl"> {{$user->name}}</p>
                <button class='text-sm px-4 py-2 border-2 border-blue-200 bg-blue-200 text-black rounded  focus:outline-none focus:ring-2 focus:ring-blue-400'>Profil bearbeiten</button>
                <a href={{'store'}} class='text-sm px-4 py-2 border-2 border-black-200 bg-gray-200 text-black rounded  focus:outline-none focus:ring-2 focus:ring-gray-600'>Upload</a>
            </div>
            <div class='flex flex-row gap-8 items-center'>
                <div class="flex flex-row gap-4">
                    <p class="font-semibold">{{$user->posts->count()}}</p>
                    <p class="text-gray-500">Beiträge</p>
                </div>
                <div class="flex flex-row gap-4">
                    <p class="font-semibold">{{$user->followers->count()}}</p>
                    <p class="text-gray-500">Followers</p>
                </div>
                <div class="flex flex-row gap-4">
                    <p class="font-semibold">{{$user->followed->count()}}</p>
                    <p class="text-gray-500">Gefolgt</p>
                </div>
            </div>            
            <div class='flex flex-col mt-8'>
                <span class="italic">{{$user->profile->description}}</span>
                <span class="text-semibold">{{$user->profile->website}}</span>
            </div>
        </div>
    </div>
    <!-- Image Container  -->
    <div class="grid grid-cols-4 gap-8 px-8 py-8 mt-32 ">
        @foreach ($user->posts as $post )
        <div  class="relative inline-block">
            <form action="{{route('post.delete', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class='absolute top-2 right-2 bg-red-500 text-white rounded px-2 py-1'>X</button>
            </form>
            <img src="{{ Storage::url($post->img) }}" alt="">
        </div>
        @endforeach
    </div>
    
</x-app-layout>
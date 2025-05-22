 <x-app-layout>

    <section class='max-w-6xl mx-auto py-12 grid grid-cols-3 gap-4'>
        @foreach ($posts as $post)
        <div class='max-h-60 grid grid-cols-[6fr_4fr] gap-1 overflow-hidden'>
             <div class='flex align-center justify-center'>
                 <img src="{{ asset('/storage/' . $post->img) }}" alt="">
             </div>
             
             <div class='flex flex-col '>
                 <div class=" max-h-24 grid grid-cols-[2fr_8fr] gap-4">
                     <img class="max-h-12 rounded-full" src="{{ asset('/profile_images/' . $post->user->profile->profile_img) }}" alt="">
                     <div>
                         <p class="text-xs font-semibold">{{$post->user->name}}</p>
                         <p class="text-xs italic">Wohlen </p>
                     </div>
                 </div>
                 <hr class="mt-4">
                
                 <div class="flex flex-col justify-between">
                    
                     <div>
                         <p class="text-xs mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doro per no tanto por eso un poco mas de texto en plano ...</p>
                     </div>
                     <div class='flex flex-row mt-12'>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thumbs-up-icon lucide-thumbs-up"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z"/></svg>
                         </div>
                         <p>100</p>
                     </div>
                 </div>
             </div>
            </div>   
        @endforeach
    </section>


    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

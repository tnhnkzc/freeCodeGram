@extends('layouts.app')

@section('content')
<div class="w-full max-w-5xl mx-auto bg-white grid grid-flow-row ">
        @foreach($posts as $post)
                <img class="w-3/6  border-2 " src="/storage/{{ $post->image }}" alt="">
        
             <div class="flex justify-start items-start border-t-2 border-b-2 border-r-2 w-3/6">
               <div>
                  <div class="flex flex-row justify-start items-center gap-4 mx-2 my-2 w-full">
                    <div class="w-max">
                       <img class="w-24 rounded-full" src="{{ $post->user->profile->profileImage() }}" alt="">
                     </div>
                     <div class="w-max">
                       <a href="/profile/{{ $post->user->id }}" class="font-bold"> {{ $post->user->username }}</a>
                     </div>
                     <div>
                        <form action="/follow/{{$post->user->id}}"  method="post"> 
                         @csrf
                            @if (auth()->user()->following->contains($post->user->id) == true) 
                            <button value="Unfollow" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4 pt-2">Unfollow</button>
                            @else
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4 pt-2">Follow</button>
                            @endif
                         </form>
                      </div>
                   </div>
                   <hr class="ml-2">
                   <div class="ml-2 mt-4 text-left w-full flex gap-2">
                       <a href="/profile/{{ $post->user->id }}" class="font-bold"> {{ $post->user->username }}</a>
                       <p>{{ $post->caption }}</p>
                   </div>
               </div>
              </div>
        @endforeach  
</div>
@endsection

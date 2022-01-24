@extends('layouts.app')

@section('content')
<div class="w-full max-w-5xl mx-auto bg-white flex flex-col gap-4 ">
        @foreach($posts as $post)
             <div class="flex flex-row justify-center items-start ">
               <div class="w-full ">
                  <div class="w-full flex flex-row justify-center items-start   w-full gap-2">
                   <div class="w-full">
                    <img class="w-full  border-2 " src="/storage/{{ $post->image }}" alt="">
                   </div>
                    <div class="w-1/4 mt-4">
                       <img class="w-24 rounded-full" src="{{ $post->user->profile->profileImage() }}" alt="">
                     </div>
                     <div class="w-1/4 mt-4">
                       <a href="/profile/{{ $post->user->id }}" class="font-bold"> {{ $post->user->username }}</a>
                     </div>
                     
                      <div class="ml-2 mt-4 text-left w-full flex gap-2">
                       
                       <p>{{ $post->caption }}</p>
                      </div>
                  </div>
               </div>
             </div>
        @endforeach
        <div>
         {{ $posts->links()}}
        </div>  
</div>
@endsection

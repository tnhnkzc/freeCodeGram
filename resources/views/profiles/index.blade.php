@extends('layouts.app')

@section('content')
<div class="w-full max-w-5xl mx-auto bg-white">
    <div class="flex justify-start bg-white ">
        <div class="grid grid-rows-1 ">
            <img src="{{ $user->profile->profileImage() }}" class="w-32 rounded-full">
        </div>
        <div class=" bg-whitegrid grid-rows-1 gap-4 p-5 items-center">
            
            <div class="flex justify-between">
                <div class="flex gap-2"> 
                    <h1 class="font-bold text-lg ">{{ $user->username }}</h1>
                    
                    {{-- <input type="hidden" name="status" value="{{ $follows->status == 1 ? 0 : 1 }}"/>
                    @if($follows->status == 1)
                        <input type="submit" value="unfollow"/>
                    @else
                        <input type="submit" value="follow"/>
                    @endif --}}
                    <form action="/follow/{{$user->id}}"  method="post"> 
                    @csrf
                        @if (auth()->user()->following->contains($user->id) == true) 
                            <button value="Unfollow" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4 pt-2">Unfollow</button>
                        @else
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4 pt-2">Follow</button>
                        @endif
                    </form>
                </div>
               
            @can('update', $user->profile)
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4" href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                @can('update', $user->profile)
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4" href="/p/create">Add New Post</a>
            @endcan
            </div>
            <div class="flex  justify-start mt-4">
                    <div class="pr-3"><strong>{{ $user->posts->count()}}</strong> posts</div>
                    <div class="pr-3"><strong>{{ $user->profile->followers->count()}}</strong> followers</div>
                    <div class="pr-3"><strong>{{ $user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-5 font-bold">{{ $user->profile->title }}</div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div class="text-blue-800">
                <a href="#">{{ $user->profile->url }}</a>
            </div>
            
        </div>
    </div>
    <div class="grid grid-cols-3 gap-2 justify-between bg-white">
        @foreach($user->posts as $post)
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" alt="">
        </a>
        
        @endforeach
    </div>


</div>
@endsection

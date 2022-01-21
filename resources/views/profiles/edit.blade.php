@extends('layouts.app')

@section('content')
<div class="w-full max-w-xl mx-auto bg-white">

   <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PATCH')
    <div class="grid grid-rows-2">
       <h1 class="text-bold">Edit Profile</h1>
      </div>
    
      <div class="grid grid-rows-6 ">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="title" >Title</label>

                            <div class="grid grid-rows-2" >
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description" >Description</label>

                            <div class="grid grid-rows-2" >
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="url" >URL</label>

                            <div class="grid grid-rows-2" >
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="grid grid-rows-2">
                             <label class="block text-gray-700 text-sm font-bold mb-2" for="image" >Profile Image</label>
                             <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file", class="form-control-file" id="image" name="image">

                              @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="grid grid-rows-2">
                             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border-2 border-orange-600">Save Profile</button>
                            </div>
       </div>
   </form>

</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="w-full max-w-5xl mx-auto bg-white">
   <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="grid grid-rows-6">
       <h1 class="text-bold">Add New Post</h1>
      </div>
    
      <div class="grid grid-rows-6 gap-4">
                            <label for="caption" >Post Caption</label>

                            <div class="grid grid-rows-6" >
                                <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="grid grid-rows-2">
                             <label for="image" >Post Image</label>
                             <input type="file", class="form-control-file" id="image" name="image">

                              @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="grid grid-rows-2">
                             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border-2 border-orange-600">Add New Post</button>
                            </div>
       </div>
   </form>
</div>
@endsection

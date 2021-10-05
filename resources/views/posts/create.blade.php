<x-app-layout>
    

    <div class="container">

        <form method="POST" action="/p" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-8 offset-2 pt-3">
                    <div class="row pb-3">
                        <h1>Add New Post</h1>
                    </div>
                    
                    <div class="row">
                        <x-label for="image" :value="__('Post Image')" />
                        <input type="file" class="form-control-file block mt-1 w-full" id="image" name="image" required>
                        @error('image')
                            <p style="margin:1rem; color: red;"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="row pt-5">
                        <x-label for="caption" :value="__('Post Caption')" />

                        <x-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required/>
                        @error('caption')
                            <p style="margin:1rem;"> {{ $message }} </p>
                        @enderror
                    </div>

                    

                    <div class="row pt-5">
                        <button class="btn btn-primary col-3" type="submit">Add New Post</button>
                    </div>

                </div>
            </div>

            
        </form>
    </div>


</x-app-layout>

<x-app-layout>
    

    <div class="container">
    <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
            @csrf
            @method("PATCH")

            <div class="row">
                <div class="col-8 offset-2 pt-3">
                    <div class="row pb-3">
                        <h1>Edit Profile</h1>
                    </div>

                    <div class="row pt-4">
                        <x-label for="title" :value="__('Title:')" class="pb-1" />

                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{old('title') ?? $user->profile->title}}" required/>
                        @error('title')
                            <p style="margin:1rem;"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <x-label for="description" :value="__('Description:')" class="pb-1" />

                        <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{old('title') ?? $user->profile->description}}" required/>
                        @error('description')
                            <p style="margin:1rem;"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <x-label for="url" :value="__('Website:')" class="pb-1" />

                        <x-input id="url" class="block mt-1 w-full" type="text" name="url" value="{{old('url') ?? $user->profile->url}}" required/>
                        @error('url')
                            <p style="margin:1rem;"> {{ $message }} </p>
                        @enderror
                    </div>

                    


                    <div class="row pt-5">
                        <x-label for="image" :value="__('Profile Image')" class="pb-2" />
                        <input type="file" class="form-control-file block mt-1 w-full" id="image" name="image">
                        @error('image')
                            <p style="margin:1rem; color: red;"> {{ $message }} </p>
                        @enderror
                    </div>


                    <div class="row pt-5">
                        <button class="btn btn-primary col-3" type="submit">Save Changes</button>
                    </div>

                </div>
            </div>

            
        </form>
    </div>


</x-app-layout>

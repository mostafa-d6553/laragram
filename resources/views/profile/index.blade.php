<x-app-layout>
    

    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
            </div>

            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    

                    @can ('update',$user->profile)
                    <div>
                        <button class="btn btn-primary mx-3"><a href="/profile/{{$user->id}}/edit" class="text-decoration-none text-white">Edit Profile</a></button>
                        <button class="btn btn-primary"><a href=" {{ route('post.create') }}" class="text-decoration-none text-white">add new post</a></button>
                    </div>
                    @endcan
                    
                </div>

                <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>235</strong> following</div>
                </div>

                <div>

                <div class="pt-4 pb-1"><strong>{{ $user->profile->title ?? ' ' }}</strong></div>
                <div>{{ $user->profile->description ?? ' ' }}</div>
                <div class="pt-2"><a href="#">{{ $user->profile->url ?? ' ' }}</a></div>

                </div>
            </div>
        </div>

        <div class="row p-5">
            @foreach($user->posts as $post)
                <div class="col-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="pb-4">
                    </a>
                </div>
            @endforeach
        </div>
    </div>


</x-app-layout>

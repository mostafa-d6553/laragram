<x-app-layout>
    

    <div class="container">
        
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
            <div class="col-4 pt-3">
                <div>

                    <div class="d-flex">

                        <div class="pr-4 pb-4">
                            <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 40px;">
                        </div>

                        <div class="d-flex pt-2">
                            
                                <div>
                                    <a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark fw-bold">
                                        {{ $post->user->username }}
                                    </a>
                                </div>

                                <span class="fw-bold pl-4">|</span>
                            
                            <a href="#" class="pl-4 text-decoration-none">Follow</a>

                        </div>

                    </div>


                    <p>
                        <span class="fw-bold pr-1">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark">
                            {{ $post->user->username }}
                            </a>
                        </span>

                        {{ $post->caption }}

                    </p>

                </div>
            </div>
        </div>

    </div>


</x-app-layout>

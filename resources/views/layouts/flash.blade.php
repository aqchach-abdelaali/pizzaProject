
@if (session('message'))
    <div class="container mx-auto">
        <div class="my-2 max-w-2xl mx-auto">
            <div class="bg-{{session('color') ? session('color') : 'bg-gre'}} text-white py-2 lg:px-2">
                @if (session('title'))
                   <h3 class="m-px">
                        {!! session('title') !!}  
                    </h3>  
                @endif
                <p>
                    {!! $slot !!}
                </p>
        </div>
    </div>
@endif

<x-layout>
    <x-navbar/>
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            @foreach ($article as $el)
                <x-card dataId="{{$el['id'] }}" name="{{$el['name']}}" surname="{{$el['surname']}}"></x-card>
            @endforeach

        </div>
    </div>
    
   
</x-layout>
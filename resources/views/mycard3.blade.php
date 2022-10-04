<x-app-layout>

    <x-slot name="title">
        My Card 3
    </x-slot>

    <x-slot name="header">
    @if (session('status'))
        <div class="alert alert-success">
            <p class="text-center">{{ session('status') }}</p>
        </div>
    @endif
    </x-slot>

    <div class="w-10/12 h-[26rem] mx-auto flex justify-between">
        <form method="post" class="w-10/12 md:w-[20rem] mx-auto bg-[#2c3e50] mt-10 flex items-center flex-col rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 shadow-2xl">
            @csrf
            
            <div class="w-10/12 mx-auto p-3">
                <label for="name" class="text-white">Name</label>
                <input type="text" placeholder="Type here" id="name" name="name" class="input w-full" />
            </div>

            <div class="w-10/12 mx-auto p-3">
                <label for="job" class="text-white">Job</label>
                <input type="text" placeholder="Type here" id="job" name="job" class="input w-full" />
            </div>

            <div class="w-10/12 mx-auto p-3">
                <label for="description" class="text-white">Description</label>
                <input type="text" placeholder="Type here" id="description" name="description" class="input w-full" />
            </div>

            <button type="submit" class="btn glass m-5">Submit</button>
        </form>

        <div class="w-[35rem] mt-10">

            @foreach($mycard3 as $card3)
            
            <div class="bg-[#1abc9c] rounded-2xl p-5 mb-5">

                <div class="w-[15rem] flex justify-between text-white">
                    <p class="font-bold text-[#2c3e50]">Name <span class="text-white">{{ $card3->name }}</span></p>
                </div>
                <div class="w-[15rem] flex justify-between text-white">
                    <p class="font-bold text-[#2c3e50]">Job <span class="text-white">{{ $card3->job }}</span></p>
                </div>
                <div class="text-white">
                    <p class="font-bold text-[#2c3e50]">Description</p>
                    <p>{{ $card3->description }}</p>
                </div>
                <div class="w-full flex justify-end">
                    <div class="w-16 h-7 flex justify-center rounded-full items-center bg-[#ecf0f1] hover:bg-black hover:text-white">
                    <a href="/mycard2/{{ $card3->id }}/edit">Edit</a>
                    </div>
                    <div class="w-16 ml-5 h-7 flex justify-center rounded-full items-center bg-[#e74c3c] hover:bg-black hover:text-white">
                    <form action="/mycard2/{{ $card3->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-app-layout>

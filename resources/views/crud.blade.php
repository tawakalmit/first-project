<x-app-layout>

    <x-slot name="title">
        My Card
    </x-slot>

    <x-slot name="header">
        My Card
    </x-slot>



    <form action="crud" method="post" class="w-10/12 md:w-3/12 mx-auto bg-[#2c3e50] mt-10 flex items-center flex-col rounded-xl bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 shadow-2xl">
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
        @if (session('status'))
        <div class="alert w-10/12 alert-success">
            <p class="text-center">{{ session('status') }}</p>
        </div>
        @endif
        <button type="submit" class="btn glass m-5">Submit</button>

    </form>

    
    
</x-app-layout>

<x-app-layout>

    <x-slot name="title">
        Crud
    </x-slot>

    <x-slot name="header">
        CRUD Page
    </x-slot>

    <form action="crud" method="post" class="w-10/12 md:w-3/12 mx-auto bg-[#2c3e50] mt-10 flex items-center flex-col rounded-xl">
        @csrf
        <div class="w-10/12 mx-auto p-3">
            <label for="headline" class="text-white">Headline</label>
            <input type="text" placeholder="Type here" id="headline" name="headline" class="input w-full" />
        </div>
        <div class="w-10/12 mx-auto p-3">
            <label for="description" class="text-white">Description</label>
            <input type="text" placeholder="Type here" id="description" name="description" class="input w-full" />
        </div>
        <button type="submit" class="btn glass m-5">Submit</button>

    </form>
    
</x-app-layout>

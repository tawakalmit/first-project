<div class="mb-20 md:mb-0">
    @foreach($mycard2 as $card2)
    <img src="/shutterstock_1896360157.png" alt="alt" class="rounded-t-xl w-72">
    <img src="/Group 3916.png" alt="alt" class="w-72">
    <img src="/Group 3832.svg" alt="alt" class="mx-auto -mt-[16.5rem] w-24">
    <p class="mt-5 w-64 text-sm text-center mx-auto">{{ $card2->description }}</p>
    <p class="text-center text-lg font-bold mt-5">{{ $card2->name }}</p>
    <p class="text-center text-md opacity-50 -mt-1">{{ $card2->job }}</p>
    @endforeach
  </div>
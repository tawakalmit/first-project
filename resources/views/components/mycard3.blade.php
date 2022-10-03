<div class="mb-20 md:mb-0">
    @foreach($mycard3 as $card3)
    <img src="/shutterstock_2107476044 (1).png" alt="alt" class="rounded-t-xl w-72">
    <img src="/Group 3915.png" alt="alt" class="w-72 -mt-1">
    <img src="/Group 3832.svg" alt="alt" class="mx-auto -mt-[16rem] w-24">
    <p class="mt-5 w-64 text-sm text-center mx-auto">{{ $card3->description }}</p>
    <p class="text-center text-lg font-bold mt-5">{{ $card3->name }}</p>
    <p class="text-center text-md opacity-50 -mt-1">{{ $card3->job }}</p>
    @endforeach
  </div>
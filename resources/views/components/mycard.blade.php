<div class="mb-20 md:mb-0">
    @foreach ($mycard as $card)
    <img src="/shutterstock_2140004723.png" alt="alt" class="rounded-t-xl w-72">
    <img src="/Group 3917.png" alt="alt" class="w-72">
    <img src="/Group 3832.svg" alt="alt" class="mx-auto -mt-[17rem] w-24">
    <p class="mt-5 w-64 text-sm text-center mx-auto">{{ $card->description }}</p>
    <p class="text-center text-lg font-bold mt-5">{{ $card->name }}</p>
    <p class="text-center text-md opacity-50 -mt-1">{{ $card->job }}</p>
    @endforeach
  </div>
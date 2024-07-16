<x-guest-layout>
    @section('hero')
        <div class="md:px-8 lg:px-12 xl:px-64 md:py-8 lg:py-12">
            <!--Large screens-->
            <!--1 box-->
            <div class="hidden md:block">
                <h2 class="text-xl font-normal mb-12">Avio ceļojumi</h2>

                @for ($i = 0; $i < 6; $i++)
                    <div class="mb-4">
                        <div class="border-2 border-yellow-200 p-4 relative md:grid grid-cols-3 gap-4">
                            <div class="col-span-1">
                                <img src="{{ asset('images/trips/germany.svg') }}">
                            </div>
                            <div class="col-span-2 flex flex-col justify-between">
                                <div class="flex flex-col gap-4">
                                    <h2 class="text-3xl font-bold">Parīze City Tour</h2>
                                    <h3 class="text-red-500 font-normal text-base">Pēdējā iespēja! Palikušas tikai 4 vietas.
                                    </h3>
                                    <h4 class="font-bold text-2xl">27.02 - 2.03.2024 <span class="font normal text-2xl">- 5
                                            dienas
                                        </span>
                                    </h4>
                                </div>

                                <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean ut
                                    hendrerit lacus. Sed dapibus nisi
                                    blandit, tincidunt nibh eget, faucibus ante. Etiam interdum vulputate nibh eget congue.
                                    Mauris
                                    ultrices
                                    interdum felis sed faucibus. Vestibulum dictum lorem libero, non egestas est laoreet
                                    eget.
                                    Integer
                                    fermentum maximus nunc in pellentesque. Nulla non sagittis ante, a interdum eros.
                                    Praesent nec
                                    erat
                                    in
                                    neque feugiat rhoncus vitae eget est. Aenean condimentum dolor eu viverra dapibus. Morbi
                                    tincidunt
                                    pretium metus, at feugiat quam congue quis. Interdum et malesuada fames ac ante ipsum
                                    primis in
                                    faucibus
                                </p>
                            </div>
                            <div class="flex flex-row lg:gap-4 items-center absolute top-0 right-2">
                                <img src="{{ asset('images/trips/avio.svg') }}">
                                <p class="font-bold text-3xl text-red-500">325€</p>
                            </div>
                        </div>
                    </div>
                @endfor
                <!--End Box 1-->

                <!--Btn-->
                <div class="flex justify-center items-center py-8">
                    <button class="text-lg font-medium border border-black bg-[#FFCF00] px-10 py-3 rounded-full">Skatīt
                        visu</button>
                </div>
            </div>

            <!--Mobile versions-->
            <div class="block md:hidden">
                <!--Title-->
                <div class="flex gap-2 items-center px-6">
                    <h2 class="text-base font-medium py-4">Avio ceļojumi</h2>
                    <img src="{{ asset('images/trips/avio.svg') }}" class="w-10">
                </div>

                <!--Filts-->
                <div class="px-6 py-2">
                    <h3 class="text-lg">FILTRS</h3>
                </div>

                <!--Boxes-->
                <div class="border-t border-yellow-200 pt-8">
                    <!--Box from 1 to 6-->
                    @for ($i = 0; $i < 6; $i++)
                        <div class="px-6 flex flex-col justify-center items-center gap-1 mb-4">
                            <!--Foto plus text-->
                            <div class="rounded-tr-lg">
                                <img src="{{ asset('images/trips/parise-small.svg') }}"
                                    class="rounded-tr-xl rounded-tl-xl w-80">
                                <div class="flex justify-between">
                                    <h2 class="text-base font-bold">Parīze City Tour</h2>
                                    <p class="text-base font-bold text-red-500">207€</p>
                                </div>
                                <p class="text-red-500 font-normal text-xs">Pēdējā iespēja! Palikušas tikai 4 vietas.</p>
                            </div>

                            <!--Paragraph-->
                            <div class="flex flex-col gap-1">
                                <h3 class="font-bold text-base">27.02 - 2.03.2024 <span class="font-normal text-base">- 5
                                        dienas</span></h3>
                                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Aenean ut hendrerit lacus.
                                    Sed dapibus nisi blandit, tincidunt nibh
                                    eget, faucibus ante. Etiam interdum
                                    vulputate nibh eget congue.</p>
                            </div>


                            <!--Btn-->
                            <div class="flex justify-center">
                                <a href="#"
                                    class="bg-[#FFCF00] rounded-full px-16 py-3 text-lg font-medium">Vairāk</a>
                            </div>

                        </div>
                    @endfor
                </div>
            </div>

        </div>
    @endsection
</x-guest-layout>

<x-guest-layout>
    @section('hero')
        <!--Large and medium screen-->
        <div class="hidden md:flex flex-col md:gap-8 md:px-8 lg:px-12 xl:px-64 md:py-8 lg:py-12">
            <h3 class="text-base md:text-2xl lg:text-4xl font-medium md:font-normal">Pēdējā Brīža Piedāvājumi</h3>
            <div class="md:grid grid-cols-3 gap-4">
                <!--Filts-->
                <div class="col-span-1">
                    <h3 class="text-4xl">FILTRS</h3>
                </div>
                <!--Boxes-->
                <div class="col-span-2">
                    <div class="flex flex-col gap-5">
                        <!--Box-->
                        @for ($i = 0; $i < 6; $i++)
                            <div
                                class="grid-cols-9 border border-yellow-200 shadow-lg shadow-yellow-100 py-4 px-3 grid gap-3">
                                <!--Foto-->
                                <div class="col-span-4 flex md:items-start lg:items-center">
                                    <img src="{{ asset('images/offers/egypt.svg') }}">
                                </div>
                                <!--Description-->
                                <div class="col-span-5 flex flex-col justify-between gap-4">
                                    <div>
                                        <h3 class="text-xl lg:text-3xl font-bold">Šarm el Šeiha</h3>
                                        <h4 class="text-base font-normal"><span class="uppercase">SHARIM IM AMAREIN
                                                4</span><span>&starf; </span>no <span
                                                class="text-red-500 font-bold">399€</span>
                                        </h4>
                                    </div>
                                    <div>
                                        <div class="flex gap-2">
                                            <img src="{{ asset('images/icons/galamerkis.svg') }}">
                                            <p class="text-base font-normal">Ēģipte</p>
                                        </div>
                                        <div class="flex gap-2"><img src="{{ asset('images/icons/clock.svg') }}">
                                            <p class="text-base font-normal">7 dienas</p>
                                        </div>
                                        <div class="flex gap-3"><img src="{{ asset('images/icons/people.svg') }}">
                                            <p class="text-base font-normal">2 Pieaugušie, 3 bērni</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.
                                            Aenean ut hendrerit lacus. Sed dapibus nisi blandit,
                                            tincidunt nibh eget, faucibus ante. Etiam interdum
                                            vulputate nibh eget congue.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Btn-->
                            <div class="flex justify-end pr-3">
                                <a href="#"
                                    class="bg-[#FFCF00] rounded-full px-16 py-2 text-lg font-medium">Vairāk</a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!--Mobile screens-->
        <div class="flex flex-col md:hidden">
            <h3 class="text-base font-medium px-6 py-3">Pēdējā Brīža Piedāvājumi</h3>
            <div class="">
                <!--Filts-->
                <div class="px-6 py-2">
                    <h3 class="text-lg">FILTRS</h3>
                </div>
                <!--Boxes-->
                <!--Box from 1 to 6-->
                @for ($i = 0; $i < 6; $i++)
                    <div class="border-t border-yellow-200">
                        <div class="flex flex-col gap-1 pt-6">
                            <div class="flex flex-col gap-3">
                                <!--Box-->
                                <div class="flex flex-col gap-2">
                                    <!--Foto-->
                                    <div class="relative px-2 py-2 rounded-tr-lg">
                                        <div class="relative z-0 pt-3 pl-3"><img
                                                src="{{ asset('images/destinations/egypt.svg') }}"
                                                class="rounded-tr-xl rounded-tl-xl"></div>
                                        <div class="absolute top-0 left-0 z-10"><img
                                                src="{{ asset('images/destinations/discount.svg') }}"></div>
                                    </div>
                                    <!--Description-->
                                    <div class="flex flex-col gap-2 px-6">
                                        <div>
                                            <h3 class="text-base font-bold">Šarm el Šeiha</h3>
                                            <h4 class="text-sm font-normal"><span class="uppercase">SHARIM IM AMAREIN
                                                    4</span><span>&starf; </span>no <span
                                                    class="text-red-500 font-bold">399€</span>
                                            </h4>
                                        </div>
                                        <div>
                                            <div class="flex">
                                                <img src="{{ asset('images/icons/galamerkis.svg') }}">
                                                <p class="text-base font-normal">Ēģipte</p>
                                            </div>
                                            <div class="flex gap-2"><img src="{{ asset('images/icons/clock.svg') }}">
                                                <p class="text-base font-normal">7 dienas</p>
                                            </div>
                                            <div class="flex gap-3"><img src="{{ asset('images/icons/people.svg') }}">
                                                <p class="text-base font-normal">2 Pieaugušie, 3 bērni</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-base font-normal">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
                                                elit.
                                                Aenean ut hendrerit lacus. Sed dapibus nisi blandit,
                                                tincidunt nibh eget, faucibus ante. Etiam interdum
                                                vulputate nibh eget congue.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Btn-->
                                <div class="flex justify-center">
                                    <a href="#"
                                        class="bg-[#FFCF00] rounded-full px-16 py-3 text-lg font-medium">Vairāk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>



        </div>
    @endsection
</x-guest-layout>

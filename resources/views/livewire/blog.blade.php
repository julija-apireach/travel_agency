<x-guest-layout>
    @section('hero')
        <div class="bg-gradient-to-b from-yellow-100 to-white px-6 md:px-8 lg:px-12 xl:px-64 py-2 md:py-8 lg:py-12 xl:py-20">
            <div class="flex flex-col md:grid grid-cols-3 md:gap-20">

                <!--Mobile version title-->
                <div class="flex flex-col gap-3 mb-4 md:hidden">
                    <div class="flex gap-3 text-slate-400 text-xs font-medium">
                        <a>Sākums</a>
                        <a>Blogs</a>
                    </div>
                    <div class="text-base font-medium">
                        <h2>Blogs</h2>
                    </div>
                </div>


                <!--Meklēt unn Jaunākās ziņas tikai Large screen-->
                <div class="hidden md:block md:col-span-1">
                    <!--Meklēt-->
                    <div class="flex gap-0 text-xl font-medium">
                        <input placeholder="Meklēt" class="border border-yellow-200 w-full bg-transparent">
                        <a href="#" class="flex items-center px-2 bg-[#FFCF00]"">
                            <img src="{{ asset('images/icons/search-large.svg') }}">
                        </a>
                    </div>
                    <!--Jaunkas zinas-->
                    <div class="md:pt-16 md:pb-3 text-xl font-medium">
                        <p>Jaunākās ziņas</p>
                    </div>
                    <!--Zinas box-->
                    @for ($i = 0; $i < 3; $i++)
                        <div class="border-t border-yellow-200 py-5 flex flex-col justify-start">
                            <div class="pr-6 flex flex-col gap-2">
                                <div>
                                    <img src="{{ asset('images/blog/nirvana-travel.svg') }}">
                                </div>
                                <h3 class="font-semibold text-base">Nirvana Travel</h3>
                                <p class="text-base font-medium">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Lorem
                                    ipsum dolor sit amet, consectetur
                                    adipiscing elit.</p>
                                <p class="text-base font-semibold">23.Janvāris 2024</p>
                            </div>
                        </div>
                    @endfor
                </div>

                <!--Blogs-->
                <div class="flex flex-col gap-4 md:hidden">
                    @for ($i = 0; $i < 4; $i++)
                        <div>
                            <img src="{{ asset('images/blog/nirvana-travel-large.svg') }}">
                        </div>
    
                        <div class="flex flex-col gap-4 md:gap-2">
                        <h3 class="text-xs md:text-xl font-medium">Nirvana Travel</h3>
                        <h2 class="text-base md:text-4xl font-medium ">Iepirkšanās Vācijā kļūst par populāru
                            ceļojumu galamērķi</h2>
                        </div>

                        <div class="flex flex-row items-center md:flex-col lg:flex-row md:items-start lg:justify-start lg:items-center gap-3 text-xs md:text-xl font normal md:font-medium">
                            <h4>Nirvana Travel Admin</h4>
                            <div class="w-2 h-2 rounded-full bg-[#FFCF00]"></div>
                            <h4>Atjaunots 29. Janvārī 2024</h4>
                        </div>

                        <div class="flex flex-col gap-2">
                        <p class="text-sm md:text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut
                            hendrerit lacus. Sed dapibus nisi blandit, tincidunt nibh eget, faucibus
                            ante. Etiam interdum vulputate nibh eget congue. Mauris ultrices
                            interdum felis sed faucibus. Vestibulum dictum lorem libero, non
                            egestas est laoreet eget. Integer fermentum maximus nunc in
                            pellentesqu [...]</p>

                        <a href="#" class="text-yellow-300 text-xl font-medium"">Lasīt vairāk...</a>
                        </div>
                    @endfor
                </div>


                <!--Two more boxes for mobile version-->
                <div class="col-span-2 flex flex-col gap-5">
                    @for($i=0; $i<2; $i++)
                        <div>
                            <img src="{{ asset('images/blog/nirvana-travel-large.svg') }}">
                        </div>
    
                        <div class="flex flex-col gap-2">
                        <h3 class="text-xs md:text-xl font-medium">Nirvana Travel</h3>
                        <h2 class="text-base md:text-4xl font-medium ">Iepirkšanās Vācijā kļūst par populāru
                            ceļojumu galamērķi</h2>
                        </div>

                        <div class="flex flex-row items-center md:flex-col lg:flex-row md:items-start lg:justify-start lg:items-center gap-3 text-xs md:text-xl font normal md:font-medium">
                            <h4>Nirvana Travel Admin</h4>
                            <div class="w-2 h-2 rounded-full bg-[#FFCF00]"></div>
                            <h4>Atjaunots 29. Janvārī 2024</h4>
                        </div>

                        <div class="flex flex-col gap-2">
                        <p class="text-sm md:text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut
                            hendrerit lacus. Sed dapibus nisi blandit, tincidunt nibh eget, faucibus
                            ante. Etiam interdum vulputate nibh eget congue. Mauris ultrices
                            interdum felis sed faucibus. Vestibulum dictum lorem libero, non
                            egestas est laoreet eget. Integer fermentum maximus nunc in
                            pellentesqu [...]</p>

                        <a href="#" class="text-yellow-300 text-xl font-medium"">Lasīt vairāk...</a>
                        @endfor
                        </div>
                </div>

            </div>
        </div>
        @endsection
</x-guest-layout>

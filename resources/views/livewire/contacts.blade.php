<x-guest-layout>
    @section('hero')
        <!--Sazinaties + Forma-->
        <div class="bg-gradient-to-b from-yellow-100 to-white pt-2 md:pt-10 md:pb-20">

            <div class="px-6 md:px-8 lg:px-12 xl:px-64">
                <h3 class="hidden md:block text-xl font-medium pt-6">Kontakti</h3>
                <!--Large Screens-->
                <div class="hidden md:block pt-10 pb-16">
                    <div class="grid grid-cols-2 gap-10">
                        <div>
                            <!--Title-->
                            <div>
                                <div class="flex justify-center items-center text-center font-medium text-3xl uppercase">
                                    <div class="relative">
                                        <div class="absolute left-0 z-0">
                                            <img src="{{ asset('images/aircraft.svg') }}">
                                        </div>
                                        <div class="relative z-10 pt-12">
                                            <h1 class="border-b border-yellow-400 px-2">CEĻO AR MUMS</h1>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center py-2 text-xl font-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            </div>

                            <form>
                                <div class="flex flex-col space-y-2 pb-2">
                                    <label for="name" class="font-bold text-base">Vārds</label>
                                    <input type="text" id="name" placeholder="Vārds..."
                                        class="w-full px-4 py-2 border bg-[#fffbeb] border-slate-200 rounded-sm">
                                </div>

                                <div class="flex flex-col space-y-2 pb-2">
                                    <label for="email" class="font-bold text-base">Epasts</label>
                                    <input type="email" id="email" placeholder="Epasts..."
                                        class="w-full px-4 py-2 border bg-[#fffbeb] border-slate-200 rounded-sm">
                                </div>

                                <div class="flex flex-col space-y-2 pb-2">
                                    <label for="message" class="font-bold text-base">Ziņa</label>
                                    <textarea id="message" placeholder="Rakstiet ziņu mums....."
                                        class="w-full h-32 px-4 py-2 border bg-[#fffbeb] border-slate-200 rounded-sm"></textarea>
                                </div>

                                <button type="submit"
                                    class="bg-[#FFCF00] rounded-lg w-full py-1 mt-5 font-semibold text-base  hover:bg-black hover:text-white"">SŪTĪT
                                    ZIŅU</button>
                            </form>
                        </div>

                        <dl class="flex flex-col justify-between py-20">
                            <dt class="flex gap-2 justify-start items-center text-[#FFCF00] font-bold text-base lg:text-xl">
                                <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                                <h3>Sazinaties</h3>
                            </dt>
                            <dd class="text-xl">Sazinieties ar mums 24/7. Mēs Jums izveidosim
                                Jums visērtako ceļojumu paketi</dd>
                            <dd class="text-xl">
                                <p>Tālrunis: +37129702870</p>
                                <p>Epasts: info@digitalweb.lv</p>
                                <p>Adrese: Ogre, Tinūžu iela 10</p>
                            </dd>
                        </dl>

                    </div>
                </div>

                <!--Mobile version-->
                <div class="md:hidden">
                    <div>
                        <!--Title1-->
                        <div class="mb-2 relative">
                            <div>
                                <h3 class="block md:hidden text-base font-medium absolute">Kontakti</h3>
                            </div>

                            <div class="relative flex justify-center items-center text-center font-medium text-base">
                                <!--Celo ar mums-->
                                <div class="relative">
                                    <div class="absolute left-0 z-0">
                                        <img src="{{ asset('images/aircraft.svg') }}">
                                    </div>
                                    <div class="relative z-10 pt-12">
                                        <h1 class="border-b border-yellow-400 px-2 uppercase ">Ceļo ar mums</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Title2-->
                        <div class="mb-2">
                            <p class="text-center text-sm font-normal">Laiks ir dārgākā vērtība. </br>
                                Dāvini to sev un saviem mīļajiem!</p>
                        </div>

                        <div class="text-sm font-normal flex flex-col gap-3 pt-4">
                            <div class="leading-5 text-center">Sazinieties ar mums 24/7. Mēs Jums izveidosim
                                Jums visērtako ceļojumu paketi</div>
                            <div class="flex flex-col gap-3 mt-6">
                                <p>Tālrunis: +37129702870</p>
                                <p>Epasts: info@digitalweb.lv</p>
                                <p>Adrese: Ogre, Tinūžu iela 10</p>
                            </div>
                        </div>
                    </div>
                    <!--Forma-->
                    <form class="w-full flex flex-col gap-4 mt-8">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Vārds</label>
                            <input type="text" placeholder="Vārds..."
                                class="w-full flex px-4 py-1 border border-yellow-300">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Epasts</label>
                            <input type="email" placeholder="Epasts..."
                                class="w-full flex px-4 py-1 border border-yellow-300">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold">Ziņa</label>
                            <textarea placeholder="Ziņa..." class="w-full h-24 flex px-4 py-1 border border-yellow-300"></textarea>
                        </div>
                        <button type="submit"
                            class="mt-4 text-base font-medium bg-[#FFCF00] px-2 py-2 rounded-full mx-10  hover:bg-black hover:text-white">Sūtīt</button>
                    </form>

                    <form class="w-full flex flex-col gap-4 mt-8">
                        <label class="font-bold text-base text-center">Piesakies jaunumiem:</label>
                        <input type="email" placeholder="Epasts..."
                        class="w-full flex px-4 py-1 border border-yellow-300">
                        <button type="submit"
                        class="mt-4 text-base font-medium bg-[#FFCF00] px-2 py-2 rounded-full mx-10  hover:bg-black hover:text-white">Pierakstīties</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
</x-guest-layout>

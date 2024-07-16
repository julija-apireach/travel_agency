<div class="pt-8">

    <!--Kāpēc izvēlēties mūs-->
    <div class="px-6 md:px-8 lg:px-12 xl:px-64">
        <div class="my-10 grid grid-cols-1 md:grid-cols-5 gap-8 md:h-[510px]">
            <div class="md:col-span-2">
                <img class="rounded-[50px] md:h-full w-full" src="{{ asset('images/mountains.png') }}">
            </div>
            <div class="md:col-span-3 flex flex-col justify-between gap-6">
                <div class="flex gap-2 justify-start items-center text-[#FFCF00] font-bold text-base lg:text-xl">
                    <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                    <h3>Kapēc izvēlēties mūs</h3>
                </div>
                <h4 class="text-base lg:text-xl xl:text-3xl font-normal leading-5 md:leading-10">Nirvana Travel ir
                    ceļojumu
                    aģentūra ar
                    Nirvana Travel vēlas būt vienlaikus gan silts
                    plecs, kur patverties pēc gara darba cēliena,
                    gan arī profesionāls ceļvedis jaunu galamērķu izzināšanā.
                </h4>
                <p class="text-sm lg:text-base">Ceļojums ir viena no retajām lietām, ko iegādājoties, jūs kļūstat
                    bagātāki.
                    Mūsu uzdevums ir iedvesmot Jūs atrast laiku atpūtai, atļauties piedzīvot
                    mirkļus, emocijas un sajūtas. Nekad nezinām, kurš ceļojums var atvērt
                    durvis jauniem apvāršņiem.</p>
                <p class="text-sm lg:text-base">Filigrāni manevrējam starp vienkāršību un nevainojamu precizitāti, starp
                    stingrību un vieglumu, starp diplomātiju un sirsnīgām sarunām, starp prasmi dot un prasmi saņemt.
                </p>
                <div class="relative">
                    <div class="absolute bottom-0 z-0"><img src="{{ asset('images/aircraft.svg') }}"></div>
                    <div class="pb-12 relative z-10">
                        <p class="text-sm lg:text-base">“Ceļot nozīmē dzīvot.” / H.K.Andersens</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Jaunakie raksti-->
        <div class="md:py-6">
            <!--Title-->
            <div
                class="flex gap-2 justify-start md:justify-center items-center text-[#FFCF00] font-bold text-base lg:text-xl my-6 md:mt-12 md:mb-3">
                <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                <h3>Jaunākie raksti</h3>
                <img class="hidden md:block" src="{{ asset('images/icons/horizontal-line.svg') }}">
            </div>

            <!--paragraph-->
            <p class="flex justify-center text-base md:text-xl font normal text-center md:mb-8">"Ceļošana ir liktenīga
                aizspriedumiem,
                fanātismam un šaurām domām." / Marks Tvens</p>

            <!--Images album-->
            <div class="flex flex-col md:grid md:grid-cols-5 gap-4 py-4">
                <div class="col-span-3">
                    <img class="rounded-[50px] w-full h-[140px] xxs:h-[200px] md:w-full md:h-full"
                        src="{{ asset('images/destinations/egypt.png') }}">
                </div>
                <div class="flex flex-col md:grid md:col-span-2 md:grid-rows-2 gap-4 md:gap-1">
                    <img class="rounded-[50px] w-full h-[140px] xxs:h-[200px] md:w-full md:h-full "
                        src="{{ asset('images/destinations/greece.png') }}">
                    <img class="rounded-[50px] w-full h-[140px] xxs:h-[200px] md:w-full md:h-full"
                        src="{{ asset('images/destinations/tenerife.png') }}">
                </div>
            </div>

            <!--Button-->
            <div class="flex justify-center mt-2 mb-8 md:mb-0 md:mt-6">
                <a href="#"
                    class="font-bold text-base md:text-xl border border-yellow-400 rounded-full px-12 py-3 md:px-6 md:py-5">Skatīt
                    visus <span class="hidden md:inline">rakstus</span></a>
            </div>
        </div>
    </div>

    <!--Sazinaties + Forma-->
    <div class="bg-gradient-to-b from-white via-yellow-50 to-white">
        <div class="px-6 md:px-8 lg:px-12 xl:px-64">
            <!--Large Screens-->
            <div class="hidden md:block py-16">
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
                            <p class="text-center py-2 text-xl font-medium">Laiks ir dārgākā vērtība. </br>
                                Dāvini to sev un saviem mīļajiem!</p>
                        </div>

                        <form>
                            <div class="flex flex-col space-y-2 pb-2">
                                <label for="name" class="font-bold text-base">Vārds</label>
                                <input type="text" id="name" placeholder="Vārds..."
                                    class="w-full px-4 py-2 border  border-slate-300 rounded-sm">
                            </div>

                            <div class="flex flex-col space-y-2 pb-2">
                                <label for="email" class="font-bold text-base">Epasts</label>
                                <input type="email" id="email" placeholder="Epasts..."
                                    class="w-full px-4 py-2 border  border-slate-300 rounded-sm">
                            </div>

                            <div class="flex flex-col space-y-2 pb-2">
                                <label for="message" class="font-bold text-base">Ziņa</label>
                                <textarea id="message" placeholder="Rakstiet ziņu mums....."
                                    class="w-full h-32 px-4 py-2 border border-slate-300 rounded-sm"></textarea>
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
                        <dd>Sazinieties ar mums 24/7. Mēs Jums izveidosim
                            Jums visērtako ceļojumu paketi</dd>
                        <dd>
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
                    <div class="mb-4">
                        <!--Eksotiskie galamerki + sazinaties-->
                        <div class="relative flex justify-center items-center text-center font-medium text-base">
                            <!--Sazinaties-->
                            <div
                                class="absolute top-0 left-0 pt-2 flex gap-2 justify-start items-center text-[#FFCF00] font-bold text-base">
                                <img src="{{ asset('images/icons/horizontal-line.svg') }}">
                                <h3>Sazinaties</h3>
                            </div>
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
                        <div class="leading-5">Sazinieties ar mums 24/7. Mēs Jums izveidosim
                            Jums visērtako ceļojumu paketi</div>
                        <div class="flex flex-col gap-3">
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
                            class="w-full flex px-4 py-1 border border-yellow-400">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Epasts</label>
                        <input type="email" placeholder="Epasts..."
                            class="w-full flex px-4 py-1 border border-yellow-400">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Ziņa</label>
                        <textarea placeholder="Ziņa..." class="w-full h-24 flex px-4 py-1 border border-yellow-400"></textarea>
                    </div>
                    <button type="submit"
                        class="mt-4 text-base font-medium bg-[#FFCF00] px-2 py-1 rounded-full mx-10  hover:bg-black hover:text-white"">Sūtīt</button>
                </form>
            </div>
        </div>
    </div>

    <!--Piesakies jaunumiem Forma-->
    <div class="px-6 md:px-8 lg:px-12 xl:px-64">
        <!--Large Screen-->
        <div class="hidden md:flex flex-row items-center justify-center gap-20 my-20 ">
            <h3 class="text-lg font-semibold">Piesakies jaunumiem:</h3>
            <form class="flex">
                <input type="email" placeholder="Epasts..."
                    class="flex w-72 px-4 py-2 border border-black rounded-l-lg">
                <button type="submit"
                    class="text-base font-semibold bg-black text-white px-5 py-2 rounded-r-lg">Pierakstīties</button>
            </form>
        </div>

        <!--Mobile version-->
        <div class="md:hidden flex flex-col gap-3 items-center justify-center my-6">
            <h3 class="text-xl font-bold">Piesakies jaunumiem:</h3>
            <form class="w-full flex flex-col gap-8">
                <input type="email" placeholder="Epasts..." class="flex px-4 py-1 border border-yellow-400">
                <button type="submit"
                    class="text-base font-medium md:font-semibold bg-[#FFCF00] px-2 py-1 rounded-full mx-10  hover:bg-black hover:text-white">Pierakstīties</button>
            </form>
        </div>
    </div>
</div>
</div>

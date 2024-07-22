<div class="pt-6 md:pt-12 pb-8 px-2 sm:px-6 md:px-8 lg:px-12 xl:px-64">

    <!--Hero text-->
    <div
        class="flex justify-center items-center text-center font-normal text-lg md:text-3xl lg:text-3xl xl:text-4xl uppercase leading-10">
        <div class="relative">
            <img class="absolute left-0 bottom-0 z-0" src="{{ asset('images/aircraft.svg') }}">
            <h1 class="relative z-10">VIENĪGAIS CEĻOJUMS, KURU JŪS NOŽĒLOSIET, </br>
                BŪS TAS, KURĀ NEDOSIETIES!</h1>
        </div>
    </div>

    <!--Hero Link with pop-up container-->
    <div class="relative">
        <!--Btn-->
        <div class="flex justify-center pt-4 pb-8 md:pt-8 md:pb-8">
            <button onclick="togglePopup()"
                class="gap-1 border-none md:border rounded-full border-black bg-[#FFCF00] py-3 px-6 md:py-4 md:px-6 lg:py-5 lg:px-8 text-lg md:text-2xl font-medium leading-7 hover:bg-black hover:text-white">Izplāno
                ceļojumu <span>&rarr;</span></button>
        </div>

        <!--Pop up box-->
        <div id="popup" class="hidden absolute z-20 top-0 right-40 w-96 p-3 bg-transperant">

            <!--Close-->
            <div class="relative">
                <div class="absolute top-2 right-4">
                    <button onclick="closePopup()" class="text-gray-800">&times;</button>
                </div>
            </div>

            <!--Inputs-->
            <div class="p-5 bg-slate-50 shadow-2xl shadow-yellow-500 rounded-md flex flex-col gap-2">

                <div class="flex flex-col gap-0">
                    <label class="pl-2 text-xs">Izlidošana</label>
                    <div class="relative flex items-center">
                        <input
                            class="relative rounded-lg border-none w-full bg-white px-2 py-3 text-base font-normal placeholder-black"
                            placeholder="Rīga">
                        <img src="{{ asset('images/plan-trip/departure.png') }}" class="absolute right-2">
                    </div>
                </div>

                <div class="flex flex-col gap-0">
                    <label class="pl-2 text-xs">Uz</label>
                    <div class="relative flex items-center">
                        <input
                            class="relative rounded-lg border-none w-full bg-white px-2 py-3 text-base font-normal placeholder-black"
                            placeholder="Turcija">
                        <img src="{{ asset('images/plan-trip/arrival.png') }}" class="absolute right-2">
                    </div>
                </div>

                <div class="flex flex-col gap-0">
                    <label class="pl-2 text-xs">Reģions</label>
                    <div class="relative flex items-center">
                        <input
                            class="relative rounded-lg border-none w-full bg-white px-2 py-3 text-base font-normal placeholder-black"
                            placeholder="Visi reģioni">
                        <img src="{{ asset('images/plan-trip/location.png') }}" class="absolute right-2">
                    </div>
                </div>

                <div class="flex flex-col gap-0">
                    <label class="pl-2 text-xs">Izlidošana</label>
                    <div class="relative flex items-center">
                        <input
                            class="relative rounded-lg border-none w-full bg-white px-2 py-3 text-base font-normal placeholder-black"
                            placeholder="...">
                        <img src="{{ asset('images/plan-trip/calendar.png') }}" class="absolute right-2">
                    </div>
                </div>


                <div class="flex gap-3">
                    <div class="flex flex-col gap-0">
                        <label class="pl-2 text-xs">Naktis</label>
                        <div class="relative flex items-center">
                            <input
                                class="relative rounded-lg border-none w-full bg-white px-2 py-3 text-base font-normal placeholder-black"
                                placeholder="...">
                            <img src="{{ asset('images/plan-trip/night.png') }}" class="absolute right-2">
                        </div>
                    </div>

                    <div class="flex flex-col gap-0">
                        <label class="pl-2 text-xs">Tūristi</label>
                        <div class="relative flex items-center">
                            <input
                                class="relative rounded-lg border-none w-full bg-white px-2 py-3 text-base font-normal placeholder-black"
                                placeholder="...">
                            <img src="{{ asset('images/plan-trip/emoji.png') }}" class="absolute right-2">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!--Hero logo-->
    <img src="{{ asset('images/hero.png') }}"class="rounded-full">

    <!--Future karuselis-->
    <div class="flex justify-center gap-1 pt-1 sm:pt-3">
        <div class="bg-[#FFCF00] h-2 w-2 xs:h-3 xs:w-3 md:h-5 md:w-5 rounded-full"></div>
        <div class="bg-[#FFCF00] h-2 w-2 xs:h-3 xs:w-3 md:h-5 md:w-5 rounded-full"></div>
        <div class="bg-[#FFCF00] h-2 w-2 xs:h-3 xs:w-3 md:h-5 md:w-5 rounded-full"></div>
    </div>


    <!--Pop-up trip planning-->
    <script>
        function togglePopup() {
            let dropdown = document.getElementById('popup');
            dropdown.classList.toggle('hidden');
        }

        function closePopup() {
            let dropdown = document.getElementById('popup');
            dropdown.classList.add('hidden');
        }
    </script>

</div>

<div>
    <!--Large and medium screens-->
    <div class="hidden pb-4 md:block md:px-2 lg:block lg:px-12 xl:block xl:px-64">
        <div class="flex justify-between border rounded-full lg:gap-2 items-center px-3">

            <!--Options-->
            <div class="py-4 px-5 xl:px-18 2xl:px-24 flex flex-grow justify-between gap-2 text-[#9FA4B1] text-base font-light">

                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/icons/galamerkis.svg') }}">
                    <select class="border-0">
                        <option disabled selected class="hidden">Galamērķis</option>
                        <option>-</option>
                    </select>
                </div>

                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/icons/clock.svg') }}">
                    <select class="border-0">
                        <option disabled selected class="hidden">0 dienas - 11 dienas</option>
                        <option>-</option>
                    </select>
                </div>

                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/icons/euro.svg') }}">
                    <select class="border-0">
                        <option disabled selected class="hidden">€ 32 - € 2500</option>
                        <option>-</option>
                    </select>
                </div>

                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/icons/calendar.svg') }}">
                    <select class="border-0">
                        <option disabled selected class="hidden">Datums</option>
                        <option>-</option>
                    </select>
                </div>

            </div>

            <!--Button-->
            <div>
                <button type="sumbit"
                    class="bg-[#FFCF00] border border-black rounded-full md:px-3 lg:px-5 py-1 font-medium md:text-sm lg:text-base  hover:bg-black hover:text-white"">Meklēt</button>
            </div>

        </div>
    </div>

    <!--Mobile versions of search-->
    <div class="px-6 mb-4 text-sm lg:hidden md:hidden">

        <div class="border border-yellow-100 shadow-lg shadow-yellow-200 pt-4 pb-3 px-5 flex flex-col gap-5">

            <div class="flex gap-4">
                <img src="{{ asset('images/icons/galamerkis.svg') }}">
                Galamērķis
            </div>
            <div class="flex gap-4">
                <img src="{{ asset('images/icons/clock.svg') }}">
                0 dienas - 11 dienas
            </div>
            <div class="flex gap-4">
                <img src="{{ asset('images/icons/euro.svg') }}">
                € 32 - € 2500
            </div>
            <div class="flex gap-4">
                <img src="{{ asset('images/icons/calendar.svg') }}">
                Datums
            </div>
            <button type="submit" class="rounded-full py-1 bg-[#FFCF00] mx-8 text-base">Meklēt</button>

        </div>

    </div>

</div>

<!--Filts-->
<div>
    <!--Titles-->
    <div class="border border-yellow-200 px-2 py-2 flex justify-between">
        <h3 class="text-xl font-medium">Filtri</h3>
        <h3 class="text-base font-medium text-[#FF0303]">Izdzēst</h3>
    </div>

    <div class="border border-yellow-200 px-2 py-2 flex flex-col gap-4 ">

        <!--checkboxes-->
        <div class=" flex flex-col">
            <h3 class="text-base font-medium pb-4">Galamērķis</h3>
            <form class="flex flex-col gap-3">
                <label class="flex gap-2 items-start cursor-pointer">
                    <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                    <span class="text-sm font-medium">Nepāla</span>
                </label>
                <div class="pl-4 flex flex-col gap-2">
                    <label class="flex gap-2 items-start cursor-pointer">
                        <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                        <span class="text-sm font-medium">Annapurna</span>
                    </label>
                    <label class="flex gap-2 items-start cursor-pointer">
                        <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                        <span class="text-sm font-medium">Upper Mustang</span>
                    </label>
                </div>
                <label class="flex gap-2 items-start cursor-pointer">
                    <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                    <span class="text-sm font-medium">Butāna</span>
                </label>
                <label class="flex gap-2 items-start cursor-pointer">
                    <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                    <span class="text-sm font-medium">Šrilanka</span>
                </label>
                <div class="pl-4 flex flex-col gap-2">
                    <label class="flex gap-2 items-start cursor-pointer">
                        <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                        <span class="text-sm font-medium">Kolombo</span>
                    </label>
                </div>
                <label class="flex gap-2 items-start cursor-pointer">
                    <input type="checkbox" id="city-checkbox" class="form-checkbox border-slate-200 h-4 w-4">
                    <span class="text-sm font-medium">Francija</span>
                </label>
            </form>
            <div class="pt-3 text-sm font-medium">
                <a href="#">Rādīt vēl...</a>
            </div>
        </div>
        <!--End checkboxes-->



        <!--range filtr-->
        <div class="flex flex-col gap-4">

            <div class="flex flex-col gap-4">
                <label class="text-base font-medium">Cena</label>
                <div class="flex flex-col gap-2 relative">
                    <div>
                        <input type="range" id="range-min" min="30" max="3000" value="30"
                            class="range-slider z-10">
                        <input type="range" id="range-max" min="30" max="3000" value="3000"
                            class="range-slider z-20">
                    </div>

                    <div class="flex items-center justify-between">
                        <span id="min-price" class="text-sm font-medium">€30</span>
                        <span id="max-price" class="text-sm font-medium">€3000</span>
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-4">
                <label class="text-base font-medium">Ceļojuma ilgums</label>
                <div class="flex flex-col gap-2 relative">
                    <div>
                        <input type="range" id="range-min" min="0" max="11" value="0"
                            class="range-slider z-10">
                        <input type="range" id="range-max" min="0" max="11" value="11"
                            class="range-slider z-20">
                    </div>

                    <div class="flex items-center justify-between">
                        <span id="min-duration" class="text-sm font-medium">0 dienas</span>
                        <span id="max-duration" class="text-sm font-medium">11 dienas</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end range filtr-->


        <!-- Counters -->
        <div class="flex flex-col gap-3">
            <h3 class="text-base font-medium">Cilvēku skaits</h3>
            <!--adults-->
            <div class="flex gap-11">
                <label class="span-cols-1 text-sm font-medium">Pieaugušie</label>
                <div
                    class="span-cols-3 flex border border-yellow-300  shadow-sm shadow-yellow-300 items-center text-sm font-medium">
                    <button wire:click="decrementAdult" class="bg-slate-200 px-3 ">-</button>
                    <h4 class="bg-white  w-12 text-center">{{ $adultCount }}</h4>
                    <button wire:click="incrementAdult" class="bg-slate-200 px-3 ">+</button>
                </div>
            </div>
            <!--children-->
            <div class="flex gap-20">
                <label class="text-sm font-medium">Bērni</label>
                <div>
                    <div
                        class="flex border border-yellow-300 shadow-sm shadow-yellow-300 items-center text-sm font-medium">
                        <button wire:click="decrementChild" class="bg-slate-200 px-3 ">-</button>
                        <h4 class="bg-white w-12 text-center">{{ $childCount }}</h4>
                        <button wire:click="incrementChild" class="bg-slate-200 px-3 ">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Reitings-->
        <div class="flex flex-col gap-3">
            <label class="text-base font-medium">Reitings</label>

            <div class="relative" x-data="{ open: @entangle('isOpen') }">
                <button @click="open = !open"
                    class="relative flex items-center justify-between w-36 pl-2 bg-white border border-yellow-200 shadow-sm shadow-yellow-300">
                    <span>{{ $selectedReiting }}</span>
                    <div class="h-6 w-6 bg-slate-200 flex items-center justify-center">
                        <img src="{{ asset('images/icons/arrow-down-large.svg') }}">
                    </div>
                </button>

                <div x-show="open" @click.away="open = false"
                    class="absolute w-36 mt-1 bg-white border border-gray-200 z-20">
                    <ul>
                        <li><a href="#" wire:click="selectReiting('3&#9733; un vairāk')"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-100">3&#9733; un vairāk</a></li>
                        <li><a href="#" wire:click="selectReiting('4&#9733; un vairāk')"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-100">4&#9733; un vairāk</a></li>
                        <li><a href="#" wire:click="selectReiting('5&#9733;')"
                                class="block px-4 py-2 text-gray-800 hover:bg-gray-100">5&#9733;</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sākuma datums - how to open calendar?-->
        <div class="flex flex-col gap-3">
            <label class="text-base font-medium">Sākuma datums</label>

            <div class="relative z-10">
                <button class="relative flex items-center justify-center w-36 bg-white border border-yellow-200 shadow-sm shadow-yellow-300">
                    <div class="h-6 w-6 flex items-center justify-center">
                        <img src="{{ asset('images/icons/arrow-down-large.svg') }}">
                    </div>
                </button>
            </div>
        </div>


    </div>
</div>

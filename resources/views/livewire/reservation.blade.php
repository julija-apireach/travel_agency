<x-guest-layout>
    @section('hero')
        <div class="px-6 md:px-8 lg:px-12 xl:px-64 pt-6 md:py-8 md:mb-8 lg:mb-16 xl:mb-32">
            <h3 class="text-base md:text-xl font-medium mb-4 md:mb-10">Mans konts</h3>

            <div class="flex flex-col md:gap-3">
                <!--table with btn-->
                <div class="flex flex-col gap-1 md:gap-5">
                    <h4 class="text-sm md:text-xl font-bold md:font-medium">Mana rezervācija</h4>
                    <table class="w-full">
                        <tr
                            class="uppercase text-sm md:text-xl font-medium text-slate-500 leading-6 bg-[#ffec9c] border-b border-yellow-100 h-12 md:h-16">
                            <td class="w-2/3 px-2">Galamērķis</td>
                            <td class="w-1/10 md:w-1/12 px-4 text-center">Laiks</td>
                            <td class="w-1/10 md:w-1/12 px-2 md:px-0 text-center">Cena</td>
                        </tr>
                        <tr class="text-sm md:text-xl bg-[#ffec9c] h-12 md:h-16">
                            <td class="font-medium px-2 md:px-10">Turcija</td>
                            <td class="font-medium  text-center">13.09.2023</td>
                            <td class="font-extrabold px-2 md:px-0 text-center">506€</td>
                        </tr>
                    </table>

                    <!--Btn for large screens-->
                    <div class="hidden md:flex items-center justify-end">
                        <x-button
                            class="md:border border-black  rounded-full bg-[#FFCF00] px-10 py-1 font-medium text-lg">
                            {{ __('Maksāt') }}
                        </x-button>
                    </div>

                    <!--Btn for mobile version-->
                    <div class="my-2 md:hidden">
                        <x-button
                            class="md:border border-black  rounded-full bg-[#FFCF00] w-full py-2 font-medium text-md">
                            {{ __('Maksāt') }}
                        </x-button>
                    </div>
                </div>

                <!--email-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4>Epasts </h4>
                    <table class="w-full bg-[#ffeea6]">
                        <tr>
                            <td class="flex justify-between items-center px-2 md:px-10 py-4">
                                <p>info@digitalweb.lv</p>
                                <a href="#">Mainīt epastu</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <!--Parole-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4>Parole </h4>
                    <table class="w-full bg-[#ffefad]">
                        <tr>
                            <td class="flex justify-between items-center px-2 md:px-10 py-4">
                                <div class="flex gap-1 md:gap-4 items-center">
                                    <p>*******************</p>
                                    <img src="{{ asset('images/icons/eye.svg') }}" class="w-6 h-5">
                                </div>
                                <a href="#">Mainīt paroli</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <!--payment method-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4> Pievietotais maksājuma veids</h4>
                    <table class="w-full bg-[#fff1b3]">
                        <tr>
                            <td class="flex justify-between items-center md:pr-10 py-4">
                                <div class="relative flex items-center">
                                    <img src="{{ asset('images/icons/visa-forprofile.svg') }}" class="absolute md:left-5">
                                    <p class="pl-24 md:pl-32">....0854</p>
                                </div>
                                <a href="#">Mainīt maksājuma veidu</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <!--Mana adrese-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4>Mana adrese </h4>
                    <table class="w-full bg-[#fff2b8]">
                        <tr>
                            <td class="flex justify-between items-center px-2 md:px-10 py-4">
                                <p>Tīnūžu iela 10-29, Ogre, LV-5001</p>
                                <a href="#">Mainīt adresi</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <!--telefons-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4>Mans tālrunis </h4>
                    <table class="w-full bg-[#fff3bf]">
                        <tr>
                            <td class="flex justify-between items-center px-2 md:px-10 py-4">
                                <p>+37129702870</p>
                                <a href="#">Mainīt tālruņa numuru</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <!--affiliate-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4>Pelni ar affiliate programmu </h4>
                    <table class="md:w-full bg-[#fff3bf]">
                        <tr>
                            <td class="px-2 md:px-10 py-4">
                                <p>Padalies ar draugiem par saviem ceļojumu iespaidiem ar savu unikālo saiti (sk.zemāk). Par katru drauga 
                                    iegādātu ceļojumu pie mums, tu saņemsi 5% komisijas maksu savā maciņā!</p>
                            </td>
                        </tr>
                    </table>
                </div>

                <!--link-->
                <div class="flex flex-col md:gap-3 mb-5 text-sm font-semibold md:text-xl md:font-normal">
                    <h4>Tava unikālā saite:</h4>
                    <table class="md:w-full bg-[#fff3bf]">
                        <tr>
                            <td class="px-2 md:px-10 py-4">
                                <a href="#"></a>
                            </td>
                        </tr>
                    </table>
                </div>

                

            </div>
        </div>
    @endsection
</x-guest-layout>

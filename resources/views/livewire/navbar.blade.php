<div>
    <!--Logo-->
    <div class="flex justify-center px-20 md:p-0">
        <img src="{{ asset('images/logo.svg') }}">
    </div>

    <!--Navigation-->
    <div
        class="hidden md:flex md:px-8 lg:flex lg:px-12 xl:flex xl:px-64 py-2 justify-between bg-[#FFCF00] items-center text-lg font-medium leading-5">
        <a href="/">Sākums</a>

        <!--Celojumi dropdown ar JS-->
        <div class="relative">
            <button class="flex gap-2 items-center focus:outline-none" onclick="toggleDropdown()">Ceļojumi <img
                    src="{{ asset('images/icons/small-arrow-down.svg') }}"></button>

            <div id="dropdown" class="hidden absolute z-20 bg-white shadow-lg mt-2 pb-6 w-72">
                <div class="absolute right-4 top-2 flex justify-end">
                    <button onclick="closeDropdown()" class="text-gray-800">&times;</button>
                </div>
                <div class="pt-6">
                <a href="{{ route('kruizi') }}" class="block px-4 py-2 hover:bg-gray-200">Kruīzi</a>
                <a href="{{ route('exotic') }}" class="block px-4 py-2 hover:bg-gray-200">Eksotiskie ceļojumi</a>
                <a href="{{ route('relax') }}" class="block px-4 py-2 hover:bg-gray-200">Atpūtas braucieni</a>
                <a href="{{ route('ski') }}" class="block px-4 py-2 hover:bg-gray-200">Slēpošana</a>
                <a href="{{ route('excurtion') }}" class="block px-4 py-2 hover:bg-gray-200">Ekskursiju ceļojumi</a>
                <a href="{{ route('avio') }}" class="block px-4 py-2 hover:bg-gray-200">Avio ceļojumi</a>
            </div>
            </div>
        </div>

        <a href="/blog">Blogs</a>
        <a href="/atsauksmes">Atsauksmes</a>
        <a href="/kontakti">Kontakti</a>
        <a href="/mes-iesakam">Mēs iesakam</a>
        <a href="/mana-rezervacija" class="hover:border border-black px-3 py-3 rounded-full">Mana rezervācija</a>
    </div>

    <!--Mobile Navigation-->
    <div class="flex justify-between px-6 py-2 xxs:px-5 gap-6 xs:gap-20 bg-[#FECE00] md:hidden lg:hidden">
        <div class="flex flex-grow relative items-center">
            <input class="flex flex-grow relative bg-[#fee266] py-0.5 border-0" placeholder="Meklēt...">
            <a href="#" class="flex items-center absolute right-2"><img
                    src="{{ asset('images/icons/search.svg') }}"></a>
        </div>
        <a href="#"><img src="{{ asset('images/icons/hamburger.svg') }}"></a>
    </div>

    <script>
        function toggleDropdown() {
            let dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }

        function closeDropdown() {
            let dropdown = document.getElementById('dropdown');
            dropdown.classList.add('hidden');
        }
    </script>

</div>

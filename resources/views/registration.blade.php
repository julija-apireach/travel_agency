<x-guest-layout>
    @section('hero')
        <div class="px-6 md:px-8 lg:px-12 xl:px-64 pt-6 pb-4 md:py-8 md:mb-16">
            <h3 class="text-base md:text-xl font-medium mb-4 md:mb-10">Reģistrēties</h3>
            <div class="md:border border-yellow-200 md:px-20 md:py-4 ">
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('registration.post') }}" class="flex flex-col gap-4 md:gap-5">
                    @csrf
                    <!--Vards un uzvards-->
                    <div class="flex flex-col gap-4 md:grid grid-cols-2 md:gap-5">
                        <div>
                            <x-label for="name" value="{{ __('Vārds *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                            <x-input id="name"
                                class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-normal md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent"
                                type="text" name="name" :value="old('name')" placeholder="Vārds *" required autofocus autocomplete="name" />
                        </div>

                        <div>
                            <x-label for="surname" value="{{ __('Uzvārds *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                            <x-input id="surname"
                                class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent"
                                type="text" name="surname" :value="old('surname')" placeholder="Uzvārds *" required autofocus
                                autocomplete="family-name" />
                        </div>
                    </div>

                    <!--dzimšanas datums-->
                    <!--need to add this comment required dd-mm-yyyy-->
                    <div>
                        <x-label for="birthdate" value="{{ __('Dzimšanas datums *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0"  />
                        <div class="relative">
                            <div class="relative z-0 "><x-input id="birthdate"
                                    class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent" 
                                    type="text" name="birthdate" :value="old('birthdate')" placeholder="Dzimšanas datums *" required autofocus
                                    autocomplete="bday" /></div>
                            <div class=" absolute right-0 top-0 z-10"><img
                                    src="{{ asset('images/icons/calendar-large.svg') }}" class="h-10 w-10"></div>

                        </div>
                    </div>

                    <!--email-->
                    <div class="md:mt-4">
                        <x-label for="email" value="{{ __('Email *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="email"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent" 
                            type="email" name="email" :value="old('email')" placeholder="Epasts *" required autocomplete="email" />
                    </div>

                    <!--Address-->
                    <div class="flex flex-col gap-1 md:mt-4">
                        <x-label for="street" value="{{ __('Adrese *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="street" placeholder="Ielas noaukums (mājas numurs, dzīvokla numurs) *"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal"
                            type="text" name="street" :value="old('street')" required autocomplete="street-address" />
                        <x-input id="optional_field" placeholder="Lauks neobligāts"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-nonerounded-none block mt-3 w-full text-sm font-semibold md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal"
                            type="text" name="optional_field" :value="old('optional_field')" />
                        <div class="flex flex-col gap-1 md:grid grid-cols-2 grid-rows-2 gap-x-4 md:mt-3">
                            <x-input id="city" placeholder="Pilsēta *"
                                class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-3 w-full text-sm font-semibold md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal"
                                type="text" name="city" :value="old('city')" required autocomplete="address-line2" />
                            <x-input id="district" placeholder="Novads *"
                                class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-3 w-full text-sm font-semibold md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal"
                                type="text" name="district" :value="old('district')" required autocomplete="address-level1" />
                            <x-input id="zip_code" placeholder="Pasta indekss *"
                                class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-3 w-full text-sm font-semibold md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal"
                                type="text" name="zip_code" :value="old('zip_code')" required autocomplete="postal-code" />
                            <x-input id="country" placeholder="Valsts *"
                                class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-3 w-full text-sm font-semibold md:text-xl md:font-normal placeholder-slate-400/25 placeholder-font-normal"
                                type="text" name="country" :value="old('country')" required autocomplete="country" />
                        </div>
                    </div>

                    <!--Pases numurs-->
                    <div class="md:mt-4">
                        <x-label for="passport_number" value="{{ __('Pases numurs *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="passport_number"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent"
                            type="text" name="passport_number" :value="old('passport_number')" placeholder="Pases numurs" required autofocus
                            autocomplete="passport-number" />
                    </div>
                    
                    <!--Pases deriguma termins-->
                    <div class="md:mt-4">
                        <x-label for="passport_expiry" value="{{ __('Pases derīguma termiņš datums *') }}"
                            class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <div class="relative">
                            <div class="relative z-0"><x-input id="passport_expiry"
                                    class="md:bg-[#ffed9f] border border-yellow-200 md:border-nonerounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent"
                                    type="text" name="passport_expiry" :value="old('passport_expiry')" placeholder="Derīguma termiņš *" required autofocus
                                    autocomplete="off" /></div>
                            <div class=" absolute right-0 top-0 z-10"><img
                                    src="{{ asset('images/icons/calendar-large.svg') }}" class="h-10 w-10"></div>
                        </div>
                    </div>

                    <!--Talruna numurs-->
                    <div class="md:mt-4">
                        <x-label for="phone" value="{{ __('Tālruņa numurs *') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="phone"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal  placeholder-slate-400/25 placeholder-font-normal md:placeholder-transparent"
                            type="tel" name="phone" :value="old('phone')" placeholder="Tālruņa numurs *" required autocomplete="tel" />
                    </div>

                    <!--Pielikums-->
                    <div>
                        <x-label for="attachment" value="{{ __('Pielikums') }}" class="text-sm font-semibold md:text-xl md:font-meidum pl-3 md:pl-0"/>
                        <textarea id="attachment" class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal"
                            name="attachment" autofocus>{{ old('attachment') }}</textarea>
                    </div>

                    <!--Parole-->
                    <div class="md:mt-4">
                        <x-label for="password" value="{{ __('Parole') }}" class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="password"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal"
                            type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <!--Atkartota parole-->
                    <div class="md:mt-4">
                        <x-label for="password_confirmation" value="{{ __('Parole atkārtoti') }}"
                            class="text-sm font-semibold md:text-xl md:font-medium pl-3 md:pl-0" />
                        <x-input id="password_confirmation"
                            class="md:bg-[#ffed9f] border border-yellow-200 md:border-none rounded-none block mt-1 w-full text-sm font-semibold md:text-xl md:font-normal"
                            type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <!--Privacy???-->
                    {{--
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' =>
                                                '<a target="_blank" href="' .
                                                route('terms.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                __('Terms of Service') .
                                                '</a>',
                                            'privacy_policy' =>
                                                '<a target="_blank" href="' .
                                                route('policy.show') .
                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                __('Privacy Policy') .
                                                '</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                    --}}

                    <!--Button-->
                    <div class="flex items-center justify-center mt-4 mb-2">
                        <x-button class="md:border border-black  rounded-full bg-[#FFCF00] px-10 md:px-6 py-2 md:py-1 font-medium text-lg">
                            {{ __('Registrēties') }}
                        </x-button>
                    </div>
                </form>
            </div>

            <!--Links uz login-->
            <div class="flex flex-col gap-4 justify-center items-center">
                <a class="font-semibold md:font-medium text-sm md:text-lg pt-2" href="{{ route('login') }}">
                    {{ __('Esmu reģistrējies') }}
                </a>

                <a class="md:border border-black  rounded-full bg-[#FFCF00] px-11 md:px-6 py-2 md:py-1 font-medium text-lg"
                    href="{{ route('login') }}">
                    {{ __('Pieslēgites') }}
                </a>
            </div>

        </div>
    @endsection

</x-guest-layout>

<header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
    :class="{ '{{ $darkmode ? 'bg-dark' : 'bg-white' }}': scrolled, 'top-[0px]': scrolled, 'top-[20px]': !scrolled }"
    class="h-[60px] w-[100%] flex justify-center items-center fixed top-[20px] left-0 z-[999] drop-shadow-xl transition-all duration-100">
    <div
        class="myContainer flex justify-between items-center h-[100%] {{ $darkmode ? 'bg-dark' : 'bg-white' }}  rounded-full">
        <div class="flex gap-[50px] items-center">
            <div class="logo h-[100%] flex justify-center items-center">
                <h1 class="text-[20px] poppins-black {{ $darkmode ? 'text-white' : 'text-dark' }}">immob.</h1>
            </div>
            <ul class="flex gap-[20px] h-[100%] justify-center items-center">
                <li class="py-[5px] px-[10px]  "><a href="/" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                        wire:navigate>Home</a></li>

                <li class="py-[5px] px-[10px]  "><a href="/social" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                        wire:navigate>Social</a></li>
              
                <li class="py-[5px] px-[10px]  "><a href="/chat" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                        wire:navigate>Chat</a></li>
                <li class="py-[5px] px-[10px]  "><a href="/calendar" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                        wire:navigate>Calendar</a></li>
                <li class="py-[5px] px-[10px]  "><a href="/contacts" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                        wire:navigate>Contacts</a></li>
                <li class="py-[5px] px-[10px]  "><a href="/parcours" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                        wire:navigate>Parcours</a></li>
            </ul>
        </div>

        <div x-data="{ open: false }" class="relative w-[fit-content] h-[100%] flex justify-center items-center  "
            id="userOpen">
            <div x-on:click='open = !open'
                class="cursor-pointer  w-[100%]  {{ Auth::user() ? '' : 'border-dark border-[1px]' }} rounded-full py-[10px] px-[10px] flex justify-between items-center gap-[20px]"
                id="userOpen">
                @auth
                <div class="flex items-center gap-[30px]">
                    <a href="" class=" px-[15px] py-[10px]  border-[1px] {{$darkmode ? 'border-grey text-white' : 'border-dark text-dark'}} rounded-[10px] flex gap-[10px] items-center"><i class="fa-solid fa-plus"></i> <span>add the post</span></a>
                      <div class="w-[fit-content] flex items-center gap-[10px]">
                        <img class="w-[30px] h-[30px] rounded-full object-cover"
                            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        <span class="{{ $darkmode ? 'text-white' : 'text-dark' }}">
                            {{ $user->name }}
                        </span>

                    </div>
                  
                </div>
                  

                @else
                    <i class="fa-regular fa-user {{ $darkmode ? 'text-white' : 'text-dark' }}"></i>

                @endauth
                <i class="fa-solid fa-bars {{ $darkmode ? 'text-white' : 'text-dark' }}"></i>
            </div>

            <ul x-show.important='open'
                class=" shadow-sm  absolute right-[0] z-[999] top-[110%] w-[200px] flex flex-col gap-[10px] {{ $darkmode ? 'bg-dark' : 'bg-white' }} rounded-[10px] py-[10px]"
                id="userMenu">
                @auth
                    <li class="w-[100%] p-[10px]"><a href="{{ route('profile.show') }}"
                            class="{{ $darkmode ? 'text-white' : 'text-dark' }}" wire:navigate>Profile</a></li>
                    <hr>
                    <li class="w-[100%] p-[10px]"><a href="" class="{{ $darkmode ? 'text-white' : 'text-dark' }}"
                            wire:navigate>Help Center</a></li>
                    <li class="flex justify-between items-center p-[10px]"><span
                            class="{{ $darkmode ? 'text-white' : 'text-dark' }}">darkmode</span>


                        @livewire('darkmode')
                    </li>
                    <li class="w-[100%] p-[10px]">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <button type="submit"
                                class="{{ $darkmode ? 'bg-[red]' : 'bg-dark' }} w-[100%] p-[10px] text-white rounded-[10px]">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="w-[100%] p-[10px]"><a href="/signup" wire:navigate>Signup</a></li>
                    <li class="w-[100%] p-[10px]"><a href="/signin" wire:navigate>Signin</a></li>
                    <hr>
                    <li class="w-[100%] p-[10px]"><a href="" wire:navigate>Help Center</a></li>
                    <li class="w-[100%] p-[10px]"><a href="/about" wire:navigate>About</a></li>
                @endauth


            </ul>
        </div>
    </div>

</header>

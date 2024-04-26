<header x-data="{ scrolled: false }" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
    :class="{ 'bg-white': scrolled, 'top-[0px]': scrolled, 'top-[20px]': !scrolled }"
    class="h-[60px] w-[100%] flex justify-center items-center fixed top-[20px] left-0 z-[999] drop-shadow-xl transition-all duration-100">
    <div class="myContainer flex justify-between items-center h-[100%] bg-white rounded-full">
        <div class="flex gap-[50px] items-center">
            <div class="logo h-[100%] flex justify-center items-center">
                <h1 class="text-[20px] poppins-black">immob.</h1>
            </div>
            <ul class="flex gap-[20px] h-[100%] justify-center items-center">
                <li class="py-[5px] px-[10px]"><a href="/" wire:navigate>Home</a></li>

                <li class="py-[5px] px-[10px]"><a href="/dashboard" wire:navigate>Dashboard</a></li>
                <li class="py-[5px] px-[10px]"><a href="/users">Users</a></li>
                <li class="py-[5px] px-[10px]"><a href="/chat" wire:navigate>Chat</a></li>
                <li class="py-[5px] px-[10px]"><a href="/calendar" wire:navigate>Calendar</a></li>
                <li class="py-[5px] px-[10px]"><a href="/contacts" wire:navigate>Contacts</a></li>
                <li class="py-[5px] px-[10px]"><a href="/parcours" wire:navigate>Parcours</a></li>
            </ul>
        </div>

        <div x-data="{ open: false }" class="relative w-[65px] h-[100%] flex justify-center items-center "
            id="userOpen">
            <div x-on:click='open = !open'
                class="cursor-pointer border-[1px] w-[100%]  border-black  rounded-full py-[10px] px-[10px] flex justify-between"
                id="userOpen">
                <i class="fa-regular fa-user"></i>
                <i class="fa-solid fa-bars"></i>
            </div>

            <ul x-show.important='open'
                class=" shadow-sm  absolute right-[0] z-[999] top-[110%] w-[200px] flex flex-col gap-[10px] bg-white rounded-[10px] py-[10px]"
                id="userMenu">
                <li class="w-[100%] p-[10px]"><a href="/signup" wire:navigate>Signup</a></li>
                <li class="w-[100%] p-[10px]"><a href="/signin" wire:navigate>Signin</a></li>
                <hr>
                <li class="w-[100%] p-[10px]"><a href="" wire:navigate>Help Center</a></li>
                <li class="w-[100%] p-[10px]"><a href="/about" wire:navigate>About</a></li>

            </ul>
        </div>
    </div>

</header>

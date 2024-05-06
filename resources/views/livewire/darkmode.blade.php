

    <label class="inline-flex items-center cursor-pointer">
        <input type="checkbox" value="" class="sr-only peer" wire:change='darkmodeToggle'
            {{ $darkmode ? 'checked' : '' }}>
        <div
            class="relative w-[45px] h-[25px]  peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-[105%]  {{ $darkmode ? ' border-white border-[1px]' : ' border-dark border-[1px]' }}  after:content-[''] after:absolute after:top-[50%]  after:left-[0] after:translate-x-[10%]  after:translate-y-[-50%] {{ $darkmode ? ' after:bg-white' : ' after:bg-dark' }}   after:rounded-full after:w-[20px]  after:h-[20px] after:transition-all peer-checked:bg-black">
        </div>

    </label>

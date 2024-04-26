<div class="w-[100%] h-[calc(100vh)] bg-black flex">
    <div class=" w-[100%] h-[100%]  bg-black relative">
        <div class="w-[100%] h-[100%]  bg-black opacity-[0.4] absolute z-10 top-0 left-0"></div>
        <img src="{{ asset('images/bg.jpg') }}" alt="" srcset=""
            class="w-[100%] h-[100%] object-cover absolute">
        <div
            class="myContainer absolute z-[99] h-[100%] top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex justify-center items-center">
            <div class="w-[40%] h-[70%]  backdrop-blur-[10px] flex justify-center items-center">
                <h1 class="text-white poppins-bold text-[20px]">Signup</h1>
            </div>
            <div class="w-[40%] h-[auto] bg-white flex justify-center items-center rounded-e-[10px]">
                <form action="{{ route('register') }}" method="POST" class="myContainer h-[100%] my-[20px]">
                    @csrf
                    <div class="flex justify-between  w-[100%]">
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">First name</label>
                            <input type="text" name="firstname" id="firstname" placeholder="First name" class="rounded-[10px]">
                        </div>
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">Second name</label>
                            <input type="text" name="secondname" id="secondname" placeholder="Second name" class="rounded-[10px]">
                        </div>
                    </div>
                    <div class="flex justify-between  w-[100%]">
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" placeholder="email" class="rounded-[10px]">
                        </div>
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">Confirm Email</label>
                            <input type="email" name="confirmemail" id="confirmemail" placeholder="Confirm Email" class="rounded-[10px]">
                        </div>
                    </div>
                    <div class="flex justify-between  w-[100%]">
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" placeholder="password" class="rounded-[10px]">
                        </div>
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="confirm password" class="rounded-[10px]">
                        </div>
                    </div>
                    <div class="flex justify-between  w-[100%]">
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">Phone</label>
                            <input type="number" name="phone" id="phone" placeholder="phone" class="rounded-[10px]">
                        </div>
                        <div class="flex flex-col my-[20px] gap-[10px] w-[45%]">
                            <label for="">city</label>
                            <select name="" id="" class="rounded-[10px]">
                                @foreach ($cities as $city)
                                    <option value={{ $city->name }}>{{ $city->name }}</option>
                                @endforeach
                                {{-- <option value="">Casablanca</option>
                                <option value="">Rabat</option>
                                <option value="">Fes</option>
                                <option value="">Agadir</option>
                                <option value="">Marrakech</option>
                                <option value="">Tanger</option>
                                <option value="">Tetouan</option>
                                <option value="">Asfi</option>
                                <option value="">Laayoune</option>
                                <option value="">Dakhla</option>
                                <option value="">Oujda</option>
                                <option value="">Al Houcima</option>
                                <option value="">Meknes</option>
                                <option value="">Kenitra</option>
                                <option value="">Mohammedia</option>
                                <option value="">El Jadida</option>
                                <option value="">Nador</option>
                                <option value="">Settat</option>
                                <option value="">Béni Mellal</option>
                                <option value="">Khémisset</option>
                                <option value="">Safi</option>
                                <option value="">Taza</option>
                                <option value="">Khouribga</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="flex  w-[100%] items-center  gap-[20px] my-[20px]">
                      
                        <span>Are you :</span>
                        <select name="" id="" class="rounded-[10px]">
                            <option value="">chari</option>
                            <option value="">Kari</option>
                        </select>

                    </div>
                    <div>
                        <button type="submit" class="bg-black text-white py-[10px]  px-[25px] rounded-[10px]">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

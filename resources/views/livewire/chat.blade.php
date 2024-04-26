<section class="w-[100%] h-[calc(100vh-80px)] flex mt-[80px]">
    <div class="w-[30%] h-[100%]  bg-[#fafafa]">
        <div class="myContainer">
            <div class="flex justify-center items-center gap-[20px] p-[20px] rounded-[10px]">
                <div class=" border border-1 border-black  p-[10px] text-black cursor-pointer rounded-[10px]">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Filter</span>
                </div>
                <div class=" border border-1 border-black p-[10px] text-black cursor-pointer rounded-[10px]">
                    <i class="fa-regular fa-message"></i>
                    <span>New Message</span>
                </div>

            </div>
            <div class="w-[100%]">
                <input type="search" placeholder="Search" class="w-[100%] rounded-[10px]">
            </div>
        </div>

        <div class="users myContainer my-[50px] flex  justify-center items-start flex-col gap-[30px]">
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">Nassim Elmharmache</h1>
                        <p class="text-[15px] ">hello</p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user1.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">Said Issabane</h1>
                        <p class="text-[15px]">hello my name is said how are u doing bro ?</p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user2.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">hayat jebran </h1>
                        <p class="text-[15px] poppins-bold">hello my name is nassim how are u?</p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user3.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">Youssef chahin </h1>
                        <p class="text-[15px] poppins-bold">yousef send image </p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user4.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">Asmaa ait cha </h1>
                        <p class="text-[15px] ">hello my name is asmaa </p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user5.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">Ahmed ait lagid </h1>
                        <p class="text-[15px] poppins-bold">hello my name is ilham how are u doing... </p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>
            <div class="w-[100%] flex justify-between items-center">
                <div class="flex gap-[20px] items-center">
                    <div class="img w-[50px] h-[50px]">
                        <img src="{{ asset('images/user6.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="info">
                        <h1 class="text-[20px]">hasan boufal </h1>
                        <p class="text-[15px] ">hello my name is hasan boufal </p>
                    </div>
                </div>
                <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
            </div>





        </div>
    </div>
    <div class=" bg-white w-[50%] h-[100%] relative  border-[#00000042] border-x-[1px]">
        <div
            class="myContainer profile w-[100%] h-[80px] border-1 border-black border-b-[1px] flex justify-between items-center">
            <div class="flex gap-[10px]  items-center">
                <div class="w-[50px] h-[50px]"">
                    <img src="{{ asset('images/user.jpeg') }}" alt="" class="w-[100%] h-[100%] rounded-full">
                </div>
                <div>
                    <h1 class="text-[20px]">Nassim Elmharmache</h1>
                    <h4 class="text-[15px]">Active 1h ago</h4>
                </div>

            </div>
            <i class="fa-solid fa-ellipsis-vertical cursor-pointer"></i>
        </div>
        <div
            class="w-[100%] p-[20px] flex gap-[10px] items-center absolute bottom-[20px] left-[50%] translate-x-[-50%]">
            <i class="fa-regular fa-image cursor-pointer text-[20px]"></i>
            <input type="text" placeholder="message" class="w-[100%] rounded-[10px]">
            <i class="fa-solid fa-microphone cursor-pointer text-[20px]"></i>
            <i class="fa-solid fa-paper-plane cursor-pointer text-[20px]"></i>
        </div>
    </div>
    <div class="w-[20%] h-[100%]  bg-[#fafafa]">
        <div class="myContainer h-[100%] flex justify-center items-center flex-col">
            <div class="flex justify-center items-center flex-col">
                <div class="w-[150px] h-[150px]">
                    <img src="{{ asset('images/user.jpeg') }}" alt=""
                        class="w-[100%] h-[100%] object-cover rounded-full">
                </div>
                <div class="my-[20px] text-center">
                    <h1 class=" text-[20px]">Nassim Elmharmache</h1>
                    <h4>Active 1h ago</h4>
                </div>
            </div>
            <div class="w-[100%] flex flex-col gap-[10px]">
                <div class="flex justify-between items-center cursor-pointer p-[10px]">
                    <h1>Chat info</h1>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="flex justify-between items-center cursor-pointer p-[10px]">
                    <h1>settings</h1>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="flex justify-between items-center cursor-pointer p-[10px]">
                    <h1>Privacy & Support</h1>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class="flex justify-between items-center cursor-pointer p-[10px]">
                    <h1>Media & files</h1>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
                <div class=" cursor-pointer p-[10px] flex justify-center items-center gap-[10px]">
                    <h1 class="bg-[red] text-[white] border py-[5px] px-[15px] border-1 border-[red] rounded-[10px]">Block</h1>
                    <h1 class="text-[red] ">Report</h1>
                </div>
            </div>
        </div>
    </div>
</section>

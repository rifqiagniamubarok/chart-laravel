<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 2</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="w-screen min-h-screen bg-custom-bg">
        <div class="bg-custom-white w-screen shadow-md">
            <div class="container mx-auto px-10 py-4 flex justify-between items-center">
                <div class="flex gap-4 items-center">
                    <img src="/new_kepo.png" alt="logo" class="w-12 aspect-square" />
                    <div class="flex gap-2 items-center">
                        <p class="text-xl text-[#e58537] font-semibold">Ke<span class="text-[#41a7fc]">po</span></p>
                        <p class="text-xl text-[#e58537] font-semibold">kuy!!</p>
                    </div>
                </div>
                <div>
                    <button class="px-4 py-2 bg-[#e58537] rounded-full text-white text-sm font-semibold">Login</button>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-2 md:px-10 pt-4 md:pt-8 pb-8">
            <div class="flex items-center justify-center my-4">
                <div class="flex w-[500px] bg-white py-2 px-4 rounded-md border border-[#e58537]">
                    <input placeholder="Search" class="focus:outline-none grow w-full" />
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-search">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="p-3 md:p-8 bg-[#e58537]  rounded-xl">
                <div class="w-full">
                    <p class="text-center text-custom-white text-2xl font-bold mb-4 md:mb-12">Populer post</p>
                </div>
                <div class=" grid  md:grid-cols-3 gap-4">
                    {{-- Card Article --}}
                    <div
                        class="col-span-1 rounded-lg bg-custom-white shadow-md w-full relative overflow-hidden cursor-pointer hover:bg-opacity-90">
                        <div class="w-full aspect-video relative">
                            <img src="https://images.unsplash.com/photo-1494083306499-e22e4a457632?q=80&w=2944&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="image-1" class="object-cover w-full aspect-video" />
                            <div
                                class="w-full  h-20 absolute bottom-0 inset-x-0 bg-gradient-to-t from-custom-white to-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-400 flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p class="text-secondary">2,000</p>
                                </div>
                                <p class="text-sm text-slate-400">12 Jan 2020</p>

                            </div>
                            <div>
                                <p class="text-lg md:text-xl font-semibold text-custom-black">
                                    Tourism campaign aims to 'change perceptions
                                </p>
                                <p class="text-xs md:text-sm text-slate-400 mt-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Error eveniet amet ea deserunt
                                    rerum possimus aperiam dignissimos sapiente iste cumque?</p>
                            </div>

                        </div>
                    </div>
                    {{-- Card Article --}}
                    <div
                        class="col-span-1 rounded-lg bg-custom-white shadow-md w-full relative overflow-hidden cursor-pointer hover:bg-opacity-90">
                        <div class="w-full aspect-video relative">
                            <img src="https://images.unsplash.com/photo-1513366976578-e01c21fb9c76?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="image-1" class="object-cover w-full aspect-video" />
                            <div
                                class="w-full  h-20 absolute bottom-0 inset-x-0 bg-gradient-to-t from-custom-white to-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-400 flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p class="text-secondary">2,000</p>
                                </div>
                                <p class="text-sm text-slate-400">12 Jan 2020</p>

                            </div>
                            <div>
                                <p class="text-lg md:text-xl font-semibold text-custom-black">
                                    Tourism campaign aims to 'change perceptions
                                </p>
                                <p class="text-xs md:text-sm text-slate-400 mt-2">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Error eveniet amet ea deserunt
                                    rerum possimus aperiam dignissimos sapiente iste cumque?</p>
                            </div>

                        </div>
                    </div>
                    {{-- Card Article --}}
                    <div
                        class="col-span-1 rounded-lg bg-custom-white shadow-md w-full relative overflow-hidden cursor-pointer hover:bg-opacity-90">
                        <div class="w-full aspect-video relative">
                            <img src="https://images.unsplash.com/photo-1505424297051-c3ad50b055ae?q=80&w=2275&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="image-1" class="object-cover w-full aspect-video" />
                            <div
                                class="w-full  h-20 absolute bottom-0 inset-x-0 bg-gradient-to-t from-custom-white to-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-400 flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p class="text-secondary">2,000</p>
                                </div>
                                <p class="text-sm text-slate-400">12 Jan 2020</p>

                            </div>
                            <div>
                                <p class="text-lg md:text-xl font-semibold text-custom-black">
                                    Tourism campaign aims to 'change perceptions
                                </p>
                                <p class="text-xs md:text-sm text-slate-400 mt-2">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit.
                                    Error eveniet amet ea deserunt
                                    rerum possimus aperiam dignissimos sapiente iste cumque?</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-8">
                <div class="flex gap-2 items-center ">
                    <div class="no-wrap grow-0 w-fit text-nowrap text-lg md:text-xl font-semibold">
                        <p class="">Recent Post</p>
                    </div>
                    <div class="bg-[#e58537] w-full grow h-1"></div>
                </div>

                <div class=" grid md:grid-cols-3 gap-4 mt-8">
                    {{-- Card Article --}}
                    <div
                        class="col-span-1 rounded-lg bg-custom-white shadow-md w-full relative overflow-hidden cursor-pointer hover:bg-opacity-90">
                        <div class="w-full aspect-video relative">
                            <img src="https://images.unsplash.com/photo-1540829917886-91ab031b1764?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="image-1" class="object-cover w-full aspect-video" />
                            <div
                                class="w-full  h-20 absolute bottom-0 inset-x-0 bg-gradient-to-t from-custom-white to-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-400 flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p class="text-secondary">2,000</p>
                                </div>
                                <p class="text-sm text-slate-400">12 Jan 2020</p>

                            </div>
                            <div>
                                <p class="text-lg md:text-xl font-semibold text-custom-black">
                                    Tourism campaign aims to 'change perceptions
                                </p>
                                <p class="text-xs md:text-sm text-slate-400 mt-2">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit.
                                    Error eveniet amet ea deserunt
                                    rerum possimus aperiam dignissimos sapiente iste cumque?</p>
                            </div>

                        </div>
                    </div>
                    {{-- Card Article --}}
                    <div
                        class="col-span-1 rounded-lg bg-custom-white shadow-md w-full relative overflow-hidden cursor-pointer hover:bg-opacity-90">
                        <div class="w-full aspect-video relative">
                            <img src="https://images.unsplash.com/photo-1513366976578-e01c21fb9c76?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="image-1" class="object-cover w-full aspect-video" />
                            <div
                                class="w-full  h-20 absolute bottom-0 inset-x-0 bg-gradient-to-t from-custom-white to-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-400 flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p class="text-secondary">2,000</p>
                                </div>
                                <p class="text-sm text-slate-400">12 Jan 2020</p>

                            </div>
                            <div>
                                <p class="text-lg md:text-xl font-semibold text-custom-black">
                                    Tourism campaign aims to 'change perceptions
                                </p>
                                <p class="text-xs md:text-sm text-slate-400 mt-2">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit.
                                    Error eveniet amet ea deserunt
                                    rerum possimus aperiam dignissimos sapiente iste cumque?</p>
                            </div>

                        </div>
                    </div>
                    {{-- Card Article --}}
                    <div
                        class="col-span-1 rounded-lg bg-custom-white shadow-md w-full relative overflow-hidden cursor-pointer hover:bg-opacity-90">
                        <div class="w-full aspect-video relative">
                            <img src="https://images.unsplash.com/photo-1532883031962-d3574f99541b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="image-1" class="object-cover w-full aspect-video" />
                            <div
                                class="w-full  h-20 absolute bottom-0 inset-x-0 bg-gradient-to-t from-custom-white to-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-1">
                            <div class="flex items-center justify-between">
                                <div class="text-slate-400 flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p class="text-secondary">2,000</p>
                                </div>
                                <p class="text-sm text-slate-400">12 Jan 2020</p>

                            </div>
                            <div>
                                <p class="text-lg md:text-xl font-semibold text-custom-black">
                                    Tourism campaign aims to 'change perceptions
                                </p>
                                <p class="text-xs md:text-sm text-slate-400 mt-2">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing
                                    elit.
                                    Error eveniet amet ea deserunt
                                    rerum possimus aperiam dignissimos sapiente iste cumque?</p>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="flex mt-4 justify-center">
                    <button
                        class="flex items-center gap-2 px-4 py-2 bg-[#e58537] rounded-full text-white text-sm font-semibold">More
                        news <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right">
                            <path d="M18 8L22 12L18 16" />
                            <path d="M2 12H22" />
                        </svg></button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

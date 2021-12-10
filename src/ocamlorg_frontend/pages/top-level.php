<?php
include 'header.php';
?>

<button class="bg-primary-600  p-3 z-30 rounded-r-xl text-white shadow-md top-2/4 fixed md:hidden" :class="sidebar ? 'pl-1 pr-2': ''" x-on:click="sidebar = ! sidebar">
    <div class="transform transition-transform" :class='sidebar ? "" : "rotate-180" '>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
    </div>
</button>

<div class="bg-white" x-data="{ d1: true, d2: true, d3 : true, d4: false, d5: false, d6: false, d7:false, d8: true, d9: false, d10: false  }">
    <div class="py-10 lg:py-28">
        <div class="container-fluid">
            <div class="flex justify-between flex-col md:flex-row">
                <div class="flex flex-col">
                    <h2 class="font-bold mb-6 md:mb-0 lg:mb-6">Top level</h2>
                    <div class="text-lg text-body-400">Try this library in your browser.</div>
                </div>
                <div class="flex justify-between space-y-5 md:space-y-0 md:space-x-5 flex-col md:flex-row w-full md:w-auto">
                    <div class=" h-14 w-full md:w-auto flex-col flex">
                        <label class="font-semibold mb-2">Version</label>
                        <div class="relative">
                            <select class="w-full lg:w-auto appearance-none text-body-600 border rounded-md py-3 pl-6 border-gray-200 pr-14 h-full" name="All Regions" id="">
                                <option value="USA">1.0.0-alpha2</option>
                                <option value="USA">USA</option>
                                <option value="UAE">UAE</option>
                            </select>
                            <div class="absolute h-full flex items-center pr-6 opacity-60 right-0 top-0"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex mt-8 space-x-6 border-b border-gray-200">
                    <a href="packages-overview.php">
                        <button class="border-transparent border-b-2 hover:border-primary-600 p-4 font-medium relative text-body-400">
                            Overview
                        </button>
                    </a>
                    <a href="package-documentation.php">
                        <button class="border-transparent border-b-2 hover:border-primary-600 p-4 font-medium relative text-body-400">
                            Documentation
                            <span class="bg-green-500 ml-2 absolute top-2 p-1 rounded-full inline-block"></span>
                        </button>
                    </a>
                    <a href="top-level.php">
                        <button class="border-b-2 hover:border-primary-600 p-4 font-medium border-primary-600 relative text-primary-600">
                            Top level
                            <span class="bg-green-500 ml-2 absolute top-2 p-1 rounded-full inline-block"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex lg:space-x-14 flex-col lg:flex-row">
            <div class="container-fluid">


                <div class="">
                    <div>
                        <div role="list" class="list-none mt-6 py-6 grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                            <div class="relative -m-2 p-2 flex items-center space-x-4">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-30 rounded-lg border border-gray-300">
                                    <div class="text-sm font-medium text-gray-900 px-2">
                                        Enter
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Submit code</p>
                                </div>
                            </div>


                            <div class="relative -m-2 p-2 flex items-center space-x-4">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-30 rounded-lg border border-gray-300">
                                    <div class="text-sm font-medium text-gray-900 px-2">
                                        Up / Down
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Browse history</p>
                                </div>
                            </div>


                            <div class="relative -m-2 p-2 flex items-center space-x-4">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-30 rounded-lg border border-gray-300">
                                    <div class="text-sm font-medium text-gray-900 px-2">
                                        Ctrl + Enter
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Insert a new line</p>
                                </div>
                            </div>


                            <div class="relative -m-2 p-2 flex items-center space-x-4">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-30 rounded-lg border border-gray-300">
                                    <div class="text-sm font-medium text-gray-900 px-2">
                                        Ctrl + l
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Clear display</p>
                                </div>
                            </div>


                            <div class="relative -m-2 p-2 flex items-center space-x-4">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-30 rounded-lg border border-gray-300">
                                    <div class="text-sm font-medium text-gray-900 px-2">
                                        Ctrl + k
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Reset toplevel</p>
                                </div>
                            </div>


                            <div class="relative -m-2 p-2 flex items-center space-x-4">
                                <div class="flex-shrink-0 flex items-center justify-center h-10 w-30 rounded-lg border border-gray-300">
                                    <div class="text-sm font-medium text-gray-900 px-2">
                                        Tab
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Indent code</p>
                                </div>
                            </div>

                            </ul>
                        </div>
                        <div class="my-6 p-6 space-y-6 rounded-xl overflow-auto bg-white border-gray-300 w-full border">
                            OCaml version 4.13.1 <br>
                            Compiled with Js_of_ocaml version 3.11.0+3.11.0-13-g715fce3e-dirty

                            <div class="flex space-x-2">
                                <div id="sharp" class="sharp">#</div>
                                <textarea id="userinput" class="resize-none w-full">Type something...</textarea>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
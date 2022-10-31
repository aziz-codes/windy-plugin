<div class='flex flex-col mt-4 m-2'>
    <div class="relative flex w-full bg-sky-600 text-white items-center justify-center
   p-4">
        <h2 class="text-lg font-semibold">Create a new project</h2>
    </div>
    <h4 class="flex justify-center font-semibold text-lg">Enter project details</h4>


    <div class='relative flex md:flex-row flex-col mt-2 h-80 md:justify-around  items-center md:items-start '>

        <div class="flex flex-col m-1 first-row">

            <div class="flex flex-col">
                <label for="title" class="text-gray-500">Title</label>
                <input type="text" placeholder="Project Title" class="h-6 outline-none rounded-none md:w-72 w-64"
                    id="title" />
            </div>


            <div class="flex flex-col mt-3">
                <label for="title" class="text-gray-500">Token</label>
                <input type="text" placeholder="Token" class="h-6 outline-none rounded-none md:w-72 w-64" id="token"
                    disabled />
            </div>

            <div class="flex flex-col mt-3">
                <label for="title" class="text-gray-500">URL</label>
                <input type="url" placeholder="Project URL" class="h-6 outline-none rounded-none md:w-72 w-64"
                    id="url" />
            </div>


        </div>


        <div class="flex flex-col m-1 second-row">


            <div class="flex flex-col mt-3">
                <label for="date" class="text-gray-500">Date Created</label>
                <input type="date" class="h-6 outline-none rounded-none md:w-72 w-64" />
            </div>


            <div class="flex flex-col mt-3">
                <label for="date" class="text-gray-500">Choose Cover Photo</label>
                <div class="col-sm-10 p-2">
                    <div id="btn-upload" style="height:80px;width:100px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon-plugin" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span id="show-image"></span>
                    <input type="hidden" id="image_name" name="image_name" />
                </div>

            </div>


            <div class="flex flex-col mt-3">
                <label for="tools" class="text-gray-500">Tools Used</label>
                <input type="text" placeholder="Tools -> saperated by commas"
                    class="h-6 outline-none rounded-none md:w-72 w-64" />
            </div>


            <div class='flex flex-col justify-center  w-full'>
                <label for="description" class="text-gray-500">Description</label>
                <textarea rows="4" cols="5" placeholder="Enter Description" class="w-full"></textarea>
            </div>



            <div class="flex justify-start w-full p-3 ">
                <button type="button" id="btn-submit"
                    class="bg-sky-500 font-bold text-lg rounded-sm w-16 h-8 hover:shadow-lg">Save</button>
            </div>

        </div>




    </div>





</div>
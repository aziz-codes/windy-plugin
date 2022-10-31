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
<input type="text" placeholder="Project Title"
 class="h-6 outline-none rounded-none md:w-72 w-64" id="title"/>
</div>


<div class="flex flex-col mt-3">
<label for="title" class="text-gray-500">Token</label>
<input type="text" placeholder="Token"
class="h-6 outline-none rounded-none md:w-72 w-64" id="token" disabled/>
</div>

<div class="flex flex-col mt-3">
<label for="title" class="text-gray-500">URL</label>
<input type="url" placeholder="Project URL"
class="h-6 outline-none rounded-none md:w-72 w-64" id="url"/>
</div>


   </div>
    

   <div class="flex flex-col m-1 second-row">


   <div class="flex flex-col mt-3">
<label for="date" class="text-gray-500">Date Created</label>
   <input type="date" class="h-6 outline-none rounded-none md:w-72 w-64"/>
</div>


<div class="flex flex-col mt-3">
<label for="date" class="text-gray-500">Choose Cover Photo</label>
   <button class="h-8 outline-none rounded-none md:w-72 w-64 bg-red-200" name="btn-upload" id="btn-upload">Choose Image</button>
<div class="h-12 w-12 p-1 bg-red-500">
    
</div>
</div>


<div class="flex flex-col mt-3">
<label for="tools" class="text-gray-500">Tools Used</label>
   <input type="text" placeholder="Tools -> saperated by commas" class="h-6 outline-none rounded-none md:w-72 w-64"/>
</div>

   </div>




   </div>

   <label for="tools" class="text-gray-500 ml-14">Description</label>
   <div class="relative flex items-center flex-col w-ful h-72">
   
     <textarea rows="10" id="desc" placeholder="Enter some description about your project" cols="10" class="relative flex w-11/12 p-1"></textarea>
   </div>

  
</div>


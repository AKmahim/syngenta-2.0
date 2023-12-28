<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add form page</title>

  <style>
    #container{
      background-image: url({{asset('admin')}}/asset/img/leaf.png);
      background-repeat: no-repeat;
      background-position-x: -200px;
      background-position-y: bottom;
      /* background-position: left bottom; */
    }
  </style>


    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

  <div
  class="bg-white flex flex-col justify-center items-center px-16 py-12 max-md:px-5" id="container">
  <div
    class="flex w-full max-w-[1008px] flex-col mb-2.5 items-start max-md:max-w-full">
    <a  href="{{route('home')}}">
        <img src="{{asset('admin')}}/asset/img/Syngenta_Logo 1.png" alt="" />
    </a>
    <div
      class="bg-gray-200 self-stretch flex flex-col mt-10 px-6 py-7 rounded-2xl max-md:max-w-full max-md:px-5"
    >
      <div class="text-black text-xl font-bold self-stretch max-md:max-w-full">
        Program Title
      </div> 
      <input type="text" class="bg-zinc-300 ps-4 self-stretch border-s-amber-50 flex shrink-0 h-[41px] flex-col mt-3.5 rounded-xl max-md:max-w-full" placeholder="       Program Title">
      
      <div class="self-stretch mt-8 max-md:max-w-full">
        <div
          class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0"
        >
          <div
            class="flex flex-col items-stretch w-[48%] max-md:w-full max-md:ml-0"
          >
            <div
              class="flex grow flex-col items-stretch max-md:max-w-full max-md:mt-10"
            >
              <div class="text-black text-xl font-bold max-md:max-w-full">
                Out Reach
              </div>
              <input type="text" class="bg-zinc-300 ps-4 self-stretch border-s-amber-50 flex shrink-0 h-[41px] flex-col mt-3.5 rounded-xl max-md:max-w-full" placeholder="    OutReach">

              
                
              

              <div class="text-black text-xl font-bold mt-8 max-md:max-w-full">
                Quantity
              </div>
              <input type="text" class="bg-zinc-300 ps-4 self-stretch border-s-amber-50 flex shrink-0 h-[41px] flex-col mt-3.5 rounded-xl max-md:max-w-full" placeholder="    OutReach">

            </div>
          </div>
          <div
            class="flex flex-col items-stretch w-[52%] ml-5 max-md:w-full max-md:ml-0"
          >
            <!-- ================ district selection =================== -->

            <div
              class="flex grow flex-col items-stretch mt-1 max-md:max-w-full max-md:mt-10"
            >
            <div
            class="bg-zinc-300 flex max-w-[600px] gap-1 pr-2.5 pt-7 pb-3 rounded-xl items-start max-md:flex-wrap"
          >
            <div class="flex flex-col max-md:max-w-full">
              <div
                class="self-stretch flex items-stretch justify-between gap-5 max-md:max-w-full max-md:flex-wrap"
              >

              
                <div class="flex grow basis-[0%] flex-col items-stretch">
                  
                  <select class="select select-bordered w-full
                   max-w-xs text-black text-opacity-50 ms-1 
                   text-xl bg-zinc-100 justify-center pl-6 
                   pr-16 py-3.5 rounded-xl items-start max-md:px-5">

                    <option disabled selected>Districts</option>
                    @foreach ($districts as $item)
                        <option>{{$item->name}}</option>
                    @endforeach
                  </select>
                    
                  <div class="text-black text-xl ml-10 mt-5 self-start max-md:ml-2.5">
                    Dinajpur
                  </div>
                </div>
                <div class="flex grow basis-[0%] flex-col items-stretch">
                  <div class="flex items-stretch justify-between gap-5">
                    
                     <input datepicker type="text" class="bg-zinc-100 text-gray-900 text-sm rounded-lg
                      focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:bg-zinc-100
                       dark:border-gray-600 dark:placeholder-gray-400 placeholder:text-lg
                        dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        placeholder="Date">
                    
                    <div
                      class="text-black text-xl whitespace-nowrap bg-zinc-100 grow justify-center items-stretch px-4 py-3.5 rounded-xl"
                    >
                      ADD
                      <span class="font-black">+</span>
                    </div>
                  </div>
                  <div
                    class="text-black text-xl whitespace-nowrap ml-5 mt-5 self-start max-md:ml-2.5"
                  >
                    21 January 2024
                  </div>
                </div>
              </div>
              <div
                class="bg-black bg-opacity-30 self-stretch shrink-0 h-px mt-2 max-md:max-w-full"
              ></div>
              <div
                class="flex w-[312px] max-w-full items-stretch justify-between gap-5 ml-10 mt-3 self-start max-md:ml-2.5"
              >
                <div class="text-black text-xl">Panchagar</div>
                <div class="text-black text-xl ">21 January 2024</div>
              </div>
              <div
                class="bg-black bg-opacity-30 self-stretch shrink-0 h-px mt-2 max-md:max-w-full"
              ></div>
            </div>
            <div
              class="bg-zinc-400 flex basis-[0%] flex-col items-stretch mt-12 pb-12 rounded-lg self-end max-md:mt-10"
            >
              <div
                class="bg-neutral-500 flex shrink-0 h-[47px] flex-col mb-11 rounded-lg max-md:mb-10"
              ></div>
            </div>
          </div>
          
            </div>



            <!-- ===================== district selection end ====================== -->
          </div>
        </div>
      </div>
      <button
        class="text-white text-4xl font-bold bg-green-600 self-center justify-center items-stretch mt-11 pl-6 pr-8 py-3.5 rounded-2xl max-md:mt-10 max-md:px-5"
      >
        Submit
    </button>
    </div>
  </div>
</div>

  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script> 
</body>
</html>
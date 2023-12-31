<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Syngenta Title Submit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Jost:wght@400;700&family=Poppins:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('admin')}}/css/syngentaformwithoutvalue.css" />
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

<link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


    <style>
      #container{
        background-image: url({{asset('admin')}}/asset/img/leaf.png);
        background-repeat: no-repeat;

        background-position-x: -200px;
        background-position-y: bottom;
        /* background-position: left bottom; */
      }
    </style>

  </head>
  <body>
    <div class="container1" id="container">
      <div class="heading">
        <a href="{{route('home')}}">
          <img src="{{asset('admin')}}/asset/img/Syngenta_Logo 1.png" alt="" />
        </a>
      </div>
      @if (session('success'))
        <div role="alert" class="alert alert-success my-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span> {{session('success')}} </span>
        </div>
      @endif
      
      {{-- divider --}}
      <div class="flex gap-3 md:flex-col">
        <div class="titlebox">
          <div class="titlediv">


            <form action="{{route('store-program')}}" method="POST">
              @csrf

            <div class="programtitle">
              <p>Program Title</p>
              <input type="text" name="program_title" id="title" required/>
            </div>
            {{-- <div class="custom-select dropdown">
              <select class="dropbtn">
                <option value="dhaka">Dhaka</option>
                <option value="khulna">Khulna</option>
                <option value="dinajpur">Dinajpur</option>
                <option value="panchagar">Panchagar</option>
              </select>
            </div> --}}
          </div>
          <div class="informationfullbox">
            <div class="informationbox">
              <div class="info">
                <div class="infotitle">
                  <p>Out Reach</p>
                  <input type="text" class="outreach" name="outreach" required/>
                </div>
                <div class="infotitle">
                  <p>Quantity</p>
                  <input type="text" name="quantity" required/>
                </div>
              </div>
              <div class="infoform">
                
                  <!-- <div class="dropdown">
                  <button class="dropbtn">Districts</button>
                  <div class="dropdown-content">
                    <a href="#">Dhaka</a>
                    <a href="#">Dinajpur</a>
                    <a href="#">Rangpur</a>
                    <a href="#">Panchagar</a>
                  </div>
              </div> -->
                  <div class="flex justify-between gap-4">
                    <div class="custom-select dropdown">
                      <select name="district" class="dropbtn" id="districts">
                        <option selected disabled>Select District</option>
                        @foreach ($districts as $item)
                          <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                        
                      </select>
                    </div>
                    <input class="rounded-lg px-4 py-2" type="date" id="date"/>
                    {{-- button --}}
                    <div class="bg-green-600 flex justify-center items-center px-3 rounded-lg cursor-pointer"  id="information_btn">ADD +</div>
                  </div>
                
                <div class="databox">
                  <table id="district_time_table">
                      
                  </table>
                </div>
              </div>
            </div>
            <input type="text" name="location_date" class="hidden" id="location_date">
            <div class="bothbtn">
              <button type="submit" class="filterbtn bg-green-600">Submit</button>
            </div>
          </form>
          </div>
        </div>

        {{-- ============ right side program add form ===========  --}}
        {{-- <div class="px-10 py-10 bg-[#ececec] rounded-lg">
          <h1 class="text-center text-2xl font-bold my-4">Add New Program</h1>
          <form action="" method="POST">
            @csrf

            <div class="programtitle">
              <p>Program Title</p>
              <input type="text" name="program_name" id="title" />
            </div>
            <div class="bothbtn">
              <button type="submit" class="filterbtn text-lg  bg-green-600">ADD Program</button>
            </div>
          </form>


        </div> --}}

      </div>
    </div>













    <script>

      let dataArray = [];
      // console.dir(districts);
      const informationBtn = document.getElementById('information_btn')
      const locationDate = document.getElementById('location_date');

      informationBtn.addEventListener("click", handleSubmit);

      function handleSubmit(){

        const district = document.getElementById('districts').value;
        const date = document.getElementById('date').value;

        if (district.trim() !== '' && date.trim() !== '') {
            const newData = { district: district, date: date };
            dataArray.push(newData);
            updateDom(dataArray);

            console.log(dataArray); // Log the updated array of objects
        } else {
            alert('Please enter both district and date.');
        }

      }

      function updateDom(data){
        const dataTable = document.getElementById('district_time_table');
        dataTable.innerText = '';
        for(item of data){
          let newItem = document.createElement("tr");
          newItem.innerHTML = `
              <th>${item.district}</th>
              <th>${item.date}</th>
              <th></th>
          `;
          dataTable.appendChild(newItem);
          stringifyDate = JSON.stringify(data)
          locationDate.value = stringifyDate;
          
          // dataTable.appendChild(datalist);
          console.log(item.district);
        }
        
      }


    </script>
  </body>
</html>



















{{-- <!DOCTYPE html>
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
</html> --}}
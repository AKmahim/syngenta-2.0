<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syngenta | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <div
    class="flex-col shadow-sm overflow-hidden relative flex min-h-[768px] w-full justify-center items-center px-16 py-11 max-md:max-w-full max-md:px-5"
    >
    
    <img
    loading="lazy"
    srcset="{{asset('admin')}}/asset/img/bg.png"
    class="absolute h-full w-full object-cover object-center inset-0"
    />
    <div class="relative flex w-[472px] max-w-full flex-col items-center mb-8">
    <img
        loading="lazy"
        srcset="{{asset('admin')}}/asset/img/syngenta_Logo.png"
        class="aspect-[2.8] object-contain object-center w-[383px] shadow-sm overflow-hidden max-w-full"
    />
    
    <div
        class="bg-zinc-300 bg-opacity-80 self-stretch flex flex-col items-stretch mt-9 p-12 rounded-xl max-md:max-w-full max-md:px-5"
    >
        <div class="text-black text-center text-5xl max-md:text-4xl">
            
            <span class="">Planned Programs</span>
            <br />
            <span class="font-bold">2023 - 2024</span>
        </div>
        <div
        class="flex-col text-white hover:scale-125 text-center text-2xl font-semibold delay-100 relative whitespace-nowrap fill-indigo-900 overflow-hidden self-center aspect-[4.133333333333334] justify-center items-stretch mt-11 px-11 py-8 max-md:mt-10 max-md:px-5"
        >
        <a href="{{route('dashboard')}}" class="btn bg-[#36398E] px-7 py-4 rounded-md">View Dashboard</a>
        
        
        </div>
        <div
        class="flex-col text-white text-center text-2xl hover:scale-125 font-semibold relative whitespace-nowrap fill-indigo-900 overflow-hidden self-center aspect-[4.133333333333334] justify-center items-stretch m px-11 py-8 max-md:mt-10 max-md:px-5"
        >
        <a href="{{route('control-panel')}}" class="btn bg-[#36398E] px-12 py-4 rounded-md">Control Panel</a>
        
        
        </div>
        <form class="flex justify-center hover:scale-75 mt-2 text-white" action="{{route('logout')}}" method="POST">
            @csrf
            <button class="btn bg-[#36398E] text-lg px-12 py-2 rounded-md" type="submit">Logout</button>
        </form>

        
    </div>
    </div>
    </div>

  
</body>
</html>
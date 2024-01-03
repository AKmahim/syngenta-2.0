<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Syngenta Filter Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Jost:wght@400;700&family=Poppins:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
  />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('admin')}}/css/syngentaFilter.css" />
  </head>
  <body>
    <div class="container">
      <div class="heading">
        {{-- ============ nav  ======================  --}}
        <div class="flex justify-between items-center">
          <a  href="{{route('home')}}">
            <img src="{{asset('admin')}}/asset/img/Syngenta_Logo 1.png" alt="" />
        </a>
        <div class="flex justify-between">
          <a href="{{route('dashboard')}}" class="me-4 btn btn-success text-white hover:text-black">Dashboard</a>
          <a href="{{route('control-panel')}}" class="me-4 btn btn-success text-white hover:text-black">Control Panel</a>
        </div>
        </div>

        @if (session('success'))
          <div role="alert" class="alert alert-success my-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span> {{session('success')}} </span>
          </div>
        @endif

        <div class="name_btn">
          <p>Welcome Mr. Habibullah</p>
          <div class="bothbtn">
            <div class="filterbtn">
              <img src="{{asset('admin')}}/asset/img/filtericon.png" class="white-image" alt="" />
              Filter
            </div>
            <a class="add-btn" href="{{route('add-program')}}">
                <div class="addnew">Add New</div>
            </a>
          </div>
        </div>
      </div>
      <div class="databox">
        <table class="">
          <thead>
            <tr>
              <th>Program Title</th>
              <th>Quantity</th>
              <th>Out Reach</th>
              <th>Districts</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody >
            @foreach ($program as $item)

            <tr>
              <td> {{$item->program_title}} </td>
              <td> {{$item->quantity}} </td>
              <td> {{$item->outreach}} </td>
              <td>
                @foreach ((App\Models\LocationDate::where('program_id',$item->id)->get()) as $date)
                  <span>{{$date->district}}, </span>
                @endforeach
                 
              
              </td>
              <td>
                @foreach ((App\Models\LocationDate::where('program_id',$item->id)->get()) as $date)
                  <span>{{$date->date}}, </span>
                @endforeach
              </td>
              <td class="actionflex flex justify-center items-center ">
                <a href="#"><img src="{{asset('admin')}}/asset/img/eye.png" alt="" /></a>
                <a href="#"><img src="{{asset('admin')}}/asset/img/eyeicon.png" alt="" /></a>
                <a href="{{url('/admin/program/delete/'.$item->id)}}" class="text-black"><i class="ri-delete-bin-5-fill"></i></a>

              </td>
            </tr>
                
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>

    
  </body>
</html>

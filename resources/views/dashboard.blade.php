<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Jost:wght@400;700&family=Poppins:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <title>syngentaMap</title>
    <link rel="stylesheet" href="{{asset('admin')}}/css/syngentaMap.css" />


<link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


  </head>
  <body>
    <div class="container1">
      <div class="left">
        <a href="{{route('home')}}">
            <img src="{{asset('admin')}}/asset/img/Syngenta_Logo 1.png" alt="" />
        </a>
        <div class="formborder">


          <form action="">
            <input type="date" placeholder="Date" required/>
            <button type="submit" class="btn bg-green-600 ">Filter</button>
          </form>

          <ol type="1" class="list-disc">
            @foreach ($program as $item)
                <li class="cursor-pointer program hover:text-green-500" >{{$item->program_title}}</li>
            @endforeach
          </ol>
        </div>
        <p></p>
      </div>

      <div class="mid" id="map">
        <p></p>
      </div>

      <div class="right">
        <div
          class="bg-indigo-900 flex max-w-[355px] items-start justify-between gap-4 pl-7 pr-3 py-5 rounded-lg"
        >
          <div class="flex grow basis-[0%] flex-col items-stretch self-start">
            <div class="text-white text-2xl font-bold whitespace-nowrap">District</div>
            <div id="district">
              
            </div>
          </div>
          <div class="bg-white self-center w-px shrink-0 h-[140px] my-auto"></div>
          <div class="flex grow basis-[0%] flex-col items-stretch self-start">
            <div class="text-white text-2xl font-bold whitespace-nowrap">Date</div>
            {{-- ================ program date =========== --}}
            <div id="program_date">

            </div>
           
          </div>
          <div
            class="bg-zinc-800 flex basis-[0%] flex-col items-stretch mt-5 pb-12 rounded-md self-start"
          >
            <div class="bg-white flex shrink-0 h-[84px] flex-col rounded-md"></div>
          </div>
        </div>

        {{-- ============= bottom part ========================  --}}

        <div class="flex max-w-[409px] flex-col items-center mt-4">
          <div
            class="bg-green-600 z-[1] flex w-[355px] max-w-full items-stretch justify-between gap-5 pl-7 pr-12 py-4 rounded-lg"
          >
            <div class="flex flex-col items-stretch">
              <div class="text-white text-2xl font-bold leading-7">
                Projected Out Reach
              </div>
              <div class="text-white text-xl mt-6" id="outreach"></div>
            </div>
            <div class="flex flex-col items-stretch">
              <div class="text-white text-2xl font-bold whitespace-nowrap">
                Quantity
              </div>
              <div class="text-white text-xl whitespace-nowrap mt-11" id="quantity"></div>
            </div>
          </div>
          <img
            loading="lazy"
            srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/195b00528ff12a55d847776f80d6c9f572a0f730c9da4488d127836249d0dc1c?apiKey=5bc6e68df7c1430790d62476ac934cef&"
            class="aspect-[0.96] object-contain object-center w-full overflow-hidden self-stretch"
          />
        </div>
        
      </div>
    </div>



    {{-- ================================= d3 script ======== --}}
    <script src="https://d3js.org/d3.v7.min.js"></script>
    {{-- // ============================= map script ============ --}}
    <script>

      // ============================ with all subdistricts ===============
      function printDistrictName(name){
        console.log(name);
      }

function showMapData(district){




}

const drawMap = async () => {
    const mapLink = 'districts.geojson'
    try {
        const response = await fetch(mapLink);
        const data = await response.json();
        console.log(data.features);
        const svg = d3.select('#map')
            .append('svg')
            .attr('width', 500)
            .attr('height', 700);

        const projection = d3.geoMercator()
            .center([90.3563, 23.685])
            .scale(6000)
            .translate([250, 380]);

        const path = d3.geoPath()
            .projection(projection);

        svg.selectAll('path')
            .data(data.features)
            .enter()
            .append('path')
            .attr('d', path)
            .attr('class', 'district')
            .style('fill', 'green')
            .style('stroke', '#fff')
            .style('stroke-width', 0.5)
            .on('mouseover', function (d) {
                d3.select(this)
                    // .style('fill', '#99ff99')
                    .style('fill', 'red')
                    .style('transform', 'scale(1.02)');
                const randomData = Math.floor(Math.random() * 100);
                const districtName = d.target.__data__.properties.ADM2_EN;
                
            })
            .on('mouseout', function () {
                d3.select(this)
                    .style('fill', 'green')
                    .style('transform', 'scale(1)');
                
            })
            .on('click', function (d) {

                const districtName = d.target.__data__.properties.ADM2_EN;
                printDistrictName(districtName);
                const loremIpsumData = `Our Meeting will held on ${districtName}`; // Replace this with your data

                d3.select('#infoSideBar')
                    .html(showMapData(districtName));
            });
        // Display district names
        svg.selectAll('text')
            .data(data.features)
            .enter()
            .append('text')
            .attr('x', d => path.centroid(d)[0])
            .attr('y', d => path.centroid(d)[1])
            .text(d => d.properties.ADM2_EN)
            .attr('text-anchor', 'middle')
            .attr('alignment-baseline', 'central')
            .attr('font-size', '8px')
            .attr('fill', 'black');

        const tooltip = d3.select('body')
            .append('div')
            .attr('class', 'tooltip')
            .style('position', 'absolute')
            .style('visibility', 'hidden')
            .style('background-color', 'white')
            .style('border', '1px solid black')
            .style('padding', '5px');
        // ... (remaining code for displaying district names, tooltip, etc.)
    } catch (error) {
        console.log(error);
    }
};

drawMap();


    const programs = document.querySelectorAll('.program');
    // Function to log the value when a list item is clicked
    const handleClick = (event) => {
        console.log(event.target.textContent);
        const title = event.target.textContent;
        filterByTitle(title);
    };

    // Add click event listeners to each "program" list element
    programs.forEach((element) => {
        element.addEventListener('click', handleClick);
    });

    //filter by title function
    function filterByTitle(title){
      const url = `/admin/filter-by-title/${title}`;
      fetch(url, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                printDistrict(data.location_date);
                printDate(data.location_date);
                printOutreachAndQuantity(data.program);
                console.log(data);
                
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }


    //print district and date in dom
    function printDistrict(data){
      const districtDiv = document.getElementById('district');
      districtDiv.innerHTML = '';
      data.forEach((item)=>{
        const div = document.createElement('div');
        div.classList.add('text-white','text-xl','whitespace-nowrap','mt-5');
        div.innerText = item.district;
        districtDiv.appendChild(div);
      })
      
      
    }

    function printDate(data){
      const dateDiv = document.getElementById('program_date');
      dateDiv.innerHTML = '';
      data.forEach((item)=>{
        const div = document.createElement('div');
        div.classList.add('text-white','text-xl','mt-5');
        div.innerText = item.date;
        dateDiv.appendChild(div);
      })
    }


    function printOutreachAndQuantity(program){
      const outreach = document.getElementById('outreach');
      const quantity = document.getElementById('quantity');
      program.forEach((item)=>{
        outreach.innerText = '';
        outreach.innerText = item.outreach;
        quantity.innerText = '';
        quantity.innerText = item.quantity;
      })

    }
    </script>
  </body>
</html>

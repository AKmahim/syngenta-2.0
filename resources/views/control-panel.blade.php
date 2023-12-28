<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="{{asset('admin')}}/css/syngentaFilter.css" />
  </head>
  <body>
    <div class="container">
      <div class="heading">
        <a  href="{{route('home')}}">
            <img src="{{asset('admin')}}/asset/img/Syngenta_Logo 1.png" alt="" />
        </a>
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
          <tbody>
            <tr>
              <td>1.Lead Farmers Training on Stewardship</td>
              <td>15</td>
              <td>450</td>
              <td>Narshindi, Narangonj, Panchagar, Cumilla</td>
              <td>28 Feb 24, 15 Mar 24, 24 May 24, 2 Aug 24</td>
              <td class="actionflex">
                <img src="{{asset('admin')}}/asset/img/eye.png" alt="" />
                <img src="{{asset('admin')}}/asset/img/eyeicon.png" alt="" />
              </td>
            </tr>
            <tr>
              <td>1.Lead Farmers Training on Stewardship</td>
              <td>15</td>
              <td>450</td>
              <td>Narshindi, Narangonj, Panchagar, Cumilla</td>
              <td>28 Feb 24, 15 Mar 24, 24 May 24, 2 Aug 24</td>
              <td class="actionflex">
                <img src="{{asset('admin')}}/asset/img/eye.png" alt="" />
                <img src="{{asset('admin')}}/asset/img/eyeicon.png" alt="" />
              </td>
            </tr>
            <tr>
              <td>1.Lead Farmers Training on Stewardship</td>
              <td>15</td>
              <td>450</td>
              <td>Narshindi, Narangonj, Panchagar, Cumilla</td>
              <td>28 Feb 24, 15 Mar 24, 24 May 24, 2 Aug 24</td>
              <td class="actionflex">
                <img src="{{asset('admin')}}/asset/img/eye.png" alt="" />
                <img src="{{asset('admin')}}/asset/img/eyeicon.png" alt="" />
              </td>
            </tr>
            <tr>
              <td>1.Lead Farmers Training on Stewardship</td>
              <td>15</td>
              <td>450</td>
              <td>Narshindi, Narangonj, Panchagar, Cumilla</td>
              <td>28 Feb 24, 15 Mar 24, 24 May 24, 2 Aug 24</td>
              <td class="actionflex">
                <img src="{{asset('admin')}}/asset/img/eye.png" alt="" />
                <img src="{{asset('admin')}}/asset/img/eyeicon.png" alt="" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>

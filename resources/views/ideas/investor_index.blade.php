<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ideas Dashboard</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" href="{{asset('css/ideas/index.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="{{asset('scripts/dashboard.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body style="display:flex; min-height:100vh;">

    <div class="Wrapper" style="width: 100%; display:flex;">
        <div class="sidebar" id="sidebar">
          <header>Welcome,<br/>{{ auth()->user()->name }}</header>
          <ul>
            <li><a class="mt-5" href="{{ route('show-ideas') }}">Suggested Ideas</a></li>
            <li><a class="mt-5" href="{{ route('accepted-ideas') }}">Accepted Ideas</a></li>
            <li><a class="mt-5" href="{{ route('rejected-ideas') }}">Rejected Ideas</a></li>
            <li>
              <form action="{{ route('logout') }}" method="POST" style="display: inline" > 
                @csrf
                @method('POST')
                <button class="button" style="background: none; border: 0px;">
                  <a class="mt-5">Logout</a>
                </button>
              </form>
            </li>
          </ul>
        </div>

        <div class="main-view" style="width:100%; display:flex; flex-direction:column; justify-content:space-between">
          <nav class="navbar navbar-expand-lg navbar-light shadow-lg" style="height:70px">
            <div class="container-fluid">
              <button id="bar-button" style="margin-right:10px; background:transparent; border:none"><i class="fa-solid fa-bars"></i></button>
              <img src="images/logo.png" alt="" style="height:60px">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item custom-nav-item">
                 <button class="button-social-icons" id="button-icon-color-mail"><i class="fa-solid fa-envelope" id="icon-color-mail"></i></button>
                </li>
                <li class="nav-item custom-nav-item">
                   <button class="button-social-icons" id="button-icon-color-facebook"><i class="fa-brands fa-facebook-f" id="icon-color-facebook" ></i></button>
                 </li>
                <li class="nav-item custom-nav-item">
                  <button class="button-social-icons" id="button-icon-color-twitter"><i class="fa-brands fa-twitter" id="icon-color-twitter"></i></button>
                </li>
                <li class="nav-item custom-nav-item">
                 <button class="button-social-icons" id="button-icon-color-linkedin"><i class="fa-brands fa-linkedin" id="icon-color-linkedin"></i></button>
                </li>
              </ul>
            </div>
          </nav>

          <main style="padding:32px; display:flex; flex-direction:column; align-items:center;">
            @unless(count($ideas) == 0)
                <div class="container contain mt-5" id="datatable">
                    <table class="table table-striped table-bordered mt-5" id="dashboard">
                        <thead>

                          <tr>
                            <th scope="col">Idea</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Major Sector</th>
                            <th scope="col">Creation Date</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Actions</th>
                          </tr>

                        </thead>
                        <tbody>

                            @foreach ($ideas as $idea)
                              <tr>
                                <td><a href="{{ route('show-idea', $idea->id) }}">{{$idea->title}}</a></td>
                                <td>
                                  @foreach($idea->products as $product)
                                    {{ $product->name }}{{ $loop->last ? '' : ', ' }}
                                  @endforeach
                                </td>
                                <td>{{$idea->majorSector->name}}</td>
                                <td>{{$idea->created_at->format('Y-m-d')}}</td>
                                <td>{{$idea->expiry_date}}</td>
                                <td>
                                  <form action="{{ route('accept-idea', $idea->id) }}" method="POST" style="display: inline" > 
                                      @csrf
                                      <button class="button" style="background: none; border: 0px;">
                                          <span style="font-size: 1em; color: red;">
                                            <i class="fas fa-regular fa-2x fa-check" style="color: #36b300;"></i>
                                          </span>
                                      </button>
                                  </form>

                                  <form action="{{ route('reject-idea', $idea->id) }}" method="POST" style="display: inline" > 
                                      @csrf
                                      <button class="button" style="background: none; border: 0px;">
                                          <span style="font-size: 1em; color: red;">
                                            <i class="fas fa-light fa-2x fa-xmark" style="color: #d40202;"></i>
                                          </span>
                                      </button>
                                  </form>
                                </td>
                              </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            @else
                <p>No ideas found</p>
            @endunless
          </main>

          <footer class="bg-light text-center mt-5" style="position:sticky;">    
            <div class="text-center p-3 custom-footer">
              © 2023 Copyright&nbsp;:
              <a class="" href="#"> &nbsp;Investment App</a>
            </div>
          </footer>

        </div>
      </div>

      <script>
            const SidebarButton = document.getElementById('bar-button');
            const sidebar = document.getElementById('sidebar');
            const button = document.getElementById('button');
            SidebarButton.addEventListener('click', () => {
                const isSidebarVisible = sidebar.offsetWidth > 0;
                if (isSidebarVisible) {
                    sidebar.style.width = '0';
                    button.style.visibility = 'hidden';
                } else {
                    sidebar.style.width = '280px';
                    button.style.visibility = 'visible';
                }
            });
      </script>

</body>

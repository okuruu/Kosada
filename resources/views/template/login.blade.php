<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
    <link href="{{ asset('adminator/assets/style.css') }}" rel="stylesheet">
  </head>
  <body class="app">
    <div id='loader'>
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("https://hariannusantara.com/wp-content/uploads/2019/06/gambar-pemandangan-pegunungan1.jpg")'>
        <div class="pos-a centerXY">
          <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
            <img class="pos-a centerXY" src="assets/static/images/logo.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>

        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="form-group">
            <label class="text-normal text-dark">Username</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="text-normal text-dark">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer">
                <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                  <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                  <label for="inputCall1" class=" peers peer-greed js-sb ai-c">
                    <span class="peer peer-greed">Remember Me</span>
                  </label>
                </div>
              </div>
              <div class="peer">
                <button class="btn btn-primary">Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="{{ asset('adminator/assets/vendor.js') }}"></script>
    <script src="{{ asset('adminator/assets/bundle.js') }}"></script>
    <script src="{{ asset('adminator/assets/rocket-loader.min.js') }}"></script>
  </body>
</html>

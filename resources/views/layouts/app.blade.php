<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?>
  </script>
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
              <!-- {{ config('app.name') }} -->
              <img src="{{ config('app.logo') }}" />
            </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
              &nbsp;
            </ul>

            <ul class="nav navbar-nav">
              <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
              <li><a href="{{ url('/products') }}">Products</a></li>
              @if (Auth::user())
              <li><a href="{{ url('/purchase/1') }}">Purchase</a></li>
              <li><a href="{{ url('/history', Auth::user()->id) }}">Purchase History</a></li>
              <!-- <li><a href="/purchases/{{ Auth::user()->id }}">Purchase History</a></li> -->
              @endif
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
              @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="/profile/{{ Auth::user()->id }}">Profile</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
  </div>

  <!-- Scripts -->
  <script src="/js/app.js"></script>
  <script src="/js/all.js"></script>
  @if (Request::is('purchase/*'))
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script>
    $(function() {
      var dateFormat = "dd/mm/yy",
          productPrice = $('#productPrice').val(),
          start = $('#start').on('change', function() {

          })
    })
    $('#datepicker').datepicker({
      format: "dd/mm/yy",
      weekStart: 1,
      todayBtn: "linked",
      autoclose: true,
      todayHighlight: true,
      startDate: '0',
      endDate: '+30d',
    })
  </script>
  <script>
  $( function() {
    var dateFormat = "dd/mm/yy",
    productPrice = $('#productPrice').val();
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          setDate: new Date().toString(),
          changeMonth: true,
          changeYear: false,
          minDate: 0,
          dateFormat: dateFormat,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
          getDays();
        }),
    to = $( "#to" )
      .datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        changeYear: false,
        minDate: 0,
        dateFormat: dateFormat,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
        getDays();
      });

    function getDate( element ) {
      var date;
      try { date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) { date = null; }
      return date;
    }

    function getDays() {
      var days = Math.ceil( ($('#to').datepicker('getDate') - $('#from').datepicker('getDate')) / (1000 * 60 * 60 * 24));
      days = (days > 0 ? days + 1 : 1);
      console.log(days);
      $('#totalPrice').val(productPrice * days);
    }
  } );
  </script>
  @endif

  <!-- Dev livereload -->
  @if ( Config::get('app.debug') )
  <script type="text/javascript">
    document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
  </script>
  @endif
</body>
</html>

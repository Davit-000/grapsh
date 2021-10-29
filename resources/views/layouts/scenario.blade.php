<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scenario</title>
  <link
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
    crossorigin="anonymous"
    rel="stylesheet"
  >
  <link
    href="{{asset('css/plugins.bundle.css')}}"
    rel="stylesheet"
  >
  <link
    href="{{asset('css/prismjs.bundle.css')}}"
    rel="stylesheet"
  >
  <link
    href="{{asset('css/style.bundle.css')}}"
    rel="stylesheet"
  >
  <style>
    body {
      position: relative;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a id="brand" class="navbar-brand" href="{{route('welcome')}}">Navbar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="home-link" class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          <a id="about-link" class="nav-link active" aria-current="page" href="{{route('about')}}">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  @yield('content')
</div>

{{--<script--}}
{{--  src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"--}}
{{--  crossorigin="anonymous"--}}
{{--></script>--}}
{{--<script--}}
{{--  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"--}}
{{--  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"--}}
{{--  crossorigin="anonymous"--}}
{{--></script>--}}
{{--<script--}}
{{--  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"--}}
{{--  integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"--}}
{{--  crossorigin="anonymous"--}}
{{--></script>--}}
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<script src="{{asset('js/plugins.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/prismjs.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/scripts.bundle.js')}}" type="text/javascript"></script>

<!--<script src="../src/scenario.js" type="text/javascript"></script>-->
<script src="{{asset('js/scenario.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  describe('test', function () {
    let driver = new Builder().forBrowser('firefox').build();

    it('test', async function () {
      // await driver.open('/ui-scenario/pages/index.html');
      await driver.findElement(By.id("home-link")).open('/');
      await driver.findElement(By.css(".dropdown.bootstrap-select.form-control")).click('desc \"click\"');
      // await driver.findElement(By.id("kt_datepicker_1")).sendKeys('enter your region.');
      // await driver.findElement(By.id("posts-ul")).click('test hint');
      // await driver.findElement(By.css(".btn.btn-primary")).click('click button');
      // await driver.findElement(By.id("region")).sendKeys('enter your region.');

      await driver.findElement(By.id("about-link")).redirect('/about');
      await driver.findElement(By.id("title")).click();
      await driver.findElement(By.id("button-primary")).click('click on primary button');

      await driver.run();
    });
  });
</script>
@yield('script')
</body>
</html>

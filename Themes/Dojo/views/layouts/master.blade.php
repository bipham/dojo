<!DOCTYPE html>
<html lang="en">
  @include('partials/head')
  <body>
      <noscript>Your script is turn off. Turn it on browser setting</noscript>
        <div id="app">
          @include('partials/header')
          <div class="main-content has-background-color" data-background-color="#f2f2f2">
            
          </div><!--end main-content-->
          @include('partials/footer')
      </div>

      @include('partials/script')
      @yield('scripts')
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="main" onload="document.body.style.visibility=`visible`;">
    <script>
        document.body.style.visibility=`hidden`;
      </script>
    
        @include('layouts.mobile')
        @include('layouts.navbar')
        <div class="wrapper">
          <div class="wrapper-box">
            @include('layouts.aside')
            
          @yield('content')
          </div>
        </div>
          
        </div>
        <div data-url="#"
          class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
          <button class="dark-mode-switcher">Change Theme</button>
        </div>

        <script src="{{ asset('dist/js/app.js') }}"></script>
        <script>
            const themeSwitcher = document.querySelector('.dark-mode-switcher');
          const htmlEl = document.querySelector('html');
          const currentTheme = localStorage.getItem('theme') || 'dark';
          htmlEl.classList.add(currentTheme);
      
          window.addEventListener('load', () => {
            if (currentTheme === 'dark') {
              htmlEl.classList.add('dark');
              htmlEl.classList.remove('light');
            } else {
              htmlEl.classList.add('light');
              htmlEl.classList.remove('dark');
            }
          });
      
          const buttonEl = themeSwitcher.querySelector('button');
          if (currentTheme === 'dark') {
            buttonEl.textContent = 'Light Mode';
          } else {
            buttonEl.textContent = 'Dark Mode';
          }
      
          themeSwitcher.addEventListener('click', () => {
            htmlEl.classList.toggle('dark');
            htmlEl.classList.toggle('light');
      
            const newTheme = htmlEl.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', newTheme);
      
          
            if (htmlEl.classList.contains('dark')) {
              buttonEl.textContent = 'Light Mode';
            } else {
              buttonEl.textContent = 'Dark Mode';
            }
          });
          </script>

<script>
  const sideMenuLinks = document.querySelectorAll('.side-menu');

    sideMenuLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('side-menu--active');
        }
    })
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>
</html>
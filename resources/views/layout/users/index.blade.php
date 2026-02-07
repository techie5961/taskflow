<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png?v=1.1') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg?v=1.1') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico?v=1.1') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1.1') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1.1') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
      :root{
        --primary-brighter:aqua;
        --primary-bright:blue;
        --gradient:linear-gradient(to right,aqua,blue);
        --gradient-text:white;
      
      }
      .nav-profile{
        background-color: var(--bg);
background-color: #cccccc;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 1200'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='0' y2='100%25' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23f5f5f5'/%3E%3Cstop offset='0.02' stop-color='%23cccccc'/%3E%3Cstop offset='0.02' stop-color='%23c3c3c3'/%3E%3Cstop offset='0.032' stop-color='%23cccccc'/%3E%3Cstop offset='0.032' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.056' stop-color='%23cccccc'/%3E%3Cstop offset='0.056' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.07' stop-color='%23cccccc'/%3E%3Cstop offset='0.07' stop-color='%23a0a0a0'/%3E%3Cstop offset='0.1' stop-color='%23cccccc'/%3E%3Cstop offset='0.1' stop-color='%23e7e7e7'/%3E%3Cstop offset='0.126' stop-color='%23cccccc'/%3E%3Cstop offset='0.126' stop-color='%23bababa'/%3E%3Cstop offset='0.142' stop-color='%23cccccc'/%3E%3Cstop offset='0.142' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.159' stop-color='%23cccccc'/%3E%3Cstop offset='0.159' stop-color='%23b0b0b0'/%3E%3Cstop offset='0.17' stop-color='%23cccccc'/%3E%3Cstop offset='0.17' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.197' stop-color='%23cccccc'/%3E%3Cstop offset='0.197' stop-color='%23b5b5b5'/%3E%3Cstop offset='0.218' stop-color='%23cccccc'/%3E%3Cstop offset='0.218' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.239' stop-color='%23cccccc'/%3E%3Cstop offset='0.239' stop-color='%23cecece'/%3E%3Cstop offset='0.254' stop-color='%23cccccc'/%3E%3Cstop offset='0.254' stop-color='%23cecece'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.283' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23cccccc'/%3E%3Cstop offset='0.294' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.305' stop-color='%23cccccc'/%3E%3Cstop offset='0.305' stop-color='%234e4e4e'/%3E%3Cstop offset='0.332' stop-color='%23cccccc'/%3E%3Cstop offset='0.332' stop-color='%23909090'/%3E%3Cstop offset='0.346' stop-color='%23cccccc'/%3E%3Cstop offset='0.346' stop-color='%23c5c5c5'/%3E%3Cstop offset='0.362' stop-color='%23cccccc'/%3E%3Cstop offset='0.362' stop-color='%23979797'/%3E%3Cstop offset='0.381' stop-color='%23cccccc'/%3E%3Cstop offset='0.381' stop-color='%23c2c2c2'/%3E%3Cstop offset='0.415' stop-color='%23cccccc'/%3E%3Cstop offset='0.415' stop-color='%23a8a8a8'/%3E%3Cstop offset='0.428' stop-color='%23cccccc'/%3E%3Cstop offset='0.428' stop-color='%23525252'/%3E%3Cstop offset='0.442' stop-color='%23cccccc'/%3E%3Cstop offset='0.442' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.456' stop-color='%23cccccc'/%3E%3Cstop offset='0.456' stop-color='%23a9a9a9'/%3E%3Cstop offset='0.498' stop-color='%23cccccc'/%3E%3Cstop offset='0.498' stop-color='%23dfdfdf'/%3E%3Cstop offset='0.511' stop-color='%23cccccc'/%3E%3Cstop offset='0.511' stop-color='%23cecece'/%3E%3Cstop offset='0.532' stop-color='%23cccccc'/%3E%3Cstop offset='0.532' stop-color='%23cecece'/%3E%3Cstop offset='0.541' stop-color='%23cccccc'/%3E%3Cstop offset='0.541' stop-color='%23bababa'/%3E%3Cstop offset='0.56' stop-color='%23cccccc'/%3E%3Cstop offset='0.56' stop-color='%23f0f0f0'/%3E%3Cstop offset='0.581' stop-color='%23cccccc'/%3E%3Cstop offset='0.581' stop-color='%23aaaaaa'/%3E%3Cstop offset='0.6' stop-color='%23cccccc'/%3E%3Cstop offset='0.6' stop-color='%23d7d7d7'/%3E%3Cstop offset='0.618' stop-color='%23cccccc'/%3E%3Cstop offset='0.618' stop-color='%23cacaca'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.656' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23cccccc'/%3E%3Cstop offset='0.679' stop-color='%23ababab'/%3E%3Cstop offset='0.689' stop-color='%23cccccc'/%3E%3Cstop offset='0.689' stop-color='%23d1d1d1'/%3E%3Cstop offset='0.720' stop-color='%23cccccc'/%3E%3Cstop offset='0.720' stop-color='%23bbbbbb'/%3E%3Cstop offset='0.734' stop-color='%23cccccc'/%3E%3Cstop offset='0.734' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.748' stop-color='%23cccccc'/%3E%3Cstop offset='0.748' stop-color='%236b6b6b'/%3E%3Cstop offset='0.764' stop-color='%23cccccc'/%3E%3Cstop offset='0.764' stop-color='%23989898'/%3E%3Cstop offset='0.788' stop-color='%23cccccc'/%3E%3Cstop offset='0.788' stop-color='%23dcdcdc'/%3E%3Cstop offset='0.808' stop-color='%23cccccc'/%3E%3Cstop offset='0.808' stop-color='%238f8f8f'/%3E%3Cstop offset='0.831' stop-color='%23cccccc'/%3E%3Cstop offset='0.831' stop-color='%23cbcbcb'/%3E%3Cstop offset='0.856' stop-color='%23cccccc'/%3E%3Cstop offset='0.856' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.872' stop-color='%23cccccc'/%3E%3Cstop offset='0.872' stop-color='%23c7c7c7'/%3E%3Cstop offset='0.894' stop-color='%23cccccc'/%3E%3Cstop offset='0.894' stop-color='%23c8c8c8'/%3E%3Cstop offset='0.914' stop-color='%23cccccc'/%3E%3Cstop offset='0.914' stop-color='%23c0c0c0'/%3E%3Cstop offset='0.942' stop-color='%23cccccc'/%3E%3Cstop offset='0.942' stop-color='%23cdcdcd'/%3E%3Cstop offset='0.957' stop-color='%23cccccc'/%3E%3Cstop offset='0.957' stop-color='%237f7f7f'/%3E%3Cstop offset='0.973' stop-color='%23cccccc'/%3E%3Cstop offset='0.973' stop-color='%23cdcdcd'/%3E%3Cstop offset='1' stop-color='%23cccccc'/%3E%3Cstop offset='1' stop-color='%23e6e6e6'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' x='0' y='0' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
color:black;
}
/* body{
  
   background-color: var(--bg);
  
 
} */
div.menu.active svg.menu.open{
    display:none;
}
  
div.menu svg.menu.close{
    display:none;
}
div.menu.active svg.menu.close{
    display:flex;
}
  body{
  background-color:var(--bg);
  color:var(--text);
  position: relative;

  
  }
  body main,body footer{
    position:relative;
    z-index:200;
  }
  body::before{
    content:'';
    height:200px;
    aspect-ratio:1;
    position:absolute;
    top:5%;
    left:10%;
    background:var(--primary-light);
    border-radius:50%;
    filter:blur(100px);
    z-index:100;
  }
   .hero-title{
            font-size:2rem;
            font-weight:900;
            text-align: center;
            background:var(--gradient);
           color:transparent;
            background-clip:text;
            -webkit-background-clip: text;
        }
  .menu-icon{
    /* background:rgba(255,255,255,0.1); */
    color:rgba(255,255,255,0.7);
    border-radius:5px !important;
    
  }
  header{
    position:fixed;
    top:0;
    left:0;
    right:0;
    padding:10px;
    display:flex;
    flex-direction:row;
    align-items:center;
    gap:10px;
    z-index:4000;
    backdrop-filter:blur(50px);
    -webkit-backdrop-filter:blur(50px);
    border-bottom:1px solid rgba(255,255,255,0.05);

  }
  .pc-footer-links{
    display:none !important;
  }
  .mobile-footer-links{
    display:flex;
    flex-direction:column;
  }
 
  footer{
    border-top:1px solid var(--bg-lighter);
  }
  .payment-patners{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
    place-items:center;
  
  }
  .patner{
    background:var(--bg-light);
    border-radius:5px;
    padding:10px;
    width:fit-content !important;
  }
  section.nav{
    display:none;
    background:var(--bg);
    border-bottom:1px solid rgba(255,255,255,0.05);
  }
section.nav.active{
  display:flex;
  /* animation:opaq-in 0.5s ease forwards; */
}
/* @keyframes opaq-in{
  0%{
    opacity:0;
  }
  100%{
    opacity:1;
  }
} */
.mobile-nav.active{
 
  background:transparent;
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  background:rgba(0,0,0,0.5);
 z-index: 4100 !important;
}
.mobile-nav nav{
  padding:10px;
  width:70%;
  margin-left:auto;
  background:var(--bg);
  align-items: center;
  text-align:center;
  display:flex;
  flex-direction:column;
  padding-top:70px;
  
}
.mobile-nav.active nav{
  animation:animate-in 0.5s ease forwards;
  border-left:1px solid rgba(255,255,255,0.1)
}
@keyframes animate-in{
  0%{
    transform: translateX(100%);
  }
  100%{
    transform: translateX(0);
  }
}
.mobile-nav a{
 
  width:100% !important;
  border-radius:0 !important;
  padding:10px;
  font-weight:500;
  user-select: none;
  width:fit-content !important;
  font-size:1.3rem;
}
.mobile-nav nav a:last-of-type{
  border-bottom:none;
}
.mobile-nav svg{
  height:20px;
  width:20px;

}
.pc-nav svg{
  height:20px;
  width:20px;

}
.pc-nav a{
  font-weight:500;
 white-space: nowrap;
 user-select:none;
}
body:has(.mobile-nav.active){
  overflow:hidden;
}
   @media(min-width:800px){
    .mobile-footer-links{
      display:none !important;
    }
    .pc-footer-links{
    display:grid !important;
    grid-template-columns: repeat(6,1fr);
    gap:10px;
    
  }

    .pc-footer-links a{
      padding:5px 20px;
      background:var(--bg-light) !important;
      border:1px solid var(--bg-lighter);
      display:flex;
      align-items:center;
      justify-content:center;
    

    }
    .payment-patners{
      padding-left:15vw;
      padding-right:15vw;
    }
    section.mobile-nav{
      display:none;
    }
   }
  
    
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
   @include('components.sections',[
    'action_loader' => true
  ])
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg fill="currentColor" width="100" height="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_g88x" begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="0;spinner_yOmw.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="0;spinner_yOmw.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z" transform="translate(12, 12) scale(0)"><animateTransform id="spinner_yOmw" begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" type="translate" dur="1.2s" values="12 12;0 0" keySplines=".52,.6,.25,.99"/><animateTransform begin="spinner_g88x.begin+0.6s" attributeName="transform" calcMode="spline" additive="sum" type="scale" dur="1.2s" values="0;1" keySplines=".52,.6,.25,.99"/><animate begin="spinner_g88x.begin+0.6s" attributeName="opacity" calcMode="spline" dur="1.2s" values="1;0" keySplines=".52,.6,.25,.99"/></path></svg>
</div>
 <header>
       
        <img  onclick="window.location.href='{{ url('/') }}'" src="{{ config('settings.site_logo') }}" alt="Logo" class="h-50 pc-pointer">
         <div onclick="
      
       
        document.querySelector('section.nav').classList.add('active');
       

            " class="h-40 m-left-auto menu-icon menu w-40 column pc-display-none justify-center circle p-10">
          
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"></path></svg>

   
        </div>
       
        {{-- PC NAV --}}
    <div class="row pc-nav m-left-auto mobile-display-none align-center g-10">
        {{-- NEW NAV LINK --}}
            <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-white" href="{{ url('/') }}">
            
              <span class="m-top-auto">  Home</span>
            </a>
            {{-- NEW NAV LINK --}}
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-inherit">
             

              <span class="m-top-auto"> About Us</span>
            </a>
           {{-- NEW NAV LINK --}}
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          
     
              <span class="m-top-auto"> Terms of Service</span>
            </a>
            {{-- NEW NAV LINK --}}
              <a href="{{ url('/earners/top') }}" class="w-full display-none clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
             


              <span class="m-top-auto">Top Earners</span>
            </a>
          @if (!Auth::guard('users')->check())
                <a href="{{ url('/login') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
                
              <span class="m-top-auto"> Login</span>
            </a>
          @else
                <a href="{{ url('/users/dashboard') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
         

              <span class="m-top-auto"> Dashboard</span>
            </a>
          @endif
    </div>
    </header>
    {{-- MOBILE NAV --}}
     <section onclick="this.classList.remove('active')" class="nav mobile-nav">
        <nav onclick="event.stopPropagation()" class="c-white">
          {{-- NEW NAV LINK --}}
            <a class="w-full clip-10 br-10 bold p-10 font-1 w-full g-5 row align-center no-u c-white" href="{{ url('/') }}">
            

              <span class="m-top-auto">  Home</span>
            </a>
            {{-- NEW NAV LINK --}}
            <a href="{{ url('/about') }}" class="w-full clip-10 br-10 g-5 bold p-10 font-1 w-full row align-center no-u c-inherit">
            

              <span class="m-top-auto"> About Us</span>
            </a>
            {{-- NEW NAV LINK --}}
           
              <a href="{{ url('/terms') }}" class="w-full clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
          

     
              <span class="m-top-auto"> Terms of Service</span>
            </a>
           {{-- NEW NAV LINK --}}
              <a href="{{ url('/earners/top') }}" class="w-full display-none clip-10 br-10 bold g-5 p-10 font-1 w-full row align-center no-u c-inherit">
            
               


              <span class="m-top-auto">Top Earners</span>
            </a>
            <div class="column w-full g-10">
              <div onclick="window.location.href='{{ url('login') }}'" style="background:rgba(255,255,255,0.04);font-size:1.3rem;border:1px solid rgba(2255,255,255,0.1)" class="w-full pointer h-50 br-1000 p-10 row align-center justify-center">Login</div>
       
        <div onclick="window.location.href='{{ url('register') }}'" style="background:var(--primary-light);color:var(--primary-text);font-size:1.3rem;" class="w-full h-50 br-1000 pointer p-10 row align-center justify-center">Sign Up for free</div>
       
            </div>
        </nav>
    </section>
    
    
    <main class="p-10 pc-x-padding c-inherit">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg-secondary-dark">@yield('slideup_child')</div>
</section>
    </main>
   <footer class="w-full pc-align-center c-white bg p-10 column g-10">
   <img src="{{ config('settings.site_logo') }}" alt="" class="grid-full w-100 pc-m-x-auto">
   <span class="font-1 opacity-07 grid-full">
   Earn money completing simple social media tasks. Join thousands of taskers worldwide.
</span>

 <div class="mobile-footer-links g-5">
    <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 p-y-5 w-fit">Quick LInks</strong>
   

 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>

 <a href="{{ url('terms') }}" class="no-u c-white">Terms of Service</a>

 <a href="{{ url('register') }}" class="no-u c-white">Get Started</a>
 <a href="{{ url('login') }}" class="no-u c-white">Sign In</a>
 
 </div>

 <div class="pc-footer-links g-5">
  
    <strong style="border-bottom:2px solid var(--primary-bright)" class="font-1 grid-full p-y-5 w-fit">Quick LInks</strong>
   

 <a href="{{ url('about') }}" class="no-u c-white">About Us</a>

 <a href="{{ url('terms') }}" class="no-u c-white">Terms of Service</a>

 <a href="{{ url('register') }}" class="no-u c-white">Get Started</a>
 <a href="{{ url('login') }}" class="no-u c-white">Sign In</a>
 
 </div>

 <hr style="background:rgba(255,255,255,0.1)" class="grid-full">
 <div class="w-full align-center grid-full text-center column justify-center">
  
     <span class="font-1" >Built & Designed by <a style="color:var(--primary-brighter)" href="https://wa.me/+2349013350351">Techie Innovations</a></span>
 </div>
</footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script class="js">
      window.addEventListener('load',()=>{
        try{
          // restyle
          document.querySelector('main').style.paddingTop=document.querySelector('header').getBoundingClientRect().height + 10 + 'px';
            document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
        // document.querySelector('section.nav').style.top=document.querySelector('header').offsetHeight + 'px';
     
        }catch(error){
          alert(error.stack)
        }
       });

    </script>
    @yield('js')
</body>
</html>
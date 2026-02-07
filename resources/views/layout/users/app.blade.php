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
      
      .nav-profile{
        background-color:inherit;


}
 body{
  
   background-color: var(--bg);

  
}
header{
  border-bottom:1px solid rgba(255,255,255,0.1);
   background:rgba(255,255,255,0.01) !important;
    backdrop-filter: blur(50px);
  -webkit-backdrop-filter: blur(50px);
 
}
.nav{
  background:rgba(0,0,0,0.7);
  background:var(--bg);
  color:var(--text) !important;
  --text-color:var(--text);
     backdrop-filter: blur(50px);
  -webkit-backdrop-filter: blur(50px);
  
}
nav .nav{
  scrollbar-width: none;
  -webkit-scrollbar-width:none;
  padding:20px !important;
  border:none;
  border-left:1px solid rgba(255,255,255,0.1)
}
.nav-link{
  color:var(--text-color) !important;
}
*{
  scrollbar-width: none !important;
   -webkit-scrollbar-width:none;
}
a.searchable:hover{
  background:rgba(255,255,255,0.1);
}
footer{
  background:rgba(255,255,255,0.01) !important;
  position:fixed;
  bottom:0;
  left:0;
  right:0;
  /* border-top:1px solid var(--primary) !important; */
  
}
footer .child{
  display:grid;
  grid-template-columns: repeat(4,1fr);
  /* background:var(--primary-transparent); */
  backdrop-filter: blur(50px);
  -webkit-backdrop-filter: blur(50px);
 
  padding:5px;
  gap:5px;
  border:1px solid rgba(255,255,255,0.1)

}
footer .child .f-links{
  width:100%;
  border-radius:1000px;
  transition: all 0.5s ease ;
  user-select:none;
  
}

.menu-icon{
  height:40px;
  width:40px;
  border-radius:50%; 
  /* background:var(--primary) !important; */
  color:rgba(255,255,255,0.7) !important;
  margin-left:auto;

}
.nav-link{
  gap:20px !important;
}
.icon-group{
  color:var(--primary-light)
}
.variant-bg{
  position:relative;
  overflow:hidden;
 

}
.variant-bg::before{
  content:'';
  position:absolute;
  top:10%;
  left:10px;
  height:40%;
  aspect-ratio:1;
  z-index:10;
  background:var(--primary);
  filter:blur(70px);
  --webkit-filter:blur(70px);

}
.variant-bg .content{
  position: relative;
  z-index:20;
}
.nav-link{
  gap:20px !important;
}
nav{
  padding:0 !important;

}
nav .nav{
  padding:0 !important;
  margin-left:auto !important;
}

      @media(min-width:800px){
        nav{
            width:30%;
           
        }
        nav section.nav{
            width:100%;
            border-right:1px solid var(--bg)
        }
        main,footer,header{
            width:calc(100% - 30%) !important;
           
            margin-left:30%;
        }
      }
      header{
        left:30% !important;
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
  <header style="z-index:3000" class="pos-sticky average c-white bg p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
       <img src="{{ config('settings.site_logo') }}" alt="Logo" class="h-50 pc-pointer" onclick="window.location.href='{{ url('/') }}'">
         
         <div onclick="
            document.querySelector('nav').classList.remove('mobile-display-none');
             document.querySelector('nav section.nav').classList.add('animation-trans-in-from-right');
             document.body.classList.add('overflow-hidden');
            

            " class="h-40 w-40 column pc-display-none justify-center circle p-10 menu-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"></path></svg>

   
        </div>
      </header>
    {{-- NAV SECTION POSITIONED FIXED WITH TRANSPARENT BACKGROUND--}}
   <nav style="z-index:4000" onclick="
    this.querySelector('section.nav').classList.remove('animation-trans-in-from-right');
    this.classList.add('mobile-display-none');
    document.body.classList.remove('overflow-hidden');
  
    " class="pos-fixed mobile-display-none border-right-1 border-color-dim high top-0 left-0 right-0 bottom-0 bg-black-transparent average">
        {{-- NAV CHILD SECTION --}}
        <section onclick="event.stopPropagation()" class="nav transition-ease-half overflow-auto column h-full w-semi-full">
            {{-- NAV PROFILE SECTION --}}
          {{-- <div class="nav-profile z-index-1000 pos-sticky stick-top w-full column g-10 p-20">
              <img src="{{ asset('favicon/logo.png?v=1.3') }}" alt="" class="w-half">
              <div style="border:0.1px solid var(--bg-lighter)" class="cont bg-light w-full h-40 row align-center">
                <input oninput="
                  let searchable=document.querySelectorAll('.searchable');
                  searchable.forEach((data)=>{
                  let text=(data.innerText).toLowerCase();
                  let regex=new RegExp((this.value).toLowerCase(),'i');
                  if(regex.test(text)){
                  data.classList.remove('display-none');
                  }else{
                   data.classList.add('display-none');
                  }
                  })
                  " placeholder="Search menu....." type="search" class="w-full h-full border-none bg-transparent">
              </div>
             
            </div> --}}
            <div style="border-bottom: 1px solid rgba(255,255,255,0.1)" class="w-full no-select align-center row g-10 space-between p-20">
               <strong class="desc">Menu</strong>
              <span onclick="
    this.closest('nav').querySelector('section.nav').classList.remove('animation-trans-in-from-right');
    this.closest('nav').classList.add('mobile-display-none');
    document.body.classList.remove('overflow-hidden');
  
    " class="desc">&times;</span>
            </div>
            <div class="nav-links flex-auto p-10 bg-inherit w-full column">
              {{-- NEW NAV LINK --}}
                <a class="p-10 nav-link searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                   <div class="icon-group">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M222.14,105.85l-80-80a20,20,0,0,0-28.28,0l-80,80A19.86,19.86,0,0,0,28,120v96a12,12,0,0,0,12,12h64a12,12,0,0,0,12-12V164h24v52a12,12,0,0,0,12,12h64a12,12,0,0,0,12-12V120A19.86,19.86,0,0,0,222.14,105.85ZM204,204H164V152a12,12,0,0,0-12-12H104a12,12,0,0,0-12,12v52H52V121.65l76-76,76,76Z"></path></svg>
                 </div>


                  <span class="font-1">Dashboard</span>
                 </a>
              
              
                  {{-- NEW NAV LINK --}}
                 <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/tasks') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                 <div class="icon-group">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M228.75,100.05c-3.52-3.67-7.15-7.46-8.34-10.33-1.06-2.56-1.14-7.83-1.21-12.47-.15-10-.34-22.44-9.18-31.27s-21.27-9-31.27-9.18c-4.64-.07-9.91-.15-12.47-1.21-2.87-1.19-6.66-4.82-10.33-8.34C148.87,20.46,140.05,12,128,12s-20.87,8.46-27.95,15.25c-3.67,3.52-7.46,7.15-10.33,8.34-2.56,1.06-7.83,1.14-12.47,1.21C67.25,37,54.81,37.14,46,46S37,67.25,36.8,77.25c-.07,4.64-.15,9.91-1.21,12.47-1.19,2.87-4.82,6.66-8.34,10.33C20.46,107.13,12,116,12,128S20.46,148.87,27.25,156c3.52,3.67,7.15,7.46,8.34,10.33,1.06,2.56,1.14,7.83,1.21,12.47.15,10,.34,22.44,9.18,31.27s21.27,9,31.27,9.18c4.64.07,9.91.15,12.47,1.21,2.87,1.19,6.66,4.82,10.33,8.34C107.13,235.54,116,244,128,244s20.87-8.46,27.95-15.25c3.67-3.52,7.46-7.15,10.33-8.34,2.56-1.06,7.83-1.14,12.47-1.21,10-.15,22.44-.34,31.27-9.18s9-21.27,9.18-31.27c.07-4.64.15-9.91,1.21-12.47,1.19-2.87,4.82-6.66,8.34-10.33C235.54,148.87,244,140.05,244,128S235.54,107.13,228.75,100.05Zm-17.32,39.29c-4.82,5-10.28,10.72-13.19,17.76-2.82,6.8-2.93,14.16-3,21.29-.08,5.36-.19,12.71-2.15,14.66s-9.3,2.07-14.66,2.15c-7.13.11-14.49.22-21.29,3-7,2.91-12.73,8.37-17.76,13.19C135.78,214.84,130.4,220,128,220s-7.78-5.16-11.34-8.57c-5-4.82-10.72-10.28-17.76-13.19-6.8-2.82-14.16-2.93-21.29-3-5.36-.08-12.71-.19-14.66-2.15s-2.07-9.3-2.15-14.66c-.11-7.13-.22-14.49-3-21.29-2.91-7-8.37-12.73-13.19-17.76C41.16,135.78,36,130.4,36,128s5.16-7.78,8.57-11.34c4.82-5,10.28-10.72,13.19-17.76,2.82-6.8,2.93-14.16,3-21.29C60.88,72.25,61,64.9,63,63s9.3-2.07,14.66-2.15c7.13-.11,14.49-.22,21.29-3,7-2.91,12.73-8.37,17.76-13.19C120.22,41.16,125.6,36,128,36s7.78,5.16,11.34,8.57c5,4.82,10.72,10.28,17.76,13.19,6.8,2.82,14.16,2.93,21.29,3,5.36.08,12.71.19,14.66,2.15s2.07,9.3,2.15,14.66c.11,7.13.22,14.49,3,21.29,2.91,7,8.37,12.73,13.19,17.76,3.41,3.56,8.57,8.94,8.57,11.34S214.84,135.78,211.43,139.34ZM176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51Z"></path></svg>

                   </div>

                 <span class="font-1"> Daily Tasks</span>
                </a>
              
             
                
                {{-- NEW NAV LINK --}}
                 <a class="p-10 searchable nav-link pointer align-center clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/bank/add') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
              <div class="icon-group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M24,108H44v48H32a12,12,0,0,0,0,24H224a12,12,0,0,0,0-24H212V108h20a12,12,0,0,0,6.29-22.22l-104-64a12,12,0,0,0-12.58,0l-104,64A12,12,0,0,0,24,108Zm44,0H92v48H68Zm72,0v48H116V108Zm48,48H164V108h24ZM128,46.09,189.6,84H66.4ZM252,208a12,12,0,0,1-12,12H16a12,12,0,0,1,0-24H240A12,12,0,0,1,252,208Z"></path></svg>




                   </div>
  <span class="font-1"> Payment Details</span>
                 </a>
                 {{-- NEW NAV LINK --}}

                  <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/withdraw') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                 <div class="icon-group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M228,144v64a12,12,0,0,1-12,12H40a12,12,0,0,1-12-12V144a12,12,0,0,1,24,0v52H204V144a12,12,0,0,1,24,0ZM96.49,80.49,116,61v83a12,12,0,0,0,24,0V61l19.51,19.52a12,12,0,1,0,17-17l-40-40a12,12,0,0,0-17,0l-40,40a12,12,0,1,0,17,17Z"></path></svg>





                   </div>
                  <span class="font-1">Withdraw Funds</span>
                 </a>
                 {{-- NEW NAV LINK --}}
                <a class="p-10 align-center searchable nav-link pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/transactions') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                     <div class="icon-group">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M228,128a12,12,0,0,1-12,12H116a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM116,76H216a12,12,0,0,0,0-24H116a12,12,0,0,0,0,24ZM216,180H116a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24ZM44,59.31V104a12,12,0,0,0,24,0V40A12,12,0,0,0,50.64,29.27l-16,8a12,12,0,0,0,9.36,22Zm39.73,96.86a27.7,27.7,0,0,0-11.2-18.63A28.89,28.89,0,0,0,32.9,143a27.71,27.71,0,0,0-4.17,7.54,12,12,0,0,0,22.55,8.21,4,4,0,0,1,.58-1,4.78,4.78,0,0,1,6.5-.82,3.82,3.82,0,0,1,1.61,2.6,3.63,3.63,0,0,1-.77,2.77l-.13.17L30.39,200.82A12,12,0,0,0,40,220H72a12,12,0,0,0,0-24H64l14.28-19.11A27.48,27.48,0,0,0,83.73,156.17Z"></path></svg>




                   </div>


                   <span class="font-1">
                     Transaction History
                   </span>
                </a>
              
              
                 {{-- NEW NAV LINK --}}
                    <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/team') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                   <div class="icon-group">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M125.18,156.94a64,64,0,1,0-82.36,0,100.23,100.23,0,0,0-39.49,32,12,12,0,0,0,19.35,14.2,76,76,0,0,1,122.64,0,12,12,0,0,0,19.36-14.2A100.33,100.33,0,0,0,125.18,156.94ZM44,108a40,40,0,1,1,40,40A40,40,0,0,1,44,108Zm206.1,97.67a12,12,0,0,1-16.78-2.57A76.31,76.31,0,0,0,172,172a12,12,0,0,1,0-24,40,40,0,1,0-10.3-78.67,12,12,0,1,1-6.16-23.19,64,64,0,0,1,57.64,110.8,100.23,100.23,0,0,1,39.49,32A12,12,0,0,1,250.1,205.67Z"></path></svg>





                   </div>


                <span class="font-1">My Referrals</span>
                 </a>
                 {{-- NEW NAV LINK --}}
              
                 
              
               
               
                 
                 
                 <a class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/more') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                      <div class="icon-group">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20ZM79.57,196.57a60,60,0,0,1,96.86,0,83.72,83.72,0,0,1-96.86,0ZM100,120a28,28,0,1,1,28,28A28,28,0,0,1,100,120ZM194,179.94a83.48,83.48,0,0,0-29-23.42,52,52,0,1,0-74,0,83.48,83.48,0,0,0-29,23.42,84,84,0,1,1,131.9,0Z"></path></svg>





                   </div>

                    <span class="font-1">  Profile</span>
                 </a>
                 {{-- NEW NAV LINK --}}
                  <a style="color:red !important;" class="p-10 searchable nav-link align-center pointer clip-10 w-full row g-5 no-u c-red"  onclick="
                  window.location.href='{{ url('users/logout') }}';
                  ">
                      <div class="icon-group">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M124,216a12,12,0,0,1-12,12H48a12,12,0,0,1-12-12V40A12,12,0,0,1,48,28h64a12,12,0,0,1,0,24H60V204h52A12,12,0,0,1,124,216Zm108.49-96.49-40-40a12,12,0,0,0-17,17L195,116H112a12,12,0,0,0,0,24h83l-19.52,19.51a12,12,0,0,0,17,17l40-40A12,12,0,0,0,232.49,119.51Z"></path></svg>





                   </div>

                    <span class="font-1">  Logout</span>
                 </a>
                




                 
                 

                 {{-- <a class="p-10 w-full bg-red pointer clip-10 pos-sticky justify-center m-top-auto stick-bottom w-full row g-5 no-u c-white" href="{{ url('users/logout') }}">
               


                  Logout
                 </a> --}}


            </div>

        </section>
    </nav>
    <main class="c-white">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" class="child bg">
    @yield('popup')
  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg">@yield('slideup_child')</div>
</section>
    </main>
    <footer style="z-index:3000;">
  <div class="child">
    {{-- NEW FOOTER LINK --}}
    <div onclick="
     let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/dashboard') }}')" class="column f-links home-nav g-2 pc-pointer align-center p-10 br-1000 clip-1000">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M222.14,105.85l-80-80a20,20,0,0,0-28.28,0l-80,80A19.86,19.86,0,0,0,28,120v96a12,12,0,0,0,12,12h64a12,12,0,0,0,12-12V164h24v52a12,12,0,0,0,12,12h64a12,12,0,0,0,12-12V120A19.86,19.86,0,0,0,222.14,105.85ZM204,204H164V152a12,12,0,0,0-12-12H104a12,12,0,0,0-12,12v52H52V121.65l76-76,76,76Z"></path></svg>

   <span>Home</span>


   </div>
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    
   
    spa(event,'{{ url('users/tasks') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column pc-pointer f-links w-full g-2 p-5 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228.75,100.05c-3.52-3.67-7.15-7.46-8.34-10.33-1.06-2.56-1.14-7.83-1.21-12.47-.15-10-.34-22.44-9.18-31.27s-21.27-9-31.27-9.18c-4.64-.07-9.91-.15-12.47-1.21-2.87-1.19-6.66-4.82-10.33-8.34C148.87,20.46,140.05,12,128,12s-20.87,8.46-27.95,15.25c-3.67,3.52-7.46,7.15-10.33,8.34-2.56,1.06-7.83,1.14-12.47,1.21C67.25,37,54.81,37.14,46,46S37,67.25,36.8,77.25c-.07,4.64-.15,9.91-1.21,12.47-1.19,2.87-4.82,6.66-8.34,10.33C20.46,107.13,12,116,12,128S20.46,148.87,27.25,156c3.52,3.67,7.15,7.46,8.34,10.33,1.06,2.56,1.14,7.83,1.21,12.47.15,10,.34,22.44,9.18,31.27s21.27,9,31.27,9.18c4.64.07,9.91.15,12.47,1.21,2.87,1.19,6.66,4.82,10.33,8.34C107.13,235.54,116,244,128,244s20.87-8.46,27.95-15.25c3.67-3.52,7.46-7.15,10.33-8.34,2.56-1.06,7.83-1.14,12.47-1.21,10-.15,22.44-.34,31.27-9.18s9-21.27,9.18-31.27c.07-4.64.15-9.91,1.21-12.47,1.19-2.87,4.82-6.66,8.34-10.33C235.54,148.87,244,140.05,244,128S235.54,107.13,228.75,100.05Zm-17.32,39.29c-4.82,5-10.28,10.72-13.19,17.76-2.82,6.8-2.93,14.16-3,21.29-.08,5.36-.19,12.71-2.15,14.66s-9.3,2.07-14.66,2.15c-7.13.11-14.49.22-21.29,3-7,2.91-12.73,8.37-17.76,13.19C135.78,214.84,130.4,220,128,220s-7.78-5.16-11.34-8.57c-5-4.82-10.72-10.28-17.76-13.19-6.8-2.82-14.16-2.93-21.29-3-5.36-.08-12.71-.19-14.66-2.15s-2.07-9.3-2.15-14.66c-.11-7.13-.22-14.49-3-21.29-2.91-7-8.37-12.73-13.19-17.76C41.16,135.78,36,130.4,36,128s5.16-7.78,8.57-11.34c4.82-5,10.28-10.72,13.19-17.76,2.82-6.8,2.93-14.16,3-21.29C60.88,72.25,61,64.9,63,63s9.3-2.07,14.66-2.15c7.13-.11,14.49-.22,21.29-3,7-2.91,12.73-8.37,17.76-13.19C120.22,41.16,125.6,36,128,36s7.78,5.16,11.34,8.57c5,4.82,10.72,10.28,17.76,13.19,6.8,2.82,14.16,2.93,21.29,3,5.36.08,12.71.19,14.66,2.15s2.07,9.3,2.15,14.66c.11,7.13.22,14.49,3,21.29,2.91,7,8.37,12.73,13.19,17.76,3.41,3.56,8.57,8.94,8.57,11.34S214.84,135.78,211.43,139.34ZM176.49,95.51a12,12,0,0,1,0,17l-56,56a12,12,0,0,1-17,0l-24-24a12,12,0,1,1,17-17L112,143l47.51-47.52A12,12,0,0,1,176.49,95.51Z"></path></svg>


   </div>
    <span class="transition-ease-full">Tasks</span>
   </div>
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
  f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/withdraw') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,144v64a12,12,0,0,1-12,12H40a12,12,0,0,1-12-12V144a12,12,0,0,1,24,0v52H204V144a12,12,0,0,1,24,0ZM96.49,80.49,116,61v83a12,12,0,0,0,24,0V61l19.51,19.52a12,12,0,1,0,17-17l-40-40a12,12,0,0,0-17,0l-40,40a12,12,0,1,0,17,17Z"></path></svg>





    </div>
    <span class="transition-ease-full">Withdraw</span>
   </div>
    
   
    
    <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
  f_links.forEach((data)=>{
   data.classList.remove('active')
   });
   this.classList.add('active');

    spa(event,'{{ url('users/more') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20ZM79.57,196.57a60,60,0,0,1,96.86,0,83.72,83.72,0,0,1-96.86,0ZM100,120a28,28,0,1,1,28,28A28,28,0,0,1,100,120ZM194,179.94a83.48,83.48,0,0,0-29-23.42,52,52,0,1,0-74,0,83.48,83.48,0,0,0-29,23.42,84,84,0,1,1,131.9,0Z"></path></svg>

  </div>
      <span class="transition-ease-full">Profile</span>
   </div>
   </div>
   
    </footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script>
window.onload=function(){
        document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
       
  let max_bottom=document.querySelector('footer').getBoundingClientRect().bottom;
 // document.querySelector('main').style.paddingBottom=max_bottom - document.querySelector('.home-nav').getBoundingClientRect().top + 'px'; 
 document.querySelector('main').style.paddingBottom=document.querySelector('footer .child').offsetHeight + 10 + 'px';
}
    </script>
    @yield('js')
</body>
</html>
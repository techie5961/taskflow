@extends('layout.users.app')
@section('title')
    Dashboard
@endsection
@section('css')
    <style class="css">
       
        .populate.shown .form{
            animation:opaq-in 0.5s ease forwards;
            
        }
        .affiliate-balance-div{
            background:var(--primary);
            position:relative;
        }
          .activities-balance-div{
            background:gold;
            position:relative;
            color:black;
        }
        .all-time-balance-div{
            background:var(--bg);
            position:relative;
            color:white;
            border:1px solid var(--primary);
        }
          .activities-balance-div .balance-name{
           
            color:#222;
        }
         .all-time-balance-div .balance-name{
           
            color:whitesmoke;
        }
        
      .rep-img{
            position:absolute;
            bottom:0;
            right:0;
        }
        .rep-img{
            height:150px;
            pointer-events:none;
            z-index:200;
        }
        .balance-divs{
            overflow: hidden;
            /* clip-path:inset(0 round 20px); */
        }
        .balance-divs .icon{
            background:rgba(0,0,255,0.2);
            color:blue;
            height:50px !important;
        }
        .balance-divs.affiliate-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:white;
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.activities-balance-div::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            background:rgb(119, 89, 14);
            filter:blur(50px);
            --webkit-filter:blur(50px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-divs.all-time-balance-div::after{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            background:var(--primary-light);
            filter:blur(100px);
            --webkit-filter:blur(100px);
            width:40%;
            height:40%;
            z-index:100;
        }
        .balance-name{
            color:silver;
        }
        .balance-divs .content{
            position:relative;
            z-index:300;
        }
        .balance-display.balance-hidden .balance{
            display:none !important;
        }
         .balance-display.balance-hidden .star{
            display:flex !important;
        }
        .balance-display.balance-shown .balance{
            display:flex !important;
        }
         .balance-display.balance-shown .star{
            display:none !important;
        }
        .balance-display.balance-hidden .hide-balance-text{
            display:none !important;
        }
        .balance-display.balance-hidden .show-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .hide-balance-text{
            display:flex !important;
        }
        .balance-display.balance-shown .show-balance-text{
            display:none !important;
        }
        .wallets{
            position:absolute;
            top:100%;
            height:20px;
        }
        .wallets.activities{
            background:gold;
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.affiliate{
            background:var(--primary);
            border-radius:0 0 10px 10px;
             left:5%;
            right:5%;
            z-index:200;
        }
        .wallets.all_time{
            background:rgb(108,92,230);
             border-radius:0 0 10px 10px;
              left:8%;
            right:8%;
             height:30px;
             z-index:100;
        }
       
        .chat-btn{
            width:100%;
            height:fit-content;
            background:linear-gradient(to top right,greenyellow,#4caf50,green);
            padding:10px;
            border:none;
            user-select:none;
            color:white;
            font-family:var(--font);
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            clip-path:inset(0 round 5px);
            border-radius:5px;
            gap:5px;
            cursor:pointer;
        }
         
        @keyframes opaq-in{
            0%{
                opacity:0;
                transform:scale(0.9)
            }
            100%{
                opacity:1;
                transform:scale(1);
            }
        }
        .promo-img{
            position:fixed;
            right:10px;
            height:70px;
            animation:breathe 2.5s ease infinite;

            
        }
        @keyframes breathe{
            0%{
                transform: scale(1)
            }
            50%{
                transform: scale(0.9)
            }
        }
        .total-balance-div{
            border-radius:20px !important;
            padding:20px !important;
            color:var(--primary-light)

        }
        .withdraw-btn{
            width:fit-content;
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            gap:5px;
            padding: 10px 30px;
            background:linear-gradient(to right,var(--primary-light,var(--primary)));
            border-radius:1000px;
            width:100%;
            color:var(--primary-text)
            
        }
        .history-btn{
            width:fit-content;
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            gap:5px;
            padding: 10px 30px;
            background:transparent;
            border-radius:1000px;
            color:white;
            border:1px solid rgba(255,255,255,0.1);
             width:100%;
            
        }
        .quick-link{
            max-width:100%;
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:10px;
            align-items:center;
            justify-content:center;
            height:100%;
            border-radius:20px;
            border:1px solid rgba(255,255,255,0.1);
            background:rgba(255,255,255,0.02)

        }
    </style>
@endsection
@section('main')
    <section class="column p-10 w-full g-10">
     <div class="w-full g-5 column">
        {{-- TOTAL BALANCE --}}
       <div class="pos-relative p-x-10 balance-houses w-full">
        {{-- BALANCE DIV --}}
        <div class="w-full  total-balance-div br-10  p-20 column no-select g-10 balance-divs all-time-balance-div">
        <div class="column align-center w-full content g-10">
              <span class="font-1">TOTAL BALANCE</span>
              <strong style="font-size: 2.5rem" >&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance + Auth::guard('users')->user()->activities_balance,2) }}</strong>
        <div class="w-full grid grid-2 row align-center justify-center g-10">
        {{-- WITHDRAW BUTTON --}}
            <div class="withdraw-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M196,136a16,16,0,1,1-16-16A16,16,0,0,1,196,136Zm40-36v80a32,32,0,0,1-32,32H60a32,32,0,0,1-32-32V60.92A32,32,0,0,1,60,28H192a12,12,0,0,1,0,24H60a8,8,0,0,0-8,8.26v.08A8.32,8.32,0,0,0,60.48,68H204A32,32,0,0,1,236,100Zm-24,0a8,8,0,0,0-8-8H60.48A33.72,33.72,0,0,1,52,90.92V180a8,8,0,0,0,8,8H204a8,8,0,0,0,8-8Z"></path></svg>
            <span>Withdraw</span>
        </div>
        {{-- HISTORY BUTTON --}}
          <div class="history-btn">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M236,137A108.13,108.13,0,1,1,119,20,12,12,0,0,1,121,44,84.12,84.12,0,1,0,212,135,12,12,0,1,1,236,137ZM116,76v52a12,12,0,0,0,12,12h52a12,12,0,0,0,0-24H140V76a12,12,0,0,0-24,0Zm92,20a16,16,0,1,0-16-16A16,16,0,0,0,208,96ZM176,64a16,16,0,1,0-16-16A16,16,0,0,0,176,64Z"></path></svg>
            <span>History</span>
        </div>
        </div>
            </div>

       </div>

       
       </div>
       {{-- BREAKDOWN BALANCE ROW --}}
       <div class="w-full row p-10 overflow-auto align-center g-10">
        {{-- ACTIVITIES/MAIN BALANCE --}}
        <div style="border:1px solid rgba(255,255,255,0.1);width:60%;background:rgba(255,255,255,0.02)" class="w-full p-20 align-center column g-5 br-10">
             <div class="row w-full">
                <div style="margin-left:auto;height:5px;width:5px;background:aqua;border-radius:50%;box-shadow:0 0 6px aqua"></div>
            </div>
            <span class="font-1 opacity-07">MAIN FUNDS</span>
            <strong style="font-size:1.5rem;">&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
        </div>
         {{-- AFFILIATE BALANCE --}}
        <div style="border:1px solid rgba(255,255,255,0.1);width:40%;background:rgba(255,255,255,0.02)" class="w-full p-20 align-center column g-5 br-10">
            <div class="row w-full">
                <div style="margin-left:auto;height:5px;width:5px;background:greenyellow;border-radius:50%;box-shadow:0 0 6px greenyellow"></div>
            </div>
            <span class="font-1 opacity-07">AFFILIATE FUNDS</span>
            <strong style="font-size:1.5rem;">&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
        </div>

       </div>
     

      
   
   
     </div>
{{-- MARGINALIZE --}}
    <div class="marginalize"></div>
     {{-- AFFILIATE LINK --}}
       <div class="w-full br-10 column align-center g-10 p-20" style="border:1px solid rgba(255,255,255,0.1)">
        <strong class="desc" style="color:var(--primary-light)">Refer & Earn</strong>
       <span style="opacity:0.7;">Tap the link to copy and share</span>
       {{-- LINK DIV --}}
       <div onclick="copy('{{ url('register/'.Auth::guard('users')->user()->username.'') }}')" class="w-full p-20 column g-10 align-center br-20" style="border:1px dashed rgba(255,255,255,0.1);background:rgba(255,255,255,0.05)">
        <div style="color:var(--primary-light)">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M216,28H88A12,12,0,0,0,76,40V76H40A12,12,0,0,0,28,88V216a12,12,0,0,0,12,12H168a12,12,0,0,0,12-12V180h36a12,12,0,0,0,12-12V40A12,12,0,0,0,216,28ZM156,204H52V100H156Zm48-48H180V88a12,12,0,0,0-12-12H100V52H204Z"></path></svg>
              </div>
               <span class="break-word text-center opacity-07">{{ url('register/'.Auth::guard('users')->user()->username.'') }}</span>
     

       </div>
        
       </div>
   {{-- QUICK LINKS --}}
       <strong class="desc p-left-20">Quick Links</strong>
       <section style="padding-top:5px;" class="grid quick-links p-10 grid-2 pc-grid-4 w-full place-center g-10">
      {{-- NEW QUICK LINK --}}
        <div onclick="spa(event,'{{ url('users/team') }}')" class="column g-10 br-10 justify-center w-full quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0,0,255,0.1);color:blue;" class=" h-70 w-70 br-20 justify-center column">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>


            </div>
            <strong>My Team</strong>
             <small style="opacity:0.5">View your referrals and downlines</small>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/transactions') }}')" class="column bg-light g-10 br-10 justify-center w-full quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(255,255,255, 0.1);color:rgb(255,255, 255);" class=" h-70 w-70 br-20 justify-center column">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M216,40H40A16,16,0,0,0,24,56V208a8,8,0,0,0,11.58,7.15L64,200.94l28.42,14.21a8,8,0,0,0,7.16,0L128,200.94l28.42,14.21a8,8,0,0,0,7.16,0L192,200.94l28.42,14.21A8,8,0,0,0,232,208V56A16,16,0,0,0,216,40ZM176,144H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Zm0-32H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Z"></path></svg>




            </div>
            <strong>Transactions</strong>
             <small style="opacity:0.5">View your transaction history</small>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="spa(event,'{{ url('users/tasks') }}')" class="column bg-light g-10 br-10 justify-center w-full quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(255, 0, 234, 0.1);color:rgb(255, 0, 221);" class=" h-70 w-70 br-20 justify-center column">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z"></path></svg>
           



            </div>
            <strong>Tasks</strong>
             <small style="opacity:0.5">Perform daily task and earn</small>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="window.open('{{ $social->advert_link }}')" class="column bg-light g-10 br-10 justify-center w-full quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(255, 215, 0, 0.1);color:rgb(255, 215, 0);" class=" h-70 w-70 br-20 justify-center column">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M160,32.25V223.69a8.29,8.29,0,0,1-3.91,7.18,8,8,0,0,1-9-.56l-65.57-51A4,4,0,0,1,80,176.16V79.84a4,4,0,0,1,1.55-3.15l65.57-51a8,8,0,0,1,10,.16A8.27,8.27,0,0,1,160,32.25ZM60,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H60a4,4,0,0,0,4-4V84A4,4,0,0,0,60,80Zm126.77,20.84a8,8,0,0,0-.72,11.3,24,24,0,0,1,0,31.72,8,8,0,1,0,12,10.58,40,40,0,0,0,0-52.88A8,8,0,0,0,186.74,100.84Zm40.89-26.17a8,8,0,1,0-11.92,10.66,64,64,0,0,1,0,85.34,8,8,0,1,0,11.92,10.66,80,80,0,0,0,0-106.66Z"></path></svg>



            </div>
            <strong>Place Advert</strong>
             <small style="opacity:0.5">Click to place advert with us</small>
           </div>
        </div>
         {{-- NEW QUICK LINK --}}
          <div onclick="window.open('{{ $social->whatsapp }}')" class="column bg-light g-10 br-10 justify-center w-full quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0, 255, 0, 0.1);color:rgb(0, 255, 0);" class=" h-70 w-70 br-20 justify-center column">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>



            </div>
            <strong>Whatsapp Group</strong>
             <small style="opacity:0.5">Click to join our whatsapp group</small>
           </div>
        </div>
        {{-- NEW QUICK LINK --}}
          <div onclick="window.open('{{ $social->telegram }}')" class="column bg-light g-10 br-10 justify-center w-full quick-link">
           <div class="column align-center content g-10">
             <div style="background:rgba(0, 255, 255, 0.1);color:rgb(0, 0, 255);" class=" h-70 w-70 br-20 justify-center column">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="40" width="40"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>




            </div>
            <strong>Telegram Group</strong>
             <small style="opacity:0.5">Click to join our telegram group</small>
           </div>
        </div>
        
       </section>

      
        
        <div style="border:1px solid var(--primary);margin-bottom:10px;" class="w-full display-none no-select m-x-auto align-center p-20 column g-5 br-10 p-10">
                <strong class="font-1 m-right-auto row">Join Our Community</strong>
                <span>Want to stay updated? Join our communities on WhatApp and Telegram to get latest updates and giveaways.</span>
           
       <div class="grid place-center m-left-auto w-full g-10 align-center">
        <div onclick="window.open('{{ $social->whatsapp }}')" class="bg-green g-5 align-center pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">
            Join our Whatsapp Group
          


        </div>
         <div onclick="window.open('{{ $social->telegram }}')" style="box-shadow:inset 0 0 20px navy;background:blue" class="bg-navy g-5 align-center pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">
            Join our Telegram Group
        


        </div>
       </div>
        </div>
    
       
    </section>
  @include('components.sections',[
    'populate' => true
  ])
  {{-- <img onclick="spa(event,'{{ url('users/referral/contest') }}')" src="{{ asset('images/IMG_1613.PNG') }}" class="promo-img" alt=""> --}}
@endsection
@section('popup')
    <div class="column p-10 g-10">
        <img src="{{ asset('banners/eb4c53bd-8a10-47f0-8570-a43582d1b9eb.jpeg') }}" alt="" class="w-full br-10">
    <div class=" bold text-center w-full">
        {!! nl2br($social->notification) !!}
         </div>
         <div class="w-full chat-btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>





                        <span>Join our Whatsapp Group</span>
         </div>
    </div>
@endsection
@section('js')
    <script class="js">
        // PopUp();
        window.MyFunc ={
           Style : function(){
           try{
            document.querySelectorAll('.balance-divs').forEach((div)=>{
            
                // div.style.minHeight=div.querySelector('.rep-img').getBoundingClientRect().height + 'px';
            })
            // document.querySelector('.promo-img').style.bottom=Math.abs(document.querySelector('footer').getBoundingClientRect().top - document.querySelector('footer').getBoundingClientRect().bottom) + 10 + 'px';
          //  alert(Math.abs(document.querySelector('footer').getBoundingClientRect().top - document.querySelector('footer').getBoundingClientRect().bottom) + 10 + 'px')
         //   alert(document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom)
            // document.querySelector('.marginalize').style.marginTop=Math.abs(document.querySelectorAll('.wallets')[0].getBoundingClientRect().top - document.querySelectorAll('.wallets')[document.querySelectorAll('.wallets').length - 1].getBoundingClientRect().bottom) + 'px' 
           

           }catch(error){
            alert(error.stack);
           }
           } ,
           Redeemed : function(response,event){
            let data=JSON.parse(response);
          
            document.querySelector('.prompt.' + data.status).innerHTML=(data.message).toUpperCase();
           document.querySelector('.prompt.' + data.status).classList.remove('display-none');
           if(data.status == 'success'){
            document.querySelector('.close-modal').onclick=function(){
                spa(event,'{{ url()->current() }}');
            }
           }else{
              document.querySelector('.close-modal').onclick=function(){
                document.querySelector('.populate').classList.add('display-none');
                 document.querySelector('.populate').classList.remove('shown');
            document.body.classList.remove('overflow-hidden')
            }
            
           }

           },
           CheckIn : async function(element){
           
            element.querySelector('.title').innerHTML='Claiming..';
           let response=await fetch('{{ url('users/get/daily/claim') }}');
           if(response.ok){
            let data=await response.json();
            CreateNotify(data.status,data.message);
            element.querySelector('.title').innerHTML='Daily Claim';

           }else{
            // CreateNotify('error',response.status);
            element.querySelector('.title').innerHTML='Daily Claim';
           }
           
           }
        }
        MyFunc.Style();
    </script>
@endsection
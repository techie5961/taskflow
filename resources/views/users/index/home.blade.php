@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:translateX(-50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:translateX(50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
          .observe.trans-from-bottom{
            animation:trans-from-bottom 2s ease forwards;
        }
        @keyframes trans-from-bottom{
            0%{
                opacity:0;
                transform:translateY(50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
                  .observe.trans-from-top{
            animation:trans-from-top 2s ease forwards;
        }
        @keyframes trans-from-top{
            0%{
                opacity:0;
                transform:translateY(-50px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
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
        .features-card{
            display:flex;
            flex-direction:column;
            gap:10px;
            padding:20px;
            border:1px solid var(--bg-lighter);
            background:var(--bg-light);
            border-radius:10px;
            /* border-top:8px solid var(--primary-light); */
           

        }
        .features-card .symbol{
            background:rgba(255,255,255,0.1);
            padding:10px;
            border-radius:5px;
            height:70px;
            width:70px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:var(--primary-light)
        }
        .features-title{
            font-weight:800;
            font-size:1.5rem;

        }
        .features-details{
            color:silver;
        }
        .faq{
            border:1px solid rgba(255,255,255,0.1);
            padding:10px;
            border-radius:10px;
        }
        .faq .answer{
            display:none;
        }
        .faq .question{
            text-align: start;
        }
        .faq .question *{
            transition: all 0.5s ease;
        }
        .faq.active .question .icon{
            background:var(--gradient);
            box-shadow: 0 0 10px var(--primary-brighter);
          

        }
         .faq.active .question .icon svg{
          transform:rotate(90deg);
          

        }
        .faq.active .question{
            display:flex;
        }
        .faq.active .answer{
            display:flex;
            background:rgba(255,255,255,0.04) !important;
            /* border-left:none !important; */
            border:1px solid rgba(255,255,255,0.1) !important;
            border-radius:10px;

        }
         .get-started-btn{
            position: relative;
         }
        /* .get-started-btn::before{
            content:'';
            position:absolute;
            left:0;
            top:0;
            bottom:0;
            background:linear-gradient(to right,transparent,rgba(255,255,255,0.5),transparent,transparent);
            width:100%;
            animation:shiny 2s linear infinite;
            transform:skew(40deg)
        }
        @keyframes shiny{
            0%{
                left:-25%;
            }
            25%{
                left:25%;
            }
            50%{
                left:50%;
            }
            75%{
                left:75%;
            }
            100%{
                left:100%
            }
        } */

    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
           
        <div class="hero-title text-center">
           Streamline your social media space with {{ config('app.name') }}
        </div>
        
        <span style="opacity:0.7;" class="text-center font-1">
        {{ config('app.name') }} is the ultimate platform for managing, scheduling, and automating your social media activities across all platforms. Save time and boost your online presence while also earning cash back.
        </span>
       <div style="padding-top:20px;padding-bottom:20px;" class="grid pc-grid-2 w-full g-10 m-y-20">
        <div onclick="window.location.href='{{ url('register') }}'" style="font-size:1rem;background: var(--primary-bright);color:white;" class="h-50 pointer get-started-btn w-full bold row g-10 justify-center p-10 br-1000 clip-1000 overflow-hidden">
        Join us Now
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
    <div onclick="window.location.href='{{ url('login') }}'" style="font-size:1rem;border:1px solid var(--bg-lighter);color:silver;background:rgba(255,255,255,0.05)" class="h-50 pointer clip-5 w-full bold row g-10 justify-center p-10 br-1000 clip-1000">
     Sign In
        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="CurrentColor"></path>
</svg>

    </div>
       </div>
       
         <img data-class='scale-in' src="{{ asset('banners/photo-1549924327-093737b3bb46.avif') }}" alt="" class="w-full m-x-auto observe br-10 max-w-500">
        
       
        <span class="hero-title">Types of Tasks available</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
            {{-- NEW CARD --}}
            <div data-class="trans-up" class="features-card observe">
               <div class="row g-10 align-center">
                 <div style="background:linear-gradient(to top right,gold,red);color:white;height:50px;width:50px;" class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,72a24,24,0,1,1,24-24A24,24,0,0,1,128,152ZM176,20H80A60.07,60.07,0,0,0,20,80v96a60.07,60.07,0,0,0,60,60h96a60.07,60.07,0,0,0,60-60V80A60.07,60.07,0,0,0,176,20Zm36,156a36,36,0,0,1-36,36H80a36,36,0,0,1-36-36V80A36,36,0,0,1,80,44h96a36,36,0,0,1,36,36ZM196,76a16,16,0,1,1-16-16A16,16,0,0,1,196,76Z"></path></svg>


                </div>
                <strong class="features-title">Instagram Tasks</strong>
               </div>
                <span class="features-details">Earn by engaging on instagram posts, following instagram pages etc from the comfort of your home</span>
               <div class="earning-highlight font-1">Earn: up to <strong>&#8358;750 per task</strong></div>
            </div>
             {{-- NEW CARD --}}
            <div data-class="trans-up" class="features-card observe">
               <div class="row g-10 align-center">
                 <div style="background:black;color:white;height:50px;width:50px;" class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M218.12,209.56l-61-95.8,59.72-65.69a12,12,0,0,0-17.76-16.14L143.81,92.77,106.12,33.56A12,12,0,0,0,96,28H48A12,12,0,0,0,37.88,46.44l61,95.8L39.12,207.93a12,12,0,1,0,17.76,16.14l55.31-60.84,37.69,59.21A12,12,0,0,0,160,228h48a12,12,0,0,0,10.12-18.44ZM166.59,204,69.86,52H89.41l96.73,152Z"></path></svg>


                </div>
                <strong class="features-title">X(Formerly Twitter) Tasks</strong>
               </div>
                <span class="features-details">Earn by engaging on X posts, following X pages,Retweeting posts etc from the comfort of your home</span>
               <div class="earning-highlight font-1">Earn: up to <strong>&#8358;1050 per task</strong></div>
            </div>
               {{-- NEW CARD --}}
            <div data-class="trans-up" class="features-card observe">
               <div class="row g-10 align-center">
                 <div style="background:rgb(67, 67, 247);color:white;height:50px;width:50px;" class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20Zm12,191.13V156h20a12,12,0,0,0,0-24H140V112a12,12,0,0,1,12-12h16a12,12,0,0,0,0-24H152a36,36,0,0,0-36,36v20H96a12,12,0,0,0,0,24h20v55.13a84,84,0,1,1,24,0Z"></path></svg>

                </div>
                <strong class="features-title">Facebook Tasks</strong>
               </div>
                <span class="features-details">Earn by engaging on Facebook posts,following Facebook pages and sharing posts etc.</span>
               <div class="earning-highlight font-1">Earn: up to <strong>&#8358;300 per task</strong></div>
            </div>
              {{-- NEW CARD --}}
            <div data-class="trans-up" class="features-card observe">
               <div class="row g-10 align-center">
                 <div style="background:#4caf50;color:white;height:50px;width:50px;" class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M187.3,159.06A36.09,36.09,0,0,1,152,188a84.09,84.09,0,0,1-84-84A36.09,36.09,0,0,1,96.94,68.7,12,12,0,0,1,110,75.1l11.48,23a12,12,0,0,1-.75,12l-8.52,12.78a44.56,44.56,0,0,0,20.91,20.91l12.78-8.52a12,12,0,0,1,12-.75l23,11.48A12,12,0,0,1,187.3,159.06ZM236,128A108,108,0,0,1,78.77,224.15L46.34,235A20,20,0,0,1,21,209.66l10.81-32.43A108,108,0,1,1,236,128Zm-24,0A84,84,0,1,0,55.27,170.06a12,12,0,0,1,1,9.81l-9.93,29.79,29.79-9.93a12.1,12.1,0,0,1,3.8-.62,12,12,0,0,1,6,1.62A84,84,0,0,0,212,128Z"></path></svg>

                </div>
                <strong class="features-title">Facebook Tasks</strong>
               </div>
                <span class="features-details">Earn by joining Whatsapp groups,following channels,adding contacts etc</span>
               <div class="earning-highlight font-1">Earn: up to <strong>&#8358;500 per task</strong></div>
            </div>
            {{-- NEW CARD --}}
            <div data-class="trans-up" class="features-card observe">
               <div class="row g-10 align-center">
                 <div style="background:rgb(1, 88, 88);color:white;height:50px;width:50px;" class="symbol">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M231.49,23.16a13,13,0,0,0-13.23-2.26L15.6,100.21a18.22,18.22,0,0,0,3.12,34.86L68,144.74V200a20,20,0,0,0,34.4,13.88l22.67-23.51L162.35,223a20,20,0,0,0,32.7-10.54L235.67,35.91A13,13,0,0,0,231.49,23.16ZM139.41,77.52,77.22,122.09l-34.43-6.75ZM92,190.06V161.35l15,13.15Zm81.16,10.52L99.28,135.81,205.59,59.63Z"></path></svg>

                </div>
                <strong class="features-title">Telegram Tasks</strong>
               </div>
                <span class="features-details">Earn by joining Telegram groups,channels and starting bots</span>
               <div class="earning-highlight font-1">Earn: up to <strong>&#8358;750 per task</strong></div>
            </div>
            
            
           
            
          
            
        </div>
        <img src="{{ asset('banners/photo-1712000155290-ee65c0a82eda.avif') }}" alt="" class="w-full max-w-500 m-x-auto br-10">
       
       
       
       
       


        {{-- FAQ SECTION --}}
         <div class="column m-x-auto m-top-50 text-center g-10 w-full">
            <strong class="hero-title">Frequently Asked Questions</strong>
            <span style="color:silver;">Find quick and clear answers to the most common questions about {{ config('app.name') }}</span>
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How Do I Join {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
                  <span>  To get started on {{ config('app.name') }},</span>
                  <span>- Click on the `Get Started` button at the top of the page or follow this <a href="{{ url('register') }}" class="no-u bold" style="color:aqua">Link</a></span>
                  <span>- Fill the form with your enrollment details</span>
                  {{-- <span>- Message any of our verified vendors to purchase your coupon code/access key</span> --}}
                 <span>- We value your privacy so your data are end-to-end encrypted and 100% safe on {{ config('app.name') }}</span>
                </div>
            </div>
            {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How can i post task on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
               - To post task on {{ config('app.name') }},Click the button below 👇👇 <br>
                - Send a message with the type of Task you want to post 
                <div onclick="window.open('{{ $social->advert_link }}')" style="background:var(--primary-light);box-shadow:0 0 5px var(--primary-light)" class="p-10 pointer w-fit row align-center p-x-20 br-5 bg-primary-light primary-text">
                    Click to post Task
                </div>

                </div>
            </div>
             {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How do i earn on {{ config('app.name') }}</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
               You can earn money on {{ config('app.name') }} by completing a variety of tasks accross several social media platform like Instagram,Facebook,Whatsapp,Telegram e.t.c <br>
               You can also earn money by sharing your affiliate link to your friends and families and earn on each complete signup.
                </div>
            </div>
              {{-- NEW FAQ --}}
            <div class="faq no-select w-full column g-10">
                <div onclick="if(this.closest('.faq').classList.contains('active')){
                this.closest('.faq').classList.remove('active')
                }else{
                this.closest('.faq').classList.add('active')
                }" class="w-full question space-between row align-center g-10">
                    <span class="desc">How long is my withdrawal on {{ config('app.name') }} processed</span>
                    <div class="icon h-30 w-30 no-shrink br-5 column justify-center">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                    </div>
                </div>
                <div style="text-align:start;border-left:2px solid var(--primary-brighter);" class="answer column bg-light p-10 g-5 w-full ">
              Withdrawals on {{ config('app.name') }} are typically processed within 1-24 hours depending on the load of withdrawals availble to process.
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        window.onload=function(){
            document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px'
        }
        ObserveItems('observe');
    </script>
@endsection

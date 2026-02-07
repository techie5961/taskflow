@extends('layout.users.app')
@section('title')
    Withdraw
@endsection
@section('css')
    <style class="css">
       .wallets.active{
        background:#4caf50 !important;
        color:white !important;
         background:aqua !important;
         color:black !important;
        animation: scale-in-out 0.5s ease forwards;
       } 
       @keyframes scale-in-out{
        0%,100%{
            transform: scale(1)
        }

        50%{
            transform:scale(0.95);
        }

       }
      
    </style>
@endsection
@section('main')
    <section class="w-full align-center justify-center column g-10 p-10">
         <div style="border:1px solid rgba(255,255,255,0.1)" class="bg-transparent w-full column g-10 mmax-w-500 br-10 p-10">
            <div class="row p-10 space-between br-10 align-center">

                <span class="desc bold">Withdraw Funds</span>
              
            </div>
            <div class="column g-5 w-full">
               
                <span>Withdrawal wallet</span>
            </div>
            <form action="{{ url('users/post/withdraw/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full column g-10">
              
                <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                {{-- <div class="w-full grid grid-2 pc-grid-3 g-10 place-center">
                    <div onclick="
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                     });
                     this.classList.add('active');
                        document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($activities_minimum,2) }}`;
                    document.querySelector('input.wallet').value='activities_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                   
                     " class="w-full wallets transition-ease-half column bg-light align-center g-5 p-10 no-select pointer">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9426 1.25H12.0574C14.3658 1.24999 16.1748 1.24998 17.5863 1.43975C19.031 1.63399 20.1711 2.03933 21.0659 2.93414C21.9607 3.82895 22.366 4.96897 22.5603 6.41371C22.75 7.82519 22.75 9.63423 22.75 11.9426V12H22.7391C22.75 12.5789 22.75 13.2299 22.75 13.9664V14.0336C22.75 15.4053 22.75 16.4807 22.6794 17.3451C22.6075 18.2252 22.4586 18.9523 22.1233 19.6104C21.572 20.6924 20.6924 21.572 19.6104 22.1233C18.9523 22.4586 18.2252 22.6075 17.3451 22.6794C16.4807 22.75 15.4053 22.75 14.0336 22.75H9.96642C8.59471 22.75 7.51928 22.75 6.65494 22.6794C5.7748 22.6075 5.04769 22.4586 4.38955 22.1233C3.30762 21.572 2.42798 20.6924 1.87671 19.6104C1.54138 18.9523 1.39252 18.2252 1.32061 17.3451C1.24999 16.4807 1.25 15.4053 1.25 14.0336V13.9664C1.25 13.2299 1.25 12.5789 1.26092 12H1.25L1.25 11.9426C1.24999 9.63423 1.24998 7.82519 1.43975 6.41371C1.63399 4.96897 2.03933 3.82895 2.93414 2.93414C3.82895 2.03933 4.96897 1.63399 6.41371 1.43975C7.82519 1.24998 9.63423 1.24999 11.9426 1.25ZM2.88197 6.98698C3.31781 6.53974 3.82626 6.16372 4.38955 5.87671C5.04769 5.54138 5.7748 5.39252 6.65494 5.32061C7.51929 5.24999 8.59472 5.25 9.96645 5.25H14.0336C15.4053 5.25 16.4807 5.24999 17.3451 5.32061C18.2252 5.39252 18.9523 5.54138 19.6104 5.87671C20.1737 6.16372 20.6822 6.53975 21.118 6.98698C21.1046 6.85884 21.0899 6.73445 21.0736 6.61358C20.9018 5.33517 20.5749 4.56445 20.0052 3.9948C19.4355 3.42514 18.6648 3.09825 17.3864 2.92637C16.0864 2.75159 14.3782 2.75 12 2.75C9.62178 2.75 7.91356 2.75159 6.61358 2.92637C5.33517 3.09825 4.56445 3.42514 3.9948 3.9948C3.42514 4.56445 3.09825 5.33517 2.92637 6.61358C2.91012 6.73444 2.89537 6.85884 2.88197 6.98698ZM6.77708 6.81563C5.9897 6.87996 5.48197 7.00359 5.07054 7.21322C4.27085 7.62069 3.62068 8.27085 3.21322 9.07054C3.00359 9.48197 2.87996 9.9897 2.81563 10.7771C2.75058 11.5732 2.75 12.5875 2.75 14C2.75 15.4125 2.75058 16.4268 2.81563 17.2229C2.87996 18.0103 3.00359 18.518 3.21322 18.9295C3.62068 19.7291 4.27085 20.3793 5.07054 20.7868C5.48197 20.9964 5.9897 21.12 6.77708 21.1844C7.57322 21.2494 8.58749 21.25 10 21.25H14C15.4125 21.25 16.4268 21.2494 17.2229 21.1844C18.0103 21.12 18.518 20.9964 18.9295 20.7868C19.7291 20.3793 20.3793 19.7291 20.7868 18.9295C20.9964 18.518 21.12 18.0103 21.1844 17.2229C21.2494 16.4268 21.25 15.4125 21.25 14C21.25 12.5875 21.2494 11.5732 21.1844 10.7771C21.12 9.9897 20.9964 9.48197 20.7868 9.07054C20.3793 8.27085 19.7291 7.62068 18.9295 7.21322C18.518 7.00359 18.0103 6.87996 17.2229 6.81563C16.4268 6.75058 15.4125 6.75 14 6.75H10C8.58749 6.75 7.57322 6.75058 6.77708 6.81563ZM14.9995 11.4405C15.3085 11.7164 15.3353 12.1905 15.0595 12.4995L11.488 16.4995C11.3457 16.6589 11.1422 16.75 10.9286 16.75C10.7149 16.75 10.5114 16.6589 10.3691 16.4995L8.94055 14.8995C8.66467 14.5905 8.69151 14.1164 9.00049 13.8405C9.30947 13.5647 9.78358 13.5915 10.0595 13.9005L10.9286 14.8739L13.9405 11.5005C14.2164 11.1915 14.6905 11.1647 14.9995 11.4405Z" fill="CurrentColor"></path>
</svg>

                        <strong class="font-1">Activities Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->activities_balance) }}</strong>
                    </div>
                     <div onclick="
                    try{
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                      });
                    this.classList.add('active');
                      document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($affiliate_minimum,2) }}`;
                    document.querySelector('input.wallet').value='affiliate_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                  

                    }catch(error){
                    CreateNotify('error',error.stack);
                    }
                     
                     " class="w-full wallets transition-ease-half column bg-light align-center g-5 p-10 no-select pointer">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C9.37665 1.25 7.25 3.37665 7.25 6C7.25 8.62335 9.37665 10.75 12 10.75C14.6234 10.75 16.75 8.62335 16.75 6C16.75 3.37665 14.6234 1.25 12 1.25ZM8.75 6C8.75 4.20507 10.2051 2.75 12 2.75C13.7949 2.75 15.25 4.20507 15.25 6C15.25 7.79493 13.7949 9.25 12 9.25C10.2051 9.25 8.75 7.79493 8.75 6Z" fill="CurrentColor"></path>
<path d="M18 3.25C17.5858 3.25 17.25 3.58579 17.25 4C17.25 4.41421 17.5858 4.75 18 4.75C19.3765 4.75 20.25 5.65573 20.25 6.5C20.25 7.34427 19.3765 8.25 18 8.25C17.5858 8.25 17.25 8.58579 17.25 9C17.25 9.41421 17.5858 9.75 18 9.75C19.9372 9.75 21.75 8.41715 21.75 6.5C21.75 4.58285 19.9372 3.25 18 3.25Z" fill="CurrentColor"></path>
<path d="M6.75 4C6.75 3.58579 6.41421 3.25 6 3.25C4.06278 3.25 2.25 4.58285 2.25 6.5C2.25 8.41715 4.06278 9.75 6 9.75C6.41421 9.75 6.75 9.41421 6.75 9C6.75 8.58579 6.41421 8.25 6 8.25C4.62351 8.25 3.75 7.34427 3.75 6.5C3.75 5.65573 4.62351 4.75 6 4.75C6.41421 4.75 6.75 4.41421 6.75 4Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 12.25C10.2157 12.25 8.56645 12.7308 7.34133 13.5475C6.12146 14.3608 5.25 15.5666 5.25 17C5.25 18.4334 6.12146 19.6392 7.34133 20.4525C8.56645 21.2692 10.2157 21.75 12 21.75C13.7843 21.75 15.4335 21.2692 16.6587 20.4525C17.8785 19.6392 18.75 18.4334 18.75 17C18.75 15.5666 17.8785 14.3608 16.6587 13.5475C15.4335 12.7308 13.7843 12.25 12 12.25ZM6.75 17C6.75 16.2242 7.22169 15.4301 8.17338 14.7956C9.11984 14.1646 10.4706 13.75 12 13.75C13.5294 13.75 14.8802 14.1646 15.8266 14.7956C16.7783 15.4301 17.25 16.2242 17.25 17C17.25 17.7758 16.7783 18.5699 15.8266 19.2044C14.8802 19.8354 13.5294 20.25 12 20.25C10.4706 20.25 9.11984 19.8354 8.17338 19.2044C7.22169 18.5699 6.75 17.7758 6.75 17Z" fill="CurrentColor"></path>
<path d="M19.2674 13.8393C19.3561 13.4347 19.7561 13.1787 20.1607 13.2674C21.1225 13.4783 21.9893 13.8593 22.6328 14.3859C23.2758 14.912 23.75 15.6352 23.75 16.5C23.75 17.3648 23.2758 18.088 22.6328 18.6141C21.9893 19.1407 21.1225 19.5217 20.1607 19.7326C19.7561 19.8213 19.3561 19.5653 19.2674 19.1607C19.1787 18.7561 19.4347 18.3561 19.8393 18.2674C20.6317 18.0936 21.2649 17.7952 21.6829 17.4532C22.1014 17.1108 22.25 16.7763 22.25 16.5C22.25 16.2237 22.1014 15.8892 21.6829 15.5468C21.2649 15.2048 20.6317 14.9064 19.8393 14.7326C19.4347 14.6439 19.1787 14.2439 19.2674 13.8393Z" fill="CurrentColor"></path>
<path d="M3.83935 13.2674C4.24395 13.1787 4.64387 13.4347 4.73259 13.8393C4.82132 14.2439 4.56525 14.6439 4.16065 14.7326C3.36829 14.9064 2.73505 15.2048 2.31712 15.5468C1.89863 15.8892 1.75 16.2237 1.75 16.5C1.75 16.7763 1.89863 17.1108 2.31712 17.4532C2.73505 17.7952 3.36829 18.0936 4.16065 18.2674C4.56525 18.3561 4.82132 18.7561 4.73259 19.1607C4.64387 19.5653 4.24395 19.8213 3.83935 19.7326C2.87746 19.5217 2.0107 19.1407 1.36719 18.6141C0.724248 18.088 0.25 17.3648 0.25 16.5C0.25 15.6352 0.724248 14.912 1.36719 14.3859C2.0107 13.8593 2.87746 13.4783 3.83935 13.2674Z" fill="CurrentColor"></path>
</svg>

                        <strong class="font-1">Affiliate Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->affiliate_balance) }}</strong>
                    </div>
                     <div onclick="
                    try{
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                      });
                    this.classList.add('active');
                      document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(($deposit_minimum ?? 0),2) }}`;
                    document.querySelector('input.wallet').value='deposit_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                  

                    }catch(error){
                    CreateNotify('error',error.stack);
                    }
                     
                     " class="w-full display-none grid-full wallets transition-ease-half column bg-light align-center g-5 p-10 no-select pointer">
                       <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6669 6.13443L10.165 5.77922C9.44862 5.27225 8.59264 5 7.71504 5H7.10257C6.69838 5 6.29009 5.02549 5.90915 5.16059C3.52645 6.00566 1.88749 9.09504 2.00604 16.1026C2.02992 17.5145 2.3603 19.075 3.63423 19.6842C4.03121 19.8741 4.49667 20 5.02671 20C5.66273 20 6.1678 19.8187 6.55763 19.5632C6.96641 19.2953 7.32633 18.9471 7.68612 18.599C8.13071 18.1688 8.57511 17.7389 9.11125 17.4609C9.69519 17.1581 10.3434 17 11.0011 17H12.9989C13.6566 17 14.3048 17.1581 14.8888 17.4609C15.4249 17.7389 15.8693 18.1688 16.3139 18.599C16.6737 18.9471 17.0336 19.2953 17.4424 19.5632C17.8322 19.8187 18.3373 20 18.9733 20C19.5033 20 19.9688 19.8741 20.3658 19.6842C21.6397 19.075 21.9701 17.5145 21.994 16.1026C22.1125 9.09503 20.4735 6.00566 18.0908 5.16059C17.7099 5.02549 17.3016 5 16.8974 5H16.2849C15.4074 5 14.5514 5.27225 13.8351 5.77922L13.3332 6.13441C12.9434 6.41029 12.4776 6.55844 12 6.55844C11.5225 6.55844 11.0567 6.41029 10.6669 6.13443ZM16.75 9C17.1642 9 17.5 9.33579 17.5 9.75C17.5 10.1642 17.1642 10.5 16.75 10.5C16.3358 10.5 16 10.1642 16 9.75C16 9.33579 16.3358 9 16.75 9ZM7.5 9.25C7.91421 9.25 8.25 9.58579 8.25 10V10.75H9C9.41421 10.75 9.75 11.0858 9.75 11.5C9.75 11.9142 9.41421 12.25 9 12.25H8.25V13C8.25 13.4142 7.91421 13.75 7.5 13.75C7.08579 13.75 6.75 13.4142 6.75 13V12.25H6C5.58579 12.25 5.25 11.9142 5.25 11.5C5.25 11.0858 5.58579 10.75 6 10.75H6.75V10C6.75 9.58579 7.08579 9.25 7.5 9.25ZM19 11.25C19 11.6642 18.6642 12 18.25 12C17.8358 12 17.5 11.6642 17.5 11.25C17.5 10.8358 17.8358 10.5 18.25 10.5C18.6642 10.5 19 10.8358 19 11.25ZM15.25 12C15.6642 12 16 11.6642 16 11.25C16 10.8358 15.6642 10.5 15.25 10.5C14.8358 10.5 14.5 10.8358 14.5 11.25C14.5 11.6642 14.8358 12 15.25 12ZM17.5 12.75C17.5 12.3358 17.1642 12 16.75 12C16.3358 12 16 12.3358 16 12.75C16 13.1642 16.3358 13.5 16.75 13.5C17.1642 13.5 17.5 13.1642 17.5 12.75Z" fill="CurrentColor"></path>
</svg>

                        <strong class="font-1">Games Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->deposit_balance) }}</strong>
                    </div>
                </div> --}}

             
                  <div style="border:1px solid var(--bg-lighter)" class="h-50 br-5 cont w-full border-1 bg-light">
                    <select name="wallet" class="inp input border-none required w-full h-full bg-transparent">
                        <option value="" selected disabled>Select Wallet....</option>
                        <option value="activities_balance">Activities Wallet - &#8358;{{ Auth::guard('users')->user()->activities_balance }}</option>
                         <option value="affiliate_balance">Affiliate Wallet - &#8358;{{ Auth::guard('users')->user()->affiliate_balance }}</option>
                    </select>
                </div>
              
                {{-- WALLET SELECTED --}}
                {{-- <input type="hidden" name="wallet" class="input wallet"> --}}
                {{-- BANK DETAILS --}}
                  @if ($bank_linked !== 'false')
                  <label for="">Bank Details</label>
            <div style="border:1px solid var(--bg-lighter)" class="w-full br-5 no-select m-x-auto max-w-500 p-10 bg-light border-1 g-10">
                <span class="row m-y-10">Your Account Details</span>
            <div class="row space-between g-10 align-center">
                <strong class="font-1"  style="color:silver">Account Number :</strong>
                <span>{{ $bank->account_number }}</span>
            </div>
               <div class="row space-between g-10 align-center">
                <strong style="color:silver" class="font-1 text-silver">Bank Name:</strong>
                <span>{{ $bank->bank_name }}</span>
            </div>
            <div class="row space-between g-10 align-center">
                <strong class="font-1"  style="color:silver">Account Holder Name :</strong>
                <span>{{ $bank->account_name }}</span>
            </div>
           <div onclick="spa(event,'{{ url('users/bank/add') }}')" style="background:var(--primary-light)" class="w-full w-fit m-left-auto m-top-10 clip-0 br-0 btn-primary-3d bg-primary-light no-select pointer row h-40 p-10 align-center justify-center">
          <span>  Update Bank </span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M48,80v96a8,8,0,0,1-16,0V80a8,8,0,0,1,16,0Zm189.66,42.34-96-96A8,8,0,0,0,128,32V72H72a8,8,0,0,0-8,8v96a8,8,0,0,0,8,8h56v40a8,8,0,0,0,13.66,5.66l96-96A8,8,0,0,0,237.66,122.34Z"></path></svg>
            

           </div>
        </div>
       @endif
       
     
       {{-- WITHDRAWAL AMOUNT --}}
                <label for="">Withdrawal Amount</label>
             <div class="column g-5 w-full">
                   <div style="border:1px solid var(--bg-lighter)" class="cont row align-center bg-light w-full h-50">
                    <input placeholder="Enter withdrawal amount" name="amount" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                <span class="minimum_text"></span>
                
             </div>
                 
               
              {{-- <div class="w-full column g-2">
                <strong>Disclaimer:</strong>
                <span>Please double-check your withdrawal details before you continue, Please make sure the account detials you have entered are 100% correct and belongs to you. <br>
                If you provide the wrong details,your money could be sent to the wrong account and we would not be able to recover it for you. <br>
                {{  config('app.name')}} is not responsible for funds lost due to incorrect information being entered.
                </span>
              </div> --}}
            
                <button class="post clip-0 bold br-0">
                    Place Withdrawal
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20Zm0,192a84,84,0,1,1,84-84A84.09,84.09,0,0,1,128,212Zm48.49-92.49a12,12,0,0,1,0,17l-32,32a12,12,0,1,1-17-17L139,140H88a12,12,0,0,1,0-24h51l-11.52-11.51a12,12,0,1,1,17-17Z"></path></svg>
                     
                </button>
             
               
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection
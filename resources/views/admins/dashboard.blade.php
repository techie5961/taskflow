@extends('layout.admins.app')
@section('title')
    Dashboard
@endsection
@section('main')
    <section class="column w-full g-10 p-10">
        <div onclick="window.location.href='{{ url('admins/users/all') }}'" class="w-full bg-white br-10 p-10 column g-5 box-shadow">
           <div class="row w-full align-center g-10 space-between">
            <div class="h-50 w-50 br-10 bg-secondary column justify-center secondary-text">
              
                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z"></path></svg>

               
             
            </div>
              <strong class="desc">{{ number_format($all_users) }}</strong>
              </div>
              <span>Total Users</span>
        </div>
         
          <div onclick="window.location.href='{{ url('admins/withdrawals/pending') }}'" class="w-full bg-white br-10 p-10 column g-5 box-shadow">
           <div class="row w-full align-center g-10 space-between">
            <div class="h-50 w-50 br-10 bg-gold c-black column justify-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>

               
             
            </div>
              <strong class="desc">&#8358;{{ number_format($pending_withdrawals,2) }}</strong>
              </div>
              <span>Pending Withdrawals</span>
        </div>
        <div onclick="window.location.href='{{ url('admins/withdrawals/success') }}'" class="w-full bg-white br-10 p-10 column g-5 box-shadow">
           <div class="row w-full align-center g-10 space-between">
            <div class="h-50 w-50 br-10 bg-green c-white column justify-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>

               
             
            </div>
              <strong class="desc">&#8358;{{ number_format($successfull_withdrawals,2) }}</strong>
              </div>
              <span>Successfull Withdrawals</span>
        </div>
         <div onclick="window.location.href='{{ url('admins/withdrawals/rejected') }}'" class="w-full bg-white br-10 p-10 column g-5 box-shadow">
           <div class="row w-full align-center g-10 space-between">
            <div class="h-50 w-50 br-10 bg-red c-white column justify-center ">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm-36,80a12,12,0,1,1,12-12A12,12,0,0,1,180,144Z"></path></svg>

               
             
            </div>
              <strong class="desc">&#8358;{{ number_format($rejected_withdrawals,2) }}</strong>
              </div>
              <span>Rejected Withdrawals</span>
        </div>
        
        <div class="w-full bg-white br-10 p-10 column g-5 box-shadow">
           <div class="row w-full align-center g-10 space-between">
            <div class="h-50 w-50 br-10 bg-secondary secondary-text column justify-center ">
           <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM80,200a8,8,0,0,1-5.66-2.34l-16-16a8,8,0,0,1,11.32-11.32L80,180.69l34.34-34.35a8,8,0,0,1,11.32,11.32l-40,40A8,8,0,0,1,80,200Zm120-8a8,8,0,0,1-8,8H136a8,8,0,0,1,0-16h48V72H72v64a8,8,0,0,1-16,0V64a8,8,0,0,1,8-8H192a8,8,0,0,1,8,8Z"></path></svg>

               
             
            </div>
             <div  onclick="window.location.href='{{ url('admins/tasks/manage') }}'" class="p-5 pointer no-select secondary-text text-average bg-secondary">
                Manage All
             </div>
              </div>
              <span>Tasks Management</span>
        </div>
                <div class="w-full bg-white br-10 p-10 column g-5 box-shadow">
           <div class="row w-full align-center g-10 space-between">
            <div class="h-50 w-50 br-10 bg-black c-white column justify-center ">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM92.8,145.6a8,8,0,1,1-9.6,12.8l-32-24a8,8,0,0,1,0-12.8l32-24a8,8,0,0,1,9.6,12.8L69.33,128Zm58.89-71.4-32,112a8,8,0,1,1-15.38-4.4l32-112a8,8,0,0,1,15.38,4.4Zm53.11,60.2-32,24a8,8,0,0,1-9.6-12.8L186.67,128,163.2,110.4a8,8,0,1,1,9.6-12.8l32,24a8,8,0,0,1,0,12.8Z"></path></svg>

               
             
            </div>
             <div class="p-5 pointer no-select c-white text-average bg-black">
                Manage API
             </div>
              </div>
              <span>Airtime/Data</span>
        </div>

    </section>
@endsection
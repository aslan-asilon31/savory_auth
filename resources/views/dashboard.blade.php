
@extends('layouts.backend')

@section('content')

    <!-- congrats & summary -->
    <div class="grid grid-cols-3 lg:grid-cols-1 gap-5">
      <!-- congrats -->
<div class="card col-span-1">

    <div class="card-body h-full flex flex-col justify-between">

        <div>
            <h1 class="text-lg font-bold tracking-wide">Congratulations 
                <?php
                $value =  Auth::user()->name;
                echo strtok($value, " ");
                ?>
            </h1>
            <p class="text-gray-600 mt-2">Best seller of the month</p>
        </div>
    
        <div class="flex flex-row mt-10 items-end">
    
            <div class="flex-1">
                <h1 class="font-extrabold text-4xl text-teal-400">$89k</h1>
                <p class="mt-3 mb-4 text-xs text-gray-500">You have done 57.6% more sales today.</p>
                <a href="#" class="btn-shadow py-3">
                    view sales
                </a>
            </div>
    
            <div class="flex-1 ml-10 w-32 h-32 lg:w-auto lg:h-auto overflow-hidden">
                <img class="object-cover" src="{{ asset('backend/img/congrats.svg') }}">
            </div>
    
        </div>

    </div>
    
</div>
<!-- end congrats -->
      <div class="card p-0 overflow-hidden col-span-2 lg:col-span-1 flex flex-row lg:flex-col">
     
    <!-- right -->
    <div class="border-r border-gray-200 w-2/3 lg:w-full lg:mb-5">
        
        <!-- top -->
        <div class="p-5 flex flex-row flex-wrap justify-between items-center">
            <h2 class="font-bold text-lg">Order Summary</h2>
            <div class="flex flex-row justify-center items-center">
                <a href="#" class="btn mr-4 text-sm py-2 block">month</a>
                <a href="#" class="btn-shadow text-sm py-2 block">week</a>
            </div>
        </div>
        <!-- end top -->

        <!-- chart -->                
        <div id="SummaryChart"></div>
        <!-- end chart -->

    </div>
    <!-- end right -->

    <!-- left -->
    <div class="w-1/3 lg:w-full">
        
        <!-- top -->
        <div class="p-5 border-b border-gray-200">
            <h2 class="font-bold text-lg mb-6">Sales History</h2>

            <div class="flex flex-row justify-between mb-3">
                <div class="">
                    <h4 class="text-gray-600 font-thin">Puma Shoes</h4>
                    <p class="text-gray-400 text-xs font-hairline">30 min ago</p>
                </div>
                <div class="text-sm font-medium">
                    <span class="text-green-400">+</span> $250
                </div>
            </div>

            <div class="flex flex-row justify-between mb-3">
                <div class="">
                    <h4 class="text-gray-600 font-thin">Google Pixel 4 xl</h4>
                    <p class="text-gray-400 text-xs font-hairline">1 day ago</p>
                </div>
                <div class="text-sm font-medium">
                    <span class="text-red-400">-</span> $10
                </div>
            </div>
            
            <div class="flex flex-row justify-between">
                <div class="">
                    <h4 class="text-gray-600 font-thin">Nike Air Jordan</h4>
                    <p class="text-gray-400 text-xs font-hairline">2 hour ago</p>
                </div>
                <div class="text-sm font-medium">
                    <span class="text-red-400">-</span> $98
                </div>
            </div>

            

        </div>
        <!-- end top -->

        <!-- bottom -->
        <div class="p-5">
            <h2 class="font-bold text-lg mb-2">Sales History</h2>
            <strong class="text-teal-400 font-extrabold text-xl">$82,950.96</strong>

            <div class="bg-gray-300 h-2 rounded-full mt-2 relative">
                <div class="rounded-full bg-teal-400 h-full w-3/4 shadow-md"></div>
            </div>
        </div>
        <!-- end bottom -->

    </div>
    <!-- end left -->

</div>


      
    </div>
    <!-- end congrats & summary -->

    <!-- status -->
    <div class="grid grid-cols-5 gap-5 mt-5 lg:grid-cols-2">

    <!-- status -->
    <div class="card col-span-1">
        <div class="card-body">
            <h5 class="uppercase text-xs tracking-wider font-extrabold">today</h5>
            <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span>  <span class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span> orders</span></h1>
            <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )</p>
        </div>
    </div>
    <!-- status -->

    <!-- status -->
    <div class="card col-span-1">
        <div class="card-body">
            <h5 class="uppercase text-xs tracking-wider font-extrabold">yesterday</h5>
            <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span>  <span class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span> orders</span></h1>
            <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )</p>
        </div>
    </div>
    <!-- status -->

    <!-- status -->
    <div class="card col-span-1">
        <div class="card-body">
            <h5 class="uppercase text-xs tracking-wider font-extrabold">last week</h5>
            <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span>  <span class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span> orders</span></h1>
            <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )</p>
        </div>
    </div>
    <!-- status -->

    <!-- status -->
    <div class="card col-span-1">
        <div class="card-body">
            <h5 class="uppercase text-xs tracking-wider font-extrabold">last month</h5>
            <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span>  <span class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span> orders</span></h1>
            <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )</p>
        </div>
    </div>
    <!-- status -->

    <!-- status -->
    <div class="card col-span-1 lg:col-span-2">
        <div class="card-body">
            <h5 class="uppercase text-xs tracking-wider font-extrabold">last 90-days</h5>
            <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span>  <span class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span> orders</span></h1>
            <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )</p>
        </div>
    </div>
    <!-- status -->
    
 
</div>
    <!-- end status -->

    <!-- best seller & traffic -->
    <div class="grid grid-cols-2 lg:grid-cols-1 gap-5 mt-5">
      <div class="card">

    <div class="card-body">
        <div class="flex flex-row justify-between items-center">
            <h1 class="font-extrabold text-lg">best sellers</h1>
            <a href="#" class="btn-gray text-sm">view all</a>
        </div>
    
        <table class="table-auto w-full mt-5 text-right">
    
            <thead>
                <tr>
                    <td class="py-4 font-extrabold text-sm text-left">product</td>
                    <td class="py-4 font-extrabold text-sm">price</td>
                    <td class="py-4 font-extrabold text-sm">sold</td>
                    <td class="py-4 font-extrabold text-sm">profit</td>
                </tr>
            </thead>
    
            <tbody>
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="{{ asset('backend/img/sneakers.svg') }}" class="object-cover">
                        </div>
                        Sneakers and Tennis 
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="{{ asset('backend/img/socks.svg') }}" class="object-cover">
                        </div>
                        Crazy Socks & Graphic Socks for Men
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="{{ asset('backend/img/soccer.svg') }}" class="object-cover">
                        </div>
                        Adidas Soccer Ball
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
                <!-- item -->
                <tr class="">
                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                        <div class="w-8 h-8 overflow-hidden mr-3">
                            <img src="{{ asset('backend/img/food.svg') }}" class="object-cover">
                        </div>
                        Best Chocolate Chip Cookies
                    </td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                </tr>
                <!-- end item -->
    
            </tbody>
    
        </table>
    
    </div>
</div>
      <div class="card">    

    <div class="card-body">
        <h2 class="font-bold text-lg mb-10">Recent Orders</h2>
    
    <!-- start a table -->
    <table class="table-fixed w-full">
        
        <!-- table head -->
        <thead class="text-left">
            <tr>
                <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">customer</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Product</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Invoice</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">price</th>
                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">status</th>
            </tr>
        </thead>
        <!-- end table head -->

        <!-- table body -->
        <tbody class="text-left text-gray-600">

            <!-- item -->
            <tr>
                <!-- name -->
                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img src="{{ asset('backend/img/user2.jpg') }}" class="object-cover">
                    </div>
                    <p class="ml-3 name-1">user name</p>                    
                </th>
                <!-- name -->
                
                <!-- product -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                <!-- product -->

                <!-- invoice -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span class="num-4"></span></th>
                <!-- invoice -->

                <!-- price -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span class="num-2"></span></th>
                <!-- price -->

                <!-- status -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                <!-- status -->

            </tr>
            <!-- item -->


            <!-- item -->
            <tr>
                <!-- name -->
                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img src="{{ asset('backend/img/user3.jpg') }}" class="object-cover">
                    </div>
                    <p class="ml-3 name-1">user name</p>                    
                </th>
                <!-- name -->
                
                <!-- product -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                <!-- product -->

                <!-- invoice -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span class="num-4"></span></th>
                <!-- invoice -->

                <!-- price -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span class="num-2"></span></th>
                <!-- price -->

                <!-- status -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                <!-- status -->

            </tr>
            <!-- item -->


            <!-- item -->
            <tr>
                <!-- name -->
                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img src="{{ asset('backend/img/user2.jpg') }}" class="object-cover">
                    </div>
                    <p class="ml-3 name-1">user name</p>                    
                </th>
                <!-- name -->
                
                <!-- product -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                <!-- product -->

                <!-- invoice -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span class="num-4"></span></th>
                <!-- invoice -->

                <!-- price -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span class="num-2"></span></th>
                <!-- price -->

                <!-- status -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                <!-- status -->

            </tr>
            <!-- item -->

            <!-- item -->
            <tr>
                <!-- name -->
                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img src="{{ asset('backend/img/user1.jpg') }}" class="object-cover">
                    </div>
                    <p class="ml-3 name-1">user name</p>                    
                </th>
                <!-- name -->
                
                <!-- product -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                <!-- product -->

                <!-- invoice -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span class="num-4"></span></th>
                <!-- invoice -->

                <!-- price -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span class="num-2"></span></th>
                <!-- price -->

                <!-- status -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                <!-- status -->

            </tr>
            <!-- item -->

            <!-- item -->
            <tr>
                <!-- name -->
                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img src="{{ asset('backend/img/user3.jpg') }}" class="object-cover">
                    </div>
                    <p class="ml-3 name-1">user name</p>                    
                </th>
                <!-- name -->
                
                <!-- product -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                <!-- product -->

                <!-- invoice -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span class="num-4"></span></th>
                <!-- invoice -->

                <!-- price -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span class="num-2"></span></th>
                <!-- price -->

                <!-- status -->
                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                <!-- status -->

            </tr>
            <!-- item -->            

            


        </tbody>
        <!-- end table body -->

    </table>
    <!-- end a table -->
    </div>

</div> 
          
    </div>
    <!-- end best seller & traffic -->
   
@endsection
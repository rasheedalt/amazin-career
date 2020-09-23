@php
    $services = App\Models\Service::all();
@endphp

<div id ="adevrtbar">
    <div class="Servicebar">
        <h3>OUR SERVICES</h3>
        <ol>
            @foreach($services as $service)
            <li><a href="#">{{ $service->display_name }}</a></li>
            @endforeach
            <!-- <li><a href="HtmlFiles/BussPlan.html">Business Plan</a></li> -->
        </ol>

        <div class="spaceOne">
            <p>ADEVRTS</p>
        </div>
        <div class="spaceTwo">
            <p>ADEVRTS</p>
        </div>
    </div>
</div>
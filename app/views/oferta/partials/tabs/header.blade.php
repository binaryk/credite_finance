<li class="@if($count == 1) active @endif" ng-click="current_oferta_id = {{$count}}">
    <a href="#tab_{{$count}}" data-toggle="tab" aria-expanded="true">
        Oferta {{$count}} </a>
</li>
@props(['active' => false])

<a class="{{$active ? 'text-white nav-link' : 'nav-link text-gray-300 hover: text-grey-300 hover'}}" aria-current="{{$active ? 'page': 'false'}}"  {{$attributes}}>{{$slot}}</a>
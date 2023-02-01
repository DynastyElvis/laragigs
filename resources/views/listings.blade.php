<h1>{{ $heading }}</h1>

@unless (count($listings) ==0)
    @foreach($listings as $listing)
        <h2><a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h2>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@else
    <p>No listings found</p>
@endunless





 {{-- <h1>{{ $heading }}</h1>

 @unless (count($listings) ==0)
     @foreach($listings as $listing)
         <h2>
             @if(array_key_exists('title', $listing))
                 <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
             @else
                 Title not found
             @endif
         </h2>
         <p>
             @if(array_key_exists('description', $listing))
                 {{ $listing['description'] }}
             @else
                 Description not found
             @endif
         </p>
     @endforeach
 @else
     <p>No listings found</p>
 @endunless
  --}}




{{-- 
<h1>{{ $heading }}</h1>

@if (count($listings) ==0)
<p>No listings found</p>
@endif --}}

{{-- @unless (count($listings) ==0)
    

@foreach($listings as $listing)
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
@endforeach
@else
<p>No listings found</p>
@endunless --}}

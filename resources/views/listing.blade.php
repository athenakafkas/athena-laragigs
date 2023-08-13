@if (!is_null($listing))
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
@else
    <p>Listing not available.</p>
@endif

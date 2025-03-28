<div>
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

    @php
    $listing = ['item1','item2','item3']
    @endphp

    @foreach ($listing as $item)
        @if ($item = 'item2')
           <p>{{"found"}}</p>
        @endif

    @endforeach
</div>
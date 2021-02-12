<div>
    {!! $el[0]::render() !!}

    <button wire:click="increment">+</button>

    <h1>{{ $count }}</h1>
</div>
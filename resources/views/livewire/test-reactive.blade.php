<div wire:id="{{ $this->getId() }}" style="border: 2px dashed red; padding: 1rem;">
    <h2>Livewire Reactivity Check</h2>

    <input type="text" wire:model="test" placeholder="Type something..." />
    <p>Output: {{ $test }}</p>

    <script>
        console.log('Livewire check: component mounted');
    </script>
</div>
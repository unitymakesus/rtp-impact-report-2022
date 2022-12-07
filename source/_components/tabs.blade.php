@props(['lists', 'type', 'orientation'])

<div {{ $attributes->merge(['class' => 'tabs mt-12']) }}>
  <div role="tablist" aria-orientation="{{ $orientation }}" aria-label="">
    @foreach ($lists as $list)
      <button role="tab" class="text-lg" id="tab-{{ $list->slug }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}" aria-controls="tabpanel-{{ $list->slug }}">{{ $list->label }}</button>
    @endforeach
  </div>
  @foreach ($lists as $list)
    <div tabindex="0" role="tabpanel" id="tabpanel-{{ $list->slug }}" aria-labelledby="tab-{{ $list->slug }}" {{ $loop->first ? '' : 'hidden' }}>
      <div>
        @foreach ($list->items as $group)
          <h3 class="font-bold mb-4">{{ $group['label'] }}</h3>
          <ul class="md:columns-2 gap-3">
            @foreach ($group['names'] as $name)
              <li class="mb-4 text-sm break-inside-avoid">{{ $name }}</li>
            @endforeach
          </ul>
        @endforeach
        @if ($list->additional)
          <div class="mt-8">
            <p class="font-bold">{{ $list->additional['desc'] }}</p>
            <ul class="md:columns-2 gap-3">
              @foreach ($list->additional['names'] as $name)
                <li class="mb-4 text-sm break-inside-avoid">{{ $name }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>
    </div>
  @endforeach
</div>

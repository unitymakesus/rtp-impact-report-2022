@props(['lists', 'type', 'orientation'])

<div {{ $attributes->merge(['class' => 'tabs mt-12']) }}>
  <div role="tablist" aria-orientation="{{ $orientation }}" aria-label="">
    @foreach ($lists as $list)
      <button role="tab" class="text-lg" id="tab-{{ $list->slug }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}" aria-controls="tabpanel-{{ $list->slug }}">{{ $list->label }}</button>
    @endforeach
  </div>
  @foreach ($lists as $list)
    <div tabindex="0" role="tabpanel" id="tabpanel-{{ $list->slug }}" aria-labelledby="tab-{{ $list->slug }}" {{ $loop->first ? '' : 'hidden' }}>
      <div class="pl-[30px] md:pl-0">
        <h3 class="font-bold mb-4 md:mt-0">{{ $list->label }}</h3>
        <ul class="md:columns-2 gap-3">
          @foreach ($list->items as $item)
            <li class="mb-4 text-sm break-inside-avoid">{{ $item }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endforeach
</div>

<div>
    <div class="mb-10 flex flex-wrap gap-2" aria-label="Filter proyek">
        @foreach ($projectTypes->prepend('Semua') as $type)
            <button wire:click="setFilter('{{ $type }}')" wire:key="filter-{{ $type }}" class="border px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] transition {{ $filter === $type ? 'border-amber-600 bg-amber-600 text-white' : 'border-stone-300 text-stone-600 hover:border-stone-950 hover:text-stone-950' }}">{{ $type }}</button>
        @endforeach
    </div>
    <div class="grid gap-x-5 gap-y-10 md:grid-cols-2 lg:grid-cols-12">
        @forelse ($projects as $project)
            <article wire:key="project-{{ $project->id }}" class="group {{ $loop->first ? 'lg:col-span-7' : 'lg:col-span-5' }}">
                <div class="relative aspect-[4/3] overflow-hidden bg-stone-200">
                    <img src="{{ $project->cover_image }}" alt="{{ $project->title }} di {{ $project->location }}" class="h-full w-full object-cover grayscale-[15%] transition duration-700 group-hover:scale-[1.025] group-hover:grayscale-0" loading="lazy">
                    <span class="absolute left-0 top-0 bg-stone-950 px-3 py-2 text-[10px] font-semibold uppercase tracking-[0.2em] text-white">{{ $project->year }}</span>
                </div>
                <div class="grid grid-cols-[1fr_auto] gap-5 border-b border-stone-300 py-5">
                    <div><p class="mb-1 text-[11px] font-semibold uppercase tracking-[0.18em] text-amber-700">{{ $project->project_type }} · {{ $project->location }}</p><h3 class="font-serif text-2xl text-stone-950">{{ $project->title }}</h3></div>
                    <svg class="mt-2 size-5 transition group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5 12h14M13 6l6 6-6 6" stroke-width="1.5"/></svg>
                </div>
            </article>
        @empty
            <p class="col-span-full border-y border-stone-300 py-12 text-stone-600">Belum ada proyek dalam kategori ini.</p>
        @endforelse
    </div>
</div>

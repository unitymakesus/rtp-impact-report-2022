@extends('_layouts.main')

@section('body')
  @include('_partials.header')
  <main>
    <section class="py-16">
      <div class="container">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold">At-a-Glance</h2>

        <div class="text-red-600 mb-16">
          <h3 class="font-bold text-6xl mb-4">RTP is</h3>
          <ul class="grid gap-8 lg:grid-cols-12 list-none p-0 m-0">
            <li class="card bg-slate-200 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">7,000</strong> Acres</li>
            <li class="card bg-slate-200 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">400+</strong> Established and Startup Companies</li>
            <li class="card bg-slate-200 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">60,000+</strong> Employees</li>
          </ul>
        </div>

        <div class="text-purple">
          <h3 class="font-bold text-6xl mb-4">2022 Growth by the Numbers</h3>
          <ul class="grid gap-8 lg:grid-cols-12 list-none p-0 m-0">
            <li class="card bg-slate-200 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">+8,000</strong> Jobs Announced</li>
            <li class="card bg-slate-200 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">$4.7B+</strong> Investments Announced</li>
            <li class="card bg-slate-200 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">32.57%</strong> Minority & Women-Owned Businesses of RTF Vendor Contracts</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="bg-slate-800 text-white py-16">
      <div class="container">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold text-slate-100">Community</h2>
      </div>
    </section>

    <section class="py-16">
      <div class="container">
        <h2 class="text-dark-blue text-5xl lg:text-7xl xl:text-9xl font-bold">DEI+ Partnerships</h2>
        <div class="max-w-2xl">
          <p>Diversity, equity, inclusion and belonging is crucial to the growth of RTP. As we break down the silos across RTP companies to collaborate and synergize our efforts, we benefit from the resulting advancement in talent attraction, contributing to better business outcomes for all. We recognize that the next generation of leaders not only values, but represents, a diverse and equal workforce.</p>

          <h3 class="text-dark-blue font-bold text-2xl">STEM RTP</h3>
          <p>The Research Triangle Park Charitable Fund, in partnership with the RTP Diversity, Equity and Inclusion (DEI) Collective announced the second cohort for the STEM RTP grant.⁠⁠These funds are awarded to programs working at the intersection of STEM and diversity, equity, and inclusion.</p>
        </div>

        <h4 class="text-dark-blue font-bold text-xl">2022 Recipients</h4>
        <div class="grid gap-x-8 gap-y-16 sm:grid-cols-12 mt-4">
          @foreach ($recipients as $recipient)
            <article class="relative sm:col-span-6 lg:col-span-4">
              <figure class="flex itemc-center justify-center relative min-h-[300px] bg-slate-200">
                <img class="absolute w-full h-full object-contain object-center max-w-[300px]" src="{{ $recipient->logo }}" alt="" />
              </figure>
              <h4 class="mt-4">
                @if ($recipient->link)
                  <a class="a11y-link-wrap hover:underline focus:underline" href="{{ $recipient->link }}">{{ $recipient->title }}</a>
                @else
                  {{ $recipient->title }}
                @endif
              </h4>
            </article>
          @endforeach
        </div>

        <div class="max-w-6xl">
          <h3 class="text-dark-blue text-2xl font-bold">RTP DEI Collective</h3>
          <p>Founded in the fall of 2019 with the goal of uniting and amplifying RTP companies’ diversity, equity, and inclusion efforts, the RTP DEI Collective has grown to include more than 30 companies and partners. The Collective works to:</p>

          <div class="grid gap-16 grid-cols-12 my-8">
            <ul class="list-disc pl-4 font-bold md:col-span-6">
              <li class="mb-4">ESTABLISH a network of professionals who share the same interests and goals for DEI.</li>
              <li class="mb-4">CONNECT with regional efforts in the Triangle to showcase the Park as a diverse and welcoming center of business.</li>
              <li class="mb-4">INTEGRATE DEI actions within our organizations with a focus on anti-racism and social justice for marginalized groups.</li>
              <li class="mb-4">AMPLIFY visibility and engagement for existing DEI initiatives in RTP.</li>
              <li class="mb-4">SCALE existing events and programs to create a bigger, broader impact for the 60,000 people working in RTP.</li>
              <li class="mb-4">CHAMPION Park companies who are working to begin or scale their DEI efforts.</li>
            </ul>

            <div class="md:col-span-6">
              <img src="/assets/images/rtp-the-diversity-movement.png" alt="RTP and The Diversity Movement" />
              <h4 class="text-dark-blue text-xl font-bold mt-4">The Diversity Movement</h4>
              <p>The collaboration between The Diversity Movement and RTP DEI Collective creates a powerful partnership for Research Triangle Park (RTP) companies and their employees to help illuminate the true nature of the Research Triangle as a welcoming and diverse community.</p>
            </div>
          </div>
        </div>

        <article class="bg-white p-8 max-w-4xl">
          <div class="grid gap-4 md:grid-cols-12">
            <div class="col-span-8">
              <div class="flex flex-col justify-between h-full">
                <div>
                  <h4 class="text-dark-blue text-xl font-bold mt-0">Crossroads Podcast</h4>
                  <p class="font-bold">Meet Ray Trapp and Sarah Chick at the crossroads of it all. Everything from DEI, talent, the Park, the Triangle Region and beyond.</p>
                </div>
                <a class="inline-block bg-slate-800 text-white p-4 self-start hover:bg-slate-900 focus:bg-slate-900 transition-colors duration-300" href="#">Listen to the Crossroads Podcast</a>
              </div>
            </div>
            <figure class="col-span-4">
              <img src="/assets/images/rtp-crossroads-podcast.jpg" alt="Cover art for the RTP Crossroads Podcast with Ray Trapp." />
            </figure>
          </div>
        </article>
      </div>
    </section>

      <section class="bg-slate-800 text-white py-16">
        <div class="container">
          <h2 class="text-5xl lg:text-6xl font-bold text-slate">Industry Growth</h2>
          <h3 class="text-2xl font-bold uppercase mb-4">News</h3>

          <div class="grid gap-8 sm:gap-y-16 sm:grid-cols-12">
            @for ($i = 0; $i < 12; $i++)
              <article class="sm:col-span-6 lg:col-span-4">
                <img class="mb-2" src="https://via.placeholder.com/800X500" alt="" />
                <h4 class="inline-block mt-0">
                  <a href="#">U.S. FDA authorizes Eli Lilly’s COVID-19 antibody drug</a>
                </h4>
              </article>
            @endfor
          </div>
        </div>
      </section>

      <section class="py-16">
        <div class="container">
          <div class="max-w-4xl">
            <h2 class="text-5xl lg:text-6xl font-bold mb-8">Behind RTP: Research Triangle Foundation</h2>
            <p>It takes a lot of extraordinary people to make RTP an extraordinary community. They love everything that Research Triangle Park is and what it will become. Driven by the same mission that started RTP in 1959, the Foundation exists to create opportunities that positively impacts all North Carolinians.</p>
          </div>

          <div class="max-w-6xl">
            <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
            <ul class="grid gap-8 md:grid-cols-12 list-none p-0 m-0">
              <li class="card text-dark-blue bg-slate-200 p-6 md:col-span-4 font-bold text-lg">Facilitate collaboration between the Triangle universities.</li>
              <li class="card text-red-600 bg-slate-200 p-6 md:col-span-4 font-bold text-lg">Promote cooperation between universities and industry.</li>
              <li class="card text-purple bg-slate-200 p-6 md:col-span-4 font-bold text-lg">Create an economic impact for the residents of North Carolina.</li>
            </ul>
          </div>

          <div class="max-w-6xl">
            <x-tabs :lists="$supporters" type="list" />
          </div>
        </div>
      </section>

    <section class="py-16">
      <div class="container">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold">Stay in Touch</h2>
        <form action="https://us8.list-manage.com/subscribe/post?u=eecd09ba159047b94f51a2c54&amp;id=9fd04dd4fb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
          <div id="mc_embed_signup_scroll">
            <label for="mce-EMAIL">Email address</label>
            <input class="email" type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="Email address" required />
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eecd09ba159047b94f51a2c54_9fd04dd4fb" tabindex="-1" value="" /></div>
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="" />
          </div>
        </form>
      </div>
    </section>
  </main>
  @include('_partials.footer')
@endsection

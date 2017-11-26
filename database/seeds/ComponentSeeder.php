<?php

use App\AnonymousUser;
use App\Component;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::create([
            'name' => 'Simple button',
            'description' => 'A button from tailwind docs',
            'html' => '<button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
    Button
</button>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Form', 'Button']
        ]);

        Component::create([
            'name' => 'Outline button',
            'description' => 'A button from tailwind docs',
            'html' => '<button class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
    Button
</button>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Form', 'Button'],
        ]);

        Component::create([
            'name' => '3D button',
            'description' => 'A 3d button from tailwind docs',
            'html' => '<button class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">
  Button
</button>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Form', 'Button'],
        ]);

        Component::create([
            'name' => 'Button with icon',
            'description' => 'A button with svg from tailwind docs',
            'html' => '<button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded inline-flex items-center">
  <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
  <span>Download</span>
</button>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Form', 'Button'],
        ]);

        Component::create([
            'name' => 'Responsive Header',
            'description' => 'A responsive navigation from tailwind docs',
            'html' => '<nav class="flex items-center justify-between flex-wrap bg-teal p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
    <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
      <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
        Docs
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
        Examples
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
        Blog
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Navigation'],
        ]);

        Component::create([
            'name' => 'Tabs',
            'description' => 'Tabs from tailwind docs',
            'html' => '<ul class="list-reset flex border-b">
  <li class="-mb-px mr-1">
    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Active</a>
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#">Tab</a>
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="#">Tab</a>
  </li>
  <li class="mr-1">
    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Tab</a>
  </li>
</ul>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Navigation'],
        ]);

        Component::create([
            'name' => 'Traditional alert',
            'description' => 'An alert from tailwind docs',
            'html' => '<div class="bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Brbrbr!</strong>
  <span class="block sm:inline">Something seriously went wrong.</span>
  <span class="absolute pin-t pin-b pin-r px-4 py-3">
    <svg class="h-6 w-6 text-red" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Alert'],
        ]);

        Component::create([
            'name' => 'Left Accent Border',
            'description' => 'An alert from tailwind docs',
            'html' => '<div class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
  <p class="font-bold">Be Warned</p>
  <p>Something not ideal might be happening.</p>
</div>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Alert'],
        ]);

        Component::create([
            'name' => 'Solid alert',
            'description' => 'An alert from tailwind docs',
            'html' => '<div class="flex items-center bg-blue text-white text-sm font-bold px-4 py-3" role="alert">
  <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>Something happened that you should know about.</p>
</div>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Alert'],
        ]);

        Component::create([
            'name' => 'Simple card',
            'description' => 'A stacked card from tailwind docs',
            'html' => '<div class="max-w-xs rounded overflow-hidden shadow-lg">
  <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-grey-darker text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
  <div class="px-6 py-4">
    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
  </div>
</div>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Card'],
        ]);

        Component::create([
            'name' => 'Horizontal card',
            'description' => 'A horizontal card from tailwind docs',
            'html' => '<div class="max-w-md w-full lg:flex">
  <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url(\'https://tailwindcss.com/img/card-left.jpg\')" title="Woman holding a mug">
  </div>
  <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
    <div class="mb-8">
      <p class="text-sm text-grey-dark flex items-center">
        <svg class="text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
        </svg>
        Members only
      </p>
      <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
      <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
    </div>
    <div class="flex items-center">
      <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
      <div class="text-sm">
        <p class="text-black leading-none">Jonathan Reinink</p>
        <p class="text-grey-dark">Aug 18</p>
      </div>
    </div>
  </div>
</div>',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'tailwindcss']),
            'tags' => ['Card'],
        ]);

        Component::create([
            'name' => 'Bootstrap like input',
            'description' => 'A input like bootstrap ones',
            'html' => '<input class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">',
            'approved' => true,
            'author' => AnonymousUser::create(['name' => 'killgt']),
            'tags' => ['Form', 'Input']
        ]);
    }
}

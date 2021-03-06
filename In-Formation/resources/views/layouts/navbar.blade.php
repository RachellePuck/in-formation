<div class="relative bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10  px-4 sm:px-6">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="/">
          <span class="sr-only">Workflow</span>
          <img class="h-8 w-auto sm:h-10" src="{{URL('/images/In-Formation.png')}}" alt="">
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/menu -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      @auth
        <nav class="hidden md:flex space-x-10 items-center justify-end md:flex-1 lg:w-0">  
          <a href="{{route('schedule')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Rooster
          </a>
          <a href="{{route('colleagues')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Collega's
          </a>
          <a href="{{route('account')}}" class="text-base font-medium text-gray-500 hover:text-gray-900">
            <div class="flex items-centered">
                Mijn account
            </div>
          </a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-base font-medium text-gray-500 hover:text-gray-900">
            <div class="flex items-centered">
              Log out
            </div>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
          </form>
        </nav>
      @endauth
    </div>
  </div>
</div>
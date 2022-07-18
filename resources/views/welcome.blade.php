@extends('layouts.app')


@section('content')

<div class="container">
  <section class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div
      class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1"
    >
      <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
        <div>
          <img
            src="https://storage.googleapis.com/devitary-image-host.appspot.com/15846435184459982716-LogoMakr_7POjrN.png"
            class="w-32 mx-auto"
          />
        </div>
        <div class="mt-12 flex flex-col items-center">
          <h1 class="text-2xl xl:text-3xl font-extrabold">
            Sign up for templatana
          </h1>
          <div class="w-full flex-1 mt-8">
            <div class="flex flex-col items-center">
            
            </div>
  
            <div class="my-12 border-b text-center">
              <div
                class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2"
              >
               Sign up with e-mail
              </div>
            </div>
  
            <div class="mx-auto max-w-xs">
                <form action="{{ route('login') }}" method="post">
                  @csrf
                  <input
                  class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                  name="email" type="email"
                  placeholder="Email"
                  />
                  <input
                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                    type="password"
                    name="password" placeholder="Password"
                  />
                  @if (session('message'))
                        <div class="px-8 py-4 text-danger">
                          {{ session('message') }}
                        </div>
                  @endif
                  <button type="submit"
                    class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                  >
                </form>
                <svg
                  class="w-6 h-6 -ml-2"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                  <circle cx="8.5" cy="7" r="4" />
                  <path d="M20 8v6M23 11h-6" />
                </svg>
                <span class="ml-3">
                  Log in
                </span>
              </button>
              <p class="mt-6 text-xs text-gray-600 text-center">
                Dont have an account? 
                <a href="{{ route('register') }}" class="border-b border-gray-500 border-dotted">
                  Click here to create an account
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
        <div
          class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
          style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');"
        ></div>
      </div>
    </div>
    <div class="REMOVE-THIS-ELEMENT-IF-YOU-ARE-USING-THIS-PAGE hidden treact-popup fixed inset-0 flex items-center justify-center" style="background-color: rgba(0,0,0,0.3);">
        <div class="max-w-lg p-8 sm:pb-4 bg-white rounded shadow-lg text-center sm:text-left">
          
          <h3 class="text-xl sm:text-2xl font-semibold mb-6 flex flex-col sm:flex-row items-center">
            <div class="bg-green-200 p-2 rounded-full flex items-center mb-4 sm:mb-0 sm:mr-2">
              <svg class="text-green-800 inline-block w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
              </div>
            Free TailwindCSS Component Kit!
          </h3>  
          <p>I recently released Treact, a <span class="font-bold">free</span> TailwindCSS Component Kit built with React.</p>
          <p class="mt-2">It has 52 different UI components, 7 landing pages, and 8 inner pages prebuilt. And they are customizable!</p>
          <div class="mt-8 pt-8 sm:pt-4 border-t -mx-8 px-8 flex flex-col sm:flex-row justify-end leading-relaxed">
            <button class="close-treact-popup px-8 py-3 sm:py-2 rounded border border-gray-400 hover:bg-gray-200 transition duration-300">Close</button>
            <a class="font-bold mt-4 sm:mt-0 sm:ml-4 px-8 py-3 sm:py-2 rounded bg-purple-700 text-gray-100 hover:bg-purple-900 transition duration-300 text-center" href="https://treact.owaiskhan.me" target="_blank">See Treact</a>
          </div>
        </div>
      </div>
  </section>
</div>
@endsection
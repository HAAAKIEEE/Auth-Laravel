<x-layout>
    <!-- component -->
    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
        <div
            class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
            <div
                class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
                <div class="my-3 text-4xl font-bold tracking-wider text-center">
                    <a href="#">K-WD</a>
                </div>
                <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                    With the power of K-WD, you can now focus only on functionaries for your digital products, while
                    leaving the
                    UI design on us!
                </p>
                <p class="flex flex-col items-center justify-center mt-10 text-center">
                    <span>Don't have an account?</span>
                    <a href="#" class="underline">Get Started!</a>
                </p>
                <p class="mt-6 text-sm text-center text-gray-300">
                    Read our <a href="#" class="underline">terms</a> and <a href="#" class="underline">conditions</a>
                </p>
            </div>
            <div class="p-5 bg-white md:flex-1">
                <h3 class="my-4 text-2xl font-semibold text-gray-700">Register Account</h3>
                <form action="{{route('register_user')}}" class="flex flex-col space-y-5" method="POST">
                    @csrf
                    <div class="flex flex-col space-y-1">
                        <label for="name" class="text-sm font-semibold text-gray-500">Name</label>
                        <input type="text" id="name" name="name" autofocus 
                            class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="email" class="text-sm font-semibold text-gray-500">Email address</label>
                        <input type="email" id="email" autofocus name="email"
                            class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
                        <input type="password" id="password" name="password"
                            class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>
                    {{-- <div class="flex items-center space-x-2">
                        <input type="checkbox" id="remember"
                            class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-blue-200" />
                        <label for="remember" class="text-sm font-semibold text-gray-500">Remember me</label>
                    </div> --}}
                    <div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">
                            Register
                        </button>
                    </div>
                    <div class="flex items-center align-middle justify-center space-x-2">
                        <p>Dont have acount ? <span>
                                <a href="/">Register</a> </span></p>

                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>
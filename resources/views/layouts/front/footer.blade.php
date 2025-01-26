<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-4">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-blue-500">Fitalenta</span>
                    <span class="text-gray-400">.id</span>
                </div>
                <p class="text-gray-400">
                    Platform affiliate syariah terpercaya di Indonesia yang menghubungkan para affiliate dengan
                    produk-produk keuangan syariah terbaik.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-blue-500">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-500">Produk</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-500">Galeri</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-blue-500">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-map-marker-alt w-5"></i>
                        <span>Jakarta, Indonesia</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-phone w-5"></i>
                        <span>+62 123 4567 890</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-envelope w-5"></i>
                        <span>info@fitalenta.id</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-500">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-500">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-500">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-500">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights
                    reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-blue-500">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-blue-500">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

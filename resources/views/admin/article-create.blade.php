@extends('layouts.admin')

@section('title', '')

@push('skrip')
    
@endpush

@section('content')
<div class="">
    <!-- Header -->
    <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
        <div class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
            <a href="#" class="text-white text-sm uppercase hidden lg:inline-block font-semibold">Create Article</a>
            
            <!-- User Dropdown -->
            <div class="flex items-center">
                <a href="#" class="text-blueGray-500 block" onclick="openDropdown(event,'user-dropdown')">
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                            <img src="../../assets/img/team-1-800x800.jpg" alt="Profile" class="w-full rounded-full align-middle border-none shadow-lg">
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="relative bg-blue-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div x-data="articleForm()" class="container mx-auto mt-24 px-4">
                <form @submit.prevent="submitArticle" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-blueGray-700 text-sm font-bold mb-2" for="title">
                            Article Title
                        </label>
                        <input x-model="title" 
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-blueGray-700 leading-tight focus:outline-none focus:shadow-outline" 
                               id="title" 
                               type="text" 
                               placeholder="Enter article title"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-blueGray-700 text-sm font-bold mb-2" for="category">
                            Category
                        </label>
                        <select x-model="category" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-blueGray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="category"
                                required>
                            <option value="">Select Category</option>
                            <option value="technology">Technology</option>
                            <option value="business">Business</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="sports">Sports</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-blueGray-700 text-sm font-bold mb-2" for="content">
                            Article Content
                        </label>
                        <textarea x-model="content"
                                  class="shadow appearance-none border rounded w-full py-2 px-3 text-blueGray-700 leading-tight focus:outline-none focus:shadow-outline h-48"
                                  id="content"
                                  placeholder="Write your article content here..."
                                  required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-blueGray-700 text-sm font-bold mb-2">
                            Featured Image
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-blue-300 group">
                                <div class="flex flex-col items-center justify-center pt-7 cursor-pointer">
                                    <svg class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="lowercase text-sm text-gray-400 group-hover:text-blue-600 pt-1 tracking-wider">Select a photo</p>
                                </div>
                                <input type="file" class="hidden" x-on:change="handleFileUpload" accept="image/*">
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" 
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Create Article
                        </button>
                        <a href="{{ route('admin.article') }}" 
                           class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="relative pt-8 pb-6 mt-2">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-6/12 px-4">
                    <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
                        Copyright © <span id="get-current-year">2024</span> 
                        <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">Creative Tim</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    function articleForm() {
        return {
            title: '',
            category: '',
            content: '',
            image: null,
            
            handleFileUpload(event) {
                this.image = event.target.files[0];
            },
            
            submitArticle() {
                // Simulated form submission logic
                const articleData = {
                    title: this.title,
                    category: this.category,
                    content: this.content,
                    image: this.image
                };
                
                console.log('Article submitted:', articleData);
                
                // In a real application, you would send this data to a backend API
                alert('Article created successfully!');
                
                // Optional: Reset form or redirect
                this.resetForm();
            },
            
            resetForm() {
                this.title = '';
                this.category = '';
                this.content = '';
                this.image = null;
            }
        }
    }

    // Current year script
    document.getElementById('get-current-year').textContent = new Date().getFullYear();
</script>

@endsection
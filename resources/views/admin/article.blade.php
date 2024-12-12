@extends('layouts.admin')

@section('title', '')

@push('skrip')
    
@endpush

@section('content')
<div x-data="articlesManagement()">
    <!-- Header -->
    <div class="relative bg-blue-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="flex flex-wrap">
                    <div class="w-full px-4">
                        <h1 class="text-white text-3xl font-semibold">Articles Management</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">Articles List</h3>
                            </div>
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <a  href="{{ route('admin.article.create') }}"
                                    @click="openCreateModal" 
                                    class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                >
                                    Add New Article
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                                <tr>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">ID</th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Title</th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Author</th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Created At</th>
                                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="article in articles" :key="article.id">
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" x-text="article.id"></td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" x-text="article.title"></td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" x-text="article.author"></td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4" x-text="article.createdAt"></td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <button 
                                                    @click="editArticle(article)" 
                                                    class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-3 py-1 rounded outline-none focus:outline-none mr-2 ease-linear transition-all duration-150"
                                                >
                                                    Edit
                                                </button>
                                                <button 
                                                    @click="deleteArticle(article.id)" 
                                                    class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-3 py-1 rounded outline-none focus:outline-none ease-linear transition-all duration-150"
                                                >
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
<script>
    function articlesManagement() {
        return {
            articles: [
                { id: 1, title: 'First Article', author: 'John Doe', createdAt: '2024-01-15' },
                { id: 2, title: 'Another Great Post', author: 'Jane Smith', createdAt: '2024-02-20' },
                { id: 3, title: 'Tech Insights', author: 'Mike Johnson', createdAt: '2024-03-10' }
            ],
            isModalOpen: false,
            modalTitle: 'Create New Article',
            currentArticle: {},
            openCreateModal() {
                this.modalTitle = 'Create New Article';
                this.currentArticle = {};
                this.isModalOpen = true;
            },
            editArticle(article) {
                this.modalTitle = 'Edit Article';
                this.currentArticle = {...article};
                this.isModalOpen = true;
            },
            saveArticle() {
                if (!this.currentArticle.id) {
                    // Create new article
                    this.currentArticle.id = this.articles.length + 1;
                    this.currentArticle.createdAt = new Date().toISOString().split('T')[0];
                    this.currentArticle.author = 'Current User';
                    this.articles.push(this.currentArticle);
                } else {
                    // Update existing article
                    const index = this.articles.findIndex(a => a.id === this.currentArticle.id);
                    this.articles[index] = {...this.currentArticle};
                }
                this.closeModal();
            },
            deleteArticle(id) {
                this.articles = this.articles.filter(article => article.id !== id);
            },
            closeModal() {
                this.isModalOpen = false;
            }
        }
    }
</script>

@endsection
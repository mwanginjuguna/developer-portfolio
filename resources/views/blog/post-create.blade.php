<x-blog.blog-layout>
    <x-slot name="header">
        <x-blog.blog-title title="Create New Post" />
    </x-slot>

    <section>
        <!--add category-->
        <div class="px-6">
            <h4 class="font-medium text-orange-500">Add new Category</h4>

            <div class="py-4 border-b border-slate-600 text-slate-900">
                <form method="post" action="{{route('blog.category-create')}}" class="grid md:grid-cols-3 gap-6">
                    @csrf
                    <input class="rounded-md my-auto w-3/4 p-1.5 px-2.5 text-sm" name="catetory-name" id="category-name" type="text" placeholder="Enter category name">
                    <textarea name="category-description" rows="3" class="p-1.5 my-auto rounded-md text-sm" placeholder="Enter Description ..."></textarea>
                    <x-primary-button type="submit" class="my-auto w-1/2">
                        Add Category
                    </x-primary-button>
                </form>
            </div>
        </div>

        <div class="py-10">
            <form>

                <div>
                    <label for="post-title">
                        Post Title
                    </label>
                    <input type="text" id="post-title" name="post-title">
                </div>

                <div>
                    <label for="post-meta-description">
                        Meta Description
                    </label>
                    <textarea rows="4" id="post-meta-description" name="post-meta-description"></textarea>
                </div>

                <div>
                    <label for="post-featured-image">
                        Featured Image
                    </label>
                    <input type="file" id="post-featured-image" name="post-featured-image">
                </div>

                <div>
                    <label for="post-category">
                        Category
                    </label>
                    <input type="text" id="post-category" name="post-category">
                </div>

                <div>
                    <label for="post-tags">
                        Tags
                    </label>
                    <input type="text" id="post-tags" name="post-tags">
                </div>

                <div>
                    <label for="post-content">
                        Post Content
                    </label>
                    <textarea rows="4" id="post-content" name="post-content"></textarea>
                </div>

                <div>
                    <x-primary-button>
                        Primary Button
                    </x-primary-button>
                </div>

            </form>
        </div>
    </section>

</x-blog.blog-layout>

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FeaturedImage;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // all posts -  only viewed by admin
    public function index(Request $request)
    {
        return view('blog', [
            "posts" => Post::all()
        ]);
    }

    // create new post
    public function create(Request $request)
    {
        return view('blog.post-create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'slug' => 'required|unique:posts,slug',
            'body' => 'required',
            'status' => 'required',
            'is_public' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|array',
            'tag_id.*' => 'exists:tags,id',
            'author' => 'required',
        ]);

        // Create a new post instance
        $post = new Post($validatedData);

        // Save the post
        $post->save();

        // Sync the category
        $post->category()->associate($request->input('category_id'));

        // Sync the tags
        $post->tags()->sync($request->input('tag_id'));

        // Save all images
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images'), $fileName);

            $image = Image::create([
                'title' => $post->title,
                'description' => $post->meta_description,
                'slug' => 'images/' . $fileName,
                'index' => 1,
                'post_id' => $post->id,
                'alt' => '',
                'filename' => '',
            ]);

            // save featured image
            $featuredImage = FeaturedImage::create([
                'post_id' => $post->id,
                'category_id' => $post->categories()->id(),
                'tag_id' => '', // post tag
                'image_id' => $image->id
            ]);

            // Associate the featured image with the post
            $post->featuredImages()->save($featuredImage);
        }

        // Return a response or redirect to a success page
        return response()->json(['message' => 'Post created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function show(Post $post): View
    {
        $post->load('category', 'tags', 'comments', 'replies', 'images', 'documents', 'featuredImages');

        return view('blog.post-show', compact('post'));
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return JsonResponse
     */
    public function update(Request $request, Post $post): JsonResponse
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'slug' => ['required', Rule::unique('posts')->ignore($post->id)],
            'body' => 'required',
            'status' => 'required',
            'is_public' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|array',
            'tag_id.*' => 'exists:tags,id',
            'author' => 'required',
        ]);

        // Update the post with the validated data
        $post->update($validatedData);

        // Sync the category
        $post->category()->associate($request->input('category_id'));
        $post->save();

        // Sync the tags
        $post->tags()->sync($request->input('tag_id'));

        // Return a response
        return response()->json(['message' => 'Post updated successfully']);
    }

    /**
     * @param Post $post
     * @return JsonResponse
     */
    public function destroy(Post $post): JsonResponse
    {
        // Delete the post
        $post->delete();

        // Return a response
        return response()->json(['message' => "Post (#$post->id) deleted successfully"]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function createCategory(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories',
            'description' => ''
        ]);

        $category = Category::create($validatedData);
        $category->slug = strtolower($category->name);

        return response()->json(['message' => 'Category created successfully', 'category' => $category]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function createTag(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:tags',
        ]);

        $tag = Tag::create($validatedData);

        return response()->json(['message' => 'Tag created successfully', 'tag' => $tag]);
    }

    /**
     * @param Tag $tag
     * @return JsonResponse
     */
    public function deleteTag(Tag $tag): JsonResponse
    {
        $tag->delete();

        return response()->json(['message' => 'Tag deleted successfully']);
    }

    /**
     * @param Category $category
     * @return JsonResponse
     */
    public function deleteCategory(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully']);
    }

}

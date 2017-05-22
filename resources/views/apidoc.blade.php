<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>MissKeen API Reference</title>

    <link rel="stylesheet" href="{{ asset('docs/css/style.css') }}" />
    <script src="{{ asset('docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://ditoraharjo.co/misskeen'>MissKeen API Doc</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Introduction</h1>
<p> Welcome to the MissKeen API! You can use our API to access MissKeen API endpoints, which can get information on various recipe and ingredient in our database.</p>
<p> Right now we only have language bindings in Shell! You can view code examples in the dark area to the right. We will make another language bindings in the future.</p>
<!-- END_INFO -->
<h1>Authentication</h1>
<blockquote>
<p>To authorize, use this code:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST "http://ditoraharjo.co/misskeen/api/v1/user/auth" \
-H 'api-key: your-API-Key' \</code></pre>
<blockquote>
<p>Make sure to replace <code>your-API-Key</code> with your personal API key.</p>
</blockquote>
<p> MissKeen uses API keys to allow access to the API. You can register a new MissKeen API key at our developer portal. </p>
<p> MissKeen expects for the API key to be included in all API requests to the server in a <b>header</b> that looks like the following: </p>
<p> <code> api-key : your-API-key </code> </p>
<p> Doesn't have your personal API key yet? register <a href="http://ditoraharjo.co/misskeen/register" target="blank">here</a>  </p>
<aside class="notice">
You must replace <code>your-API-key</code> with your personal API key.
</aside>
<h1>User</h1>
<!-- START_4da3c74fdcbf4cdb10a2b385902f342f -->
<h2>Login Authentication</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST "http://ditoraharjo.co/misskeen/api/v1/user/auth" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key' \
-d '{
"email" : "your@mail.com",
"password" : "your-password"
}'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
    "status": "true",
    "user": {
        "id": "your-user-ID",
        "fullname": "your-name",
        "email": "your@mail.com",
        "telp": "your-phone-number",
        "alamat": "your-address",
        "image": "your-image"
    }
}</code></pre>
<p> This endpoints used for authenticating user login.</p>
<h3>HTTP Request</h3>
<p><code>POST http://ditoraharjo.co/misskeen/api/v1/user/auth</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>email</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>password</td>
<td>string</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_4da3c74fdcbf4cdb10a2b385902f342f -->
<!-- START_7fef01e7235c89049ebe3685de4bff17 -->
<h2>Registration</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST "http://ditoraharjo.co/misskeen/api/v1/user/register" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key' \
-d '{
  "fullname" : "your-name",
  "email" : "your@mail.com",
  "password" : "your-password",
  "telp" : "your-phone-number",
  "alamat" : "your-address",
  "image" : "your-image"
}'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "CREATE"
}</code></pre>
<p> This endpoints used for registering new user.</p>
<h3>HTTP Request</h3>
<p><code>POST http://ditoraharjo.co/misskeen/api/v1/user/register</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Default</th>
</tr>
</thead>
<tbody>
<tr>
<td>fullname</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>email</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>password</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>telp</td>
<td>string</td>
<td>optional</td>
<td>null</td>
</tr>
<tr>
<td>alamat</td>
<td>string</td>
<td>optional</td>
<td>null</td>
</tr>
<tr>
<td>image</td>
<td>encoded image</td>
<td>optional</td>
<td>null</td>
</tr>
</tbody>
</table>
<!-- END_7fef01e7235c89049ebe3685de4bff17 -->
<h1>Recipe</h1>
<!-- START_d0f12eaa93ee7a88953fae3789a7d552 -->
<h2>Get All Recipe</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET "http://ditoraharjo.co/misskeen/api/v1/recipe" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": recipe-id,
        "name": "recipe-name",
        "description": "recipe-description",
        "procedure": "recipe-procedure",
        "portion": recipe-portion,
        "like": recipe-like,
        "rating": recipe-rating,
        "image": "recipe-image",
        "created_at": "recipe-created-date",
        "updated_at": "recipe-updated-date",
        "deleted_at": "recipe-deleted-date",
        "created_by": recipe-maker-ID,
        "updated_by": recipe-updater-ID,
        "deleted_by": recipe-deleter-ID,
        "ingredients": [
            {
                "id": ingredient-ID,
                "name": "ingredient-name",
                "created_at": "ingredient-created-date",
                "updated_at": "ingredient-updated-date",
                "deleted_at": "ingredient-deleted-date",
                "created_by": ingredient-maker-ID,
                "updated_by": ingredient-updater-ID,
                "deleted_by": ingredient-deleter-ID,
                "pivot": {
                    "recipe_id": recipe-ID,
                    "ingredient_id": ingredient-ID
                },
                "ingredient_data": {
                    "id": ingredient-data-ID,
                    "recipe_id": recipe-ID,
                    "ingredient_id": ingredient-ID,
                    "amount": ingredient-amount,
                    "unit": "ingredient-unit",
                    "description": "ingredient-description",
                    "created_at": "ingredient-data-created-date",
                    "updated_at": "ingredient-data-updated-date",
                    "deleted_at": "ingredient-data-deleted-date",
                    "created_by": ingredient-data-maker-ID,
                    "updated_by": ingredient-data-updater-ID,
                    "deleted_by": ingredient-data-deleter-ID,
                }
            },
            {
              "another ingredient" : "..."
            }
        ]
    },
    {
      "another recipe" : "..."
    }
]</code></pre>
<p> This endpoints retrieves all recipe.</p>
<h3>HTTP Request</h3>
<p><code>GET http://ditoraharjo.co/misskeen/api/v1/recipe</code></p>
<h3>Query Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Default</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>user_id</td>
<td>null</td>
<td>Used for get all recipe by User ID</td>
</tr>
</tbody>
</table>
<!-- END_d0f12eaa93ee7a88953fae3789a7d552 -->
<!-- START_75be859fd5fed7cb24f47877389eb72b -->
<h2>Get a Specific Recipe</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET "http://ditoraharjo.co/misskeen/api/v1/recipe/{id}" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": recipe-id,
        "name": "recipe-name",
        "description": "recipe-description",
        "procedure": "recipe-procedure",
        "portion": recipe-portion,
        "like": recipe-like,
        "rating": recipe-rating,
        "image": "recipe-image",
        "created_at": "recipe-created-date",
        "updated_at": "recipe-updated-date",
        "deleted_at": "recipe-deleted-date",
        "created_by": recipe-maker-ID,
        "updated_by": recipe-updater-ID,
        "deleted_by": recipe-deleter-ID,
        "ingredients": [
            {
                "id": ingredient-ID,
                "name": "ingredient-name",
                "created_at": "ingredient-created-date",
                "updated_at": "ingredient-updated-date",
                "deleted_at": "ingredient-deleted-date",
                "created_by": ingredient-maker-ID,
                "updated_by": ingredient-updater-ID,
                "deleted_by": ingredient-deleter-ID,
                "pivot": {
                    "recipe_id": recipe-ID,
                    "ingredient_id": ingredient-ID
                },
                "ingredient_data": {
                    "id": ingredient-data-ID,
                    "recipe_id": recipe-ID,
                    "ingredient_id": ingredient-ID,
                    "amount": ingredient-amount,
                    "unit": "ingredient-unit",
                    "description": "ingredient-description",
                    "created_at": "ingredient-data-created-date",
                    "updated_at": "ingredient-data-updated-date",
                    "deleted_at": "ingredient-data-deleted-date",
                    "created_by": ingredient-data-maker-ID,
                    "updated_by": ingredient-data-updater-ID,
                    "deleted_by": ingredient-data-deleter-ID,
                }
            },
            {
              "another ingredient" : "..."
            }
        ]
    }
]</code></pre>
<p> This endpoints retrieves a specific recipe.</p>
<h3>HTTP Request</h3>
<p><code>GET http://ditoraharjo.co/misskeen/api/v1/recipe/{id}</code></p>
<h3>URL Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>integer</td>
<td>The ID of the recipe to retrieve</td>
</tr>
</tbody>
</table>
<!-- END_75be859fd5fed7cb24f47877389eb72b -->
<!-- START_0786d60947212dbc94aa73a942ce805f -->
<h2>Create Recipe</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
  http://ditoraharjo.co/misskeen/api/v1/recipe \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "name" : "recipe name",
    "description" : "recipe description",
    "procedure" : "recipe procedure",
    "portion" : "the portion of recipe",
    "image" : "recipe picture",
    "created_by" : "User ID of recipe maker",
    "ingredients" : [
      {
        "ingredient_id" : "ingredient ID",
        "amount" : "ingredient amount for the recipe",
        "unit" : "unit for measuring ingredient amount",
        "description" : "description for ingredient to be used in recipe",
        "created_by" : "User ID of recipe maker"
      },
      {
        "another ingredient",
      }
    ]
  }'
</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "CREATE"
}</code></pre>
<p> This endpoints used for creating a new recipe.</p>
<h3>HTTP Request</h3>
<p><code>POST http://ditoraharjo.co/misskeen/api/v1/recipe</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>description</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>procedure</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>portion</td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td>image</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>created_by</td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td>ingredient_id</td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td>amount</td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td>unit</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>description</td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td>created_by</td>
<td>integer</td>
<td>required</td>
</tr>
</tbody>
</table>
<!-- END_0786d60947212dbc94aa73a942ce805f -->
<!-- START_a2de2c9feb149979e061e28298725280 -->
<h2>Update Recipe</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH "http://ditoraharjo.co/misskeen/api/v1/recipe" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "recipe ID"
    "name" : "recipe name",
    "description" : "recipe description",
    "procedure" : "recipe procedure",
    "portion" : "the portion of recipe",
    "image" : "recipe picture",
    "updated_by" : "User ID of recipe maker",
    "ingredients" : [
      {
        "ingredient_id" : "ingredient ID",
        "amount" : "ingredient amount for the recipe",
        "unit" : "unit for measuring ingredient amount",
        "description" : "description for ingredient to be used in recipe",
        "created_by" : "User ID of recipe maker"
      },
      {
        "another ingredient",
      }
    ]
  }'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "UPDATE"
}</code></pre>
<p> This endpoints used for updating recipe.</p>
<h3>HTTP Request</h3>
<p><code>PATCH http://ditoraharjo.co/misskeen/api/v1/recipe</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td>name</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>description</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>procedure</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>portion</td>
<td>integer</td>
<td>optional</td>
</tr>
<tr>
<td>image</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>updated_by</td>
<td>integer</td>
<td>required</td>
</tr>
<tr>
<td>ingredient_id</td>
<td>integer</td>
<td>optional</td>
</tr>
<tr>
<td>amount</td>
<td>integer</td>
<td>optional</td>
</tr>
<tr>
<td>unit</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>description</td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td>updated_by</td>
<td>integer</td>
<td>optional (required if the ingredient is updated)</td>
</tr>
</tbody>
</table>
<!-- END_a2de2c9feb149979e061e28298725280 -->
<!-- START_9a3bc8055aa0db2f7fdf0074b31c5823 -->
<h2>Delete Recipe</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE "http://ditoraharjo.co/misskeen/api/v1/recipe" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "recipe ID",
    "deleted_by" : "User IDs of recipe deleter"
  }'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "DELETE"
}</code></pre>
<p> This endpoints used for deleting recipe.</p>
<h3>HTTP Request</h3>
<p><code>DELETE http://ditoraharjo.co/misskeen/api/v1/recipe</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>integer</td>
<td>required</td>
<td>The ID of the recipe to delete</td>
</tr>
<tr>
<td>deleted_by</td>
<td>integer</td>
<td>required</td>
<td>The ID of the user who delete the recipe</td>
</tr>
</tbody>
</table>
<!-- END_9a3bc8055aa0db2f7fdf0074b31c5823 -->
<h1>Ingredient</h1>
<p>Welcome to the generated API reference.
<a href="http://localhost/docs/collection.json">Get Postman Collection</a></p>
<!-- START_7fa38cd83d8af56179c16242660ea14b -->
<h2>Get All Ingredient</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": ingredient-id,
        "name": "ingredient-name",
        "created_at": "ingredient-created-date",
        "updated_at": "ingredient-updated-date",
        "deleted_at": "ingredient-deleted-date",
        "created_by": ingredient-maker-ID,
        "updated_by": ingredient-updater-ID,
        "deleted_by": ingredient-deleter-ID,
    },
    {
        "another ingredient": "..."
    }
]</code></pre>
<p> This endpoints retrieves all ingredient.</p>
<h3>HTTP Request</h3>
<p><code>GET http://ditoraharjo.co/misskeen/api/v1/ingredient</code></p>
<!-- END_7fa38cd83d8af56179c16242660ea14b -->
<!-- START_cbadb697a20a999f5cce57f767424c41 -->
<h2>Get a Specific Ingredient</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET "http://ditoraharjo.co/misskeen/api/v1/ingredient/{id}" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
    "id": ingredient-id,
    "name": "ingredient-name",
    "created_at": "ingredient-created-date",
    "updated_at": "ingredient-updated-date",
    "deleted_at": "ingredient-deleted-date",
    "created_by": ingredient-maker-ID,
    "updated_by": ingredient-updater-ID,
    "deleted_by": ingredient-deleter-ID,
}</code></pre>
<p> This endpoints retrieves a specific ingredient.</p>
<h3>HTTP Request</h3>
<p><code>GET http://ditoraharjo.co/misskeen/api/v1/ingredient/{id}</code></p>
<h3>URL Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>integer</td>
<td>The ID of the ingredient to retrieve</td>
</tr>
</tbody>
</table>
<!-- END_cbadb697a20a999f5cce57f767424c41 -->
<!-- START_a12996ecacd5b464bb59d4b1b0aa3d0a -->
<h2>Create Ingredient</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "name" : "ingredient name",
    "created_by" : "User IDs of ingredient maker"
  }'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "CREATE"
}</code></pre>
<p> This endpoints used for creating a new ingredient.</p>
<h3>HTTP Request</h3>
<p><code>POST http://ditoraharjo.co/misskeen/api/v1/ingredient</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>name</td>
<td>string</td>
<td>required</td>
<td>Name for ingredient that will be created</td>
</tr>
<tr>
<td>created_by</td>
<td>integer</td>
<td>required</td>
<td>The ID of the user who make the ingredient</td>
</tr>
</tbody>
</table>
<!-- END_a12996ecacd5b464bb59d4b1b0aa3d0a -->
<!-- START_ad56434c0b1e80969f5db1bbbdfbfb73 -->
<h2>Update Ingredient</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PATCH "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "ingredient ID",
    "name" : "ingredient name",
    "updated_by" : "User IDs of ingredient updater"
  }'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "UPDATE"
}</code></pre>
<p> This endpoints used for updating ingredient.</p>
<h3>HTTP Request</h3>
<p><code>PATCH http://ditoraharjo.co/misskeen/api/v1/ingredient</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>integer</td>
<td>required</td>
<td>ID for ingredient that will be updated</td>
</tr>
<tr>
<td>name</td>
<td>string</td>
<td>required</td>
<td>Name for ingredient that will be updated</td>
</tr>
<tr>
<td>updated_by</td>
<td>integer</td>
<td>required</td>
<td>The ID of the user who update the ingredient</td>
</tr>
</tbody>
</table>
<!-- END_ad56434c0b1e80969f5db1bbbdfbfb73 -->
<!-- START_2ff49e5a4a812f4072ac8a3fb55e0585 -->
<h2>Delete Ingredient</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "ingredient ID",
    "deleted_by" : "User IDs of ingredient deleter"
  }'</code></pre>
<blockquote>
<p>Example response:</p>
</blockquote>
<pre><code class="language-json">{
  "status": "true",
  "method": "DELETE"
}</code></pre>
<p> This endpoints used for deleting ingredient.</p>
<h3>HTTP Request</h3>
<p><code>DELETE http://ditoraharjo.co/misskeen/api/v1/ingredient</code></p>
<h3>Request Body Parameters</h3>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>integer</td>
<td>required</td>
<td>ID for ingredient that will be deleted</td>
</tr>
<tr>
<td>updated_by</td>
<td>integer</td>
<td>required</td>
<td>The ID of the user who delete the ingredient</td>
</tr>
</tbody>
</table>
<!-- END_2ff49e5a4a812f4072ac8a3fb55e0585 --><h1>Errors</h1>
<p>The MissKeen API uses the following error codes:</p>
<table>
<thead>
<tr>
<th>Error Code</th>
<th>Meaning</th>
</tr>
</thead>
<tbody>
<tr>
<td>400</td>
<td>Bad Request -- Your request sucks</td>
</tr>
<tr>
<td>401</td>
<td>Unauthorized -- Your API key is wrong</td>
</tr>
<tr>
<td>403</td>
<td>Forbidden -- The data requested is hidden for administrators only</td>
</tr>
<tr>
<td>404</td>
<td>Not Found -- The specified request could not be found</td>
</tr>
<tr>
<td>405</td>
<td>Method Not Allowed -- You tried to access a data with an invalid method</td>
</tr>
<tr>
<td>406</td>
<td>Not Acceptable -- You requested a format that isn't json</td>
</tr>
<tr>
<td>410</td>
<td>Gone -- The data requested has been removed from our servers</td>
</tr>
<tr>
<td>418</td>
<td>I'm a teapot</td>
</tr>
<tr>
<td>429</td>
<td>Too Many Requests -- You're requesting too many data! Slow down!</td>
</tr>
<tr>
<td>500</td>
<td>Internal Server Error -- We had a problem with our server. Try again later.</td>
</tr>
<tr>
<td>503</td>
<td>Service Unavailable -- We're temporarially offline for maintanance. Please try again later.</td>
</tr>
</tbody>
</table>
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                              </div>
                </div>
    </div>
  </body>
</html>

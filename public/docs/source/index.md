---
title: MissKeen API Reference

language_tabs:
- bash

includes:
- errors

search: true

toc_footers:
- <a href='http://ditoraharjo.co/misskeen'>MissKeen API Doc</a>
---
<!-- START_INFO -->
# Introduction

<p> Welcome to the MissKeen API! You can use our API to access MissKeen API endpoints, which can get information on various recipe and ingredient in our database.</p>
<p> Right now we only have language bindings in Shell! You can view code examples in the dark area to the right. We will make another language bindings in the future.</p>
<!-- END_INFO -->

#Authentication
> To authorize, use this code:

```bash
curl -X POST "http://ditoraharjo.co/misskeen/api/v1/user/auth" \
-H 'api-key: your-API-Key' \
```

> Make sure to replace <code>your-API-Key</code> with your personal API key.

<p> MissKeen uses API keys to allow access to the API. You can register a new MissKeen API key at our developer portal. </p>
<p> MissKeen expects for the API key to be included in all API requests to the server in a <b>header</b> that looks like the following: </p>
<p> <code> api-key : your-API-key </code> </p>
<p> Doesn't have your personal API key yet? register <a href="http://ditoraharjo.co/misskeen/register" target="blank">here</a>  </p>
<aside class="notice">
You must replace <code>your-API-key</code> with your personal API key.
</aside>


# User
<!-- START_4da3c74fdcbf4cdb10a2b385902f342f -->
## Login Authentication
> Example request:

```bash
curl -X POST "http://ditoraharjo.co/misskeen/api/v1/user/auth" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key' \
-d '{
"email" : "your@mail.com",
"password" : "your-password"
}'
```
> Example response:

```json
{
    "status": "true",
    "user": {
        "id": "your-user-ID",
        "fullname": "your-name",
        "email": "your@mail.com",
        "telp": "your-phone-number",
        "alamat": "your-address",
        "image": "your-image"
    }
}
```
<p> This endpoints used for authenticating user login.</p>

### HTTP Request
`POST http://ditoraharjo.co/misskeen/api/v1/user/auth`

### Request Body Parameters

Parameter | Type | Status
--------- | ------- | ------- |
    email | string |  required
    password | string |  required


<!-- END_4da3c74fdcbf4cdb10a2b385902f342f -->

<!-- START_7fef01e7235c89049ebe3685de4bff17 -->
## Registration
> Example request:

```bash
curl -X POST "http://ditoraharjo.co/misskeen/api/v1/user/register" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key' \
-d '{
  "fullname" : "your-name",
  "email" : "your@mail.com",
  "password" : "your-password",
  "telp" : "your-phone-number",
  "alamat" : "your-address",
  "image" : "your-image"
}'
```

> Example response:

```json
{
  "status": "true",
  "method": "CREATE"
}
```

<p> This endpoints used for registering new user.</p>

### HTTP Request
`POST http://ditoraharjo.co/misskeen/api/v1/user/register`

### Request Body Parameters

Parameter | Type | Status | Default
--------- | ------- | ------- | ------- |
  fullname | string |  required |
  email | string |  required |
  password | string |  required |
  telp | string |  optional | null
  alamat | string |  optional | null
  image | encoded image |  optional | null
<!-- END_7fef01e7235c89049ebe3685de4bff17 -->

#Recipe
<!-- START_d0f12eaa93ee7a88953fae3789a7d552 -->
## Get All Recipe
> Example request:

```bash
curl -X GET "http://ditoraharjo.co/misskeen/api/v1/recipe" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'
```

> Example response:

```json
[
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
]
```

<p> This endpoints retrieves all recipe.</p>

### HTTP Request
`GET http://ditoraharjo.co/misskeen/api/v1/recipe`

### Query Parameters

Parameter | Default | Description |
--------- | ------- | ------- |
  user_id | null |  Used for get all recipe by User ID |

<!-- END_d0f12eaa93ee7a88953fae3789a7d552 -->

<!-- START_75be859fd5fed7cb24f47877389eb72b -->
## Get a Specific Recipe

> Example request:

```bash
curl -X GET "http://ditoraharjo.co/misskeen/api/v1/recipe/{id}" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'
```

> Example response:

```json
[
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
]
```

<p> This endpoints retrieves a specific recipe.</p>

### HTTP Request
`GET http://ditoraharjo.co/misskeen/api/v1/recipe/{id}`

### URL Parameters

Parameter | Type | Description |
--------- | ------- | ------- |
  id | integer | The ID of the recipe to retrieve |


<!-- END_75be859fd5fed7cb24f47877389eb72b -->

<!-- START_0786d60947212dbc94aa73a942ce805f -->
## Create Recipe

> Example request:

```bash
curl -X POST \
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

```

> Example response:

```json
{
  "status": "true",
  "method": "CREATE"
}
```

<p> This endpoints used for creating a new recipe.</p>

### HTTP Request
`POST http://ditoraharjo.co/misskeen/api/v1/recipe`

### Request Body Parameters

Parameter | Type | Status |
--------- | ------- | ------- | -------
    name | string |  required  |
    description | string |  optional  |
    procedure | string |  required  |
    portion | integer |  required  |
    image | string |  required  |
    created_by | integer |  required  |
    ingredient_id | integer |  required  |
    amount | integer |  required  |
    unit | string |  required  |
    description | string |  required  |
    created_by | integer |  required  |

<!-- END_0786d60947212dbc94aa73a942ce805f -->
<!-- START_a2de2c9feb149979e061e28298725280 -->
## Update Recipe

> Example request:

```bash
curl -X PATCH "http://ditoraharjo.co/misskeen/api/v1/recipe" \
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
  }'
```
> Example response:

```json
{
  "status": "true",
  "method": "UPDATE"
}
```

<p> This endpoints used for updating recipe.</p>

### HTTP Request
`PATCH http://ditoraharjo.co/misskeen/api/v1/recipe`

### Request Body Parameters

Parameter | Type | Status |
--------- | ------- | ------- | -------
    id | integer |  required  |
    name | string |  optional  |
    description | string |  optional  |
    procedure | string |  optional  |
    portion | integer |  optional  |
    image | string |  optional  |
    updated_by | integer |  required  |
    ingredient_id | integer |  optional  |
    amount | integer |  optional  |
    unit | string |  optional  |
    description | string |  optional  |
    updated_by | integer |  optional (required if the ingredient is updated)  |


<!-- END_a2de2c9feb149979e061e28298725280 -->

<!-- START_9a3bc8055aa0db2f7fdf0074b31c5823 -->
## Delete Recipe

> Example request:

```bash
curl -X DELETE "http://ditoraharjo.co/misskeen/api/v1/recipe" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "recipe ID",
    "deleted_by" : "User IDs of recipe deleter"
  }'
```

> Example response:

```json
{
  "status": "true",
  "method": "DELETE"
}
```

<p> This endpoints used for deleting recipe.</p>

### HTTP Request
`DELETE http://ditoraharjo.co/misskeen/api/v1/recipe`

### Request Body Parameters

Parameter | Type | Status | Description |
--------- | ------- | ------- | ------- |
    id | integer |  required  | The ID of the recipe to delete |
    deleted_by | integer |  required  | The ID of the user who delete the recipe |

<!-- END_9a3bc8055aa0db2f7fdf0074b31c5823 -->


#Ingredient
Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- START_7fa38cd83d8af56179c16242660ea14b -->
## Get All Ingredient

> Example request:

```bash
curl -X GET "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'
```

> Example response:

```json
[
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
]
```

<p> This endpoints retrieves all ingredient.</p>

### HTTP Request
`GET http://ditoraharjo.co/misskeen/api/v1/ingredient`


<!-- END_7fa38cd83d8af56179c16242660ea14b -->

<!-- START_cbadb697a20a999f5cce57f767424c41 -->
## Get a Specific Ingredient

> Example request:

```bash
curl -X GET "http://ditoraharjo.co/misskeen/api/v1/ingredient/{id}" \
-H "Content-Type: application/json" \
-H 'api-key: your-API-Key'
```

> Example response:

```json
{
    "id": ingredient-id,
    "name": "ingredient-name",
    "created_at": "ingredient-created-date",
    "updated_at": "ingredient-updated-date",
    "deleted_at": "ingredient-deleted-date",
    "created_by": ingredient-maker-ID,
    "updated_by": ingredient-updater-ID,
    "deleted_by": ingredient-deleter-ID,
}
```

<p> This endpoints retrieves a specific ingredient.</p>

### HTTP Request
`GET http://ditoraharjo.co/misskeen/api/v1/ingredient/{id}`

### URL Parameters

Parameter | Type | Description |
--------- | ------- | ------- |
  id | integer | The ID of the ingredient to retrieve |

<!-- END_cbadb697a20a999f5cce57f767424c41 -->

<!-- START_a12996ecacd5b464bb59d4b1b0aa3d0a -->
## Create Ingredient

> Example request:

```bash
curl -X POST "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "name" : "ingredient name",
    "created_by" : "User IDs of ingredient maker"
  }'
```

> Example response:

```json
{
  "status": "true",
  "method": "CREATE"
}
```

<p> This endpoints used for creating a new ingredient.</p>

### HTTP Request
`POST http://ditoraharjo.co/misskeen/api/v1/ingredient`

### Request Body Parameters

Parameter | Type | Status | Description |
--------- | ------- | ------- | ------- |
    name | string |  required  | Name for ingredient that will be created |
    created_by | integer |  required  | The ID of the user who make the ingredient |

<!-- END_a12996ecacd5b464bb59d4b1b0aa3d0a -->

<!-- START_ad56434c0b1e80969f5db1bbbdfbfb73 -->
## Update Ingredient

> Example request:

```bash
curl -X PATCH "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "ingredient ID",
    "name" : "ingredient name",
    "updated_by" : "User IDs of ingredient updater"
  }'
```

> Example response:

```json
{
  "status": "true",
  "method": "UPDATE"
}
```

<p> This endpoints used for updating ingredient.</p>

### HTTP Request
`PATCH http://ditoraharjo.co/misskeen/api/v1/ingredient`

### Request Body Parameters

Parameter | Type | Status | Description |
--------- | ------- | ------- | ------- |
    id | integer |  required  | ID for ingredient that will be updated |
    name | string |  required  | Name for ingredient that will be updated |
    updated_by | integer |  required  | The ID of the user who update the ingredient |


<!-- END_ad56434c0b1e80969f5db1bbbdfbfb73 -->

<!-- START_2ff49e5a4a812f4072ac8a3fb55e0585 -->
## Delete Ingredient

> Example request:

```bash
curl -X DELETE "http://ditoraharjo.co/misskeen/api/v1/ingredient" \
  -H "Content-Type: application/json" \
  -H 'api-key: your-API-Key' \
  -d '{
    "id" : "ingredient ID",
    "deleted_by" : "User IDs of ingredient deleter"
  }'
```

> Example response:

```json
{
  "status": "true",
  "method": "DELETE"
}
```

<p> This endpoints used for deleting ingredient.</p>

### HTTP Request
`DELETE http://ditoraharjo.co/misskeen/api/v1/ingredient`

### Request Body Parameters

Parameter | Type | Status | Description |
--------- | ------- | ------- | ------- |
    id | integer |  required  | ID for ingredient that will be deleted |
    updated_by | integer |  required  | The ID of the user who delete the ingredient |


<!-- END_2ff49e5a4a812f4072ac8a3fb55e0585 -->

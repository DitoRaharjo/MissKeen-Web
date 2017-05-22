---
title: MissKeen API Reference

language_tabs:
- bash

includes:

search: true

toc_footers:
- <a href='http://ditoraharjo.co/misskeen'>MissKeen API</a>
---
<!-- START_INFO -->
# Introduction

<p> Welcome to the Kittn API! You can use our API to access Kittn API endpoints, which can get information on various cats, kittens, and breeds in our database.</p>
<p> We have language bindings in Shell, Ruby, and Python! You can view code examples in the dark area to the right, and you can switch the programming language of the examples with the tabs in the top right.</p>
<p> This example API documentation page was created with Whiteboard. Feel free to edit it and use it as a base for your own API’s documentation.</p>
[Get Postman Collection](http://localhost/docs/collection.json)
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
<p> Welcome to the Kittn API! You can use our API to access Kittn API endpoints, which can get information on various cats, kittens, and breeds in our database.</p>
<p> We have language bindings in Shell, Ruby, and Python! You can view code examples in the dark area to the right, and you can switch the programming language of the examples with the tabs in the top right.</p>
<p> This example API documentation page was created with Whiteboard. Feel free to edit it and use it as a base for your own API’s documentation.</p>
[Get Postman Collection](http://localhost/docs/collection.json)


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

<p> Welcome to the Kittn API! You can use our API to access Kittn API endpoints, which can get information on various cats, kittens, and breeds in our database.</p>
<p> We have language bindings in Shell, Ruby, and Python! You can view code examples in the dark area to the right, and you can switch the programming language of the examples with the tabs in the top right.</p>
<p> This example API documentation page was created with Whiteboard. Feel free to edit it and use it as a base for your own API’s documentation.</p>
[Get Postman Collection](http://localhost/docs/collection.json)

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

#general
<!-- START_7fa38cd83d8af56179c16242660ea14b -->
## api/v1/ingredient

> Example request:

```bash
curl -X GET "http://localhost/api/v1/ingredient" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ingredient",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "name": "Bawang Putih",
        "created_at": "2017-05-06 18:30:41",
        "updated_at": "2017-05-06 18:30:41",
        "deleted_at": null,
        "created_by": null,
        "updated_by": null,
        "deleted_by": null
    },
    {
        "id": 2,
        "name": "Daging Ayam",
        "created_at": "2017-05-06 18:30:51",
        "updated_at": "2017-05-06 18:30:51",
        "deleted_at": null,
        "created_by": null,
        "updated_by": null,
        "deleted_by": null
    },
    {
        "id": 3,
        "name": "Pete",
        "created_at": "2017-05-06 18:30:59",
        "updated_at": "2017-05-06 18:30:59",
        "deleted_at": null,
        "created_by": null,
        "updated_by": null,
        "deleted_by": null
    },
    {
        "id": 4,
        "name": "Bawang Merah",
        "created_at": "2017-05-06 18:31:09",
        "updated_at": "2017-05-06 18:31:09",
        "deleted_at": null,
        "created_by": null,
        "updated_by": null,
        "deleted_by": null
    },
    {
        "id": 5,
        "name": "Garam",
        "created_at": "2017-05-06 18:31:37",
        "updated_at": "2017-05-06 18:31:37",
        "deleted_at": null,
        "created_by": null,
        "updated_by": null,
        "deleted_by": null
    },
    {
        "id": 6,
        "name": "Merica",
        "created_at": "2017-05-06 18:33:48",
        "updated_at": "2017-05-06 18:33:48",
        "deleted_at": null,
        "created_by": null,
        "updated_by": null,
        "deleted_by": null
    }
]
```

### HTTP Request
`GET api/v1/ingredient`

`HEAD api/v1/ingredient`


<!-- END_7fa38cd83d8af56179c16242660ea14b -->

<!-- START_cbadb697a20a999f5cce57f767424c41 -->
## api/v1/ingredient/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/ingredient/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ingredient/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "name": "Bawang Putih",
    "created_at": "2017-05-06 18:30:41",
    "updated_at": "2017-05-06 18:30:41",
    "deleted_at": null,
    "created_by": null,
    "updated_by": null,
    "deleted_by": null
}
```

### HTTP Request
`GET api/v1/ingredient/{id}`

`HEAD api/v1/ingredient/{id}`


<!-- END_cbadb697a20a999f5cce57f767424c41 -->

<!-- START_a12996ecacd5b464bb59d4b1b0aa3d0a -->
## api/v1/ingredient

> Example request:

```bash
curl -X POST "http://localhost/api/v1/ingredient" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ingredient",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/ingredient`


<!-- END_a12996ecacd5b464bb59d4b1b0aa3d0a -->

<!-- START_ad56434c0b1e80969f5db1bbbdfbfb73 -->
## api/v1/ingredient

> Example request:

```bash
curl -X PATCH "http://localhost/api/v1/ingredient" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ingredient",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/ingredient`


<!-- END_ad56434c0b1e80969f5db1bbbdfbfb73 -->

<!-- START_2ff49e5a4a812f4072ac8a3fb55e0585 -->
## api/v1/ingredient

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/ingredient" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/ingredient",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/ingredient`


<!-- END_2ff49e5a4a812f4072ac8a3fb55e0585 -->

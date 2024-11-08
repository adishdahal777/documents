# Weekly Training Session

1. Frontend Development ( 2 Weeks )
    1. HTML ( 3Days )
    2. CSS ( 3Days)
    3. 1 Day ( Combine HTML CSS )
    4. JS ( 3Days )
    5. Jquery ( 3Days )
    6. 1 Days ( Combine, HTML CSS JS JQuery )
2. CSS Frameworks ( 1 Weeks )
    1. Tailwind CSS ( 6 Days )
    2. 1 Days ( Combine HTML Tailwind JS JQuery )
    3. Bootstrap ( Self )
3. Backend Developemnt ( 2 Weeks )
    1. Api Integration ( 5 Days )
    2. Database ( php MySql )  ( including Saturday 3Days ) 
    3. Php ( CRUD ⇒ Create Read Update Delete ) ( 4 Days )
    4. 1 Day ( Combine HTML Tailwind Php )
4. Backend Framework ( Remaining Days )
    1. Laravel 
    2. CRUD Operation
    3. Combine OverAll
    
    ## **Day - 1 ( HTML )**
    
    Refrences 
    
    1. https://www.geeksforgeeks.org/html-tutorial/
    2. https://w3schools.com/html/default.asp

Step 1 : 

1. New Folder → **Training Aditiya**
2. Open with VS Code ( Text Editior )
3. New file ( **index.html** )

1. Basic HTML Skeleton.

```html
<html>

<head>
    <title>Aditiya</title>
</head>

<body>
    <!-- Content goes here -->
</body>

</html>
```

1. High Level HTML Skeleton

```html
<!-- Set the html document type -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Support multiple character sets -->
    <meta charset="UTF-8">
    <!-- Responsive for multiple devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Document</title>
</head>

<body>
    <!-- Content goes here -->
</body>

</html>
```

```html

<body>
 <!-- Content goes here -->
    <h1>This is my first heading</h1>
    <h2>This is my second heading</h2>
    <h3>This is my third heading</h3>
    <h4>This is my fourth heading</h4>
    <h5>This is my fifth heading</h5>
    <h6>This is my sixth heading</h6>

    <p>Lorem ipsum <b> dolor sit amet consectetur </b> adipisicing elit. <i> Est molestias temporibus natus esse nemo.
            Iure
            sed nihil </i>
        enim nulla in? Magni sit <u>
            exercitationem accusantium iure animi. Distinctio officiis totam voluptate pariatur
            odit sunt natus consequatur eligendi eos, iste labore quo tenetur aspernatur provident explicabo incidunt
            inventore! Ea quae libero accusamus, dolores numquam culpa atque laboriosam, quam recusandae qui nemo
            veritatis
        </u> cupiditate accusantium repudiandae tempore sit nobis animi in sed veniam expedita! Labore eaque porro id
        quos
        vitae sunt provident quisquam, dolore dolorem ipsa, nostrum tenetur mollitia. Eligendi cumque harum cupiditate
        quasi voluptatum deleniti illo ducimus aperiam inventore. Unde praesentium ullam illum autem libero aperiam
        ipsam maiores dolorem distinctio, maxime, perferendis expedita cumque iste atque repellat vitae delectus impedit
        itaque consectetur dolorum est maiores eos ea minus ad consequuntur sunt quia at voluptatum deleniti. Quas
        praesentium architecto delectus repellat fugiat?</p>

    <b>Hehe</b>
    <i>Hi</i>
    <img src="" alt="">
    <br>
    <!-- Level of Tags -->
    <!--
        1. Block Tag
            eg : heading tag, div
        2. Inline Tag
            eg : i , u, b, strong, 
        3. Self Closing Tag
            eg : <br> <img> 
        4. Closing Tag
            eg : <p> </p>, <h1> </h1>,
        -->
</body>
```

```html
<!-- Set the html document type -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Support multiple character sets -->
    <meta charset="UTF-8">
    <!-- Responsive for multiple devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page title -->
    <title>Document</title>

    <!-- Page FAVICON -->
    <link rel="icon" type="image/x-icon" href="./img_fjords.jpg" />
</head>

<body>
    <!-- Content goes here -->
    <p>This is my
    <h1>here</h1>
    first heading

    <h2>This is my second heading</h2>
    <h3>This is my third heading</h3>
    <h4>This is my fourth heading</h4>
    <h5>This is my fifth heading</h5>
    <h6>This is my sixth heading</h6>

    <p>Lorem ipsum
        <b> dolor sit amet consectetur </b> adipisicing elit.
        <i> Est molestias temporibus natus esse nemo.
            Iure
            sed nihil </i>
        enim nulla in? Magni sit
        <u>
            exercitationem accusantium iure animi. Distinctio officiis totam voluptate pariatur
            odit sunt natus consequatur eligendi eos, iste labore quo tenetur aspernatur provident explicabo incidunt
            inventore! Ea quae libero accusamus, dolores numquam culpa atque laboriosam, quam recusandae qui nemo
            veritatis
        </u> cupiditate accusantium repudiandae tempore sit nobis animi in sed veniam expedita! Labore eaque porro id
        quos
        vitae sunt provident quisquam, dolore dolorem ipsa, nostrum tenetur mollitia. Eligendi cumque harum cupiditate
        quasi voluptatum deleniti illo ducimus aperiam inventore. Unde praesentium ullam illum autem libero aperiam
        ipsam maiores dolorem distinctio, maxime, perferendis expedita cumque iste atque repellat vitae delectus impedit
        itaque consectetur dolorum est maiores eos ea minus ad consequuntur sunt quia at voluptatum deleniti. Quas
        praesentium architecto delectus repellat fugiat?
    </p>

    <br />

    <h4>External Image</h4>
    <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="fjords" width="400" height="300" />
    <h4>Internal Image</h4>
    <img src="./img_fjords.jpg" alt="fjords" width="400" height="300" />

    <p>H <sub>2</sub>O</p>
    <p>H <sup>2</sup>O</p>

    <!-- Level of Tags -->
    <!--
        1. Block Tag
            eg : heading tag, div
        2. Inline Tag
            eg : i , u, b, strong, 
        3. Self Closing Tag
            eg : <br> <img> 
        4. Closing Tag
            eg : <p> </p>, <h1> </h1>,
        -->

    <!-- Here -->

    <!-- External Links -->
    <a href="https://www.google.com">Google</a>
    <!-- Internal Links -->
    <a href="./test.html">Test</a>

    <!-- 
        HTML Links
        1. Internal Links
        2. External Links

    -->
</body>

</html>
```

## End of Day -1
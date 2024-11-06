# Day - 2

HTML !

1. New folder inside, “Training Aditya” → **DayTwo**
2. New File name → “**index.html**”.
3. Topic for today!
    1. Table
    2. Listing
    3. Styles
    4. Division <div>
    5. Class, Id

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day - 2</title>

    <!-- Links of CSS Framework -->

    <!-- This is external CSS -->
    <!-- Create a file name styles.css inside the DayTwo Folder -->
    <link rel="stylesheet" href="./styles.css">

    <!-- This is Internal CSS -->
    <style>
        /* CSS GOES HERE */
        .iamblue {
            color: blue;
        }

        .iamgreen {
            color: green;
        }

        .iamred {
            color: purple;
        }

        .iamred {
            color: red;
        }
    </style>

</head>

<body>
    <!-- Table   -->
    <table border="1" style="width: 100%; text-align: center;">
        <thead>
            <tr style="background-color: red; color: white;">
                <th rowspan="2">S.N</th>
                <th colspan="3">Person Info</th>
                <th colspan="2">Contact Info</th>
            </tr>
            <tr style="background-color: blue;">
                <!-- <th rowspan="2">S.N</th> -->
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: green;">1</td>
                <td class="iamgreen">Aditi</td>
                <td>23</td>
                <td>Female</td>
                <td>India</td>
                <td>aditi@gmail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rahul</td>
                <td>25</td>
                <td>Male</td>
                <td>rahul@gmail.com</td>
                <td>India</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pratik</td>
                <td>22</td>
                <td>Male</td>
                <td>pratik@gmail.com</td>
                <td>India</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Nitin</td>
                <td>27</td>
                <td>Male</td>
                <td>nitin@gmail.com</td>
                <td>India</td>
            </tr>
        </tbody>
    </table>

    <!-- Listing -->
    <h5>Un Ordered List</h5>
    <!-- This is inline CSS too -->
    <ul style="list-style-type:square;">
        <li>Apple</li>
        <li>Mango</li>
        <li>Bananna</li>
        <li>Grapes</li>
    </ul>

    <h5>Ordered List</h5>
    <ol type="i">
        <li>Jan</li>
        <li>Feb</li>
        <li>Mar</li>
        <li>Apr</li>
    </ol>

    <!-- There are three types for writing STYLES -->
    <!-- 
        1. Inline CSS
        2. Internal CSS
        3. External CSS
     -->

    <div style="background-color: gray;">
        <h1 class="iamred">Hello World!</h1>
        <h1 class="iamblue">Biratnagar is my city</h1>
        <h1 class="iamgreen">Kathmandu is capital city of Nepal</h1>
    </div>

    <div style="background-color: hotpink;">

        <p class="iamred">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptatibus, natus quos
            sunt
            ipsam facere
            eligendi voluptate fuga officiis necessitatibus ipsum quaerat placeat, assumenda iusto tenetur qui quas id
            maiores!</p>

        <p class="iamblue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ut voluptas velit accusantium
            quis
            exercitationem
            delectus, quaerat perferendis quos maiores mollitia. Odit nihil cumque molestias quasi voluptate. Commodi
            error
            similique odio minima? Mollitia voluptate omnis neque earum! Nisi quaerat voluptate aperiam doloremque
            blanditiis pariatur distinctio officia error quis, excepturi sed!</p>

    </div>

</body>

</html>
```

# End of Day - 2
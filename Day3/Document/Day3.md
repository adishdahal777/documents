# Day 3

1. ID
2. Layout
3. IFrame
4. Form
    1. Attributes
        1. Type
        2. Name
        3. ID
        4. Class
        5. Style
        6. Placeholder
5. CSS Start
6. Basic JS

1. ID and Class
    
    Difference Between Class and id
    
    The main differences between class and id in HTML and CSS are:
    
    - Uniqueness: An id must be unique within a page, while a class can be used on multiple elements.
    - CSS Selector: Id is selected with '#' (e.g., #myId), while class is selected with '.' (e.g., .myClass).
    - JavaScript: getElementById() is used for id, while getElementsByClassName() is used for class.
    - Specificity: Id has a higher specificity than class in CSS, meaning styles applied to an id will override those applied to a class.
    - Usage: Id is typically used for unique elements, while class is used for styling multiple similar elements.
    

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3</title>
    <style>
        #firstId {
            color: white;
        }

        .firstClass {
            background-color: red;
        }
    </style>
</head>

<body>
    <div id="firstId" class="firstClass">
        <p>This is first paragraph</p>
    </div>
</body>

</html>
```

1. IFrame

```html
    <!-- IFrame -->
    <iframe width="1280" height="720" src="https://www.youtube.com/embed/2vKMY75kvjI?list=RD2vKMY75kvjI"
        title="Aankhon Se Batana – Dikshant | Viral Song 2022 | Official Video" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <iframe
        src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fadishdahal777%2Fvideos%2F118202967076154%2F&show_text=false&width=267&t=0"
        width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
        allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
        allowFullScreen="true"></iframe>
```

1. Form 

```html
    <form>
        <input type="text" name="full_name" id="full_name" placeholder="Enter you name" />
        <input type="number" name="phone_number" id="phone_number" placeholder="Enter your mobile number" />
        <input type="email" name="user_email" id="user_email" placeholder="Enter your Email" />
        <input type="password" name="password" id="password" placeholder="Enter your password" />
        <input type="date" name="date" id="date" />
        <input type="time" name="time" id="time" />
        <input type="color" name="color" id="color" />
        <input type="file" name="file" id="file" />
        <input type="datetime-local" name="datetime" id="datetime" />

        <label for="male">Male</label>
        <input type="radio" name="gender" id="gender" value="male">
        <label for="female">FeMale</label>
        <input type="radio" name="gender" id="gender" value="female">
        <label for="other">Other</label>
        <input type="radio" name="gender" id="gender" value="other">

        <!-- Check Box -->
        <br>
        <label for="food">Foods</label>
        <input type="checkbox" name="apple" id="apple"> Apple <br>
        <input type="checkbox" name="mango" id="mango"> Mango <br>

    </form>
```

```html
    <!-- Good Process for Creating a Form -->
    <form action="">

        <div>
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" placeholder="Enter your Full Name" />
        </div>
        <br>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your Email" />
        </div>
        <br>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your Password" />
        </div>
        <br>

        <div>
            <label for="password_confirm">Confirm Password</label>
            <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirm your Password" />
        </div>

        <div>
            <select name="semeseter" id="semeseter">
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="fourth">Fourth</option>
                <option value="fifth">Fifth</option>
            </select>
        </div>

        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
```

Create a new file name **formTable.html**

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day - 3 | Form Table</title>
</head>

<body>
    <a href="./index.html">Go Back</a>
    <!-- Horizontal Form -->
    <form action="">
        <table>
            <tbody>
                <tr>
                    <td><label for="full_name">Full Name</label></td>
                    <td>
                        <input type="text" name="full_name" id="full_name">
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="email" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>
                        <input type="password" name="password" id="password">
                    </td>
                </tr>

                <tr>
                    <td><label for="password_confirm">Confirm Password</label></td>
                    <td>
                        <input type="password" name="password_confirm" id="password_confirm">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <br><br><br><br><br>

    <!-- Vertial Form -->

    <form action="">
        <table>
            <tbody>
                <tr>
                    <td><label for="full_name">Full Name</label></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="full_name" id="full_name">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <br><br><br><br><br>

    <iframe src="./index.html" frameborder="0" height="500" width="100%"></iframe>
</body>

</html>
```

Task#1

![image.png](Day%203%20138960ad71f38083b787c9af7937ea1b/image.png)

#Task2

![image.png](Day%203%20138960ad71f38083b787c9af7937ea1b/image%201.png)
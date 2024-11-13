# Day 4

Topics for today:

1. Selector 
2. Basic CSS Properties 
    1. Text - CSS ( Font CSS )
    2. Background - CSS 
    3. Border
    4. Shadow
    5. Image
    6. Form
    7. Table
    8. Links
    9. List
    10. Positions
3. Variables 
4. Display
5. Flex - Layout
6. Grid - Layout

1. Selectors 
    1. Class Selector → ( . ) 
    2. ID Selector → ( # )
    3. Tag Selector → Html Tag Name
    4. Universal Selector → ( * )
    5. Attribute Selector → [attribute="value"]

1. Whole Properties in one Single Code.
    
    ```html
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Day - 4 | CSS</title>
        <style>
            /* Universal Selector */
    
            * {
                margin: 0;
                padding: 0;
            }
    
            /* For Navigation Bar */
            nav {
                background-color: blue;
                color: white;
                padding: 20px;
                margin-bottom: 20px;
                /* margin: 20px; */
                /* border: 2px solid black; */
            }
    
            nav>ul {
                list-style-type: none;
                display: flex;
                gap: 10px;
                justify-content: space-evenly;
            }
    
            nav>ul>li>a {
                color: white;
                text-decoration: none;
            }
    
            /* Body or Main Container */
            .container {
                display: flex;
                flex-direction: column;
                padding: 50px;
                gap: 100px;
            }
    
            /* CSS Listing and FLexbox */
            .listing {
                display: flex;
                gap: 20px;
            }
    
            .listing>div {
                display: flex;
                min-width: 500px;
                max-width: 600px;
                flex-direction: column;
            }
    
            .listing>div>ol {
                margin-left: 20px;
            }
    
            .listing>div>h2,
            .table_container>h2,
            .form_style>h2 {
                background-color: blueviolet;
                color: white;
                padding: 5px;
                border-radius: 3px;
                margin-bottom: 20px;
            }
    
            /* HtmL TAbles */
            /* .table_container {} */
    
            .table_container>table {
                width: 100%;
            }
    
            .table_container>table,
            td,
            th {
                border: 1px solid lightgray;
                border-collapse: collapse;
                border-radius: 2px;
                padding: 10px;
                text-align: center;
            }
    
            .table_container>table>thead>tr>th {
                background-color: lightblue;
                color: white;
                font-size: 26px;
            }
    
            /* Form Style */
    
            .form_style>form>div {
                display: flex;
                flex-direction: column;
                margin-bottom: 15px;
            }
    
            .form_style>form>div>label {
                margin-bottom: 5px;
                color: gray;
                text-transform: capitalize;
                letter-spacing: 2px;
                font-weight: bold;
            }
    
            .form_style>form>div>input {
                padding: 8px;
                outline: none;
                border-radius: 5px;
                border: 1px solid gray;
                font-size: 18px;
            }
    
            .form_style>form>div>small {
                color: red;
                display: none;
            }
    
            .form_style>form>div>input:focus {
                outline: 1px solid green;
            }
    
            .form_style>form>div>textarea {
                padding: 8px;
                outline: none;
                border-radius: 5px;
                border: 1px solid gray;
                font-size: 18px;
                height: 100px;
            }
    
            .form_style>form>button {
                padding: 8px;
                width: 100%;
                background-color: green;
                color: white;
                border: 1px solid green;
                cursor: pointer;
                /* for animation */
                transition: all 0.3s ease-in-out;
            }
    
            /* While hovering on the button */
            .form_style>form>button:hover {
                background-color: white;
                color: green;
                border: 1px solid green;
            }
        </style>
    </head>
    
    <body>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Faq</a></li>
            </ul>
        </nav>
        <main class="container">
            <div class="listing">
    
                <div>
                    <h2>English Month</h2>
                    <ol>
                        <li>January</li>
                        <li>February</li>
                        <li>March</li>
                        <li>April</li>
                        <li>May</li>
                        <li>June</li>
                        <li>July</li>
                        <li>August</li>
                        <li>September</li>
                        <li>October</li>
                        <li>November</li>
                        <li>December</li>
                    </ol>
                </div>
    
                <div>
                    <h2>Nepali Months</h2>
                    <ol>
                        <li>Baishakh</li>
                        <li>Jestha</li>
                        <li>Ashadh</li>
                        <li>Shrawan</li>
                        <li>Bhadra</li>
                        <li>Ashwin</li>
                        <li>Kartik</li>
                        <li>Mangsir</li>
                        <li>Poush</li>
                        <li>Magh</li>
                        <li>Falgun</li>
                        <li>Chaitra</li>
                    </ol>
                </div>
    
            </div>
            <div class="table_container">
                <h2>Table Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Salary</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>123 Main St, City, State, Zip</td>
                            <td>123-456-7890</td>
                            <td>$50,000</td>
                            <td>john.doe@example.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Doe</td>
                            <td>456 Elm St, City, State, Zip</td>
                            <td>987-654-3210</td>
                            <td>$60,000</td>
                            <td>jane.doe@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    
            <div class="form_style">
                <h2>Form Style</h2>
    
                <form action="">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name">
                        <small>Your name is required</small>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email">
                        <small>Your email is required</small>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                        <small>Your phone is required</small>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                        <small>Your password is required</small>
                    </div>
                    <div>
                        <label for="Address">Address</label>
                        <input id="Address" name="Address" placeholder="Enter your address">
                        <small>Your address is required</small>
                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Enter your message"></textarea>
                        <small>Your message is required</small>
                    </div>
                    <button>Submit</button>
                </form>
            </div>
    
        </main>
    </body>
    
    </html>
    ```
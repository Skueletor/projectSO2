<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="happydog.css">

    <title>HayDog</title>
</head>
<body>
    <div class="op" style="display: none;"></div>
    <header>
        <span>
            <p class="title">HayDog</p>
            <input type="text" placeholder="search">
        </span>
        <ul>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                </svg>
                <p>FAQ</p>
            </li>
            <li onclick="showItems()" style="display: none;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p class="totalCart"></p>
            </li>
            <li onclick="showLogin()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                </svg>
                <p class="login">Sign In</p>
            </li>
        </ul>
    </header>

    <div class="login-pop" style="display: none;">
        <span class="popup-title-displayer">
            <svg class="backicon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" onclick="chLogin()" style="display: none;">
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/>
            </svg>
            <p class="popup-title"></p>
        </span>
        
        <span class="popup-cnt-displayer">
            <span class="wlcm-displayer" style="display: none;">
                <span class="loginopt" onclick="loginemail()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 512 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg>
                    <p>Log In with E-mail</p>
                </span>
                <span class="loginopt">
                    <svg height="20" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 7.844v3.463h4.844a4.107 4.107 0 0 1-1.795 2.7v2.246h2.907c1.704-1.558 2.685-3.85 2.685-6.575 0-.633-.056-1.246-.162-1.83H9v-.004Z" fill="#3E82F1">
                        </path>
                        <path d="M9 14.861c-2.346 0-4.328-1.573-5.036-3.69H.956v2.323A9.008 9.008 0 0 0 9 18.42c2.432 0 4.47-.8 5.956-2.167l-2.907-2.247c-.804.538-1.835.855-3.049.855Z" fill="#32A753">
                        </path>
                        <path d="M3.964 5.456H.956a8.928 8.928 0 0 0 0 8.033l3.008-2.318a5.3 5.3 0 0 1-.283-1.699 5.3 5.3 0 0 1 .283-1.699V5.456Z" fill="#F9BB00">
                        </path>
                        <path d="m.956 5.456 3.008 2.317c.708-2.116 2.69-3.69 5.036-3.69 1.32 0 2.508.453 3.438 1.338l2.584-2.569C13.465 1.41 11.427.525 9 .525A9.003 9.003 0 0 0 .956 5.456Z" fill="#E74133">
                        </path>
                    </svg>
                    <p>Log In with Google</p>
                </span>
                <p>Don't have an account? <span class="highlighted" onclick="registershow()">Register Now</span></p>
            </span>

            <span class="login-form" style="display: none;">
                <form>
                    <span>
                        <p id="loginform-email">Email</p>
                        <input type="text" name="emaill" id="email" required>
                    </span>
                    <span>
                        <p id="loginform-password">Password</p>
                        <input type="password" name="password" id="password" required>
                    </span>
                    <input type="button" value="Login" onclick="processLogin()">
                </form>
                <p>Don't remember password? <span class="highlighted">Reset</span></p>
            </span>
            
            <span class="wlcm-register-displayer" style="display: none;">
                <form>
                    <span>
                        <p id="registerform-name">Name</p>
                        <input type="text" name="namee" id="reg-name" required>
                    </span>
                    <span>
                        <p id="registerform-email">Email</p>
                        <input type="text" name="emaill" id="reg-email" required>
                    </span>
                    <span>
                        <p id="registerform-password">Password</p>
                        <input type="password" name="password" id="reg-password" required>
                    </span>
                    <span>
                        <p id="registerform-repeatedpassword">Repeat Password</p>
                        <input type="password" name="password" id="reg-repeatedpassword" required>
                    </span>
                    <input type="button" value="Register" onclick="processRegister()">
                </form>
                <p>Already have an account? <span class="highlighted" onclick="chLogin()">Login Now</span></p>
            </span>

            <span class="cart-items-cnt" style="display: none";>
                <div class="cart-items-show" id="cart-container">
                    <div class="cart-item">
                        <span class="cart-img-cnt">
                            <img src="items/1.png">
                        </span>
                        <span class="cart-item-cnt">
                            <p class="cart-item-title">Item1</p>
                            <p class="cart-item-units">Units: 4</p>
                        </span>
                        <span class="cart-item-remove-cnt">
                            <p class="cart-item-total">$39,00</p>
                        </span>
                    </div>
                </div>
                <span class="cart-items-prof">
                    <p class="cart-total-cost"></p>
                    <button class="cart-buynow">Buy Now</button>
                </span>
            </span>
        </span>
    </div>

    <section class="welcm-displayer">
        <p class="sec-tit">
        Unleash Your    <br>
        Dog's Fashion   <br>
        Potential.    
        </p>
        <img src="dog.png" alt="dog">
    </section>
    <section class="item-displayer" style="height: 60vw;">
        <div class="item" data-itemIndex="1">
            <div class="top-item">
                <img src="items/item1.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="2">
            <div class="top-item">
                <img src="items/item2.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="3">
            <div class="top-item">
                <img src="items/item3.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="4">
            <div class="top-item">
                <img src="items/item4.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="5">
            <div class="top-item">
                <img src="items/item5.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="6">
            <div class="top-item">
                <img src="items/item6.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="7">
            <div class="top-item">
                <img src="items/item7.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="8">
            <div class="top-item">
                <img src="items/item8.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
        <div class="item" data-itemIndex="9">
            <div class="top-item">
                <img src="items/item9.png">
            </div>
            <div class="sub-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                </svg>
                <p>Buy Now</p>
            </div>
        </div>
    </section>
    <div class="morecn-cnt">
        <span class="hov">
            <p onclick="seeall()">See More</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/>
            </svg>
        </span>
    </div>
    <section class="register-user-displayer">
        <p class="register-title">SIGN UP</p>
        <span>
            <p class="input-title">Email</p>
            <input type="text" placeholder="your@email.com">
        </span>
        <span>
            <p class="input-title">Password</p>
            <input type="password">
        </span>
        <p class="reg-alr">Already have an account? <a href="login">Click here</a></p>
    </section>
    <section class="rev">
        <div class="review">
            <span class="rev-top">
                <img class="rev-pic" src="kid.png">
                <span class="rev-infos">
                    <p class="rev-name">Roman39</p>
                    <span class="rev-valutation">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M288 0c-12.2 .1-23.3 7-28.6 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3L288 439.8V0zM429.9 512c1.1 .1 2.1 .1 3.2 0h-3.2z"/>
                        </svg>                        
                    </span>
                </span>
                <svg class="rev-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
                </svg>
            </span>
            <span class="rev-desc-cnt">
                <p class="rev-cnt">
                    Absolutely adore these doggy outfits! Stylish, comfy, and my pup looks like a fashion icon. The quality is superb, and the sizing is perfect. Can't wait to order more
                </p>
            </span>
            <span class="rev-likes">
                <svg class="liked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M313.4 479.1c26-5.2 42.9-30.5 37.7-56.5l-2.3-11.4c-5.3-26.7-15.1-52.1-28.8-75.2H464c26.5 0 48-21.5 48-48c0-18.5-10.5-34.6-25.9-42.6C497 236.6 504 223.1 504 208c0-23.4-16.8-42.9-38.9-47.1c4.4-7.3 6.9-15.8 6.9-24.9c0-21.3-13.9-39.4-33.1-45.6c.7-3.3 1.1-6.8 1.1-10.4c0-26.5-21.5-48-48-48H294.5c-19 0-37.5 5.6-53.3 16.1L202.7 73.8C176 91.6 160 121.6 160 153.7V192v48 24.9c0 29.2 13.3 56.7 36 75l7.4 5.9c26.5 21.2 44.6 51 51.2 84.2l2.3 11.4c5.2 26 30.5 42.9 56.5 37.7zM32 384H96c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H32C14.3 96 0 110.3 0 128V352c0 17.7 14.3 32 32 32z"/>
                </svg>
            </span>
        </div>
        <div class="review">
            <span class="rev-top">
                <img class="rev-pic" src="granny.png">
                <span class="rev-infos">
                    <p class="rev-name">Sissy91</p>
                    <span class="rev-valutation">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                    </span>
                </span>
                <svg class="rev-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
                </svg>
            </span>
            <span class="rev-desc-cnt">
                <p class="rev-cnt">
                    These canine clothes are a game-changer! Trendy designs, easy to put on, and my dog seems to love them too. The fabric is top-notch, and the attention to detail is impressive. A must-buy for pet fashion enthusiasts!
                </p>
            </span>
            <span class="rev-likes">
                <svg class="liked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M313.4 479.1c26-5.2 42.9-30.5 37.7-56.5l-2.3-11.4c-5.3-26.7-15.1-52.1-28.8-75.2H464c26.5 0 48-21.5 48-48c0-18.5-10.5-34.6-25.9-42.6C497 236.6 504 223.1 504 208c0-23.4-16.8-42.9-38.9-47.1c4.4-7.3 6.9-15.8 6.9-24.9c0-21.3-13.9-39.4-33.1-45.6c.7-3.3 1.1-6.8 1.1-10.4c0-26.5-21.5-48-48-48H294.5c-19 0-37.5 5.6-53.3 16.1L202.7 73.8C176 91.6 160 121.6 160 153.7V192v48 24.9c0 29.2 13.3 56.7 36 75l7.4 5.9c26.5 21.2 44.6 51 51.2 84.2l2.3 11.4c5.2 26 30.5 42.9 56.5 37.7zM32 384H96c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H32C14.3 96 0 110.3 0 128V352c0 17.7 14.3 32 32 32z"/>
                </svg>
            </span>
        </div>
        <div class="review">
            <span class="rev-top">
                <img class="rev-pic" src="man.png">
                <span class="rev-infos">
                    <p class="rev-name">Alejandro</p>
                    <span class="rev-valutation">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                    </span>
                </span>
                <svg class="rev-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
                </svg>
            </span>
            <span class="rev-desc-cnt">
                <p class="rev-cnt">
                    Impressed with the dog apparel! The range is diverse, from casual to chic. My furry friend stays both cozy and trendy. Great value for money. Quick delivery and excellent customer service. Highly recommend for pampering your pooch!
                </p>
            </span>
            <span class="rev-likes">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"/>
                </svg>
                <svg class="liked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M313.4 479.1c26-5.2 42.9-30.5 37.7-56.5l-2.3-11.4c-5.3-26.7-15.1-52.1-28.8-75.2H464c26.5 0 48-21.5 48-48c0-18.5-10.5-34.6-25.9-42.6C497 236.6 504 223.1 504 208c0-23.4-16.8-42.9-38.9-47.1c4.4-7.3 6.9-15.8 6.9-24.9c0-21.3-13.9-39.4-33.1-45.6c.7-3.3 1.1-6.8 1.1-10.4c0-26.5-21.5-48-48-48H294.5c-19 0-37.5 5.6-53.3 16.1L202.7 73.8C176 91.6 160 121.6 160 153.7V192v48 24.9c0 29.2 13.3 56.7 36 75l7.4 5.9c26.5 21.2 44.6 51 51.2 84.2l2.3 11.4c5.2 26 30.5 42.9 56.5 37.7zM32 384H96c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H32C14.3 96 0 110.3 0 128V352c0 17.7 14.3 32 32 32z"/>
                </svg>
            </span>
        </div>
    </section>
    <footer>
        <span class="fot-cnt">
            <p>Email: haydog@email.com</p>
            <p>Number: +1 234 5678</p>
            <p>F.A.Q</p>
            <p>Help</p>
        </span>
        <span class="fot-cnt">
            <p>Legal</p>
            <p>Credits</p>
            <p>About Us</p>
            <p>More</p>
        </span>
    </footer>

    <script>

        var isLogged = false;
        var userId;
        var totalCost;

        var items = {
            item1: "items/1.png",
            item1: "items/2.png",
            item1: "items/3.png",
            item1: "items/4.png",
            item1: "items/5.png",
            item1: "items/6.png",
            item1: "items/7.png",
            item1: "items/8.png",
            item1: "items/9.png"
        };

        var cart = {}

        document.querySelectorAll('.item').forEach(function (element) {
            element.addEventListener('click', addItem);
        })

        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }

        function bresh() {
            document.querySelector('body').style.overflow = 'auto';
            document.querySelector('.op').style.display = 'none';
            document.querySelector('.login-pop').style.display = 'none';

            document.querySelector('.wlcm-displayer').style.display = 'none';
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.wlcm-register-displayer').style.display = 'none';
            document.querySelector('.backicon').style.display = 'none';

            if (document.querySelector('.cart-items-cnt').style.display !== 'none') {
                document.querySelectorAll('.cart-item').forEach(function(item) {
                    item.style.display = 'none';
                })
            }

            document.querySelector('.cart-items-cnt').style.display = 'none';
        }

        document.querySelector('.op').addEventListener('click', function() {
            bresh()
        })

        let lastScrollPosition = window.pageYOffset;
        window.addEventListener('scroll', function() {
            const currentScrollPosition = window.pageYOffset;

            if (currentScrollPosition > lastScrollPosition) {
                //down
                if (currentScrollPosition > 150) {
                    document.querySelector('header').style.background = 'yellowgreen'
                    document.querySelector('header').style.height = '5vh'
                    document.querySelector('header').style.borderBottom = '1px solid black'
                
                }
            } else if (currentScrollPosition <= 150) { 
            
                    document.querySelector('header').style.background = 'none'
                    document.querySelector('header').style.height = '7vh'
                    document.querySelector('header').style.borderBottom = 'none'
                }

            lastScrollPosition = currentScrollPosition;
        })

        function chLogin() {
            document.querySelector('.backicon').style.display = 'none';
            document.querySelector('.login-form').style.display = 'none';
            document.querySelector('.wlcm-register-displayer').style.display = 'none';
            document.querySelector('.wlcm-displayer').style.display = 'flex';
            document.querySelector('.popup-title').innerHTML = 'Login';
        }

        function showLogin() {

            if (!isLogged) {
                document.querySelector('body').style.overflow = 'hidden';
                document.querySelector('.op').style.display = 'block';
                document.querySelector('.login-pop').style.display = 'block';
                document.querySelector('.popup-title').innerHTML = 'Login'
                chLogin()
            
            }
        }

        function loginemail() {
            document.querySelector('.wlcm-displayer').style.display = 'none';
            document.querySelector('.login-form').style.display = 'flex';
            document.querySelector('.backicon').style.display = 'block';
        }

        function registershow() {
            document.querySelector('.popup-title').innerHTML = 'Register';
            document.querySelector('.wlcm-displayer').style.display = 'none';
            document.querySelector('.wlcm-register-displayer').style.display = 'flex';
        }

        function seeall() {
            if (document.querySelector('.item-displayer').style.height === '60vw') {
                document.querySelector('.item-displayer').style.height = '90vw';
                setTimeout(() => {
                    document.querySelector('.hov svg').innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>';
                    document.querySelector('.hov p').innerHTML = 'Less';
                }, 300)
            } else {
                document.querySelector('.item-displayer').style.height = '60vw';
                setTimeout(() => {
                    document.querySelector('.hov svg').innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>';
                    document.querySelector('.hov p').innerHTML = 'See More';
                }, 300)
            }
        }

        function processRegister() {
            var name = document.getElementById('reg-name').value;
            var email = document.getElementById('reg-email').value;
            var password = document.getElementById('reg-password').value;
            var repeatedPassword = document.getElementById('reg-repeatedpassword').value;

            if (!name || !email || !password || !repeatedPassword) {
                console.log("Si prega di compilare tutti i campi.");
                return;
            }

            if (password !== repeatedPassword) {
                console.log("Le password non corrispondono.");
                return;
            }

            var formData = new FormData();
            formData.append("name", name);
            formData.append("email", email);
            formData.append("password", password);
            formData.append("repeatedPassword", repeatedPassword);

            fetch('addons/signUp.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                chLogin();
            })
            .catch(error => console.error('Errore:', error));
        }

        function processLogin() {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            var formData = new FormData();
            formData.append("email", email);
            formData.append("password", password);

            fetch('addons/signIn.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === "success") {
                    bresh();
                    cart = data["cartDetails"];
                    totalCost = data["totalCost"];
                    loginSucces(data);
                } else {
                    console.log('Utente non in db');
                }
            })
            .catch(error => console.error('Errore:', error));
        }

        function loginSucces(data) {
            isLogged = true;
            userId = data["id"];
            document.querySelector('header ul li:nth-child(2) p').innerHTML = '$' + data["totalCost"] + ',00';
            document.querySelector('header ul li:nth-child(2)').style.display = 'flex';
            document.querySelector('header ul li:last-child').innerHTML = '<p class="user-nick">' + data['name'] + '</p>';
        }

        function addItem(event) {

            if (isLogged) {
                var clickedItem = event.currentTarget;
                var itemIndex = clickedItem.getAttribute('data-itemIndex');

                formData = new FormData();
                formData.append("userId", userId);
                formData.append("itemIndex", itemIndex);

                fetch('addons/cart.php', {
                    method: 'POST',
                    body: formData
                })

                .then(response => response.json())
                .then(data => {

                    cart = data["cartDetails"];
                    totalCost = data["totalCost"];
                    document.querySelector('header ul li:nth-child(2) p').innerHTML = '$' + data.totalCost + ',00';  // Spesa totale
                })
                .catch(error => console.error('Errore durante la richiesta:', error));
            }
        }

        function showItems() {
            
            if (isLogged) {
                document.querySelector('body').style.overflow = 'hidden';
                document.querySelector('.op').style.display = 'block';
                document.querySelector('.login-pop').style.display = 'block';
                document.querySelector('.popup-title').innerHTML = 'Cart Items';
                document.querySelector('.cart-items-cnt').style.display = 'block';

                cart.forEach(item => {
                    var itemImage = document.createElement("img");
                    itemImage.src = "items/" + item.item + ".png";

                    var imgContainer = document.createElement("span");
                    imgContainer.classList.add("cart-img-cnt");
                    imgContainer.appendChild(itemImage);

                    var itemTitle = document.createElement("p");
                    itemTitle.classList.add("cart-item-title");
                    itemTitle.textContent = item.item;

                    var itemUnits = document.createElement("p");
                    itemUnits.classList.add("cart-item-units");
                    itemUnits.textContent = "Units: " + item.quantity;

                    var itemContent = document.createElement("span");
                    itemContent.classList.add("cart-item-cnt");
                    itemContent.appendChild(itemTitle);
                    itemContent.appendChild(itemUnits);

                    
                    var itemRemove = document.createElement("p");
                    var itemRemoveContent = document.createElement("span");
                    itemRemoveContent.classList.add("cart-item-remove");
                    itemRemoveContent.appendChild(itemRemove);
                    itemRemove.textContent = "remove";
                    itemRemove.onclick = removeItem;

                    var cartItem = document.createElement("div");
                    cartItem.classList.add("cart-item");

                    var itemIndex = item.item.replace("item", "");
                    cartItem.dataset.itemIndex = itemIndex;
                    
                    cartItem.appendChild(imgContainer);
                    cartItem.appendChild(itemContent);
                    cartItem.appendChild(itemRemoveContent);

                    var cartContainer = document.getElementById("cart-container");
                    cartContainer.appendChild(cartItem);
                });

                document.querySelector('.cart-total-cost').innerHTML = 'Total Cost: $' + totalCost + ',00';
            }
        }

        function removeItem() {            
            var itemDiv = this.parentElement.parentElement;
            var itemIndex = this.parentElement.parentElement.dataset.itemIndex;

            formData = new FormData();
            formData.append("userId", userId);
            formData.append("itemIndex", itemIndex);

            fetch('addons/cartRemove.php', {
                method: 'POST',
                body: formData
            })

            .then(response => response.json())
            .then(data => {
                cart = data["cartDetails"];
                totalCost = data["totalCost"];
                document.querySelector('header ul li:nth-child(2) p').innerHTML = '$' + data.totalCost + ',00';
                document.querySelector('.cart-total-cost').innerHTML = '$' + data.totalCost + ',00';

                itemDiv.remove()
            })
            .catch(error => console.error('Errore durante la richiesta:', error));
            

        }

    </script>

</body>
</html>
<style>
     /* Footer */
 
 .footer {
     position: relative;
     width: 100%;
     min-height: 100px;
     padding: 20px 50px;
     display: flex;
     justify-content: center;
     align-items: center;
     flex-direction: column;
 }
 
 .social-icon,
 .menu {
     position: relative;
     display: flex;
     justify-content: center;
     align-items: center;
     margin: 10px 0;
     flex-wrap: wrap;
 }
 
 .social-icon__item,
 .menu__item {
     list-style: none;
 }
 
 .social-icon__link {
     font-size: 2rem;
     color: var(--text-color);
     margin: 0 10px;
     display: inline-block;
     transition: 0.5s;
 }
 
 .social-icon__link:hover {
     transform: translateY(-10px);
     color: var(--main-color);
 }
 
 .menu__link {
     font-size: 1.2rem;
     color: var(--text-color);
     margin: 0 10px;
     display: inline-block;
     transition: 0.5s;
     text-decoration: none;
     opacity: 0.75;
     font-weight: 300;
 }
 
 .menu__link:hover {
     opacity: 1;
     color: var(--main-color);
 }
 
 .footer p {
     color: var(--text-color);
     margin: 15px 0 10px 0;
     font-size: 1rem;
     font-weight: 300;
 }
</style>
<!-- Footer -->
<footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>
            <li class="social-icon__item">
                <a class="social-icon__link" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#">About</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Manage</a></li>

        </ul>
        <p>&copy;2022 Emerald Bay Inn | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- footer start -->
<footer class="footer-global">
    <div class="container-fluid">
        <p>Copyright © <?= date('Y'); ?> SANNIN STUDIO All Rights Reserved</p>
    </div>
</footer>

<!-- menu toogle start -->
<div class="sidebar main left" id="sidebar-left" data-sidebar-left="closed" style="position: fixed; top: 0px; bottom: 0px; width: 375px; z-index: 3000; left: -375px;">
    <div class="sidebar__wrapper">
        <div class="d-flex justify-content-between align-items-center p-3 text-white header-toogle-left">
            <div>
                <a id="sidebar-close" href="#"><svg class="svg-inline--fa fa-times fa-w-11 text-white" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                    </svg><!-- <i class="fa fa-times text-white" aria-hidden="true"></i> Font Awesome fontawesome.com --></a>
            </div>
            <!-- <div class="font-weight-bold h3 m-0">MENU</div> -->
        </div>
        <ul id="accordion" class="accordion sidebar__list">
            <li class="sidebar__item"><a href="<?= base_url('portal'); ?>">NEWS</a></li>
            <li class="sidebar__item"><a href="#">CLIENT</a></li>
            <li class="sidebar__item"><a href="<?= base_url('portal/staff'); ?>">STAFF</a></li>
            <li class="sidebar__item"><a href="#">ABOUT US</a></li>
        </ul>
        <div class="sidebar__user">
            <img src="#">
            <p><a href="https://jkt48.com/login?lang=id">Login</a> | <a href="#">Register</a></p>
        </div>
        <div class="sidebar__language">
            <div>
                <a href="https://jkt48.com/news/list?lang=id"><img src="#"><span>INDONESIAN</span></a>
            </div>
            <div>
                <a href="https://jkt48.com/news/list?lang=jp"><img src="#"><span>日本語</span></a>
            </div>
        </div>
    </div>
</div>
<!-- menu toogle end -->

<script src="<?= base_url('assets/portal/'); ?>js/app.min.js"></script>
<script src="<?= base_url('assets/portal/'); ?>js/my-script.min.js"></script>


<div data-sidebar-left="mask" style="position: fixed; inset: 0px; z-index: 2999; display: none; background-color: rgb(0, 0, 0); opacity: 0.5;"></div>
</body>

</html>
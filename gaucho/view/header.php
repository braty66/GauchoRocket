<!-- Navbar (sit on top) -->
<div class="">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="http://localhost:63342/GauchoRocket/gaucho/index.php" class="w3-bar-item w3-button w3-wide">GauchoRocket<i class="fa fa-rocket"></i></a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="http://localhost:63342/GauchoRocket/gaucho/iniciarSesion.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> INICIAR SESIÓN</a>
            <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-suitcase-rolling"></i> TOUR</a>
            <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> RESERVAS</a>
            <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-suitcase"></i> VIAJES</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACTO</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#http://localhost:63342/GauchoRocket/gaucho/iniciarSesion.php" onclick="w3_close()" class="w3-bar-item w3-button">INICIAR SESIÓN</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">RESERVAS</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">VIAJES</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">TOUR</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACTO</a>
</nav>
<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>

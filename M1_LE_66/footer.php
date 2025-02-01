<nav class="fixed-bottom">
    <div class="container-fluid">
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </div>
</nav>
</body>
<script>
    document.querySelector(".menu-toggle").addEventListener("click", function() {
        document.querySelector(".nav-links").classList.toggle("active");
    });

    function openLightbox(img) {
        document.getElementById("lightbox-img").src = img.src;
        document.querySelector(".lightbox").classList.add("active");
    }

    function closeLightbox() {
        document.querySelector(".lightbox").classList.remove("active");
    }
</script>

</html>
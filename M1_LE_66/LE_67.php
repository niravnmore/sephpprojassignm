<?php include('navbar.php'); ?>

<!-- <p>Create a responsive navigation bar using HTML and CSS.</p> -->
<main>

    <h2>Image Gallery</h2>
    <div class="gallery">
        <img src="./images/image_01.jpg" alt="Image 1" onclick="openLightbox(this)">
        <img src="./images/image_02.jpg" alt="Image 2" onclick="openLightbox(this)">
        <img src="./images/image_03.jpg" alt="Image 3" onclick="openLightbox(this)">
        <img src="./images/image_04.jpg" alt="Image 4" onclick="openLightbox(this)">
        <img src="./images/image_05.jpg" alt="Image 5" onclick="openLightbox(this)">
    </div>
    <div class="lightbox" onclick="closeLightbox()">
        <img id="lightbox-img" src="" alt="">
    </div>
</main>

<?php include('footer.php'); ?>
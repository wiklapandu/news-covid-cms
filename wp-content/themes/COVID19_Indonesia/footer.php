<!-- Modal Search -->
<div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="d-flex ms-auto" role="search" method="GET" action="<?php bloginfo('url'); ?>" id="searchform">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s" id="s">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".thumbnails", {
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,
    });
</script>
<script>
    document.querySelectorAll('.nav-item>a').forEach(item => {
        if (item.href == window.location.href) {
            item.classList.toggle('active')
        }
    })
    document.querySelectorAll('.thumb-title').forEach(item => {
        item.innerHTML = `${item.innerHTML}`.split(' ').slice(0, 55).join(' ') + '...';
    })
    document.querySelectorAll('.thumb-title2').forEach(item => {
        item.innerHTML = `${item.innerHTML}`.split(' ').slice(0, 8).join(' ') + '...';
    })
</script>
</body>

</html>
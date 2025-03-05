<footer>
</footer>
<!-- End tag for bg class -->
</div>
</body>

<!-- Flickity JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script>
    const nav = document.getElementById('nav');

    window.addEventListener('scroll', () => {
        if (window.scollY > 10) {
            nav.classList.add('navShrink');
        } else {
            nav.classList.remove('navShrink');
        }

    });
</script>
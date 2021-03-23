    <script src="<?=BASEURL?>/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    var url = window.location.href;
    $(document).ready(function() {
    // $('a.active').removeClass('active');
    $('a[href="' + url + '"]').addClass('active'); 
    });
    </script>
    <script src="<?=BASEURL?>/js/script.js"></script>
</body>
</html>
<script>
    function openMobileMenu() {
        this.isMobileMenuActive = true;
        if (window.innerWidth > 667) {
            $('#mobileMenuWrapper').width('300px');
            $('html, body').css('overflowY', 'hidden');
        } else {
            $('#mobileMenuWrapper').width('60vw');
            $('html, body').css('overflowY', 'hidden');
        }
    }

    function closeMobileMenu() {
        $('#mobileMenuWrapper').width('0');
        $('html, body').css('overflowY', 'auto');
        this.isMobileMenuActive = false;
    }
</script>

@notifyJs

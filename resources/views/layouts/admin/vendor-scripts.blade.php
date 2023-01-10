
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenujs/metismenujs.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Vector map-->
<script src="{{asset('assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- swiper js -->
<script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>

<script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script>
    function copyToClipboard(e) {
        alert('copy')
        var tempItem = document.createElement('input');

        tempItem.setAttribute('type','text');
        tempItem.setAttribute('display','none');

        let content = e;
        if (e instanceof HTMLElement) {
            content = e.innerHTML;
        }

        tempItem.setAttribute('value',content);
        document.body.appendChild(tempItem);

        tempItem.select();
        document.execCommand('Copy');

        tempItem.parentElement.removeChild(tempItem);
    }
</script>

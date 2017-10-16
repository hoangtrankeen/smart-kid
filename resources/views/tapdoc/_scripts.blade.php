<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="assets/js/modernizr-latest.js"></script> 
<script type='text/javascript' src='{{asset('assets/js/jquery.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/js/fancybox/jquery.fancybox.pack.js')}}'></script>

<script type='text/javascript' src='{{asset('assets/js/jquery.mobile.customized.min.js')}}'></script>
<script type='text/javascript' src='{{asset('assets/js/jquery.easing.1.3.js')}}'></script> 
<script type='text/javascript' src='{{asset('assets/js/camera.min.js')}}'></script> 
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
    jQuery(function(){
        
        jQuery('#camera_wrap_4').camera({
            transPeriod: 500,
            time: 3000,
            height: '600',
            loader: 'false',
            pagination: true,
            thumbnails: false,
            hover: false,
            playPause: false,
            navigation: false,
            opacityOnGrid: false,
            imagePath: '{{asset('assets/images/')}}'
        });

    });
    
</script>
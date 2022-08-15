<!DOCTYPE html>
<html>

<head>
    <title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="<?php echo e(asset('/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!-- <link href="<?php echo e(asset('/css/bootstrap.rtl.css')); ?>" rel="stylesheet" type="text/css" media="all" /> -->
    <link href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo e(asset('/css/font-awesome.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(url('/js/jquery-1.11.1.min.js')); ?>"></script>
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo e(url('/js/move-top.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('/js/easing.js')); ?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>
<body style="direction: rtl; font-family:'Tahoma';">


    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/minicart.min.js"></script>
    <script>
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>
    <script src="<?php echo e(url('js/skdslider.min.js')); ?>"></script>
    <script src="<?php echo e(url('js/script.js')); ?>"></script>
    <link href="<?php echo e(asset('/css/skdslider.css')); ?>" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
</body>

</html><?php /**PATH C:\wamp\www\OnlineShop-Laravel\resources\views/template.blade.php ENDPATH**/ ?>
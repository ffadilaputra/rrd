        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/libs/jquery.dataTables.js"></script>
        <script src="assets/js/libs/dataTables.bootstrap.js"></script>
        <script src="assets/js/libs/tether.min.js"></script>
        <script src="assets/js/libs/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#main').DataTable();
            });
        </script>

        <script>
        function verticalAlignMiddle()
        {
            var bodyHeight = $(window).height();
            var formHeight = $('.vamiddle').height();
            var marginTop = (bodyHeight / 2) - (formHeight / 2);
            if (marginTop > 0)
            {
                $('.vamiddle').css('margin-top', marginTop);
            }
        }
        $(document).ready(function()
        {
            verticalAlignMiddle();
        });
        $(window).bind('resize', verticalAlignMiddle);
        </script>
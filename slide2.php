<script src="jQuery/jquery-1.4.4.min.js" type="text/javascript"></script>
    <link href="CSS/vscroller.css" rel="stylesheet" type="text/css" />
    <script src="jQuery/vscroller.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#vscroller').vscroller({ newsfeed: 'news.xml' });
        });
    </script>
    <style type="text/css">
        body
        {
            margin: 0;
            padding: 0;
			background-color:#fff;
            font-family: Arial;
        }
       
    </style>

    <div class="news-wrapper" id="vscroller">
    </div>
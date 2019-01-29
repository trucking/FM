<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.min.js"></script>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.10&key=61c083644c3edd106cf4cf03a065bbd0"></script>
    <title></title>
    <style>

        #container {
            width: 500px;
            height: 500px;
        }
    </style>
</head>
<body>
    <form action="/fm/admin.php/index/stationAddTo" method="post">
        站点名称：<input type="text" name="stationName" id="name">
        <p>站点坐标：<input type="text" name="stationCoordinate" id="test"> </p>
        <p><input type="submit" value="确定"></p>
    </form>
    <div id="container"></div>
    <script>
        $(document).ready(function(){

            var map = new AMap.Map('container',{
                zoom : 14,

                viewMode : '2D'
            });
            map.on('click', function(e) {
                //alert(e.lnglat.getLng()+','+e.lnglat.getLat());
                $("#test").val(e.lnglat.getLng()+','+e.lnglat.getLat());
                var mark = new Amap.mark({
                    position : new Amap.LngLat(e.lnglat.getLng(),e.lnglat.getLat()),
                    title : $("#name").val()
                });
                map.add(mark);
            });
        });
    </script>
</body>

</html>
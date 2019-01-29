<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>

        #container {
            width: 1000px;
            height: 500px;
        }
    </style>
    <title></title>
    <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.min.js"></script>
    <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.10&key=61c083644c3edd106cf4cf03a065bbd0"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var map = new AMap.Map('container',{
                zoom : 14,

                viewMode : '2D'
            });

            //将左边数据移动到右边
            $("#right").click(function(){
                //将左边option中选中的值赋给vSelect变量
                var vSelect=$("#leftSelect option:selected");
                var position=$("#leftSelect option:selected").attr("position");
                var posArr = position.split(',');
                lng = posArr[0];
                lat = posArr[1];

                var marker = new AMap.Marker({
                    position: new AMap.LngLat(lng,lat),   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
                    title: '测试'
                });
                map.add(marker);
                //将数据添加到rightSelect中
                vSelect.clone().appendTo("#rightSelect");
                //同时删除leftSelect中的数据
                vSelect.remove();
            });

            //将右边数据移动到左边
            $("#left").click(function(){
                var vSelect=$("#rightSelect option:selected");
                //将右边的数据追加到左边列表中
                vSelect.clone().appendTo("#leftSelect");

                vSelect.remove();
            });

            //将左边全部数据移到右边
            $("#rightAll").click(function(){
                $("#rightSelect").append($("#leftSelect>option"));
                $("#leftSelect>option").remove();
            });

            //将右边数据全部移到左边
            $("#leftAll").click(function(){
                $("#leftSelect").append($("#rightSelect>option"));
                $("#rightSelect>option").remove();
            });
            var all = "";
            $("#testbtn").click(function(){

                //alert($("#rightSelect").val());
                $.post(
                        "/fm/admin.php/Index/lineAddTo",
                        {
                            name : $("#name").val(),
                            line : $("#rightSelect").val()
                        },
                        function(data){
                            alert(data);
                        }
                );
            });
        });

    </script>
</head>
<body>
<p>线路名称<input type="text" id="name"> </p>
<p>

    <select id="leftSelect" multiple="multiple">
        <?php if(is_array($result)): foreach($result as $key=>$test): ?><option value="<?php echo ($test["id"]); ?>" position="<?php echo ($test["long"]); ?>,<?php echo ($test["lat"]); ?>"><?php echo ($test["name"]); ?></option><?php endforeach; endif; ?>
    </select>

    <input type="button"  id="right" value=">" />
    <input type="button"  id="rightAll" value=">>>" />
    <input type="button"  id="left" value="<" />
    <input type="button"  id="leftAll" value="<<<" />

    <select id="rightSelect" multiple="multiple">

    </select>
    <button id="testbtn">测试值</button>
</p>
<div id="container"></div>


</body>
</html>
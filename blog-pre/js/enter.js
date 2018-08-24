/**
 * Created by Administrator on 2018/8/19.
 */
$(function(){
    $("#enterbtn").click(function(){
        var usern=$(".username").val(),
            psw=$(".psw").val();
        $.ajax({
            motheds:"post",
            data:{
                nickname:usern,
                password:psw
            },
            url:"http://localhost/blog-pre/php/enteruser.php",
            success:function(data){
                var count=JSON.parse(data)[0].count;
                if(count>0)
                {
                    alert("ok enter");
                    $.ajax({
                        method:"post",
                        data:{"name":usern},
                        url:"http://localhost/blog-pre/php/selectUserInfo.php",
                        success:function(data){
                            //json.stringify json.parse 相反
                            document.cookie=null;
                            document.cookie=JSON.stringify(JSON.parse(data));//cookie用于存值，记录值，刷新不会丢失
                            location.href="index.html";//跳转页面
                        }
                    })
                }
            }
        })
    })
});
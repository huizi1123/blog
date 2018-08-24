/**
 * Created by Administrator on 2018/8/19.
 */
$(function(){
    $("#regest_user").click(function(){
        var usename=$('.usename').val();
        var sex=$('.sex:checked').val();
        var tel=$('.tel').val();
        var email=$('.email').val();
        var password=$('.password').val();
        var face="./image/face.jpg";
        //发送ajax请求 php文件 进行数据库的增加 user数据
        $.ajax({
            method:"post",
            data:{
                "nickname":usename,
                "tel":tel,
                "email":email,
                "sex":parseInt($(".sex:checked").val()),
                "password":password,
                "face":face
            },
            url:"http://localhost/blog-pre/php/insertuser.php",
            success:function(data){
                //返回数据的操作
                var status=JSON.parse(data).status;
                //console.log(data);
                if(status==2)
                {
                    alert("注册成功");
                    location.href="enter.html";//跳转页面
                }
            }
        })
    });
});

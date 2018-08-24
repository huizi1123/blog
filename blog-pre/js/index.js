/**
 * Created by Administrator on 2018/8/19.
 */
$(function(){
    var name=JSON.parse(document.cookie); //获取登录用户名
    //console.log(document.cookie);
    if(name!=""){
        $(".close").css("display","inline-block");
        $(".enter_d").css("display","none");
    }
    $(".nickname").html("您好,"+name[0].nickname+"欢迎回来！");
    $(".close").click(function () {
        document.cookie="";
        $(".nickname").html("您好，欢迎回来！");
        $(".close").css("display","");
        $(".enter_d").css("display","");
    })
});

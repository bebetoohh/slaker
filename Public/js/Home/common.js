// var signinTpl = "hello";
// $("#signin").on('click',function(){
// 	layer.open({
// 		  type: 1,
// 		  skin: 'layui-layer-rim', //加上边框
// 		  area: ['420px', '240px'], //宽高
// 		  content: signinTpl
// 		});
// })
// 
// 弹出登录框
$('#signin').on('shown.bs.modal', function () {
  $('#signinform').focus()
})
